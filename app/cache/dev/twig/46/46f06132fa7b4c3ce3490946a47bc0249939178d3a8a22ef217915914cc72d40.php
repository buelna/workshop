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
        $__internal_f344d93b878d47d6a9ed11df1c0f3d3705b5635d3074b0a2867834385e00ce20 = $this->env->getExtension("native_profiler");
        $__internal_f344d93b878d47d6a9ed11df1c0f3d3705b5635d3074b0a2867834385e00ce20->enter($__internal_f344d93b878d47d6a9ed11df1c0f3d3705b5635d3074b0a2867834385e00ce20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f344d93b878d47d6a9ed11df1c0f3d3705b5635d3074b0a2867834385e00ce20->leave($__internal_f344d93b878d47d6a9ed11df1c0f3d3705b5635d3074b0a2867834385e00ce20_prof);

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
