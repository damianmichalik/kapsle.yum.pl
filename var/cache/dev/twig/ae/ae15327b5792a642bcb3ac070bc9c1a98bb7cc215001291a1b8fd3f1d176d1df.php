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
        $__internal_9e022d18bd120d2c1be9bed352acd96d9c82c5a7e63872a29a3e928eb4182442 = $this->env->getExtension("native_profiler");
        $__internal_9e022d18bd120d2c1be9bed352acd96d9c82c5a7e63872a29a3e928eb4182442->enter($__internal_9e022d18bd120d2c1be9bed352acd96d9c82c5a7e63872a29a3e928eb4182442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e022d18bd120d2c1be9bed352acd96d9c82c5a7e63872a29a3e928eb4182442->leave($__internal_9e022d18bd120d2c1be9bed352acd96d9c82c5a7e63872a29a3e928eb4182442_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_165b657d4c45516388cecb9e80cde5c09df4884f039e53a06214c70e2577b1f1 = $this->env->getExtension("native_profiler");
        $__internal_165b657d4c45516388cecb9e80cde5c09df4884f039e53a06214c70e2577b1f1->enter($__internal_165b657d4c45516388cecb9e80cde5c09df4884f039e53a06214c70e2577b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_165b657d4c45516388cecb9e80cde5c09df4884f039e53a06214c70e2577b1f1->leave($__internal_165b657d4c45516388cecb9e80cde5c09df4884f039e53a06214c70e2577b1f1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcd4563947e4649c9679886615638d03785c0597d379bbff65a2c05a075c15a6 = $this->env->getExtension("native_profiler");
        $__internal_fcd4563947e4649c9679886615638d03785c0597d379bbff65a2c05a075c15a6->enter($__internal_fcd4563947e4649c9679886615638d03785c0597d379bbff65a2c05a075c15a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fcd4563947e4649c9679886615638d03785c0597d379bbff65a2c05a075c15a6->leave($__internal_fcd4563947e4649c9679886615638d03785c0597d379bbff65a2c05a075c15a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4687ac848c9221a78eadf579f0e5de24db4634220ef8acdf2b3aad5a44b778d7 = $this->env->getExtension("native_profiler");
        $__internal_4687ac848c9221a78eadf579f0e5de24db4634220ef8acdf2b3aad5a44b778d7->enter($__internal_4687ac848c9221a78eadf579f0e5de24db4634220ef8acdf2b3aad5a44b778d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4687ac848c9221a78eadf579f0e5de24db4634220ef8acdf2b3aad5a44b778d7->leave($__internal_4687ac848c9221a78eadf579f0e5de24db4634220ef8acdf2b3aad5a44b778d7_prof);

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
