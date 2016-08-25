<?php

/* PidevBackOfficeBundle:Default:ajoutReclamation.html.twig */
class __TwigTemplate_d1bd2b5c2d8573b0f2ebad9488f540d4a486ce6f3527600da3f5f9d71fac4566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::ReclamationAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::ReclamationAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"col-sm-9 col-md-12\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><button style=\"color: rgb(220, 103, 103);\" type=\"submit\" class=\"nav nav-pills nav-stacked\" onclick='window.location.href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_admin_list");
        echo "\"' data-toggle=\"tab\" ><span class=\"fa fa-inbox\"></span>&nbsp;
                        Retourner a la liste</button></li>

            
        </ul>
        <ul class=\"nav nav-pills nav-stacked\" style=\"background: rgb(255, 255, 255);\">
            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox fa-fw mrs\"></i>Nouvelle Reclamation</a></li>
        </ul>
        <div id=\"generalTabContent\" class=\"tab-content\">
            <div id=\"tab-edit\" class=\"tab-pane fade in active\">
                <form method=\"POST\" class=\"form-horizontal\">
                   
                        
                        <h3 class=\"nav nav-pills nav-stacked\"><b>Reclamation du client :</b></h3>
                           <div class=\"controls\">
                                <p>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
        echo "</p>
                            </div>
                       
                            <br><br><br>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"><b>Message<b/></label>
                        <div class=\"col-sm-9 controls\">
                            <div class=\"row\">
                                <div class=\"col-xs-11\"> <textarea style=\"width: 100%;\" name=\"contenuu\"  rows=\"8\"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                     <div class=\"form-group\">
                       
                        <div class=\"col-sm-12 controls\">
                            <button type=\"reset\" class=\"btn btn-red\" style=\"width: 47%; alignment-adjust: 'center';\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-green\" style=\"width: 47%; alignment-adjust: 'center'; \">Repondre</button>
                        </div>
                       
                     </div>
                    
                    
                </form>  
            </div>
        </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Default:ajoutReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  64 => 14,  60 => 12,  51 => 9,  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
