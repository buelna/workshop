<?php

/* AppBundle:Default:comite.html.twig */
class __TwigTemplate_df1cecd78a9658d18f93beda1e323cd0184bd625439b5c4dd8dd8d58921fb77d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Organization</h1>
<p>
<h4>General Chair</h4>
Arnoldo Díaz-Ramírez (ITM, México)
<br><br>
<h4>Program Committee</h4>
Paolo Spagnolo (INO, Italy)<br>
Jonathon Chambers (Newcastle University, UK)<br>
Johann M. Marquez-Barja  (CTVR-Trinity College Dublin, Ireland)<br>
Victor H. Díaz-Ramírez (CITEDI-IPN, México)<br>
Juan Pablo García (UABC, México)<br>
Mihail Popescu (University of Missouri, USA)<br>
Anthony D. Wood (University of Virginia, USA)<br>
Sergio Martínez (UPV, Spain)<br>
Julio Alberto Sangüesa Escorihuela (University of Zaragoza, Spain)<br>
David Boyle (Imperial College, UK)<br>
 </p>
";
    }

    // line 21
    public function block_cols($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"large-12 columns\">
";
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
        return array (  56 => 22,  53 => 21,  32 => 3,  29 => 2,  11 => 1,);
    }
}
