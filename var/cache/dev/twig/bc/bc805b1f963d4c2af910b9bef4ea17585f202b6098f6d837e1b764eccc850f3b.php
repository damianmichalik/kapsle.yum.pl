<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_79ad3e0fa31f41b84a9f05c6501f9304375c5d1c8358df9ac9f4ff73bcf2fbe4 extends Twig_Template
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
        $__internal_976efae6ff7cae09c114fc1f3172eaa6542bf0fc71e5f44d1af4528be4414fb2 = $this->env->getExtension("native_profiler");
        $__internal_976efae6ff7cae09c114fc1f3172eaa6542bf0fc71e5f44d1af4528be4414fb2->enter($__internal_976efae6ff7cae09c114fc1f3172eaa6542bf0fc71e5f44d1af4528be4414fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_976efae6ff7cae09c114fc1f3172eaa6542bf0fc71e5f44d1af4528be4414fb2->leave($__internal_976efae6ff7cae09c114fc1f3172eaa6542bf0fc71e5f44d1af4528be4414fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
