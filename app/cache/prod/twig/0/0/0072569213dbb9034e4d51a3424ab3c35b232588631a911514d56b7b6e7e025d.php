<?php

/* AppBundle:Default:programa.html.twig */
class __TwigTemplate_0072569213dbb9034e4d51a3424ab3c35b232588631a911514d56b7b6e7e025d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:programa.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<ul class=\"pricing-table\">
  <li class=\"title\"><strong>Technical Program<br>Saturday, January 9, 2016</strong></li>
</ul>
<ul class=\"pricing-table\">
  <li class=\"title\"><strong>9:00 – 10:00: AALEH - Ambient Assisted Living and eHealth (1)</strong><br>
    <strong>Session chair: Prof. Arnoldo Diaz-Ramirez</strong><br>
    <strong>Room: Sunset 1</strong></li>
   
  <li class=\"bullet-item\">
     <font size=\"3\">
      <strong>User Interface Design for Privacy Awareness in eHealth Technologies</strong><br>
      Isabel Wagner<sup>1</sup>; Ying He<sup>1</sup>; Duska Rosenberg<sup>1</sup>; Helge Janicke<sup>1</sup> (<sup>1</sup>De Montfort University, UK)
      </font>
  </li>
  <li class=\"bullet-item\">
    <font size=\"3\">
      <strong>An Improved Joint Power Harvesting and Communication Technology for Smartphone Centric Ubiquitous Sensing Applications</strong><br>
      Hong Nie<sup>1</sup>; Ranjana Joshi<sup>1</sup>; Ziyuan Li<sup>1</sup> (<sup>1</sup>University of Northern Iowa, USA)
    </font>
  </li>
</ul>
<ul class=\"pricing-table\">
  <li class=\"title\"><strong>10:00 – 10:30: Coffee Break and Networking</strong></li>
</ul>
<ul class=\"pricing-table\">
  <li class=\"title\"><strong>10:30 – 13:00: AALEH - Ambient Assisted Living and eHealth (2)</strong><br>
    <strong>Session chair: Prof. Arnoldo Diaz-Ramirez</strong><br>
    <strong>Room: Sunset 1</strong></li>
  <li class=\"bullet-item\">
    <font size=\"3\">
      <strong>Modeling the Long Term Fading Behaviour in Residential Wireless Sensor Networks</strong><br>
      Falk-Moritz Schaefer<sup>1</sup> (<sup>1</sup>Accenture Technology, Accenture GmbH, Düsseldorf, Germany); Ruediger Kays<sup>2</sup> (<sup>2</sup>TU Dortmund University, Germany)  
    </font>
  </li>
  <li class=\"bullet-item\">
    <font size=\"3\">
      <strong>PAT: A Power-Aware Decision Tree Algorithm for Mobile Activity Recognition</strong><br>
      Luis G Jaimes<sup>1</sup> (<sup>1</sup>Bethune-Cookman University, USA); Yueng Delahoz<sup>2</sup>; Christopher Eggert<sup>2</sup>; Idalides Vergara-Laurens<sup>2</sup> (<sup>2</sup>University of South Florida, USA)
    </font>
  </li>
  <li class=\"bullet-item\">
    <font size=\"3\">
      <strong>Encoding Distortion Modeling For DWT-Based Wireless EEG Monitoring System</strong><br>
      Alaa Awad Abdellatif<sup>1</sup>; Medhat Hamdy<sup>2</sup> (<sup>2</sup>Carleton University, Canada); Amr Mohamed<sup>1</sup> (<sup>1</sup>Qatar University, Qatar)
    </font>
  </li>
  <li class=\"bullet-item\">
    <font size=\"3\">
      <strong>Hybrid Rapid Response Routing Approach for Delay-Sensitive Data in Hospital Body Area Sensor Network</strong><br>
      Tariq Umer<sup>1</sup>; Muhammad Amjad<sup>1</sup>; Muhammad Khalil Afzal<sup>1</sup> (<sup>1</sup>COMSATS Institute of Information Technology, Pakistan); Muhammad Aslam<sup>2</sup> (<sup>2</sup>School of Computer Science and Technology Dalian University of Technology, China)
    </font>
  </li>
</ul>
</font>
";
    }

    // line 58
    public function block_cols($context, array $blocks = array())
    {
        // line 59
        echo "<div class=\"large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:programa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 59,  90 => 58,  32 => 3,  29 => 2,  11 => 1,);
    }
}
