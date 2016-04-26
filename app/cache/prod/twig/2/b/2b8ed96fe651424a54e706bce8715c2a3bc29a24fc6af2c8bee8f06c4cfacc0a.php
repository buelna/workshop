<?php

/* AppBundle:Default:venue.html.twig */
class __TwigTemplate_2b8ed96fe651424a54e706bce8715c2a3bc29a24fc6af2c8bee8f06c4cfacc0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:venue.html.twig", 1);
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
        echo "<h1>Venue</h1>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\t&nbsp;&nbsp;&nbsp;<img alt=\"\" src=\"http://www.destination360.com/north-america/us/nevada/las-vegas/images/planet-hollywood-las-vegas.jpg\" width=\"45%\" height=\"45%\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
\tIEEE CCNC 2016 conference has selected the Planet Hollywood Resort &amp; Casino as its headquarters hotel. The Planet Hollywood Resort &amp; Casino is an exciting place to be. Located on the Las Vegas Strip, this Las Vegas Resort offers spacious rooms and bathrooms, as well as nearly three acres of casino entertainment.&nbsp;&nbsp;<br>
\t<br>
\tPlanet Hollywood<br>
\t3667 Las Vegas Blvd S<br>
\tLas Vegas, NV 89109<br>
\tMain Tel: +1 702-785-5555 or 1-866-227-5944<br>
\tReservations: +1 866-317-1829<br>
\t<br>
\tPlease identify yourself with IEEE CCNC Conference.<br>
\t<br>
\tThe following rates are per guestroom, per night, single or double occupancy. Rates are subject to Clark County Room Tax, currently twelve percent (12%).<br>
\t<br>
\tWednesday, January 6, 2016 \$219.00*<br>
\tThursday, January 7, 2016 \$219.00*<br>
\tFriday, January 8, 2016 \$219.00*<br>
\tSaturday, January 9, 2016 \$159.00*<br>
\tSunday, January 10, 2016 \$159.00*<br>
\tMonday, January 11, 2016 \$159.00*</p>
\t<p><br>
\tGroup code: SMIEE6 |call center number (877) 603-4389</p>
\t<p>Web link: https://resweb.passkey.com/go/SMIEE6<br>
\t<br>
\t*Please note - a daily \$20.00 resort fee plus tax will be added to your rate upon check-in.<br>
\t<br>
\tReservation Deadline is Friday, December 4, 2015. Upon booking your reservation, your credit card will be charged, a deposit equal to one night's room and tax. To avoid forfeiture of deposit, please ensure all changes and cancellations are made at least 72 hours prior to scheduled arrival date.<br>
\t<br>
\tImportant Notice<br>
\t<br>
\tThe IEEE Communications Society has contractual obligations to fill guaranteed guest room blocks at Planet Hollywood. Significant financial penalties will be assessed the Society should CCNC 2016 fall short of the expected number of rooms guaranteed. By staying at the Planet Hollywood, you'll enjoy logistical conveniences and additional networking opportunities in valued support of IEEE ComSoc's financial obligations.</p>
";
    }

    // line 37
    public function block_cols($context, array $blocks = array())
    {
        // line 38
        echo "<div class=\"large-12 columns\">
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:venue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  69 => 37,  32 => 3,  29 => 2,  11 => 1,);
    }
}
