<?php

/* AppBundle:Partials:nav.html.twig */
class __TwigTemplate_7b5c60e100d8333ff8071c2a08eee368f5d453320f751747fef475e8236bc87e extends Twig_Template
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
        return array (  48 => 19,  44 => 18,  40 => 17,  31 => 11,  19 => 1,);
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
