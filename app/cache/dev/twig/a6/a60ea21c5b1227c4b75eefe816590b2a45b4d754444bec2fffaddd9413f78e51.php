<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_00f7b51dfb266b5886be3e9d7d74d173412997dc5df027e4621481dbdfb52dda extends Twig_Template
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
        $__internal_1e599d89108823e98759d6b6e28357b359ebcb44621e3117241525f626362b63 = $this->env->getExtension("native_profiler");
        $__internal_1e599d89108823e98759d6b6e28357b359ebcb44621e3117241525f626362b63->enter($__internal_1e599d89108823e98759d6b6e28357b359ebcb44621e3117241525f626362b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1e599d89108823e98759d6b6e28357b359ebcb44621e3117241525f626362b63->leave($__internal_1e599d89108823e98759d6b6e28357b359ebcb44621e3117241525f626362b63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
