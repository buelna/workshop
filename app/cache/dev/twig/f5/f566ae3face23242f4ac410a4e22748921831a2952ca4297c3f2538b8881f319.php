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
        $__internal_4d3ca64b39554897709e6985b35949b8ceaa29ca07e526399db0f007b3db9c4f = $this->env->getExtension("native_profiler");
        $__internal_4d3ca64b39554897709e6985b35949b8ceaa29ca07e526399db0f007b3db9c4f->enter($__internal_4d3ca64b39554897709e6985b35949b8ceaa29ca07e526399db0f007b3db9c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3ca64b39554897709e6985b35949b8ceaa29ca07e526399db0f007b3db9c4f->leave($__internal_4d3ca64b39554897709e6985b35949b8ceaa29ca07e526399db0f007b3db9c4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49ca2a07fc0ac11cf627ec7b5367a93d8f87b1e92716c756549d91ed5bdf3cc3 = $this->env->getExtension("native_profiler");
        $__internal_49ca2a07fc0ac11cf627ec7b5367a93d8f87b1e92716c756549d91ed5bdf3cc3->enter($__internal_49ca2a07fc0ac11cf627ec7b5367a93d8f87b1e92716c756549d91ed5bdf3cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49ca2a07fc0ac11cf627ec7b5367a93d8f87b1e92716c756549d91ed5bdf3cc3->leave($__internal_49ca2a07fc0ac11cf627ec7b5367a93d8f87b1e92716c756549d91ed5bdf3cc3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64b30870cb0cbf68c210d820232400fe802d532242fc45a4fdda08da16c99f61 = $this->env->getExtension("native_profiler");
        $__internal_64b30870cb0cbf68c210d820232400fe802d532242fc45a4fdda08da16c99f61->enter($__internal_64b30870cb0cbf68c210d820232400fe802d532242fc45a4fdda08da16c99f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64b30870cb0cbf68c210d820232400fe802d532242fc45a4fdda08da16c99f61->leave($__internal_64b30870cb0cbf68c210d820232400fe802d532242fc45a4fdda08da16c99f61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_037531e9c60a14df57ce6feea669e253bdcfa7874f1667ccc2918a8dc06f0148 = $this->env->getExtension("native_profiler");
        $__internal_037531e9c60a14df57ce6feea669e253bdcfa7874f1667ccc2918a8dc06f0148->enter($__internal_037531e9c60a14df57ce6feea669e253bdcfa7874f1667ccc2918a8dc06f0148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_037531e9c60a14df57ce6feea669e253bdcfa7874f1667ccc2918a8dc06f0148->leave($__internal_037531e9c60a14df57ce6feea669e253bdcfa7874f1667ccc2918a8dc06f0148_prof);

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
