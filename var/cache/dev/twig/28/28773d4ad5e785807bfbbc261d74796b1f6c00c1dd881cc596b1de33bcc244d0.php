<?php

/* AdminBundle:Breweries:show.html.twig */
class __TwigTemplate_9d285f8c42e6f681877f016168dc41247d688f72a26bb9e966292991a484eae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Breweries:show.html.twig", 1);
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
        $__internal_85c0b7f94b3af12d3cdb616d477b0ebe8bc3224dc1f0e48a52c7517036fda69d = $this->env->getExtension("native_profiler");
        $__internal_85c0b7f94b3af12d3cdb616d477b0ebe8bc3224dc1f0e48a52c7517036fda69d->enter($__internal_85c0b7f94b3af12d3cdb616d477b0ebe8bc3224dc1f0e48a52c7517036fda69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Breweries:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c0b7f94b3af12d3cdb616d477b0ebe8bc3224dc1f0e48a52c7517036fda69d->leave($__internal_85c0b7f94b3af12d3cdb616d477b0ebe8bc3224dc1f0e48a52c7517036fda69d_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_01221cfce1e0e5b37cbee0eb2d922ee1f9ad76c7a35c3a95901909680c5050a4 = $this->env->getExtension("native_profiler");
        $__internal_01221cfce1e0e5b37cbee0eb2d922ee1f9ad76c7a35c3a95901909680c5050a4->enter($__internal_01221cfce1e0e5b37cbee0eb2d922ee1f9ad76c7a35c3a95901909680c5050a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Podgląd browaru  #";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()), "html", null, true);
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
                <i class=\"fa fa-beer\"></i> 
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_breweries_list");
        echo "\">Zarządzanie browarami</a>
            </li>
            <li class=\"active\">
                <i class=\"fa fa-file\"></i> 
                Podgląd browaru  #";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nazwa</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <div class=\"btn-group\">                                
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_brewery_form_action", array("id" => $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                ";
        // line 48
        $context["tokenName"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : $this->getContext($context, "csrfProvider")), "getToken", array(0 => sprintf((isset($context["deleteTokenName"]) ? $context["deleteTokenName"] : $this->getContext($context, "deleteTokenName")), $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()))), "method");
        // line 49
        echo "                                ";
        $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("admin_delete_brewery", array("id" => $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "id", array()), "token" => (isset($context["tokenName"]) ? $context["tokenName"] : $this->getContext($context, "tokenName"))));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_breweries_list", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array())), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"> Powrót</span></a>

        </div>

    </div>

</div>

";
        
        $__internal_01221cfce1e0e5b37cbee0eb2d922ee1f9ad76c7a35c3a95901909680c5050a4->leave($__internal_01221cfce1e0e5b37cbee0eb2d922ee1f9ad76c7a35c3a95901909680c5050a4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Breweries:show.html.twig";
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
/*             Podgląd browaru  #{{ brewery.id }}*/
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
/*                 Podgląd browaru  #{{ brewery.id }}*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>     */
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
/*                         <td>{{ brewery.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nazwa</th>*/
/*                         <td>{{ brewery.name }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>&nbsp;</th>*/
/*                         <td>*/
/*                             <div class="btn-group">                                */
/*                                 <a href="{{ path('admin_brewery_form_action', {'id' : brewery.id}) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>*/
/*                                 {% set tokenName = csrfProvider.getToken(deleteTokenName|format(brewery.id)) %}*/
/*                                 {% set deleteUrl = path('admin_delete_brewery', {'id': brewery.id, 'token': tokenName}) %}*/
/*                                 <a href="{{ deleteUrl }}" class="btn btn-danger btn-sm" data-confirmaction=""><span class="glyphicon glyphicon-trash"></span></a>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>                   */
/*                 </tbody>*/
/*             </table>*/
/*                     */
/*             <a href="{{ path('admin_breweries_list', app.request.query.all) }}"><span class="glyphicon glyphicon-arrow-left"> Powrót</span></a>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
