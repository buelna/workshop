<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce2a26b858d05a6896dec6a10be03b26b1c6cca9f9c5d1b5046b08771deece9f extends Twig_Template
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
        $__internal_11fdebdc7d0214a47bb6671b2edd0f2b58901be1d81957b9ef357449041620bb = $this->env->getExtension("native_profiler");
        $__internal_11fdebdc7d0214a47bb6671b2edd0f2b58901be1d81957b9ef357449041620bb->enter($__internal_11fdebdc7d0214a47bb6671b2edd0f2b58901be1d81957b9ef357449041620bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_11fdebdc7d0214a47bb6671b2edd0f2b58901be1d81957b9ef357449041620bb->leave($__internal_11fdebdc7d0214a47bb6671b2edd0f2b58901be1d81957b9ef357449041620bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
