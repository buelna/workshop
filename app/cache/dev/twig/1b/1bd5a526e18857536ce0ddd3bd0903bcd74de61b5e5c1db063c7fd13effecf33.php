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
        $__internal_62b10899d26e6565284d4d114ca35655789b152ebc2e3c31cd6abe801425d3ef = $this->env->getExtension("native_profiler");
        $__internal_62b10899d26e6565284d4d114ca35655789b152ebc2e3c31cd6abe801425d3ef->enter($__internal_62b10899d26e6565284d4d114ca35655789b152ebc2e3c31cd6abe801425d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_62b10899d26e6565284d4d114ca35655789b152ebc2e3c31cd6abe801425d3ef->leave($__internal_62b10899d26e6565284d4d114ca35655789b152ebc2e3c31cd6abe801425d3ef_prof);

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
