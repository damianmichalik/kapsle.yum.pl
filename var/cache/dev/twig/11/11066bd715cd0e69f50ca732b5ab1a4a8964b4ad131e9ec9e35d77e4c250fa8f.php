<?php

/* AdminBundle:Partials:adminMenu.html.twig */
class __TwigTemplate_07162f6d857cb30770ea5679f1f126f53d0bf2c7f453c08a7c26dabca6910f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4876f88a108c5612dd4336e6dd3f6924c5d1c63a70260b48ebbfd7ff0fcdb42f = $this->env->getExtension("native_profiler");
        $__internal_4876f88a108c5612dd4336e6dd3f6924c5d1c63a70260b48ebbfd7ff0fcdb42f->enter($__internal_4876f88a108c5612dd4336e6dd3f6924c5d1c63a70260b48ebbfd7ff0fcdb42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Partials:adminMenu.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav side-nav\">
    <li class=\"active\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> Kokpit</a></li>
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("admin_caps_list");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Zarządzanie kapslami</a></li>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("admin_countries_list");
        echo "\"><i class=\"glyphicon glyphicon-globe\"></i> Zarządzanie krajami</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_breweries_list");
        echo "\"><i class=\"fa fa-beer\"></i> Zarządzanie browarami</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_cache");
        echo "\"><i class=\"fa fa-rocket\"></i> Zarządzanie cache'm</a></li>
</ul>";
        
        $__internal_4876f88a108c5612dd4336e6dd3f6924c5d1c63a70260b48ebbfd7ff0fcdb42f->leave($__internal_4876f88a108c5612dd4336e6dd3f6924c5d1c63a70260b48ebbfd7ff0fcdb42f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Partials:adminMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav side-nav">*/
/*     <li class="active"><a href="{{ path('admin_homepage') }}"><i class="glyphicon glyphicon-dashboard"></i> Kokpit</a></li>*/
/*     <li><a href="{{ path('admin_caps_list') }}"><i class="glyphicon glyphicon-list"></i> Zarządzanie kapslami</a></li>*/
/*     <li><a href="{{ path('admin_countries_list') }}"><i class="glyphicon glyphicon-globe"></i> Zarządzanie krajami</a></li>*/
/*     <li><a href="{{ path('admin_breweries_list') }}"><i class="fa fa-beer"></i> Zarządzanie browarami</a></li>*/
/*     <li><a href="{{ path('admin_cache') }}"><i class="fa fa-rocket"></i> Zarządzanie cache'm</a></li>*/
/* </ul>*/
