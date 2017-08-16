<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_055222557e6233276c36315a90383dcfac23db3f6161cb1154cba60b1a1f4076 extends Twig_Template
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
        $__internal_0218a69b4c9001eefdb202da33529a79722ba1514a1e87c8eb5f18601a9b42ce = $this->env->getExtension("native_profiler");
        $__internal_0218a69b4c9001eefdb202da33529a79722ba1514a1e87c8eb5f18601a9b42ce->enter($__internal_0218a69b4c9001eefdb202da33529a79722ba1514a1e87c8eb5f18601a9b42ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0218a69b4c9001eefdb202da33529a79722ba1514a1e87c8eb5f18601a9b42ce->leave($__internal_0218a69b4c9001eefdb202da33529a79722ba1514a1e87c8eb5f18601a9b42ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
