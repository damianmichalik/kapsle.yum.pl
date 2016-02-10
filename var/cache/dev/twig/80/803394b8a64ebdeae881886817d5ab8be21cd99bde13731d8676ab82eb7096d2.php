<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_91276792bcd83b87e87e80d61d9d048e93d8b73470b18f4f56714f4a33dc5090 extends Twig_Template
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
        $__internal_4d85387c3215be02c112e949d548fee2811646bca65591bf3e8c42899473a7f2 = $this->env->getExtension("native_profiler");
        $__internal_4d85387c3215be02c112e949d548fee2811646bca65591bf3e8c42899473a7f2->enter($__internal_4d85387c3215be02c112e949d548fee2811646bca65591bf3e8c42899473a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/admin-panel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div id=\"wrapper\">
            
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Nawigacja</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Mój katalog kapsli</a>
                </div>
                
                <ul class=\"nav navbar-right top-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Moje konto <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Wyloguj</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                            
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    ";
        // line 47
        $this->loadTemplate("AdminBundle:Partials:adminMenu.html.twig", "AdminBundle::base.html.twig", 47)->display($context);
        // line 48
        echo "                </div>                
                            
            </nav>

            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">     
                    
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
            // line 56
            echo "                    <div class=\"alert alert-success alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <strong>Sukces!</strong> ";
            // line 58
            echo twig_escape_filter($this->env, $context["success"], "html", null, true);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            echo "                    <div class=\"alert alert-danger alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        <strong>Błąd!</strong> ";
            // line 65
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    
                    ";
        // line 69
        $this->displayBlock('pageContent', $context, $blocks);
        // line 71
        echo "                </div>
            </div>


            <footer>
                <div class=\"container\">

                    <div class=\"copy text-center\">
                        Copyright 2015 <a href='#'>Damian</a>
                    </div>

                </div>
            </footer>
        </div>            
        
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/custom.js"), "html", null, true);
        echo "\"></script>
        
    </body>
</html>";
        
        $__internal_4d85387c3215be02c112e949d548fee2811646bca65591bf3e8c42899473a7f2->leave($__internal_4d85387c3215be02c112e949d548fee2811646bca65591bf3e8c42899473a7f2_prof);

    }

    // line 69
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_ab7db285e923955910187f5cb2b0223e8ede8317ae754da8705ca6755a441ca6 = $this->env->getExtension("native_profiler");
        $__internal_ab7db285e923955910187f5cb2b0223e8ede8317ae754da8705ca6755a441ca6->enter($__internal_ab7db285e923955910187f5cb2b0223e8ede8317ae754da8705ca6755a441ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 70
        echo "                    ";
        
        $__internal_ab7db285e923955910187f5cb2b0223e8ede8317ae754da8705ca6755a441ca6->leave($__internal_ab7db285e923955910187f5cb2b0223e8ede8317ae754da8705ca6755a441ca6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  178 => 69,  167 => 88,  163 => 87,  159 => 86,  142 => 71,  140 => 69,  137 => 68,  128 => 65,  124 => 63,  120 => 62,  117 => 61,  108 => 58,  104 => 56,  100 => 55,  91 => 48,  89 => 47,  79 => 40,  68 => 32,  44 => 11,  40 => 10,  36 => 9,  31 => 7,  23 => 1,);
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
/*         <link href="{{ asset('bundles/admin/css/sb-admin.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/admin/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/admin/css/admin-panel.css') }}" rel="stylesheet">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*           <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         <div id="wrapper">*/
/*             */
/*             <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*                 */
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                         <span class="sr-only">Nawigacja</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('admin_homepage') }}">Mój katalog kapsli</a>*/
/*                 </div>*/
/*                 */
/*                 <ul class="nav navbar-right top-nav">*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Moje konto <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="{{ path('_logout') }}"><i class="fa fa-fw fa-power-off"></i> Wyloguj</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                             */
/*                 <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                     {% include 'AdminBundle:Partials:adminMenu.html.twig' %}*/
/*                 </div>                */
/*                             */
/*             </nav>*/
/* */
/*             <div id="page-wrapper">*/
/*                 <div class="container-fluid">     */
/*                     */
/*                     {% for success in app.session.flashBag.get('success') %}*/
/*                     <div class="alert alert-success alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                         <strong>Sukces!</strong> {{ success }}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     */
/*                     {% for error in app.session.flashBag.get('error') %}*/
/*                     <div class="alert alert-danger alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                         <strong>Błąd!</strong> {{ error }}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     */
/*                     {% block pageContent %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <footer>*/
/*                 <div class="container">*/
/* */
/*                     <div class="copy text-center">*/
/*                         Copyright 2015 <a href='#'>Damian</a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </footer>*/
/*         </div>            */
/*         */
/*         <script src="{{ asset('bundles/admin/js/jquery.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/js/custom.js') }}"></script>*/
/*         */
/*     </body>*/
/* </html>*/
