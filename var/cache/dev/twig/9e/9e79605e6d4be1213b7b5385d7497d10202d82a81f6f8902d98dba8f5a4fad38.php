<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7b30729a6a000bf6fc936057db0d5691a4c308053a86220eedfb90b540bf8c12 extends Twig_Template
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
        $__internal_a494bd28589978429f72f804d6cee551bc74306e78c5afb20af2fc05e667338c = $this->env->getExtension("native_profiler");
        $__internal_a494bd28589978429f72f804d6cee551bc74306e78c5afb20af2fc05e667338c->enter($__internal_a494bd28589978429f72f804d6cee551bc74306e78c5afb20af2fc05e667338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a494bd28589978429f72f804d6cee551bc74306e78c5afb20af2fc05e667338c->leave($__internal_a494bd28589978429f72f804d6cee551bc74306e78c5afb20af2fc05e667338c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
