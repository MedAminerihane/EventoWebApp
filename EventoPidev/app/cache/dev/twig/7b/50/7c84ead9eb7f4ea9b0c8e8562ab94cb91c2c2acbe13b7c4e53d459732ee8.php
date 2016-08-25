<?php

/* PidevFrontOfficeBundle:Offre:AfficheOffreClient.html.twig */
class __TwigTemplate_7b507c84ead9eb7f4ea9b0c8e8562ab94cb91c2c2acbe13b7c4e53d459732ee8 extends Twig_Template
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
    <title>Les Offres | Accueil</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"images/icons/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/icons/favicon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/icons/favicon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/icons/favicon-114x114.png\">
    <!--Loading bootstrap css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Oswald:400,700,300"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/all.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/zabuto_calendar.min.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/pace.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery.news-ticker.css"), "html", null, true);
        echo ">
    <link type=\"text/css\" rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jplist-custom.css"), "html", null, true);
        echo ">
   
    
</head>
<body>
    <div>
       
        <!--BEGIN BACK TO TOP-->
        <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
      <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=";
        // line 40
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo " class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">event</span></a>
                        
                    </li>
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Invitations<span ></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 63
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
                                abc</p>
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
        // line 104
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo "><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li ><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li class=\"active\"><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                    <li ><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("listcatalogue");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Catalogues</span></a></li>
                  
                   
                   
                    <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Invitations</span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li ><a href=\"";
        // line 145
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
                            Data Grid</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboardClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Data Grid</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Data Grid</li>
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
                            
                            <div class=\"page-content\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body\">
                                <div id=\"grid-layout-table-1\" class=\"box jplist\">
                                    <div class=\"jplist-ios-button\"><i class=\"fa fa-sort\"></i>jPList Actions</div>
                                    <div class=\"jplist-panel box panel-top\">
                                        <button type=\"button\" data-control-type=\"reset\" data-control-name=\"reset\" data-control-action=\"reset\" class=\"jplist-reset-btn btn btn-default\">Reset<i class=\"fa fa-share mls\"></i></button>
                                        <div data-control-type=\"drop-down\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-drop-down form-control\">
                                            <ul class=\"dropdown-menu\">
                                                <li><span data-number=\"3\"> 3 per page</span></li>
                                                <li><span data-number=\"5\"> 5 per page</span></li>
                                                <li><span data-number=\"10\" data-default=\"true\"> 10 per page</span></li>
                                                <li><span data-number=\"all\"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type=\"drop-down\" data-control-name=\"sort\" data-control-action=\"sort\" data-datetime-format=\"{month}/{day}/{year}\" class=\"jplist-drop-down form-control\">
                                            <ul class=\"dropdown-menu\">
                                                <li><span data-path=\"default\">Sort by</span></li>
                                                <li><span data-path=\".title\" data-order=\"asc\" data-type=\"text\">Title A-Z</span></li>
                                                <li><span data-path=\".title\" data-order=\"desc\" data-type=\"text\">Title Z-A</span></li>
                                                <li><span data-path=\".desc\" data-order=\"asc\" data-type=\"text\">Description A-Z</span></li>
                                                <li><span data-path=\".desc\" data-order=\"desc\" data-type=\"text\">Description Z-A</span></li>
                                                <li><span data-path=\".like\" data-order=\"asc\" data-type=\"number\" data-default=\"true\">Likes asc</span></li>
                                                <li><span data-path=\".like\" data-order=\"desc\" data-type=\"number\">Likes desc</span></li>
                                                <li><span data-path=\".date\" data-order=\"asc\" data-type=\"datetime\">Date asc</span></li>
                                                <li><span data-path=\".date\" data-order=\"desc\" data-type=\"datetime\">Date desc</span></li>
                                            </ul>
                                        </div>
                                        <div class=\"text-filter-box\">
                                            <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input data-path=\".title\" type=\"text\" value=\"\" placeholder=\"Filter by Title\" data-control-type=\"textbox\" data-control-name=\"title-filter\" data-control-action=\"filter\" class=\"form-control\"/></div>
                                        </div>
                                        <div class=\"text-filter-box\">
                                            <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input data-path=\".desc\" type=\"text\" value=\"\" placeholder=\"Filter by Description\" data-control-type=\"textbox\" data-control-name=\"desc-filter\" data-control-action=\"filter\" class=\"form-control\"/></div>
                                        </div>
                                        <div data-type=\"Page {current} of {pages}\" data-control-type=\"pagination-info\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-label btn btn-default\"></div>
                                        <div data-control-type=\"pagination\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-pagination\"></div>
                                    </div>
                                    <div class=\"box text-shadow\">
                                       <table class=\"demo-tbl\"><!--<item>1</item>-->

                                                                   
                                                                        <tr class=\"tbl-item\"><!--<img/>-->
                                                                            <td class=\"img\"><img src=";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/thumbs/arch-1.jpg"), "html", null, true);
        echo " alt=\"\" title=\"\"/></td>
                                                                            <!--<data></data>-->
                                                                            <td class=\"td-block\"><p class=\"date\">";
        // line 233
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "dateDebut", array()), "D-M-Y"), "html", null, true);
        echo "</p>

                                                                                <p class=\"title\"> <a href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficher_offre_client", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\"  target=\"_blank\"  ><font color=\"#DC143C\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</font></p>
                                                                                <p class=\"desc\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "description", array()), "html", null, true);
        echo "</p>
                                                                                <p class=\"categ\">Catégorie : ";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "categorie", array()), "html", null, true);
        echo "</p>
                                                                                <p class=\"like\">Prix :";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "prix", array()), "html", null, true);
        echo " TND</p>
                                                                                
                                                                                ";
        // line 240
        $context["test"] = 0;
        // line 241
        echo "                                                                                
                                                                                ";
        // line 242
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DemandesClient"]) ? $context["DemandesClient"] : $this->getContext($context, "DemandesClient")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 243
            echo "
                                                                                    ";
            // line 244
            if (($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()) == $this->getAttribute($this->getAttribute($context["demande"], "idOffre", array()), "id", array()))) {
                // line 245
                echo "                                                                                        ";
                $context["test"] = 1;
                // line 246
                echo "                                                                                    ";
            }
            // line 247
            echo "                                                                                    
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                                                                ";
        if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
            // line 250
            echo "                                                                                    <td> <span class=\"label label-sm label-pink\"><font color=\"white\"> Demande en attente </font></td>
                                                                                        ";
        } else {
            // line 252
            echo "                                                                                   <td><span class=\"label label-sm label-violet\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demande_offre", array("id_offre" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\"> 

                                                                                                <font color=\"white\"> Demander cette offre </font></a> </td> 
                                                                                            ";
        }
        // line 255
        echo "       

                                                                            </td>
                                                                        </tr>  
                                                                    

                                                                </table>
                                    </div>
                                    <div class=\"box jplist-no-results text-shadow align-center\"><p>No results found</p></div>
                                    <div class=\"jplist-ios-button\"><i class=\"fa fa-sort\"></i>jPList Actions</div>
                                    <div class=\"jplist-panel box panel-bottom\">
                                        <div data-control-type=\"drop-down\" data-control-name=\"paging\" data-control-action=\"paging\" data-control-animate-to-top=\"true\" class=\"jplist-drop-down form-control\">
                                            <ul class=\"dropdown-menu\">
                                                <li><span data-number=\"3\"> 3 per page</span></li>
                                                <li><span data-number=\"5\"> 5 per page</span></li>
                                                <li><span data-number=\"10\" data-default=\"true\"> 10 per page</span></li>
                                                <li><span data-number=\"all\"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type=\"drop-down\" data-control-name=\"sort\" data-control-action=\"sort\" data-control-animate-to-top=\"true\" data-datetime-format=\"{month}/{day}/{year}\" class=\"jplist-drop-down form-control\">
                                            <ul class=\"dropdown-menu\">
                                                <li><span data-path=\"default\">Sort by</span></li>
                                                <li><span data-path=\".title\" data-order=\"asc\" data-type=\"text\">Title A-Z</span></li>
                                                <li><span data-path=\".title\" data-order=\"desc\" data-type=\"text\">Title Z-A</span></li>
                                                <li><span data-path=\".desc\" data-order=\"asc\" data-type=\"text\">Description A-Z</span></li>
                                                <li><span data-path=\".desc\" data-order=\"desc\" data-type=\"text\">Description Z-A</span></li>
                                                <li><span data-path=\".like\" data-order=\"asc\" data-type=\"number\" data-default=\"true\">Likes asc</span></li>
                                                <li><span data-path=\".like\" data-order=\"desc\" data-type=\"number\">Likes desc</span></li>
                                                <li><span data-path=\".date\" data-order=\"asc\" data-type=\"datetime\">Date asc</span></li>
                                                <li><span data-path=\".date\" data-order=\"desc\" data-type=\"datetime\">Date desc</span></li>
                                            </ul>
                                        </div>
                                        <div data-type=\"{start} - {end} of {all}\" data-control-type=\"pagination-info\" data-control-name=\"paging\" data-control-action=\"paging\" class=\"jplist-label btn btn-default\"></div>
                                        <div data-control-type=\"pagination\" data-control-name=\"paging\" data-control-action=\"paging\" data-control-animate-to-top=\"true\" class=\"jplist-pagination\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/modernizr.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jplist.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jplist.js"), "html", null, true);
        echo "></script>

    <!--CORE JAVASCRIPT-->
    <script src=\"script/main.js\"></script>
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
        return "PidevFrontOfficeBundle:Offre:AfficheOffreClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 350,  615 => 349,  611 => 348,  607 => 347,  603 => 346,  599 => 345,  595 => 344,  591 => 343,  587 => 342,  583 => 341,  579 => 340,  575 => 339,  571 => 338,  567 => 337,  563 => 336,  559 => 335,  555 => 334,  551 => 333,  547 => 332,  543 => 331,  539 => 330,  535 => 329,  531 => 328,  527 => 327,  523 => 326,  519 => 325,  515 => 324,  511 => 323,  507 => 322,  503 => 321,  499 => 320,  495 => 319,  491 => 318,  487 => 317,  483 => 316,  479 => 315,  475 => 314,  414 => 255,  406 => 252,  402 => 250,  399 => 249,  392 => 247,  389 => 246,  386 => 245,  384 => 244,  381 => 243,  377 => 242,  374 => 241,  372 => 240,  367 => 238,  363 => 237,  359 => 236,  353 => 235,  348 => 233,  343 => 231,  254 => 145,  246 => 140,  237 => 134,  227 => 127,  218 => 121,  209 => 115,  200 => 109,  192 => 104,  148 => 63,  143 => 61,  139 => 60,  132 => 58,  125 => 54,  118 => 50,  114 => 49,  110 => 48,  99 => 40,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
