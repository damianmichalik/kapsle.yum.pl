<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7afe3e0b661b0b213828aee69d6ecc0021cd8d4cbfcc4ae44418925d61d5398d extends Twig_Template
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
        $__internal_336e5f512474f93ae50f0bcc6bc066e0258d47093c2d2331e6ce4d7d561285e5 = $this->env->getExtension("native_profiler");
        $__internal_336e5f512474f93ae50f0bcc6bc066e0258d47093c2d2331e6ce4d7d561285e5->enter($__internal_336e5f512474f93ae50f0bcc6bc066e0258d47093c2d2331e6ce4d7d561285e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_336e5f512474f93ae50f0bcc6bc066e0258d47093c2d2331e6ce4d7d561285e5->leave($__internal_336e5f512474f93ae50f0bcc6bc066e0258d47093c2d2331e6ce4d7d561285e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
