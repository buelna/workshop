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
        $__internal_cd58a0a3bdb85e439b934c67969df4844d25977e005ac8b4fa96c6fa0510242d = $this->env->getExtension("native_profiler");
        $__internal_cd58a0a3bdb85e439b934c67969df4844d25977e005ac8b4fa96c6fa0510242d->enter($__internal_cd58a0a3bdb85e439b934c67969df4844d25977e005ac8b4fa96c6fa0510242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cd58a0a3bdb85e439b934c67969df4844d25977e005ac8b4fa96c6fa0510242d->leave($__internal_cd58a0a3bdb85e439b934c67969df4844d25977e005ac8b4fa96c6fa0510242d_prof);

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
