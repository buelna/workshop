<?php

/* ::baseLateral.html.twig */
class __TwigTemplate_e57b2175a27d72c18ec361c92a2ae09dd02ef5a79125e9001cb1b22f7c5e7591 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_lateral($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"large-3 columns\">
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">RELEVANT DATES:</li>
<li class=\"bullet-item\">
    <strong>Submission deadline:</strong> <strike>September 6, 2015</strike>. September 20, 2015
</li>
<li class=\"bullet-item\">
    <strong>Acceptance Notification:</strong> October 18, 2015
</li>
<li class=\"bullet-item\">
    <strong>Camera Ready:</strong> November 2, 2015
</li>
<li class=\"bullet-item\">
    <strong>Workshop date:</strong> January 9, 2016
</li>
</ul>
              </div>
              <div >
<ul class=\"pricing-table\">
<li class=\"title\">LATEST NEWS</li>
<li class=\"bullet-item\">
    <strong>Website launch,</strong> June 22
</li>
<li class=\"bullet-item\">
    <strong>Submission open,</strong> June 22
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
</ul>
              </div>
              <div >
              <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("caii.png"), "html", null, true);
        echo "\">
              </div>
</div>
";
    }

    // line 47
    public function block_cols($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"large-9 columns\">
";
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
        return array (  85 => 48,  82 => 47,  74 => 43,  32 => 3,  29 => 2,  11 => 1,);
    }
}
