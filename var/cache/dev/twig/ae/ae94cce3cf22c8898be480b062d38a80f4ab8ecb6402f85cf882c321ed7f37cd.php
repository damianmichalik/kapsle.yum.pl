<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_97e8d83278141a933824e54240df8396be2f526fe1e9f048e0ba9328fdd21755 extends Twig_Template
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
        $__internal_6588bf3010afe7502cc2fc3f5b18070a89a5d8de1b583d2755fbccb73d3f37f5 = $this->env->getExtension("native_profiler");
        $__internal_6588bf3010afe7502cc2fc3f5b18070a89a5d8de1b583d2755fbccb73d3f37f5->enter($__internal_6588bf3010afe7502cc2fc3f5b18070a89a5d8de1b583d2755fbccb73d3f37f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6588bf3010afe7502cc2fc3f5b18070a89a5d8de1b583d2755fbccb73d3f37f5->leave($__internal_6588bf3010afe7502cc2fc3f5b18070a89a5d8de1b583d2755fbccb73d3f37f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
