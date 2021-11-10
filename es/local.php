<?PHP
// -----------------------------------------------------------------
// Localizaci�n: espa�ol
// -----------------------------------------------------------------

// -----------------------------------------------------------------
// Textos
// -----------------------------------------------------------------
   $textos = array (
      "tit_home"        => "Inmobiliaria Lindavista",
      "content"         => "Sitio web de la Inmobiliaria Lindavista",
      "menu_inf"        => "Información",
      "menu_pro"        => "Promociones",
      "menu_ser"        => "Servicios", 
      "menu_not"        => "Noticias", 
      "menu_con"        => "Contacto",
      "noticias"        => "Noticias",
      "lema"            => "Inmobiliaria Lindavista. Construimos un mundo mejor para usted",
      "logo_html"       => "HTML Válido",
      "logo_css"        => "CSS Válida",
      "logo_wai"        => "Icono de conformidad con el Nivel Triple-A, de las " .
                           "Directrices de Accesibilidad para el Contenido Web 1.0 del W3C-WAI"
   );

// -----------------------------------------------------------------
// Formato de la hora
// -----------------------------------------------------------------
function date2string ($date)
{
   // Formato: d�a del mes (n�mero, sin ceros) /
   //          mes del a�o (n�mero, sin ceros) /
   //          a�o (cuatro d�gitos)
   // Ejemplo: 15/1/2007
   $string = date ("j/n/Y", strtotime($date));
   return ($string);
}
?>
