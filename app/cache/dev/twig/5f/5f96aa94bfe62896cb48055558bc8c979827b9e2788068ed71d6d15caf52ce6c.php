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
        $__internal_c6d85d88f13616e1d8bc56c79d0ccc42ac4abfb59b41e40b2bc2313d5270b3c0 = $this->env->getExtension("native_profiler");
        $__internal_c6d85d88f13616e1d8bc56c79d0ccc42ac4abfb59b41e40b2bc2313d5270b3c0->enter($__internal_c6d85d88f13616e1d8bc56c79d0ccc42ac4abfb59b41e40b2bc2313d5270b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d85d88f13616e1d8bc56c79d0ccc42ac4abfb59b41e40b2bc2313d5270b3c0->leave($__internal_c6d85d88f13616e1d8bc56c79d0ccc42ac4abfb59b41e40b2bc2313d5270b3c0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb831fd1f69c337b5a58c62bb6cbe437856a2f5c0c725726c0602ed9aa038820 = $this->env->getExtension("native_profiler");
        $__internal_eb831fd1f69c337b5a58c62bb6cbe437856a2f5c0c725726c0602ed9aa038820->enter($__internal_eb831fd1f69c337b5a58c62bb6cbe437856a2f5c0c725726c0602ed9aa038820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_eb831fd1f69c337b5a58c62bb6cbe437856a2f5c0c725726c0602ed9aa038820->leave($__internal_eb831fd1f69c337b5a58c62bb6cbe437856a2f5c0c725726c0602ed9aa038820_prof);

    }

    // line 28
    public function block_cols($context, array $blocks = array())
    {
        $__internal_61e6edae9b3e72cff302cfe5c8163f08b15b08eddea415ace06707d7b186be47 = $this->env->getExtension("native_profiler");
        $__internal_61e6edae9b3e72cff302cfe5c8163f08b15b08eddea415ace06707d7b186be47->enter($__internal_61e6edae9b3e72cff302cfe5c8163f08b15b08eddea415ace06707d7b186be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 29
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_61e6edae9b3e72cff302cfe5c8163f08b15b08eddea415ace06707d7b186be47->leave($__internal_61e6edae9b3e72cff302cfe5c8163f08b15b08eddea415ace06707d7b186be47_prof);

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
