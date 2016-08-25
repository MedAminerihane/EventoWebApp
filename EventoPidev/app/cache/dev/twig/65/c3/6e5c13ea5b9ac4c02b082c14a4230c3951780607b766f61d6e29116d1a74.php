<?php

/* PidevFrontOfficeBundle:Offre:AccepterDemandes.html.twig */
class __TwigTemplate_65c36e5c13ea5b9ac4c02b082c14a4230c3951780607b766f61d6e29116d1a74 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Accepter les demandes | Offre</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon-114x114.png"), "html", null, true);
        echo "\">
        <!--Loading bootstrap css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Oswald:400,700,300"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/zabuto_calendar.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/pace.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/jquery.news-ticker.css"), "html", null, true);
        echo "\">
    </head>
    <body>
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
                <a id=\"logo\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexP");
        echo "\" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">demande</span></a>
                        
                    </li>
                    
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a  href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilP");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("list_offre_prestataire");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Offres<span class=\"badge \"></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 74
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
                                </p>
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
                       <li ><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexP");
        echo "\"><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t
\t\t\t\t <li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("list_offre_prestataire");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                 <li class=\"active\"><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("list_demande");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Demandes Offres</span></a>
                    
                    <li ><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("ajouter_abonnement");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Abonnements</span></a>
                          
                    </li>
                  
                  
                    <li ><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilP");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("satistiqueP");
        echo "\"><i class=\"fa fa-bar-chart-o fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Statistiques</span></a>
                       
                    </li> 
                    
                    
\t\t\t\t\t  <li><a href=\"Contacter_CPrestataire.html\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Contacter Client</span></a>
                      
                    </li>
                </ul>
            </div>
        </nav>


                <div id=\"page-wrapper\">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                        <div class=\"page-header pull-left\">
                            <div class=\"page-title\">
                                Extras</div>
                        </div>
                        <ol class=\"breadcrumb page-breadcrumb pull-right\">
                            <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboard.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                            <li class=\"hidden\"><a href=\"#\">Extras</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                            <li class=\"active\">Extras</li>
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

                                    <div class=\"col-md-12\"><h2>List des demandes</h2>

                                        <div >
                                            <div class=\"col-md-3\">
                                                <div class=\"form-group\">
                                                    <form method=\"POST\">


                                                    </form>\t\t\t\t\t
                                                </div>

                                                <div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                                    <div class=\"modal-content\">
                                                        <ul class=\"list-inline item-details\">
                                                            <li><a href=\"http://themifycloud.com\">Admin templates</a></li>
                                                            <li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 216
        echo "    
                                            <div class=\"panel panel-red\">
                                                <div class=\"panel-heading\"></div>
                                                <div class=\"panel-body\">
                                                    <table class=\"table table-hover table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>Prénom du client</th>
                                                                <th>Nom du client</th>
                                                                <th>Nom de l'offre</th>
                                                                <th>Accepter les demandes</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            ";
        // line 232
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandeOffre"]) ? $context["demandeOffre"] : $this->getContext($context, "demandeOffre")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 233
            echo "                                                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 234
                echo "                                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 235
                    echo "                                                                        ";
                    if ((($this->getAttribute($this->getAttribute($context["demande"], "idOffre", array()), "id", array()) == $this->getAttribute($context["offre"], "id", array())) && ($this->getAttribute($this->getAttribute($context["demande"], "idClient", array()), "id", array()) == $this->getAttribute($context["user"], "id", array())))) {
                        // line 236
                        echo "                                                                            <tr>
                                                                               
                                                                                <td>";
                        // line 238
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                        echo "</td>
                                                                                <td>";
                        // line 239
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                        echo "</td>
                                                                                <td>";
                        // line 240
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "idOffre", array()), "titre", array()), "html", null, true);
                        echo "</td>
                                                                                <td> <span class=\"label label-sm label-green\"><a href=\"";
                        // line 241
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accepter_offre", array("idClient" => $this->getAttribute($context["user"], "id", array()), "idOffre" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\"> 

                                                                                            <font color=\"white\"> Accepter cette offre </font></a> </td>       
                                                                            </tr>
                                                                        ";
                    }
                    // line 246
                    echo "                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                                        </tbody>
                                                    </table>
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
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
        <!--CORE JAVASCRIPT-->
        <script src=\"";
        // line 314
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

            \$(document).ready(function () {
                \$('#inputIncludeFile').change(function () {
                    var lenom = document.getElementById('inputIncludeFile').value;
                    alert(lenom);
                    document.getElementById('test1').value = lenom;


                });
            });



        </script>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:Offre:AccepterDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 314,  574 => 312,  570 => 311,  566 => 310,  562 => 309,  558 => 308,  554 => 307,  550 => 306,  545 => 304,  540 => 302,  536 => 301,  532 => 300,  528 => 299,  524 => 298,  520 => 297,  516 => 296,  512 => 295,  508 => 294,  504 => 293,  500 => 292,  496 => 291,  492 => 290,  488 => 289,  484 => 288,  480 => 287,  476 => 286,  472 => 285,  468 => 284,  464 => 283,  460 => 282,  456 => 281,  452 => 280,  448 => 279,  444 => 278,  440 => 277,  410 => 249,  404 => 248,  398 => 247,  392 => 246,  384 => 241,  380 => 240,  376 => 239,  372 => 238,  368 => 236,  365 => 235,  360 => 234,  355 => 233,  351 => 232,  333 => 216,  262 => 148,  254 => 143,  245 => 137,  235 => 130,  228 => 126,  219 => 120,  210 => 114,  167 => 74,  162 => 72,  158 => 71,  151 => 69,  143 => 64,  136 => 60,  132 => 59,  128 => 58,  117 => 50,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  40 => 12,  36 => 11,  32 => 10,  28 => 9,  19 => 2,);
    }
}
