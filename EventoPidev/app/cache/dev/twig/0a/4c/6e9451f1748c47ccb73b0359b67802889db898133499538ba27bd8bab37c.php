<?php

/* PidevBackOfficeBundle:Admin:ProfileAdmin.html.twig */
class __TwigTemplate_0a4c6e9451f1748c47ccb73b0359b67802889db898133499538ba27bd8bab37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::ProfileAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'profil_content' => array($this, 'block_profil_content'),
            'account_content' => array($this, 'block_account_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::ProfileAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_profil_content($context, array $blocks = array())
    {
        // line 5
        echo "<table class=\"table table-striped table-hover\">
                                    <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Addresse</td>
                                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Statut</td>
                                        <td><span class=\"label label-success\">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Téléphone</td>
                                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tel", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Membre depuis</td>
                                        <td> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "D/M/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                   
                                    
                                    
                                    </tbody>
                                </table>
    ";
    }

    // line 37
    public function block_account_content($context, array $blocks = array())
    {
        // line 38
        echo "        
        
        <form  method=\"POST\" class=\"form-horizontal\"><h3>Paramètre Du Compte</h3>
";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 47
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Email</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"email\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\" name =\"email\" placeholder=\"email@domaine.com\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Username</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"username\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" placeholder=\"username\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Mot de passe</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input type=\"password\" name =\"password\" placeholder=\"mot de passe\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Confirmation du mot de passe</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input type=\"password\"  name =\"passwordc\" placeholder=\"mot de passe\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h3>Paramètre de profil</h3>

                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Nom</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"firstname\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\" placeholder=\" nom \" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                          <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Téléphone</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"number\" name =\"phone\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tel", array()), "html", null, true);
        echo "\" placeholder=\"Téléphone\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Adresse</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"adresse\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "\" placeholder=\"Adresse\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                                 
                                         
                                              <hr/>
                                            <button type=\"submit\" class=\"btn btn-green btn-block\">Sauvegarder la modification</button>
                                        </form>
        
        ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Admin:ProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 106,  177 => 98,  165 => 89,  135 => 62,  124 => 54,  118 => 50,  109 => 47,  102 => 42,  98 => 41,  93 => 38,  90 => 37,  78 => 29,  71 => 25,  60 => 17,  53 => 13,  46 => 9,  40 => 5,  37 => 4,  11 => 2,);
    }
}
