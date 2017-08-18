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
        $__internal_340f9f347f418413411f9dc1d194122ccdd0c5fc57bc67df4c75b18f25301dd4 = $this->env->getExtension("native_profiler");
        $__internal_340f9f347f418413411f9dc1d194122ccdd0c5fc57bc67df4c75b18f25301dd4->enter($__internal_340f9f347f418413411f9dc1d194122ccdd0c5fc57bc67df4c75b18f25301dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_340f9f347f418413411f9dc1d194122ccdd0c5fc57bc67df4c75b18f25301dd4->leave($__internal_340f9f347f418413411f9dc1d194122ccdd0c5fc57bc67df4c75b18f25301dd4_prof);

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
