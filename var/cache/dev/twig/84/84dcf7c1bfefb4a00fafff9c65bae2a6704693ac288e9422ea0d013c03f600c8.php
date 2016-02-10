<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c709914db0637be4190d93ac9a629e0e1dfbf0b2aa1e4764cbf1dd64a003488c extends Twig_Template
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
        $__internal_ee83e5faaba95a28923f9d3574c892105b832da3be2dc9ceb7d701c3e49b0836 = $this->env->getExtension("native_profiler");
        $__internal_ee83e5faaba95a28923f9d3574c892105b832da3be2dc9ceb7d701c3e49b0836->enter($__internal_ee83e5faaba95a28923f9d3574c892105b832da3be2dc9ceb7d701c3e49b0836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ee83e5faaba95a28923f9d3574c892105b832da3be2dc9ceb7d701c3e49b0836->leave($__internal_ee83e5faaba95a28923f9d3574c892105b832da3be2dc9ceb7d701c3e49b0836_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
