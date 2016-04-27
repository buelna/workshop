<?php

/* AppBundle:Default:comite.html.twig */
class __TwigTemplate_35eb588dc680e2dd6ac1b74ed594ca5a86e063a0790d92205973d14236ce9991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:comite.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'cols' => array($this, 'block_cols'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae7abff14b9a8f97a4896551bc2730f74478338901d98b5d62ad993bac9f5877 = $this->env->getExtension("native_profiler");
        $__internal_ae7abff14b9a8f97a4896551bc2730f74478338901d98b5d62ad993bac9f5877->enter($__internal_ae7abff14b9a8f97a4896551bc2730f74478338901d98b5d62ad993bac9f5877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7abff14b9a8f97a4896551bc2730f74478338901d98b5d62ad993bac9f5877->leave($__internal_ae7abff14b9a8f97a4896551bc2730f74478338901d98b5d62ad993bac9f5877_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d48ef3151bbd5274ebc336b91f9cbd4904fed85c74fb0e0f905f3a04fee3a70 = $this->env->getExtension("native_profiler");
        $__internal_2d48ef3151bbd5274ebc336b91f9cbd4904fed85c74fb0e0f905f3a04fee3a70->enter($__internal_2d48ef3151bbd5274ebc336b91f9cbd4904fed85c74fb0e0f905f3a04fee3a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chairs</h4>
Arnoldo Díaz-Ramírez (ITM, México)<br>
Juan Pablo García (UABC, México)
<br><br>
<h4>Program Committee</h4>
<h5>To be announced...</h5>
 </p>
";
        
        $__internal_2d48ef3151bbd5274ebc336b91f9cbd4904fed85c74fb0e0f905f3a04fee3a70->leave($__internal_2d48ef3151bbd5274ebc336b91f9cbd4904fed85c74fb0e0f905f3a04fee3a70_prof);

    }

    // line 13
    public function block_cols($context, array $blocks = array())
    {
        $__internal_186d3e734da22f6d344f9090d12e6afd94742b541251f731f7f87e56adc39328 = $this->env->getExtension("native_profiler");
        $__internal_186d3e734da22f6d344f9090d12e6afd94742b541251f731f7f87e56adc39328->enter($__internal_186d3e734da22f6d344f9090d12e6afd94742b541251f731f7f87e56adc39328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 14
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_186d3e734da22f6d344f9090d12e6afd94742b541251f731f7f87e56adc39328->leave($__internal_186d3e734da22f6d344f9090d12e6afd94742b541251f731f7f87e56adc39328_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:comite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 13,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* <h1>Organization</h1>*/
/* <p>*/
/* <h4>General Chairs</h4>*/
/* Arnoldo Díaz-Ramírez (ITM, México)<br>*/
/* Juan Pablo García (UABC, México)*/
/* <br><br>*/
/* <h4>Program Committee</h4>*/
/* <h5>To be announced...</h5>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
