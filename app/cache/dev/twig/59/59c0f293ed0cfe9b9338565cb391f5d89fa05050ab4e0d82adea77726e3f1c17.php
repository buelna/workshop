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
        $__internal_03ec4fd4e18367146e50ee804ef0213a2a0a706c2d9e25c21db6a69cd3bdd427 = $this->env->getExtension("native_profiler");
        $__internal_03ec4fd4e18367146e50ee804ef0213a2a0a706c2d9e25c21db6a69cd3bdd427->enter($__internal_03ec4fd4e18367146e50ee804ef0213a2a0a706c2d9e25c21db6a69cd3bdd427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_03ec4fd4e18367146e50ee804ef0213a2a0a706c2d9e25c21db6a69cd3bdd427->leave($__internal_03ec4fd4e18367146e50ee804ef0213a2a0a706c2d9e25c21db6a69cd3bdd427_prof);

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
