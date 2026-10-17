import fs from 'node:fs';
import os from 'node:os';
import path from 'node:path';
import { spawnSync } from 'node:child_process';

const repo = process.cwd();

const files = {
    layout: path.join(repo, 'resources', 'views', 'layouts', 'app.blade.php'),
    home: path.join(repo, 'resources', 'views', 'inicio.blade.php'),
    aiChat: path.join(repo, 'resources', 'views', 'components', 'ai-chatbot.blade.php'),
    clickChat: path.join(repo, 'resources', 'views', 'components', 'click-to-chat.blade.php'),
    inputCss: path.join(repo, 'resources', 'css', 'app.css'),
    outputCss: path.join(repo, 'resources', 'css', 'home-critical.generated.css'),
    tailwindConfig: path.join(repo, 'tailwind.config.js'),
    tailwindCli: path.join(repo, 'node_modules', 'tailwindcss', 'lib', 'cli.js'),
};

for (const [name, file] of Object.entries(files)) {
    if (name === 'outputCss') {
        continue;
    }

    if (!fs.existsSync(file)) {
        throw new Error(`Missing ${name}: ${file}`);
    }
}

const layout = fs.readFileSync(files.layout, 'utf8');
const home = fs.readFileSync(files.home, 'utf8');
const aiChat = fs.readFileSync(files.aiChat, 'utf8');
const clickChat = fs.readFileSync(files.clickChat, 'utf8');

function sliceBetween(source, startMarker, endMarker, label) {
    const start = source.indexOf(startMarker);

    if (start === -1) {
        throw new Error(`${label}: start marker not found`);
    }

    const end = source.indexOf(endMarker, start);

    if (end === -1 || end <= start) {
        throw new Error(`${label}: end marker not found`);
    }

    return source.slice(start, end);
}

const layoutCritical = sliceBetween(
    layout,
    '<!-- Sección de contacto superior',
    '<!-- Contenido principal -->',
    'layout critical region',
);

const heroMarker = 'HERO SECTION (LCP optimizado)';
const heroMarkerIndex = home.indexOf(heroMarker);

if (heroMarkerIndex === -1) {
    throw new Error('home: HERO SECTION marker not found');
}

const homeStart = home.lastIndexOf('{{--', heroMarkerIndex);

if (homeStart === -1) {
    throw new Error('home: opening Blade comment before hero not found');
}

const secondSectionMarker = home.indexOf(
    'SEGUNDA SECCIÓN',
    heroMarkerIndex,
);

if (secondSectionMarker === -1) {
    throw new Error('home: SEGUNDA SECCIÓN marker not found');
}

const homeEnd = home.lastIndexOf(
    '{{--',
    secondSectionMarker,
);

if (homeEnd === -1 || homeEnd <= homeStart) {
    throw new Error('home: second section opening marker not found');
}

const homeCritical = home.slice(
    homeStart,
    homeEnd,
);

const criticalContent = [
    '<!-- LAYOUT HEADER + NAV -->',
    layoutCritical,
    '<!-- HOME HERO + FIRST SECTION -->',
    homeCritical,
    '<!-- AI CHATBOT -->',
    aiChat,
    '<!-- CLICK TO CHAT -->',
    clickChat,
].join('\n\n');

const tempFile = path.join(
    os.tmpdir(),
    `juntas-home-critical-${process.pid}-${Date.now()}.html`,
);

fs.writeFileSync(tempFile, criticalContent, 'utf8');

try {
    const result = spawnSync(
        process.execPath,
        [
            files.tailwindCli,
            '-i',
            files.inputCss,
            '-o',
            files.outputCss,
            '--content',
            tempFile,
            '-c',
            files.tailwindConfig,
            '-m',
        ],
        {
            cwd: repo,
            stdio: 'inherit',
        },
    );

    if (result.error) {
        throw result.error;
    }

    if (result.status !== 0) {
        throw new Error(
            `Tailwind critical build failed with exit code ${result.status}`,
        );
    }

    if (!fs.existsSync(files.outputCss)) {
        throw new Error('Critical CSS output was not created');
    }

    const bytes = fs.statSync(files.outputCss).size;

    if (bytes <= 0) {
        throw new Error('Critical CSS output is empty');
    }

    console.log(`HOME_CRITICAL_CSS_BYTES=${bytes}`);
    console.log('HOME_CRITICAL_CSS_BUILD=PASS');
} finally {
    if (fs.existsSync(tempFile)) {
        fs.unlinkSync(tempFile);
    }
}