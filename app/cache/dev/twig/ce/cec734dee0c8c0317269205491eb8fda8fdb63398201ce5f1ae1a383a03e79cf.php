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
        $__internal_0359ac2445ae5f181f61eb09e1a83c0eee80c334128fdbcf6b6efa56b35dddd1 = $this->env->getExtension("native_profiler");
        $__internal_0359ac2445ae5f181f61eb09e1a83c0eee80c334128fdbcf6b6efa56b35dddd1->enter($__internal_0359ac2445ae5f181f61eb09e1a83c0eee80c334128fdbcf6b6efa56b35dddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0359ac2445ae5f181f61eb09e1a83c0eee80c334128fdbcf6b6efa56b35dddd1->leave($__internal_0359ac2445ae5f181f61eb09e1a83c0eee80c334128fdbcf6b6efa56b35dddd1_prof);

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
