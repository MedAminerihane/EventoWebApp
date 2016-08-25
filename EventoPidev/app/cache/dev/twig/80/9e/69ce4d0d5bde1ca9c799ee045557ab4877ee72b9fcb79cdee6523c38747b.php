<?php

/* PidevBackOfficeBundle:Abonnementtwig:Listabonnementadmin.html.twig */
class __TwigTemplate_809e69ce4d0d5bde1ca9c799ee045557ab4877ee72b9fcb79cdee6523c38747b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::AbonnementPrestataire.html.twig");
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
        return "PidevBackOfficeBundle::AbonnementPrestataire.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Abonnement($context, array $blocks = array())
    {
        // line 4
        echo "    <table class=\"table table-hover\">
        <thead>
                                    <tr>
                                        
                                        <th>Prestataire</th>
                                        <th>Type</th>
                                        <th>Date debut</th>
                                        <th>Date fin</th>
                                        <th></th>
                                    </tr>
                                    </thead>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 16
            echo "         
                                    
                                    <tbody>
                                    <tr>
                                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["x"], "idPrest", array()), "username", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "type", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["x"], "dateDebut", array()), "d-m-y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["x"], "dateFin", array()), "d-m-y"), "html", null, true);
            echo "</td>
                                        <td><span class=\"label label-sm label-success\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_abonnements", array("id" => $this->getAttribute($context["x"], "id", array()))), "html", null, true);
            echo "\"><font color=\"black \">Supprimer</font></span></a> </td>
                                    </tr>
                                   
                                    </tbody>
                                
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </table>
        <br>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("genererpdfabonnement");
        echo "\" class=\"btn btn-red navbar-btn\">Exporter en PDF</a>
    ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Abonnementtwig:Listabonnementadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 31,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  56 => 16,  52 => 15,  39 => 4,  36 => 3,  11 => 2,);
    }
}
