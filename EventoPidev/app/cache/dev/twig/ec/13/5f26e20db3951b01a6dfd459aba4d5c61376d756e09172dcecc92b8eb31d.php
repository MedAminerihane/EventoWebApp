<?php

/* PidevFrontOfficeBundle::CataloguesClient.html.twig */
class __TwigTemplate_ec135f26e20db3951b01a6dfd459aba4d5c61376d756e09172dcecc92b8eb31d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Dashboard | Dashboard</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/favicon.png\""), "html", null, true);
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
    <meta charset=\"utf-8\" />
  <meta http-equiv=\"Content-Language\" content=\"en\" />
  <meta name=\"csrf_token\" content=\"UjfEZBJswqgeaC9fcN06YOR0uywD0FYx\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/images/icons/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/images/icons/apple-touch-icon-72x72-precomposed.png"), "html", null, true);
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/images/icons/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/images/icons/apple-touch-icon-144x144-precomposed.png"), "html", null, true);
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/images/icons/favicon.ico"), "html", null, true);
        echo "\" />






    

  


  


<script type=\"text/javascript\" charset=\"utf-8\">!function(a,b){if(a.EB=a.EB||{},EB.renderFonts=function(a){for(var c,d=\"\",e=b.createElement(\"style\"),f=0;c=a[f];f++)d+=\"@font-face{font-family:'Benton Sans';font-weight:\"+c.weight+\";font-style:\"+c.style+\";src:url(data:application/font-woff;base64,\"+c.base64+\") format('woff');}\";e.styleSheet&&!e.sheet?e.styleSheet.cssText=d:e.appendChild(b.createTextNode(d)),b.getElementsByTagName(\"head\")[0].appendChild(e),b.documentElement.className+=\" font-has-loaded\"},a.localStorage){var c=JSON.parse(localStorage.getItem(\"EB.fonts.benton.01-13-2015\"));if(c)EB.renderFonts(c);else{EB.shouldRenderFonts=!0;var d=b.createElement(\"script\");d.src=a.BENTON_PROPERTIES.src,b.getElementsByTagName(\"head\")[0].appendChild(d),setTimeout(function(){EB.shouldRenderFonts=!1},3e3)}}}(window,document);</script>
<!--[if lte IE 8]><![endif]><![endif]-->

  
    
    
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/css/production/base_styles.css"), "html", null, true);
        echo "\" />
  <!--[if lt IE 7]> <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/css/production/icon_ie7.css"), "html", null, true);
        echo "\" /> <![endif]-->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/css/src/smacss/non_modular/consumer_header.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/css/src/smacss/non_modular/home.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/css/src/smacss/non_modular/home_consumer.css"), "html", null, true);
        echo "\" />

  
    
  <!--[if lt IE 9]>
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/js/src/shims/html5.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <![endif]-->
  <!--[if lt IE 7]>
  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/js/src/shims/ie7_beta4.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <![endif]-->


  
    

