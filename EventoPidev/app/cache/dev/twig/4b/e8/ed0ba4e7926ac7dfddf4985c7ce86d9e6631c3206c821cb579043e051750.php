<?php

/* PidevFrontOfficeBundle:EventClientTwig:ListEventClient.html.twig */
class __TwigTemplate_4be8ed0ba4e7926ac7dfddf4985c7ce86d9e6631c3206c821cb579043e051750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::EvenementClient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'eventListe' => array($this, 'block_eventListe'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::EvenementClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_eventListe($context, array $blocks = array())
    {
        // line 7
        echo "                   ";
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
        // line 16
        echo "    
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "        <div class=\"tbl-item\" >
            
<div class=\"col-lg-3\" >
  <div class=\"member-team\" style=\"width:350px;height:400px;\">
      
     
      <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "url", array()), "html", null, true);
            echo "\" class=\"img-responsive\" style=\"width:290px; height:40%;\" id=\"test1\"/>

                                                    <h3 style=\"width:100%;height:20%;overflow:hidden;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "titre", array()), "html", null, true);
            echo "
                                                        <small>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "type", array()), "html", null, true);
            echo "</small>
                                                    </h3>
                                                        <p style=\"width:100%;height:15%;overflow: auto;\">du <b>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "</b> au <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</b><br>a <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "lieu", array()), "html", null, true);
            echo "</b></p>
                                                    
                                                      
                                                    <ul class=\"social-icons list-unstyled list-inline mbl mtl\" align=\"center\" >
                                                        
                                                        <li>";
            // line 34
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton(array("url" => ((("http://localhost/PiDev/eventopidev/web/app_dev.php/detailsEvente/" . $this->getAttribute($context["event"], "id", array())) . "?url=") . $this->getAttribute($context["event"], "url", array())), "layout" => "icon"));
            echo "</li>
                                                        <li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("participer_evenement", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Participer\" class=\"googleplus\"><i class=\"fa fa-hand-o-right\"></i></a></li>
                                                        <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_evenement", array("id" => $this->getAttribute($context["event"], "id", array()), "url" => $this->getAttribute($context["event"], "url", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Details\" class=\"skype\"><i class=\"fa fa-plus-circle\"></i></a></li>
                                                        <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_client_list", array("ide" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Inviter\" class=\"twitter\"><i class=\"fa fa-map-marker\"></i></a></li>
                                                    </ul>
       
                                                </div>
                                                    
                                            </div>
                                                    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:ListEventClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  89 => 29,  84 => 27,  80 => 26,  75 => 24,  67 => 18,  63 => 17,  60 => 16,  51 => 13,  44 => 8,  39 => 7,  36 => 6,  11 => 3,);
    }
}
