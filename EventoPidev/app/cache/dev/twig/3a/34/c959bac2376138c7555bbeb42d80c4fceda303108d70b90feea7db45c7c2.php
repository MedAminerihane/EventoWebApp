<?php

/* PidevFrontOfficeBundle::EventDetailsAdmin.html.twig */
class __TwigTemplate_3a34c959bac2376138c7555bbeb42d80c4fceda303108d70b90feea7db45c7c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'eventName' => array($this, 'block_eventName'),
            'tof' => array($this, 'block_tof'),
            'container' => array($this, 'block_container'),
            'details' => array($this, 'block_details'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Evenement | Evenement</title>
    
    
    
    
    
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-114x114.png"), "html", null, true);
        echo "\">
    <!--Loading bootstrap css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Oswald:400,700,300"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/zabuto_calendar.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/pace.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery.news-ticker.css"), "html", null, true);
        echo "\">
    

    
    
    
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
    geocoder.geocode( { 'address': address }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var coords = results[0].geometry.location
        map.setCenter(coords);
        var marker = new google.maps.Marker({
          map: map,
          position: coords
        });
      } else {
        alert(\"Le geocodage n\\'a pu etre effectue pour la raison suivante: \" + status);
      }
    });
    
  };

  


  

</script>
   
    
</head>
<body onload=\"codeAddress()\">
    <div>
        <!--BEGIN THEME SETTING-->
        <div id=\"theme-setting\">
            <a href=\"#\" data-toggle=\"dropdown\" data-step=\"1\" data-intro=\"&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!\"
                data-position=\"left\" class=\"btn-theme-setting\"><i class=\"fa fa-cog\"></i></a>
            <div class=\"content-theme-setting\">
                <select id=\"list-style\" class=\"form-control\">
                    <option value=\"style1\">Flat Squared style</option>
                    <option value=\"style2\">Flat Rounded style</option>
                    <option value=\"style3\" selected=\"selected\">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=";
        // line 110
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo " class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">event</span></a>
                        
                    </li>
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Invitations<span ></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-key\"></i>Déconnection</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id=\"modal-config\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"close\">
                                &times;</button>
                            <h4 class=\"modal-title\">
                                Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-default\">
                                Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id=\"wrapper\">
            <!--BEGIN SIDEBAR MENU-->
           <nav id=\"sidebar\" role=\"navigation\" data-step=\"2\" data-intro=\"Template has &lt;b&gt;many navigation styles&lt;/b&gt;\"
                data-position=\"right\" class=\"navbar-default navbar-static-side\">
            <div class=\"sidebar-collapse menu-scroll\">
                <ul id=\"side-menu\" class=\"nav\">
                   
                     <div class=\"clearfix\"></div>
\t\t\t\t\t 
\t\t  <li ><a href=";
        // line 182
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo "><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li class=\"active\"><a href=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li><a href=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                    <li ><a href=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("listcatalogue");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Catalogues</span></a></li>
                  
                   
                   
                    <li><a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Invitations</span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 218
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a href=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("satistique");
        echo "\"><i class=\"fa fa-bar-chart-o fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Statistiques</span></a>
                       
                    </li>
                
                </ul>
            </div>
        </nav>
          
          
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                            Evenement</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboard.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Evenement</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Evenement</li>
                    </ol>
                    <div class=\"clearfix\">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class=\"page-content\">
                    <div id=\"tab-general\">
                        <div class=\"row mbl\">
                            <div class=\"col-lg-12\">
                                
                                            <div class=\"col-md-12\">
                                                <div id=\"area-chart-spline\" style=\"width: 100%; height: 300px; display: none;\">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class=\"col-lg-12\">
                              
                                    
                              <div class=\"row\">
                                  <div class=\"col-md-12\"><h2> ";
        // line 267
        $this->displayBlock('eventName', $context, $blocks);
        echo "</h2>

                        <div class=\"row mtl\">
                            <div class=\"col-md-3\">
\t\t\t\t           <table class=\"table table-striped table-hover\">

\t\t\t\t\t\t\t<tr><td>
                                <div class=\"form-group\" >
                                    <div class=\"text-center mbl\"><img src=\"";
        // line 275
        $this->displayBlock('tof', $context, $blocks);
        echo "\" alt=\"\" style=\"width:350px;height: 200px;\" class=\"img-responsive\" /> <br> <br>
                                     ";
        // line 276
        $this->displayBlock('container', $context, $blocks);
        // line 277
        echo "                                    
                                     <input id=\"adresse\" type=\"hidden\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lieu", array()), "html", null, true);
        echo "\" name=\"adresse\" />
                                     <div id=\"map-canvas\" style=\"width:350px;height: 150px;\"> </div>
                                    </div>
                                   
                                </div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
                                <table class=\"table table-striped table-hover\" style=\"width:600px;\">
                                    <tbody>
                                        ";
        // line 287
        $this->displayBlock('details', $context, $blocks);
        // line 313
        echo "                                    </tbody>
                                </table>
\t\t\t\t\t\t\t\t</td>
                            
                     
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div id=\"C3\"><script type=\"text/javascript\">CreateListeEtoile('C3',5);</script></div>
                    <div class=\"copyright\">
  <a href=\"#\">2015 © EVENTO Copyright</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
     \t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/ListeEtoile.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>







</body>
</html>

";
    }

    // line 267
    public function block_eventName($context, array $blocks = array())
    {
        echo " Profile: John Doe ";
    }

    // line 275
    public function block_tof($context, array $blocks = array())
    {
        echo " http://lorempixel.com/640/480/business/1/ ";
    }

    // line 276
    public function block_container($context, array $blocks = array())
    {
        echo "   ";
    }

    // line 287
    public function block_details($context, array $blocks = array())
    {
        // line 288
        echo "                                    <tr>
                                        <td>User Name</td>
                                        <td>John Doe</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>name@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Street 123, Avenue 45, Country</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><span class=\"label label-success\">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>User Rating</td>
                                        <td><i class=\"fa fa-star text-yellow fa-fw\"></i><i class=\"fa fa-star text-yellow fa-fw\"></i><i class=\"fa fa-star text-yellow fa-fw\"></i><i class=\"fa fa-star text-yellow fa-fw\"></i><i class=\"fa fa-star text-yellow fa-fw\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Member Since</td>
                                        <td> Jun 03, 2014</td>
                                    </tr>
                                    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::EventDetailsAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 288,  641 => 287,  635 => 276,  629 => 275,  623 => 267,  591 => 372,  586 => 370,  582 => 369,  578 => 368,  574 => 367,  570 => 366,  566 => 365,  562 => 364,  557 => 362,  552 => 360,  548 => 359,  544 => 358,  540 => 357,  536 => 356,  532 => 355,  528 => 354,  524 => 353,  520 => 352,  516 => 351,  512 => 350,  508 => 349,  504 => 348,  500 => 347,  496 => 346,  492 => 345,  488 => 344,  484 => 343,  480 => 342,  476 => 341,  472 => 340,  468 => 339,  464 => 338,  460 => 337,  456 => 336,  452 => 335,  447 => 333,  425 => 313,  423 => 287,  411 => 278,  408 => 277,  406 => 276,  402 => 275,  391 => 267,  344 => 223,  336 => 218,  327 => 212,  317 => 205,  308 => 199,  299 => 193,  290 => 187,  282 => 182,  230 => 133,  225 => 131,  221 => 130,  214 => 128,  207 => 124,  200 => 120,  196 => 119,  192 => 118,  181 => 110,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  23 => 2,);
    }
}
