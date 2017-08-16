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
        $__internal_4177fd7d3a42613ecb1cc774955f318c09e1eb5d5bae3fdf9da0664f82696539 = $this->env->getExtension("native_profiler");
        $__internal_4177fd7d3a42613ecb1cc774955f318c09e1eb5d5bae3fdf9da0664f82696539->enter($__internal_4177fd7d3a42613ecb1cc774955f318c09e1eb5d5bae3fdf9da0664f82696539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4177fd7d3a42613ecb1cc774955f318c09e1eb5d5bae3fdf9da0664f82696539->leave($__internal_4177fd7d3a42613ecb1cc774955f318c09e1eb5d5bae3fdf9da0664f82696539_prof);

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
