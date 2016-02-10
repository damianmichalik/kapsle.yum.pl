<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_71491bd8ddee20eef1c1609e506845938481a4775923b8ffce21f7704b256499 extends Twig_Template
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
        $__internal_5b9f9fea13aef63570d7c4c0a8aa08938232fa70d1d30d773344e564ac8796ad = $this->env->getExtension("native_profiler");
        $__internal_5b9f9fea13aef63570d7c4c0a8aa08938232fa70d1d30d773344e564ac8796ad->enter($__internal_5b9f9fea13aef63570d7c4c0a8aa08938232fa70d1d30d773344e564ac8796ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5b9f9fea13aef63570d7c4c0a8aa08938232fa70d1d30d773344e564ac8796ad->leave($__internal_5b9f9fea13aef63570d7c4c0a8aa08938232fa70d1d30d773344e564ac8796ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
