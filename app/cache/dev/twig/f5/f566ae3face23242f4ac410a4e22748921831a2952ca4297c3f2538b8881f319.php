<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d3e8424913a46c4fbd1e1272019fcb93d29a22ae9381c6c5357ccd980b1ea0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e345b90b05085908531b2bf83170797fd68b2d6a491c554dfb983c4d67b6886 = $this->env->getExtension("native_profiler");
        $__internal_1e345b90b05085908531b2bf83170797fd68b2d6a491c554dfb983c4d67b6886->enter($__internal_1e345b90b05085908531b2bf83170797fd68b2d6a491c554dfb983c4d67b6886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e345b90b05085908531b2bf83170797fd68b2d6a491c554dfb983c4d67b6886->leave($__internal_1e345b90b05085908531b2bf83170797fd68b2d6a491c554dfb983c4d67b6886_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14c91591e63ec8141969dbbd577db8e4d75621d5aa42033a351fa2f63582254e = $this->env->getExtension("native_profiler");
        $__internal_14c91591e63ec8141969dbbd577db8e4d75621d5aa42033a351fa2f63582254e->enter($__internal_14c91591e63ec8141969dbbd577db8e4d75621d5aa42033a351fa2f63582254e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14c91591e63ec8141969dbbd577db8e4d75621d5aa42033a351fa2f63582254e->leave($__internal_14c91591e63ec8141969dbbd577db8e4d75621d5aa42033a351fa2f63582254e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02f8924e3bb45b542c2f6c7ad8d08f42d0278291c0fd298477a4fe965a823730 = $this->env->getExtension("native_profiler");
        $__internal_02f8924e3bb45b542c2f6c7ad8d08f42d0278291c0fd298477a4fe965a823730->enter($__internal_02f8924e3bb45b542c2f6c7ad8d08f42d0278291c0fd298477a4fe965a823730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02f8924e3bb45b542c2f6c7ad8d08f42d0278291c0fd298477a4fe965a823730->leave($__internal_02f8924e3bb45b542c2f6c7ad8d08f42d0278291c0fd298477a4fe965a823730_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e45143b46b9382d2136af4328fdcd61fa15c8e9bae1f31ee1052cd84af16a7e0 = $this->env->getExtension("native_profiler");
        $__internal_e45143b46b9382d2136af4328fdcd61fa15c8e9bae1f31ee1052cd84af16a7e0->enter($__internal_e45143b46b9382d2136af4328fdcd61fa15c8e9bae1f31ee1052cd84af16a7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e45143b46b9382d2136af4328fdcd61fa15c8e9bae1f31ee1052cd84af16a7e0->leave($__internal_e45143b46b9382d2136af4328fdcd61fa15c8e9bae1f31ee1052cd84af16a7e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
