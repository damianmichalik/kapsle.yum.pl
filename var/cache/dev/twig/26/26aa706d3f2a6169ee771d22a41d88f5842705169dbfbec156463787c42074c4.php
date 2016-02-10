<?php

/* AdminBundle:Countries:index.html.twig */
class __TwigTemplate_851a0006474809464aae3d309446a3dcafe071a530f2279526ee796bb31fda53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Countries:index.html.twig", 1);
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
        $__internal_b22966a8c8b632f0289b07c8c08827470bcb9f066f4b9027cbfb8443dabe1f40 = $this->env->getExtension("native_profiler");
        $__internal_b22966a8c8b632f0289b07c8c08827470bcb9f066f4b9027cbfb8443dabe1f40->enter($__internal_b22966a8c8b632f0289b07c8c08827470bcb9f066f4b9027cbfb8443dabe1f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Countries:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22966a8c8b632f0289b07c8c08827470bcb9f066f4b9027cbfb8443dabe1f40->leave($__internal_b22966a8c8b632f0289b07c8c08827470bcb9f066f4b9027cbfb8443dabe1f40_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_53bd5aa27847e7fce8049a4a52ad35e8b6a7ccc4484daf73892101aa8c9181a3 = $this->env->getExtension("native_profiler");
        $__internal_53bd5aa27847e7fce8049a4a52ad35e8b6a7ccc4484daf73892101aa8c9181a3->enter($__internal_53bd5aa27847e7fce8049a4a52ad35e8b6a7ccc4484daf73892101aa8c9181a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Zarządzanie krajami
        </h1>
        <ol class=\"breadcrumb\">
            <li>
                <i class=\"glyphicon glyphicon-dashboard\"></i>  
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Kokpit</a>
            </li>            
            <li class=\"active\">
                <i class=\"glyphicon glyphicon-globe\"></i> 
                Zarządzanie krajami
            </li>
        </ol>    
    </div>
</div>       

<div class=\"row\">

    <div class=\"col-lg-6\">
    
        <div class=\"dm-table-action\">           
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_country_form_action", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">Dodaj nowy kraj</a>        
        </div>

        <div class=\"form-row\">
            <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_countries_list");
        echo "\" method=\"get\" class=\"form-inline\">
                <div class=\"col-xs-6 no-padding\">
                    <div id=\"example_length\" class=\"form-group dataTables_length\">                        
                        <select class=\"form-control\" size=\"1\" name=\"limit\" id=\"limit\">
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limits"]) ? $context["limits"] : $this->getContext($context, "limits")));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 37
            echo "                                <option ";
            echo ((((isset($context["currLimit"]) ? $context["currLimit"] : $this->getContext($context, "currLimit")) == $context["limit"])) ? ("selected=\"selected\"") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "\">
                                    ";
            // line 38
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </select> 
                        <label>                            
                            rekordów na stronie
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-6 no-padding\">
                    <div class=\"form-group pull-right\">                  
                        <label>Szukaj:</label> <input class=\"form-control\"  type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")), "searchKeyword", array(), "array"), "html", null, true);
        echo "\" name=\"searchKeyword\">
                    </div>
                </div>
            </form>
        </div>

        <div class=\"table-responsive\">

            <table class=\"table table-striped table-bordered table-hover dm-custom-table\">
                <thead>
                    <tr>
                        <th>";
        // line 60
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "ID", "c.id");
        echo "</th>
                        <th>";
        // line 61
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nazwa", "c.name");
        echo "</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 67
            echo "                    <tr>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a title=\"Pokaż\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show_country", array("id" => $this->getAttribute($context["country"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                </a>
                                <a title=\"Edytuj\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_country_form_action", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("id" => $this->getAttribute($context["country"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">
                                    <span class=\"glyphicon glyphicon-edit\"></span>
                                </a>
                                ";
            // line 78
            $context["tokenName"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : $this->getContext($context, "csrfProvider")), "getToken", array(0 => sprintf((isset($context["deleteTokenName"]) ? $context["deleteTokenName"] : $this->getContext($context, "deleteTokenName")), $this->getAttribute($context["country"], "id", array()))), "method");
            // line 79
            echo "                                ";
            $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("admin_delete_country", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("id" => $this->getAttribute($context["country"], "id", array()), "token" => (isset($context["tokenName"]) ? $context["tokenName"] : $this->getContext($context, "tokenName")), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))));
            // line 80
            echo "                                <a title=\"Usuń\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["deleteUrl"]) ? $context["deleteUrl"] : $this->getContext($context, "deleteUrl")), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\" data-confirmAction=\"Czy na pewno chcesz usunąć wybrany rekord?\">
                                    <span class=\"glyphicon glyphicon-trash\"></span>
                                </a>
                            </div>
                        </td>                
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    
                </tbody>
            </table>

            ";
        // line 90
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AdminBundle:Pagination:admin_pagination.html.twig");
        echo "

        </div>   
                
    </div>            
    
</div>

";
        
        $__internal_53bd5aa27847e7fce8049a4a52ad35e8b6a7ccc4484daf73892101aa8c9181a3->leave($__internal_53bd5aa27847e7fce8049a4a52ad35e8b6a7ccc4484daf73892101aa8c9181a3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Countries:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 90,  187 => 86,  173 => 80,  170 => 79,  168 => 78,  162 => 75,  156 => 72,  150 => 69,  146 => 68,  143 => 67,  139 => 66,  131 => 61,  127 => 60,  113 => 49,  103 => 41,  94 => 38,  87 => 37,  83 => 36,  76 => 32,  69 => 28,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             Zarządzanie krajami*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>            */
/*             <li class="active">*/
/*                 <i class="glyphicon glyphicon-globe"></i> */
/*                 Zarządzanie krajami*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>       */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/*     */
/*         <div class="dm-table-action">           */
/*             <a href="{{ path('admin_country_form_action', app.request.query.all|merge({'page' : page})) }}" class="btn btn-success btn-sm">Dodaj nowy kraj</a>        */
/*         </div>*/
/* */
/*         <div class="form-row">*/
/*             <form action="{{ path('admin_countries_list') }}" method="get" class="form-inline">*/
/*                 <div class="col-xs-6 no-padding">*/
/*                     <div id="example_length" class="form-group dataTables_length">                        */
/*                         <select class="form-control" size="1" name="limit" id="limit">*/
/*                             {% for limit in limits %}*/
/*                                 <option {{ currLimit == limit ? 'selected="selected"':'' }} value="{{ limit }}">*/
/*                                     {{ limit }}*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select> */
/*                         <label>                            */
/*                             rekordów na stronie*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-6 no-padding">*/
/*                     <div class="form-group pull-right">                  */
/*                         <label>Szukaj:</label> <input class="form-control"  type="text" value="{{ queryParams['searchKeyword'] }}" name="searchKeyword">*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <div class="table-responsive">*/
/* */
/*             <table class="table table-striped table-bordered table-hover dm-custom-table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'ID', 'c.id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Nazwa', 'c.name') }}</th>*/
/*                         <th>&nbsp;</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for country in pagination %}*/
/*                     <tr>*/
/*                         <td>{{ country.id }}</td>*/
/*                         <td>{{ country.name }}</td>*/
/*                         <td>*/
/*                             <div class="btn-group">*/
/*                                 <a title="Pokaż" href="{{ path('admin_show_country', {'id' : country.id} ) }}" class="btn btn-info btn-sm">*/
/*                                     <span class="glyphicon glyphicon-eye-open"></span>*/
/*                                 </a>*/
/*                                 <a title="Edytuj" href="{{ path('admin_country_form_action', app.request.query.all|merge({'id': country.id, 'page' : page})) }}" class="btn btn-primary btn-sm">*/
/*                                     <span class="glyphicon glyphicon-edit"></span>*/
/*                                 </a>*/
/*                                 {% set tokenName = csrfProvider.getToken(deleteTokenName|format(country.id)) %}*/
/*                                 {% set deleteUrl = path('admin_delete_country', app.request.query.all|merge({'id': country.id, 'token': tokenName, 'page' : page})) %}*/
/*                                 <a title="Usuń" href="{{ deleteUrl }}" class="btn btn-danger btn-sm" data-confirmAction="Czy na pewno chcesz usunąć wybrany rekord?">*/
/*                                     <span class="glyphicon glyphicon-trash"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </td>                */
/*                     </tr>*/
/*                     {% endfor %}                    */
/*                 </tbody>*/
/*             </table>*/
/* */
/*             {{ knp_pagination_render(pagination, 'AdminBundle:Pagination:admin_pagination.html.twig') }}*/
/* */
/*         </div>   */
/*                 */
/*     </div>            */
/*     */
/* </div>*/
/* */
/* {% endblock %}*/
