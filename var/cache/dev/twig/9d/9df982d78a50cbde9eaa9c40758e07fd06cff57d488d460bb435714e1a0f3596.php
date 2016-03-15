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
        $__internal_cebb18355823118e5169e809a3790589d0b142d59345cd66c8756c5ed865f00a = $this->env->getExtension("native_profiler");
        $__internal_cebb18355823118e5169e809a3790589d0b142d59345cd66c8756c5ed865f00a->enter($__internal_cebb18355823118e5169e809a3790589d0b142d59345cd66c8756c5ed865f00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebb18355823118e5169e809a3790589d0b142d59345cd66c8756c5ed865f00a->leave($__internal_cebb18355823118e5169e809a3790589d0b142d59345cd66c8756c5ed865f00a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0ade37d9ce71bf5f32d6acf278e040829197245dc17a6952cc896c495b1de8e = $this->env->getExtension("native_profiler");
        $__internal_f0ade37d9ce71bf5f32d6acf278e040829197245dc17a6952cc896c495b1de8e->enter($__internal_f0ade37d9ce71bf5f32d6acf278e040829197245dc17a6952cc896c495b1de8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0ade37d9ce71bf5f32d6acf278e040829197245dc17a6952cc896c495b1de8e->leave($__internal_f0ade37d9ce71bf5f32d6acf278e040829197245dc17a6952cc896c495b1de8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca73ef77f44cf89bc7aedc5ce0453f74bf0f2b0919b99a00e37ae963265ea601 = $this->env->getExtension("native_profiler");
        $__internal_ca73ef77f44cf89bc7aedc5ce0453f74bf0f2b0919b99a00e37ae963265ea601->enter($__internal_ca73ef77f44cf89bc7aedc5ce0453f74bf0f2b0919b99a00e37ae963265ea601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca73ef77f44cf89bc7aedc5ce0453f74bf0f2b0919b99a00e37ae963265ea601->leave($__internal_ca73ef77f44cf89bc7aedc5ce0453f74bf0f2b0919b99a00e37ae963265ea601_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3deb7cf772ebef81f2192cc009c6f2c375cf4b09b11e0d4bce61ec4049b0639a = $this->env->getExtension("native_profiler");
        $__internal_3deb7cf772ebef81f2192cc009c6f2c375cf4b09b11e0d4bce61ec4049b0639a->enter($__internal_3deb7cf772ebef81f2192cc009c6f2c375cf4b09b11e0d4bce61ec4049b0639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3deb7cf772ebef81f2192cc009c6f2c375cf4b09b11e0d4bce61ec4049b0639a->leave($__internal_3deb7cf772ebef81f2192cc009c6f2c375cf4b09b11e0d4bce61ec4049b0639a_prof);

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
