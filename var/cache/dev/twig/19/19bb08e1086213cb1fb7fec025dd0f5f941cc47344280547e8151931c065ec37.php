<?php

/* AppBundle:Partials:newestCapses.html.twig */
class __TwigTemplate_930ea6958fab38458f3a909cf91d290e91de605f1b39e1455d16c42796bed7be extends Twig_Template
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
        $__internal_ea3b1ef92ca3ed312357712c125d105b0714ff870deed99a4bded79a30bea669 = $this->env->getExtension("native_profiler");
        $__internal_ea3b1ef92ca3ed312357712c125d105b0714ff870deed99a4bded79a30bea669->enter($__internal_ea3b1ef92ca3ed312357712c125d105b0714ff870deed99a4bded79a30bea669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partials:newestCapses.html.twig"));

        // line 1
        echo "<h4>Najnowsze kapsle</h4>

<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capses"]) ? $context["capses"] : $this->getContext($context, "capses")));
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
        
        $__internal_ea3b1ef92ca3ed312357712c125d105b0714ff870deed99a4bded79a30bea669->leave($__internal_ea3b1ef92ca3ed312357712c125d105b0714ff870deed99a4bded79a30bea669_prof);

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
        return array (  48 => 11,  38 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
