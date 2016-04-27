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
        $__internal_2778ef0d37400fc4a2ad02ad17ebecf5ce11a362c1842b82a8ec86ed5f78c34b = $this->env->getExtension("native_profiler");
        $__internal_2778ef0d37400fc4a2ad02ad17ebecf5ce11a362c1842b82a8ec86ed5f78c34b->enter($__internal_2778ef0d37400fc4a2ad02ad17ebecf5ce11a362c1842b82a8ec86ed5f78c34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2778ef0d37400fc4a2ad02ad17ebecf5ce11a362c1842b82a8ec86ed5f78c34b->leave($__internal_2778ef0d37400fc4a2ad02ad17ebecf5ce11a362c1842b82a8ec86ed5f78c34b_prof);

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
