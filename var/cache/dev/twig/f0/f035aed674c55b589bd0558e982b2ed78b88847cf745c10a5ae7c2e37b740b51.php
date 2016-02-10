<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_394b0f2dbfce98f8e140d25be9a6ac89da27673242c3f44c9a14d19e0d1aca5f extends Twig_Template
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
        $__internal_c986b4f1cd8cd61818895b565d4cd3d5c2cf5b24be50468cec90e39b904b1c40 = $this->env->getExtension("native_profiler");
        $__internal_c986b4f1cd8cd61818895b565d4cd3d5c2cf5b24be50468cec90e39b904b1c40->enter($__internal_c986b4f1cd8cd61818895b565d4cd3d5c2cf5b24be50468cec90e39b904b1c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c986b4f1cd8cd61818895b565d4cd3d5c2cf5b24be50468cec90e39b904b1c40->leave($__internal_c986b4f1cd8cd61818895b565d4cd3d5c2cf5b24be50468cec90e39b904b1c40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
