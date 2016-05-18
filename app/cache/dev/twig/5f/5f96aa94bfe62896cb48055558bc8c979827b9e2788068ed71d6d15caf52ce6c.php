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
        $__internal_44d41cba19945718f0d540acf9786ff55ad1bc6f9cc61b98f7a9967fec4e5334 = $this->env->getExtension("native_profiler");
        $__internal_44d41cba19945718f0d540acf9786ff55ad1bc6f9cc61b98f7a9967fec4e5334->enter($__internal_44d41cba19945718f0d540acf9786ff55ad1bc6f9cc61b98f7a9967fec4e5334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d41cba19945718f0d540acf9786ff55ad1bc6f9cc61b98f7a9967fec4e5334->leave($__internal_44d41cba19945718f0d540acf9786ff55ad1bc6f9cc61b98f7a9967fec4e5334_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d2db2b6abed15ef9cdf72b0b97fe360c37e90df2131fec300e26c46d83a6de7 = $this->env->getExtension("native_profiler");
        $__internal_9d2db2b6abed15ef9cdf72b0b97fe360c37e90df2131fec300e26c46d83a6de7->enter($__internal_9d2db2b6abed15ef9cdf72b0b97fe360c37e90df2131fec300e26c46d83a6de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chairs</h4>
Arnoldo Díaz-Ramírez (ITM, México)<br>
Juan Pablo García (UABC, México)
<br><br>
<h4>Program Committee</h4>
Paolo Spagnolo (CNR-ISASI, Italy)<br>
Mihail Popescu (University of Missouri, USA)<br>
David Boyle (Imperial College London, United Kingdom)<br>
Ni Zhu (University of Bristol, United Kingdom)<br>
Lex van Velsen (Roessingh Research and Development, The Netherlands)<br>
Jose Carlos Jiménez ( Barcelona Supercomputing Center, Spain)<br>
José Manuel Martínez Sesmero (Complejo Hospitalario de Toledo, Spain)<br>
Julio Sangues (Universidad de Zaragoza, Spain)<br>
Raymundo Cornejo-García (UACH, Mexico)<br>
Marcela D. Rodríguez Urrea (UABC, Mexico)<br>
Ramón Felipe Brena-Pinero  (ITESM, Mexico)<br>
Carlos Galván-Tejada (UAZ, Mexico)<br>
Maria Cosio-León (UABC, Mexico)<br>
Sergio Cornell (Universitat Politecnica de Valencia, Spain)<br>
Jonathan Chambers (Newcastle University, United Kingdom)<br>
Katarzyna Stawarz (University College London, United Kingdom)<br>
 </p>
";
        
        $__internal_9d2db2b6abed15ef9cdf72b0b97fe360c37e90df2131fec300e26c46d83a6de7->leave($__internal_9d2db2b6abed15ef9cdf72b0b97fe360c37e90df2131fec300e26c46d83a6de7_prof);

    }

    // line 28
    public function block_cols($context, array $blocks = array())
    {
        $__internal_41fad05448bb677102f8a73793aa403d976f02c0b201d503dff0526fce228c2f = $this->env->getExtension("native_profiler");
        $__internal_41fad05448bb677102f8a73793aa403d976f02c0b201d503dff0526fce228c2f->enter($__internal_41fad05448bb677102f8a73793aa403d976f02c0b201d503dff0526fce228c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 29
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_41fad05448bb677102f8a73793aa403d976f02c0b201d503dff0526fce228c2f->leave($__internal_41fad05448bb677102f8a73793aa403d976f02c0b201d503dff0526fce228c2f_prof);

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
        return array (  78 => 29,  72 => 28,  41 => 3,  35 => 2,  11 => 1,);
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
/* Paolo Spagnolo (CNR-ISASI, Italy)<br>*/
/* Mihail Popescu (University of Missouri, USA)<br>*/
/* David Boyle (Imperial College London, United Kingdom)<br>*/
/* Ni Zhu (University of Bristol, United Kingdom)<br>*/
/* Lex van Velsen (Roessingh Research and Development, The Netherlands)<br>*/
/* Jose Carlos Jiménez ( Barcelona Supercomputing Center, Spain)<br>*/
/* José Manuel Martínez Sesmero (Complejo Hospitalario de Toledo, Spain)<br>*/
/* Julio Sangues (Universidad de Zaragoza, Spain)<br>*/
/* Raymundo Cornejo-García (UACH, Mexico)<br>*/
/* Marcela D. Rodríguez Urrea (UABC, Mexico)<br>*/
/* Ramón Felipe Brena-Pinero  (ITESM, Mexico)<br>*/
/* Carlos Galván-Tejada (UAZ, Mexico)<br>*/
/* Maria Cosio-León (UABC, Mexico)<br>*/
/* Sergio Cornell (Universitat Politecnica de Valencia, Spain)<br>*/
/* Jonathan Chambers (Newcastle University, United Kingdom)<br>*/
/* Katarzyna Stawarz (University College London, United Kingdom)<br>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
