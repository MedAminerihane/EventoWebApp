<?php

/* PidevFrontOfficeBundle::ReclamationClient.html.twig */
class __TwigTemplate_6f8f2439b8ac12e4bc4317f9faf12c6dc8ea264296104469a482daaf7e211f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Email | Email</title>
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
             <!--BEGIN BACK TO TOP-->
            <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo " class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">event</span></a>
                        
                    </li>
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Invitations<span ></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 58
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
        // line 108
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo "><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li ><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                    <li ><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("listcatalogue");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Catalogues</span></a></li>
                  
                   
                   
                    <li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Invitations</span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li class=\"active\"><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a href=\"";
        // line 149
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
                                Extras</div>
                        </div>
                        <ol class=\"breadcrumb page-breadcrumb pull-right\">
                            <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboardClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
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


                                   
                                    <div class=\"mtl mbl\"></div>
                                    <div class=\"row\">


                                        <div class=\"mtm mbm\"></div>
                                        <div class=\"\">
                                             ";
        // line 198
        $this->displayBlock('content', $context, $blocks);
        // line 199
        echo "                                        </div>
                                        <hr/>

                                    </div>
                               
                            </div>

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




                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
        <div id=\"footer\">
            <div class=\"copyright\">
                <a href=\"http://themifycloud.com\">2015 © EVENTO Copyright</a></div>
        </div>
        <!--END FOOTER-->
    <!--END PAGE WRAPPER-->
</div>
</div>
  <script src=";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "></script>
    <!--CORE JAVASCRIPT-->
    <script src=";
        // line 271
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

    // line 198
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::ReclamationClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 198,  498 => 271,  493 => 269,  489 => 268,  485 => 267,  481 => 266,  477 => 265,  473 => 264,  469 => 263,  464 => 261,  460 => 260,  456 => 259,  452 => 258,  448 => 257,  444 => 256,  440 => 255,  436 => 254,  432 => 253,  428 => 252,  424 => 251,  420 => 250,  416 => 249,  412 => 248,  408 => 247,  404 => 246,  400 => 245,  396 => 244,  392 => 243,  388 => 242,  384 => 241,  380 => 240,  376 => 239,  372 => 238,  368 => 237,  364 => 236,  360 => 235,  322 => 199,  320 => 198,  268 => 149,  260 => 144,  251 => 138,  241 => 131,  232 => 125,  223 => 119,  214 => 113,  206 => 108,  153 => 58,  148 => 56,  144 => 55,  137 => 53,  130 => 49,  123 => 45,  119 => 44,  115 => 43,  104 => 35,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
