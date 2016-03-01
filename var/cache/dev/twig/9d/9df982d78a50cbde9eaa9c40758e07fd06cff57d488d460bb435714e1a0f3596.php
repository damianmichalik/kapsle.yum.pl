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
        $__internal_43542e1bd16c5609319c417e652204b7155951ede7379fc4cb6fe0a05154cc15 = $this->env->getExtension("native_profiler");
        $__internal_43542e1bd16c5609319c417e652204b7155951ede7379fc4cb6fe0a05154cc15->enter($__internal_43542e1bd16c5609319c417e652204b7155951ede7379fc4cb6fe0a05154cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43542e1bd16c5609319c417e652204b7155951ede7379fc4cb6fe0a05154cc15->leave($__internal_43542e1bd16c5609319c417e652204b7155951ede7379fc4cb6fe0a05154cc15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3309fdef06a48c89f08220c8e31003b1d8b327aab7589eb4117c8096aab103d4 = $this->env->getExtension("native_profiler");
        $__internal_3309fdef06a48c89f08220c8e31003b1d8b327aab7589eb4117c8096aab103d4->enter($__internal_3309fdef06a48c89f08220c8e31003b1d8b327aab7589eb4117c8096aab103d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3309fdef06a48c89f08220c8e31003b1d8b327aab7589eb4117c8096aab103d4->leave($__internal_3309fdef06a48c89f08220c8e31003b1d8b327aab7589eb4117c8096aab103d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a5749ce6d867c284a3262e457f6028c53b53fbdf648c38bc6c0ad53c176f598 = $this->env->getExtension("native_profiler");
        $__internal_0a5749ce6d867c284a3262e457f6028c53b53fbdf648c38bc6c0ad53c176f598->enter($__internal_0a5749ce6d867c284a3262e457f6028c53b53fbdf648c38bc6c0ad53c176f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a5749ce6d867c284a3262e457f6028c53b53fbdf648c38bc6c0ad53c176f598->leave($__internal_0a5749ce6d867c284a3262e457f6028c53b53fbdf648c38bc6c0ad53c176f598_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_098b5d7b8859b5405f52156db94527d762dc86d6784285fca70d062dd5402960 = $this->env->getExtension("native_profiler");
        $__internal_098b5d7b8859b5405f52156db94527d762dc86d6784285fca70d062dd5402960->enter($__internal_098b5d7b8859b5405f52156db94527d762dc86d6784285fca70d062dd5402960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_098b5d7b8859b5405f52156db94527d762dc86d6784285fca70d062dd5402960->leave($__internal_098b5d7b8859b5405f52156db94527d762dc86d6784285fca70d062dd5402960_prof);

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
