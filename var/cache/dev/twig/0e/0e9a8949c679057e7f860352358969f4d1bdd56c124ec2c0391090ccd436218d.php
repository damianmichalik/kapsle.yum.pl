<?php

/* AdminBundle:Breweries:form.html.twig */
class __TwigTemplate_4905186ba6d9ec7f032a721883a37f39fbde1c1fb04244a20f6ffc554d726c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Breweries:form.html.twig", 1);
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
        $__internal_ffaa592e41eedb35b519662ed1f438087590b2e763ce2ccb693521554adb868e = $this->env->getExtension("native_profiler");
        $__internal_ffaa592e41eedb35b519662ed1f438087590b2e763ce2ccb693521554adb868e->enter($__internal_ffaa592e41eedb35b519662ed1f438087590b2e763ce2ccb693521554adb868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Breweries:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffaa592e41eedb35b519662ed1f438087590b2e763ce2ccb693521554adb868e->leave($__internal_ffaa592e41eedb35b519662ed1f438087590b2e763ce2ccb693521554adb868e_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_0e6cf48bc16c1c2b2074f6dcae80ae171e5209e880112fb98fb2e22bda1b4cbf = $this->env->getExtension("native_profiler");
        $__internal_0e6cf48bc16c1c2b2074f6dcae80ae171e5209e880112fb98fb2e22bda1b4cbf->enter($__internal_0e6cf48bc16c1c2b2074f6dcae80ae171e5209e880112fb98fb2e22bda1b4cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            ";
        // line 8
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 9
            echo "                Edycja browaru #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
            ";
        } else {
            // line 11
            echo "                Nowy browar
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
                <i class=\"fa fa-beer\"></i> 
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_breweries_list");
        echo "\">Zarządzanie browarami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                ";
        // line 25
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 26
            echo "                    Edycja browaru #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
                ";
        } else {
            // line 28
            echo "                    Nowy browar
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_breweries_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

    </div>

</div>

";
        
        $__internal_0e6cf48bc16c1c2b2074f6dcae80ae171e5209e880112fb98fb2e22bda1b4cbf->leave($__internal_0e6cf48bc16c1c2b2074f6dcae80ae171e5209e880112fb98fb2e22bda1b4cbf_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Breweries:form.html.twig";
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
/*                 Edycja browaru #{{ slideId }}*/
/*             {% else %}*/
/*                 Nowy browar*/
/*             {% endif %}*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>            */
/*             <li>*/
/*                 <i class="fa fa-beer"></i> */
/*                 <a href="{{ path('admin_breweries_list') }}">Zarządzanie browarami</a>*/
/*             </li>*/
/*             <li class="active">*/
/*                 <i class="fa fa-file"></i> */
/*                 {% if slideId is not null %}*/
/*                     Edycja browaru #{{ slideId }}*/
/*                 {% else %}*/
/*                     Nowy browar*/
/*                 {% endif %}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>       */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/*             */
/*         {% form_theme form with 'AdminBundle:Form:form_theme.html.twig' %}*/
/* */
/*         {{ form(form) }}*/
/* */
/*         <a href="{{ path('admin_breweries_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
