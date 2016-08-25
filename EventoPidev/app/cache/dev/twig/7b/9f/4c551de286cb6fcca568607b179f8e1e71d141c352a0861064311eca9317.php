<?php

/* PidevFrontOfficeBundle:Default:invitationlist.html.twig */
class __TwigTemplate_7b9f4c551de286cb6fcca568607b179f8e1e71d141c352a0861064311eca9317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::InvitationsClient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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
        // line 3
        $context["size"] = twig_length_filter($this->env, (isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " liste des Invitations ";
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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invitations"]) ? $context["invitations"] : $this->getContext($context, "invitations")));
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 23
            echo "                    
  
 <tr class=\"tbl-item\"><!--<img/>-->
     <td class=\"img\" style=\"width:100px; height:100px;\">
    <img src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTNT7pCbL7Ii0lhcEZ_lBOmKPOm0maH8lj7k28jdFbsgm-Ws_FWdw\" alt=\"\" title=\"\"  style=\"width:100px; height:100px; alignment-adjust: central\"  />  </td>                                          
    <td class=\"td-block\">
        <p class=\"title\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["invitation"], "titre", array()), "html", null, true);
            echo "</p>
              <p class=\"desc\"> ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["invitation"], "dateInvitation", array()), "y-m-d"), "html", null, true);
            echo "</p>
              <br>
              <p class=\"desc\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["invitation"], "etat", array()), "html", null, true);
            echo "</p>
         <ul class=\"social-icons list-unstyled list-inline mbl mtl\" style=\"text-align:right\" >
            
             <li><a  class=\"btn btn-green pull-right\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_update", array("evenement" => $this->getAttribute($context["invitation"], "evenement", array()))), "html", null, true);
            echo "\">Accepter</a>&nbsp;&nbsp;
                 <a  class=\"btn btn-red pull-right\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_front_office_Invitation_client_supprimer", array("evenement" => $this->getAttribute($context["invitation"], "evenement", array()))), "html", null, true);
            echo "\">Refuser</a></li>
             
         
         </ul>
    </td>
 </tr>


                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "   
                                            ";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:Default:invitationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  113 => 36,  109 => 35,  103 => 32,  98 => 30,  94 => 29,  86 => 23,  82 => 22,  76 => 18,  73 => 17,  62 => 12,  55 => 7,  50 => 6,  47 => 5,  41 => 2,  37 => 1,  35 => 3,  11 => 1,);
    }
}
