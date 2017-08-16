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
        $__internal_75365ea92cb8836b30e0d6409e0fe43486807d951c58f51c549dae3a2e30a30a = $this->env->getExtension("native_profiler");
        $__internal_75365ea92cb8836b30e0d6409e0fe43486807d951c58f51c549dae3a2e30a30a->enter($__internal_75365ea92cb8836b30e0d6409e0fe43486807d951c58f51c549dae3a2e30a30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_75365ea92cb8836b30e0d6409e0fe43486807d951c58f51c549dae3a2e30a30a->leave($__internal_75365ea92cb8836b30e0d6409e0fe43486807d951c58f51c549dae3a2e30a30a_prof);

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
