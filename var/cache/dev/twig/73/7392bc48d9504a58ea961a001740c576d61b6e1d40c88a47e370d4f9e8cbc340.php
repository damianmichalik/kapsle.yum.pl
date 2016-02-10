<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_879d01481f306d94d0878ff2b7f3a37636557c3f563ad0ec11e862abf3384379 extends Twig_Template
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
        $__internal_c04d97e52c3a094decb80a712d9ed941b23b0663dab55045c3dfba876e7ea3cc = $this->env->getExtension("native_profiler");
        $__internal_c04d97e52c3a094decb80a712d9ed941b23b0663dab55045c3dfba876e7ea3cc->enter($__internal_c04d97e52c3a094decb80a712d9ed941b23b0663dab55045c3dfba876e7ea3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c04d97e52c3a094decb80a712d9ed941b23b0663dab55045c3dfba876e7ea3cc->leave($__internal_c04d97e52c3a094decb80a712d9ed941b23b0663dab55045c3dfba876e7ea3cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
