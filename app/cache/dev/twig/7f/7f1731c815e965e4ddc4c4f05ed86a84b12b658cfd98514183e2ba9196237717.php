<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b651fbdec491849398292797dc3567bd7f6c2b61606d395fa57a765bfd5d3953 extends Twig_Template
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
        $__internal_1a33cea227d9348c318a79899f65e8e671617dd683d17ad17b99d8cb92326d56 = $this->env->getExtension("native_profiler");
        $__internal_1a33cea227d9348c318a79899f65e8e671617dd683d17ad17b99d8cb92326d56->enter($__internal_1a33cea227d9348c318a79899f65e8e671617dd683d17ad17b99d8cb92326d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1a33cea227d9348c318a79899f65e8e671617dd683d17ad17b99d8cb92326d56->leave($__internal_1a33cea227d9348c318a79899f65e8e671617dd683d17ad17b99d8cb92326d56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
