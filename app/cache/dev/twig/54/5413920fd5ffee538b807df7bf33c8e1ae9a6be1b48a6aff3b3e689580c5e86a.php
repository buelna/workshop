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
        $__internal_59da7faed7295c3d66e85ca43e846908919af9c0d6c772472d2efe934d18b3e9 = $this->env->getExtension("native_profiler");
        $__internal_59da7faed7295c3d66e85ca43e846908919af9c0d6c772472d2efe934d18b3e9->enter($__internal_59da7faed7295c3d66e85ca43e846908919af9c0d6c772472d2efe934d18b3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseLateral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59da7faed7295c3d66e85ca43e846908919af9c0d6c772472d2efe934d18b3e9->leave($__internal_59da7faed7295c3d66e85ca43e846908919af9c0d6c772472d2efe934d18b3e9_prof);

    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_a77fbed8edb044c8e9151d45791ec63c7ad89d22f46e6aeaf3e43413c59538ee = $this->env->getExtension("native_profiler");
        $__internal_a77fbed8edb044c8e9151d45791ec63c7ad89d22f46e6aeaf3e43413c59538ee->enter($__internal_a77fbed8edb044c8e9151d45791ec63c7ad89d22f46e6aeaf3e43413c59538ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

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
        
        $__internal_a77fbed8edb044c8e9151d45791ec63c7ad89d22f46e6aeaf3e43413c59538ee->leave($__internal_a77fbed8edb044c8e9151d45791ec63c7ad89d22f46e6aeaf3e43413c59538ee_prof);

    }

    // line 52
    public function block_cols($context, array $blocks = array())
    {
        $__internal_95741b054966c199c7b91851aec80e2ce910a10ed1e5e293c11d2a18af758047 = $this->env->getExtension("native_profiler");
        $__internal_95741b054966c199c7b91851aec80e2ce910a10ed1e5e293c11d2a18af758047->enter($__internal_95741b054966c199c7b91851aec80e2ce910a10ed1e5e293c11d2a18af758047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 53
        echo "<div class=\"large-9 columns\">
";
        
        $__internal_95741b054966c199c7b91851aec80e2ce910a10ed1e5e293c11d2a18af758047->leave($__internal_95741b054966c199c7b91851aec80e2ce910a10ed1e5e293c11d2a18af758047_prof);

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
