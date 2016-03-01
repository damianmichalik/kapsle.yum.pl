<?php

/* AppBundle:Partials:nav.html.twig */
class __TwigTemplate_c3847a896fc93b30af07e48af77db769671e21d84a910a652677e51a98970d4d extends Twig_Template
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
        $__internal_d12003286abc8724a3b5fb25632d5ad44ed9f77dca6815b531bd3da48668f65c = $this->env->getExtension("native_profiler");
        $__internal_d12003286abc8724a3b5fb25632d5ad44ed9f77dca6815b531bd3da48668f65c->enter($__internal_d12003286abc8724a3b5fb25632d5ad44ed9f77dca6815b531bd3da48668f65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Partials:nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\"> 
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-expanded=\"false\">
                <span class=\"sr-only\">Rozwiń</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>   
            <a class=\"navbar-brand\" href=\"#\">
                <img width=\"20\" height=\"20\" alt=\"Brand\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/bottle58_32.png"), "html", null, true);
        echo "\">
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"main-menu\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Kaplse</a></li>             
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("breweries_index");
        echo "\">Browary</a></li>             
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Kontakt</a></li>             
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>    
</nav>  ";
        
        $__internal_d12003286abc8724a3b5fb25632d5ad44ed9f77dca6815b531bd3da48668f65c->leave($__internal_d12003286abc8724a3b5fb25632d5ad44ed9f77dca6815b531bd3da48668f65c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Partials:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  47 => 18,  43 => 17,  34 => 11,  22 => 1,);
    }
}
/* <nav class="navbar navbar-default" role="navigation">*/
/*     <div class="container"> */
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">*/
/*                 <span class="sr-only">Rozwiń</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>   */
/*             <a class="navbar-brand" href="#">*/
/*                 <img width="20" height="20" alt="Brand" src="{{ asset('bundles/app/images/bottle58_32.png') }}">*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="collapse navbar-collapse" id="main-menu">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ path('app_homepage') }}">Kaplse</a></li>             */
/*                 <li><a href="{{ path('breweries_index') }}">Browary</a></li>             */
/*                 <li><a href="{{ path('contact') }}">Kontakt</a></li>             */
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div>    */
/* </nav>  */
