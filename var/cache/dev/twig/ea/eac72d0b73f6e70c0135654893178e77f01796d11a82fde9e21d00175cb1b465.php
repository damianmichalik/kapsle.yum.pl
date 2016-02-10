<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_87e28d23fe4264a5172066a3fa4543a2165205a6fc25ea09b211ccedc1b8db06 extends Twig_Template
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
        $__internal_728b2cd89413bb1eca51162fe629bc9468fb976e4f8cc7565819e631b4acd80a = $this->env->getExtension("native_profiler");
        $__internal_728b2cd89413bb1eca51162fe629bc9468fb976e4f8cc7565819e631b4acd80a->enter($__internal_728b2cd89413bb1eca51162fe629bc9468fb976e4f8cc7565819e631b4acd80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_728b2cd89413bb1eca51162fe629bc9468fb976e4f8cc7565819e631b4acd80a->leave($__internal_728b2cd89413bb1eca51162fe629bc9468fb976e4f8cc7565819e631b4acd80a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
