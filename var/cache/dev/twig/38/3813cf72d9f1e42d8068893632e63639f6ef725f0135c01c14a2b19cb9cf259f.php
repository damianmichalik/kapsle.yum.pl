<?php

/* AppBundle:Feeds:rss.xml.twig */
class __TwigTemplate_6d0c4d46420d1389e6ad0de66c9a23ccfc7e00ee605072bbb0edcd6767cf5ab4 extends Twig_Template
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
        $__internal_6d5191004be0b3963517d326461cc78b59b0425cf79612e65e05809d1823e17d = $this->env->getExtension("native_profiler");
        $__internal_6d5191004be0b3963517d326461cc78b59b0425cf79612e65e05809d1823e17d->enter($__internal_6d5191004be0b3963517d326461cc78b59b0425cf79612e65e05809d1823e17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Feeds:rss.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<rss version=\"2.0\">
    <channel>
        <title>Moje kapsle</title>
        <link>";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("app_homepage");
        echo "</link>
        <description>Katalog Kapsli.</description>
        <language>pl</language>
        <pubDate>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "D, d M Y H:i:s O"), "html", null, true);
        echo "</pubDate>
        <lastBuildDate>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "D, d M Y H:i:s O"), "html", null, true);
        echo "</lastBuildDate>        
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caps"]) ? $context["caps"] : $this->getContext($context, "caps")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 11
            echo "        <item>
            <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "</title>
            <link>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("caps_details", array("slug" => $this->getAttribute($context["cap"], "slug", array()))), "html", null, true);
            echo "</link>
            <description>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "name", array()), "html", null, true);
            echo "</description>
            <pubDate>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cap"], "createDate", array()), "D, d M Y H:i:s O"), "html", null, true);
            echo "</pubDate>
            <guid>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["cap"], "id", array()), "html", null, true);
            echo "</guid>
        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "   </channel>
</rss>";
        
        $__internal_6d5191004be0b3963517d326461cc78b59b0425cf79612e65e05809d1823e17d->leave($__internal_6d5191004be0b3963517d326461cc78b59b0425cf79612e65e05809d1823e17d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Feeds:rss.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* <?xml version="1.0"?>*/
/* <rss version="2.0">*/
/*     <channel>*/
/*         <title>Moje kapsle</title>*/
/*         <link>{{ url('app_homepage') }}</link>*/
/*         <description>Katalog Kapsli.</description>*/
/*         <language>pl</language>*/
/*         <pubDate>{{ "now"|date('D, d M Y H:i:s O') }}</pubDate>*/
/*         <lastBuildDate>{{ "now"|date('D, d M Y H:i:s O') }}</lastBuildDate>        */
/*         {% for cap in caps %}*/
/*         <item>*/
/*             <title>{{ cap.name }}</title>*/
/*             <link>{{ url('caps_details', {'slug' : cap.slug}) }}</link>*/
/*             <description>{{ cap.name }}</description>*/
/*             <pubDate>{{ cap.createDate|date('D, d M Y H:i:s O') }}</pubDate>*/
/*             <guid>{{ cap.id }}</guid>*/
/*         </item>*/
/*         {% endfor %}*/
/*    </channel>*/
/* </rss>*/
