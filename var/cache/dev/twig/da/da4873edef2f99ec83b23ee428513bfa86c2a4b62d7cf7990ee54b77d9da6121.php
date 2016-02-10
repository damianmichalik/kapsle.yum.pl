<?php

/* AppBundle:Caps:details.html.twig */
class __TwigTemplate_bea49a3a957f05674bf4159aa9bc86d0318e95793414d62e89634fce4584d585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Caps:details.html.twig", 1);
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
        $__internal_4798dd77474130191a1d4c056768e01a38036b0e8206977c8acd25c485e74754 = $this->env->getExtension("native_profiler");
        $__internal_4798dd77474130191a1d4c056768e01a38036b0e8206977c8acd25c485e74754->enter($__internal_4798dd77474130191a1d4c056768e01a38036b0e8206977c8acd25c485e74754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caps:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4798dd77474130191a1d4c056768e01a38036b0e8206977c8acd25c485e74754->leave($__internal_4798dd77474130191a1d4c056768e01a38036b0e8206977c8acd25c485e74754_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_3f47a5521d1597e6e02f90b52135aba1ed0f7690464ecac9db1a612bbfaae8b2 = $this->env->getExtension("native_profiler");
        $__internal_3f47a5521d1597e6e02f90b52135aba1ed0f7690464ecac9db1a612bbfaae8b2->enter($__internal_3f47a5521d1597e6e02f90b52135aba1ed0f7690464ecac9db1a612bbfaae8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()) . " | ") . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_3f47a5521d1597e6e02f90b52135aba1ed0f7690464ecac9db1a612bbfaae8b2->leave($__internal_3f47a5521d1597e6e02f90b52135aba1ed0f7690464ecac9db1a612bbfaae8b2_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_95b4e2d96a17d5f9e231e3da010c5ad78e6f070f62ec582636bf9a1b9ab8cdb8 = $this->env->getExtension("native_profiler");
        $__internal_95b4e2d96a17d5f9e231e3da010c5ad78e6f070f62ec582636bf9a1b9ab8cdb8->enter($__internal_95b4e2d96a17d5f9e231e3da010c5ad78e6f070f62ec582636bf9a1b9ab8cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_95b4e2d96a17d5f9e231e3da010c5ad78e6f070f62ec582636bf9a1b9ab8cdb8->leave($__internal_95b4e2d96a17d5f9e231e3da010c5ad78e6f070f62ec582636bf9a1b9ab8cdb8_prof);

    }

    // line 11
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_936677e122e054a6089797716313a467e0056fbc9688c912f74ec7db4da0b168 = $this->env->getExtension("native_profiler");
        $__internal_936677e122e054a6089797716313a467e0056fbc9688c912f74ec7db4da0b168->enter($__internal_936677e122e054a6089797716313a467e0056fbc9688c912f74ec7db4da0b168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 12
        echo "
    <section id=\"caps-card\">
        <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()), "html", null, true);
        echo "</h2>
        <hr>
        <p>
            <span class=\"glyphicon glyphicon-time\"></span> Dodany ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "createDate", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </p>
        <hr>
        <p>            
            <img class=\"img-responsive\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "image", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()), "html", null, true);
        echo "\">
        </p>       
        ";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "brewery", array()))) {
            // line 24
            echo "        <p>
            Browar: <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("breweries_details", array("slug" => $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "brewery", array()), "slug", array()))), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "brewery", array()), "name", array()), "html", null, true);
            echo "</strong></a>            
        </p>
        ";
        }
        // line 28
        echo "    </section>

";
        
        $__internal_936677e122e054a6089797716313a467e0056fbc9688c912f74ec7db4da0b168->leave($__internal_936677e122e054a6089797716313a467e0056fbc9688c912f74ec7db4da0b168_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caps:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  103 => 25,  100 => 24,  98 => 23,  91 => 21,  84 => 17,  78 => 14,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block headTitle %}*/
/*     {{ cap.name ~ ' | ' ~ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li>{{ cap.name }}</li>*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section id="caps-card">*/
/*         <h2>{{ cap.name }}</h2>*/
/*         <hr>*/
/*         <p>*/
/*             <span class="glyphicon glyphicon-time"></span> Dodany {{ cap.createDate|date('Y-m-d H:i') }}*/
/*         </p>*/
/*         <hr>*/
/*         <p>            */
/*             <img class="img-responsive" src="{{ asset(cap.image) }}" alt="{{ cap.name }}">*/
/*         </p>       */
/*         {% if cap.brewery is not null %}*/
/*         <p>*/
/*             Browar: <a href="{{ path('breweries_details', {'slug' : cap.brewery.slug}) }}"><strong>{{ cap.brewery.name }}</strong></a>            */
/*         </p>*/
/*         {% endif %}*/
/*     </section>*/
/* */
/* {% endblock %}*/
