<?php

/* PidevFrontOfficeBundle::StatistiquesPrestataire.html.twig */
class __TwigTemplate_415063bb8f73e040cbe7c4f1e08440cd3873fe3025baa4a62ca85c327f4b4a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Charts | Charts</title>
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
      
        <!--BEGIN BACK TO TOP-->
        <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
         <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexP");
        echo "\" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">demande</span></a>
                        
                    </li>
                    
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a  href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilP");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("list_offre_prestataire");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Offres<span class=\"badge \"></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 61
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
                       <li ><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexP");
        echo "\"><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t
\t\t\t\t <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("list_offre_prestataire");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t<li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Demandes Offres</span></a>\t\t 
                 
                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("ajouter_abonnement");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Abonnements</span></a>
                          
                    </li>
                  
                  
                    <li ><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilP");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li class=\"active\"><a href=\"";
        // line 143
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
                            Charts</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboardClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Charts</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Charts</li>
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
                              
                                ";
        // line 190
        $this->displayBlock('stat', $context, $blocks);
        // line 273
        echo "
                              
                                </div>
                                
                            
                     
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div class=\"copyright\">
                        <a href=\"http://themifycloud.com\">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src=";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "></script>
    <!--CORE JAVASCRIPT-->
    <script src=";
        // line 330
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

    // line 190
    public function block_stat($context, array $blocks = array())
    {
        echo "   
                              <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Line Chart</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"line-chart\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Bar Chart</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"bar-chart\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Area Chart</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"area-chart\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Pie Chart</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"pie-chart\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Line Chart - Spline</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"line-chart-spline\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Bar Chart - Stack</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\"><h4 class=\"block-heading\">Bar Chart - Stack</h4>

                                <div id=\"bar-chart-stack\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Area Chart - Spline</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"Div1\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                        <div class=\"portlet box\">
                            <div class=\"portlet-header\">
                                <div class=\"caption\">Percentiles Chart</div>
                                <div class=\"tools\"><i class=\"fa fa-chevron-up\"></i><i data-toggle=\"modal\" data-target=\"#modal-config\" class=\"fa fa-cog\"></i><i class=\"fa fa-refresh\"></i><i class=\"fa fa-times\"></i></div>
                            </div>
                            <div class=\"portlet-body\">
                                <div id=\"percentiles-chart\" style=\"width: 100%; height:300px\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                 
                                    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::StatistiquesPrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 190,  472 => 330,  467 => 328,  463 => 327,  459 => 326,  455 => 325,  451 => 324,  447 => 323,  443 => 322,  438 => 320,  434 => 319,  430 => 318,  426 => 317,  422 => 316,  418 => 315,  414 => 314,  410 => 313,  406 => 312,  402 => 311,  398 => 310,  394 => 309,  390 => 308,  386 => 307,  382 => 306,  378 => 305,  374 => 304,  370 => 303,  366 => 302,  362 => 301,  358 => 300,  354 => 299,  350 => 298,  346 => 297,  342 => 296,  338 => 295,  334 => 294,  311 => 273,  309 => 190,  259 => 143,  251 => 138,  242 => 132,  232 => 125,  225 => 121,  217 => 116,  208 => 110,  156 => 61,  151 => 59,  147 => 58,  140 => 56,  132 => 51,  125 => 47,  121 => 46,  117 => 45,  106 => 37,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
