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
        $__internal_58321c4f99ffc909a35b357ea3d78d931a6aaf04ab1707469dcd3b329905f828 = $this->env->getExtension("native_profiler");
        $__internal_58321c4f99ffc909a35b357ea3d78d931a6aaf04ab1707469dcd3b329905f828->enter($__internal_58321c4f99ffc909a35b357ea3d78d931a6aaf04ab1707469dcd3b329905f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58321c4f99ffc909a35b357ea3d78d931a6aaf04ab1707469dcd3b329905f828->leave($__internal_58321c4f99ffc909a35b357ea3d78d931a6aaf04ab1707469dcd3b329905f828_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_0e97906ba16826fb270f7a237f12dcf9211bcb6a589c914788c4162f720ea6e1 = $this->env->getExtension("native_profiler");
        $__internal_0e97906ba16826fb270f7a237f12dcf9211bcb6a589c914788c4162f720ea6e1->enter($__internal_0e97906ba16826fb270f7a237f12dcf9211bcb6a589c914788c4162f720ea6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

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
        
        $__internal_0e97906ba16826fb270f7a237f12dcf9211bcb6a589c914788c4162f720ea6e1->leave($__internal_0e97906ba16826fb270f7a237f12dcf9211bcb6a589c914788c4162f720ea6e1_prof);

    }

    // line 55
    public function block_cols($context, array $blocks = array())
    {
        $__internal_14c2c1c5fbea21da79e011d77b69b39383e7d68b30a5da2f869c27b2a002b995 = $this->env->getExtension("native_profiler");
        $__internal_14c2c1c5fbea21da79e011d77b69b39383e7d68b30a5da2f869c27b2a002b995->enter($__internal_14c2c1c5fbea21da79e011d77b69b39383e7d68b30a5da2f869c27b2a002b995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 56
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_14c2c1c5fbea21da79e011d77b69b39383e7d68b30a5da2f869c27b2a002b995->leave($__internal_14c2c1c5fbea21da79e011d77b69b39383e7d68b30a5da2f869c27b2a002b995_prof);

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
