<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce2a26b858d05a6896dec6a10be03b26b1c6cca9f9c5d1b5046b08771deece9f extends Twig_Template
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
        $__internal_9690f5964415adc7b0ddac2445c8f272037d77a9399eca4b2375dcddb67c6713 = $this->env->getExtension("native_profiler");
        $__internal_9690f5964415adc7b0ddac2445c8f272037d77a9399eca4b2375dcddb67c6713->enter($__internal_9690f5964415adc7b0ddac2445c8f272037d77a9399eca4b2375dcddb67c6713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9690f5964415adc7b0ddac2445c8f272037d77a9399eca4b2375dcddb67c6713->leave($__internal_9690f5964415adc7b0ddac2445c8f272037d77a9399eca4b2375dcddb67c6713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
