import './bootstrap';



// Importar jQuery para puntuar página
import $ from 'jquery';
window.$ = window.jQuery = $;



// JavaScript para el menú móvil -->

    const menuToggle = document.getElementById('menu-toggle');
    const menuItems = document.getElementById('menu-items');

    menuToggle.addEventListener('click', () => {
        menuItems.classList.toggle('hidden');
    });

            // JavaScript para el Mapa del Sitio
            const toggleSitemap = document.getElementById('toggle-sitemap');
            const sitemapItems = document.getElementById('sitemap-items');

            toggleSitemap.addEventListener('click', () => {
                sitemapItems.classList.toggle('hidden');
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




  // Funcionalidad de puntuación
  $(document).ready(function() {
    var pageId = $('#rating-container').data('page-id');
    var userRating = 0; // Variable para almacenar la puntuación del usuario

    // Función para actualizar las estrellas visualmente
    function updateStars(rating) {
        $('#star-rating .star').each(function() {
            var starRating = $(this).data('rating');
            if (starRating <= rating) {
                $(this).attr('src', '/img/star_3.svg'); // Estrella amarilla
            } else {
                $(this).attr('src', '/img/star_2.svg'); // Estrella gris
            }
        });
    }

    // Obtener la puntuación actual desde el servidor
    $.get(`/get-rating/${pageId}`, function(data) {
        $('#average-rating').text(data.average || 0);
        $('#votes-count').text(data.votes);
        // Actualizar las estrellas según el promedio
        updateStars(Math.round(data.average));
    });

    // Evento al pasar el cursor sobre una estrella
    $('#star-rating .star').on('mouseover', function() {
        var rating = $(this).data('rating');
        updateStars(rating);
    });

    // Evento al quitar el cursor del conjunto de estrellas
    $('#star-rating').on('mouseout', function() {
        // Si el usuario aún no ha votado, muestra el promedio
        if (userRating === 0) {
            // Obtener el promedio actual para mostrarlo
            $.get(`/get-rating/${pageId}`, function(data) {
                updateStars(Math.round(data.average));
            });
        } else {
            // Si el usuario ya votó, mantiene su puntuación
            updateStars(userRating);
        }
    });

    // Evento al hacer clic en una estrella
    $('#star-rating .star').on('click', function() {
        var rating = $(this).data('rating');
        userRating = rating; // Guardar la puntuación del usuario

        // Enviar la puntuación al servidor
        $.ajax({
            url: '/rate-page',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                page_id: pageId,
                rating: rating
            },
            success: function(data) {
                if(data.success) {
                    $('#average-rating').text(data.average);
                    $('#votes-count').text(data.votes);
                    alert('¡Gracias por tu puntuación!');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Hubo un error al enviar tu puntuación. Por favor, intenta de nuevo.');
            }
        });

        // Actualizar las estrellas para reflejar la puntuación del usuario
        updateStars(rating);
    });
});


document.addEventListener('DOMContentLoaded', function () {

    const tabla = document.querySelector('.tabla-medidas');

    // 1. Asignar los encabezados de la tabla antes de enviar el formulario
    const forms = document.querySelectorAll('.form-seleccion');

    forms.forEach(form => {
        const encabezadosCampo = form.querySelector('.encabezados_tabla');

        if (form && tabla && encabezadosCampo) {
            form.addEventListener('submit', function () {
                const encabezados = tabla.querySelectorAll('thead th');
                const encabezadosTexto = Array.from(encabezados)
                                             .map(th => th.textContent.trim())
                                             .join(',');
                encabezadosCampo.value = encabezadosTexto;
            });
        }
    });

    // 2. Manejo de la selección de fila: asignar valores a "resultado" y mostrar en la sección "Medidas"
    const radios = document.querySelectorAll('.fila-radio');
    const productosSeleccionados2 = document.getElementById('productos-seleccionados2');
    // Si tienes más de un formulario con la clase .resultado, esto los capturará todos
    const resultadoInputs = document.querySelectorAll('.resultado');  

    radios.forEach(function (radio) {
        radio.addEventListener('change', function () {
            // Obtener la fila padre
            const row = radio.closest('tr');
            // Obtener todas las celdas de la fila
            const cells = row.querySelectorAll('td');

            // Convertir las celdas en un array de valores
            const rowValues = Array.from(cells).map(cell => cell.innerText.trim());

            // Ejemplo: mostrar en la lista el DN y la LONGITUD que están en columnas [1] y [2]
            if (productosSeleccionados2) {
                productosSeleccionados2.innerHTML = `
                  <li>DIÁMETRO NOMINAL DN [in]: ${rowValues[1]}, 
                      LONGITUD: ${rowValues[2]}
                  </li>`;
            }

            // Guardar TODOS los valores de esa fila en los inputs ocultos "resultado"
            resultadoInputs.forEach(input => {
                input.value = rowValues.join(',');
            });
        });
    });
});









document.addEventListener('DOMContentLoaded', function() {
    const materialBridasSelector = document.getElementById('material_bridas');
    const tipoBridaSelector = document.getElementById('tipo_brida');
    const modeloInput = document.querySelector('input[name="modelo"]');
    
    // Si el modelo es 2210, solo se permitirá la opción "Giratorias"
    if (modeloInput && modeloInput.value === '2210') {
        for (let i = 0; i < tipoBridaSelector.options.length; i++) {
            if (tipoBridaSelector.options[i].value === 'Giratorias') {
                tipoBridaSelector.options[i].disabled = false;
                tipoBridaSelector.selectedIndex = i;
            } else {
                tipoBridaSelector.options[i].disabled = true;
            }
        }
    } else {
        // Lógica existente para otros modelos:
        if (materialBridasSelector && tipoBridaSelector) {
            materialBridasSelector.addEventListener('change', function() {
                if (this.value === 'Hule' || this.value === 'HuleAC' || this.value === 'HuleSS') {
                    for (let i = 0; i < tipoBridaSelector.options.length; i++) {
                        if (tipoBridaSelector.options[i].value === 'Fijas') {
                            tipoBridaSelector.options[i].disabled = false;
                            tipoBridaSelector.selectedIndex = i;
                        } else {
                            tipoBridaSelector.options[i].disabled = true;
                        }
                    }
                } else {
                    for (let i = 0; i < tipoBridaSelector.options.length; i++) {
                        tipoBridaSelector.options[i].disabled = false;
                    }
                }
            });
        }
    }
});


  //JS para mostrar rangos de temperatura: 
  