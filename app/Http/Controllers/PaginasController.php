<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    // Método para la página de inicio
    public function inicio()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('inicio', ['pageId' => $pageId]);
    }

    public function selecciona_juntas()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('selecciona-juntas-de-expansion', ['pageId' => $pageId]);
    }

    public function  junta_flexible_bsh_1110()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view(' junta-flexible-bsh-1110', ['pageId' => $pageId]);
    }
   
    public function  junta_flexible_bsh_111c()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('junta-flexible-bsh-111c', ['pageId' => $pageId]);
    }

    public function  junta_flexible_bsh_111e()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('junta-flexible-bsh-111e', ['pageId' => $pageId]);
    }

    public function  junta_flexible_bsh_1120()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('junta-flexible-bsh-1120', ['pageId' => $pageId]);
    }

    public function  junta_flexible_bsh_1130()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('junta-flexible-bsh-1130', ['pageId' => $pageId]);
    }

    public function  junta_flexible_bsh_2210()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('junta-flexible-bsh-2210', ['pageId' => $pageId]);
    }

    // Método para la página "acerca de"
    public function acerca()
    {
        $pageId = $this->generatePageId(__FUNCTION__);
        return view('acerca', ['pageId' => $pageId]);
    }

        // Método para la página "contacto"
        public function contact()
        {
            $pageId = $this->generatePageId(__FUNCTION__);
            return view('contact', ['pageId' => $pageId]);
        }

            // Método para la página "estilos"
            public function estilos()
            {
                $pageId = $this->generatePageId(__FUNCTION__);
                return view('estilos-juntas-de-expansion', ['pageId' => $pageId]);
            }

             // Método para la página "gracias"
             public function gracias()
             {
                 $pageId = $this->generatePageId(__FUNCTION__);
                 return view('gracias', ['pageId' => $pageId]);
             }

                         // Método para la página "aviso-de-privacidad"
                         public function aviso_de_privacidad()
                         {
                             $pageId = $this->generatePageId(__FUNCTION__);
                             return view('aviso-de-privacidad', ['pageId' => $pageId]);
                         }
            
        
                      // Método para la página "seleccionar-adecuadamente-una-junta"
             public function seleccionar_adecuadamente_una_junta()
              {
                  $pageId = $this->generatePageId(__FUNCTION__);
            return view('seleccionar-adecuadamente-una-junta', ['pageId' => $pageId]);
                 }

                      
            // Método para la página "Preguntas frecuentes"
            public function preguntas_frecuentes()
             {
            $pageId = $this->generatePageId(__FUNCTION__);
           return view('preguntas-frecuentes', ['pageId' => $pageId]);
             }   
            
            public function de_que_materiales()
            {
           $pageId = $this->generatePageId(__FUNCTION__);
          return view('de-que-materiales', ['pageId' => $pageId]);
            }   

            public function que_es_una_junta()
            {
           $pageId = $this->generatePageId(__FUNCTION__);
          return view('que-es-una-junta', ['pageId' => $pageId]);
            }

            public function guia_de_juntas()
            {
           $pageId = $this->generatePageId(__FUNCTION__);
          return view('guia-de-juntas', ['pageId' => $pageId]);
            }

    // Método para generar el ID de la página
    protected function generatePageId($functionName)
    {
        // Puedes utilizar cualquier lógica para generar el ID.
        // Aquí usamos crc32 para obtener un número entero basado en el nombre de la función.
        return crc32($functionName);
    }
}
