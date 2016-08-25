<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2728197abba51d0b4bb981702f0e47b3e96a4214315d525a13ddf61555e1516a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::LoginUser.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::LoginUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "  ";
            // line 7
            echo "      <div class=\"bg-danger\"  >
        <strong>  ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
        </div>
";
        }
        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   
    
 
  ";
        // line 29
        echo "   
  
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
  
\t<div class=\"form-text\">
\t\t\t\t\t<input type=\"text\" class=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"username\"  >
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" type=\"text\" placeholder=\"mot de passe\" >
\t
                                        
                                        <div class=\"form-group\">
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
<label for=\"remember_me\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
         
        </div>
        </div>

\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                       
                           <input type=\"hidden\" name=\"_target_path\" value=\"/indexR\" />  

  
  
  
  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  81 => 40,  72 => 34,  66 => 31,  62 => 29,  55 => 12,  52 => 11,  46 => 8,  43 => 7,  41 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}
