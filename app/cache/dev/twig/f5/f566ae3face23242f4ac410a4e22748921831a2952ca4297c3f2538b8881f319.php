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
        $__internal_11efc31aa2f3745a5bb92c5de50181f4e2700af416e09314a18313ed42d96ac1 = $this->env->getExtension("native_profiler");
        $__internal_11efc31aa2f3745a5bb92c5de50181f4e2700af416e09314a18313ed42d96ac1->enter($__internal_11efc31aa2f3745a5bb92c5de50181f4e2700af416e09314a18313ed42d96ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11efc31aa2f3745a5bb92c5de50181f4e2700af416e09314a18313ed42d96ac1->leave($__internal_11efc31aa2f3745a5bb92c5de50181f4e2700af416e09314a18313ed42d96ac1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_056e61782fd19373c2e8eaba52a1962a88161c360e3632fe583b98a071617bc8 = $this->env->getExtension("native_profiler");
        $__internal_056e61782fd19373c2e8eaba52a1962a88161c360e3632fe583b98a071617bc8->enter($__internal_056e61782fd19373c2e8eaba52a1962a88161c360e3632fe583b98a071617bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_056e61782fd19373c2e8eaba52a1962a88161c360e3632fe583b98a071617bc8->leave($__internal_056e61782fd19373c2e8eaba52a1962a88161c360e3632fe583b98a071617bc8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4af249d6129c5d8c1e3a653978de5a48c9d9dec34f686fb682757af4618c1f54 = $this->env->getExtension("native_profiler");
        $__internal_4af249d6129c5d8c1e3a653978de5a48c9d9dec34f686fb682757af4618c1f54->enter($__internal_4af249d6129c5d8c1e3a653978de5a48c9d9dec34f686fb682757af4618c1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4af249d6129c5d8c1e3a653978de5a48c9d9dec34f686fb682757af4618c1f54->leave($__internal_4af249d6129c5d8c1e3a653978de5a48c9d9dec34f686fb682757af4618c1f54_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_910bb7bdd16ae5e6197d2f36f576ed4916f27a633725f9b7ec02be9b24bedbe6 = $this->env->getExtension("native_profiler");
        $__internal_910bb7bdd16ae5e6197d2f36f576ed4916f27a633725f9b7ec02be9b24bedbe6->enter($__internal_910bb7bdd16ae5e6197d2f36f576ed4916f27a633725f9b7ec02be9b24bedbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_910bb7bdd16ae5e6197d2f36f576ed4916f27a633725f9b7ec02be9b24bedbe6->leave($__internal_910bb7bdd16ae5e6197d2f36f576ed4916f27a633725f9b7ec02be9b24bedbe6_prof);

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
