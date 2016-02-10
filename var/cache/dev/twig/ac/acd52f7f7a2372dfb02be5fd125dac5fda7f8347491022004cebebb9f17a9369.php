<?php

/* AdminBundle:Countries:show.html.twig */
class __TwigTemplate_95c8e3842894cf6e83ee9c8d7c71b3ca34064fa57f98270240cbc8cc114e9d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Countries:show.html.twig", 1);
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
        $__internal_b77a17c298af517a5d97fbc2acf18f0bf535f3f9524831bd8ae5d80eb42470b7 = $this->env->getExtension("native_profiler");
        $__internal_b77a17c298af517a5d97fbc2acf18f0bf535f3f9524831bd8ae5d80eb42470b7->enter($__internal_b77a17c298af517a5d97fbc2acf18f0bf535f3f9524831bd8ae5d80eb42470b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Countries:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77a17c298af517a5d97fbc2acf18f0bf535f3f9524831bd8ae5d80eb42470b7->leave($__internal_b77a17c298af517a5d97fbc2acf18f0bf535f3f9524831bd8ae5d80eb42470b7_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_6b7af7bb1cb8c6f7f2277a5fa03ce649f7dffa6f986054f2e9fe73ee2bd561b6 = $this->env->getExtension("native_profiler");
        $__internal_6b7af7bb1cb8c6f7f2277a5fa03ce649f7dffa6f986054f2e9fe73ee2bd561b6->enter($__internal_6b7af7bb1cb8c6f7f2277a5fa03ce649f7dffa6f986054f2e9fe73ee2bd561b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Podgląd kraju  #";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()), "html", null, true);
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
                <i class=\"glyphicon glyphicon-globe\"></i> 
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_countries_list");
        echo "\">Zarządzanie krajami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                Podgląd kraju  #";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nazwa</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <div class=\"btn-group\">                                
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_country_form_action", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                ";
        // line 48
        $context["tokenName"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : $this->getContext($context, "csrfProvider")), "getToken", array(0 => sprintf((isset($context["deleteTokenName"]) ? $context["deleteTokenName"] : $this->getContext($context, "deleteTokenName")), $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()))), "method");
        // line 49
        echo "                                ";
        $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("admin_delete_country", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()), "token" => (isset($context["tokenName"]) ? $context["tokenName"] : $this->getContext($context, "tokenName"))));
        // line 50
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["deleteUrl"]) ? $context["deleteUrl"] : $this->getContext($context, "deleteUrl")), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" data-confirmaction=\"\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </div>
                        </td>
                    </tr>                   
                </tbody>
            </table>
                    
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_countries_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

        </div>

    </div>

</div>

";
        
        $__internal_6b7af7bb1cb8c6f7f2277a5fa03ce649f7dffa6f986054f2e9fe73ee2bd561b6->leave($__internal_6b7af7bb1cb8c6f7f2277a5fa03ce649f7dffa6f986054f2e9fe73ee2bd561b6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Countries:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  112 => 50,  109 => 49,  107 => 48,  103 => 47,  94 => 41,  87 => 37,  68 => 21,  61 => 17,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             Podgląd kraju  #{{ country.id }}*/
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
/*                 Podgląd kraju  #{{ country.id }}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>       */
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
/*                         <td>{{ country.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nazwa</th>*/
/*                         <td>{{ country.name }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>&nbsp;</th>*/
/*                         <td>*/
/*                             <div class="btn-group">                                */
/*                                 <a href="{{ path('admin_country_form_action', {'id' : country.id}) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                                 {% set tokenName = csrfProvider.getToken(deleteTokenName|format(country.id)) %}*/
/*                                 {% set deleteUrl = path('admin_delete_country', {'id': country.id, 'token': tokenName}) %}*/
/*                                 <a href="{{ deleteUrl }}" class="btn btn-danger btn-sm" data-confirmaction=""><span class="glyphicon glyphicon-trash"></span></a>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>                   */
/*                 </tbody>*/
/*             </table>*/
/*                     */
/*             <a href="{{ path('admin_countries_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
