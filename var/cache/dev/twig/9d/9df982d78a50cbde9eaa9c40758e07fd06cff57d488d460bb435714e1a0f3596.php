<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ff64a3a32ef42e92e8599323e63e17122f70f659ffe43357c7861118b07f341e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8374d5684cff7e9de714e1b50fe471a1329c0af52698122285e425292d4da1ea = $this->env->getExtension("native_profiler");
        $__internal_8374d5684cff7e9de714e1b50fe471a1329c0af52698122285e425292d4da1ea->enter($__internal_8374d5684cff7e9de714e1b50fe471a1329c0af52698122285e425292d4da1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8374d5684cff7e9de714e1b50fe471a1329c0af52698122285e425292d4da1ea->leave($__internal_8374d5684cff7e9de714e1b50fe471a1329c0af52698122285e425292d4da1ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68d69962305465501503c8fe00d44b82bf7b4c262fb3e021d2819f907748a73c = $this->env->getExtension("native_profiler");
        $__internal_68d69962305465501503c8fe00d44b82bf7b4c262fb3e021d2819f907748a73c->enter($__internal_68d69962305465501503c8fe00d44b82bf7b4c262fb3e021d2819f907748a73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68d69962305465501503c8fe00d44b82bf7b4c262fb3e021d2819f907748a73c->leave($__internal_68d69962305465501503c8fe00d44b82bf7b4c262fb3e021d2819f907748a73c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4d08f0015c3fe3b6f9b96ca4add0ffc4db85ca906eba886790b92605b8c522e = $this->env->getExtension("native_profiler");
        $__internal_f4d08f0015c3fe3b6f9b96ca4add0ffc4db85ca906eba886790b92605b8c522e->enter($__internal_f4d08f0015c3fe3b6f9b96ca4add0ffc4db85ca906eba886790b92605b8c522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4d08f0015c3fe3b6f9b96ca4add0ffc4db85ca906eba886790b92605b8c522e->leave($__internal_f4d08f0015c3fe3b6f9b96ca4add0ffc4db85ca906eba886790b92605b8c522e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b5c67eb6d4322aba3c0daf75f24ec89fcaae0660b0fb1b10ebb376f435901b3 = $this->env->getExtension("native_profiler");
        $__internal_5b5c67eb6d4322aba3c0daf75f24ec89fcaae0660b0fb1b10ebb376f435901b3->enter($__internal_5b5c67eb6d4322aba3c0daf75f24ec89fcaae0660b0fb1b10ebb376f435901b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b5c67eb6d4322aba3c0daf75f24ec89fcaae0660b0fb1b10ebb376f435901b3->leave($__internal_5b5c67eb6d4322aba3c0daf75f24ec89fcaae0660b0fb1b10ebb376f435901b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
