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
        $__internal_62909304d982a46c1c8a59c90ce0c1c10bb01f07fd3dccc39f2a405319e53080 = $this->env->getExtension("native_profiler");
        $__internal_62909304d982a46c1c8a59c90ce0c1c10bb01f07fd3dccc39f2a405319e53080->enter($__internal_62909304d982a46c1c8a59c90ce0c1c10bb01f07fd3dccc39f2a405319e53080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:comite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62909304d982a46c1c8a59c90ce0c1c10bb01f07fd3dccc39f2a405319e53080->leave($__internal_62909304d982a46c1c8a59c90ce0c1c10bb01f07fd3dccc39f2a405319e53080_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_535b4e3bd1540551c5e7dea06bf636cc1c90d636a13d22fa0ff8ccd75d708f82 = $this->env->getExtension("native_profiler");
        $__internal_535b4e3bd1540551c5e7dea06bf636cc1c90d636a13d22fa0ff8ccd75d708f82->enter($__internal_535b4e3bd1540551c5e7dea06bf636cc1c90d636a13d22fa0ff8ccd75d708f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
</ul>
 </p>
";
        
        $__internal_535b4e3bd1540551c5e7dea06bf636cc1c90d636a13d22fa0ff8ccd75d708f82->leave($__internal_535b4e3bd1540551c5e7dea06bf636cc1c90d636a13d22fa0ff8ccd75d708f82_prof);

    }

    // line 30
    public function block_cols($context, array $blocks = array())
    {
        $__internal_da0bbc0b34a3288926a6a61ba734387c55a6b8f95d3153b4b3029579f4cd33ab = $this->env->getExtension("native_profiler");
        $__internal_da0bbc0b34a3288926a6a61ba734387c55a6b8f95d3153b4b3029579f4cd33ab->enter($__internal_da0bbc0b34a3288926a6a61ba734387c55a6b8f95d3153b4b3029579f4cd33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 31
        echo "<div class=\"large-12 columns\">
";
        
        $__internal_da0bbc0b34a3288926a6a61ba734387c55a6b8f95d3153b4b3029579f4cd33ab->leave($__internal_da0bbc0b34a3288926a6a61ba734387c55a6b8f95d3153b4b3029579f4cd33ab_prof);

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
        return array (  80 => 31,  74 => 30,  41 => 3,  35 => 2,  11 => 1,);
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
/* </ul>*/
/*  </p>*/
/* {% endblock %}*/
/* {% block cols %}*/
/* <div class="large-12 columns">*/
/* {% endblock %}*/
/* */
