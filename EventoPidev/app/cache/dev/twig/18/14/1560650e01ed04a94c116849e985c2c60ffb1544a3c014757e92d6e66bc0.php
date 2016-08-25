<?php

/* PidevFrontOfficeBundle:EventClientTwig:EventDetailsClient.html.twig */
class __TwigTemplate_18141560650e01ed04a94c116849e985c2c60ffb1544a3c014757e92d6e66bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::EventDetailsAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'direction' => array($this, 'block_direction'),
            'eventName' => array($this, 'block_eventName'),
            'tof' => array($this, 'block_tof'),
            'details' => array($this, 'block_details'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::EventDetailsAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_direction($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('routing')->getPath("lister_evenement");
        echo " ";
    }

    // line 9
    public function block_eventName($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 12
    public function block_tof($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo " ";
    }

    // line 16
    public function block_details($context, array $blocks = array())
    {
        // line 17
        echo "   
                                    <tr>
                                        <td>Lieu</td>
                                        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lieu", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Date de debut</td>
                                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>date de fin</td>
                                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Confidentialite</td>
                                        <td><span class=\"label label-success\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "confidentialite", array()), "html", null, true);
        echo "</span></td>
                                    </tr>
                                    <tr>
                                        <td>note</td>
                                        <td>
                                            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                              ";
            if (($this->getAttribute($context["loop"], "index", array()) <= $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "somme", array()))) {
                // line 39
                echo "                            <label for=\"overall-5\">
                                 <i class=\"fa fa-star text-yellow\"></i>
                              </label>
                                        ";
            } else {
                // line 43
                echo "                                       <label for=\"overall-5\">
                                             <i class=\"fa fa-star\"></i>
                                         </label>
                                    ";
            }
            // line 46
            echo " 
                                            
                                           

                                      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "       
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Prix</td>
                                        <td> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "prix", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Creer par: </td>
                                        <td> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "createur", array()), "nom", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "type", array()), "html", null, true);
        echo "
                                        </td>
                                    </tr>
                                    <tr><td  colspan=\"2\">";
        // line 72
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons(array("url" => ((("http://localhost/PiDev/eventopidev/web/app_dev.php/detailsEvente/" . $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array())) . "?url=") . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "</td></tr>
                                    
                                    
                                    
                                    ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:EventDetailsClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 72,  179 => 69,  172 => 65,  165 => 61,  158 => 57,  150 => 51,  132 => 46,  126 => 43,  120 => 39,  117 => 38,  100 => 37,  92 => 32,  85 => 28,  78 => 24,  71 => 20,  66 => 17,  63 => 16,  55 => 12,  47 => 9,  39 => 6,  11 => 3,);
    }
}
