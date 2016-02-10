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
        $__internal_b149e06b730b21b801dd9dfa6e904ac83851d40de909f0c93e7ce08c4708f09c = $this->env->getExtension("native_profiler");
        $__internal_b149e06b730b21b801dd9dfa6e904ac83851d40de909f0c93e7ce08c4708f09c->enter($__internal_b149e06b730b21b801dd9dfa6e904ac83851d40de909f0c93e7ce08c4708f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b149e06b730b21b801dd9dfa6e904ac83851d40de909f0c93e7ce08c4708f09c->leave($__internal_b149e06b730b21b801dd9dfa6e904ac83851d40de909f0c93e7ce08c4708f09c_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_c081d8e4dfd499722eacd2f528917e46e38cbc3a4e8f715fd2c2387d75d59ec6 = $this->env->getExtension("native_profiler");
        $__internal_c081d8e4dfd499722eacd2f528917e46e38cbc3a4e8f715fd2c2387d75d59ec6->enter($__internal_c081d8e4dfd499722eacd2f528917e46e38cbc3a4e8f715fd2c2387d75d59ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_c081d8e4dfd499722eacd2f528917e46e38cbc3a4e8f715fd2c2387d75d59ec6->leave($__internal_c081d8e4dfd499722eacd2f528917e46e38cbc3a4e8f715fd2c2387d75d59ec6_prof);

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
