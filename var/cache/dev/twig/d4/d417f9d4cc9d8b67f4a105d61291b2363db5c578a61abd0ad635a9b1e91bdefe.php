<?php

/* AppBundle:Email:contact.html.twig */
class __TwigTemplate_f17e3c857547fc9d0c0c7b92f8679e7a6761913389a0715da5e033528f7dfe62 extends Twig_Template
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
        $__internal_54c0253558023a377f9a76ca50d59c650de4a7edd50fa9dfd6f2bd5b942b1aba = $this->env->getExtension("native_profiler");
        $__internal_54c0253558023a377f9a76ca50d59c650de4a7edd50fa9dfd6f2bd5b942b1aba->enter($__internal_54c0253558023a377f9a76ca50d59c650de4a7edd50fa9dfd6f2bd5b942b1aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Email:contact.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
    <head>
        <title>Zapytanie z formularza kontaktowego</title>
        <meta http-equiv=Content-Type content=\"text/html; charset=iso-8859-2\" />
    </head>
    <body>
        <table align=\"center\" border=\"0\" width=\"600\">
            <tr>
                <td>
                    <h1>Nowe zapytanie z dnia: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo "</h1>
                    <table border=\"1\" cellpadding=\"10\">
                        <tr>
                            <th>Imię</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), "name", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pytanie</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), "content", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>";
        
        $__internal_54c0253558023a377f9a76ca50d59c650de4a7edd50fa9dfd6f2bd5b942b1aba->leave($__internal_54c0253558023a377f9a76ca50d59c650de4a7edd50fa9dfd6f2bd5b942b1aba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Email:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  48 => 19,  41 => 15,  34 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">*/
/* <html>*/
/*     <head>*/
/*         <title>Zapytanie z formularza kontaktowego</title>*/
/*         <meta http-equiv=Content-Type content="text/html; charset=iso-8859-2" />*/
/*     </head>*/
/*     <body>*/
/*         <table align="center" border="0" width="600">*/
/*             <tr>*/
/*                 <td>*/
/*                     <h1>Nowe zapytanie z dnia: {{ "now"|date("Y-m-d H:i") }}</h1>*/
/*                     <table border="1" cellpadding="10">*/
/*                         <tr>*/
/*                             <th>Imię</th>*/
/*                             <td>{{ formData.name }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Email</th>*/
/*                             <td>{{ formData.email }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Pytanie</th>*/
/*                             <td>{{ formData.content }}</td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*     </body>*/
/* </html>*/
