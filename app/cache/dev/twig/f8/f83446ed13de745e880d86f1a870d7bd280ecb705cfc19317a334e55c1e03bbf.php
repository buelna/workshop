<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_690aec1d0b5748aa65901c7f20eb5885047152b2de0d128e5564abcac584dbf3 extends Twig_Template
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
        $__internal_deaaa6ef25b564c20cff6d0cad57e291a93ebed0c2c9b9daf858e8f6fac05bef = $this->env->getExtension("native_profiler");
        $__internal_deaaa6ef25b564c20cff6d0cad57e291a93ebed0c2c9b9daf858e8f6fac05bef->enter($__internal_deaaa6ef25b564c20cff6d0cad57e291a93ebed0c2c9b9daf858e8f6fac05bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_deaaa6ef25b564c20cff6d0cad57e291a93ebed0c2c9b9daf858e8f6fac05bef->leave($__internal_deaaa6ef25b564c20cff6d0cad57e291a93ebed0c2c9b9daf858e8f6fac05bef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
