<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_085ace62ddae9c663f2fefc8685c02491a796f7fdc0da817b6e444dd9278d58c extends Twig_Template
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
        $__internal_bf911af0d24b5efda2f443ad39d0071a617c77f257d6b41c8181ada648ba1fd4 = $this->env->getExtension("native_profiler");
        $__internal_bf911af0d24b5efda2f443ad39d0071a617c77f257d6b41c8181ada648ba1fd4->enter($__internal_bf911af0d24b5efda2f443ad39d0071a617c77f257d6b41c8181ada648ba1fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bf911af0d24b5efda2f443ad39d0071a617c77f257d6b41c8181ada648ba1fd4->leave($__internal_bf911af0d24b5efda2f443ad39d0071a617c77f257d6b41c8181ada648ba1fd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
