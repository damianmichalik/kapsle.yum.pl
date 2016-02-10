<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cc661a258fd6826506d98c0cade551a45c4d15de84401f09eca542fc2cc1b4c9 extends Twig_Template
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
        $__internal_d1925b651e0208d96354d1abccbd6d9aeb4bbdd8789603ccdcaba6a08cacfce8 = $this->env->getExtension("native_profiler");
        $__internal_d1925b651e0208d96354d1abccbd6d9aeb4bbdd8789603ccdcaba6a08cacfce8->enter($__internal_d1925b651e0208d96354d1abccbd6d9aeb4bbdd8789603ccdcaba6a08cacfce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d1925b651e0208d96354d1abccbd6d9aeb4bbdd8789603ccdcaba6a08cacfce8->leave($__internal_d1925b651e0208d96354d1abccbd6d9aeb4bbdd8789603ccdcaba6a08cacfce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
