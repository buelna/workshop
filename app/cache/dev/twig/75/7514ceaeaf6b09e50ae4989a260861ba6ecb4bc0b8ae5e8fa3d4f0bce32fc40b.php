<?php

/* AppBundle:Default:call.html.twig */
class __TwigTemplate_6b9b51fc6916fe2387a6cc32e17d6fc1b702da3e581e8ceee5a80c789f38034c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLateral.html.twig", "AppBundle:Default:call.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseLateral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734cde34fbe7c01aed7e8ca5451ec48e59dcbdc4a03df232f831e3a5af354486 = $this->env->getExtension("native_profiler");
        $__internal_734cde34fbe7c01aed7e8ca5451ec48e59dcbdc4a03df232f831e3a5af354486->enter($__internal_734cde34fbe7c01aed7e8ca5451ec48e59dcbdc4a03df232f831e3a5af354486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:call.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734cde34fbe7c01aed7e8ca5451ec48e59dcbdc4a03df232f831e3a5af354486->leave($__internal_734cde34fbe7c01aed7e8ca5451ec48e59dcbdc4a03df232f831e3a5af354486_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_882826506ab556ce5c5e03435dc6f807dc52af940f4e15c32a5ab8d5f409e339 = $this->env->getExtension("native_profiler");
        $__internal_882826506ab556ce5c5e03435dc6f807dc52af940f4e15c32a5ab8d5f409e339->enter($__internal_882826506ab556ce5c5e03435dc6f807dc52af940f4e15c32a5ab8d5f409e339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Call for Papers</h1>
<p>
The third International Workshop on Ambient Assisted Living and eHealth  (AALEH 2018) aims to bring together researchers, engineers, students, and technologists, to exchange, discuss, and share their experiences, ideas and research results on both the theoretical and practical aspects of eHealth and Ambient Assisted Living (AAL) services. AALEH is Co-Located with 15th IEEE Consumer Communications and Networking Conference (<a href=\"http://ccnc2018.ieee-ccnc.org/\">CCNC 2018</a>).
<br><br>
These services are a helpful tool to address the inherent problems of the aging societies. Among the enabling technologies of eHealth and ALL services, we have wireless sensor networks, Big Data, the Internet of Things, ambient intelligence, and cyber-physical systems, just to name a few.
<br><br>
Therefore, this workshop is soliciting original technical papers addressing the main research challenges in the eHealth and Ambient Assisted Living (AAL) area. All accepted and presented papers will be published in the conference proceedings and on IEEE Xplore.
 </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";
        
        $__internal_882826506ab556ce5c5e03435dc6f807dc52af940f4e15c32a5ab8d5f409e339->leave($__internal_882826506ab556ce5c5e03435dc6f807dc52af940f4e15c32a5ab8d5f409e339_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:call.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::baseLateral.html.twig' %}*/
/* {% block content %}*/
/* <h1>Call for Papers</h1>*/
/* <p>*/
/* The third International Workshop on Ambient Assisted Living and eHealth  (AALEH 2018) aims to bring together researchers, engineers, students, and technologists, to exchange, discuss, and share their experiences, ideas and research results on both the theoretical and practical aspects of eHealth and Ambient Assisted Living (AAL) services. AALEH is Co-Located with 15th IEEE Consumer Communications and Networking Conference (<a href="http://ccnc2018.ieee-ccnc.org/">CCNC 2018</a>).*/
/* <br><br>*/
/* These services are a helpful tool to address the inherent problems of the aging societies. Among the enabling technologies of eHealth and ALL services, we have wireless sensor networks, Big Data, the Internet of Things, ambient intelligence, and cyber-physical systems, just to name a few.*/
/* <br><br>*/
/* Therefore, this workshop is soliciting original technical papers addressing the main research challenges in the eHealth and Ambient Assisted Living (AAL) area. All accepted and presented papers will be published in the conference proceedings and on IEEE Xplore.*/
/*  </p>*/
/* <p>&nbsp;</p>*/
/* <p>&nbsp;</p>*/
/* <p>&nbsp;</p>*/
/* <p>&nbsp;</p>*/
/* {% endblock %}*/
