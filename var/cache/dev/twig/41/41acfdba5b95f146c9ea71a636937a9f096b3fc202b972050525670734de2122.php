<?php

/* AdminBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_179b473f4afd6b205ac0c748f1b1d5ea056f347a419f732cbac55142da9b5ab7 extends Twig_Template
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
        $__internal_6b4f892927739db9fb0c14f807d77a5f300b21e16b2087b228bbd4324233c5a1 = $this->env->getExtension("native_profiler");
        $__internal_6b4f892927739db9fb0c14f807d77a5f300b21e16b2087b228bbd4324233c5a1->enter($__internal_6b4f892927739db9fb0c14f807d77a5f300b21e16b2087b228bbd4324233c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Pagination:sortable_link.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array(), "array", true, true) && !twig_in_filter("sortable", $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "class", array(), "array")))) {
            // line 2
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("class" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "class", array(), "array") . " sortable")));
        }
        // line 4
        echo "
<a";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_6b4f892927739db9fb0c14f807d77a5f300b21e16b2087b228bbd4324233c5a1->leave($__internal_6b4f892927739db9fb0c14f807d77a5f300b21e16b2087b228bbd4324233c5a1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if options['class'] is defined and 'sortable' not in options['class'] %}*/
/*     {% set options = options|merge({'class': options['class']~' sortable'}) %}*/
/* {% endif %}*/
/* */
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
