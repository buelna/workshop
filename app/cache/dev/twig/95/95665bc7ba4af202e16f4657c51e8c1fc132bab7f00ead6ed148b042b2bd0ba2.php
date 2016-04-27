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
        $__internal_23781c1fd297f01e6ad3aa012993eddc5cb6574232f9555aeda91b7b48b692d8 = $this->env->getExtension("native_profiler");
        $__internal_23781c1fd297f01e6ad3aa012993eddc5cb6574232f9555aeda91b7b48b692d8->enter($__internal_23781c1fd297f01e6ad3aa012993eddc5cb6574232f9555aeda91b7b48b692d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23781c1fd297f01e6ad3aa012993eddc5cb6574232f9555aeda91b7b48b692d8->leave($__internal_23781c1fd297f01e6ad3aa012993eddc5cb6574232f9555aeda91b7b48b692d8_prof);

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
