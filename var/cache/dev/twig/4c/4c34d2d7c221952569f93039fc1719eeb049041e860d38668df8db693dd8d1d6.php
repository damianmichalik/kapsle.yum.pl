<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d41b735f7a56ebb08a3b8c4da5d3f1b1434ce0b86749441f9a69bcd74726d9b2 extends Twig_Template
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
        $__internal_12dde2959d7f7e6091ae243fe8f7eabd2db88bf9a43a8936b223cc06a3f9c1b6 = $this->env->getExtension("native_profiler");
        $__internal_12dde2959d7f7e6091ae243fe8f7eabd2db88bf9a43a8936b223cc06a3f9c1b6->enter($__internal_12dde2959d7f7e6091ae243fe8f7eabd2db88bf9a43a8936b223cc06a3f9c1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_12dde2959d7f7e6091ae243fe8f7eabd2db88bf9a43a8936b223cc06a3f9c1b6->leave($__internal_12dde2959d7f7e6091ae243fe8f7eabd2db88bf9a43a8936b223cc06a3f9c1b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
