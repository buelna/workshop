<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b077db0e6fd7ef545aba60adfc202b75b8006287715d5d37c2e3746e2b5c43ab extends Twig_Template
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
        $__internal_78e8b52932ab411a1fcb473d6a08fadad4eddcff91cb17c3438ff3ef732b0dcd = $this->env->getExtension("native_profiler");
        $__internal_78e8b52932ab411a1fcb473d6a08fadad4eddcff91cb17c3438ff3ef732b0dcd->enter($__internal_78e8b52932ab411a1fcb473d6a08fadad4eddcff91cb17c3438ff3ef732b0dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_78e8b52932ab411a1fcb473d6a08fadad4eddcff91cb17c3438ff3ef732b0dcd->leave($__internal_78e8b52932ab411a1fcb473d6a08fadad4eddcff91cb17c3438ff3ef732b0dcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
