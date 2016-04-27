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
        $__internal_61288c5f5cb32070e284fd2186040a240e7a3bb8d03653ae0343d4409fb4fd7b = $this->env->getExtension("native_profiler");
        $__internal_61288c5f5cb32070e284fd2186040a240e7a3bb8d03653ae0343d4409fb4fd7b->enter($__internal_61288c5f5cb32070e284fd2186040a240e7a3bb8d03653ae0343d4409fb4fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61288c5f5cb32070e284fd2186040a240e7a3bb8d03653ae0343d4409fb4fd7b->leave($__internal_61288c5f5cb32070e284fd2186040a240e7a3bb8d03653ae0343d4409fb4fd7b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_db6a18a3ebba1ca4682f2149618dcc35d4b8c1157662b98f3836aab39ace3e1f = $this->env->getExtension("native_profiler");
        $__internal_db6a18a3ebba1ca4682f2149618dcc35d4b8c1157662b98f3836aab39ace3e1f->enter($__internal_db6a18a3ebba1ca4682f2149618dcc35d4b8c1157662b98f3836aab39ace3e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_db6a18a3ebba1ca4682f2149618dcc35d4b8c1157662b98f3836aab39ace3e1f->leave($__internal_db6a18a3ebba1ca4682f2149618dcc35d4b8c1157662b98f3836aab39ace3e1f_prof);

    }

    // line 13
    public function block_cols($context, array $blocks = array())
    {
        $__internal_d5aafe405b663c79c4aba79f63798fff2f9e75661433b02c2b6e7aa33a94b83d = $this->env->getExtension("native_profiler");
        $__internal_d5aafe405b663c79c4aba79f63798fff2f9e75661433b02c2b6e7aa33a94b83d->enter($__internal_d5aafe405b663c79c4aba79f63798fff2f9e75661433b02c2b6e7aa33a94b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 14
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_d5aafe405b663c79c4aba79f63798fff2f9e75661433b02c2b6e7aa33a94b83d->leave($__internal_d5aafe405b663c79c4aba79f63798fff2f9e75661433b02c2b6e7aa33a94b83d_prof);

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
