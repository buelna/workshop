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
        $__internal_fd9853363f6ad123614a1e96cf920ff28448a6a17ff37e39541ed05ca8dc42f3 = $this->env->getExtension("native_profiler");
        $__internal_fd9853363f6ad123614a1e96cf920ff28448a6a17ff37e39541ed05ca8dc42f3->enter($__internal_fd9853363f6ad123614a1e96cf920ff28448a6a17ff37e39541ed05ca8dc42f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fd9853363f6ad123614a1e96cf920ff28448a6a17ff37e39541ed05ca8dc42f3->leave($__internal_fd9853363f6ad123614a1e96cf920ff28448a6a17ff37e39541ed05ca8dc42f3_prof);

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
