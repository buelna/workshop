<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_99288d0f3e53959a89be3dc5614e7c953ec108c7f744c3743be4bf4a7e06a33f extends Twig_Template
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
        $__internal_125f4ea050a386d73c262d08154c482958c3a9679bd55c5e1943c1842692ed1b = $this->env->getExtension("native_profiler");
        $__internal_125f4ea050a386d73c262d08154c482958c3a9679bd55c5e1943c1842692ed1b->enter($__internal_125f4ea050a386d73c262d08154c482958c3a9679bd55c5e1943c1842692ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_125f4ea050a386d73c262d08154c482958c3a9679bd55c5e1943c1842692ed1b->leave($__internal_125f4ea050a386d73c262d08154c482958c3a9679bd55c5e1943c1842692ed1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
