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
        $__internal_e3717e4a76b5f6ffdcb1159747566eae788cc33f50e2244c1c6491d9c9f5d87f = $this->env->getExtension("native_profiler");
        $__internal_e3717e4a76b5f6ffdcb1159747566eae788cc33f50e2244c1c6491d9c9f5d87f->enter($__internal_e3717e4a76b5f6ffdcb1159747566eae788cc33f50e2244c1c6491d9c9f5d87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3717e4a76b5f6ffdcb1159747566eae788cc33f50e2244c1c6491d9c9f5d87f->leave($__internal_e3717e4a76b5f6ffdcb1159747566eae788cc33f50e2244c1c6491d9c9f5d87f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5de2fb7914ee4bb14f2b403565b97322c31b351a333502e474ff02ea5c48e690 = $this->env->getExtension("native_profiler");
        $__internal_5de2fb7914ee4bb14f2b403565b97322c31b351a333502e474ff02ea5c48e690->enter($__internal_5de2fb7914ee4bb14f2b403565b97322c31b351a333502e474ff02ea5c48e690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_5de2fb7914ee4bb14f2b403565b97322c31b351a333502e474ff02ea5c48e690->leave($__internal_5de2fb7914ee4bb14f2b403565b97322c31b351a333502e474ff02ea5c48e690_prof);

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
