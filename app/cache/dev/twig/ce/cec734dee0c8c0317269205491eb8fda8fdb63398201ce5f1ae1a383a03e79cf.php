<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_01b3d2fb8fe8a10c8d8cca1ecba716d09b87973fd157c7aa1900e84b9dd2ad39 extends Twig_Template
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
        $__internal_891fe85e5ea86fd7a996c3a80b39cd9511032fbe23a11d3a8b7fc4edfe7d09b3 = $this->env->getExtension("native_profiler");
        $__internal_891fe85e5ea86fd7a996c3a80b39cd9511032fbe23a11d3a8b7fc4edfe7d09b3->enter($__internal_891fe85e5ea86fd7a996c3a80b39cd9511032fbe23a11d3a8b7fc4edfe7d09b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_891fe85e5ea86fd7a996c3a80b39cd9511032fbe23a11d3a8b7fc4edfe7d09b3->leave($__internal_891fe85e5ea86fd7a996c3a80b39cd9511032fbe23a11d3a8b7fc4edfe7d09b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
