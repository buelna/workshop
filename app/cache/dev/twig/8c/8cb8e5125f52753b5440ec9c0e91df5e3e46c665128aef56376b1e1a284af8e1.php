<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_66bea0f92a79cdb1300e19355642fa7106208ace2e3fd87c880f9ff4615fb584 extends Twig_Template
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
        $__internal_9e31fde7786fcfadb8870c8f922b0bcced0eb941ee239e30ecdb35074d745abb = $this->env->getExtension("native_profiler");
        $__internal_9e31fde7786fcfadb8870c8f922b0bcced0eb941ee239e30ecdb35074d745abb->enter($__internal_9e31fde7786fcfadb8870c8f922b0bcced0eb941ee239e30ecdb35074d745abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9e31fde7786fcfadb8870c8f922b0bcced0eb941ee239e30ecdb35074d745abb->leave($__internal_9e31fde7786fcfadb8870c8f922b0bcced0eb941ee239e30ecdb35074d745abb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
