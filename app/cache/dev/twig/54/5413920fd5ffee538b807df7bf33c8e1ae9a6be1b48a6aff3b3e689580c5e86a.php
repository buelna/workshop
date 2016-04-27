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
        $__internal_fa5eacd73eeb8cf9cd12906b6f8340e98be3462a1698e21af6df3c3f3f2bb5ba = $this->env->getExtension("native_profiler");
        $__internal_fa5eacd73eeb8cf9cd12906b6f8340e98be3462a1698e21af6df3c3f3f2bb5ba->enter($__internal_fa5eacd73eeb8cf9cd12906b6f8340e98be3462a1698e21af6df3c3f3f2bb5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa5eacd73eeb8cf9cd12906b6f8340e98be3462a1698e21af6df3c3f3f2bb5ba->leave($__internal_fa5eacd73eeb8cf9cd12906b6f8340e98be3462a1698e21af6df3c3f3f2bb5ba_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_c91f7ce3cf256145b7b3b0344c566643b0c8d8659e25e60f15405327bec2c533 = $this->env->getExtension("native_profiler");
        $__internal_c91f7ce3cf256145b7b3b0344c566643b0c8d8659e25e60f15405327bec2c533->enter($__internal_c91f7ce3cf256145b7b3b0344c566643b0c8d8659e25e60f15405327bec2c533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("caii.png"), "html", null, true);
        echo "\">
              </div>
</div>
";
        
        $__internal_c91f7ce3cf256145b7b3b0344c566643b0c8d8659e25e60f15405327bec2c533->leave($__internal_c91f7ce3cf256145b7b3b0344c566643b0c8d8659e25e60f15405327bec2c533_prof);

    }

    // line 52
    public function block_cols($context, array $blocks = array())
    {
        $__internal_05d7a9b92053eba58435fe6e578a61f961593d1eb9ab32f02ed34c7682fed414 = $this->env->getExtension("native_profiler");
        $__internal_05d7a9b92053eba58435fe6e578a61f961593d1eb9ab32f02ed34c7682fed414->enter($__internal_05d7a9b92053eba58435fe6e578a61f961593d1eb9ab32f02ed34c7682fed414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 53
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_05d7a9b92053eba58435fe6e578a61f961593d1eb9ab32f02ed34c7682fed414->leave($__internal_05d7a9b92053eba58435fe6e578a61f961593d1eb9ab32f02ed34c7682fed414_prof);

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
        return array (  105 => 53,  99 => 52,  88 => 48,  41 => 3,  35 => 2,  11 => 1,);
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
