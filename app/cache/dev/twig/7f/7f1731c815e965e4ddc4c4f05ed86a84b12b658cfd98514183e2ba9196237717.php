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
        $__internal_0a02f49ae31b0b96d701d13911d99d9523271a68924184caa1ab98c3da37d119 = $this->env->getExtension("native_profiler");
        $__internal_0a02f49ae31b0b96d701d13911d99d9523271a68924184caa1ab98c3da37d119->enter($__internal_0a02f49ae31b0b96d701d13911d99d9523271a68924184caa1ab98c3da37d119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0a02f49ae31b0b96d701d13911d99d9523271a68924184caa1ab98c3da37d119->leave($__internal_0a02f49ae31b0b96d701d13911d99d9523271a68924184caa1ab98c3da37d119_prof);

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
