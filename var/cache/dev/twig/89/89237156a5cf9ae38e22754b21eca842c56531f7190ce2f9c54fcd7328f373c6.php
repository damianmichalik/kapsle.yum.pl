<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ed9126bee10d9fdfc4fa38230ddb468bfaff76151fe30349518e24dd5784ead extends Twig_Template
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
        $__internal_5508e96bb60c485e1a82bbb40e5039912ee5715629f1e19d1996c10e58a92413 = $this->env->getExtension("native_profiler");
        $__internal_5508e96bb60c485e1a82bbb40e5039912ee5715629f1e19d1996c10e58a92413->enter($__internal_5508e96bb60c485e1a82bbb40e5039912ee5715629f1e19d1996c10e58a92413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5508e96bb60c485e1a82bbb40e5039912ee5715629f1e19d1996c10e58a92413->leave($__internal_5508e96bb60c485e1a82bbb40e5039912ee5715629f1e19d1996c10e58a92413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
