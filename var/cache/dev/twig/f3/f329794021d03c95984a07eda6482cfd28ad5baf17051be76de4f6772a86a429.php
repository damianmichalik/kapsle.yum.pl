<?php

/* AppBundle:Breweries:index.html.twig */
class __TwigTemplate_eac354fc3f3ddae61f1048bc7276d400e00d32b066abbfa65e753ac61bbf3918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Breweries:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50657e99b006fe2ed1b75d2ade683b3cfe5793582a25b48858bbc1b55f0f247b = $this->env->getExtension("native_profiler");
        $__internal_50657e99b006fe2ed1b75d2ade683b3cfe5793582a25b48858bbc1b55f0f247b->enter($__internal_50657e99b006fe2ed1b75d2ade683b3cfe5793582a25b48858bbc1b55f0f247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Breweries:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50657e99b006fe2ed1b75d2ade683b3cfe5793582a25b48858bbc1b55f0f247b->leave($__internal_50657e99b006fe2ed1b75d2ade683b3cfe5793582a25b48858bbc1b55f0f247b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_a8cc8113296de737f1b3ef0db178572c6ef23891e0689a8c4e0625214458c6e5 = $this->env->getExtension("native_profiler");
        $__internal_a8cc8113296de737f1b3ef0db178572c6ef23891e0689a8c4e0625214458c6e5->enter($__internal_a8cc8113296de737f1b3ef0db178572c6ef23891e0689a8c4e0625214458c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

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
        
        $__internal_a8cc8113296de737f1b3ef0db178572c6ef23891e0689a8c4e0625214458c6e5->leave($__internal_a8cc8113296de737f1b3ef0db178572c6ef23891e0689a8c4e0625214458c6e5_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5b2210f2578eef11868913788ad503285dbdde88247e6a3f61ebe21b0bfaadd5 = $this->env->getExtension("native_profiler");
        $__internal_5b2210f2578eef11868913788ad503285dbdde88247e6a3f61ebe21b0bfaadd5->enter($__internal_5b2210f2578eef11868913788ad503285dbdde88247e6a3f61ebe21b0bfaadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 12
        echo "    <li>Browary</li>
";
        
        $__internal_5b2210f2578eef11868913788ad503285dbdde88247e6a3f61ebe21b0bfaadd5->leave($__internal_5b2210f2578eef11868913788ad503285dbdde88247e6a3f61ebe21b0bfaadd5_prof);

    }

    // line 15
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_6ca672a26ba08903e2be7f63d4977d8b6fb6308d0f868a46197aad99ed12eaaa = $this->env->getExtension("native_profiler");
        $__internal_6ca672a26ba08903e2be7f63d4977d8b6fb6308d0f868a46197aad99ed12eaaa->enter($__internal_6ca672a26ba08903e2be7f63d4977d8b6fb6308d0f868a46197aad99ed12eaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 16
        echo "    
    ";
        // line 17
        if (array_key_exists("pageTitle", $context)) {
            echo " 
        <h3>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
            echo "</h3>
    ";
        }
        // line 20
        echo "
    <p>Ilość browarów: <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</strong></p>  
    
    <ul class=\"listing row breweries-index\">        

        ";
        // line 25
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
        foreach ($context['_seq'] as $context["_key"] => $context["brewery"]) {
            // line 26
            echo "            <li class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">     
                <div class=\"item\">
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("breweries_details", array("slug" => $this->getAttribute($context["brewery"], "slug", array()))), "html", null, true);
            echo "\">                                                      
                        <strong class=\"item-name\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["brewery"], "name", array()), "html", null, true);
            echo "</strong>
                    </a>
                    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["brewery"], "country", array()), "name", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["brewery"], "city", array()), "html", null, true);
            echo "</p>
                </div>        
            </li>

            ";
            // line 36
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 2)) {
                // line 37
                echo "                <li class=\"line col-xs-12 col-sm-12 col-md-12 col-lg-12\"></li>
            ";
            }
            // line 39
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brewery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </ul>
    
";
        // line 44
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "AppBundle:Pagination:pagination.html.twig");
        echo "    

";
        
        $__internal_6ca672a26ba08903e2be7f63d4977d8b6fb6308d0f868a46197aad99ed12eaaa->leave($__internal_6ca672a26ba08903e2be7f63d4977d8b6fb6308d0f868a46197aad99ed12eaaa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Breweries:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 44,  167 => 41,  152 => 39,  148 => 37,  146 => 36,  139 => 32,  135 => 31,  130 => 29,  126 => 28,  122 => 26,  105 => 25,  98 => 21,  95 => 20,  90 => 18,  86 => 17,  83 => 16,  77 => 15,  69 => 12,  63 => 11,  52 => 7,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/* {% block breadcrumb %}*/
/*     <li>Browary</li>*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/*     */
/*     {% if pageTitle is defined %} */
/*         <h3>{{ pageTitle }}</h3>*/
/*     {% endif %}*/
/* */
/*     <p>Ilość browarów: <strong>{{ pagination.getTotalItemCount }}</strong></p>  */
/*     */
/*     <ul class="listing row breweries-index">        */
/* */
/*         {% for brewery in pagination %}*/
/*             <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">     */
/*                 <div class="item">*/
/*                     <a href="{{ path('breweries_details', {'slug' : brewery.slug}) }}">                                                      */
/*                         <strong class="item-name">{{ brewery.name }}</strong>*/
/*                     </a>*/
/*                     <p>{{ brewery.country.name }}</p>*/
/*                     <p>{{ brewery.city }}</p>*/
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
