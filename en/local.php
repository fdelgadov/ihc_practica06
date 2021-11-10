<?PHP
// -----------------------------------------------------------------
// Localizaci�n: ingl�s
// -----------------------------------------------------------------

// -----------------------------------------------------------------
// Textos
// -----------------------------------------------------------------
   $textos = array (
      "tit_home"        => "Lindavista Real Estate",
      "content"         => "Lindavista Real Estate web site",
      "menu_inf"        => "Information",
      "menu_pro"        => "Promotions",
      "menu_ser"        => "Services", 
      "menu_not"        => "News", 
      "menu_con"        => "Contact",
      "noticias"        => "News",
      "lema"            => "Lindavista Real Estate. Building a better world for you",
      "logo_html"       => "Valid HTML",
      "logo_css"        => "Valid CSS",
      "logo_wai"        => "Triple-A Level conformance logo, from " .
                           "W3C-WAI Web Content Accessibility Guidelines 1.0"
   );

// -----------------------------------------------------------------
// Formato de la hora
// -----------------------------------------------------------------
function date2string ($date)
{
   // Formato: a�o (cuatro d�gitos) /
   //          mes del a�o (n�mero, sin ceros) /
   //          d�a del mes (n�mero, sin ceros)
   // Ejemplo: 2007/1/15
   $string = date ("Y/n/j", strtotime($date));
   return ($string);
}
?>
