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
        $__internal_65baa91076ba7b85450508cdd319700d7e87bf5c359b2f464b0d1341e8fe24f8 = $this->env->getExtension("native_profiler");
        $__internal_65baa91076ba7b85450508cdd319700d7e87bf5c359b2f464b0d1341e8fe24f8->enter($__internal_65baa91076ba7b85450508cdd319700d7e87bf5c359b2f464b0d1341e8fe24f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65baa91076ba7b85450508cdd319700d7e87bf5c359b2f464b0d1341e8fe24f8->leave($__internal_65baa91076ba7b85450508cdd319700d7e87bf5c359b2f464b0d1341e8fe24f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86891a0d5476668914fd5d0287449414bd7a8a3d386a1526b398b261cbd4a6ae = $this->env->getExtension("native_profiler");
        $__internal_86891a0d5476668914fd5d0287449414bd7a8a3d386a1526b398b261cbd4a6ae->enter($__internal_86891a0d5476668914fd5d0287449414bd7a8a3d386a1526b398b261cbd4a6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86891a0d5476668914fd5d0287449414bd7a8a3d386a1526b398b261cbd4a6ae->leave($__internal_86891a0d5476668914fd5d0287449414bd7a8a3d386a1526b398b261cbd4a6ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c205bd053f881de73ad25584e91d25c6ac32b0cd18413bde793fd921fb1a021 = $this->env->getExtension("native_profiler");
        $__internal_8c205bd053f881de73ad25584e91d25c6ac32b0cd18413bde793fd921fb1a021->enter($__internal_8c205bd053f881de73ad25584e91d25c6ac32b0cd18413bde793fd921fb1a021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c205bd053f881de73ad25584e91d25c6ac32b0cd18413bde793fd921fb1a021->leave($__internal_8c205bd053f881de73ad25584e91d25c6ac32b0cd18413bde793fd921fb1a021_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85439b3e1e3a89c89e988893cddeb7043f5fd7b3d6bad228b9ff95fa3d314766 = $this->env->getExtension("native_profiler");
        $__internal_85439b3e1e3a89c89e988893cddeb7043f5fd7b3d6bad228b9ff95fa3d314766->enter($__internal_85439b3e1e3a89c89e988893cddeb7043f5fd7b3d6bad228b9ff95fa3d314766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_85439b3e1e3a89c89e988893cddeb7043f5fd7b3d6bad228b9ff95fa3d314766->leave($__internal_85439b3e1e3a89c89e988893cddeb7043f5fd7b3d6bad228b9ff95fa3d314766_prof);

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
