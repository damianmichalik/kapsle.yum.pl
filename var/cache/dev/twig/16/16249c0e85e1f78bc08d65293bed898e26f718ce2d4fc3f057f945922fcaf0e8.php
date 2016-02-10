<?php

/* AdminBundle:Form:form_theme.html.twig */
class __TwigTemplate_3b2afe2082452e08442b7e0204b16a91b339975b6d3c996684d1c64473a7bcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'form_errors' => array($this, 'block_form_errors'),
            'button_row' => array($this, 'block_button_row'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c50c89af36fb5f83a90c1e202b13eef9566fb2f7f07199118012268fc1fc111 = $this->env->getExtension("native_profiler");
        $__internal_0c50c89af36fb5f83a90c1e202b13eef9566fb2f7f07199118012268fc1fc111->enter($__internal_0c50c89af36fb5f83a90c1e202b13eef9566fb2f7f07199118012268fc1fc111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Form:form_theme.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "        
";
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
        // line 28
        echo "        
";
        // line 29
        $this->displayBlock('form_label', $context, $blocks);
        // line 46
        echo "        
";
        // line 47
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "    
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        echo "    
";
        // line 64
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 86
        echo "    
";
        // line 87
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('form_errors', $context, $blocks);
        // line 106
        echo "        
";
        // line 107
        $this->displayBlock('button_row', $context, $blocks);
        // line 116
        echo "        
";
        // line 117
        $this->displayBlock('button_widget', $context, $blocks);
        // line 126
        echo "    
";
        // line 127
        $this->displayBlock('submit_widget', $context, $blocks);
        
        $__internal_0c50c89af36fb5f83a90c1e202b13eef9566fb2f7f07199118012268fc1fc111->leave($__internal_0c50c89af36fb5f83a90c1e202b13eef9566fb2f7f07199118012268fc1fc111_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_32b813bcbf215a292f889e9f3869cbe22cc89c6bbe7cf338c89873926603a5be = $this->env->getExtension("native_profiler");
        $__internal_32b813bcbf215a292f889e9f3869cbe22cc89c6bbe7cf338c89873926603a5be->enter($__internal_32b813bcbf215a292f889e9f3869cbe22cc89c6bbe7cf338c89873926603a5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-horizontal")) : ("form-horizontal")))));
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
        
        $__internal_32b813bcbf215a292f889e9f3869cbe22cc89c6bbe7cf338c89873926603a5be->leave($__internal_32b813bcbf215a292f889e9f3869cbe22cc89c6bbe7cf338c89873926603a5be_prof);

    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b0ec67c273573b2c51635555d93bd820bd6efc649d8277472f13e696bf291222 = $this->env->getExtension("native_profiler");
        $__internal_b0ec67c273573b2c51635555d93bd820bd6efc649d8277472f13e696bf291222->enter($__internal_b0ec67c273573b2c51635555d93bd820bd6efc649d8277472f13e696bf291222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 18
        ob_start();
        // line 19
        echo "    <div class=\"form-group";
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? (" has-error") : (""));
        echo "\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"col-sm-9\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b0ec67c273573b2c51635555d93bd820bd6efc649d8277472f13e696bf291222->leave($__internal_b0ec67c273573b2c51635555d93bd820bd6efc649d8277472f13e696bf291222_prof);

    }

    // line 29
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dee862cd138741669c1f9b6b360dfc05616f49b8fe80a1174c60668cefc1dd58 = $this->env->getExtension("native_profiler");
        $__internal_dee862cd138741669c1f9b6b360dfc05616f49b8fe80a1174c60668cefc1dd58->enter($__internal_dee862cd138741669c1f9b6b360dfc05616f49b8fe80a1174c60668cefc1dd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 32
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 33
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 36
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-sm-3 control-label"))));
            // line 39
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 40
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 41
                echo "        ";
            }
            // line 42
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dee862cd138741669c1f9b6b360dfc05616f49b8fe80a1174c60668cefc1dd58->leave($__internal_dee862cd138741669c1f9b6b360dfc05616f49b8fe80a1174c60668cefc1dd58_prof);

    }

    // line 47
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9394e3baf1eada1035950bb1d6dc775bd393b43e27ac9956544e69754feb34fc = $this->env->getExtension("native_profiler");
        $__internal_9394e3baf1eada1035950bb1d6dc775bd393b43e27ac9956544e69754feb34fc->enter($__internal_9394e3baf1eada1035950bb1d6dc775bd393b43e27ac9956544e69754feb34fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 48
        ob_start();
        // line 49
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 50
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 51
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "    ";
        }
        // line 53
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
        
        $__internal_9394e3baf1eada1035950bb1d6dc775bd393b43e27ac9956544e69754feb34fc->leave($__internal_9394e3baf1eada1035950bb1d6dc775bd393b43e27ac9956544e69754feb34fc_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a48d5e975f33a6e4221787680b6815db444d083f2aa678d68687373d2d58036e = $this->env->getExtension("native_profiler");
        $__internal_a48d5e975f33a6e4221787680b6815db444d083f2aa678d68687373d2d58036e->enter($__internal_a48d5e975f33a6e4221787680b6815db444d083f2aa678d68687373d2d58036e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        ob_start();
        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 60
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a48d5e975f33a6e4221787680b6815db444d083f2aa678d68687373d2d58036e->leave($__internal_a48d5e975f33a6e4221787680b6815db444d083f2aa678d68687373d2d58036e_prof);

    }

    // line 64
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0cb94439ed067c51b9d6c39e039ca53196284cc1ae6ad6f796110be4916d9b26 = $this->env->getExtension("native_profiler");
        $__internal_0cb94439ed067c51b9d6c39e039ca53196284cc1ae6ad6f796110be4916d9b26->enter($__internal_0cb94439ed067c51b9d6c39e039ca53196284cc1ae6ad6f796110be4916d9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 65
        ob_start();
        // line 66
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices")))) {
            // line 67
            echo "        ";
            $context["required"] = false;
            // line 68
            echo "    ";
        }
        // line 69
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 70
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 71
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 72
            echo "            <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 74
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 75
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 76
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 77
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 78
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 80
            echo "        ";
        }
        // line 81
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 82
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0cb94439ed067c51b9d6c39e039ca53196284cc1ae6ad6f796110be4916d9b26->leave($__internal_0cb94439ed067c51b9d6c39e039ca53196284cc1ae6ad6f796110be4916d9b26_prof);

    }

    // line 87
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_395dbd280f28554787f1791d5dc8d5556dd7d50d80a2e0c7878315270f6313ec = $this->env->getExtension("native_profiler");
        $__internal_395dbd280f28554787f1791d5dc8d5556dd7d50d80a2e0c7878315270f6313ec->enter($__internal_395dbd280f28554787f1791d5dc8d5556dd7d50d80a2e0c7878315270f6313ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 88
        ob_start();
        // line 89
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 90
            echo "    <div class=\"checkbox\">
        <label>
            ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "
        </label>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_395dbd280f28554787f1791d5dc8d5556dd7d50d80a2e0c7878315270f6313ec->leave($__internal_395dbd280f28554787f1791d5dc8d5556dd7d50d80a2e0c7878315270f6313ec_prof);

    }

    // line 99
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_256d06a805605e76bd9988de3754912fd9afbf5d5acc44c274c4642e43a6fe75 = $this->env->getExtension("native_profiler");
        $__internal_256d06a805605e76bd9988de3754912fd9afbf5d5acc44c274c4642e43a6fe75->enter($__internal_256d06a805605e76bd9988de3754912fd9afbf5d5acc44c274c4642e43a6fe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 100
        ob_start();
        // line 101
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 102
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_256d06a805605e76bd9988de3754912fd9afbf5d5acc44c274c4642e43a6fe75->leave($__internal_256d06a805605e76bd9988de3754912fd9afbf5d5acc44c274c4642e43a6fe75_prof);

    }

    // line 107
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_44b43f8176a61de0c7706c1715e2c1cbdcf1123c772e9721a7b516edeebd723c = $this->env->getExtension("native_profiler");
        $__internal_44b43f8176a61de0c7706c1715e2c1cbdcf1123c772e9721a7b516edeebd723c->enter($__internal_44b43f8176a61de0c7706c1715e2c1cbdcf1123c772e9721a7b516edeebd723c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 108
        ob_start();
        // line 109
        echo "    <div class=\"form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_44b43f8176a61de0c7706c1715e2c1cbdcf1123c772e9721a7b516edeebd723c->leave($__internal_44b43f8176a61de0c7706c1715e2c1cbdcf1123c772e9721a7b516edeebd723c_prof);

    }

    // line 117
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_94839039ab220323c379c8b19a5310fdaf01389710c8b4b4563845810d7b57ce = $this->env->getExtension("native_profiler");
        $__internal_94839039ab220323c379c8b19a5310fdaf01389710c8b4b4563845810d7b57ce->enter($__internal_94839039ab220323c379c8b19a5310fdaf01389710c8b4b4563845810d7b57ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 118
        ob_start();
        // line 119
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 120
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 121
            echo "    ";
        }
        // line 122
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn"))));
        // line 123
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_94839039ab220323c379c8b19a5310fdaf01389710c8b4b4563845810d7b57ce->leave($__internal_94839039ab220323c379c8b19a5310fdaf01389710c8b4b4563845810d7b57ce_prof);

    }

    // line 127
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_ab3b1f81516c4decbfb394ec45e4a8c16676de324e850b5957b1198e4172890f = $this->env->getExtension("native_profiler");
        $__internal_ab3b1f81516c4decbfb394ec45e4a8c16676de324e850b5957b1198e4172890f->enter($__internal_ab3b1f81516c4decbfb394ec45e4a8c16676de324e850b5957b1198e4172890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 128
        ob_start();
        // line 129
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 130
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-success")) : ("btn-success")))));
        // line 131
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ab3b1f81516c4decbfb394ec45e4a8c16676de324e850b5957b1198e4172890f->leave($__internal_ab3b1f81516c4decbfb394ec45e4a8c16676de324e850b5957b1198e4172890f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Form:form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  534 => 131,  531 => 130,  528 => 129,  526 => 128,  520 => 127,  505 => 123,  502 => 122,  499 => 121,  496 => 120,  493 => 119,  491 => 118,  485 => 117,  473 => 111,  469 => 109,  467 => 108,  461 => 107,  446 => 102,  441 => 101,  439 => 100,  433 => 99,  415 => 92,  411 => 90,  406 => 89,  404 => 88,  398 => 87,  386 => 82,  383 => 81,  380 => 80,  374 => 78,  372 => 77,  367 => 76,  364 => 75,  361 => 74,  351 => 72,  349 => 71,  341 => 70,  338 => 69,  335 => 68,  332 => 67,  329 => 66,  327 => 65,  321 => 64,  308 => 60,  305 => 59,  303 => 58,  297 => 57,  278 => 53,  275 => 52,  272 => 51,  269 => 50,  266 => 49,  264 => 48,  258 => 47,  233 => 42,  230 => 41,  227 => 40,  224 => 39,  221 => 38,  218 => 37,  215 => 36,  212 => 35,  209 => 34,  206 => 33,  203 => 32,  200 => 31,  198 => 30,  192 => 29,  180 => 23,  176 => 22,  171 => 20,  166 => 19,  164 => 18,  158 => 17,  146 => 12,  144 => 11,  119 => 10,  116 => 9,  113 => 8,  110 => 7,  107 => 6,  104 => 5,  101 => 4,  98 => 3,  96 => 2,  90 => 1,  83 => 127,  80 => 126,  78 => 117,  75 => 116,  73 => 107,  70 => 106,  68 => 99,  65 => 98,  63 => 87,  60 => 86,  58 => 64,  55 => 63,  53 => 57,  50 => 56,  48 => 47,  45 => 46,  43 => 29,  40 => 28,  38 => 17,  35 => 16,  33 => 1,);
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
/*     {% set attr = attr|merge({'class': (attr.class|default('form-horizontal'))|trim }) %}*/
/*     <form name="{{ form.vars.name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/*         */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group{{ errors|length > 0 ? ' has-error':'' }}">*/
/*         {{ form_label(form) }}*/
/*         <div class="col-sm-9">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/*         */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' col-sm-3 control-label')|trim }) %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/*         */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     {% endif %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/*     */
/* {% block textarea_widget %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {% endspaceless %}*/
/* {% endblock textarea_widget %}*/
/*     */
/* {% block choice_widget_collapsed %}*/
/* {% spaceless %}*/
/*     {% if required and placeholder is none and not empty_value_in_choices %}*/
/*         {% set required = false %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {% if placeholder is not none %}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder|trans({}, translation_domain) }}</option>*/
/*         {% endif %}*/
/*         {% if preferred_choices|length > 0 %}*/
/*             {% set options = preferred_choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*             {% if choices|length > 0 and separator is not none %}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% set options = choices %}*/
/*         {{ block('choice_widget_options') }}*/
/*     </select>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/*     */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*     <div class="checkbox">*/
/*         <label>*/
/*             {{ form_widget(child) }} {{ child.vars.label }}*/
/*         </label>*/
/*     </div>*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% for error in errors %}*/
/*         <span class="help-block">{{ error.message }}</span>*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/*         */
/* {% block button_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="col-sm-offset-3 col-sm-9">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock button_row %}*/
/*         */
/* {% block button_widget %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' btn')|trim }) %}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {% endspaceless %}*/
/* {% endblock button_widget %}*/
/*     */
/* {% block submit_widget %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('submit') %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('btn-success'))|trim }) %}*/
/*     {{ block('button_widget') }}*/
/* {% endspaceless %}*/
/* {% endblock submit_widget %}*/
