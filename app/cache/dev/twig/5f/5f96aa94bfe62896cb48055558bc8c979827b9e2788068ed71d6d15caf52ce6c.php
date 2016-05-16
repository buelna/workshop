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
        $__internal_fd4e93c33e64df2d4209e5ead061dc903043439033cc60f7ae2df26d4f8667cf = $this->env->getExtension("native_profiler");
        $__internal_fd4e93c33e64df2d4209e5ead061dc903043439033cc60f7ae2df26d4f8667cf->enter($__internal_fd4e93c33e64df2d4209e5ead061dc903043439033cc60f7ae2df26d4f8667cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4e93c33e64df2d4209e5ead061dc903043439033cc60f7ae2df26d4f8667cf->leave($__internal_fd4e93c33e64df2d4209e5ead061dc903043439033cc60f7ae2df26d4f8667cf_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac11756679ac6ea9221cd972e4319c90ab2a9eb2cc3f9f54449fae989f508b61 = $this->env->getExtension("native_profiler");
        $__internal_ac11756679ac6ea9221cd972e4319c90ab2a9eb2cc3f9f54449fae989f508b61->enter($__internal_ac11756679ac6ea9221cd972e4319c90ab2a9eb2cc3f9f54449fae989f508b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
David Boyle (Imperial College London, UK)<br>
Ni Zhu (University of Bristol , United Kingdom)<br>
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
 </p>
";
        
        $__internal_ac11756679ac6ea9221cd972e4319c90ab2a9eb2cc3f9f54449fae989f508b61->leave($__internal_ac11756679ac6ea9221cd972e4319c90ab2a9eb2cc3f9f54449fae989f508b61_prof);

    }

    // line 26
    public function block_cols($context, array $blocks = array())
    {
        $__internal_34b6019a150e23ebcb22377a6f2e1fd6fcbb70d5c003721b5e15b97a37473319 = $this->env->getExtension("native_profiler");
        $__internal_34b6019a150e23ebcb22377a6f2e1fd6fcbb70d5c003721b5e15b97a37473319->enter($__internal_34b6019a150e23ebcb22377a6f2e1fd6fcbb70d5c003721b5e15b97a37473319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 27
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_34b6019a150e23ebcb22377a6f2e1fd6fcbb70d5c003721b5e15b97a37473319->leave($__internal_34b6019a150e23ebcb22377a6f2e1fd6fcbb70d5c003721b5e15b97a37473319_prof);

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
        return array (  76 => 27,  70 => 26,  41 => 3,  35 => 2,  11 => 1,);
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
/* David Boyle (Imperial College London, UK)<br>*/
/* Ni Zhu (University of Bristol , United Kingdom)<br>*/
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
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
