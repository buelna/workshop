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
        $__internal_f0667fc926e8cf0feb3a02882ee991e926a4c63df77697b682d17f3a790fd0d3 = $this->env->getExtension("native_profiler");
        $__internal_f0667fc926e8cf0feb3a02882ee991e926a4c63df77697b682d17f3a790fd0d3->enter($__internal_f0667fc926e8cf0feb3a02882ee991e926a4c63df77697b682d17f3a790fd0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0667fc926e8cf0feb3a02882ee991e926a4c63df77697b682d17f3a790fd0d3->leave($__internal_f0667fc926e8cf0feb3a02882ee991e926a4c63df77697b682d17f3a790fd0d3_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_0b3acf600615c0d7da1af569e3cf1115764e975105ef1a5a0a4f27a1ab6ce1ba = $this->env->getExtension("native_profiler");
        $__internal_0b3acf600615c0d7da1af569e3cf1115764e975105ef1a5a0a4f27a1ab6ce1ba->enter($__internal_0b3acf600615c0d7da1af569e3cf1115764e975105ef1a5a0a4f27a1ab6ce1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

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
        
        $__internal_0b3acf600615c0d7da1af569e3cf1115764e975105ef1a5a0a4f27a1ab6ce1ba->leave($__internal_0b3acf600615c0d7da1af569e3cf1115764e975105ef1a5a0a4f27a1ab6ce1ba_prof);

    }

    // line 55
    public function block_cols($context, array $blocks = array())
    {
        $__internal_aab1c16866887a43b8f74fe14a58bdc1dcf77ca81c4a0f635b91690c28c1c17e = $this->env->getExtension("native_profiler");
        $__internal_aab1c16866887a43b8f74fe14a58bdc1dcf77ca81c4a0f635b91690c28c1c17e->enter($__internal_aab1c16866887a43b8f74fe14a58bdc1dcf77ca81c4a0f635b91690c28c1c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 56
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_aab1c16866887a43b8f74fe14a58bdc1dcf77ca81c4a0f635b91690c28c1c17e->leave($__internal_aab1c16866887a43b8f74fe14a58bdc1dcf77ca81c4a0f635b91690c28c1c17e_prof);

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
