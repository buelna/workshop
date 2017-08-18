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
        $__internal_5dcf6fb0de1130fb52c6cb6f9a04b9051d65259350867cc14343fbe6a1f81f73 = $this->env->getExtension("native_profiler");
        $__internal_5dcf6fb0de1130fb52c6cb6f9a04b9051d65259350867cc14343fbe6a1f81f73->enter($__internal_5dcf6fb0de1130fb52c6cb6f9a04b9051d65259350867cc14343fbe6a1f81f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5dcf6fb0de1130fb52c6cb6f9a04b9051d65259350867cc14343fbe6a1f81f73->leave($__internal_5dcf6fb0de1130fb52c6cb6f9a04b9051d65259350867cc14343fbe6a1f81f73_prof);

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
