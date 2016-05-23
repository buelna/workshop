<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d7af66ac5952f5f52ebb765eccc9ebaca31305478e43c8bd030c37214ece7d9c extends Twig_Template
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
        $__internal_e05db1cd840d7ced97097a53a21fe92d4fef117c2d48ac3c95bdfcfaa7486bde = $this->env->getExtension("native_profiler");
        $__internal_e05db1cd840d7ced97097a53a21fe92d4fef117c2d48ac3c95bdfcfaa7486bde->enter($__internal_e05db1cd840d7ced97097a53a21fe92d4fef117c2d48ac3c95bdfcfaa7486bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e05db1cd840d7ced97097a53a21fe92d4fef117c2d48ac3c95bdfcfaa7486bde->leave($__internal_e05db1cd840d7ced97097a53a21fe92d4fef117c2d48ac3c95bdfcfaa7486bde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
