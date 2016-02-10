<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8d74068396c20c7d76bed4a1e5e3bffcd950016e0b24c9e423e15f8f303e06d4 extends Twig_Template
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
        $__internal_f316201f231ad5d7bf203cabc3506f3aac2c90007bb069331589a24cafdd1e92 = $this->env->getExtension("native_profiler");
        $__internal_f316201f231ad5d7bf203cabc3506f3aac2c90007bb069331589a24cafdd1e92->enter($__internal_f316201f231ad5d7bf203cabc3506f3aac2c90007bb069331589a24cafdd1e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f316201f231ad5d7bf203cabc3506f3aac2c90007bb069331589a24cafdd1e92->leave($__internal_f316201f231ad5d7bf203cabc3506f3aac2c90007bb069331589a24cafdd1e92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
