<?php

/* AppBundle:Default:instrucciones.html.twig */
class __TwigTemplate_1b9e536396e20ed76f0e9815c1f3fa42b6de9ae486f60af50c3622dfcac96e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseLateral.html.twig", "AppBundle:Default:instrucciones.html.twig", 1);
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
        echo "<h1>Instructions for Authors</h1>
<p>
Submitted papers must represent original material that is not currently under review in any other conference or journal, and has not been previously published. Paper length should not exceed six-page (10-point font) technical paper manuscript.
<br><br>
Papers should be submitted in .pdf format by selecting CCNC 2016 on the EDAS paper submission website and then selecting the <a href=\"http://edas.info/newPaper.php?c=20477&track=74743\">AALEH workshop submission link</a>. Papers should be a maximum of 6 pages in length and follow the IEEE formatting rules. Papers will receive at least 3 independent reviews from the workshop TPC.
<br><br>
To be published in the IEEE CCNC 2016 Conference Proceedings and to be eligible for publication in IEEE Xplore®, an author of an accepted paper is required to register for the conference at the Full or Limited (member or non-member) rate and the paper must be presented by an author of that paper at the conference unless the TPC Chair grants permission for a substitute presenter in advance of the event and who is qualified both to present and answer questions. Non-refundable registration fees must be paid prior to uploading the final IEEE formatted, publication-ready version of the paper. For authors with multiple accepted papers, one full registration is valid for up to 3 papers. Accepted and presented papers will be published in the IEEE CCNC 2016 Conference Proceedings and submitted to IEEE Xplore®.
<br><br>
Standard IEEE conference templates for LaTeX formats are found at <a href=\"http://www.ieee.org/conferences_events/conferences/publishing/templates.html\">here</a>
<br><br>
See IEEE CCNC 2016 conference website for more details: <a href=\"http://ccnc2016.ieee-ccnc.org/authors\">http://ccnc2016.ieee-ccnc.org/authors</a>
 </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:instrucciones.html.twig";
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
