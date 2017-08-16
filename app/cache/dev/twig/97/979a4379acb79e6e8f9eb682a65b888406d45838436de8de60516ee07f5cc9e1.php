<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_58745f995ce6fc35984c0990337df47bf3bdb0dbbc2c5f5816ecb90f915253a0 extends Twig_Template
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
        $__internal_943586d80c2b76cd8eb421ee8872488053131a3a4f126da6a3354d3729fb4847 = $this->env->getExtension("native_profiler");
        $__internal_943586d80c2b76cd8eb421ee8872488053131a3a4f126da6a3354d3729fb4847->enter($__internal_943586d80c2b76cd8eb421ee8872488053131a3a4f126da6a3354d3729fb4847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_943586d80c2b76cd8eb421ee8872488053131a3a4f126da6a3354d3729fb4847->leave($__internal_943586d80c2b76cd8eb421ee8872488053131a3a4f126da6a3354d3729fb4847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
