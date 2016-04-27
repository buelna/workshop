<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_99288d0f3e53959a89be3dc5614e7c953ec108c7f744c3743be4bf4a7e06a33f extends Twig_Template
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
        $__internal_df8dd15513ab2fdbd4f437f3065ce8aba1c8dd71809bdb540e6208e18288de5f = $this->env->getExtension("native_profiler");
        $__internal_df8dd15513ab2fdbd4f437f3065ce8aba1c8dd71809bdb540e6208e18288de5f->enter($__internal_df8dd15513ab2fdbd4f437f3065ce8aba1c8dd71809bdb540e6208e18288de5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_df8dd15513ab2fdbd4f437f3065ce8aba1c8dd71809bdb540e6208e18288de5f->leave($__internal_df8dd15513ab2fdbd4f437f3065ce8aba1c8dd71809bdb540e6208e18288de5f_prof);

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
