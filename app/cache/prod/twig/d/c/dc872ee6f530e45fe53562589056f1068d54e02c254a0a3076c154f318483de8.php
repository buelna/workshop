<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_dc872ee6f530e45fe53562589056f1068d54e02c254a0a3076c154f318483de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLateral.html.twig", "AppBundle:Default:index.html.twig", 1);
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
        echo "<h1>Scope</h1>
<p align=\"justify\"> 
The advances in computing, communications and sensing technologies have 
allowed the development of eHealth and Ambient Assisted Living (AAL) services to 
mainly benefit the elderly and individuals with disabilities. These services are a 
helpful tool to address the inherent problems of the aging societies. Among the 
enabling technologies of eHealth and ALL services, we have wireless sensor 
networks, the Internet of Things, ambient intelligence, and cyber-physical systems, 
just to name a few.
</p>
<p align=\"justify\">
The development of eHealth and Ambient Assisted Living services requires the 
seamless integration of computing and communication technologies, and the use of 
efficient algorithms and platforms. In addition, these services may also enforce the 
use of new approaches and paradigms for ubiquitous computing and closed-loop 
solutions.
</p>
<p align=\"justify\">
The main objective of this workshop is to provide a forum for researchers from 
both academia and industry, to discuss current problems that face the 
development of the future eHealth and AAL services. We encourage the 
participation of researchers from the sensing network, Internet of Things, Cyber-
physical, ubiquitous computing, and signal processing communities, among others, 
to submit contributions to the workshop.
</p>
<h1>Topics</h1>
<p > 
Topics of interest include, but are not limited to, the following scope:
<ul>
<li>Smart Ad hoc and wireless sensor networks for eHealth and AAL</li>
<li>Internet of Things (IoT) solutions for eHealth and AAL</li>
<li>Cyber-physicals systems aimed to eHealth and AAL</li>
<li>Cloud and mobile computing for eHealth and AAL</li>
<li>Service oriented architectures for eHealth and AAL</li>
<li>Mobile solutions for eHealth and AAL</li>
<li>eHealth and AAL services design and implementation</li>
<li>Pervasive and ubiquitous computing for eHealth and AAL</li>
<li>Body sensor networks and wearable sensor systems</li>
<li>Network architectures and protocols for eHealth and AAL</li>
<li>Wireless access to eHealth and AAL systems</li>
<li>Security, privacy and trust management for eHealth and AAL</li>
<li>Middleware for eHealth and AAL systems</li>
<li>Detection and tracking algorithms for eHealth and AAL</li>
<li>Fusion information techniques for eHealth and AAL</li>
</ul>
</p>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
