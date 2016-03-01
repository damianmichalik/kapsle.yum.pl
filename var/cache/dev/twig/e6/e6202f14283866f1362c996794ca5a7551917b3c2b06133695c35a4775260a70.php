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
        $__internal_3dbadf351782b49031af4f5379f9af0ce2b07c803056c39c0bde4ff4403f64ba = $this->env->getExtension("native_profiler");
        $__internal_3dbadf351782b49031af4f5379f9af0ce2b07c803056c39c0bde4ff4403f64ba->enter($__internal_3dbadf351782b49031af4f5379f9af0ce2b07c803056c39c0bde4ff4403f64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dbadf351782b49031af4f5379f9af0ce2b07c803056c39c0bde4ff4403f64ba->leave($__internal_3dbadf351782b49031af4f5379f9af0ce2b07c803056c39c0bde4ff4403f64ba_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_43ec44cfadd185099cda83e4b05f7041c1fb38d998f16d50209b5b785bcbb1fc = $this->env->getExtension("native_profiler");
        $__internal_43ec44cfadd185099cda83e4b05f7041c1fb38d998f16d50209b5b785bcbb1fc->enter($__internal_43ec44cfadd185099cda83e4b05f7041c1fb38d998f16d50209b5b785bcbb1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_43ec44cfadd185099cda83e4b05f7041c1fb38d998f16d50209b5b785bcbb1fc->leave($__internal_43ec44cfadd185099cda83e4b05f7041c1fb38d998f16d50209b5b785bcbb1fc_prof);

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
