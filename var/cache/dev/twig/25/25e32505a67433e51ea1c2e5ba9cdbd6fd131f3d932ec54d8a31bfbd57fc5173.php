<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_91ff5ef2dffe7cd41fc61ee0688f3300978edac3995475581308149de2b37325 extends Twig_Template
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
        $__internal_552445f50d7871bec8698860b5e734d9b08153643878597260115339e87a7428 = $this->env->getExtension("native_profiler");
        $__internal_552445f50d7871bec8698860b5e734d9b08153643878597260115339e87a7428->enter($__internal_552445f50d7871bec8698860b5e734d9b08153643878597260115339e87a7428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_552445f50d7871bec8698860b5e734d9b08153643878597260115339e87a7428->leave($__internal_552445f50d7871bec8698860b5e734d9b08153643878597260115339e87a7428_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
