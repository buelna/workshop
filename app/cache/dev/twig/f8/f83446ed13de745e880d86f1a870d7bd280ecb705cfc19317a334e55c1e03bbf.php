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
        $__internal_058358602c09c7843d5b6ef9ad4de501cbb96fb166df335d67c40f83fcdf24c2 = $this->env->getExtension("native_profiler");
        $__internal_058358602c09c7843d5b6ef9ad4de501cbb96fb166df335d67c40f83fcdf24c2->enter($__internal_058358602c09c7843d5b6ef9ad4de501cbb96fb166df335d67c40f83fcdf24c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_058358602c09c7843d5b6ef9ad4de501cbb96fb166df335d67c40f83fcdf24c2->leave($__internal_058358602c09c7843d5b6ef9ad4de501cbb96fb166df335d67c40f83fcdf24c2_prof);

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
