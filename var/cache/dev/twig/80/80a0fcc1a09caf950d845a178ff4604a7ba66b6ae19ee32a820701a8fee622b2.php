<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_d6290b3354f31d01fb65cd8f949ceea26eaa7b925af9b263fb2d8a7527bf511d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32d9008ec8488668b53320fb413bc7c8b6c002fe88760589b0af1b663548a9d1 = $this->env->getExtension("native_profiler");
        $__internal_32d9008ec8488668b53320fb413bc7c8b6c002fe88760589b0af1b663548a9d1->enter($__internal_32d9008ec8488668b53320fb413bc7c8b6c002fe88760589b0af1b663548a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d9008ec8488668b53320fb413bc7c8b6c002fe88760589b0af1b663548a9d1->leave($__internal_32d9008ec8488668b53320fb413bc7c8b6c002fe88760589b0af1b663548a9d1_prof);

    }

    // line 3
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_4dc273b1de70b10429b90e99aea22b064b76b6232e2e7b8653db31a20e9032c9 = $this->env->getExtension("native_profiler");
        $__internal_4dc273b1de70b10429b90e99aea22b064b76b6232e2e7b8653db31a20e9032c9->enter($__internal_4dc273b1de70b10429b90e99aea22b064b76b6232e2e7b8653db31a20e9032c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 4
        echo "
    <section>
        <h2>Błąd 404</h2>
        <hr>
        <p>
            Nie znaleziono szukanej strony.
        </p>      
        <p>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Przejdź do strony głównej</a>
        </p>
    </section>

";
        
        $__internal_4dc273b1de70b10429b90e99aea22b064b76b6232e2e7b8653db31a20e9032c9->leave($__internal_4dc273b1de70b10429b90e99aea22b064b76b6232e2e7b8653db31a20e9032c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section>*/
/*         <h2>Błąd 404</h2>*/
/*         <hr>*/
/*         <p>*/
/*             Nie znaleziono szukanej strony.*/
/*         </p>      */
/*         <p>*/
/*             <a href="{{ path('app_homepage') }}">Przejdź do strony głównej</a>*/
/*         </p>*/
/*     </section>*/
/* */
/* {% endblock %}*/
