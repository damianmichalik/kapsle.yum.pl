<?php

/* AppBundle:Contact:index.html.twig */
class __TwigTemplate_bc54321ee8e54d0631df4268468160cdbbcbafdff81a49108ba89b9eb5d5c21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f775b4ab2dd4c3a07c993a958d281d845a103704098950e266022a00493dd7ce = $this->env->getExtension("native_profiler");
        $__internal_f775b4ab2dd4c3a07c993a958d281d845a103704098950e266022a00493dd7ce->enter($__internal_f775b4ab2dd4c3a07c993a958d281d845a103704098950e266022a00493dd7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f775b4ab2dd4c3a07c993a958d281d845a103704098950e266022a00493dd7ce->leave($__internal_f775b4ab2dd4c3a07c993a958d281d845a103704098950e266022a00493dd7ce_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_e2a623ffc6396b46cd57e95bf56d208f17a9ab7bf44e3fb2273dd2d09b8494a6 = $this->env->getExtension("native_profiler");
        $__internal_e2a623ffc6396b46cd57e95bf56d208f17a9ab7bf44e3fb2273dd2d09b8494a6->enter($__internal_e2a623ffc6396b46cd57e95bf56d208f17a9ab7bf44e3fb2273dd2d09b8494a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ("Kontakt | " . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_e2a623ffc6396b46cd57e95bf56d208f17a9ab7bf44e3fb2273dd2d09b8494a6->leave($__internal_e2a623ffc6396b46cd57e95bf56d208f17a9ab7bf44e3fb2273dd2d09b8494a6_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a9e3fca01ed89feeadc40f408fab60965becb0b280881ec7e32711ae826a3a43 = $this->env->getExtension("native_profiler");
        $__internal_a9e3fca01ed89feeadc40f408fab60965becb0b280881ec7e32711ae826a3a43->enter($__internal_a9e3fca01ed89feeadc40f408fab60965becb0b280881ec7e32711ae826a3a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li>Kontakt</li>
";
        
        $__internal_a9e3fca01ed89feeadc40f408fab60965becb0b280881ec7e32711ae826a3a43->leave($__internal_a9e3fca01ed89feeadc40f408fab60965becb0b280881ec7e32711ae826a3a43_prof);

    }

    // line 11
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_1ebb2008b97bffdf4413896c1867deb3a34eef3d60a15bc2bc0d306925d34ecd = $this->env->getExtension("native_profiler");
        $__internal_1ebb2008b97bffdf4413896c1867deb3a34eef3d60a15bc2bc0d306925d34ecd->enter($__internal_1ebb2008b97bffdf4413896c1867deb3a34eef3d60a15bc2bc0d306925d34ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 12
        echo "
    <section id=\"contact\">
        <h2>Kontakt</h2>
        
        ";
        // line 16
        $this->loadTemplate("AppBundle:Partials:flashMsg.html.twig", "AppBundle:Contact:index.html.twig", 16)->display($context);
        echo "        
        ";
        // line 17
        $this->env->getExtension('form')->renderer->setTheme((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 18
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), 'form');
        echo "
        
    </section>

";
        
        $__internal_1ebb2008b97bffdf4413896c1867deb3a34eef3d60a15bc2bc0d306925d34ecd->leave($__internal_1ebb2008b97bffdf4413896c1867deb3a34eef3d60a15bc2bc0d306925d34ecd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  82 => 17,  78 => 16,  72 => 12,  66 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block headTitle %}*/
/*     {{  'Kontakt | ' ~ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li>Kontakt</li>*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section id="contact">*/
/*         <h2>Kontakt</h2>*/
/*         */
/*         {% include 'AppBundle:Partials:flashMsg.html.twig' %}        */
/*         {% form_theme contactForm 'bootstrap_3_layout.html.twig' %}*/
/*         {{ form(contactForm) }}*/
/*         */
/*     </section>*/
/* */
/* {% endblock %}*/
