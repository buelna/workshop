<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cdd48de5390e031cc4d9fed973fd954ca5eb833893b30a949e69c8433359e1cf extends Twig_Template
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
        $__internal_75fb5ff4f13a6320f2c94f364577ca2cbbdbbe842c22b927c7040825698984a1 = $this->env->getExtension("native_profiler");
        $__internal_75fb5ff4f13a6320f2c94f364577ca2cbbdbbe842c22b927c7040825698984a1->enter($__internal_75fb5ff4f13a6320f2c94f364577ca2cbbdbbe842c22b927c7040825698984a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_75fb5ff4f13a6320f2c94f364577ca2cbbdbbe842c22b927c7040825698984a1->leave($__internal_75fb5ff4f13a6320f2c94f364577ca2cbbdbbe842c22b927c7040825698984a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
