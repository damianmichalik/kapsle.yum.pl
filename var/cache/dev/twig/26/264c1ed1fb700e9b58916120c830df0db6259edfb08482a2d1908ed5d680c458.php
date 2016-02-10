<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f6792663f353f4fdc7bca805ff6f766dfbe6e00030086206065a0090e89f665e extends Twig_Template
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
        $__internal_67f165d2c96bd351adf69bc847b78c6f2728e940b5ffd7082191ab2ffa6eebb3 = $this->env->getExtension("native_profiler");
        $__internal_67f165d2c96bd351adf69bc847b78c6f2728e940b5ffd7082191ab2ffa6eebb3->enter($__internal_67f165d2c96bd351adf69bc847b78c6f2728e940b5ffd7082191ab2ffa6eebb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_67f165d2c96bd351adf69bc847b78c6f2728e940b5ffd7082191ab2ffa6eebb3->leave($__internal_67f165d2c96bd351adf69bc847b78c6f2728e940b5ffd7082191ab2ffa6eebb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
