<?php

/* PidevFrontOfficeBundle::Register.html.twig */
class __TwigTemplate_f1694730278f675c744faba2b73d1508d5e2f7dca2c139f299bd1809cb37159e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Register</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link type=\"text/css\" href=\" http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,700,300\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
</head>
<body style=\"background: url('";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bg/bg.jpg"), "html", null, true);
        echo "') no-repeat;
\tbackground-size: 100%; \"  >
    <div class=\"page-form\">
        <div class=\"panel panel-blue\">
          <div class=\"col-md-12 text-center\">
                        <h1 style=\"margin-top: -90px; font-size: 48px;\">
                            EVENTO</h1>
                        <br>
                    </div>
                                            <div class=\"panel-heading\">
                                                Registration</div>
                                            <div class=\"panel-body pan\">
";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 92
        echo "                                            </div>
        </div>
      
    </div>
 
   


</body>
</html>
";
    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 30
        echo "


                                                <form action=\"#\">
                                                    
                                                <div class=\"form-body pal\">
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-user\"></i>
                                                            <input id=\"inputName\" type=\"text\" placeholder=\"Username\" class=\"form-control\" /></div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-envelope\"></i>
                                                            <input id=\"inputEmail\" type=\"text\" placeholder=\"Email address\" class=\"form-control\" /></div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                                            <input id=\"inputPassword\" type=\"password\" placeholder=\"Password\" class=\"form-control\" /></div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                                            <input id=\"inputConfirmPassword\" type=\"password\" placeholder=\"Confirm Password\" class=\"form-control\" /></div>
                                                    </div>
                                                    <hr />
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group\">
                                                                <input id=\"inputFirstName\" type=\"text\" placeholder=\"First Name\" class=\"form-control\" /></div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group\">
                                                                <input id=\"inputLastName\" type=\"text\" placeholder=\"Last Name\" class=\"form-control\" /></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <select class=\"form-control\">
                                                            <option>Gender</option>
                                                            <option value=\"0\">Male</option>
                                                            <option value=\"1\">Female</option>
                                                            <option value=\"2\">Other</option>
                                                        </select></div>
                                                    <div class=\"form-group\">
                                                        <div class=\"checkbox\">
                                                            <label>
                                                                <input tabindex=\"5\" type=\"checkbox\" />&nbsp; I want to receive news and special
                                                                offers</label></div>
                                                    </div>
                                                    <div class=\"form-group mbn\">
                                                        <div class=\"checkbox\">
                                                            <label>
                                                                <input tabindex=\"5\" type=\"checkbox\" />&nbsp; I agree with the Terms and Conditions</label></div>
                                                    </div>
                                                </div>
                                                <div class=\"form-actions text-right pal\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">
                                                        Submit</button>
                                                </div>
                                                </form>
                                             ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle::Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  87 => 29,  73 => 92,  71 => 29,  56 => 17,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  20 => 1,);
    }
}
