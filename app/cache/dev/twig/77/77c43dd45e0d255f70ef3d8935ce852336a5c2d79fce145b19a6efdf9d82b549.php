<?php

/* AppBundle:Default:instrucciones.html.twig */
class __TwigTemplate_f1127f0b0754d68feca8c6bb9c5411bf16b1b7286547d6b8a7ff7af685406f1b extends Twig_Template
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
        $__internal_d20608fe886cc64c12c953a4c87fd75ebccd4aaed3365575f396e09d35364756 = $this->env->getExtension("native_profiler");
        $__internal_d20608fe886cc64c12c953a4c87fd75ebccd4aaed3365575f396e09d35364756->enter($__internal_d20608fe886cc64c12c953a4c87fd75ebccd4aaed3365575f396e09d35364756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:instrucciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d20608fe886cc64c12c953a4c87fd75ebccd4aaed3365575f396e09d35364756->leave($__internal_d20608fe886cc64c12c953a4c87fd75ebccd4aaed3365575f396e09d35364756_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5306c37d58c132af5aae5d29d0557b9c48170494c212b0b9157584953b98c385 = $this->env->getExtension("native_profiler");
        $__internal_5306c37d58c132af5aae5d29d0557b9c48170494c212b0b9157584953b98c385->enter($__internal_5306c37d58c132af5aae5d29d0557b9c48170494c212b0b9157584953b98c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Instructions for Authors</h1>
<p>
Submitted papers must represent original material that is not currently under review in any other conference or journal, and has not been previously published. Paper length should not exceed six-page (10-point font) technical paper manuscript.
<br><br>
Papers should be submitted in .pdf format by selecting CCNC 2017 on the EDAS paper submission website and then selecting the <a href=\"https://edas.info/newPaper.php?c=22573&track=80966\">AALEH workshop submission link</a>. All final submissions should be written in English with a maximum paper length of six (6) printed pages (10-point font) including figures without incurring additional page charges (maximum 1 additional page with over length page charge of USD100 if accepted). Papers exceeding 7 pages will not be accepted at EDAS. Papers will receive at least 3 independent reviews from the workshop TPC.
<br><br>
To be published in the IEEE CCNC 2017 Conference Proceedings and to be eligible for publication in IEEE Xplore®, an author of an accepted paper is required to register for the conference at the Full or Limited (member or non-member) rate and the paper must be presented by an author of that paper at the conference unless the TPC Chair grants permission for a substitute presenter in advance of the event and who is qualified both to present and answer questions. Non-refundable registration fees must be paid prior to uploading the final IEEE formatted, publication-ready version of the paper. For authors with multiple accepted papers, one full registration is valid for up to 3 papers. Accepted and presented papers will be published in the IEEE CCNC 2017 Conference Proceedings and submitted to IEEE Xplore®.
<br><br>
Standard IEEE conference templates for LaTeX formats are found at <a href=\"http://www.ieee.org/conferences_events/conferences/publishing/templates.html\">here</a>
<br><br>
See IEEE CCNC 2017 conference website for more details: <a href=\"http://ccnc2017.ieee-ccnc.org/authors\">http://ccnc2017.ieee-ccnc.org/authors</a>
 </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";
        
        $__internal_5306c37d58c132af5aae5d29d0557b9c48170494c212b0b9157584953b98c385->leave($__internal_5306c37d58c132af5aae5d29d0557b9c48170494c212b0b9157584953b98c385_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::baseLateral.html.twig' %}*/
/* {% block content %}*/
/* <h1>Instructions for Authors</h1>*/
/* <p>*/
/* Submitted papers must represent original material that is not currently under review in any other conference or journal, and has not been previously published. Paper length should not exceed six-page (10-point font) technical paper manuscript.*/
/* <br><br>*/
/* Papers should be submitted in .pdf format by selecting CCNC 2017 on the EDAS paper submission website and then selecting the <a href="https://edas.info/newPaper.php?c=22573&track=80966">AALEH workshop submission link</a>. All final submissions should be written in English with a maximum paper length of six (6) printed pages (10-point font) including figures without incurring additional page charges (maximum 1 additional page with over length page charge of USD100 if accepted). Papers exceeding 7 pages will not be accepted at EDAS. Papers will receive at least 3 independent reviews from the workshop TPC.*/
/* <br><br>*/
/* To be published in the IEEE CCNC 2017 Conference Proceedings and to be eligible for publication in IEEE Xplore®, an author of an accepted paper is required to register for the conference at the Full or Limited (member or non-member) rate and the paper must be presented by an author of that paper at the conference unless the TPC Chair grants permission for a substitute presenter in advance of the event and who is qualified both to present and answer questions. Non-refundable registration fees must be paid prior to uploading the final IEEE formatted, publication-ready version of the paper. For authors with multiple accepted papers, one full registration is valid for up to 3 papers. Accepted and presented papers will be published in the IEEE CCNC 2017 Conference Proceedings and submitted to IEEE Xplore®.*/
/* <br><br>*/
/* Standard IEEE conference templates for LaTeX formats are found at <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html">here</a>*/
/* <br><br>*/
/* See IEEE CCNC 2017 conference website for more details: <a href="http://ccnc2017.ieee-ccnc.org/authors">http://ccnc2017.ieee-ccnc.org/authors</a>*/
/*  </p>*/
/* <p>&nbsp;</p>*/
/* <p>&nbsp;</p>*/
/* {% endblock %}*/
/* */
