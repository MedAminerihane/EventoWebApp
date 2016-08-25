<?php

/* PidevFrontOfficeBundle:Prestataire:ProfilePrestataire.html.twig */
class __TwigTemplate_00ea151e610005258385d47ef83239ecb37808545be38429b339af65cb4c48a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::ProfilePrestataire.html.twig");
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
        return "PidevFrontOfficeBundle::ProfilePrestataire.html.twig";
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
                                        <td><span class=\"label label-success\">Actif</span></td>
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
                                    <tr>
                                        <td>Matricule Fiscale</td>
                                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matriculeFiscal", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>
    ";
    }

    // line 40
    public function block_account_content($context, array $blocks = array())
    {
        // line 41
        echo "        
        
        <form  method=\"POST\" class=\"form-horizontal\"><h3>Paramètre Du Compte</h3>
";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 50
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Email</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\" name =\"email\" placeholder=\"email@yourcompany.com\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Username</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"username\" value=\"";
        // line 65
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
                                            <h3>Profile Setting</h3>

                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Nom</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"nom\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\" placeholder=\"nom\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                          <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Téléphone</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"number\" name =\"phone\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tel", array()), "html", null, true);
        echo "\" placeholder=\"téléphone\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Adresse</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"adresse\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "\" placeholder=\"Adresse\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                                    <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Matricule Fiscale</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"matricule\" placeholder=\"Matricule fiscale\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "matriculeFiscal", array()), "html", null, true);
        echo "\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Déscription</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input rows=\"3\" type=\"textarea\" name =\"description\" class=\"form-control\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "description", array()), "html", null, true);
        echo "\"/></div>
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
        return "PidevFrontOfficeBundle:Prestataire:ProfilePrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 127,  205 => 117,  194 => 109,  183 => 101,  171 => 92,  141 => 65,  130 => 57,  124 => 53,  115 => 50,  108 => 45,  104 => 44,  99 => 41,  96 => 40,  85 => 33,  78 => 29,  71 => 25,  60 => 17,  53 => 13,  46 => 9,  40 => 5,  37 => 4,  11 => 2,);
    }
}
