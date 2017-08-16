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
        $__internal_3dcc85eacac0b02abf854e2de6e1ef7c87b43862a0497c2ac2f6e9023671b7b6 = $this->env->getExtension("native_profiler");
        $__internal_3dcc85eacac0b02abf854e2de6e1ef7c87b43862a0497c2ac2f6e9023671b7b6->enter($__internal_3dcc85eacac0b02abf854e2de6e1ef7c87b43862a0497c2ac2f6e9023671b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3dcc85eacac0b02abf854e2de6e1ef7c87b43862a0497c2ac2f6e9023671b7b6->leave($__internal_3dcc85eacac0b02abf854e2de6e1ef7c87b43862a0497c2ac2f6e9023671b7b6_prof);

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
