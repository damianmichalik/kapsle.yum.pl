<?php

/* AppBundle:Breweries:mapInfo.html.twig */
class __TwigTemplate_c1be75e245363be31289c458027d9398b13e9a2d785e906cad34edadbc8fdb8d extends Twig_Template
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
        $__internal_d1375ba88a3aab71cad5f86b477d302aa7e7e25678e67122d5192a9fe8e8c432 = $this->env->getExtension("native_profiler");
        $__internal_d1375ba88a3aab71cad5f86b477d302aa7e7e25678e67122d5192a9fe8e8c432->enter($__internal_d1375ba88a3aab71cad5f86b477d302aa7e7e25678e67122d5192a9fe8e8c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Breweries:mapInfo.html.twig"));

        // line 1
        echo "<p><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</strong></p>
<p>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "country", array()), "name", array()), "html", null, true);
        echo "</p>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "postcode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "city", array()), "html", null, true);
        echo "</p>        
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "address", array()), "html", null, true);
        echo "</p>";
        
        $__internal_d1375ba88a3aab71cad5f86b477d302aa7e7e25678e67122d5192a9fe8e8c432->leave($__internal_d1375ba88a3aab71cad5f86b477d302aa7e7e25678e67122d5192a9fe8e8c432_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Breweries:mapInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <p><strong>{{ brewery.name }}</strong></p>*/
/* <p>{{ brewery.country.name }}</p>*/
/* <p>{{ brewery.postcode }}, {{ brewery.city }}</p>        */
/* <p>{{ brewery.address }}</p>*/
