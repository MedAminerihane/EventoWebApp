<?php

/* PidevFrontOfficeBundle::indexClient.html.twig */
class __TwigTemplate_1c651378d82c3586e549a5df01a2b02a525a81ce9757a49b8f36e11ec09d8552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Accueil | Accueil</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-114x114.png"), "html", null, true);
        echo "\">
    <!--Loading bootstrap css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Oswald:400,700,300"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/zabuto_calendar.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/pace.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery.news-ticker.css"), "html", null, true);
        echo "\">
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        
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
        // line 39
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo " class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">event</span></a>
                        
                    </li>
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Invitations<span ></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 62
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
\t\t  <li class=\"active\"><a href=";
        // line 111
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo "><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                    <li ><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("listcatalogue");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Catalogues</span></a></li>
                  
                   
                   
                    <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Invitations</span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("satistique");
        echo "\"><i class=\"fa fa-bar-chart-o fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Statistiques</span></a>
                       
                    </li>
                
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
           
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                            Accueil</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"AccueilClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Accueil</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Accueil</li>
                    </ol>
                    <div class=\"clearfix\">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT http://player.vimeo.com/video/22439234-->
             
                     <div class=\"page-content\" >
                    <div id=\"tab-general\" >
                        <div class=\"row mbl\">
                            <div class=\"col-lg-12\">
                                
                                            <div class=\"col-md-12\">
                                                <div id=\"area-chart-spline\" style=\"width: 100%; height: 300px; display: none;\">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class=\"col-lg-12\" >
                              <div class=\"col-lg-6\">
                                       <iframe src=\"https://www.youtube.com/embed/CI005y6aokI\" style=\"width: 100%; height:340px; border:0\"></iframe> 
                                    </div>
                               
                                <div class=\"col-lg-6\"  style=\" margin-top: 50px; \"> 
                                    <h1> <b> A propos </h1> <b>
                                    <p > <h4>Evento permet aux gens du monde entier de planifier, promouvoir et vendre des billets pour n'importe quel événement—des cours de photographie et de yoga à des concerts et festivals à guichets fermés. Et ces services ne s'adressent pas seulement aux organisateurs : Evento permet à tout le monde de découvrir des événements et de les partager facilement avec les autres. De cette façon, Evento réunit des communautés autour d’expériences en live. Eventbrite compte parmi ses investisseurs Tiger Global, Sequoia Capital, DAG Ventures, et Tenaya Capital.</h4></p>   
                                    
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-12\"><h2 class=\"mbxl\">Notre Equipe</h2>

                                        <div class=\"row\">
                                            <div class=\"col-lg-2\">
                                                <div class=\"member-team\" ><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/seif.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" class=\"img-circle\"/>

                                                    <h3>SEIF EDDINE B.A
                                                        <small><b>Project Manager</b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\" </p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/seif.benabda\" data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2\">
                                                <div class=\"member-team\"><img  src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/idriss.jpg"), "html", null, true);
        echo "\"  class=\"img-responsive\"/>

                                                    <h3>Idriss Hammami
                                                        <small><b>Développeur </b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\"</p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/idriss.hammami\" data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                             <div class=\"col-lg-2\">
                                                <div class=\"member-team\"><img  src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/majed.jpg"), "html", null, true);
        echo "\"  class=\"img-responsive\"/>

                                                    <h3>Majed  Aiaida
                                                         <small> <b>Développeur </b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\"</p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/majed.aiaida \" target=_blank data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                         </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2\">
                                                <div class=\"member-team\"><img  src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/brahem.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"/>

                                                    <h3>Mohamed Brahem
                                                        <small><b>Développeur</b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\"</p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/Insanitymvb\" target=_blank data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2\">
                                                <div class=\"member-team\"><img  src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/rihane.jpg"), "html", null, true);
        echo "\"class=\"img-responsive\"/>

                                                    <h3>Amine Rihane
                                                        <small><b>Développeur</b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\"</p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/mohamedamine.rihane\" data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                        </ul>
                                                </div>
                                            </div>
                                             <div class=\"col-lg-2\">
                                                <div class=\"member-team\"><img  src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/walid.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"/>

                                                    <h3>Walid Issaoui
                                                        <small><b>Développeur</b></small>
                                                    </h3>
                                                    <p> Etudiant à l'école supérieure privee d'ingenierie et de technologies \"ESPRIT\"</p>
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\">
                                                        <li><a href=\"https://www.facebook.com/walid.younes\" data-hover=\"tooltip\" data-original-title=\"facebook\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\" data-hover=\"tooltip\" data-original-title=\"google Plus\" class=\"googleplus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                         </ul>
                                                </div>
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://themifycloud.com\">Admin templates</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div class=\"copyright\">
                        <a href=\"#\">2015 © EVENTO Copyright</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "></script>
    <!--CORE JAVASCRIPT-->
    <script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/main.js"), "html", null, true);
        echo "></script>
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

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::indexClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 354,  590 => 352,  586 => 351,  582 => 350,  578 => 349,  574 => 348,  570 => 347,  566 => 346,  561 => 344,  557 => 343,  553 => 342,  549 => 341,  545 => 340,  541 => 339,  537 => 338,  533 => 337,  529 => 336,  525 => 335,  521 => 334,  517 => 333,  513 => 332,  509 => 331,  505 => 330,  501 => 329,  497 => 328,  493 => 327,  489 => 326,  485 => 325,  481 => 324,  477 => 323,  473 => 322,  469 => 321,  465 => 320,  461 => 319,  457 => 318,  413 => 277,  397 => 264,  381 => 251,  365 => 238,  348 => 224,  331 => 210,  270 => 152,  262 => 147,  253 => 141,  243 => 134,  234 => 128,  225 => 122,  216 => 116,  208 => 111,  156 => 62,  151 => 60,  147 => 59,  140 => 57,  133 => 53,  126 => 49,  122 => 48,  118 => 47,  107 => 39,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
