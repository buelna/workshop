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
        $__internal_17db5de7b5798f2b30879c647a138a622124d54ef9ea5c15be734b04c2bfd622 = $this->env->getExtension("native_profiler");
        $__internal_17db5de7b5798f2b30879c647a138a622124d54ef9ea5c15be734b04c2bfd622->enter($__internal_17db5de7b5798f2b30879c647a138a622124d54ef9ea5c15be734b04c2bfd622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17db5de7b5798f2b30879c647a138a622124d54ef9ea5c15be734b04c2bfd622->leave($__internal_17db5de7b5798f2b30879c647a138a622124d54ef9ea5c15be734b04c2bfd622_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aca27ae245cdb2d98a5d48e5867856258ba058f3500a5f9bb2eef466e9d3c85f = $this->env->getExtension("native_profiler");
        $__internal_aca27ae245cdb2d98a5d48e5867856258ba058f3500a5f9bb2eef466e9d3c85f->enter($__internal_aca27ae245cdb2d98a5d48e5867856258ba058f3500a5f9bb2eef466e9d3c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aca27ae245cdb2d98a5d48e5867856258ba058f3500a5f9bb2eef466e9d3c85f->leave($__internal_aca27ae245cdb2d98a5d48e5867856258ba058f3500a5f9bb2eef466e9d3c85f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_985faf9b712455cc599601a4b4e4c11428449ecc7991b30e1d9986dd86b4ac65 = $this->env->getExtension("native_profiler");
        $__internal_985faf9b712455cc599601a4b4e4c11428449ecc7991b30e1d9986dd86b4ac65->enter($__internal_985faf9b712455cc599601a4b4e4c11428449ecc7991b30e1d9986dd86b4ac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_985faf9b712455cc599601a4b4e4c11428449ecc7991b30e1d9986dd86b4ac65->leave($__internal_985faf9b712455cc599601a4b4e4c11428449ecc7991b30e1d9986dd86b4ac65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57cdec73b41d32fbb2982f06b5877f37ca904e2e8a6eae74eab88375725648bf = $this->env->getExtension("native_profiler");
        $__internal_57cdec73b41d32fbb2982f06b5877f37ca904e2e8a6eae74eab88375725648bf->enter($__internal_57cdec73b41d32fbb2982f06b5877f37ca904e2e8a6eae74eab88375725648bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_57cdec73b41d32fbb2982f06b5877f37ca904e2e8a6eae74eab88375725648bf->leave($__internal_57cdec73b41d32fbb2982f06b5877f37ca904e2e8a6eae74eab88375725648bf_prof);

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
