<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a19127f8e973f0be4f74fb7106a171bf0eda9904145f7eee0ef060770580934d extends Twig_Template
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
        $__internal_a1c7c9e3cb0860dc596350ac9b56a5d6147d3b623b4d4da9600b1050481f84da = $this->env->getExtension("native_profiler");
        $__internal_a1c7c9e3cb0860dc596350ac9b56a5d6147d3b623b4d4da9600b1050481f84da->enter($__internal_a1c7c9e3cb0860dc596350ac9b56a5d6147d3b623b4d4da9600b1050481f84da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a1c7c9e3cb0860dc596350ac9b56a5d6147d3b623b4d4da9600b1050481f84da->leave($__internal_a1c7c9e3cb0860dc596350ac9b56a5d6147d3b623b4d4da9600b1050481f84da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
