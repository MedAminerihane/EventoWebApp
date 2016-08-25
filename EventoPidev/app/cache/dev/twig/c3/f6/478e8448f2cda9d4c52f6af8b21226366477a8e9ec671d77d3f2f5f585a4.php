<?php

/* PidevBackOfficeBundle::ListPrestataireAdmin.html.twig */
class __TwigTemplate_c3f6478e8448f2cda9d4c52f6af8b21226366477a8e9ec671d77d3f2f5f585a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listclient' => array($this, 'block_listclient'),
            'detailclient' => array($this, 'block_detailclient'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Tables | Tables</title>
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
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexA");
        echo "\"class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                         <li>WELCOME TO EVENTO Administrateur </li>
                        <li>BIENVENUE À EVENTO Administrateur</li>
                        <li>Administrateur EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-green\">3</span></a>
                        
                    </li>
                    
                   <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("liste_abonnements");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i>Reclamation<span class=\"badge badge-danger\">3</span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 60
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
\t\t\t\t\t   <li ><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexA");
        echo "\"><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("lister_evenement_b");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li><a href=\"OffreAdmin.html\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offres</span></a>
                          
                    </li>
\t\t\t\t\t 
                  <li ><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("liste_abonnements");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Abonnement</span></a></li>
                  
                   
                    <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_listC");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Clients</span></a>
                          
                    </li>
                   <li class=\"active\"><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_listP");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Prestataires </span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilA");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_admin_list");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a  href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("statistiqueA");
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
                            Tables</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_indexA");
        echo "\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Tables</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                            <li class=\"active\">Prestataires</li>
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
 <div class=\"col-lg-6\">
                  
                        ";
        // line 199
        $this->displayBlock('listclient', $context, $blocks);
        // line 242
        echo "                  
 </div> 
                    
                    <div class=\"col-lg-6\">
                            ";
        // line 246
        $this->displayBlock('detailclient', $context, $blocks);
        // line 249
        echo "                       
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
                        <a href=\"http://themifycloud.com\">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src=\"script/jquery-1.10.2.min.js\"></script>
    <script src=\"script/jquery-migrate-1.2.1.min.js\"></script>
    <script src=\"script/jquery-ui.js\"></script>
    <script src=\"script/bootstrap.min.js\"></script>
    <script src=\"script/bootstrap-hover-dropdown.js\"></script>
    <script src=\"script/html5shiv.js\"></script>
    <script src=\"script/respond.min.js\"></script>
    <script src=\"script/jquery.metisMenu.js\"></script>
    <script src=\"script/jquery.slimscroll.js\"></script>
    <script src=\"script/jquery.cookie.js\"></script>
    <script src=\"script/icheck.min.js\"></script>
    <script src=\"script/custom.min.js\"></script>
    <script src=\"script/jquery.news-ticker.js\"></script>
    <script src=\"script/jquery.menu.js\"></script>
    <script src=\"script/pace.min.js\"></script>
    <script src=\"script/holder.js\"></script>
    <script src=\"script/responsive-tabs.js\"></script>
    <script src=\"script/jquery.flot.js\"></script>
    <script src=\"script/jquery.flot.categories.js\"></script>
    <script src=\"script/jquery.flot.pie.js\"></script>
    <script src=\"script/jquery.flot.tooltip.js\"></script>
    <script src=\"script/jquery.flot.resize.js\"></script>
    <script src=\"script/jquery.flot.fillbetween.js\"></script>
    <script src=\"script/jquery.flot.stack.js\"></script>
    <script src=\"script/jquery.flot.spline.js\"></script>
    <script src=\"script/zabuto_calendar.min.js\"></script>

    <script src=\"script/index.js\"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"script/highcharts.js\"></script>
    <script src=\"script/data.js\"></script>
    <script src=\"script/drilldown.js\"></script>
    <script src=\"script/exporting.js\"></script>
    <script src=\"script/highcharts-more.js\"></script>
    <script src=\"script/charts-highchart-pie.js\"></script>
    <script src=\"script/charts-highchart-more.js\"></script>
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

    // line 199
    public function block_listclient($context, array $blocks = array())
    {
        // line 200
        echo "                        <div class=\"panel panel-violet\">
                            <div class=\"panel-heading\">Striped Table</div>
                            <div class=\"panel-body\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Henry</td>
                                        <td>23</td>
                                        <td><span class=\"label label-sm label-success\">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>John</td>
                                        <td>45</td>
                                        <td><span class=\"label label-sm label-info\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>30</td>
                                        <td><span class=\"label label-sm label-warning\">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Lahm</td>
                                        <td>15</td>
                                        <td><span class=\"label label-sm label-danger\">Blocked</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            ";
    }

    // line 246
    public function block_detailclient($context, array $blocks = array())
    {
        // line 247
        echo "                            
                          ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle::ListPrestataireAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 247,  449 => 246,  404 => 200,  401 => 199,  320 => 249,  318 => 246,  312 => 242,  310 => 199,  282 => 174,  260 => 155,  252 => 150,  243 => 144,  233 => 137,  225 => 132,  217 => 127,  202 => 115,  194 => 110,  141 => 60,  135 => 57,  128 => 55,  107 => 37,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
