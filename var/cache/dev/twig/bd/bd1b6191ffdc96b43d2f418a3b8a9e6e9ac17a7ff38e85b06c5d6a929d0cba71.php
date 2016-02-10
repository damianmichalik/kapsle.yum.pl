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
        $__internal_29674f031ca548227c2f9f6b52c188c9b97d0c7cd38321052a07c5e294cb7a4d = $this->env->getExtension("native_profiler");
        $__internal_29674f031ca548227c2f9f6b52c188c9b97d0c7cd38321052a07c5e294cb7a4d->enter($__internal_29674f031ca548227c2f9f6b52c188c9b97d0c7cd38321052a07c5e294cb7a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29674f031ca548227c2f9f6b52c188c9b97d0c7cd38321052a07c5e294cb7a4d->leave($__internal_29674f031ca548227c2f9f6b52c188c9b97d0c7cd38321052a07c5e294cb7a4d_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_fb388f21e41b23d6de3cb75d702dcd73462e3828e424686c22790afbe1fa4954 = $this->env->getExtension("native_profiler");
        $__internal_fb388f21e41b23d6de3cb75d702dcd73462e3828e424686c22790afbe1fa4954->enter($__internal_fb388f21e41b23d6de3cb75d702dcd73462e3828e424686c22790afbe1fa4954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ("Kontakt | " . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_fb388f21e41b23d6de3cb75d702dcd73462e3828e424686c22790afbe1fa4954->leave($__internal_fb388f21e41b23d6de3cb75d702dcd73462e3828e424686c22790afbe1fa4954_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_42ee50ce8b4c86a01a359c2157ea804ff88b0ad2570e29ab14cd02ef11c5538f = $this->env->getExtension("native_profiler");
        $__internal_42ee50ce8b4c86a01a359c2157ea804ff88b0ad2570e29ab14cd02ef11c5538f->enter($__internal_42ee50ce8b4c86a01a359c2157ea804ff88b0ad2570e29ab14cd02ef11c5538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li>Kontakt</li>
";
        
        $__internal_42ee50ce8b4c86a01a359c2157ea804ff88b0ad2570e29ab14cd02ef11c5538f->leave($__internal_42ee50ce8b4c86a01a359c2157ea804ff88b0ad2570e29ab14cd02ef11c5538f_prof);

    }

    // line 11
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_ed8591b3ab237b52ec793bd8d0dc7b10c7b0eed42794d3515910305efa55c220 = $this->env->getExtension("native_profiler");
        $__internal_ed8591b3ab237b52ec793bd8d0dc7b10c7b0eed42794d3515910305efa55c220->enter($__internal_ed8591b3ab237b52ec793bd8d0dc7b10c7b0eed42794d3515910305efa55c220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

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
        
        $__internal_ed8591b3ab237b52ec793bd8d0dc7b10c7b0eed42794d3515910305efa55c220->leave($__internal_ed8591b3ab237b52ec793bd8d0dc7b10c7b0eed42794d3515910305efa55c220_prof);

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
