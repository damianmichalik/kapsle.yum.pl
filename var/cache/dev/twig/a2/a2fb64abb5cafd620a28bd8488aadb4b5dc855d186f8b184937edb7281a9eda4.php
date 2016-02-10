<?php

/* :default:index.html.twig */
class __TwigTemplate_61242dc0d1fbd4dd8e6b1b9b131c96a5d264d9b17ef4b4a9898a9c38562cee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63bcde4ed9d636e797e477daa4ed49e1e736a451a27d9b4a9fd0e6ff55329405 = $this->env->getExtension("native_profiler");
        $__internal_63bcde4ed9d636e797e477daa4ed49e1e736a451a27d9b4a9fd0e6ff55329405->enter($__internal_63bcde4ed9d636e797e477daa4ed49e1e736a451a27d9b4a9fd0e6ff55329405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bcde4ed9d636e797e477daa4ed49e1e736a451a27d9b4a9fd0e6ff55329405->leave($__internal_63bcde4ed9d636e797e477daa4ed49e1e736a451a27d9b4a9fd0e6ff55329405_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c53ac49cac6bf0294cfe296b46f77719b2d6e730c1526a2e7afc8cc6adfea5 = $this->env->getExtension("native_profiler");
        $__internal_a3c53ac49cac6bf0294cfe296b46f77719b2d6e730c1526a2e7afc8cc6adfea5->enter($__internal_a3c53ac49cac6bf0294cfe296b46f77719b2d6e730c1526a2e7afc8cc6adfea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_a3c53ac49cac6bf0294cfe296b46f77719b2d6e730c1526a2e7afc8cc6adfea5->leave($__internal_a3c53ac49cac6bf0294cfe296b46f77719b2d6e730c1526a2e7afc8cc6adfea5_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
