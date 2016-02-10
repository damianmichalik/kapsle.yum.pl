<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_15c1d7bb4ca04d6430ed4eb2d51ed7054c6d6cf977e59903f91d14234fa44db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcd9a18c0f3f0a1b513c5e014fa40fa3f11b7bbed1aa711d84d68d689d2c1bfd = $this->env->getExtension("native_profiler");
        $__internal_dcd9a18c0f3f0a1b513c5e014fa40fa3f11b7bbed1aa711d84d68d689d2c1bfd->enter($__internal_dcd9a18c0f3f0a1b513c5e014fa40fa3f11b7bbed1aa711d84d68d689d2c1bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dcd9a18c0f3f0a1b513c5e014fa40fa3f11b7bbed1aa711d84d68d689d2c1bfd->leave($__internal_dcd9a18c0f3f0a1b513c5e014fa40fa3f11b7bbed1aa711d84d68d689d2c1bfd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17a8aa343e1f60d13d0bb7ed4eaf076122f653eb1af87cae9c974b305ce033cc = $this->env->getExtension("native_profiler");
        $__internal_17a8aa343e1f60d13d0bb7ed4eaf076122f653eb1af87cae9c974b305ce033cc->enter($__internal_17a8aa343e1f60d13d0bb7ed4eaf076122f653eb1af87cae9c974b305ce033cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_17a8aa343e1f60d13d0bb7ed4eaf076122f653eb1af87cae9c974b305ce033cc->leave($__internal_17a8aa343e1f60d13d0bb7ed4eaf076122f653eb1af87cae9c974b305ce033cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
