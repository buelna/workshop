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
        $__internal_d1f99edd661fc61bd9ce9d3a0c9b2902e2cba49784e2a929b92a23036ccbabfe = $this->env->getExtension("native_profiler");
        $__internal_d1f99edd661fc61bd9ce9d3a0c9b2902e2cba49784e2a929b92a23036ccbabfe->enter($__internal_d1f99edd661fc61bd9ce9d3a0c9b2902e2cba49784e2a929b92a23036ccbabfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1f99edd661fc61bd9ce9d3a0c9b2902e2cba49784e2a929b92a23036ccbabfe->leave($__internal_d1f99edd661fc61bd9ce9d3a0c9b2902e2cba49784e2a929b92a23036ccbabfe_prof);

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
