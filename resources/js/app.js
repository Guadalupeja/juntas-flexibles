import './bootstrap';
// JavaScript para el menú móvil -->

    const menuToggle = document.getElementById('menu-toggle');
    const menuItems = document.getElementById('menu-items');

    menuToggle.addEventListener('click', () => {
        menuItems.classList.toggle('hidden');
    });


    
// JavaScript para las pestañas de la página inicio

  document.addEventListener('DOMContentLoaded', function () {
      const tabButtons = document.querySelectorAll('[data-tab]');
      const tabContents = document.querySelectorAll('.tab-content');

      tabButtons.forEach(button => {
          button.addEventListener('click', function () {
              const tab = this.dataset.tab;

              // Eliminar clases activas
              tabButtons.forEach(btn => btn.classList.remove('bg-gray-200'));
              tabContents.forEach(content => content.classList.add('hidden'));

              // Activar pestaña seleccionada
              this.classList.add('bg-gray-200');
              document.querySelector(`.tab-content[data-content="${tab}"]`).classList.remove('hidden');
          });
      });
  });

