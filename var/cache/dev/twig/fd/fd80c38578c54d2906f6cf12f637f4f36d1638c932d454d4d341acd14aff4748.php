<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_622cfd4719da78afe70f5a55634d8aee0f6e87cbc2e31a022223c3fec35b30bc extends Twig_Template
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
        $__internal_80378c327e9d77f8b4ceacc4749abeb4791a0f10d766ef130a42bb6f95670352 = $this->env->getExtension("native_profiler");
        $__internal_80378c327e9d77f8b4ceacc4749abeb4791a0f10d766ef130a42bb6f95670352->enter($__internal_80378c327e9d77f8b4ceacc4749abeb4791a0f10d766ef130a42bb6f95670352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80378c327e9d77f8b4ceacc4749abeb4791a0f10d766ef130a42bb6f95670352->leave($__internal_80378c327e9d77f8b4ceacc4749abeb4791a0f10d766ef130a42bb6f95670352_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
