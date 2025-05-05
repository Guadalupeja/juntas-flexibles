<?php
$filePath = 'C:\\Users\\Lupit\\Documents\\juntas-flexibles\\public\\img\\bombas-industriales.jpg';

if (file_exists($filePath)) {
    echo "El archivo existe y es accesible.";
    echo "<br>";
    echo "Contenido del archivo: " . substr(file_get_contents($filePath), 0, 100) . "...";
} else {
    echo "El archivo no es accesible.";
}
?>