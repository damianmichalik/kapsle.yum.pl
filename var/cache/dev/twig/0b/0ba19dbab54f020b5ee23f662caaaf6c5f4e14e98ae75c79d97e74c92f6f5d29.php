<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3db6225e60523ed14bf592d0151754921628c7bbf9f528cc181b3632b864cf97 extends Twig_Template
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
        $__internal_58ef43219a572603a8f7aadc65d5d3736710aa4e94c61161c794b1e08520eea9 = $this->env->getExtension("native_profiler");
        $__internal_58ef43219a572603a8f7aadc65d5d3736710aa4e94c61161c794b1e08520eea9->enter($__internal_58ef43219a572603a8f7aadc65d5d3736710aa4e94c61161c794b1e08520eea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_58ef43219a572603a8f7aadc65d5d3736710aa4e94c61161c794b1e08520eea9->leave($__internal_58ef43219a572603a8f7aadc65d5d3736710aa4e94c61161c794b1e08520eea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
