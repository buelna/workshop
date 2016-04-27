<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_66bea0f92a79cdb1300e19355642fa7106208ace2e3fd87c880f9ff4615fb584 extends Twig_Template
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
        $__internal_30f6ed0fe869bf924f0d244a3b12f8380e4a6438213ff9b2878be93f28cd5a06 = $this->env->getExtension("native_profiler");
        $__internal_30f6ed0fe869bf924f0d244a3b12f8380e4a6438213ff9b2878be93f28cd5a06->enter($__internal_30f6ed0fe869bf924f0d244a3b12f8380e4a6438213ff9b2878be93f28cd5a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30f6ed0fe869bf924f0d244a3b12f8380e4a6438213ff9b2878be93f28cd5a06->leave($__internal_30f6ed0fe869bf924f0d244a3b12f8380e4a6438213ff9b2878be93f28cd5a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
