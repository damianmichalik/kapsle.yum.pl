<?php

/* AdminBundle:Caps:show.html.twig */
class __TwigTemplate_e75cb6523b9bdbabbf405ff30d6a3c52c9bee6fee4991f00ee7a54bea0d9ee3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Caps:show.html.twig", 1);
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
        $__internal_5bc6fad1da884b597f1d25bc78c94b02f14b5593d2a828c6596edaf9be73c7c3 = $this->env->getExtension("native_profiler");
        $__internal_5bc6fad1da884b597f1d25bc78c94b02f14b5593d2a828c6596edaf9be73c7c3->enter($__internal_5bc6fad1da884b597f1d25bc78c94b02f14b5593d2a828c6596edaf9be73c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Caps:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc6fad1da884b597f1d25bc78c94b02f14b5593d2a828c6596edaf9be73c7c3->leave($__internal_5bc6fad1da884b597f1d25bc78c94b02f14b5593d2a828c6596edaf9be73c7c3_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_8fcbe5ff394e45306f62e4082d17f6bc0969205b16476adcde099f4ba0f63d6f = $this->env->getExtension("native_profiler");
        $__internal_8fcbe5ff394e45306f62e4082d17f6bc0969205b16476adcde099f4ba0f63d6f->enter($__internal_8fcbe5ff394e45306f62e4082d17f6bc0969205b16476adcde099f4ba0f63d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Podgląd kapsla  #";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()), "html", null, true);
        echo "
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <i class=\"glyphicon glyphicon-dashboard\"></i>  
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Kokpit</a>
            </li>            
            <li>
                <i class=\"glyphicon glyphicon-list\"></i> 
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_caps_list");
        echo "\">Zarządzanie kapslami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                Podgląd kapsla  #";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()), "html", null, true);
        echo "
            </li>
        </ol>    
    </div>
</div>        

<div class=\"row\">

    <div class=\"col-lg-6\">

        <div class=\"table-responsive\">

            <table class=\"table table-striped table-bordered table-hover\">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nazwa</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 43
        if ( !(null === $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "brewery", array()))) {
            // line 44
            echo "                    <tr>
                        <th>Browar</th>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "brewery", array()), "name", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 49
        echo "                    <tr>
                        <th>Zdjęcie</th>
                        <td><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "thumb", array())), "html", null, true);
        echo "\"></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <div class=\"btn-group\">                                
                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_cap_form_action", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                ";
        // line 58
        $context["tokenName"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : $this->getContext($context, "csrfProvider")), "getToken", array(0 => sprintf((isset($context["deleteTokenName"]) ? $context["deleteTokenName"] : $this->getContext($context, "deleteTokenName")), $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()))), "method");
        // line 59
        echo "                                ";
        $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("admin_delete_cap", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id", array()), "token" => (isset($context["tokenName"]) ? $context["tokenName"] : $this->getContext($context, "tokenName"))));
        // line 60
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["deleteUrl"]) ? $context["deleteUrl"] : $this->getContext($context, "deleteUrl")), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" data-confirmaction=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </div>
                        </td>
                    </tr>                   
                </tbody>
            </table>
                    
            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_caps_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

        </div>

    </div>

</div>

";
        
        $__internal_8fcbe5ff394e45306f62e4082d17f6bc0969205b16476adcde099f4ba0f63d6f->leave($__internal_8fcbe5ff394e45306f62e4082d17f6bc0969205b16476adcde099f4ba0f63d6f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Caps:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  133 => 60,  130 => 59,  128 => 58,  124 => 57,  115 => 51,  111 => 49,  105 => 46,  101 => 44,  99 => 43,  94 => 41,  87 => 37,  68 => 21,  61 => 17,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             Podgląd kapsla  #{{ cap.id }}*/
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
/*                 Podgląd kapsla  #{{ cap.id }}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>        */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/* */
/*         <div class="table-responsive">*/
/* */
/*             <table class="table table-striped table-bordered table-hover">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>ID</th>*/
/*                         <td>{{ cap.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nazwa</th>*/
/*                         <td>{{ cap.name }}</td>*/
/*                     </tr>*/
/*                     {% if cap.brewery is not null %}*/
/*                     <tr>*/
/*                         <th>Browar</th>*/
/*                         <td>{{ cap.brewery.name }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                     <tr>*/
/*                         <th>Zdjęcie</th>*/
/*                         <td><img src="{{ asset(cap.thumb) }}"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>&nbsp;</th>*/
/*                         <td>*/
/*                             <div class="btn-group">                                */
/*                                 <a href="{{ path('admin_cap_form_action', {'id' : cap.id}) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                                 {% set tokenName = csrfProvider.getToken(deleteTokenName|format(cap.id)) %}*/
/*                                 {% set deleteUrl = path('admin_delete_cap', {'id': cap.id, 'token': tokenName}) %}*/
/*                                 <a href="{{ deleteUrl }}" class="btn btn-danger btn-sm" data-confirmaction=""><span class="glyphicon glyphicon-trash"></span></a>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>                   */
/*                 </tbody>*/
/*             </table>*/
/*                     */
/*             <a href="{{ path('admin_caps_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
