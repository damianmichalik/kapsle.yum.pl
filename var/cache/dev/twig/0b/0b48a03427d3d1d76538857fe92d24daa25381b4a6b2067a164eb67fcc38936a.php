<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2bc6e2b2767a62f7359cc86447df05193e7eecdb6cf4da68d36317b3c1fb6258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ed55decef6b41519b833051b980862043f2d91a6b2bc17cb100651d432d721e = $this->env->getExtension("native_profiler");
        $__internal_8ed55decef6b41519b833051b980862043f2d91a6b2bc17cb100651d432d721e->enter($__internal_8ed55decef6b41519b833051b980862043f2d91a6b2bc17cb100651d432d721e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ed55decef6b41519b833051b980862043f2d91a6b2bc17cb100651d432d721e->leave($__internal_8ed55decef6b41519b833051b980862043f2d91a6b2bc17cb100651d432d721e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
