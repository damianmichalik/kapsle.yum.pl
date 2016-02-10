<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_e9c78f9ed853bbd52328d04bfcda7dfc5a9b5f91a26d5051ee0209cfab330052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@Twig/Exception/error404.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageContainer($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
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
