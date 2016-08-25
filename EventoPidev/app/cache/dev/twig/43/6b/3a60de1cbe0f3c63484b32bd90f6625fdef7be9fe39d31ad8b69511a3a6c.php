<?php

/* PidevBackOfficeBundle:Admin:ListClient.html.twig */
class __TwigTemplate_436b3a60de1cbe0f3c63484b32bd90f6625fdef7be9fe39d31ad8b69511a3a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::ListClientAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'listclient' => array($this, 'block_listclient'),
            'detailclient' => array($this, 'block_detailclient'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::ListClientAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_listclient($context, array $blocks = array())
    {
        // line 6
        echo "    
<div class=\"panel panel-pink\">
                          
    <div class=\"panel-heading\">Clients</div>
                            <div class=\"panel-body\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th >Username</th>
                                        <th>Age</th>
                                        <th>Email</th>
                                        <th>Statut</th>
                                        <th>Détail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "                                 
                                         <tr>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "age", array()), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                      <td>  ";
            // line 30
            if ($this->getAttribute($context["user"], "locked", array())) {
                // line 31
                echo "                                      <span class=\"label label-sm label-danger\">Bloqué</span>
                                          
                                            ";
            } else {
                // line 34
                echo "                                              <span class=\"label label-sm label-success\">Actif</span>
                                              ";
            }
            // line 36
            echo "                                                  </td>
                                               <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_detailC", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Détail</a></td>
                                            
                                            
                                            
                                            </tr>
                                      
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                    </a>
                                    </tbody>
                                </table>
                            </div>
                                  
                                    </div>
                                    
                                    
                                    
                                  
                                   
    ";
    }

    // line 57
    public function block_detailclient($context, array $blocks = array())
    {
        // line 58
        echo "         ";
        if (((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")) != null)) {
            // line 59
            echo "      
    
   
     <div class=\"col-lg-12\">
                              
                                    
                              <div class=\"row\">
                    <div class=\"col-md-12\"><h2>Profil: ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "username", array()), "html", null, true);
            echo "</h2>

                        <div class=\"row mtl\">
                            <div class=\"col-md-5\">
                                <div class=\"form-group\">
                                    <div class=\"text-center mbl\"><img src=\"http://www.afcb.co.uk/images/common/bg_player_profile_default_big.png\" alt=\"\" class=\"img-circle\"/></div>
                                    
                                </div>
                                
                                
                   
                                    
                                    
                                <table class=\"table table-striped table-hover\">
                                    <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "username", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "email", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Addresse</td>
                                        <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "adresse", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Statut</td>
                                        <td>";
            // line 95
            if ($this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "locked", array())) {
                // line 96
                echo "                                      <span class=\"label label-sm label-danger\">Bloqué</span>
                                          
                                            ";
            } else {
                // line 99
                echo "                                              <span class=\"label label-sm label-success\">Approved</span>
                                              ";
            }
            // line 100
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Téléhone</td>
                                        <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "tel", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Dernière connexion</td>
                                        <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "lastLogin", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                    
                                   
                                </table>
                                    <br>
                                    
                                    ";
            // line 118
            if ($this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "locked", array())) {
                // line 119
                echo "                                         <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_blockerC", array("id" => $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-success\">Débloquer</a>
                                       
                                         <button type=\"button\" disabled=\"disabled\" class=\"btn btn-danger\">Bloquer</button>
                                    
                                    ";
            } else {
                // line 124
                echo "                                          <button type=\"button\" class=\"btn btn-success\" disabled=\"disabled\">Débloquer</button>
                                        <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_blockerC", array("id" => $this->getAttribute((isset($context["cl"]) ? $context["cl"] : $this->getContext($context, "cl")), "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-danger\">Bloquer</a>
\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t
                            </div>
                         
                        </div>
                    </div>
                </div>
                              
                                
       
          
       
        ";
        }
        // line 138
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Admin:ListClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 138,  237 => 126,  232 => 125,  229 => 124,  220 => 119,  218 => 118,  205 => 108,  198 => 104,  192 => 100,  188 => 99,  183 => 96,  181 => 95,  174 => 91,  167 => 87,  160 => 83,  140 => 66,  131 => 59,  128 => 58,  125 => 57,  110 => 44,  97 => 37,  94 => 36,  90 => 34,  85 => 31,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 24,  59 => 23,  40 => 6,  37 => 5,  11 => 2,);
    }
}
