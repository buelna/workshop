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
        $__internal_ccce2ada371b1680d5787eda4a7c8c7a116a00b0859c5e49691c33bb02a1dc0d = $this->env->getExtension("native_profiler");
        $__internal_ccce2ada371b1680d5787eda4a7c8c7a116a00b0859c5e49691c33bb02a1dc0d->enter($__internal_ccce2ada371b1680d5787eda4a7c8c7a116a00b0859c5e49691c33bb02a1dc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ccce2ada371b1680d5787eda4a7c8c7a116a00b0859c5e49691c33bb02a1dc0d->leave($__internal_ccce2ada371b1680d5787eda4a7c8c7a116a00b0859c5e49691c33bb02a1dc0d_prof);

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
