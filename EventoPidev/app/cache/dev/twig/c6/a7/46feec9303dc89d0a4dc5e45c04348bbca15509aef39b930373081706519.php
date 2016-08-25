<?php

/* PidevFrontOfficeBundle:EventClientTwig:Catalogueclient.html.twig */
class __TwigTemplate_c6a746feec9303dc89d0a4dc5e45c04348bbca15509aef39b930373081706519 extends Twig_Template
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
        echo "<html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/styles/styletest.css\" charset=\"UTF-8\"/>

    </head>
    <body>
        <h2 class=\"dark centerText\">
\t\t\t\t\t    Catalogue des Evénements</h2>
        <table border=\"1\">
            <tr>
            <b><th style=\"color:red\">Titre</th></b>
            <th style=\"color:red\">Image</th>
            <th style=\"color:red\">Description</th>
           <th style=\"color:red\">Lieu</th>
            <th style=\"color:red\">Datedebut</th>
            <th style=\"color:red\">DateFin</th>
            </tr>
            
        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "</td>
                <td> <img style=\"width:250px;height:250px\" groupId=\"([110000000])\" class=\"portalKachel\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "url", array()), "html", null, true);
            echo "\" alt=\"Charnières\" title=\"Charnières\" />    </td>        
                <td style=\"word-wrap: break-word\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "d-m-y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t                   
\t\t\t\t\t
       
        </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </table>
    </body>
    
    
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:Catalogueclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 34,  67 => 28,  63 => 27,  59 => 26,  55 => 25,  51 => 24,  47 => 23,  44 => 22,  40 => 21,  19 => 2,);
    }
}
