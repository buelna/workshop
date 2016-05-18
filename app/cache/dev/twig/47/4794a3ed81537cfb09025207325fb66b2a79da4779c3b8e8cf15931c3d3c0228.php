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
        $__internal_0f56d1802674f6250fc6355059b9ff40fd8aee5274fa8c9970720471196dbe2f = $this->env->getExtension("native_profiler");
        $__internal_0f56d1802674f6250fc6355059b9ff40fd8aee5274fa8c9970720471196dbe2f->enter($__internal_0f56d1802674f6250fc6355059b9ff40fd8aee5274fa8c9970720471196dbe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0f56d1802674f6250fc6355059b9ff40fd8aee5274fa8c9970720471196dbe2f->leave($__internal_0f56d1802674f6250fc6355059b9ff40fd8aee5274fa8c9970720471196dbe2f_prof);

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
