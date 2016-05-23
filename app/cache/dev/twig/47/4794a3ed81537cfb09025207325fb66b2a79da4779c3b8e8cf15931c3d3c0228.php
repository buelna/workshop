<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_60d9e39e764fb776e681a23812af4d6723332bfc70b43ac081a874f9b1c83080 extends Twig_Template
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
        $__internal_2f11bbf33a5793eafeaab4c10cfdf7ce7a31d6181df16c6c955a0ba665b3ccce = $this->env->getExtension("native_profiler");
        $__internal_2f11bbf33a5793eafeaab4c10cfdf7ce7a31d6181df16c6c955a0ba665b3ccce->enter($__internal_2f11bbf33a5793eafeaab4c10cfdf7ce7a31d6181df16c6c955a0ba665b3ccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f11bbf33a5793eafeaab4c10cfdf7ce7a31d6181df16c6c955a0ba665b3ccce->leave($__internal_2f11bbf33a5793eafeaab4c10cfdf7ce7a31d6181df16c6c955a0ba665b3ccce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
