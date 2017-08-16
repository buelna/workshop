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
        $__internal_d3b5643e568f4348c193243d500d7410d0c6a797ee9eb3a2725e9c8098392b77 = $this->env->getExtension("native_profiler");
        $__internal_d3b5643e568f4348c193243d500d7410d0c6a797ee9eb3a2725e9c8098392b77->enter($__internal_d3b5643e568f4348c193243d500d7410d0c6a797ee9eb3a2725e9c8098392b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b5643e568f4348c193243d500d7410d0c6a797ee9eb3a2725e9c8098392b77->leave($__internal_d3b5643e568f4348c193243d500d7410d0c6a797ee9eb3a2725e9c8098392b77_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_71ea7ed212d8cd8d1b3d5cfc956c18856644e32c070ae5b0b09b66ed324a133c = $this->env->getExtension("native_profiler");
        $__internal_71ea7ed212d8cd8d1b3d5cfc956c18856644e32c070ae5b0b09b66ed324a133c->enter($__internal_71ea7ed212d8cd8d1b3d5cfc956c18856644e32c070ae5b0b09b66ed324a133c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chairs</h4>
Arnoldo Díaz-Ramírez (ITM, México)<br>
Juan Pablo García (UABC, México)
<br><br>
<h4>Program Committee</h4>
<ul>
  <li>Lex Van Velsen (Roessingh Research and Development)</li>
  <li ></li>
</ul>
 </p>
";
        
        $__internal_71ea7ed212d8cd8d1b3d5cfc956c18856644e32c070ae5b0b09b66ed324a133c->leave($__internal_71ea7ed212d8cd8d1b3d5cfc956c18856644e32c070ae5b0b09b66ed324a133c_prof);

    }

    // line 16
    public function block_cols($context, array $blocks = array())
    {
        $__internal_e40842232db4c24141b60ee0fab7d8202edc959c1fc41f34f98005309b3855f7 = $this->env->getExtension("native_profiler");
        $__internal_e40842232db4c24141b60ee0fab7d8202edc959c1fc41f34f98005309b3855f7->enter($__internal_e40842232db4c24141b60ee0fab7d8202edc959c1fc41f34f98005309b3855f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 17
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_e40842232db4c24141b60ee0fab7d8202edc959c1fc41f34f98005309b3855f7->leave($__internal_e40842232db4c24141b60ee0fab7d8202edc959c1fc41f34f98005309b3855f7_prof);

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
        return array (  66 => 17,  60 => 16,  41 => 3,  35 => 2,  11 => 1,);
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
/* <ul>*/
/*   <li>Lex Van Velsen (Roessingh Research and Development)</li>*/
/*   <li ></li>*/
/* </ul>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
