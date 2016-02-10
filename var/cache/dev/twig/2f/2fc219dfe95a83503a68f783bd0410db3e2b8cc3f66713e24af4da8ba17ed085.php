<?php

/* AppBundle:Forms:bootstrap_inline.html.twig */
class __TwigTemplate_896677b1a482ea19f65e7f84d9afcbd1254df1c6397f107c4dc91b743dc0f7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69bc3eaa952dbb47ef5b1348a67309d0616e7b3c44dde454c28ccbf3f51ef277 = $this->env->getExtension("native_profiler");
        $__internal_69bc3eaa952dbb47ef5b1348a67309d0616e7b3c44dde454c28ccbf3f51ef277->enter($__internal_69bc3eaa952dbb47ef5b1348a67309d0616e7b3c44dde454c28ccbf3f51ef277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Forms:bootstrap_inline.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_69bc3eaa952dbb47ef5b1348a67309d0616e7b3c44dde454c28ccbf3f51ef277->leave($__internal_69bc3eaa952dbb47ef5b1348a67309d0616e7b3c44dde454c28ccbf3f51ef277_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ac766f72dd31362be6a5cb759ef56d98ac7be6c9f8dec66484ff698235df8332 = $this->env->getExtension("native_profiler");
        $__internal_ac766f72dd31362be6a5cb759ef56d98ac7be6c9f8dec66484ff698235df8332->enter($__internal_ac766f72dd31362be6a5cb759ef56d98ac7be6c9f8dec66484ff698235df8332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 4
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 5
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["form_method"] = "POST";
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-inline")) : ("form-inline")))));
        // line 10
        echo "    <form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 11
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac766f72dd31362be6a5cb759ef56d98ac7be6c9f8dec66484ff698235df8332->leave($__internal_ac766f72dd31362be6a5cb759ef56d98ac7be6c9f8dec66484ff698235df8332_prof);

    }

    // line 17
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b265b93e2771f43afbe1442c5a9349968708e3366920496eab71490e1ef40bce = $this->env->getExtension("native_profiler");
        $__internal_b265b93e2771f43afbe1442c5a9349968708e3366920496eab71490e1ef40bce->enter($__internal_b265b93e2771f43afbe1442c5a9349968708e3366920496eab71490e1ef40bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 18
        ob_start();
        // line 19
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 20
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 21
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b265b93e2771f43afbe1442c5a9349968708e3366920496eab71490e1ef40bce->leave($__internal_b265b93e2771f43afbe1442c5a9349968708e3366920496eab71490e1ef40bce_prof);

    }

    // line 27
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8ab2577451a4c4337f7cb42298e28960a050fcb137382a9ceaddbe2aba262644 = $this->env->getExtension("native_profiler");
        $__internal_8ab2577451a4c4337f7cb42298e28960a050fcb137382a9ceaddbe2aba262644->enter($__internal_8ab2577451a4c4337f7cb42298e28960a050fcb137382a9ceaddbe2aba262644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 30
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8ab2577451a4c4337f7cb42298e28960a050fcb137382a9ceaddbe2aba262644->leave($__internal_8ab2577451a4c4337f7cb42298e28960a050fcb137382a9ceaddbe2aba262644_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Forms:bootstrap_inline.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 30,  157 => 29,  155 => 28,  149 => 27,  130 => 23,  127 => 22,  124 => 21,  121 => 20,  118 => 19,  116 => 18,  110 => 17,  98 => 12,  96 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  42 => 1,  35 => 27,  32 => 26,  30 => 17,  27 => 16,  25 => 1,);
    }
}
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% if method in ["GET", "POST"] %}*/
/*         {% set form_method = method %}*/
/*     {% else %}*/
/*         {% set form_method = "POST" %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('form-inline'))|trim }) %}*/
/*     <form name="{{ form.vars.name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     {% endif %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% for error in errors %}*/
/*         <span class="help-block">{{ error.message }}</span>*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
