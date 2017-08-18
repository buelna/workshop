<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4594d2e3e20de653f28eb31869e212e8ee56d3ca526912f84774998e1ddb5fcc extends Twig_Template
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
        $__internal_241faac2b54b4ff07048f788aedab3634fb9b7a922a1a04fe10dbe69cae009e0 = $this->env->getExtension("native_profiler");
        $__internal_241faac2b54b4ff07048f788aedab3634fb9b7a922a1a04fe10dbe69cae009e0->enter($__internal_241faac2b54b4ff07048f788aedab3634fb9b7a922a1a04fe10dbe69cae009e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_241faac2b54b4ff07048f788aedab3634fb9b7a922a1a04fe10dbe69cae009e0->leave($__internal_241faac2b54b4ff07048f788aedab3634fb9b7a922a1a04fe10dbe69cae009e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
