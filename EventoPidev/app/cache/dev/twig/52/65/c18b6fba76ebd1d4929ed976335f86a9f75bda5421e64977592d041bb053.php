<?php

/* PidevFrontOfficeBundle:Default:envoyerReclamationClient.html.twig */
class __TwigTemplate_5265c18b6fba76ebd1d4929ed976335f86a9f75bda5421e64977592d041bb053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::ReclamationClient.html.twig");
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
        return "PidevFrontOfficeBundle::ReclamationClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-sm-9 col-md-12\">
        <ul class=\"nav nav-tabs\">
         
        </ul>
        <ul class=\"nav nav-pills nav-stacked\" style=\"background: rgb(255, 255, 255);\">
            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox fa-fw mrs\"></i>Nouvelle Reclamation</a></li>
        </ul>
        <div id=\"generalTabContent\" class=\"tab-content\">
            <div id=\"tab-edit\" class=\"tab-pane fade in active\">
                <form method=\"POST\" class=\"form-horizontal\">
                  
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"><b>Message :<b/></label>
                        <div class=\"col-sm-9 controls\">
                            <div class=\"row\">
                                <div class=\"col-xs-11\"> <textarea style=\"width: 100%;\" name=\"contenu\"  rows=\"12\"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                     <div class=\"form-group\">
                        <div class=\"col-sm-12 controls\">
                            <button type=\"reset\" class=\"btn btn-red\" style=\"width: 47%; alignment-adjust: 'center';\">Annuler</button>
                            <button type=\"submit\" class=\"btn btn-green\" style=\"width: 47%; alignment-adjust: 'center'; \">Envoyer</button>
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
        return "PidevFrontOfficeBundle:Default:envoyerReclamationClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
