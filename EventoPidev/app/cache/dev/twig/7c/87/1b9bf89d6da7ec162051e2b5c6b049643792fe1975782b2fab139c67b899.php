<?php

/* PidevFrontOfficeBundle:Default:listUser.html.twig */
class __TwigTemplate_7c871b9bf89d6da7ec162051e2b5c6b049643792fe1975782b2fab139c67b899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::InvitationsClient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre1' => array($this, 'block_titre1'),
            'titreEvent' => array($this, 'block_titreEvent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::InvitationsClient.html.twig";
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

    // line 5
    public function block_titre1($context, array $blocks = array())
    {
        // line 6
        echo "                             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
            <span class=\"sr-only\">Close</span>
        </button>
        <p>";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block_titreEvent($context, array $blocks = array())
    {
        // line 18
        echo "    
         
   
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 22
            echo "                    
  
 <tr class=\"tbl-item\"><!--<img/>-->
     <td class=\"img\" style=\"width:100px; height:100px;\">
    <img src=\"http://www.filecluster.com/howto/wp-content/uploads/2014/07/User-Default.jpg\" alt=\"\" title=\"\"  style=\"width:100px; height:100px; alignment-adjust: central\" />  </td>                                          
    <td class=\"td-block\">
        <p class=\"title\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo " </p>
              <p class=\"desc\"> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</p>
           
         <ul class=\"social-icons list-unstyled list-inline mbl mtl\" style=\"text-align:right\" >
            
             <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_client", array("id" => $this->getAttribute($context["utilisateur"], "id", array()), "ide" => (isset($context["ide"]) ? $context["ide"] : $this->getContext($context, "ide")))), "html", null, true);
            echo "\" data-hover=\"tooltip\" data-original-title=\"Inviter\" class=\"skype\"><i class=\"fa fa-plus\"></i></a></li>
             

         </ul>
    </td>
 </tr>


                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   
                                            ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:Default:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  103 => 33,  96 => 29,  90 => 28,  82 => 22,  78 => 21,  73 => 18,  70 => 17,  59 => 12,  52 => 7,  47 => 6,  44 => 5,  38 => 3,  11 => 2,);
    }
}
