<?php

/* AppBundle:Breweries:details.html.twig */
class __TwigTemplate_5f955f90162e864a98448b6bc0729a3fa8728529c0df088dde607d2c0a2776ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Breweries:details.html.twig", 1);
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
        $__internal_4811c55f82faf2e4a9c451f351816fdca2213fafa5767210ad72552f792f69dd = $this->env->getExtension("native_profiler");
        $__internal_4811c55f82faf2e4a9c451f351816fdca2213fafa5767210ad72552f792f69dd->enter($__internal_4811c55f82faf2e4a9c451f351816fdca2213fafa5767210ad72552f792f69dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Breweries:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4811c55f82faf2e4a9c451f351816fdca2213fafa5767210ad72552f792f69dd->leave($__internal_4811c55f82faf2e4a9c451f351816fdca2213fafa5767210ad72552f792f69dd_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1301060991add0300d1a3560f74cddf9ae422dae9396bcedd3e03b98b3d5b0e0 = $this->env->getExtension("native_profiler");
        $__internal_1301060991add0300d1a3560f74cddf9ae422dae9396bcedd3e03b98b3d5b0e0->enter($__internal_1301060991add0300d1a3560f74cddf9ae422dae9396bcedd3e03b98b3d5b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()) . " | ") . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_1301060991add0300d1a3560f74cddf9ae422dae9396bcedd3e03b98b3d5b0e0->leave($__internal_1301060991add0300d1a3560f74cddf9ae422dae9396bcedd3e03b98b3d5b0e0_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3a6f586a56f6fa81da3417689e3ad86f7e23515c4ce67a2fc4af19b0228afc27 = $this->env->getExtension("native_profiler");
        $__internal_3a6f586a56f6fa81da3417689e3ad86f7e23515c4ce67a2fc4af19b0228afc27->enter($__internal_3a6f586a56f6fa81da3417689e3ad86f7e23515c4ce67a2fc4af19b0228afc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("breweries_index");
        echo "\">Browary</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_3a6f586a56f6fa81da3417689e3ad86f7e23515c4ce67a2fc4af19b0228afc27->leave($__internal_3a6f586a56f6fa81da3417689e3ad86f7e23515c4ce67a2fc4af19b0228afc27_prof);

    }

    // line 12
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_8b9cca33604a51308886e80e7f7a12831045a0d08dd87cc17848bd71473f4e6d = $this->env->getExtension("native_profiler");
        $__internal_8b9cca33604a51308886e80e7f7a12831045a0d08dd87cc17848bd71473f4e6d->enter($__internal_8b9cca33604a51308886e80e7f7a12831045a0d08dd87cc17848bd71473f4e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 13
        echo "
    <section id=\"caps-card\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</h2>        
            <hr>
            <p>
                <span class=\"glyphicon glyphicon-time\"></span> Dodany ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "createDate", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            </p>
            <hr>  
        </div>  
        <div class=\"col-md-6\">  
            ";
        // line 24
        echo (isset($context["mapHtml"]) ? $context["mapHtml"] : $this->getContext($context, "mapHtml"));
        echo "
            ";
        // line 25
        echo (isset($context["mapJS"]) ? $context["mapJS"] : $this->getContext($context, "mapJS"));
        echo "
        </div> 
        <div class=\"col-md-6\">    
            <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "country", array()), "name", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "postcode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "city", array()), "html", null, true);
        echo "</p>        
            <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "address", array()), "html", null, true);
        echo "</p>
        </div>       
    </section>

";
        
        $__internal_8b9cca33604a51308886e80e7f7a12831045a0d08dd87cc17848bd71473f4e6d->leave($__internal_8b9cca33604a51308886e80e7f7a12831045a0d08dd87cc17848bd71473f4e6d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Breweries:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  89 => 19,  83 => 16,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block headTitle %}*/
/*     {{ brewery.name ~ ' | ' ~ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ path('breweries_index') }}">Browary</a></li>*/
/*     <li>{{ brewery.name }}</li>*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section id="caps-card">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*             <h2>{{ brewery.name }}</h2>        */
/*             <hr>*/
/*             <p>*/
/*                 <span class="glyphicon glyphicon-time"></span> Dodany {{ brewery.createDate|date('Y-m-d H:i') }}*/
/*             </p>*/
/*             <hr>  */
/*         </div>  */
/*         <div class="col-md-6">  */
/*             {{ mapHtml|raw }}*/
/*             {{ mapJS|raw }}*/
/*         </div> */
/*         <div class="col-md-6">    */
/*             <p>{{ brewery.country.name }}</p>*/
/*             <p>{{ brewery.postcode }}, {{ brewery.city }}</p>        */
/*             <p>{{ brewery.address }}</p>*/
/*         </div>       */
/*     </section>*/
/* */
/* {% endblock %}*/
