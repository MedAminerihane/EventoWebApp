<?php

/* PidevFrontOfficeBundle:EventClientTwig:ajoutabonnement.html.twig */
class __TwigTemplate_3d588b4c1cc64b058eaa543c9505ab69bdd962e85d12938167739067c794c1da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::AbonnementPrestataire.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'Abonnement' => array($this, 'block_Abonnement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::AbonnementPrestataire.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Abonnement($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Ajouter abonnement</h1>
    <form action=\"\" method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <table>
            <tr><th>Type</th>
                <td>         ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Type", array()), 'widget');
        echo "
</td>
            </tr>
           <tr><th>Date Début</th>
                <td>         ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget');
        echo "
</td>
            </tr>
            <tr><th>Date fin</th>
                <td>         ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget');
        echo "
</td>
            </tr>
        </table>

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget');
        echo "
        
    </form>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:ajoutabonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  62 => 16,  55 => 12,  48 => 8,  42 => 5,  39 => 4,  36 => 3,  11 => 2,);
    }
}
