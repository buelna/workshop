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
        $__internal_2cea8a8c4ecf35464cdc7100122127f6fc6a7bcbfc225725d21c0bab75bcfc54 = $this->env->getExtension("native_profiler");
        $__internal_2cea8a8c4ecf35464cdc7100122127f6fc6a7bcbfc225725d21c0bab75bcfc54->enter($__internal_2cea8a8c4ecf35464cdc7100122127f6fc6a7bcbfc225725d21c0bab75bcfc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2cea8a8c4ecf35464cdc7100122127f6fc6a7bcbfc225725d21c0bab75bcfc54->leave($__internal_2cea8a8c4ecf35464cdc7100122127f6fc6a7bcbfc225725d21c0bab75bcfc54_prof);

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
