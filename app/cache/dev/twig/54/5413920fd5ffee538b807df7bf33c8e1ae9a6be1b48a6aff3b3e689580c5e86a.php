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
        $__internal_37dbd02fef58a0d87f83fac572cba010c3cacefc2d61245bcb9eb6f491968d7c = $this->env->getExtension("native_profiler");
        $__internal_37dbd02fef58a0d87f83fac572cba010c3cacefc2d61245bcb9eb6f491968d7c->enter($__internal_37dbd02fef58a0d87f83fac572cba010c3cacefc2d61245bcb9eb6f491968d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37dbd02fef58a0d87f83fac572cba010c3cacefc2d61245bcb9eb6f491968d7c->leave($__internal_37dbd02fef58a0d87f83fac572cba010c3cacefc2d61245bcb9eb6f491968d7c_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_c7c61a0dbae1b455fe27556463f8ad776f25ce5b44e3dff31091e8ad3cd73c65 = $this->env->getExtension("native_profiler");
        $__internal_c7c61a0dbae1b455fe27556463f8ad776f25ce5b44e3dff31091e8ad3cd73c65->enter($__internal_c7c61a0dbae1b455fe27556463f8ad776f25ce5b44e3dff31091e8ad3cd73c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

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
        
        $__internal_c7c61a0dbae1b455fe27556463f8ad776f25ce5b44e3dff31091e8ad3cd73c65->leave($__internal_c7c61a0dbae1b455fe27556463f8ad776f25ce5b44e3dff31091e8ad3cd73c65_prof);

    }

    // line 52
    public function block_cols($context, array $blocks = array())
    {
        $__internal_8d581e6f1971680bec173c7157674cb82296ff5ebf82a6b894cbcf45369508f9 = $this->env->getExtension("native_profiler");
        $__internal_8d581e6f1971680bec173c7157674cb82296ff5ebf82a6b894cbcf45369508f9->enter($__internal_8d581e6f1971680bec173c7157674cb82296ff5ebf82a6b894cbcf45369508f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 53
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_8d581e6f1971680bec173c7157674cb82296ff5ebf82a6b894cbcf45369508f9->leave($__internal_8d581e6f1971680bec173c7157674cb82296ff5ebf82a6b894cbcf45369508f9_prof);

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
