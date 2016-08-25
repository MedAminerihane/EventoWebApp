<?php

/* GoogleMapBundle::base.html.twig */
class __TwigTemplate_3aabcbbe0a6179cafab95ab27abe8c291410ad153a3fd02fa5c75b4207c5358b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<html>
    <head>
        <style type=\"text/css\">html, body, #map-canvas {height: 100%;margin: 0;padding: 0;}</style>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Vjr5Mzf9OfLTNevouwttfb2z_x6xi8o\"></script>
      <script type=\"text/javascript\">

  /* Déclaration des variables  */
  var geocoder;
  var map;
  var infowindow = new google.maps.InfoWindow();
  var marker;



  /* Fonction chargée de géocoder l'adresse  */
  function codeAddress() {
      geocoder = new google.maps.Geocoder();
      
    
    var myOptions = {
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById(\"map-canvas\"), myOptions);
      
      
   var address = document.getElementById(\"adresse\").value;
    geocoder.geocode( { 'address': address + ' Tunisie '}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var coords = results[0].geometry.location
        map.setCenter(coords);
        var marker = new google.maps.Marker({
          map: map,
          position: coords
        });
        document.getElementById('latlng').value = coords.lat()+','+coords.lng();
      } else {
        alert(\"Le geocodage n\\'a pu etre effectue pour la raison suivante: \" + status);
      }
    });
    
  }

  


  

</script>
    </head>
 

  <body onload=\"codeAddress()\">

    <div>
  
<input id=\"adresse\" type=\"hidden\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "\" name=\"adresse\">     
    </div>


        
        ";
        // line 63
        $this->displayBlock('container', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
    }

    // line 63
    public function block_container($context, array $blocks = array())
    {
        echo "  <div id=\"map-canvas\"></div> ";
    }

    public function getTemplateName()
    {
        return "GoogleMapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 63,  88 => 64,  86 => 63,  78 => 58,  20 => 2,);
    }
}
