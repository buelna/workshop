<?php

/* ::baseLateral.html.twig */
class __TwigTemplate_75b3871af7bd920f4867ee1bb1ed8df3df65aae2c90479eb2f24459f5b5fd4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::baseLateral.html.twig", 1);
        $this->blocks = array(
            'lateral' => array($this, 'block_lateral'),
            'cols' => array($this, 'block_cols'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96b59a4a9d0dd8262b306a3662dc2b9e64296b47becd0e529a129cf195bdc5da = $this->env->getExtension("native_profiler");
        $__internal_96b59a4a9d0dd8262b306a3662dc2b9e64296b47becd0e529a129cf195bdc5da->enter($__internal_96b59a4a9d0dd8262b306a3662dc2b9e64296b47becd0e529a129cf195bdc5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b59a4a9d0dd8262b306a3662dc2b9e64296b47becd0e529a129cf195bdc5da->leave($__internal_96b59a4a9d0dd8262b306a3662dc2b9e64296b47becd0e529a129cf195bdc5da_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_e38faba835ff5254d8d9f162acadd45998e368a752b2ccacdf78dfcebdea2123 = $this->env->getExtension("native_profiler");
        $__internal_e38faba835ff5254d8d9f162acadd45998e368a752b2ccacdf78dfcebdea2123->enter($__internal_e38faba835ff5254d8d9f162acadd45998e368a752b2ccacdf78dfcebdea2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 3
        echo "<div class=\"large-3 columns\">
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">RELEVANT DATES:</li>
<li class=\"bullet-item\">
    <strike><strong>Submission deadline:</strong><br> September 15, 2017 <strong></strong></strike><br>
    <strong>Submission deadline:</strong><br> October 1, 2017 (Final)<strong></strong>
</li>
<li class=\"bullet-item\">
    <strong>Acceptance Notification:</strong><br> October 25, 2017
</li>
<li class=\"bullet-item\">
    <strong>Camera Ready:</strong><br> November 4, 2017
</li>
<li class=\"bullet-item\">
    <strong>Workshop date:</strong><br> January 12, 2018
</li>
</ul>
              </div>
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">LATEST NEWS</li>
<li class=\"bullet-item\">
    <strong>Website launch:</strong> June 12
</li>
<li class=\"bullet-item\">
    <strong>Submission open:</strong> TBA
</li>
</ul>
</div>
<div>
<ul class=\"pricing-table\">
<li class=\"title\">ORGANIZATION:</li>
<li class=\"description\">
    <strong>Dr. Arnoldo Díaz-Ramírez</strong><br>
    Technical Institute of Mexicali (ITM), México<br>
    <a href=\"mailto:adiaz@itmexicali.edu.mx\">adiaz@itmexicali.edu.mx</a>
</li>
<li class=\"description\">
    <strong>Dr. Juan P. García-Vázquez</strong><br>
    Universidad Autónoma de Baja California (UABC), México<br>
    <a href=\"mailto:pablo.garcia@uabc.edu.mx\">pablo.garcia@uabc.edu.mx</a>
</li>
</ul>
              </div>
              <div >
              <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("caii.png"), "html", null, true);
        echo "\">
              </div>
</div>
";
        
        $__internal_e38faba835ff5254d8d9f162acadd45998e368a752b2ccacdf78dfcebdea2123->leave($__internal_e38faba835ff5254d8d9f162acadd45998e368a752b2ccacdf78dfcebdea2123_prof);

    }

    // line 53
    public function block_cols($context, array $blocks = array())
    {
        $__internal_904c3ba55b1f99df18fab9de1dbf9a227241a93c3b723e8e727e5698b66bcc37 = $this->env->getExtension("native_profiler");
        $__internal_904c3ba55b1f99df18fab9de1dbf9a227241a93c3b723e8e727e5698b66bcc37->enter($__internal_904c3ba55b1f99df18fab9de1dbf9a227241a93c3b723e8e727e5698b66bcc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 54
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_904c3ba55b1f99df18fab9de1dbf9a227241a93c3b723e8e727e5698b66bcc37->leave($__internal_904c3ba55b1f99df18fab9de1dbf9a227241a93c3b723e8e727e5698b66bcc37_prof);

    }

    public function getTemplateName()
    {
        return "::baseLateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  100 => 53,  89 => 49,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block lateral %}*/
/* <div class="large-3 columns">*/
/*               <div >*/
/* <ul class="pricing-table">*/
/* <li class="title">RELEVANT DATES:</li>*/
/* <li class="bullet-item">*/
/*     <strike><strong>Submission deadline:</strong><br> September 15, 2017 <strong></strong></strike><br>*/
/*     <strong>Submission deadline:</strong><br> October 1, 2017 (Final)<strong></strong>*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Acceptance Notification:</strong><br> October 25, 2017*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Camera Ready:</strong><br> November 4, 2017*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Workshop date:</strong><br> January 12, 2018*/
/* </li>*/
/* </ul>*/
/*               </div>*/
/*               <div >*/
/* <ul class="pricing-table">*/
/* <li class="title">LATEST NEWS</li>*/
/* <li class="bullet-item">*/
/*     <strong>Website launch:</strong> June 12*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Submission open:</strong> TBA*/
/* </li>*/
/* </ul>*/
/* </div>*/
/* <div>*/
/* <ul class="pricing-table">*/
/* <li class="title">ORGANIZATION:</li>*/
/* <li class="description">*/
/*     <strong>Dr. Arnoldo Díaz-Ramírez</strong><br>*/
/*     Technical Institute of Mexicali (ITM), México<br>*/
/*     <a href="mailto:adiaz@itmexicali.edu.mx">adiaz@itmexicali.edu.mx</a>*/
/* </li>*/
/* <li class="description">*/
/*     <strong>Dr. Juan P. García-Vázquez</strong><br>*/
/*     Universidad Autónoma de Baja California (UABC), México<br>*/
/*     <a href="mailto:pablo.garcia@uabc.edu.mx">pablo.garcia@uabc.edu.mx</a>*/
/* </li>*/
/* </ul>*/
/*               </div>*/
/*               <div >*/
/*               <img src="{{ asset('caii.png')}}">*/
/*               </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-9 columns">*/
/* {% endblock %}*/
/* */
