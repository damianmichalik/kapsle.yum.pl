<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_626b8c597f7455defa038cb2374336a54153d6fa3decec91c5d6fa6a695b8451 extends Twig_Template
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
        $__internal_3a6b23691e1c1f83796c2c9ba0ad2ae6737ee25ee4541d6939ecdf3fc194ac68 = $this->env->getExtension("native_profiler");
        $__internal_3a6b23691e1c1f83796c2c9ba0ad2ae6737ee25ee4541d6939ecdf3fc194ac68->enter($__internal_3a6b23691e1c1f83796c2c9ba0ad2ae6737ee25ee4541d6939ecdf3fc194ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a6b23691e1c1f83796c2c9ba0ad2ae6737ee25ee4541d6939ecdf3fc194ac68->leave($__internal_3a6b23691e1c1f83796c2c9ba0ad2ae6737ee25ee4541d6939ecdf3fc194ac68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
