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
        $__internal_5de41592aedb2b9036ce1e616468f624a16c38a9f715aa7617780b669cbd12fc = $this->env->getExtension("native_profiler");
        $__internal_5de41592aedb2b9036ce1e616468f624a16c38a9f715aa7617780b669cbd12fc->enter($__internal_5de41592aedb2b9036ce1e616468f624a16c38a9f715aa7617780b669cbd12fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5de41592aedb2b9036ce1e616468f624a16c38a9f715aa7617780b669cbd12fc->leave($__internal_5de41592aedb2b9036ce1e616468f624a16c38a9f715aa7617780b669cbd12fc_prof);

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
