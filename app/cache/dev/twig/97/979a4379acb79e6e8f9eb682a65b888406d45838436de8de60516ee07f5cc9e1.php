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
        $__internal_8a5e2ad6488c8f695243872cdd98571a469b2bf2a66315b3932436ed2d08bb75 = $this->env->getExtension("native_profiler");
        $__internal_8a5e2ad6488c8f695243872cdd98571a469b2bf2a66315b3932436ed2d08bb75->enter($__internal_8a5e2ad6488c8f695243872cdd98571a469b2bf2a66315b3932436ed2d08bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8a5e2ad6488c8f695243872cdd98571a469b2bf2a66315b3932436ed2d08bb75->leave($__internal_8a5e2ad6488c8f695243872cdd98571a469b2bf2a66315b3932436ed2d08bb75_prof);

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
