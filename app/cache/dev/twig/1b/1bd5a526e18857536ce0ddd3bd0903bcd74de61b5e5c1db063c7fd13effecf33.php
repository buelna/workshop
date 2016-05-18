<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c3ea519c1b9bea7c2f8f44a8df3d8cf79c3709035fe5501aac4aae471861f48c extends Twig_Template
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
        $__internal_f57e06e7dcd0aa0bb2cd3de4e887aefba08b5561861d132c88ee091845cb2283 = $this->env->getExtension("native_profiler");
        $__internal_f57e06e7dcd0aa0bb2cd3de4e887aefba08b5561861d132c88ee091845cb2283->enter($__internal_f57e06e7dcd0aa0bb2cd3de4e887aefba08b5561861d132c88ee091845cb2283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f57e06e7dcd0aa0bb2cd3de4e887aefba08b5561861d132c88ee091845cb2283->leave($__internal_f57e06e7dcd0aa0bb2cd3de4e887aefba08b5561861d132c88ee091845cb2283_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
