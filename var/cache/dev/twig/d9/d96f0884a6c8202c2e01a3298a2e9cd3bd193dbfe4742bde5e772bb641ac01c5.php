<?php

/* AppBundle:Partials:subscribeForm.html.twig */
class __TwigTemplate_156b32830a6fc4cfe3269576d24312c15e90486216a8d94fd3b548f171955e68 extends Twig_Template
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
        $__internal_66855c928d12c04f4896e6513ee332d4fcec8b086a94532b7e64e121bf11fb74 = $this->env->getExtension("native_profiler");
        $__internal_66855c928d12c04f4896e6513ee332d4fcec8b086a94532b7e64e121bf11fb74->enter($__internal_66855c928d12c04f4896e6513ee332d4fcec8b086a94532b7e64e121bf11fb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partials:subscribeForm.html.twig"));

        // line 1
        echo "<h4>Newsletter</h4>

";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), 'form_start');
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), 'errors');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "name", array()), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "email", array()), 'errors');
        echo "

    <div class=\"form-group\">                        
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "name", array()), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "name", array()), 'widget');
        echo "
    </div>

    <div class=\"form-group\">    
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "email", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "email", array()), 'widget');
        echo "
    </div>

    <button type=\"submit\" class=\"btn btn-default btn-success\">Zapisz</button>
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), 'form_end');
        
        $__internal_66855c928d12c04f4896e6513ee332d4fcec8b086a94532b7e64e121bf11fb74->leave($__internal_66855c928d12c04f4896e6513ee332d4fcec8b086a94532b7e64e121bf11fb74_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partials:subscribeForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h4>Newsletter</h4>*/
/* */
/* {% form_theme subscribeForm 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {{ form_start(subscribeForm) }}*/
/* */
/*     {{ form_errors(subscribeForm) }}*/
/*     {{ form_errors(subscribeForm.name) }}*/
/*     {{ form_errors(subscribeForm.email) }}*/
/* */
/*     <div class="form-group">                        */
/*         {{ form_label(subscribeForm.name) }}*/
/*         {{ form_widget(subscribeForm.name) }}*/
/*     </div>*/
/* */
/*     <div class="form-group">    */
/*         {{ form_label(subscribeForm.email) }}*/
/*         {{ form_widget(subscribeForm.email) }}*/
/*     </div>*/
/* */
/*     <button type="submit" class="btn btn-default btn-success">Zapisz</button>*/
/* {{ form_end(subscribeForm) }}*/
