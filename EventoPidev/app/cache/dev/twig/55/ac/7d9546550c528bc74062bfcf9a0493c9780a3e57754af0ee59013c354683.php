<?php

/* PidevBackOfficeBundle:Default:listReclamation.html.twig */
class __TwigTemplate_55ac7d9546550c528bc74062bfcf9a0493c9780a3e57754af0ee59013c354683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevBackOfficeBundle::ReclamationAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'contour' => array($this, 'block_contour'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevBackOfficeBundle::ReclamationAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["size"] = twig_length_filter($this->env, (isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "   ";
        $this->displayBlock('contour', $context, $blocks);
        // line 19
        echo "        <div class=\"col-sm-9 col-md-10\">
            <ul class=\"nav nav-tabs\">
                
            </ul>
            <ul class=\"nav nav-pills nav-stacked\" style=\"background: rgb(255, 255, 255);\">
                <li class=\"active\"><a href=\"#\"><span class=\"badge pull-right\"></span><i class=\"fa fa-inbox fa-fw mrs\"></i>Reclamations Reçus<span class=\"badge pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "</span></li>
                <div class=\"tab-content\">
                    <div id=\"home\" class=\"tab-pane fade in active\">
                        <div class=\"list-group mail-box\">
                            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 29
            echo "                               <a href=\"#\" class=\"list-group-item\"><input type=\"checkbox\"/><span class=\"fa fa-star-o mrm mlm\"></span>&nbsp; - &nbsp;<span style=\"font-size: 12px;\" class=\"text-muted\" name=\"contenu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", array()), "html", null, true);
            echo "</span>&nbsp; - &nbsp;<span class=\"time-badge\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reclamation"], "date", array()), "y-m-d"), "html", null, true);
            echo "</span>
                                    <span class=\"pull-right mrl\">
                                        <span class=\"fa fa-trash-o\" onclick='window.location.href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_admin_supprimer", array("id" => $this->getAttribute($context["reclamation"], "id", array()))), "html", null, true);
            echo "\"'>
                                        </span>
                                    </span>
                                    <span class=\"pull-right mrl\">
                                        <span class=\"fa fa-pencil\" onclick='window.location.href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Reclamation_admin_ajout", array("id" => $this->getAttribute($context["reclamation"], "id", array()), "contenu" => $this->getAttribute($context["reclamation"], "contenu", array()))), "html", null, true);
            echo "\"'>
                                        </span>
                                    </span>
                               </a>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </div>
                    </div>
                </div>
        </div>
        ";
    }

    // line 13
    public function block_contour($context, array $blocks = array())
    {
        // line 14
        echo "       <li class=\"dropdown\">
           <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
               <i class=\"fa fa-envelope fa-fw\"></i>
               <span class=\"badge badge-orange\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "</span></a> 
       ";
    }

    public function getTemplateName()
    {
        return "PidevBackOfficeBundle:Default:listReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  122 => 14,  119 => 13,  111 => 40,  100 => 35,  93 => 31,  85 => 29,  81 => 28,  74 => 24,  67 => 19,  64 => 13,  55 => 10,  48 => 5,  43 => 4,  40 => 3,  36 => 1,  34 => 2,  11 => 1,);
    }
}
