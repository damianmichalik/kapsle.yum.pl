<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_574a0628230390e35082b92e42a0c9e60425b0b6460f21ccc76b8f5228d74fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::login.html.twig", "AppBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c4718f87d6483448d2031cf2965b08d5f4f5e9f7d32e85edb8ac6d70d50647 = $this->env->getExtension("native_profiler");
        $__internal_43c4718f87d6483448d2031cf2965b08d5f4f5e9f7d32e85edb8ac6d70d50647->enter($__internal_43c4718f87d6483448d2031cf2965b08d5f4f5e9f7d32e85edb8ac6d70d50647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c4718f87d6483448d2031cf2965b08d5f4f5e9f7d32e85edb8ac6d70d50647->leave($__internal_43c4718f87d6483448d2031cf2965b08d5f4f5e9f7d32e85edb8ac6d70d50647_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_a217bfd8f5d0a16261d8e6314c7cc1dbecf16fde68f67ae73b2e1de8e3f9a64d = $this->env->getExtension("native_profiler");
        $__internal_a217bfd8f5d0a16261d8e6314c7cc1dbecf16fde68f67ae73b2e1de8e3f9a64d->enter($__internal_a217bfd8f5d0a16261d8e6314c7cc1dbecf16fde68f67ae73b2e1de8e3f9a64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        echo "        

    <div class=\"login-panel panel panel-default\">            
        
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Logowanie</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("AppBundle:Partials:flashMsg.html.twig", "AppBundle:Login:login.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), array(0 => "AdminBundle:Form:form_theme.html.twig"));
        // line 13
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form', array("action" => $this->env->getExtension('routing')->getPath("_check_path")));
        echo "
        </div>
    </div>

";
        
        $__internal_a217bfd8f5d0a16261d8e6314c7cc1dbecf16fde68f67ae73b2e1de8e3f9a64d->leave($__internal_a217bfd8f5d0a16261d8e6314c7cc1dbecf16fde68f67ae73b2e1de8e3f9a64d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  49 => 11,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle::login.html.twig" %}*/
/* */
/* {% block pageContent %}        */
/* */
/*     <div class="login-panel panel panel-default">            */
/*         */
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Logowanie</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include 'AppBundle:Partials:flashMsg.html.twig' %}*/
/*             {% form_theme loginForm 'AdminBundle:Form:form_theme.html.twig' %}*/
/*             {{ form(loginForm, {'action' : path("_check_path")}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
