<?php

/* base.html.twig */
class __TwigTemplate_74b8d5a5f7790a8eb89e2e4a39d5df1c90247df0229b9547c4c9d387c32a66e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee07ed2123a2b457ae544116be64942cab445644938733d8f19addf89637123 = $this->env->getExtension("native_profiler");
        $__internal_fee07ed2123a2b457ae544116be64942cab445644938733d8f19addf89637123->enter($__internal_fee07ed2123a2b457ae544116be64942cab445644938733d8f19addf89637123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fee07ed2123a2b457ae544116be64942cab445644938733d8f19addf89637123->leave($__internal_fee07ed2123a2b457ae544116be64942cab445644938733d8f19addf89637123_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca3d16fb70384f0c27cd59a18297c55f0ade7ab1817b0665a7e63f46167458fd = $this->env->getExtension("native_profiler");
        $__internal_ca3d16fb70384f0c27cd59a18297c55f0ade7ab1817b0665a7e63f46167458fd->enter($__internal_ca3d16fb70384f0c27cd59a18297c55f0ade7ab1817b0665a7e63f46167458fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca3d16fb70384f0c27cd59a18297c55f0ade7ab1817b0665a7e63f46167458fd->leave($__internal_ca3d16fb70384f0c27cd59a18297c55f0ade7ab1817b0665a7e63f46167458fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8e2af6786733865eaf540a8f6064777e76f6c25c7d56c0dffe478ae83e7810d = $this->env->getExtension("native_profiler");
        $__internal_e8e2af6786733865eaf540a8f6064777e76f6c25c7d56c0dffe478ae83e7810d->enter($__internal_e8e2af6786733865eaf540a8f6064777e76f6c25c7d56c0dffe478ae83e7810d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8e2af6786733865eaf540a8f6064777e76f6c25c7d56c0dffe478ae83e7810d->leave($__internal_e8e2af6786733865eaf540a8f6064777e76f6c25c7d56c0dffe478ae83e7810d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d4007e506a38e4f847ec26bec0c3b0ac74c5daefc16fe18f2c140d857cd6936 = $this->env->getExtension("native_profiler");
        $__internal_3d4007e506a38e4f847ec26bec0c3b0ac74c5daefc16fe18f2c140d857cd6936->enter($__internal_3d4007e506a38e4f847ec26bec0c3b0ac74c5daefc16fe18f2c140d857cd6936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d4007e506a38e4f847ec26bec0c3b0ac74c5daefc16fe18f2c140d857cd6936->leave($__internal_3d4007e506a38e4f847ec26bec0c3b0ac74c5daefc16fe18f2c140d857cd6936_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8829adcc54661c4bdb6b792bcd8deafa92c73ff91b57990b2d8d5befc75426fa = $this->env->getExtension("native_profiler");
        $__internal_8829adcc54661c4bdb6b792bcd8deafa92c73ff91b57990b2d8d5befc75426fa->enter($__internal_8829adcc54661c4bdb6b792bcd8deafa92c73ff91b57990b2d8d5befc75426fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8829adcc54661c4bdb6b792bcd8deafa92c73ff91b57990b2d8d5befc75426fa->leave($__internal_8829adcc54661c4bdb6b792bcd8deafa92c73ff91b57990b2d8d5befc75426fa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
