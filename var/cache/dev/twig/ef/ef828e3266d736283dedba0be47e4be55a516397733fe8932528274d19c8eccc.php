<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7029c9da25c444c2b714e5f0c97edbc3652c01e453098fd25ba7b983c6aa34c7 extends Twig_Template
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
        $__internal_be4561ce2bf89bb196812809183ca14a0e89ccef3b08934e9c43980b95819281 = $this->env->getExtension("native_profiler");
        $__internal_be4561ce2bf89bb196812809183ca14a0e89ccef3b08934e9c43980b95819281->enter($__internal_be4561ce2bf89bb196812809183ca14a0e89ccef3b08934e9c43980b95819281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_be4561ce2bf89bb196812809183ca14a0e89ccef3b08934e9c43980b95819281->leave($__internal_be4561ce2bf89bb196812809183ca14a0e89ccef3b08934e9c43980b95819281_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
