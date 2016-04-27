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
        $__internal_8c8332de1db08d8c4a2521a3f2461c77985d737e6f24942472fc9da558c66a0b = $this->env->getExtension("native_profiler");
        $__internal_8c8332de1db08d8c4a2521a3f2461c77985d737e6f24942472fc9da558c66a0b->enter($__internal_8c8332de1db08d8c4a2521a3f2461c77985d737e6f24942472fc9da558c66a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c8332de1db08d8c4a2521a3f2461c77985d737e6f24942472fc9da558c66a0b->leave($__internal_8c8332de1db08d8c4a2521a3f2461c77985d737e6f24942472fc9da558c66a0b_prof);

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
