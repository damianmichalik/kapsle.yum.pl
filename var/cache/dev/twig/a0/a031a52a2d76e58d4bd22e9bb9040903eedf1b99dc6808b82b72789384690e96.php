<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ab482e30e1b3b2fa39e304fbda9b07cedf59c32eed43129b0b1b6bdf52d44bba extends Twig_Template
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
        $__internal_ba6abe0ce1276ff762078168b59cb4b46514dc3bbbaaac8acb9356f164878ff3 = $this->env->getExtension("native_profiler");
        $__internal_ba6abe0ce1276ff762078168b59cb4b46514dc3bbbaaac8acb9356f164878ff3->enter($__internal_ba6abe0ce1276ff762078168b59cb4b46514dc3bbbaaac8acb9356f164878ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ba6abe0ce1276ff762078168b59cb4b46514dc3bbbaaac8acb9356f164878ff3->leave($__internal_ba6abe0ce1276ff762078168b59cb4b46514dc3bbbaaac8acb9356f164878ff3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
