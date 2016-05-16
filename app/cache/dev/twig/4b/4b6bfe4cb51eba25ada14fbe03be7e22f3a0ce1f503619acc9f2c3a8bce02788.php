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
        $__internal_5cb46b0cecf3700b401c449c45b7e5326c769600c6c0a9c43966f1bf8be61acd = $this->env->getExtension("native_profiler");
        $__internal_5cb46b0cecf3700b401c449c45b7e5326c769600c6c0a9c43966f1bf8be61acd->enter($__internal_5cb46b0cecf3700b401c449c45b7e5326c769600c6c0a9c43966f1bf8be61acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5cb46b0cecf3700b401c449c45b7e5326c769600c6c0a9c43966f1bf8be61acd->leave($__internal_5cb46b0cecf3700b401c449c45b7e5326c769600c6c0a9c43966f1bf8be61acd_prof);

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
