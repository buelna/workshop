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
        $__internal_827a77a93eaa37da8d8fefdf3e00f1061f254466600ddc1e35d4d98e9b7537ac = $this->env->getExtension("native_profiler");
        $__internal_827a77a93eaa37da8d8fefdf3e00f1061f254466600ddc1e35d4d98e9b7537ac->enter($__internal_827a77a93eaa37da8d8fefdf3e00f1061f254466600ddc1e35d4d98e9b7537ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827a77a93eaa37da8d8fefdf3e00f1061f254466600ddc1e35d4d98e9b7537ac->leave($__internal_827a77a93eaa37da8d8fefdf3e00f1061f254466600ddc1e35d4d98e9b7537ac_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d749eb2c85c39e2e3f073c8fcfb6f5671586d8e668fc237339290f043c0d864c = $this->env->getExtension("native_profiler");
        $__internal_d749eb2c85c39e2e3f073c8fcfb6f5671586d8e668fc237339290f043c0d864c->enter($__internal_d749eb2c85c39e2e3f073c8fcfb6f5671586d8e668fc237339290f043c0d864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chairs</h4>
Arnoldo Díaz-Ramírez (ITM, México)<br>
Juan Pablo García (UABC, México)
<br><br>
<h4>Program Committee</h4>
<ul class=\"pricing-table\">
  <li class=\"title\"><strong>To be announced...</strong></li>
</ul>
 </p>
";
        
        $__internal_d749eb2c85c39e2e3f073c8fcfb6f5671586d8e668fc237339290f043c0d864c->leave($__internal_d749eb2c85c39e2e3f073c8fcfb6f5671586d8e668fc237339290f043c0d864c_prof);

    }

    // line 15
    public function block_cols($context, array $blocks = array())
    {
        $__internal_53c492fbb8e68a53d9f320b65970b57e2d00205af2eacd39bd0e8807c6e74345 = $this->env->getExtension("native_profiler");
        $__internal_53c492fbb8e68a53d9f320b65970b57e2d00205af2eacd39bd0e8807c6e74345->enter($__internal_53c492fbb8e68a53d9f320b65970b57e2d00205af2eacd39bd0e8807c6e74345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 16
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_53c492fbb8e68a53d9f320b65970b57e2d00205af2eacd39bd0e8807c6e74345->leave($__internal_53c492fbb8e68a53d9f320b65970b57e2d00205af2eacd39bd0e8807c6e74345_prof);

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
        return array (  65 => 16,  59 => 15,  41 => 3,  35 => 2,  11 => 1,);
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
/* <ul class="pricing-table">*/
/*   <li class="title"><strong>To be announced...</strong></li>*/
/* </ul>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
