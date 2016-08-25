<?php

/* PidevBackOfficeBundle:EventFileTwig:EventTwig.html.twig */
class __TwigTemplate_94c7f8f3dda900e0b276ebd47a6c186999fc72a8b3ff2032cd147823112e7b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::EvenementAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'direction' => array($this, 'block_direction'),
            'titre1' => array($this, 'block_titre1'),
            'titreEvent' => array($this, 'block_titreEvent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::EvenementAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " liste des evenements ";
    }

    // line 4
    public function block_direction($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("lister_evenement_b");
    }

    // line 6
    public function block_titre1($context, array $blocks = array())
    {
        // line 7
        echo "                             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_titreEvent($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 21
            echo "                    
  
 <tr class=\"tbl-item\"><!--<img/>-->
     <td class=\"img\">
    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "url", array()), "html", null, true);
            echo "\" alt=\"\" title=\"\"  style=\"width:150px; height:150px;\" />  </td>                                          
    <td class=\"td-block\"><p class=\"date\">du ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        <p class=\"title\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo " </p>
              <p class=\"desc\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo " </p>
           <p class=\"like\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "type", array()), "html", null, true);
            echo "</p>
           
         <ul class=\"social-icons list-unstyled list-inline mbl mtl\" style=\"text-align:right\" >
            <li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("google_map_homepage", array("lieu" => $this->getAttribute($context["event"], "lieu", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"localiser\" class=\"facebook\"><i class=\"fa fa-map-marker\"></i></a></li> 
             <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_evenement_b", array("id" => $this->getAttribute($context["event"], "id", array()), "url" => $this->getAttribute($context["event"], "url", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Afficher Details\" class=\"skype\"><i class=\"fa fa-th-list\"></i></a></li>
             <li><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_evenement_b", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Supprimer\" class=\"googleplus\" ><i class=\"fa fa-eraser\"></i></a></li>
         </ul>
    </td>
 </tr>


                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                            ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:EventFileTwig:EventTwig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  123 => 34,  119 => 33,  115 => 32,  109 => 29,  105 => 28,  101 => 27,  95 => 26,  91 => 25,  85 => 21,  80 => 20,  77 => 19,  66 => 13,  59 => 8,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 2,);
    }
}
