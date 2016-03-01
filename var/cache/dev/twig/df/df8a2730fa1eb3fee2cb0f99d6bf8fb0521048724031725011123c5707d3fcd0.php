<?php

/* AdminBundle::login.html.twig */
class __TwigTemplate_9b6bd9b6e2f35926cf0dd81998f704a1c45b702870991eba13198a801d6135f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aea1220728e1b8087f1750a413caaa0c69c78e9bb3d679aaccddb70db824b3d3 = $this->env->getExtension("native_profiler");
        $__internal_aea1220728e1b8087f1750a413caaa0c69c78e9bb3d679aaccddb70db824b3d3->enter($__internal_aea1220728e1b8087f1750a413caaa0c69c78e9bb3d679aaccddb70db824b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Mój katalog kapsli</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- styles -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        
        <header class=\"navbar\">
            <div class=\"container\">
                <div class=\"nav navbar-nav\">
                    <h1>
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Mój katalog kapsli</a>
                    </h1>
                </div>
            </div>
        </header>
           
        <section class=\"login-container\">            
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-4 col-md-offset-4\">
                        ";
        // line 36
        $this->displayBlock('pageContent', $context, $blocks);
        // line 37
        echo "                    </div>

                </div>
            </div>      
        </section>            

        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <p class=\"text-right\">                                                            
                            Copyright &copy; 2015 Damian
                        </p>
                    </div>
                </div>
            </div>
        </footer>   
                        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_aea1220728e1b8087f1750a413caaa0c69c78e9bb3d679aaccddb70db824b3d3->leave($__internal_aea1220728e1b8087f1750a413caaa0c69c78e9bb3d679aaccddb70db824b3d3_prof);

    }

    // line 36
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_f5ec65a79cfcd57d8cbcabb06ddcfb09daaf6dabdea0b98174405daf14ac6321 = $this->env->getExtension("native_profiler");
        $__internal_f5ec65a79cfcd57d8cbcabb06ddcfb09daaf6dabdea0b98174405daf14ac6321->enter($__internal_f5ec65a79cfcd57d8cbcabb06ddcfb09daaf6dabdea0b98174405daf14ac6321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_f5ec65a79cfcd57d8cbcabb06ddcfb09daaf6dabdea0b98174405daf14ac6321->leave($__internal_f5ec65a79cfcd57d8cbcabb06ddcfb09daaf6dabdea0b98174405daf14ac6321_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  104 => 59,  100 => 58,  95 => 56,  74 => 37,  72 => 36,  58 => 25,  40 => 10,  36 => 9,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Mój katalog kapsli</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <!-- Bootstrap -->*/
/*         <link href="{{ asset('bundles/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <!-- styles -->*/
/*         <link href="{{ asset('bundles/app/css/style.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/admin/css/login.css') }}" rel="stylesheet">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*           <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <header class="navbar">*/
/*             <div class="container">*/
/*                 <div class="nav navbar-nav">*/
/*                     <h1>*/
/*                         <a href="{{ path('app_homepage') }}">Mój katalog kapsli</a>*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/*            */
/*         <section class="login-container">            */
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-4 col-md-offset-4">*/
/*                         {% block pageContent %}{% endblock %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>      */
/*         </section>            */
/* */
/*         <footer>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*                         <p class="text-right">                                                            */
/*                             Copyright &copy; 2015 Damian*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>   */
/*                         */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="{{ asset('bundles/admin/js/jquery.js') }}"></script>*/
/*         <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*         <script src="{{ asset('bundles/admin/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/js/custom.js') }}"></script>*/
/*     </body>*/
/* </html>*/
