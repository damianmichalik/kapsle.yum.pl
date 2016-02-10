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
        $__internal_1333b6671bf29c1d3a56d54577000e2ba7be1c220f2dfd6705f9572d4daf9641 = $this->env->getExtension("native_profiler");
        $__internal_1333b6671bf29c1d3a56d54577000e2ba7be1c220f2dfd6705f9572d4daf9641->enter($__internal_1333b6671bf29c1d3a56d54577000e2ba7be1c220f2dfd6705f9572d4daf9641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1333b6671bf29c1d3a56d54577000e2ba7be1c220f2dfd6705f9572d4daf9641->leave($__internal_1333b6671bf29c1d3a56d54577000e2ba7be1c220f2dfd6705f9572d4daf9641_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3f04dbf7a6d480326c54d8babd14dc1f560db909db9da99e48d237aaec6eded = $this->env->getExtension("native_profiler");
        $__internal_a3f04dbf7a6d480326c54d8babd14dc1f560db909db9da99e48d237aaec6eded->enter($__internal_a3f04dbf7a6d480326c54d8babd14dc1f560db909db9da99e48d237aaec6eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3f04dbf7a6d480326c54d8babd14dc1f560db909db9da99e48d237aaec6eded->leave($__internal_a3f04dbf7a6d480326c54d8babd14dc1f560db909db9da99e48d237aaec6eded_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_134baea6488bd3ff82dc9842c9cce5a35bcff3f4d6594aec1344b57a112fdf10 = $this->env->getExtension("native_profiler");
        $__internal_134baea6488bd3ff82dc9842c9cce5a35bcff3f4d6594aec1344b57a112fdf10->enter($__internal_134baea6488bd3ff82dc9842c9cce5a35bcff3f4d6594aec1344b57a112fdf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_134baea6488bd3ff82dc9842c9cce5a35bcff3f4d6594aec1344b57a112fdf10->leave($__internal_134baea6488bd3ff82dc9842c9cce5a35bcff3f4d6594aec1344b57a112fdf10_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb5553a2c7942677b15e1fc148c3323348970bc17adb9bef3821c7ef2328241 = $this->env->getExtension("native_profiler");
        $__internal_ddb5553a2c7942677b15e1fc148c3323348970bc17adb9bef3821c7ef2328241->enter($__internal_ddb5553a2c7942677b15e1fc148c3323348970bc17adb9bef3821c7ef2328241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ddb5553a2c7942677b15e1fc148c3323348970bc17adb9bef3821c7ef2328241->leave($__internal_ddb5553a2c7942677b15e1fc148c3323348970bc17adb9bef3821c7ef2328241_prof);

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
