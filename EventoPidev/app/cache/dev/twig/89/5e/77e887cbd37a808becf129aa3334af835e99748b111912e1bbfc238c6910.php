<?php

/* PidevFrontOfficeBundle:Client:ProfileClient.html.twig */
class __TwigTemplate_895e77e887cbd37a808becf129aa3334af835e99748b111912e1bbfc238c6910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::ProfileClient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'profil_content' => array($this, 'block_profil_content'),
            'account_content' => array($this, 'block_account_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::ProfileClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_profil_content($context, array $blocks = array())
    {
        // line 4
        echo "<table class=\"table table-striped table-hover\">
                                    <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Addresse</td>
                                        <td>";
        // line 16
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
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tel", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Membre depuis</td>
                                        <td> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "D/M/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    </tbody>
                                </table>
    ";
    }

    // line 33
    public function block_account_content($context, array $blocks = array())
    {
        // line 34
        echo "        
        
        <form  method=\"POST\" class=\"form-horizontal\"><h3>Paramètre Du Compte</h3>
";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Email</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"email\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\" name =\"email\" placeholder=\"email@yourcompany.com\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Username</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"username\" value=\"";
        // line 58
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
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\" placeholder=\"nom\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Prénom</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"lastname\" placeholder=\"prénom\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                          <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Téléphone</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"number\" name =\"phone\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tel", array()), "html", null, true);
        echo "\" placeholder=\"Téléphone\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Age</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-4\"><input  type=\"number\"  name=\"age\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "age", array()), "html", null, true);
        echo "\" palceholder=\"Age\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">Adresse</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><input type=\"text\" name =\"adresse\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "\" placeholder=\"Adresse\" class=\"form-control\"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group\"><label class=\"col-sm-3 control-label\">A propos</label>

                                                <div class=\"col-sm-9 controls\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xs-9\"><textarea rows=\"3\" class=\"form-control\"></textarea></div>
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
        return "PidevFrontOfficeBundle:Client:ProfileClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 117,  195 => 109,  184 => 101,  173 => 93,  162 => 85,  132 => 58,  121 => 50,  115 => 46,  106 => 43,  99 => 38,  95 => 37,  90 => 34,  87 => 33,  78 => 28,  71 => 24,  60 => 16,  53 => 12,  46 => 8,  40 => 4,  37 => 3,  11 => 1,);
    }
}
