<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_faec84c7c932e83b759b1377774958ffadb7737e2cf4c962bed1f49f2098b531 extends Twig_Template
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
        $__internal_fce8f9e994fb0935f080c27aa3f58bc6728c01f420fc964d8e066ecd620e641f = $this->env->getExtension("native_profiler");
        $__internal_fce8f9e994fb0935f080c27aa3f58bc6728c01f420fc964d8e066ecd620e641f->enter($__internal_fce8f9e994fb0935f080c27aa3f58bc6728c01f420fc964d8e066ecd620e641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fce8f9e994fb0935f080c27aa3f58bc6728c01f420fc964d8e066ecd620e641f->leave($__internal_fce8f9e994fb0935f080c27aa3f58bc6728c01f420fc964d8e066ecd620e641f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
