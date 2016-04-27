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
        $__internal_dc0962ef3451d8eb57e65dbdb7d291fd0783118b57ac5d9eae7d7f8dc82a5448 = $this->env->getExtension("native_profiler");
        $__internal_dc0962ef3451d8eb57e65dbdb7d291fd0783118b57ac5d9eae7d7f8dc82a5448->enter($__internal_dc0962ef3451d8eb57e65dbdb7d291fd0783118b57ac5d9eae7d7f8dc82a5448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0962ef3451d8eb57e65dbdb7d291fd0783118b57ac5d9eae7d7f8dc82a5448->leave($__internal_dc0962ef3451d8eb57e65dbdb7d291fd0783118b57ac5d9eae7d7f8dc82a5448_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_992b1c29490561839f7f4ec26fd3be4be6706698c895efe5c384621d1a3976e7 = $this->env->getExtension("native_profiler");
        $__internal_992b1c29490561839f7f4ec26fd3be4be6706698c895efe5c384621d1a3976e7->enter($__internal_992b1c29490561839f7f4ec26fd3be4be6706698c895efe5c384621d1a3976e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_992b1c29490561839f7f4ec26fd3be4be6706698c895efe5c384621d1a3976e7->leave($__internal_992b1c29490561839f7f4ec26fd3be4be6706698c895efe5c384621d1a3976e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6125d53a6f1416ceeaf81cf3759413b13ab0db7f5e42e5ce4a8b03cf1fc63f7 = $this->env->getExtension("native_profiler");
        $__internal_f6125d53a6f1416ceeaf81cf3759413b13ab0db7f5e42e5ce4a8b03cf1fc63f7->enter($__internal_f6125d53a6f1416ceeaf81cf3759413b13ab0db7f5e42e5ce4a8b03cf1fc63f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6125d53a6f1416ceeaf81cf3759413b13ab0db7f5e42e5ce4a8b03cf1fc63f7->leave($__internal_f6125d53a6f1416ceeaf81cf3759413b13ab0db7f5e42e5ce4a8b03cf1fc63f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b4aef896376e3eb6cdf5af31aa5aadeff431b1e7509d1ba9b0d534b45f1a9fd = $this->env->getExtension("native_profiler");
        $__internal_9b4aef896376e3eb6cdf5af31aa5aadeff431b1e7509d1ba9b0d534b45f1a9fd->enter($__internal_9b4aef896376e3eb6cdf5af31aa5aadeff431b1e7509d1ba9b0d534b45f1a9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b4aef896376e3eb6cdf5af31aa5aadeff431b1e7509d1ba9b0d534b45f1a9fd->leave($__internal_9b4aef896376e3eb6cdf5af31aa5aadeff431b1e7509d1ba9b0d534b45f1a9fd_prof);

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
