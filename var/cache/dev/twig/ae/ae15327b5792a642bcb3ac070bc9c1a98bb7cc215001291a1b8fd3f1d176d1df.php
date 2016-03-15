<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3405d4f43f931dae9104dfd8ee9b0b3f9fc54ddc64e4b4a876d83166269b58af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96cf0a7b47097dfb4c22abb5c7a1bee3ffcbd8884b42d973393c5ffbe674296e = $this->env->getExtension("native_profiler");
        $__internal_96cf0a7b47097dfb4c22abb5c7a1bee3ffcbd8884b42d973393c5ffbe674296e->enter($__internal_96cf0a7b47097dfb4c22abb5c7a1bee3ffcbd8884b42d973393c5ffbe674296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cf0a7b47097dfb4c22abb5c7a1bee3ffcbd8884b42d973393c5ffbe674296e->leave($__internal_96cf0a7b47097dfb4c22abb5c7a1bee3ffcbd8884b42d973393c5ffbe674296e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ade7ed0ba413a7affe4d5d1432dfe6146838936419c83225290fe1e70a0a92f5 = $this->env->getExtension("native_profiler");
        $__internal_ade7ed0ba413a7affe4d5d1432dfe6146838936419c83225290fe1e70a0a92f5->enter($__internal_ade7ed0ba413a7affe4d5d1432dfe6146838936419c83225290fe1e70a0a92f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ade7ed0ba413a7affe4d5d1432dfe6146838936419c83225290fe1e70a0a92f5->leave($__internal_ade7ed0ba413a7affe4d5d1432dfe6146838936419c83225290fe1e70a0a92f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0933bc30fe44486005e5fb5891e8ff211c13e9957757d710b9ae96e7a18e823 = $this->env->getExtension("native_profiler");
        $__internal_f0933bc30fe44486005e5fb5891e8ff211c13e9957757d710b9ae96e7a18e823->enter($__internal_f0933bc30fe44486005e5fb5891e8ff211c13e9957757d710b9ae96e7a18e823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0933bc30fe44486005e5fb5891e8ff211c13e9957757d710b9ae96e7a18e823->leave($__internal_f0933bc30fe44486005e5fb5891e8ff211c13e9957757d710b9ae96e7a18e823_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed261aed0ac4b66d118654f60816308417f0f195903cd804f888429530295d08 = $this->env->getExtension("native_profiler");
        $__internal_ed261aed0ac4b66d118654f60816308417f0f195903cd804f888429530295d08->enter($__internal_ed261aed0ac4b66d118654f60816308417f0f195903cd804f888429530295d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ed261aed0ac4b66d118654f60816308417f0f195903cd804f888429530295d08->leave($__internal_ed261aed0ac4b66d118654f60816308417f0f195903cd804f888429530295d08_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
