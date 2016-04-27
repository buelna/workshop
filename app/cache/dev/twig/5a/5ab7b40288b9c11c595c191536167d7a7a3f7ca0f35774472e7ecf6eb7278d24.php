<?php

/* :default:index.html.twig */
class __TwigTemplate_f7c566bd6eb417f6dcaaf5bfe37759f059e720258c0fc175319c0b58282b3819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a32c58f881052265ef13b21cce427c33422b8be4867cb8146a039abd416b15a5 = $this->env->getExtension("native_profiler");
        $__internal_a32c58f881052265ef13b21cce427c33422b8be4867cb8146a039abd416b15a5->enter($__internal_a32c58f881052265ef13b21cce427c33422b8be4867cb8146a039abd416b15a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32c58f881052265ef13b21cce427c33422b8be4867cb8146a039abd416b15a5->leave($__internal_a32c58f881052265ef13b21cce427c33422b8be4867cb8146a039abd416b15a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2671baa1932ad2db891d6b59305c5e9bd487d89437d1277f956d7a46dbe0228 = $this->env->getExtension("native_profiler");
        $__internal_a2671baa1932ad2db891d6b59305c5e9bd487d89437d1277f956d7a46dbe0228->enter($__internal_a2671baa1932ad2db891d6b59305c5e9bd487d89437d1277f956d7a46dbe0228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_a2671baa1932ad2db891d6b59305c5e9bd487d89437d1277f956d7a46dbe0228->leave($__internal_a2671baa1932ad2db891d6b59305c5e9bd487d89437d1277f956d7a46dbe0228_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
