<?php

/* PidevBackOfficeBundle:Abonnementtwig:Listabonn.html.twig */
class __TwigTemplate_e0b171a5442a76bb64a67bf6d5ba6e181ed0b0960d5b55cf3a090b0ef5885859 extends Twig_Template
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
        echo "<h2 class=\"dark centerText\">
\t\t\t\t\t    Catalogue des Evénements</h2>
        <table border=\"1\" align=\"center\" >
            <tr>
            <b><th style=\"color:red;width:300\" >Prestataire</th></b>
            <th style=\"color:red;width:300\">Type</th>
            <th style=\"color:red;width:300\">Datedebut</th>
            <th style=\"color:red;width:300\">DateFin</th>
            </tr>
            
        
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "idprest", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abonnement"], "dateDebut", array()), "d-m-y"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abonnement"], "dateFin", array()), "d-m-y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t                   
\t\t\t\t\t
       
        </tr>
        </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Abonnementtwig:Listabonn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  47 => 17,  43 => 16,  39 => 15,  36 => 14,  32 => 13,  19 => 2,);
    }
}
