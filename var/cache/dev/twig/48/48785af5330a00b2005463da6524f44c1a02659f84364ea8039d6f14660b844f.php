<?php

/* AppBundle:Partials:flashMsg.html.twig */
class __TwigTemplate_6c7aaa82e1fee6efd318150a86df1333b336721c8b48a4b256e07e8b60b0a7f8 extends Twig_Template
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
        $__internal_c619f995445f25656fd2fbf69ce8b52154c9c5e9be369c3224492936fa031bc7 = $this->env->getExtension("native_profiler");
        $__internal_c619f995445f25656fd2fbf69ce8b52154c9c5e9be369c3224492936fa031bc7->enter($__internal_c619f995445f25656fd2fbf69ce8b52154c9c5e9be369c3224492936fa031bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partials:flashMsg.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
            // line 2
            echo "<div class=\"alert alert-success\">
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["success"]), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["failure"]) {
            // line 8
            echo "<div class=\"alert alert-danger\">
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["failure"]), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c619f995445f25656fd2fbf69ce8b52154c9c5e9be369c3224492936fa031bc7->leave($__internal_c619f995445f25656fd2fbf69ce8b52154c9c5e9be369c3224492936fa031bc7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partials:flashMsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  41 => 7,  38 => 6,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for success in app.session.flashBag.get('success', []) %}*/
/* <div class="alert alert-success">*/
/*     {{ success|trans }}*/
/* </div>*/
/* {% endfor %}*/
/* */
/* {% for failure in app.session.flashBag.get('error', []) %}*/
/* <div class="alert alert-danger">*/
/*     {{ failure|trans }}*/
/* </div>*/
/* {% endfor %}*/