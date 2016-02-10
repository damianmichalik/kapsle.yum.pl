<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_753a39819837a41d077dcdfe3b5f6f9c0ee93e123aa3851728782e520148b609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72956710471dccf712d7ef5bd93939777edca4f99482a76c54aca6fa5f495611 = $this->env->getExtension("native_profiler");
        $__internal_72956710471dccf712d7ef5bd93939777edca4f99482a76c54aca6fa5f495611->enter($__internal_72956710471dccf712d7ef5bd93939777edca4f99482a76c54aca6fa5f495611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-57x57.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-60x60.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-76x76.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-114x114.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-120x120.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-144x144.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-152x152.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/apple-icon-180x180.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/android-icon-192x192.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/favicon-96x96.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/manifest.json"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicons/ms-icon-144x144.png"), "html", null, true);
        echo "\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        
        <title>";
        // line 30
        ob_start();
        $this->displayBlock('headTitle', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</title>      
    </head>
    <body>
        <header class=\"navbar\">
            <div class=\"container\">
                <div class=\"nav navbar-nav\">
                    <h1>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Mój katalog kapsli</a>
                    </h1>
                </div>
                <div id=\"search-form-wrapper\">        
                    <form id=\"caps-search-form\" class=\"navbar-form navbar-right\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("caps_search");
        echo "\" role=\"search\">
                        <input disabled=\"disabled\" type=\"hidden\" id=\"autocomplete-url\" name=\"autocomplete_url\" value=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("caps_ajax_autocomplete");
        echo "\">
                        <div class=\"form-group\">
                            <input id=\"caps-search-keyword\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("searchParam", $context)) ? ((isset($context["searchParam"]) ? $context["searchParam"] : $this->getContext($context, "searchParam"))) : ("")), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Szukaj...\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
                    </form> 
                </div>
            </div>
        </header>
        
        ";
        // line 52
        $this->loadTemplate("AppBundle:Partials:nav.html.twig", "AppBundle::base.html.twig", 52)->display($context);
        echo "                        
                        
        <div class=\"container\">
            
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Home</a></li>
                ";
        // line 58
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 60
        echo "            </ol>
            
            ";
        // line 62
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 63
        echo "        </div>
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        ";
        // line 68
        echo $this->env->getExtension('app_extension')->newestCapses($this->env);
        echo "
                    </div>

                    <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                        <h4>Subskrypcje</h4> 
                        <ul class=\"social\">
                            <li class=\"list-unstyled\">
                                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("caps_rss");
        echo "\">
                                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/feed-icon-28x28.png"), "html", null, true);
        echo "\" alt=\"RSS\">
                                    <span>Kanał RSS</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <p class=\"text-right\">                                                            
                            Copyright &copy; 2015 Damian
                        </p>
                        <p class=\"text-right\">       
                            Icons made by <a rel=\"external\" href=\"http://www.freepik.com\" title=\"Freepik\">Freepik</a> from <a rel=\"external\" href=\"http://www.flaticon.com\" title=\"Flaticon\">www.flaticon.com</a> is licensed by <a rel=\"external\" href=\"http://creativecommons.org/licenses/by/3.0/\" title=\"Creative Commons BY 3.0\">CC BY 3.0</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
                
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.autocomplete.js"), "html", null, true);
        echo "\"></script>        
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/custom.js"), "html", null, true);
        echo "\"></script>        
        
    </body>
</html>";
        
        $__internal_72956710471dccf712d7ef5bd93939777edca4f99482a76c54aca6fa5f495611->leave($__internal_72956710471dccf712d7ef5bd93939777edca4f99482a76c54aca6fa5f495611_prof);

    }

    // line 30
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7b93bbaad2991913a7233f7c1cd3b76e5e6db23fe9ed41b38d11b24b3f7b82f2 = $this->env->getExtension("native_profiler");
        $__internal_7b93bbaad2991913a7233f7c1cd3b76e5e6db23fe9ed41b38d11b24b3f7b82f2->enter($__internal_7b93bbaad2991913a7233f7c1cd3b76e5e6db23fe9ed41b38d11b24b3f7b82f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Mój katalog kapsli";
        
        $__internal_7b93bbaad2991913a7233f7c1cd3b76e5e6db23fe9ed41b38d11b24b3f7b82f2->leave($__internal_7b93bbaad2991913a7233f7c1cd3b76e5e6db23fe9ed41b38d11b24b3f7b82f2_prof);

    }

    // line 58
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_be916760a67b96cbf844748e733129ae67782328558428b7920d93edb1cd7c7e = $this->env->getExtension("native_profiler");
        $__internal_be916760a67b96cbf844748e733129ae67782328558428b7920d93edb1cd7c7e->enter($__internal_be916760a67b96cbf844748e733129ae67782328558428b7920d93edb1cd7c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 59
        echo "                ";
        
        $__internal_be916760a67b96cbf844748e733129ae67782328558428b7920d93edb1cd7c7e->leave($__internal_be916760a67b96cbf844748e733129ae67782328558428b7920d93edb1cd7c7e_prof);

    }

    // line 62
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_c45bc652150eb8d03d0787714ccc50d402e9dc4791f555dac302fff6b68b7652 = $this->env->getExtension("native_profiler");
        $__internal_c45bc652150eb8d03d0787714ccc50d402e9dc4791f555dac302fff6b68b7652->enter($__internal_c45bc652150eb8d03d0787714ccc50d402e9dc4791f555dac302fff6b68b7652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        
        $__internal_c45bc652150eb8d03d0787714ccc50d402e9dc4791f555dac302fff6b68b7652->leave($__internal_c45bc652150eb8d03d0787714ccc50d402e9dc4791f555dac302fff6b68b7652_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 62,  257 => 59,  251 => 58,  239 => 30,  228 => 99,  224 => 98,  220 => 97,  216 => 96,  193 => 76,  189 => 75,  179 => 68,  172 => 63,  170 => 62,  166 => 60,  164 => 58,  160 => 57,  152 => 52,  141 => 44,  136 => 42,  132 => 41,  125 => 37,  113 => 30,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  37 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link href="{{ asset('bundles/app/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/app/css/style.css') }}" rel="stylesheet">*/
/*         */
/*         <link rel="shortcut icon" href="{{ asset('bundles/app/images/favicons/favicon.ico') }}" type="image/x-icon">*/
/*         <link rel="icon" href="{{ asset('bundles/app/images/favicons/favicon.ico') }}" type="image/x-icon">*/
/*         <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('bundles/app/images/favicons/apple-icon-57x57.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('bundles/app/images/favicons/apple-icon-60x60.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('bundles/app/images/favicons/apple-icon-72x72.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('bundles/app/images/favicons/apple-icon-76x76.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('bundles/app/images/favicons/apple-icon-114x114.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('bundles/app/images/favicons/apple-icon-120x120.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('bundles/app/images/favicons/apple-icon-144x144.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('bundles/app/images/favicons/apple-icon-152x152.png') }}">*/
/*         <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('bundles/app/images/favicons/apple-icon-180x180.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('bundles/app/images/favicons/android-icon-192x192.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('bundles/app/images/favicons/favicon-32x32.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('bundles/app/images/favicons/favicon-96x96.png') }}">*/
/*         <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('bundles/app/images/favicons/favicon-16x16.png') }}">*/
/*         <link rel="manifest" href="{{ asset('bundles/app/images/favicons/manifest.json') }}">*/
/*         <meta name="msapplication-TileColor" content="#ffffff">*/
/*         <meta name="msapplication-TileImage" content="{{ asset('bundles/app/images/favicons/ms-icon-144x144.png') }}">*/
/*         <meta name="theme-color" content="#ffffff">*/
/*         */
/*         <title>{% spaceless %}{% block headTitle %}Mój katalog kapsli{% endblock %}{% endspaceless %}</title>      */
/*     </head>*/
/*     <body>*/
/*         <header class="navbar">*/
/*             <div class="container">*/
/*                 <div class="nav navbar-nav">*/
/*                     <h1>*/
/*                         <a href="{{ path('app_homepage') }}">Mój katalog kapsli</a>*/
/*                     </h1>*/
/*                 </div>*/
/*                 <div id="search-form-wrapper">        */
/*                     <form id="caps-search-form" class="navbar-form navbar-right" action="{{ path('caps_search') }}" role="search">*/
/*                         <input disabled="disabled" type="hidden" id="autocomplete-url" name="autocomplete_url" value="{{ path('caps_ajax_autocomplete') }}">*/
/*                         <div class="form-group">*/
/*                             <input id="caps-search-keyword" value="{{ searchParam is defined ? searchParam : '' }}" type="text" class="form-control" name="search" placeholder="Szukaj...">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>*/
/*                     </form> */
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/*         */
/*         {% include 'AppBundle:Partials:nav.html.twig' %}                        */
/*                         */
/*         <div class="container">*/
/*             */
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('app_homepage') }}">Home</a></li>*/
/*                 {% block breadcrumb %}*/
/*                 {% endblock %}*/
/*             </ol>*/
/*             */
/*             {% block pageContainer %}{% endblock %}*/
/*         </div>*/
/*         <footer>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">*/
/*                         {{ newest_capses() }}*/
/*                     </div>*/
/* */
/*                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">*/
/*                         <h4>Subskrypcje</h4> */
/*                         <ul class="social">*/
/*                             <li class="list-unstyled">*/
/*                                 <a href="{{ path('caps_rss') }}">*/
/*                                     <img src="{{ asset('bundles/app/images/feed-icon-28x28.png') }}" alt="RSS">*/
/*                                     <span>Kanał RSS</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*                         <p class="text-right">                                                            */
/*                             Copyright &copy; 2015 Damian*/
/*                         </p>*/
/*                         <p class="text-right">       */
/*                             Icons made by <a rel="external" href="http://www.freepik.com" title="Freepik">Freepik</a> from <a rel="external" href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a rel="external" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*                 */
/*         <script src="{{ asset('bundles/app/js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/app/js/jquery.autocomplete.js') }}"></script>        */
/*         <script src="{{ asset('bundles/app/js/custom.js') }}"></script>        */
/*         */
/*     </body>*/
/* </html>*/