<script type=\"text/javascript\">
(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement(\"script\");a.type=\"text/javascript\";a.async=!0;a.src='https://ebmedia.eventbrite.com/s3-build/28800-rc2015-04-01-bfe237b/django/js/src/vendor/mixpanel-2.2.min.js';f=e.getElementsByTagName(\"script\")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(\".\");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;\"undefined\"!==
typeof d?c=b[d]=[]:d=\"mixpanel\";c.people=c.people||[];c.toString=function(b){var a=\"mixpanel\";\"mixpanel\"!==d&&(a+=\".\"+d);b||(a+=\" (stub)\");return a};c.people.toString=function(){return c.toString(1)+\".people (stub)\"};i=\"disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user\".split(\" \");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init('409fb76f5803ac3d01acb061ee7325d7');
</script>


<script>

function getViewportClass() {
    try {

        var viewportWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    } catch(err) {
        return \"NA\";
    }

    if (!viewportWidth) {
        return \"NA\";
    }
    
    if (viewportWidth >= 800) {
        return \"Large\";
    }

    if (viewportWidth >= 480) {
        return \"Medium\";
    }

    return \"Small\";
}


// Register super properties from the template context
mixpanel.register({
    'TLD': '.com',
    'Authenticated?': false,
    'User Type': null,
    'Native?': false,
    'Locale': 'en_US',
    'Language': 'en\\u002Dus',
    'Categories test enabled': false
});

// Register super properties via Javascript
mixpanel.register({
    'Viewport': getViewportClass()
});

window.MIXPANEL_DEFAULT_PROPERTIES = {
    'URL Name': 'home'
};
</script>


 
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
        // line 144
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo " class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">EVENTO</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                      <li>WELCOME TO EVENTO ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </li>
                        <li>BIENVENUE À EVENTO ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</li>
                        <li>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " EVENTO مرحبا بك في</li>
                    </ul>
                </div>
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-red\">event</span></a>
                        
                    </li>
                   
                    <li class=\"dropdown topbar-user\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>&nbsp;<span class=\"hidden-xs\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-user\"></i>Mon Profil</a></li>
                            <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-envelope\"></i>Mes Invitations<span ></span></a></li>
                            <li class=\"divider\"></li>
                            <li>  <a href=\"";
        // line 167
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
\t\t\t<div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t\t\t<li><a href=\"http://themifycloud.com\">Admin templates</a></li>
\t\t\t\t\t\t<li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
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
        // line 224
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_homepage");
        echo "><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Accueil</span></a>
                       
                    </li>
\t\t\t\t\t  <li ><a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo "\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Evenement</span></a>
                      
                    </li>
\t\t\t\t\t
\t\t\t\t\t <li><a href=\"";
        // line 235
        echo $this->env->getExtension('routing')->getPath("list_offre_client");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Offre</span></a>
                          
                    </li>
\t\t\t\t\t 
                    <li class=\"active\" ><a href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("listcatalogue");
        echo "\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Catalogues</span></a></li>
                  
                   
                   
                    <li><a href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_list");
        echo "\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Invitations</span></a>
                          
                    </li>
                  
                  
                    <li><a href=\"";
        // line 254
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_profilC");
        echo "\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Profil</span></a>
                      
                    </li>
                  
                    <li><a href=\"";
        // line 260
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_client_ajout");
        echo "\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Reclamation</span></a>
                      
                    </li>
                    <li><a href=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("satistique");
        echo "\"><i class=\"fa fa-bar-chart-o fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Statistiques</span></a>
                       
                    </li>
                
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id=\"chat-form\" class=\"fixed\">
                <div class=\"chat-inner\">
                    <h2 class=\"chat-header\">
                        <a href=\"javascript:;\" class=\"chat-form-close pull-right\"><i class=\"glyphicon glyphicon-remove\">
                        </i></a><i class=\"fa fa-user\"></i>&nbsp; Chat &nbsp;<span class=\"badge badge-info\">3</span></h2>
                    <div id=\"group-1\" class=\"chat-group\">
                        <strong>Favorites</strong><a href=\"#\"><span class=\"user-status is-online\"></span> <small>
                            Verna Morton</small> <span class=\"badge badge-info\">2</span></a><a href=\"#\"><span
                                class=\"user-status is-online\"></span> <small>Delores Blake</small> <span class=\"badge badge-info is-hidden\">
                                    0</span></a><a href=\"#\"><span class=\"user-status is-busy\"></span> <small>Nathaniel Morris</small>
                                        <span class=\"badge badge-info is-hidden\">0</span></a><a href=\"#\"><span class=\"user-status is-idle\"></span>
                                            <small>Boyd Bridges</small> <span class=\"badge badge-info is-hidden\">0</span></a><a
                                                href=\"#\"><span class=\"user-status is-offline\"></span> <small>Meredith Houston</small>
                                                <span class=\"badge badge-info is-hidden\">0</span></a></div>
                    <div id=\"group-2\" class=\"chat-group\">
                        <strong>Office</strong><a href=\"#\"><span class=\"user-status is-busy\"></span> <small>
                            Ann Scott</small> <span class=\"badge badge-info is-hidden\">0</span></a><a href=\"#\"><span
                                class=\"user-status is-offline\"></span> <small>Sherman Stokes</small> <span class=\"badge badge-info is-hidden\">
                                    0</span></a><a href=\"#\"><span class=\"user-status is-offline\"></span> <small>Florence
                                        Pierce</small> <span class=\"badge badge-info\">1</span></a></div>
                    <div id=\"group-3\" class=\"chat-group\">
                        <strong>Friends</strong><a href=\"#\"><span class=\"user-status is-online\"></span> <small>
                            Willard Mckenzie</small> <span class=\"badge badge-info is-hidden\">0</span></a><a
                                href=\"#\"><span class=\"user-status is-busy\"></span> <small>Jenny Frazier</small>
                                <span class=\"badge badge-info is-hidden\">0</span></a><a href=\"#\"><span class=\"user-status is-offline\"></span>
                                    <small>Chris Stewart</small> <span class=\"badge badge-info is-hidden\">0</span></a><a
                                        href=\"#\"><span class=\"user-status is-offline\"></span> <small>Olivia Green</small>
                                        <span class=\"badge badge-info is-hidden\">0</span></a></div>
                </div>
                <div id=\"chat-box\" style=\"top: 400px\">
                    <div class=\"chat-box-header\">
                        <a href=\"#\" class=\"chat-box-close pull-right\"><i class=\"glyphicon glyphicon-remove\">
                        </i></a><span class=\"user-status is-online\"></span><span class=\"display-name\">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class=\"chat-content\">
                        <ul class=\"chat-box-body\">
                            <li>
                                <p>
                                    <img src=\"images/avatar/128.jpg\" class=\"avt\" /><span class=\"user\">John Doe</span><span
                                        class=\"time\">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class=\"odd\">
                                <p>
                                    <img src=\"images/avatar/48.jpg\" class=\"avt\" /><span class=\"user\">Swlabs</span><span
                                        class=\"time\">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class=\"chat-textarea\">
                        <input placeholder=\"Type your message\" class=\"form-control\" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                            Dashboard</div>
                    </div>
                    <ol class=\"breadcrumb page-breadcrumb pull-right\">
                        <li><i class=\"fa fa-home\"></i>&nbsp;<a href=\"dashboardClient.html\">Home</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"hidden\"><a href=\"#\">Dashboard</a>&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp;</li>
                        <li class=\"active\">Dashboard</li>
                    </ol>
                    <div class=\"clearfix\">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class=\"page-content\">
                    <div id=\"tab-general\">
                        ";
        // line 354
        $this->displayBlock('catalogue', $context, $blocks);
        // line 357
        echo "                    </div>
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
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
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

    // line 354
    public function block_catalogue($context, array $blocks = array())
    {
        // line 355
        echo "                            
                            ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::CataloguesClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 355,  687 => 354,  661 => 404,  657 => 403,  653 => 402,  649 => 401,  645 => 400,  641 => 399,  637 => 398,  632 => 396,  628 => 395,  624 => 394,  620 => 393,  616 => 392,  612 => 391,  608 => 390,  604 => 389,  600 => 388,  596 => 387,  592 => 386,  588 => 385,  584 => 384,  580 => 383,  576 => 382,  572 => 381,  568 => 380,  564 => 379,  560 => 378,  556 => 377,  552 => 376,  548 => 375,  544 => 374,  540 => 373,  536 => 372,  532 => 371,  528 => 370,  513 => 357,  511 => 354,  419 => 265,  411 => 260,  402 => 254,  392 => 247,  383 => 241,  374 => 235,  365 => 229,  357 => 224,  297 => 167,  292 => 165,  288 => 164,  281 => 162,  274 => 158,  267 => 154,  263 => 153,  259 => 152,  248 => 144,  169 => 68,  163 => 65,  155 => 60,  151 => 59,  146 => 57,  141 => 55,  137 => 54,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  20 => 2,);
    }
}
