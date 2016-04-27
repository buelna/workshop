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
        $__internal_18a74d353f61fb23f9d4c92fe311a7fdebaf4507d4a6de5a673ae6a323a89f22 = $this->env->getExtension("native_profiler");
        $__internal_18a74d353f61fb23f9d4c92fe311a7fdebaf4507d4a6de5a673ae6a323a89f22->enter($__internal_18a74d353f61fb23f9d4c92fe311a7fdebaf4507d4a6de5a673ae6a323a89f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_18a74d353f61fb23f9d4c92fe311a7fdebaf4507d4a6de5a673ae6a323a89f22->leave($__internal_18a74d353f61fb23f9d4c92fe311a7fdebaf4507d4a6de5a673ae6a323a89f22_prof);

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
