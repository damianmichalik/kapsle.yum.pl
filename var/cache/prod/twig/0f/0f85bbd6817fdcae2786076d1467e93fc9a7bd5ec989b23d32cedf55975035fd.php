<?php

/* AppBundle:Partials:newestCapses.html.twig */
class __TwigTemplate_1daa7c1c2b9eda47e0d896f00e22a429f1120d8f1a5dde82f2331ddc43666e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h4>Najnowsze kapsle</h4>

<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capses"]) ? $context["capses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 5
            echo "    <li class=\"list-unstyled\">
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caps_details", array("slug" => $this->getAttribute($context["cap"], "slug", array()))), "html", null, true);
            echo "\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Partials:newestCapses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <h4>Najnowsze kapsle</h4>*/
/* */
/* <ul>*/
/* {% for cap in capses %}*/
/*     <li class="list-unstyled">*/
/*         <a href="{{ path('caps_details', {'slug' : cap.slug}) }}">*/
/*             {{ cap.name }}*/
/*         </a>*/
/*     </li>*/
/* {% endfor %}*/
/* </ul>*/
