<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4dd5478c8c251b8f53a374c956a9664029befedfbfd857cbe7f2ba390ad45802 extends Twig_Template
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
        $__internal_af2e3eac6ac02a0ad6454bad4578719fa41ecfc2b487e022765fa94b14959416 = $this->env->getExtension("native_profiler");
        $__internal_af2e3eac6ac02a0ad6454bad4578719fa41ecfc2b487e022765fa94b14959416->enter($__internal_af2e3eac6ac02a0ad6454bad4578719fa41ecfc2b487e022765fa94b14959416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_af2e3eac6ac02a0ad6454bad4578719fa41ecfc2b487e022765fa94b14959416->leave($__internal_af2e3eac6ac02a0ad6454bad4578719fa41ecfc2b487e022765fa94b14959416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
