<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_dcfa1314daaa851f85d18d7c848ba074e90911e3870d3510dd6eb993e64a138f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b6be7acc6d447b20662dd98f4c1ef8f9433a06add27262454eac14657d5850e = $this->env->getExtension("native_profiler");
        $__internal_0b6be7acc6d447b20662dd98f4c1ef8f9433a06add27262454eac14657d5850e->enter($__internal_0b6be7acc6d447b20662dd98f4c1ef8f9433a06add27262454eac14657d5850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6be7acc6d447b20662dd98f4c1ef8f9433a06add27262454eac14657d5850e->leave($__internal_0b6be7acc6d447b20662dd98f4c1ef8f9433a06add27262454eac14657d5850e_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_4dc1bf6385ba702190fbd0b5351c6450ac81690a1b078db54fb3d32f3efb40ad = $this->env->getExtension("native_profiler");
        $__internal_4dc1bf6385ba702190fbd0b5351c6450ac81690a1b078db54fb3d32f3efb40ad->enter($__internal_4dc1bf6385ba702190fbd0b5351c6450ac81690a1b078db54fb3d32f3efb40ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        if (array_key_exists("pageTitle", $context)) {
            echo " 
        ";
            // line 5
            echo twig_escape_filter($this->env, (((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")) . " | ") . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("headTitle", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4dc1bf6385ba702190fbd0b5351c6450ac81690a1b078db54fb3d32f3efb40ad->leave($__internal_4dc1bf6385ba702190fbd0b5351c6450ac81690a1b078db54fb3d32f3efb40ad_prof);

    }

    // line 11
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_2828ce2ed56c0b182f73c71cf7294d21bcf11f8c9ea997ceca2ba57f1c7dc8eb = $this->env->getExtension("native_profiler");
        $__internal_2828ce2ed56c0b182f73c71cf7294d21bcf11f8c9ea997ceca2ba57f1c7dc8eb->enter($__internal_2828ce2ed56c0b182f73c71cf7294d21bcf11f8c9ea997ceca2ba57f1c7dc8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 12
        echo "    
    ";
        // line 13
        if (array_key_exists("pageTitle", $context)) {
            echo " 
        <h3>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
            echo "</h3>
    ";
        }
        // line 16
        echo "
    <p>Ilość kapsli: <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</strong></p>  
    
    <ul class=\"listing row\">        

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 22
            echo "            <li class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">     
                <div class=\"item\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caps_details", array("slug" => $this->getAttribute($context["cap"], "slug", array()))), "html", null, true);
            echo "\">                
                        <img class=\"img-thumb img-responsive\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["cap"], "thumb", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "\">                
                        <span class=\"item-name\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "</span>
                    </a>
                </div>        
            </li>

            ";
            // line 31
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 2)) {
                // line 32
                echo "                <li class=\"line col-xs-12 col-sm-12 col-md-12 col-lg-12\"></li>
            ";
            }
            // line 34
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    </ul>
    
";
        // line 39
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AppBundle:Pagination:pagination.html.twig");
        echo "    

";
        
        $__internal_2828ce2ed56c0b182f73c71cf7294d21bcf11f8c9ea997ceca2ba57f1c7dc8eb->leave($__internal_2828ce2ed56c0b182f73c71cf7294d21bcf11f8c9ea997ceca2ba57f1c7dc8eb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  150 => 36,  135 => 34,  131 => 32,  129 => 31,  121 => 26,  115 => 25,  111 => 24,  107 => 22,  90 => 21,  83 => 17,  80 => 16,  75 => 14,  71 => 13,  68 => 12,  62 => 11,  51 => 7,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block headTitle %}*/
/*     {% if pageTitle is defined %} */
/*         {{ pageTitle ~ ' | ' ~ parent() }}*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/*     */
/*     {% if pageTitle is defined %} */
/*         <h3>{{ pageTitle }}</h3>*/
/*     {% endif %}*/
/* */
/*     <p>Ilość kapsli: <strong>{{ pagination.getTotalItemCount }}</strong></p>  */
/*     */
/*     <ul class="listing row">        */
/* */
/*         {% for cap in pagination %}*/
/*             <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">     */
/*                 <div class="item">*/
/*                     <a href="{{ path('caps_details', {'slug' : cap.slug}) }}">                */
/*                         <img class="img-thumb img-responsive" src="{{ asset(cap.thumb) }}" alt="{{ cap.name }}">                */
/*                         <span class="item-name">{{ cap.name }}</span>*/
/*                     </a>*/
/*                 </div>        */
/*             </li>*/
/* */
/*             {% if loop.index0 % 3 == 2 %}*/
/*                 <li class="line col-xs-12 col-sm-12 col-md-12 col-lg-12"></li>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*     </ul>*/
/*     */
/* {{ knp_pagination_render(pagination, 'AppBundle:Pagination:pagination.html.twig') }}    */
/* */
/* {% endblock %}*/
