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
        $__internal_c9059469e0458ec7d66d810e80826c2b9ed3975a6f06afb6766cde859a592a19 = $this->env->getExtension("native_profiler");
        $__internal_c9059469e0458ec7d66d810e80826c2b9ed3975a6f06afb6766cde859a592a19->enter($__internal_c9059469e0458ec7d66d810e80826c2b9ed3975a6f06afb6766cde859a592a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c9059469e0458ec7d66d810e80826c2b9ed3975a6f06afb6766cde859a592a19->leave($__internal_c9059469e0458ec7d66d810e80826c2b9ed3975a6f06afb6766cde859a592a19_prof);

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
