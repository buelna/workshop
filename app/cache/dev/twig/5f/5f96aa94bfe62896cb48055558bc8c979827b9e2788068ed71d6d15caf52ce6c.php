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
        $__internal_485943701948271af51f23ffda21aa3dc8da169cd1e65308241137d05208189e = $this->env->getExtension("native_profiler");
        $__internal_485943701948271af51f23ffda21aa3dc8da169cd1e65308241137d05208189e->enter($__internal_485943701948271af51f23ffda21aa3dc8da169cd1e65308241137d05208189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485943701948271af51f23ffda21aa3dc8da169cd1e65308241137d05208189e->leave($__internal_485943701948271af51f23ffda21aa3dc8da169cd1e65308241137d05208189e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a808a768249a7f6e0a8885e209c3f8721b6a391cd5cf5d7f7241db520c8a895 = $this->env->getExtension("native_profiler");
        $__internal_2a808a768249a7f6e0a8885e209c3f8721b6a391cd5cf5d7f7241db520c8a895->enter($__internal_2a808a768249a7f6e0a8885e209c3f8721b6a391cd5cf5d7f7241db520c8a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
  <li>Paolo Spagnolo (Consiglio Nazionale delle Ricerche)</li>
  <li>Teodora Sanislav (Technical University of Cluj-Napoca)</li>
  <li>Julio Sanguesa (Universidad de Zaragoza)</li>
  <li>Mihail Popescu (University of Missouri)</li>
  <li>Juan Garcia Vázquez (Universidad Autonoma de Baja California)</li>
  <li>Carlos Galván-Tejada (Instituto Tecnológico y de Estudios Superiores de Monterrey)</li>
  <li>Arnoldo Diaz-Ramirez (Instituto Tecnológico de Mexicali)</li>
  <li>Jonathon Chambers (Newcastle University)</li>
  <li>Jose Carrasco-Jimenez (Instituto Tecnológico y de Estudios Superiores de Monterrey)</li>
  <li>Ramon Brena (Tecnológico de Monterrey, Campus Monterrey)</li>
  <li>Carlos T. Calafate(Universitat Politècnica de València, Spain)</li>
  <li>Pietro Manzoni (Universitat Politècnica de València, Spain)</li>
  <li>Ismael Ripoll (Universitat Politècnica de València, Spain)</li>
  <li>Johann Marquez-Barja (University of Antwerp, Belgium)</li>
  <li>Leonardo Trujillo (Instituto Tecnológico de Tijuana, México)</li>
  <li>Luis Jaimes (Florida Polytechnic University)</li>
</ul>
 </p>
";
        
        $__internal_2a808a768249a7f6e0a8885e209c3f8721b6a391cd5cf5d7f7241db520c8a895->leave($__internal_2a808a768249a7f6e0a8885e209c3f8721b6a391cd5cf5d7f7241db520c8a895_prof);

    }

    // line 31
    public function block_cols($context, array $blocks = array())
    {
        $__internal_6a7990fc4396aee5ff806ac5f837dff1ce804ac7bc9da2b8efbd9d08f7f9385e = $this->env->getExtension("native_profiler");
        $__internal_6a7990fc4396aee5ff806ac5f837dff1ce804ac7bc9da2b8efbd9d08f7f9385e->enter($__internal_6a7990fc4396aee5ff806ac5f837dff1ce804ac7bc9da2b8efbd9d08f7f9385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 32
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_6a7990fc4396aee5ff806ac5f837dff1ce804ac7bc9da2b8efbd9d08f7f9385e->leave($__internal_6a7990fc4396aee5ff806ac5f837dff1ce804ac7bc9da2b8efbd9d08f7f9385e_prof);

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
        return array (  81 => 32,  75 => 31,  41 => 3,  35 => 2,  11 => 1,);
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
/*   <li>Paolo Spagnolo (Consiglio Nazionale delle Ricerche)</li>*/
/*   <li>Teodora Sanislav (Technical University of Cluj-Napoca)</li>*/
/*   <li>Julio Sanguesa (Universidad de Zaragoza)</li>*/
/*   <li>Mihail Popescu (University of Missouri)</li>*/
/*   <li>Juan Garcia Vázquez (Universidad Autonoma de Baja California)</li>*/
/*   <li>Carlos Galván-Tejada (Instituto Tecnológico y de Estudios Superiores de Monterrey)</li>*/
/*   <li>Arnoldo Diaz-Ramirez (Instituto Tecnológico de Mexicali)</li>*/
/*   <li>Jonathon Chambers (Newcastle University)</li>*/
/*   <li>Jose Carrasco-Jimenez (Instituto Tecnológico y de Estudios Superiores de Monterrey)</li>*/
/*   <li>Ramon Brena (Tecnológico de Monterrey, Campus Monterrey)</li>*/
/*   <li>Carlos T. Calafate(Universitat Politècnica de València, Spain)</li>*/
/*   <li>Pietro Manzoni (Universitat Politècnica de València, Spain)</li>*/
/*   <li>Ismael Ripoll (Universitat Politècnica de València, Spain)</li>*/
/*   <li>Johann Marquez-Barja (University of Antwerp, Belgium)</li>*/
/*   <li>Leonardo Trujillo (Instituto Tecnológico de Tijuana, México)</li>*/
/*   <li>Luis Jaimes (Florida Polytechnic University)</li>*/
/* </ul>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
