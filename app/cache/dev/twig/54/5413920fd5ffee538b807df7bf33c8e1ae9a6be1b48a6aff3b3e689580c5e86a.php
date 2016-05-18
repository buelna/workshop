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
        $__internal_aabce39a185aeb8c8ca882329a869c0d73c9f9aadbe8d393cb932f1eb6be7d75 = $this->env->getExtension("native_profiler");
        $__internal_aabce39a185aeb8c8ca882329a869c0d73c9f9aadbe8d393cb932f1eb6be7d75->enter($__internal_aabce39a185aeb8c8ca882329a869c0d73c9f9aadbe8d393cb932f1eb6be7d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aabce39a185aeb8c8ca882329a869c0d73c9f9aadbe8d393cb932f1eb6be7d75->leave($__internal_aabce39a185aeb8c8ca882329a869c0d73c9f9aadbe8d393cb932f1eb6be7d75_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_972bcc632fbbe17187e704d01368be2c3cb3d0faf60eaa3211728beef4e1826a = $this->env->getExtension("native_profiler");
        $__internal_972bcc632fbbe17187e704d01368be2c3cb3d0faf60eaa3211728beef4e1826a->enter($__internal_972bcc632fbbe17187e704d01368be2c3cb3d0faf60eaa3211728beef4e1826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 3
        echo "<div class=\"large-3 columns\">
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">RELEVANT DATES:</li>
<li class=\"bullet-item\">
    <strong>Submission deadline:</strong><br> September 7, 2016 <strong></strong>
</li>
<li class=\"bullet-item\">
    <strong>Acceptance Notification:</strong><br> October 12, 2016
</li>
<li class=\"bullet-item\">
    <strong>Camera Ready:</strong><br> November 2, 2016
</li>
<li class=\"bullet-item\">
    <strong>Workshop date:</strong><br> January 8, 2017
</li>
</ul>
              </div>
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">LATEST NEWS</li>
<li class=\"bullet-item\">
    <strong>Website launch:</strong> April 27
</li>
<li class=\"bullet-item\">
    <strong>Submission open:</strong> TBA
</li>
<li class=\"bullet-item\">
    <strong>Paper page limit modified:</strong> May 17
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("caii.png"), "html", null, true);
        echo "\">
              </div>
</div>
";
        
        $__internal_972bcc632fbbe17187e704d01368be2c3cb3d0faf60eaa3211728beef4e1826a->leave($__internal_972bcc632fbbe17187e704d01368be2c3cb3d0faf60eaa3211728beef4e1826a_prof);

    }

    // line 55
    public function block_cols($context, array $blocks = array())
    {
        $__internal_d6892424c76557e80ba50cd2de757dbe5c438ebca9fdd9d3139c987608739ff8 = $this->env->getExtension("native_profiler");
        $__internal_d6892424c76557e80ba50cd2de757dbe5c438ebca9fdd9d3139c987608739ff8->enter($__internal_d6892424c76557e80ba50cd2de757dbe5c438ebca9fdd9d3139c987608739ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 56
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_d6892424c76557e80ba50cd2de757dbe5c438ebca9fdd9d3139c987608739ff8->leave($__internal_d6892424c76557e80ba50cd2de757dbe5c438ebca9fdd9d3139c987608739ff8_prof);

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
        return array (  108 => 56,  102 => 55,  91 => 51,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block lateral %}*/
/* <div class="large-3 columns">*/
/*               <div >*/
/* <ul class="pricing-table">*/
/* <li class="title">RELEVANT DATES:</li>*/
/* <li class="bullet-item">*/
/*     <strong>Submission deadline:</strong><br> September 7, 2016 <strong></strong>*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Acceptance Notification:</strong><br> October 12, 2016*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Camera Ready:</strong><br> November 2, 2016*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Workshop date:</strong><br> January 8, 2017*/
/* </li>*/
/* </ul>*/
/*               </div>*/
/*               <div >*/
/* <ul class="pricing-table">*/
/* <li class="title">LATEST NEWS</li>*/
/* <li class="bullet-item">*/
/*     <strong>Website launch:</strong> April 27*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Submission open:</strong> TBA*/
/* </li>*/
/* <li class="bullet-item">*/
/*     <strong>Paper page limit modified:</strong> May 17*/
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
