<?php

/* PidevBackOfficeBundle:Admin:statistiqueAdmin.html.twig */
class __TwigTemplate_9263d17ab0adc1b077032d8b98b81032b968371273bf6481057b48574243369e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::StatistiquesAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::StatistiquesAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stat($context, array $blocks = array())
    {
        // line 6
        echo "    
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
<script type=\"text/javascript\">
";
        // line 11
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Admin:statistiqueAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 6,  36 => 5,  11 => 3,);
    }
}
