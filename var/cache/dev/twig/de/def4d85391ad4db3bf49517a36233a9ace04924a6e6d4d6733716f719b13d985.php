<?php

/* AdminBundle:Caps:index.html.twig */
class __TwigTemplate_8f9ec44604ca9ee58c98b66e9cfd6b5aae5f798e48338da01646856b2c297d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Caps:index.html.twig", 1);
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
        $__internal_0256b55b7339c4ff125cde4f5fb6dc8b26e2c2eee6a147b90a6e15ea5dfb5e90 = $this->env->getExtension("native_profiler");
        $__internal_0256b55b7339c4ff125cde4f5fb6dc8b26e2c2eee6a147b90a6e15ea5dfb5e90->enter($__internal_0256b55b7339c4ff125cde4f5fb6dc8b26e2c2eee6a147b90a6e15ea5dfb5e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Caps:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0256b55b7339c4ff125cde4f5fb6dc8b26e2c2eee6a147b90a6e15ea5dfb5e90->leave($__internal_0256b55b7339c4ff125cde4f5fb6dc8b26e2c2eee6a147b90a6e15ea5dfb5e90_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_781dbddb795c3daabdaee93fcf6b55aa2276d1e7f4f1e9bbd6415349530f107a = $this->env->getExtension("native_profiler");
        $__internal_781dbddb795c3daabdaee93fcf6b55aa2276d1e7f4f1e9bbd6415349530f107a->enter($__internal_781dbddb795c3daabdaee93fcf6b55aa2276d1e7f4f1e9bbd6415349530f107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            Zarządzanie kapslami
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
                <i class=\"glyphicon glyphicon-list\"></i> 
                Zarządzanie kapslami
            </li>
        </ol>    
    </div>
</div>     

<div class=\"row\">

    <div class=\"col-lg-6\">
    
        <div class=\"dm-table-action\">            
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_cap_form_action", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">Dodaj nowy kapsel</a>        
        </div>
            
        <div class=\"form-row\">
            <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_caps_list");
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
                        <th>";
        // line 62
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Browar", "b.name");
        echo "</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 68
            echo "                    <tr>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 72
            if ( !(null === $this->getAttribute($context["cap"], "brewery", array()))) {
                // line 73
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cap"], "brewery", array()), "name", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 75
                echo "                                <span class=\"warning-text\">Brak</span>
                            ";
            }
            // line 77
            echo "                        </td>
                        <td>
                            <div class=\"btn-group\">
                                <a title=\"Pokaż\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show_cap", array("id" => $this->getAttribute($context["cap"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                                </a>
                                <a title=\"Edytuj\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_cap_form_action", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("id" => $this->getAttribute($context["cap"], "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">
                                    <span class=\"glyphicon glyphicon-edit\"></span>
                                </a>
                                ";
            // line 86
            $context["tokenName"] = $this->getAttribute((isset($context["csrfProvider"]) ? $context["csrfProvider"] : $this->getContext($context, "csrfProvider")), "getToken", array(0 => sprintf((isset($context["deleteTokenName"]) ? $context["deleteTokenName"] : $this->getContext($context, "deleteTokenName")), $this->getAttribute($context["cap"], "id", array()))), "method");
            // line 87
            echo "                                ";
            $context["deleteUrl"] = $this->env->getExtension('routing')->getPath("admin_delete_cap", twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("id" => $this->getAttribute($context["cap"], "id", array()), "token" => (isset($context["tokenName"]) ? $context["tokenName"] : $this->getContext($context, "tokenName")), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))));
            // line 88
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    
                </tbody>
            </table>

            ";
        // line 98
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AdminBundle:Pagination:admin_pagination.html.twig");
        echo "

        </div>       

    </div>
    
</div>

";
        
        $__internal_781dbddb795c3daabdaee93fcf6b55aa2276d1e7f4f1e9bbd6415349530f107a->leave($__internal_781dbddb795c3daabdaee93fcf6b55aa2276d1e7f4f1e9bbd6415349530f107a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Caps:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 98,  207 => 94,  193 => 88,  190 => 87,  188 => 86,  182 => 83,  176 => 80,  171 => 77,  167 => 75,  161 => 73,  159 => 72,  154 => 70,  150 => 69,  147 => 68,  143 => 67,  135 => 62,  131 => 61,  127 => 60,  113 => 49,  103 => 41,  94 => 38,  87 => 37,  83 => 36,  76 => 32,  69 => 28,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminBundle::base.html.twig' %}*/
/* */
/* {% block pageContent %}*/
/*     */
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h1 class="page-header">*/
/*             Zarządzanie kapslami*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <i class="glyphicon glyphicon-dashboard"></i>  */
/*                 <a href="{{ path('admin_homepage') }}">Kokpit</a>*/
/*             </li>            */
/*             <li class="active">*/
/*                 <i class="glyphicon glyphicon-list"></i> */
/*                 Zarządzanie kapslami*/
/*             </li>*/
/*         </ol>    */
/*     </div>*/
/* </div>     */
/* */
/* <div class="row">*/
/* */
/*     <div class="col-lg-6">*/
/*     */
/*         <div class="dm-table-action">            */
/*             <a href="{{ path('admin_cap_form_action', app.request.query.all|merge({'page' : page})) }}" class="btn btn-success btn-sm">Dodaj nowy kapsel</a>        */
/*         </div>*/
/*             */
/*         <div class="form-row">*/
/*             <form action="{{ path('admin_caps_list') }}" method="get" class="form-inline">*/
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
/*         </div>         */
/* */
/*         <div class="table-responsive">*/
/* */
/*             <table class="table table-striped table-bordered table-hover dm-custom-table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'ID', 'c.id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Nazwa', 'c.name') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Browar', 'b.name') }}</th>*/
/*                         <th>&nbsp;</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for cap in pagination %}*/
/*                     <tr>*/
/*                         <td>{{ cap.id }}</td>*/
/*                         <td>{{ cap.name }}</td>*/
/*                         <td>*/
/*                             {% if cap.brewery is not null %}*/
/*                                 {{ cap.brewery.name }}*/
/*                             {% else %}*/
/*                                 <span class="warning-text">Brak</span>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             <div class="btn-group">*/
/*                                 <a title="Pokaż" href="{{ path('admin_show_cap', {'id' : cap.id} ) }}" class="btn btn-info btn-sm">*/
/*                                     <span class="glyphicon glyphicon-eye-open"></span>*/
/*                                 </a>*/
/*                                 <a title="Edytuj" href="{{ path('admin_cap_form_action', app.request.query.all|merge({'id': cap.id, 'page' : page})) }}" class="btn btn-primary btn-sm">*/
/*                                     <span class="glyphicon glyphicon-edit"></span>*/
/*                                 </a>*/
/*                                 {% set tokenName = csrfProvider.getToken(deleteTokenName|format(cap.id)) %}*/
/*                                 {% set deleteUrl = path('admin_delete_cap', app.request.query.all|merge({'id': cap.id, 'token': tokenName, 'page' : page})) %}*/
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
/*         </div>       */
/* */
/*     </div>*/
/*     */
/* </div>*/
/* */
/* {% endblock %}*/
