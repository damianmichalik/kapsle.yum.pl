<?php

/* AdminBundle:Countries:form.html.twig */
class __TwigTemplate_4292ed436913b8e1c6e8e7734fb278a24710e8ddbedfb88a0368448e317c618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Countries:form.html.twig", 1);
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
        $__internal_901607d9be45b08f23dd84a34a8ed6f0a0ff253291e69e2db08f889e01ea5e4a = $this->env->getExtension("native_profiler");
        $__internal_901607d9be45b08f23dd84a34a8ed6f0a0ff253291e69e2db08f889e01ea5e4a->enter($__internal_901607d9be45b08f23dd84a34a8ed6f0a0ff253291e69e2db08f889e01ea5e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Countries:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901607d9be45b08f23dd84a34a8ed6f0a0ff253291e69e2db08f889e01ea5e4a->leave($__internal_901607d9be45b08f23dd84a34a8ed6f0a0ff253291e69e2db08f889e01ea5e4a_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_66381777eafaaf8f66dc3190646b5d665eb38ef9da202d95c9fe26976bbcc357 = $this->env->getExtension("native_profiler");
        $__internal_66381777eafaaf8f66dc3190646b5d665eb38ef9da202d95c9fe26976bbcc357->enter($__internal_66381777eafaaf8f66dc3190646b5d665eb38ef9da202d95c9fe26976bbcc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            ";
        // line 8
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 9
            echo "                Edycja kraju #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
            ";
        } else {
            // line 11
            echo "                Nowy kraj
            ";
        }
        // line 13
        echo "        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <i class=\"glyphicon glyphicon-dashboard\"></i>  
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Kokpit</a>
            </li>            
            <li>
                <i class=\"glyphicon glyphicon-globe\"></i> 
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_countries_list");
        echo "\">Zarządzanie krajami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                ";
        // line 25
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 26
            echo "                    Edycja kraju #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
                ";
        } else {
            // line 28
            echo "                    Nowy kraj
                ";
        }
        // line 30
        echo "            </li>
        </ol>    
    </div>
</div>     

<div class=\"row\">

    <div class=\"col-lg-6\">
            
        ";
        // line 39
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "AdminBundle:Form:form_theme.html.twig");
        // line 40
        echo "
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_countries_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

    </div>

</div>

";
        
        $__internal_66381777eafaaf8f66dc3190646b5d665eb38ef9da202d95c9fe26976bbcc357->leave($__internal_66381777eafaaf8f66dc3190646b5d665eb38ef9da202d95c9fe26976bbcc357_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Countries:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  106 => 41,  103 => 40,  101 => 39,  90 => 30,  86 => 28,  80 => 26,  78 => 25,  71 => 21,  64 => 17,  58 => 13,  54 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             {% if slideId is not null %}*/
/*                 Edycja kraju #{{ slideId }}*/
/*             {% else %}*/
/*                 Nowy kraj*/
/*             {% endif %}*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>            */
/*             <li>*/
/*                 <i class="glyphicon glyphicon-globe"></i> */
/*                 <a href="{{ path('admin_countries_list') }}">Zarządzanie krajami</a>*/
/*             </li>*/
/*             <li class="active">*/
/*                 <i class="fa fa-file"></i> */
/*                 {% if slideId is not null %}*/
/*                     Edycja kraju #{{ slideId }}*/
/*                 {% else %}*/
/*                     Nowy kraj*/
/*                 {% endif %}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>     */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/*             */
/*         {% form_theme form with 'AdminBundle:Form:form_theme.html.twig' %}*/
/* */
/*         {{ form(form) }}*/
/* */
/*         <a href="{{ path('admin_countries_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
