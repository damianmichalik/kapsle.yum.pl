<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_309144946928f7114eeeefce54480c49ca157d8949a5d49c1d0847e8d2556e5a extends Twig_Template
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
        $__internal_08b8c6c8f7dbd2c343c37ffb3d7a184713fe228d91bf692c3dd72e0d648d740a = $this->env->getExtension("native_profiler");
        $__internal_08b8c6c8f7dbd2c343c37ffb3d7a184713fe228d91bf692c3dd72e0d648d740a->enter($__internal_08b8c6c8f7dbd2c343c37ffb3d7a184713fe228d91bf692c3dd72e0d648d740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08b8c6c8f7dbd2c343c37ffb3d7a184713fe228d91bf692c3dd72e0d648d740a->leave($__internal_08b8c6c8f7dbd2c343c37ffb3d7a184713fe228d91bf692c3dd72e0d648d740a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
