<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_eaa925686898dc7de11fe43064639ffcbee8b953705a06de38b231bbac294b0a extends Twig_Template
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
        $__internal_209b0350ac5ea48ee31b74815eb304469415d2db76e527e30eb404b522a513e1 = $this->env->getExtension("native_profiler");
        $__internal_209b0350ac5ea48ee31b74815eb304469415d2db76e527e30eb404b522a513e1->enter($__internal_209b0350ac5ea48ee31b74815eb304469415d2db76e527e30eb404b522a513e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_209b0350ac5ea48ee31b74815eb304469415d2db76e527e30eb404b522a513e1->leave($__internal_209b0350ac5ea48ee31b74815eb304469415d2db76e527e30eb404b522a513e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
