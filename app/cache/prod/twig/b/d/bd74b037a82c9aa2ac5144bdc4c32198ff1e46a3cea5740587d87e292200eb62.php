<?php

/* AppBundle:Default:call.html.twig */
class __TwigTemplate_bd74b037a82c9aa2ac5144bdc4c32198ff1e46a3cea5740587d87e292200eb62 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Call for Papers</h1>
<p>
The first International Workshop on Ambient Assisted Living and eHealth  (AALEH 2016) aims to bring together researchers, engineers, students, and technologists, to exchange, discuss, and share their experiences, ideas and research results on both the theoretical and practical aspects of eHealth and Ambient Assisted Living (AAL) services. AALEH is Co-Located with 14th IEEE Consumer Communications and Networking Conference (<a href=\"http://ccnc2016.ieee-ccnc.org/\">CCNC 2016</a>).
<br><br>
These services are a helpful tool to address the inherent problems of the aging societies. Among the enabling technologies of eHealth and ALL services, we have wireless sensor networks, the Internet of Things, ambient intelligence, and cyber-physical systems, just to name a few.
<br><br>
Therefore, this workshop is soliciting original technical papers addressing the main research challenges in the eHealth and Ambient Assisted Living (AAL) area. All accepted and presented papers will be published in the conference proceedings and on IEEE Xplore.
 </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
