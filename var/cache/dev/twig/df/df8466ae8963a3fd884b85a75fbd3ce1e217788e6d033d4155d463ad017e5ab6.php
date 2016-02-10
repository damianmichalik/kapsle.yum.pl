<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_19d99b88088fe866d2b74bee08f7f6dd6ab93b2463489e2f1cfb12a46e710c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_d7f9f7710293f7a7d8ea1231a39272ff3c851348197214dc8d305d5b26f8d444 = $this->env->getExtension("native_profiler");
        $__internal_d7f9f7710293f7a7d8ea1231a39272ff3c851348197214dc8d305d5b26f8d444->enter($__internal_d7f9f7710293f7a7d8ea1231a39272ff3c851348197214dc8d305d5b26f8d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f9f7710293f7a7d8ea1231a39272ff3c851348197214dc8d305d5b26f8d444->leave($__internal_d7f9f7710293f7a7d8ea1231a39272ff3c851348197214dc8d305d5b26f8d444_prof);

    }

    // line 3
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_c6a177c973314792d595fe71cb88de7c7ed59a6449161c0fbe8fab712fc4ac59 = $this->env->getExtension("native_profiler");
        $__internal_c6a177c973314792d595fe71cb88de7c7ed59a6449161c0fbe8fab712fc4ac59->enter($__internal_c6a177c973314792d595fe71cb88de7c7ed59a6449161c0fbe8fab712fc4ac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 4
        echo "
    <section>
        <h2>Wystąpił błąd</h2>
        <hr>     
        <p>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Przejdź do strony głównej</a>
        </p>
    </section>

";
        
        $__internal_c6a177c973314792d595fe71cb88de7c7ed59a6449161c0fbe8fab712fc4ac59->leave($__internal_c6a177c973314792d595fe71cb88de7c7ed59a6449161c0fbe8fab712fc4ac59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section>*/
/*         <h2>Wystąpił błąd</h2>*/
/*         <hr>     */
/*         <p>*/
/*             <a href="{{ path('app_homepage') }}">Przejdź do strony głównej</a>*/
/*         </p>*/
/*     </section>*/
/* */
/* {% endblock %}*/
