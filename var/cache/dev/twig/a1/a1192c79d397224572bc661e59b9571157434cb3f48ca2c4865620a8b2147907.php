<?php

/* AdminBundle:Caps:form.html.twig */
class __TwigTemplate_cffde8c63689d499579dc456de478812857df1e7ffe539c070404d6f56eeba5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Caps:form.html.twig", 1);
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
        $__internal_dc2e0e739cb691831fa780b8e99be9dd4c2919a47c96cbd84ff45b3a3369a1d4 = $this->env->getExtension("native_profiler");
        $__internal_dc2e0e739cb691831fa780b8e99be9dd4c2919a47c96cbd84ff45b3a3369a1d4->enter($__internal_dc2e0e739cb691831fa780b8e99be9dd4c2919a47c96cbd84ff45b3a3369a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Caps:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2e0e739cb691831fa780b8e99be9dd4c2919a47c96cbd84ff45b3a3369a1d4->leave($__internal_dc2e0e739cb691831fa780b8e99be9dd4c2919a47c96cbd84ff45b3a3369a1d4_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_84ec5c87f3203c031ba669d0023fde30520a71bab857fa5b26372400e61d04b6 = $this->env->getExtension("native_profiler");
        $__internal_84ec5c87f3203c031ba669d0023fde30520a71bab857fa5b26372400e61d04b6->enter($__internal_84ec5c87f3203c031ba669d0023fde30520a71bab857fa5b26372400e61d04b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            ";
        // line 9
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 10
            echo "                Edycja kapsla #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
            ";
        } else {
            // line 12
            echo "                Nowy kapsel
            ";
        }
        // line 14
        echo "        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <i class=\"glyphicon glyphicon-dashboard\"></i>  
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Kokpit</a>
            </li>            
            <li>
                <i class=\"glyphicon glyphicon-list\"></i> 
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_caps_list");
        echo "\">Zarządzanie kapslami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                ";
        // line 26
        if ( !(null === (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")))) {
            // line 27
            echo "                    Edycja kapsla #";
            echo twig_escape_filter($this->env, (isset($context["slideId"]) ? $context["slideId"] : $this->getContext($context, "slideId")), "html", null, true);
            echo "
                ";
        } else {
            // line 29
            echo "                    Nowy kapsel
                ";
        }
        // line 31
        echo "            </li>
        </ol>    
    </div>
</div>    

<div class=\"row\">

    <div class=\"col-lg-6\">
            
        ";
        // line 40
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "AdminBundle:Form:form_theme.html.twig");
        // line 41
        echo "
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_caps_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

    </div>

</div>

";
        
        $__internal_84ec5c87f3203c031ba669d0023fde30520a71bab857fa5b26372400e61d04b6->leave($__internal_84ec5c87f3203c031ba669d0023fde30520a71bab857fa5b26372400e61d04b6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Caps:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  107 => 42,  104 => 41,  102 => 40,  91 => 31,  87 => 29,  81 => 27,  79 => 26,  72 => 22,  65 => 18,  59 => 14,  55 => 12,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             {% if slideId is not null %}*/
/*                 Edycja kapsla #{{ slideId }}*/
/*             {% else %}*/
/*                 Nowy kapsel*/
/*             {% endif %}*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>            */
/*             <li>*/
/*                 <i class="glyphicon glyphicon-list"></i> */
/*                 <a href="{{ path('admin_caps_list') }}">Zarządzanie kapslami</a>*/
/*             </li>*/
/*             <li class="active">*/
/*                 <i class="fa fa-file"></i> */
/*                 {% if slideId is not null %}*/
/*                     Edycja kapsla #{{ slideId }}*/
/*                 {% else %}*/
/*                     Nowy kapsel*/
/*                 {% endif %}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>    */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/*             */
/*         {% form_theme form with 'AdminBundle:Form:form_theme.html.twig' %}*/
/* */
/*         {{ form(form) }}*/
/* */
/*         <a href="{{ path('admin_caps_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
