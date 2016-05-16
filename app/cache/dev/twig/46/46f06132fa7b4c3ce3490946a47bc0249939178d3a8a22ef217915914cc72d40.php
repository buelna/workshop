<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1846791756bddbf83e94f4d246c80a69ccb456a86b227cb52a6d21027297a483 extends Twig_Template
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
        $__internal_99045dc6f4cc9f2349067aafc64d14167df005bd7bc2c9207b6abdcef6e0b2d2 = $this->env->getExtension("native_profiler");
        $__internal_99045dc6f4cc9f2349067aafc64d14167df005bd7bc2c9207b6abdcef6e0b2d2->enter($__internal_99045dc6f4cc9f2349067aafc64d14167df005bd7bc2c9207b6abdcef6e0b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_99045dc6f4cc9f2349067aafc64d14167df005bd7bc2c9207b6abdcef6e0b2d2->leave($__internal_99045dc6f4cc9f2349067aafc64d14167df005bd7bc2c9207b6abdcef6e0b2d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
