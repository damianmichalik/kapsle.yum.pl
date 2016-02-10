<?php

/* AppBundle:Subscribe:form.html.twig */
class __TwigTemplate_f84554ba968cd97d262d2572be7b333b8ce00157b029ddefe255e8ff2c2912cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Subscribe:form.html.twig", 1);
        $this->blocks = array(
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b71568d02cb20ef8e028106d061d0f163ce3cbaa954c20a9b5ec4db8ac9efef8 = $this->env->getExtension("native_profiler");
        $__internal_b71568d02cb20ef8e028106d061d0f163ce3cbaa954c20a9b5ec4db8ac9efef8->enter($__internal_b71568d02cb20ef8e028106d061d0f163ce3cbaa954c20a9b5ec4db8ac9efef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Subscribe:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71568d02cb20ef8e028106d061d0f163ce3cbaa954c20a9b5ec4db8ac9efef8->leave($__internal_b71568d02cb20ef8e028106d061d0f163ce3cbaa954c20a9b5ec4db8ac9efef8_prof);

    }

    // line 3
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_a314dba6b529aaaf3dcf67bdfa4d84e250045a24e85b2c12512c959216601642 = $this->env->getExtension("native_profiler");
        $__internal_a314dba6b529aaaf3dcf67bdfa4d84e250045a24e85b2c12512c959216601642->enter($__internal_a314dba6b529aaaf3dcf67bdfa4d84e250045a24e85b2c12512c959216601642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 4
        echo "
<div class=\"row\">
    
    <div class=\"container\" id=\"newsletter-container\">
        <h4>Newsletter</h4>

        ";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), 'form_start');
        echo "
                   
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "name", array()), 'row');
        echo "

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), "email", array()), 'row');
        echo "
            
            <div class=\"form-row\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default btn-success\">Zapisz</button>
                </div>
            </div>
                                     
        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["subscribeForm"]) ? $context["subscribeForm"] : $this->getContext($context, "subscribeForm")), 'form_end');
        echo "
    </div>
    
</div>
    
";
        
        $__internal_a314dba6b529aaaf3dcf67bdfa4d84e250045a24e85b2c12512c959216601642->leave($__internal_a314dba6b529aaaf3dcf67bdfa4d84e250045a24e85b2c12512c959216601642_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Subscribe:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  63 => 16,  58 => 14,  53 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block pageContainer %}*/
/* */
/* <div class="row">*/
/*     */
/*     <div class="container" id="newsletter-container">*/
/*         <h4>Newsletter</h4>*/
/* */
/*         {% form_theme subscribeForm 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/*         {{ form_start(subscribeForm) }}*/
/*                    */
/*             {{ form_row(subscribeForm.name) }}*/
/* */
/*             {{ form_row(subscribeForm.email) }}*/
/*             */
/*             <div class="form-row">*/
/*                 <div class="col-sm-offset-2 col-sm-10">*/
/*                     <button type="submit" class="btn btn-default btn-success">Zapisz</button>*/
/*                 </div>*/
/*             </div>*/
/*                                      */
/*         {{ form_end(subscribeForm) }}*/
/*     </div>*/
/*     */
/* </div>*/
/*     */
/* {% endblock %}*/
