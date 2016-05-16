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
        $__internal_7a83e7586b0095ea644db87de477c3d8dfd39b8cbf4edcab4686ae6d9c49f367 = $this->env->getExtension("native_profiler");
        $__internal_7a83e7586b0095ea644db87de477c3d8dfd39b8cbf4edcab4686ae6d9c49f367->enter($__internal_7a83e7586b0095ea644db87de477c3d8dfd39b8cbf4edcab4686ae6d9c49f367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a83e7586b0095ea644db87de477c3d8dfd39b8cbf4edcab4686ae6d9c49f367->leave($__internal_7a83e7586b0095ea644db87de477c3d8dfd39b8cbf4edcab4686ae6d9c49f367_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41957cfeb66a7c38fde93d0d19f925732cfac3dfc56353d112ce81b7b53a73cd = $this->env->getExtension("native_profiler");
        $__internal_41957cfeb66a7c38fde93d0d19f925732cfac3dfc56353d112ce81b7b53a73cd->enter($__internal_41957cfeb66a7c38fde93d0d19f925732cfac3dfc56353d112ce81b7b53a73cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_41957cfeb66a7c38fde93d0d19f925732cfac3dfc56353d112ce81b7b53a73cd->leave($__internal_41957cfeb66a7c38fde93d0d19f925732cfac3dfc56353d112ce81b7b53a73cd_prof);

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
