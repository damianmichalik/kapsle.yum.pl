<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_67cb67dad0d0fd35cda5581dec089b2b7e4db21db3acc183f29ea3c0cec99387 extends Twig_Template
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
        $__internal_5bd046b1230936a8d09cc658afadb365a57370e1443c95a4d205967c189ee0b6 = $this->env->getExtension("native_profiler");
        $__internal_5bd046b1230936a8d09cc658afadb365a57370e1443c95a4d205967c189ee0b6->enter($__internal_5bd046b1230936a8d09cc658afadb365a57370e1443c95a4d205967c189ee0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5bd046b1230936a8d09cc658afadb365a57370e1443c95a4d205967c189ee0b6->leave($__internal_5bd046b1230936a8d09cc658afadb365a57370e1443c95a4d205967c189ee0b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
