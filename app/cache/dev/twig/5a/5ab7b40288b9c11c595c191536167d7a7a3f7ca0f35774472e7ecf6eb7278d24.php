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
        $__internal_997f675228c53e7ff0c376f8b404937394140a6e2dee1dc86c21f19f1ae4895b = $this->env->getExtension("native_profiler");
        $__internal_997f675228c53e7ff0c376f8b404937394140a6e2dee1dc86c21f19f1ae4895b->enter($__internal_997f675228c53e7ff0c376f8b404937394140a6e2dee1dc86c21f19f1ae4895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997f675228c53e7ff0c376f8b404937394140a6e2dee1dc86c21f19f1ae4895b->leave($__internal_997f675228c53e7ff0c376f8b404937394140a6e2dee1dc86c21f19f1ae4895b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4354dba349bb68e8668c278b32ee0603803dfede6cf56af294a27a9d0ead89d1 = $this->env->getExtension("native_profiler");
        $__internal_4354dba349bb68e8668c278b32ee0603803dfede6cf56af294a27a9d0ead89d1->enter($__internal_4354dba349bb68e8668c278b32ee0603803dfede6cf56af294a27a9d0ead89d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_4354dba349bb68e8668c278b32ee0603803dfede6cf56af294a27a9d0ead89d1->leave($__internal_4354dba349bb68e8668c278b32ee0603803dfede6cf56af294a27a9d0ead89d1_prof);

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
