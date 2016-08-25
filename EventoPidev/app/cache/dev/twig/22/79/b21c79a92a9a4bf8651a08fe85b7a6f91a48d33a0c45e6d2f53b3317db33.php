<?php

/* PidevFrontOfficeBundle:EventClientTwig:catalogueclient2.html.twig */
class __TwigTemplate_2279b21c79a92a9a4bf8651a08fe85b7a6f91a48d33a0c45e6d2f53b3317db33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("PidevFrontOfficeBundle::CataloguesClient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevFrontOfficeBundle::CataloguesClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_catalogue($context, array $blocks = array())
    {
        // line 5
        echo "
                                                
                                               ";
        // line 29
        echo "                                               
                                     <div class=\"g-cell g-cell-1-1 g-cell-md-2-2 g-cell-lg-2-3 l-padded-v \">
        <a class=\"category-card js-category-link js-xd-track-link category-music\"
            href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("catalogue_evenement", array("typea" => "Musique"));
        echo "\"
            data-category=\"Music\"
            data-event-action=\"ViewCategory\"
            data-event-category=\"home\"
            data-event-label=\"Music\"
        >
            <div class=\"category-card__wrapper\">
                <div class=\"category-card__tint\">
                    <div class=\"category-card__image\"></div>
                </div>
                <div class=\"category-card__text-wrapper\">
                    <h4 class=\"category-card__label l-padded-h-2 text-large text-body--significant text-heading--emphasized\">
                        Music
                    </h4>
                    <p class=\"category-card__desc l-block-2 l-padded-h-2 text-body text-heading--emphasized\">
                        Concerts dans un cadre privé, grands festivals de musique et soirées .
                    </p>
                </div>
            </div>
        </a>
    </div> 
            
     <div class=\"g-cell g-cell-1-1 g-cell-md-1-2 g-cell-lg-1-3 l-padded-v \">
        <a class=\"category-card js-category-link js-xd-track-link category-food\"
            href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("catalogue_evenement", array("typea" => "Food"));
        echo "\"
            data-category=\"Food &amp;amp; Drink\"
            data-event-action=\"ViewCategory\"
            data-event-category=\"home\"
            data-event-label=\"Food &amp;amp; Drink\"
        >
            <div class=\"category-card__wrapper\">
                <div class=\"category-card__tint\">
                    <div class=\"category-card__image\"></div>
                </div>
                <div class=\"category-card__text-wrapper\">
                    <h4 class=\"category-card__label l-padded-h-2 text-large text-body--significant text-heading--emphasized\">
                        Gastronomie
                    </h4>
                    <p class=\"category-card__desc l-block-2 l-padded-h-2 text-body text-heading--emphasized\">
                        Dîner, dégustations,Food
                    </p>
                </div>
            </div>
        </a>
    </div>
        <div class=\"g-cell g-cell-1-1 g-cell-md-1-2 g-cell-lg-1-3 l-padded-v \">
        <a class=\"category-card js-category-link js-xd-track-link category-classes\"
            href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("catalogue_evenement", array("typea" => "meeting"));
        echo "\"
            data-category=\"Class\"
            data-event-action=\"ViewCategory\"
            data-event-category=\"home\"
            data-event-label=\"Class\"
        >
            <div class=\"category-card__wrapper\">
                <div class=\"category-card__tint\">
                    <div class=\"category-card__image\"></div>
                </div>
                <div class=\"category-card__text-wrapper\">
                    <h4 class=\"category-card__label l-padded-h-2 text-large text-body--significant text-heading--emphasized\">
                        Cours et ateliers
                    </h4>
                    <p class=\"category-card__desc l-block-2 l-padded-h-2 text-body text-heading--emphasized\">
                        Séminaires instructifs, ateliers techniques et cours de gym
                    </p>
                </div>
            </div>
        </a>
    </div>
       
     <div class=\"g-cell g-cell-1-1 g-cell-md-1-2 g-cell-lg-1-3 l-padded-v \">
        <a class=\"category-card js-category-link js-xd-track-link category-arts\"
            href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("catalogue_evenement", array("typea" => "Art"));
        echo "\"
            data-category=\"Arts\"
            data-event-action=\"ViewCategory\"
            data-event-category=\"home\"
            data-event-label=\"Arts\"
        >
            <div class=\"category-card__wrapper\">
                <div class=\"category-card__tint\">
                    <div class=\"category-card__image\"></div>
                </div>
                <div class=\"category-card__text-wrapper\">
                    <h4 class=\"category-card__label l-padded-h-2 text-large text-body--significant text-heading--emphasized\">
                        Arts
                    </h4>
                    <p class=\"category-card__desc l-block-2 l-padded-h-2 text-body text-heading--emphasized\">
                        Pièces de théâtre, soirées comédies, expositions d&#39;art et festivals de cinéma
                    </p>
                </div>
            </div>
        </a>
    </div>
<div class=\"g-cell g-cell-1-1 g-cell-md-1-2 g-cell-lg-1-3 l-padded-v hide-medium hide-small\">
        <a class=\"category-card js-category-link js-xd-track-link category-sports\"
            href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("catalogue_evenement", array("typea" => "sport"));
        echo "\"
            data-category=\"Sports\"
            data-event-action=\"ViewCategory\"
            data-event-category=\"home\"
            data-event-label=\"Sports\"
        >
            <div class=\"category-card__wrapper\">
                <div class=\"category-card__tint\">
                    <div class=\"category-card__image\"></div>
                </div>
                <div class=\"category-card__text-wrapper\">
                    <h4 class=\"category-card__label l-padded-h-2 text-large text-body--significant text-heading--emphasized\">
                        Sports et bien-être
                    </h4>
                    <p class=\"category-card__desc l-block-2 l-padded-h-2 text-body text-heading--emphasized\">
                        Courses d&#39;obstacles, cours d&#39;initiation au yoga et matchs.
                    </p>
                </div>
            </div>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PidevFrontOfficeBundle:EventClientTwig:catalogueclient2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 126,  128 => 103,  101 => 79,  75 => 56,  48 => 32,  43 => 29,  39 => 5,  36 => 4,  11 => 2,);
    }
}
