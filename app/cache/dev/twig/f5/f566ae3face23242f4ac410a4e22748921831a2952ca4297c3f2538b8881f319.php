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
        $__internal_103c8390a11ce815f52eebfc985c63e67ae2ac66db98a9821d4113cbd62071df = $this->env->getExtension("native_profiler");
        $__internal_103c8390a11ce815f52eebfc985c63e67ae2ac66db98a9821d4113cbd62071df->enter($__internal_103c8390a11ce815f52eebfc985c63e67ae2ac66db98a9821d4113cbd62071df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103c8390a11ce815f52eebfc985c63e67ae2ac66db98a9821d4113cbd62071df->leave($__internal_103c8390a11ce815f52eebfc985c63e67ae2ac66db98a9821d4113cbd62071df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38552779d938db577a74af8d6f1d6697e0243ee433ef778458acc6cd4091daea = $this->env->getExtension("native_profiler");
        $__internal_38552779d938db577a74af8d6f1d6697e0243ee433ef778458acc6cd4091daea->enter($__internal_38552779d938db577a74af8d6f1d6697e0243ee433ef778458acc6cd4091daea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38552779d938db577a74af8d6f1d6697e0243ee433ef778458acc6cd4091daea->leave($__internal_38552779d938db577a74af8d6f1d6697e0243ee433ef778458acc6cd4091daea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c12b70f581be0935ad98e3e870cef317732647a7efe31a53fc9a4903ae0e209c = $this->env->getExtension("native_profiler");
        $__internal_c12b70f581be0935ad98e3e870cef317732647a7efe31a53fc9a4903ae0e209c->enter($__internal_c12b70f581be0935ad98e3e870cef317732647a7efe31a53fc9a4903ae0e209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c12b70f581be0935ad98e3e870cef317732647a7efe31a53fc9a4903ae0e209c->leave($__internal_c12b70f581be0935ad98e3e870cef317732647a7efe31a53fc9a4903ae0e209c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_582195dc89e7275ec0aa1aad52774914451d2146b800d45df31a3deca79d0b58 = $this->env->getExtension("native_profiler");
        $__internal_582195dc89e7275ec0aa1aad52774914451d2146b800d45df31a3deca79d0b58->enter($__internal_582195dc89e7275ec0aa1aad52774914451d2146b800d45df31a3deca79d0b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_582195dc89e7275ec0aa1aad52774914451d2146b800d45df31a3deca79d0b58->leave($__internal_582195dc89e7275ec0aa1aad52774914451d2146b800d45df31a3deca79d0b58_prof);

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
