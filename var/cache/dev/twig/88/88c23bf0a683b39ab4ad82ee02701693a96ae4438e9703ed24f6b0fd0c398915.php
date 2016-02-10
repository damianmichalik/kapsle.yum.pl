<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9c612cb69001ed50a2ef68cccd2b4c6757a6f0768e1905a983bd67158635e720 extends Twig_Template
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
        $__internal_8f9f57c31212e789e8433cb7a408902ee3ac197517daced5a5cd8565576c8dad = $this->env->getExtension("native_profiler");
        $__internal_8f9f57c31212e789e8433cb7a408902ee3ac197517daced5a5cd8565576c8dad->enter($__internal_8f9f57c31212e789e8433cb7a408902ee3ac197517daced5a5cd8565576c8dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8f9f57c31212e789e8433cb7a408902ee3ac197517daced5a5cd8565576c8dad->leave($__internal_8f9f57c31212e789e8433cb7a408902ee3ac197517daced5a5cd8565576c8dad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
