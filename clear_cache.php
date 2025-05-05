<?php
// Ejecuta comandos de Artisan para limpiar la caché de Laravel
exec('php artisan cache:clear');
exec('php artisan config:clear');
exec('php artisan route:clear');
exec('php artisan view:clear');

echo "Cache limpiada con éxito";
?>
