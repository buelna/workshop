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
        $__internal_54ec4d2d8c7158dbda0787f719ed72e62e2f5e7d9fb96fedcf2caa598b22b64c = $this->env->getExtension("native_profiler");
        $__internal_54ec4d2d8c7158dbda0787f719ed72e62e2f5e7d9fb96fedcf2caa598b22b64c->enter($__internal_54ec4d2d8c7158dbda0787f719ed72e62e2f5e7d9fb96fedcf2caa598b22b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54ec4d2d8c7158dbda0787f719ed72e62e2f5e7d9fb96fedcf2caa598b22b64c->leave($__internal_54ec4d2d8c7158dbda0787f719ed72e62e2f5e7d9fb96fedcf2caa598b22b64c_prof);

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
