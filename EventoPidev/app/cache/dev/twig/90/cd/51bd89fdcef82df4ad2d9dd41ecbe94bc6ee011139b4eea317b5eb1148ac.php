<?php

/* PidevFrontOfficeBundle::ProfilePrestataire.html.twig */
class __TwigTemplate_90cd51bd89fdcef82df4ad2d9dd41ecbe94bc6ee011139b4eea317b5eb1148ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'profil_content' => array($this, 'block_profil_content'),
            'account_content' => array($this, 'block_account_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Profil | Profil</title>
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
\t\t\t\t\t 
                 <li><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Demandes Offres</span></a>
                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("ajouter_abonnement");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Abonnements</span></a>
                          
                    </li>
                  
                  
                    <li class=\"active\"><a href=\"";
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
                    <li><a href=\"";
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
                            Profil</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboardClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Profil</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Profil</li>
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
                    <div class=\"col-md-12\"><h2>Profil: ";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2>

                        <div class=\"row mtl\">
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                    <div class=\"text-center mbl\"><img src=\"http://lorempixel.com/640/480/business/1/\" alt=\"\" class=\"img-responsive\"/></div>
                                    
                                </div>
                                
                                
                     ";
        // line 203
        $this->displayBlock('profil_content', $context, $blocks);
        // line 236
        echo "\t\t\t\t\t\t\t\t<div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://themifycloud.com\">Admin templates</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            </div>
                            <div class=\"col-md-9\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#tab-edit\" data-toggle=\"tab\">Modifer Profil</a></li>
                                   
                                </ul>
                                <div id=\"generalTabContent\" class=\"tab-content\">
                                    <div id=\"tab-edit\" class=\"tab-pane fade in active\">
                                    
                                        ";
        // line 253
        $this->displayBlock('account_content', $context, $blocks);
        // line 400
        echo "                                    </div>
                                    <div id=\"tab-messages\" class=\"tab-pane fade in\">
                                        <div class=\"row mbl\">
                                            <div class=\"col-lg-6\"><span style=\"margin-left: 15px\"></span><input type=\"checkbox\"/><a href=\"#\" class=\"btn btn-success btn-sm mlm mrm\"><i class=\"fa fa-send-o\"></i>&nbsp;
                                                Write Mail</a><a href=\"#\" class=\"btn btn-white btn-sm\"><i class=\"fa fa-trash-o\"></i>&nbsp;
                                                Delete</a></div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-group\"><input type=\"text\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-white\">Search</button></span></div>
                                            </div>
                                        </div>
                                        <div class=\"list-group\"><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star text-yellow mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                            - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span
                                                class=\"fa fa-star text-yellow mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                            - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span
                                                style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span
                                                class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                            - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span
                                                style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span
                                                class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                            - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span
                                                style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span
                                                class=\"glyphicon glyphicon-paperclip\"></span></span></a><a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span><span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a></div>
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
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "></script>
    <!--CORE JAVASCRIPT-->
    <script src=";
        // line 489
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

    // line 203
    public function block_profil_content($context, array $blocks = array())
    {
        // line 204
        echo "                                    
                                    
                                <table class=\"table table-striped table-hover\">
                                    <tbody>
                                    <tr>
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
                                    </tbody>
                                </table>
                         
                                    ";
    }

    // line 253
    public function block_account_content($context, array $blocks = array())
    {
        // line 254
        echo "                                        
                                        <form action=\"#\" class=\"form-horizontal\"><h3>Account Setting</h3>

                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Email</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"email\" placeholder=\"email@yourcompany.com\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Username</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"username\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Password</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input type=\"password\" placeholder=\"password\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Confirm Password</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input type=\"password\" placeholder=\"password\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h3>Paramètre de profil</h3>

                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">First Name</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"first name\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Last Name</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"last name\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Gender</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\">
                                                            <div class=\"radio\"><label class=\"radio-inline\"><input type=\"radio\" value=\"0\" name=\"gender\" checked=\"checked\"/>&nbsp;
                                                                Male</label><label class=\"radio-inline\"><input type=\"radio\" value=\"1\" name=\"gender\"/>&nbsp;
                                                                Female</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Birthday</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input id=\"datepicker-normal\" type=\"text\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Marital Status</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><select class=\"form-control\">
                                                            <option>Single</option>
                                                            <option>Married</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Position</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><select class=\"form-control\">
                                                            <option>CEO</option>
                                                            <option>Director</option>
                                                            <option>Manager</option>
                                                            <option>Staff</option>
                                                            <option>Office Boy</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">About</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><textarea rows=\"3\" class=\"form-control\"></textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h3>Contact Setting</h3>

                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Mobile Phone</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"mobile phone\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Website</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"website\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Facebook</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"facebook\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Twitter</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" placeholder=\"twitter\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <button type=\"submit\" class=\"btn btn-green btn-block\">Finish</button>
                                        </form>
                                                    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::ProfilePrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 254,  604 => 253,  569 => 204,  566 => 203,  542 => 489,  537 => 487,  533 => 486,  529 => 485,  525 => 484,  521 => 483,  517 => 482,  513 => 481,  508 => 479,  504 => 478,  500 => 477,  496 => 476,  492 => 475,  488 => 474,  484 => 473,  480 => 472,  476 => 471,  472 => 470,  468 => 469,  464 => 468,  460 => 467,  456 => 466,  452 => 465,  448 => 464,  444 => 463,  440 => 462,  436 => 461,  432 => 460,  428 => 459,  424 => 458,  420 => 457,  416 => 456,  412 => 455,  408 => 454,  404 => 453,  349 => 400,  347 => 253,  328 => 236,  326 => 203,  313 => 193,  260 => 143,  252 => 138,  243 => 132,  233 => 125,  227 => 122,  218 => 116,  209 => 110,  157 => 61,  152 => 59,  148 => 58,  141 => 56,  133 => 51,  126 => 47,  122 => 46,  118 => 45,  107 => 37,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
