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
        $__internal_1d0ebb355a7066564455947163d8e5e07a1eaaf4194eebf3b43fab3ee770f7f9 = $this->env->getExtension("native_profiler");
        $__internal_1d0ebb355a7066564455947163d8e5e07a1eaaf4194eebf3b43fab3ee770f7f9->enter($__internal_1d0ebb355a7066564455947163d8e5e07a1eaaf4194eebf3b43fab3ee770f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1d0ebb355a7066564455947163d8e5e07a1eaaf4194eebf3b43fab3ee770f7f9->leave($__internal_1d0ebb355a7066564455947163d8e5e07a1eaaf4194eebf3b43fab3ee770f7f9_prof);

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
