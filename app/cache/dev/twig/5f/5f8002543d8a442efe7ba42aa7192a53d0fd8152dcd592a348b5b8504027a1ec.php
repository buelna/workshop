<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c6ea584c22ef61cf2601b35f61b7bdbe705bb483d0d8fcddfcb43588cedd5fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813e28f15a39fbab2c15fb46224a84ba2c814597ce75077c9bfa403695cb656e = $this->env->getExtension("native_profiler");
        $__internal_813e28f15a39fbab2c15fb46224a84ba2c814597ce75077c9bfa403695cb656e->enter($__internal_813e28f15a39fbab2c15fb46224a84ba2c814597ce75077c9bfa403695cb656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_813e28f15a39fbab2c15fb46224a84ba2c814597ce75077c9bfa403695cb656e->leave($__internal_813e28f15a39fbab2c15fb46224a84ba2c814597ce75077c9bfa403695cb656e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
