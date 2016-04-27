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
        $__internal_7dd1c1edf92e874d5b1580bb8e0f49b4c28af0b2d0ce8cb4dcd6c8846368b874 = $this->env->getExtension("native_profiler");
        $__internal_7dd1c1edf92e874d5b1580bb8e0f49b4c28af0b2d0ce8cb4dcd6c8846368b874->enter($__internal_7dd1c1edf92e874d5b1580bb8e0f49b4c28af0b2d0ce8cb4dcd6c8846368b874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7dd1c1edf92e874d5b1580bb8e0f49b4c28af0b2d0ce8cb4dcd6c8846368b874->leave($__internal_7dd1c1edf92e874d5b1580bb8e0f49b4c28af0b2d0ce8cb4dcd6c8846368b874_prof);

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
