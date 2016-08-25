<?php

/* PidevFrontOfficeBundle:EventClientTwig:EventMyList.html.twig */
class __TwigTemplate_929cf45442fd4457a1bdaad41bd73dfc702433858d21e2c697371cfe185b16b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::EvenementAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

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
        return "PidevFrontOfficeBundle::EvenementAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " liste des evenements ";
    }

    // line 5
    public function block_direction($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
    }

    // line 7
    public function block_titre1($context, array $blocks = array())
    {
        // line 8
        echo "                             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 14
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
        echo "    
         
    
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 24
            echo "                    
  
 <tr class=\"tbl-item\"><!--<img/>-->
     <td class=\"img\">
    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "url", array()), "html", null, true);
            echo "\" alt=\"\" title=\"\"  style=\"width:150px; height:150px;\" />  </td>                                          
    <td class=\"td-block\"><p class=\"date\">du ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        <p class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo " </p>
              <p class=\"desc\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo " </p>
           <p class=\"like\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "type", array()), "html", null, true);
            echo "</p>
           
         <ul class=\"social-icons list-unstyled list-inline mbl mtl\" style=\"text-align:right\" >
             <li>";
            // line 35
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton(array("url" => ((("http://localhost/PiDev/eventopidev/web/app_dev.php/detailsEvente/" . $this->getAttribute($context["event"], "id", array())) . "?url=") . $this->getAttribute($context["event"], "url", array())), "layout" => "icon"));
            echo "</li>
             <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("google_map_homepage", array("lieu" => $this->getAttribute($context["event"], "lieu", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"localiser\" class=\"facebook\"><i class=\"fa fa-map-marker\"></i></a></li>
             <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_evenement", array("id" => $this->getAttribute($context["event"], "id", array()), "url" => $this->getAttribute($context["event"], "url", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Afficher Details\" class=\"skype\"><i class=\"fa fa-th-list\"></i></a></li>
             <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_evenement", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Supprimer\" class=\"googleplus\" ><i class=\"fa fa-eraser\"></i></a></li>
                <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_evenement", array("id" => $this->getAttribute($context["event"], "id", array()), "url" => $this->getAttribute($context["event"], "url", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"modifier\" class=\"facebook\"><i class=\"fa fa-pencil\"></i></a></li>
         
         </ul>
    </td>
 </tr>


                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                            ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:EventMyList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  113 => 32,  109 => 31,  105 => 30,  99 => 29,  95 => 28,  89 => 24,  85 => 23,  80 => 20,  77 => 19,  66 => 14,  59 => 9,  54 => 8,  51 => 7,  45 => 5,  39 => 4,  11 => 3,);
    }
}
