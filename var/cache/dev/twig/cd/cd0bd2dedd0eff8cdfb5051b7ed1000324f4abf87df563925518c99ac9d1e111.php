<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6698dd5aadb99411985c4087aa9923d1196eaf7fa9dd114d7498a356b6f4ffd6 extends Twig_Template
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
        $__internal_57e45ff2cced342d18006c693647ca3d8dd3a21ed0b17987b2375f382a6d6d47 = $this->env->getExtension("native_profiler");
        $__internal_57e45ff2cced342d18006c693647ca3d8dd3a21ed0b17987b2375f382a6d6d47->enter($__internal_57e45ff2cced342d18006c693647ca3d8dd3a21ed0b17987b2375f382a6d6d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_57e45ff2cced342d18006c693647ca3d8dd3a21ed0b17987b2375f382a6d6d47->leave($__internal_57e45ff2cced342d18006c693647ca3d8dd3a21ed0b17987b2375f382a6d6d47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
