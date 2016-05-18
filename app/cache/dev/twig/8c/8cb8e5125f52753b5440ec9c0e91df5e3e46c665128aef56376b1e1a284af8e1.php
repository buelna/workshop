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
        $__internal_a5b4502e52056879f23e0405f3ff5fc11071bd23f798fb7222dc6aa3e20f170d = $this->env->getExtension("native_profiler");
        $__internal_a5b4502e52056879f23e0405f3ff5fc11071bd23f798fb7222dc6aa3e20f170d->enter($__internal_a5b4502e52056879f23e0405f3ff5fc11071bd23f798fb7222dc6aa3e20f170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a5b4502e52056879f23e0405f3ff5fc11071bd23f798fb7222dc6aa3e20f170d->leave($__internal_a5b4502e52056879f23e0405f3ff5fc11071bd23f798fb7222dc6aa3e20f170d_prof);

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
