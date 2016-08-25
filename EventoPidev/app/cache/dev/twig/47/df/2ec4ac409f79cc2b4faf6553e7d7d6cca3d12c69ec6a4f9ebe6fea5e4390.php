<?php

/* PidevFrontOfficeBundle::LoginUser.html.twig */
class __TwigTemplate_47df2ec4ac409f79cc2b4faf6553e7d7d6cca3d12c69ec6a4f9ebe6fea5e4390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!--

-->
<!DOCTYPE html>
<html>\t
<head>
<title>User Login </title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name=\"keywords\" content=\"User Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!--web-fonts-->
<link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Montserrat:400,700"), "html", null, true);
        echo " rel='stylesheet' type='text/css'>
<!--/web-fonts-->
</head>
<div style=\"margin-top: 40px; margin-left: 20px;\">
<div>
            ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 25
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 27
        echo "        </div>

        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 30
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
<body style=\"background:  url('";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bg/bg.jpg"), "html", null, true);
        echo "')no-repeat;
\tbackground-size: 100%; \"   >
   
    
<!--User-Login-->
<h1>User Login</h1>
<div class=\"avtar\">
\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bg/avtar.png"), "html", null, true);
        echo "\" />
</div>
\t                     

<div class=\"login-form\">
\t\t<p>Pas de compte ?<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("app_dev.php/register"), "html", null, true);
        echo "\">S'inscrire ici !</a></p>
\t\t\t
\t\t\t\t<div class=\"form-text\">
                                    \t                         ";
        // line 52
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 59
        echo "\t\t
\t</div>
                                     
                  

<!--/User-Login-->
<!--start-copyright-->
<div class=\"copy-right\">
\t<p>EVENTO COPYRIGHT</p> 
</div>
<!--//end-copyright-->\t
</body>
</html>";
    }

    // line 52
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 53
        echo "
\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"USERNAME\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'USERNAME';}\" >
\t\t\t\t\t<input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\">
\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"GO\" >
                                          ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::LoginUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  149 => 52,  133 => 59,  131 => 52,  125 => 49,  117 => 44,  107 => 37,  104 => 36,  98 => 35,  89 => 32,  84 => 31,  79 => 30,  75 => 29,  71 => 27,  63 => 25,  57 => 22,  53 => 21,  48 => 20,  46 => 19,  38 => 14,  33 => 12,  20 => 1,);
    }
}
