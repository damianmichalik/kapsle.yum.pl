<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fea0056e415e330ffefcea0b61daab65a20c3692ccd0bc282ae37d2f4ed5d538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_bbe67e962663e0da4a4aab928e416da30bc96b1879b2b22ae1f95da1d99af3f1 = $this->env->getExtension("native_profiler");
        $__internal_bbe67e962663e0da4a4aab928e416da30bc96b1879b2b22ae1f95da1d99af3f1->enter($__internal_bbe67e962663e0da4a4aab928e416da30bc96b1879b2b22ae1f95da1d99af3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe67e962663e0da4a4aab928e416da30bc96b1879b2b22ae1f95da1d99af3f1->leave($__internal_bbe67e962663e0da4a4aab928e416da30bc96b1879b2b22ae1f95da1d99af3f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa7a5fa8d79ae9d62d5d58b23397a62e7ce0e86e280202bbc901ef24ef98d7c2 = $this->env->getExtension("native_profiler");
        $__internal_fa7a5fa8d79ae9d62d5d58b23397a62e7ce0e86e280202bbc901ef24ef98d7c2->enter($__internal_fa7a5fa8d79ae9d62d5d58b23397a62e7ce0e86e280202bbc901ef24ef98d7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa7a5fa8d79ae9d62d5d58b23397a62e7ce0e86e280202bbc901ef24ef98d7c2->leave($__internal_fa7a5fa8d79ae9d62d5d58b23397a62e7ce0e86e280202bbc901ef24ef98d7c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8056ad756fa60d4c508891b81d689ae54712f8585c3ce52a590207a838373b8 = $this->env->getExtension("native_profiler");
        $__internal_b8056ad756fa60d4c508891b81d689ae54712f8585c3ce52a590207a838373b8->enter($__internal_b8056ad756fa60d4c508891b81d689ae54712f8585c3ce52a590207a838373b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b8056ad756fa60d4c508891b81d689ae54712f8585c3ce52a590207a838373b8->leave($__internal_b8056ad756fa60d4c508891b81d689ae54712f8585c3ce52a590207a838373b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
