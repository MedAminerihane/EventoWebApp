<?php

/* PidevFrontOfficeBundle:Registration:register_content.html.twig */
class __TwigTemplate_6e22c6784b4c1075e50c295fee6e6dcc1eadba9ab9d1ee02b39729e89a43f86a extends Twig_Template
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
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

    
      ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
      
      
 
                  <div class=\"form-group\">
           </br>
                                  <div class=\"input-icon right\">
                                                            
                                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'widget', array("attr" => array("id" => "nature", "class" => "form-control", "placeholder" => "Nature")));
        echo "   

                                        
                                                    </div></div>
      
      
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-user\"></i>
                                                           ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "   
 
                                                    </div>
                                                           </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-envelope\"></i>
                                                                  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email address")));
        echo "   

                                                    </div>
                                                                  </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "   
</div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                                                       ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password")));
        echo "   
</div>
                                                    </div>
                                                   <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-phone\"></i>
                                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Phone")));
        echo "   

                                                    </div>
                                                    
                                                      </div>                 
                                                     <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                     ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "First Name")));
        echo "   

                                                    </div>
                                                                    
</div>
                     <div id=\"pr\">
                                                    <div class=\"form-group\" >
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Last Name")));
        echo "   

                                                 </div>
                                                   
                                            </div>
                     </div>
                                             <div class=\"form-group\">
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "   

                                                 </div>
                                                   </div>
                                      </div>
                                            
                                             <div id=\"prestataire\">
                                         
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matriculeFiscal", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Matricule Fiscale")));
        echo "   

                                                 </div>
                                            </br>
                                                        <div class=\"input-icon right\">
                                                            <i class=\"fa fa-lock\"></i>
                                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "   

                                                 </div>
                                              </div>
                                                       <div id=\"client\">
                                            <div class=\"row\">
                                               
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group\">
                                            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Age")));
        echo "   
                                                        </div>
                                                   
                                                        
                                                               </div>
                                            
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group\">
                                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "CIN Number")));
        echo "   
                                                        </div>
                                                    </div>                
                                                                  
                                                       </div>
                                                         </div>
                                                        <hr />
                                              
                                                  
                                                    
                                                </div>
                                                <div class=\"form-actions text-right pal\">
                                                     <input type=\"submit\" value=\"S'inscrire\" class=\"btn btn-warning\" />
                                                   
                                                </div>
                                                      
    
                                                     


  
                                              
</form>

                                                       <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/jquery.js"), "html", null, true);
        echo "\"></script>
                                                     <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/inscription.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 133,  198 => 132,  171 => 108,  160 => 100,  148 => 91,  139 => 85,  126 => 75,  114 => 66,  102 => 57,  91 => 49,  82 => 43,  73 => 37,  63 => 30,  53 => 23,  41 => 14,  30 => 6,  22 => 3,  19 => 2,);
    }
}
