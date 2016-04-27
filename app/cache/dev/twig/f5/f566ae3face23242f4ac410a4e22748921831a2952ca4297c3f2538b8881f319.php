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
        $__internal_3ce07fdbe568f1e3f9689932f1374b92f98e974849c3c0d4f6144cc36455e638 = $this->env->getExtension("native_profiler");
        $__internal_3ce07fdbe568f1e3f9689932f1374b92f98e974849c3c0d4f6144cc36455e638->enter($__internal_3ce07fdbe568f1e3f9689932f1374b92f98e974849c3c0d4f6144cc36455e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce07fdbe568f1e3f9689932f1374b92f98e974849c3c0d4f6144cc36455e638->leave($__internal_3ce07fdbe568f1e3f9689932f1374b92f98e974849c3c0d4f6144cc36455e638_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c4e5d732fec3dce65c3c6a0eec2d327e8b0d0323436c11f500f65afb6d6f0f8 = $this->env->getExtension("native_profiler");
        $__internal_7c4e5d732fec3dce65c3c6a0eec2d327e8b0d0323436c11f500f65afb6d6f0f8->enter($__internal_7c4e5d732fec3dce65c3c6a0eec2d327e8b0d0323436c11f500f65afb6d6f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c4e5d732fec3dce65c3c6a0eec2d327e8b0d0323436c11f500f65afb6d6f0f8->leave($__internal_7c4e5d732fec3dce65c3c6a0eec2d327e8b0d0323436c11f500f65afb6d6f0f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42cce3b6523f29c85d97dc23f620255189f5d47aa77d71279602043d47877097 = $this->env->getExtension("native_profiler");
        $__internal_42cce3b6523f29c85d97dc23f620255189f5d47aa77d71279602043d47877097->enter($__internal_42cce3b6523f29c85d97dc23f620255189f5d47aa77d71279602043d47877097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42cce3b6523f29c85d97dc23f620255189f5d47aa77d71279602043d47877097->leave($__internal_42cce3b6523f29c85d97dc23f620255189f5d47aa77d71279602043d47877097_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0c234de97b193180c2be2e12fabaac0d62f948ce22bd3e88729e3705071e4f8 = $this->env->getExtension("native_profiler");
        $__internal_d0c234de97b193180c2be2e12fabaac0d62f948ce22bd3e88729e3705071e4f8->enter($__internal_d0c234de97b193180c2be2e12fabaac0d62f948ce22bd3e88729e3705071e4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d0c234de97b193180c2be2e12fabaac0d62f948ce22bd3e88729e3705071e4f8->leave($__internal_d0c234de97b193180c2be2e12fabaac0d62f948ce22bd3e88729e3705071e4f8_prof);

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
