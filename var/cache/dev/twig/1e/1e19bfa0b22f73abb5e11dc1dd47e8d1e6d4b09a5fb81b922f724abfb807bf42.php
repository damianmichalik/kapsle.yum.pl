<?php

/* AppBundle:Breweries:details.html.twig */
class __TwigTemplate_5f955f90162e864a98448b6bc0729a3fa8728529c0df088dde607d2c0a2776ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Breweries:details.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d5191269c2b88ebc2549a903da8cd15fc3d7bd6fbd096cac5940521d23fcb8d = $this->env->getExtension("native_profiler");
        $__internal_5d5191269c2b88ebc2549a903da8cd15fc3d7bd6fbd096cac5940521d23fcb8d->enter($__internal_5d5191269c2b88ebc2549a903da8cd15fc3d7bd6fbd096cac5940521d23fcb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Breweries:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5191269c2b88ebc2549a903da8cd15fc3d7bd6fbd096cac5940521d23fcb8d->leave($__internal_5d5191269c2b88ebc2549a903da8cd15fc3d7bd6fbd096cac5940521d23fcb8d_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_e6a2b4726b2145dc8e1137628b2dd9ab8074275e87f691d66bb714f6751223c3 = $this->env->getExtension("native_profiler");
        $__internal_e6a2b4726b2145dc8e1137628b2dd9ab8074275e87f691d66bb714f6751223c3->enter($__internal_e6a2b4726b2145dc8e1137628b2dd9ab8074275e87f691d66bb714f6751223c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()) . " | ") . $this->renderParentBlock("headTitle", $context, $blocks)), "html", null, true);
        echo "
";
        
        $__internal_e6a2b4726b2145dc8e1137628b2dd9ab8074275e87f691d66bb714f6751223c3->leave($__internal_e6a2b4726b2145dc8e1137628b2dd9ab8074275e87f691d66bb714f6751223c3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e8bb43f5ed710e6f660c87d7d367198bfabece20454ab8896c4d0917d3074c9e = $this->env->getExtension("native_profiler");
        $__internal_e8bb43f5ed710e6f660c87d7d367198bfabece20454ab8896c4d0917d3074c9e->enter($__internal_e8bb43f5ed710e6f660c87d7d367198bfabece20454ab8896c4d0917d3074c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("breweries_index");
        echo "\">Browary</a></li>
    <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_e8bb43f5ed710e6f660c87d7d367198bfabece20454ab8896c4d0917d3074c9e->leave($__internal_e8bb43f5ed710e6f660c87d7d367198bfabece20454ab8896c4d0917d3074c9e_prof);

    }

    // line 12
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_06d417cad824a2fe63a8d2d9fc5ede5d85640f060a7d087fe349170474c610c9 = $this->env->getExtension("native_profiler");
        $__internal_06d417cad824a2fe63a8d2d9fc5ede5d85640f060a7d087fe349170474c610c9->enter($__internal_06d417cad824a2fe63a8d2d9fc5ede5d85640f060a7d087fe349170474c610c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 13
        echo "
    <section id=\"caps-card\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
        echo "</h2>        
            <hr>
            <p>
                <span class=\"glyphicon glyphicon-time\"></span> Dodany ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "createDate", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            </p>
            <hr>  
        </div>  
            
        ";
        // line 24
        if (( !(null === (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat"))) &&  !(null === (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng"))))) {
            echo "   
        <div class=\"col-md-6\" id=\"map-wrapper\">              
            <div id=\"map\"></div>
            <script>
            function initMap() {
                var myLatLng = {lat: ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "html", null, true);
            echo " };

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: myLatLng
                });
                
                var contentString = '";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
            echo "';
                
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: '";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "name", array()), "html", null, true);
            echo "'
                });
                
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                
            }
            </script>
            <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCBSPNX08cXOYUZabQC6FjeZu0rQXJWzms&callback=initMap\"></script>               
        </div> 
        ";
        }
        // line 57
        echo "        <div class=\"col-md-6\">  
            ";
        // line 58
        if ( !(null === $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "country", array()))) {
            // line 59
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "country", array()), "name", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 60
        echo "    
            <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "postcode", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "city", array()), "html", null, true);
        echo "</p>        
            <p>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brewery"]) ? $context["brewery"] : $this->getContext($context, "brewery")), "address", array()), "html", null, true);
        echo "</p>
        </div>       
    </section>

";
        
        $__internal_06d417cad824a2fe63a8d2d9fc5ede5d85640f060a7d087fe349170474c610c9->leave($__internal_06d417cad824a2fe63a8d2d9fc5ede5d85640f060a7d087fe349170474c610c9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Breweries:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  158 => 61,  155 => 60,  149 => 59,  147 => 58,  144 => 57,  129 => 45,  117 => 36,  105 => 29,  97 => 24,  89 => 19,  83 => 16,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block headTitle %}*/
/*     {{ brewery.name ~ ' | ' ~ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ path('breweries_index') }}">Browary</a></li>*/
/*     <li>{{ brewery.name }}</li>*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <section id="caps-card">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*             <h2>{{ brewery.name }}</h2>        */
/*             <hr>*/
/*             <p>*/
/*                 <span class="glyphicon glyphicon-time"></span> Dodany {{ brewery.createDate|date('Y-m-d H:i') }}*/
/*             </p>*/
/*             <hr>  */
/*         </div>  */
/*             */
/*         {% if lat is not null and lng is not null %}   */
/*         <div class="col-md-6" id="map-wrapper">              */
/*             <div id="map"></div>*/
/*             <script>*/
/*             function initMap() {*/
/*                 var myLatLng = {lat: {{ lat }}, lng: {{ lng }} };*/
/* */
/*                 var map = new google.maps.Map(document.getElementById('map'), {*/
/*                     zoom: 12,*/
/*                     center: myLatLng*/
/*                 });*/
/*                 */
/*                 var contentString = '{{ brewery.name }}';*/
/*                 */
/*                 var infowindow = new google.maps.InfoWindow({*/
/*                     content: contentString*/
/*                 });*/
/* */
/*                 var marker = new google.maps.Marker({*/
/*                     position: myLatLng,*/
/*                     map: map,*/
/*                     title: '{{ brewery.name }}'*/
/*                 });*/
/*                 */
/*                 marker.addListener('click', function() {*/
/*                     infowindow.open(map, marker);*/
/*                 });*/
/*                 */
/*             }*/
/*             </script>*/
/*             <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBSPNX08cXOYUZabQC6FjeZu0rQXJWzms&callback=initMap"></script>               */
/*         </div> */
/*         {% endif %}*/
/*         <div class="col-md-6">  */
/*             {% if brewery.country is not null %}*/
/*                 <p>{{ brewery.country.name }}</p>*/
/*             {% endif %}    */
/*             <p>{{ brewery.postcode }}, {{ brewery.city }}</p>        */
/*             <p>{{ brewery.address }}</p>*/
/*         </div>       */
/*     </section>*/
/* */
/* {% endblock %}*/
