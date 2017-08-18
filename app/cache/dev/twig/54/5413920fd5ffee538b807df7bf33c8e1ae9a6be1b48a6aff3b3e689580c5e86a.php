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
        $__internal_26fd929edb7e21dbd65cc43ec3a6569e59ae1c7685129a035eff4a64fe8f6208 = $this->env->getExtension("native_profiler");
        $__internal_26fd929edb7e21dbd65cc43ec3a6569e59ae1c7685129a035eff4a64fe8f6208->enter($__internal_26fd929edb7e21dbd65cc43ec3a6569e59ae1c7685129a035eff4a64fe8f6208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26fd929edb7e21dbd65cc43ec3a6569e59ae1c7685129a035eff4a64fe8f6208->leave($__internal_26fd929edb7e21dbd65cc43ec3a6569e59ae1c7685129a035eff4a64fe8f6208_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_92c9eb8d2cfc9c5d492beb9865c86c0c6b935473c1b7b0ed32f4edf1a2e37840 = $this->env->getExtension("native_profiler");
        $__internal_92c9eb8d2cfc9c5d492beb9865c86c0c6b935473c1b7b0ed32f4edf1a2e37840->enter($__internal_92c9eb8d2cfc9c5d492beb9865c86c0c6b935473c1b7b0ed32f4edf1a2e37840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 3
        echo "<div class=\"large-3 columns\">
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">RELEVANT DATES:</li>
<li class=\"bullet-item\">
    <strong>Submission deadline:</strong><br> September 15, 2017 <strong></strong>
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("caii.png"), "html", null, true);
        echo "\">
              </div>
</div>
";
        
        $__internal_92c9eb8d2cfc9c5d492beb9865c86c0c6b935473c1b7b0ed32f4edf1a2e37840->leave($__internal_92c9eb8d2cfc9c5d492beb9865c86c0c6b935473c1b7b0ed32f4edf1a2e37840_prof);

    }

    // line 52
    public function block_cols($context, array $blocks = array())
    {
        $__internal_0f861eb1ee86494d27fb3e1f4153c719618fca3491a5125d8048585d439c93d6 = $this->env->getExtension("native_profiler");
        $__internal_0f861eb1ee86494d27fb3e1f4153c719618fca3491a5125d8048585d439c93d6->enter($__internal_0f861eb1ee86494d27fb3e1f4153c719618fca3491a5125d8048585d439c93d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 53
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_0f861eb1ee86494d27fb3e1f4153c719618fca3491a5125d8048585d439c93d6->leave($__internal_0f861eb1ee86494d27fb3e1f4153c719618fca3491a5125d8048585d439c93d6_prof);

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
/*     <strong>Submission deadline:</strong><br> September 15, 2017 <strong></strong>*/
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
