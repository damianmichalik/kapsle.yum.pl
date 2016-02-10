<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_267abdc6823e03238bb7152b997e0dcf6a3261ead552e58417d9336ee79d2c2c extends Twig_Template
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
        $__internal_1839965e603a14e4ebe7513691c4cd159a381a11cdd42f58857299c9fd4339df = $this->env->getExtension("native_profiler");
        $__internal_1839965e603a14e4ebe7513691c4cd159a381a11cdd42f58857299c9fd4339df->enter($__internal_1839965e603a14e4ebe7513691c4cd159a381a11cdd42f58857299c9fd4339df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1839965e603a14e4ebe7513691c4cd159a381a11cdd42f58857299c9fd4339df->leave($__internal_1839965e603a14e4ebe7513691c4cd159a381a11cdd42f58857299c9fd4339df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
