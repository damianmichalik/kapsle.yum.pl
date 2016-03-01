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
        $__internal_29beccf4ebe06575551859e145174d8386641e7c0fd324de3b0b119ddd4bd36b = $this->env->getExtension("native_profiler");
        $__internal_29beccf4ebe06575551859e145174d8386641e7c0fd324de3b0b119ddd4bd36b->enter($__internal_29beccf4ebe06575551859e145174d8386641e7c0fd324de3b0b119ddd4bd36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caps:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29beccf4ebe06575551859e145174d8386641e7c0fd324de3b0b119ddd4bd36b->leave($__internal_29beccf4ebe06575551859e145174d8386641e7c0fd324de3b0b119ddd4bd36b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_0b9ea96921745f16c9ddd99838ac561497e6d4b81fba700882d77cf395ab09eb = $this->env->getExtension("native_profiler");
        $__internal_0b9ea96921745f16c9ddd99838ac561497e6d4b81fba700882d77cf395ab09eb->enter($__internal_0b9ea96921745f16c9ddd99838ac561497e6d4b81fba700882d77cf395ab09eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()) . " | ") . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_0b9ea96921745f16c9ddd99838ac561497e6d4b81fba700882d77cf395ab09eb->leave($__internal_0b9ea96921745f16c9ddd99838ac561497e6d4b81fba700882d77cf395ab09eb_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_145b15cad3bdc674cf8264c48bcf149da5a1595d0c3c010352d9fcd5fb429114 = $this->env->getExtension("native_profiler");
        $__internal_145b15cad3bdc674cf8264c48bcf149da5a1595d0c3c010352d9fcd5fb429114->enter($__internal_145b15cad3bdc674cf8264c48bcf149da5a1595d0c3c010352d9fcd5fb429114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_145b15cad3bdc674cf8264c48bcf149da5a1595d0c3c010352d9fcd5fb429114->leave($__internal_145b15cad3bdc674cf8264c48bcf149da5a1595d0c3c010352d9fcd5fb429114_prof);

    }

    // line 11
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_6ab337ab9836d8fb01e60aa68b7d91fb0ef4538a0cc360dd73376900dfb3b09e = $this->env->getExtension("native_profiler");
        $__internal_6ab337ab9836d8fb01e60aa68b7d91fb0ef4538a0cc360dd73376900dfb3b09e->enter($__internal_6ab337ab9836d8fb01e60aa68b7d91fb0ef4538a0cc360dd73376900dfb3b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

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
        
        $__internal_6ab337ab9836d8fb01e60aa68b7d91fb0ef4538a0cc360dd73376900dfb3b09e->leave($__internal_6ab337ab9836d8fb01e60aa68b7d91fb0ef4538a0cc360dd73376900dfb3b09e_prof);

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
