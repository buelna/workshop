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
        $__internal_4dc958535577cb74dd71a93fe08a9922ece95b6db3daf765bb330525b5293d08 = $this->env->getExtension("native_profiler");
        $__internal_4dc958535577cb74dd71a93fe08a9922ece95b6db3daf765bb330525b5293d08->enter($__internal_4dc958535577cb74dd71a93fe08a9922ece95b6db3daf765bb330525b5293d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4dc958535577cb74dd71a93fe08a9922ece95b6db3daf765bb330525b5293d08->leave($__internal_4dc958535577cb74dd71a93fe08a9922ece95b6db3daf765bb330525b5293d08_prof);

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
