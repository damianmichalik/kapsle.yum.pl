<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_049b2506671bfc9ba66ea42364a593fb78da58404e29e885a5e23be517a25b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e8850fae55fbad9cbadd7bd355ea4255494e3943fedb3e6507529c38a83c4c4 = $this->env->getExtension("native_profiler");
        $__internal_5e8850fae55fbad9cbadd7bd355ea4255494e3943fedb3e6507529c38a83c4c4->enter($__internal_5e8850fae55fbad9cbadd7bd355ea4255494e3943fedb3e6507529c38a83c4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e8850fae55fbad9cbadd7bd355ea4255494e3943fedb3e6507529c38a83c4c4->leave($__internal_5e8850fae55fbad9cbadd7bd355ea4255494e3943fedb3e6507529c38a83c4c4_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_622416a25e0a26b8e949b12e036fc9e833497684e395255e4850dc615180ea8a = $this->env->getExtension("native_profiler");
        $__internal_622416a25e0a26b8e949b12e036fc9e833497684e395255e4850dc615180ea8a->enter($__internal_622416a25e0a26b8e949b12e036fc9e833497684e395255e4850dc615180ea8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Panel administracyjny
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <i class=\"glyphicon glyphicon-dashboard\"></i>  
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Kokpit</a>
            </li>
        </ol>    
    </div>
</div>
            
<div class=\"row\">
    <div class=\"col-lg-12\">
        <p>Witamy w panelu administracyjnym</p>
    </div>
</div>

";
        
        $__internal_622416a25e0a26b8e949b12e036fc9e833497684e395255e4850dc615180ea8a->leave($__internal_622416a25e0a26b8e949b12e036fc9e833497684e395255e4850dc615180ea8a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/* */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             Panel administracyjny*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>*/
/*             */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <p>Witamy w panelu administracyjnym</p>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
