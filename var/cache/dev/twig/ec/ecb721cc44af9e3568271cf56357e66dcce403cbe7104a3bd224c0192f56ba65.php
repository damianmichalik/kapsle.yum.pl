<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4dc08601b0ca123766a16cfd97b4d676368254c6b9694ad89242758fdf53d02a extends Twig_Template
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
        $__internal_8d3e9fedc8d96c853c0608d945a95fbbed359cba7021a088ae004092280a7d53 = $this->env->getExtension("native_profiler");
        $__internal_8d3e9fedc8d96c853c0608d945a95fbbed359cba7021a088ae004092280a7d53->enter($__internal_8d3e9fedc8d96c853c0608d945a95fbbed359cba7021a088ae004092280a7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8d3e9fedc8d96c853c0608d945a95fbbed359cba7021a088ae004092280a7d53->leave($__internal_8d3e9fedc8d96c853c0608d945a95fbbed359cba7021a088ae004092280a7d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
