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
        $__internal_9ce5de16f053b0924e33a57136f3babdf467ecbad08fb2449867b6a9c3c77f75 = $this->env->getExtension("native_profiler");
        $__internal_9ce5de16f053b0924e33a57136f3babdf467ecbad08fb2449867b6a9c3c77f75->enter($__internal_9ce5de16f053b0924e33a57136f3babdf467ecbad08fb2449867b6a9c3c77f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce5de16f053b0924e33a57136f3babdf467ecbad08fb2449867b6a9c3c77f75->leave($__internal_9ce5de16f053b0924e33a57136f3babdf467ecbad08fb2449867b6a9c3c77f75_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bab5705ea4da2bc1fce204b585a2509e5c2aeb56c4daa780b6aab1c88ca55d1 = $this->env->getExtension("native_profiler");
        $__internal_3bab5705ea4da2bc1fce204b585a2509e5c2aeb56c4daa780b6aab1c88ca55d1->enter($__internal_3bab5705ea4da2bc1fce204b585a2509e5c2aeb56c4daa780b6aab1c88ca55d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chairs</h4>
Arnoldo Díaz-Ramírez (ITM, México)<br>
Juan Pablo García (UABC, México)
<br><br>
<h4>Program Committee</h4>
<h5>To be announced...</h5>
 </p>
";
        
        $__internal_3bab5705ea4da2bc1fce204b585a2509e5c2aeb56c4daa780b6aab1c88ca55d1->leave($__internal_3bab5705ea4da2bc1fce204b585a2509e5c2aeb56c4daa780b6aab1c88ca55d1_prof);

    }

    // line 13
    public function block_cols($context, array $blocks = array())
    {
        $__internal_1d959f950af765f8f3cecf08aec78db5bed5e50d7c4bca5604e36d50c25ab4e4 = $this->env->getExtension("native_profiler");
        $__internal_1d959f950af765f8f3cecf08aec78db5bed5e50d7c4bca5604e36d50c25ab4e4->enter($__internal_1d959f950af765f8f3cecf08aec78db5bed5e50d7c4bca5604e36d50c25ab4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 14
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_1d959f950af765f8f3cecf08aec78db5bed5e50d7c4bca5604e36d50c25ab4e4->leave($__internal_1d959f950af765f8f3cecf08aec78db5bed5e50d7c4bca5604e36d50c25ab4e4_prof);

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
        return array (  63 => 14,  57 => 13,  41 => 3,  35 => 2,  11 => 1,);
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
/* <h5>To be announced...</h5>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
