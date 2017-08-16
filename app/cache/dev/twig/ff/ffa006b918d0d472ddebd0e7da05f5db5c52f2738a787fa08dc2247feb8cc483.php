<?php

/* ::base.html.twig */
class __TwigTemplate_4e9954efc379c50274be15ce1c1f326768181492e01a0aee6627026f49c164fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cols' => array($this, 'block_cols'),
            'content' => array($this, 'block_content'),
            'lateral' => array($this, 'block_lateral'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46a1b9670337d7a0507f79f8e75ad80c7d2f8eb246f3335cc1aa681931cfdf2 = $this->env->getExtension("native_profiler");
        $__internal_b46a1b9670337d7a0507f79f8e75ad80c7d2f8eb246f3335cc1aa681931cfdf2->enter($__internal_b46a1b9670337d7a0507f79f8e75ad80c7d2f8eb246f3335cc1aa681931cfdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/foundation.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/kube.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/orbit.css"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icono.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
    <div class=\"body_back\">
    <div class=\"fondo\" style=\"padding-bottom: 0px;padding-top: 0px;\">
      <div class=\"page-wrap\">
          <div class=\"row\">
            <a href=\"http://ccnc2018.ieee-ccnc.org/\">
                  <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("banner.png"), "html", null, true);
        echo "\" class=\"img-rounded img-responsive\" width=\"100%\">
            </a>
          </div>
          <div class=\"row\">
              <div class=\"contain-to-grid\">
                <nav class=\"top-bar\" data-topbar>
                  <ul class=\"title-area\">
                    <li class=\"name\">
                      <h1><a href=\"\"></a></h1>
                    </li>
                    <li class=\"toggle-topbar menu-icon\"><a href=\"\">Menu</a></li>
                  </ul>
                  <section class=\"top-bar-section\">
                    <ul class=\"left\">
                      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
                      <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("call");
        echo "\">Call for Papers</a></li>
                      <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("instrucciones");
        echo "\">Instructions for Authors</a></li>
                      <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\">Program</a></li>
                      <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("comite");
        echo "\">Committee</a></li>
                      <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("venue");
        echo "\">Venue</a></li>
                    </ul>
                  </section>
                  <section class=\"right\"></section>
                </nav>
              </div>
          </div>
          <div class=\"row\" style=\"background: white;\">
          <div id=\"content-padding\">
            <div class=\"large-12 columns\">
              <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vegas1.jpg"), "html", null, true);
        echo "\" class=\"img-rounded img-responsive\" width=\"100%\" >
            </div>
          </div>
          </div>
          <div class=\"row\" style=\"background: white;padding-left:5px;padding-top:10px;\">
            ";
        // line 52
        $this->displayBlock('cols', $context, $blocks);
        // line 55
        echo "              <div id=\"content\" width=\"100%\">
                <div id=\"content-padding\">
              ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "              </div>
              </div>
            </div>
            ";
        // line 64
        echo "            ";
        $this->displayBlock('lateral', $context, $blocks);
        // line 66
        echo "            ";
        // line 67
        echo "          </div>
      </div>
      <footer class=\"site-footer\" style=\"background: white;max-width: 57.5rem;\" >
        <div class=\"large-12 columns\">
          <hr/>
          <div class=\"row\">
            <div class=\"large-5 columns\">
                <div style=\"padding-left: 10px;padding-right: 10px; \">
                <p style=\"font-size: 10px;\">© Copyright. Workshop on Ambient Assisted Living and eHealth (AALEH 2018)</p>
                </div>
            </div>
            <div class=\"large-7 columns\">
              
            </div>
          </div>
        </div>
      </footer>
      </div>
    </div>
  <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.dropdown.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.tab.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/orbit.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).foundation();
</script>
    </body>
</html>
";
        
        $__internal_b46a1b9670337d7a0507f79f8e75ad80c7d2f8eb246f3335cc1aa681931cfdf2->leave($__internal_b46a1b9670337d7a0507f79f8e75ad80c7d2f8eb246f3335cc1aa681931cfdf2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc83bcff26cc5562dbcd7362972ad98c0d705fdd8e58b62a7cbb1d04735ba3b4 = $this->env->getExtension("native_profiler");
        $__internal_fc83bcff26cc5562dbcd7362972ad98c0d705fdd8e58b62a7cbb1d04735ba3b4->enter($__internal_fc83bcff26cc5562dbcd7362972ad98c0d705fdd8e58b62a7cbb1d04735ba3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AALEH 2018";
        
        $__internal_fc83bcff26cc5562dbcd7362972ad98c0d705fdd8e58b62a7cbb1d04735ba3b4->leave($__internal_fc83bcff26cc5562dbcd7362972ad98c0d705fdd8e58b62a7cbb1d04735ba3b4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a61f6352fcd0308042af38d2e9c0b3f4be9f96fc1528de6d39c6101c2f2199f = $this->env->getExtension("native_profiler");
        $__internal_1a61f6352fcd0308042af38d2e9c0b3f4be9f96fc1528de6d39c6101c2f2199f->enter($__internal_1a61f6352fcd0308042af38d2e9c0b3f4be9f96fc1528de6d39c6101c2f2199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a61f6352fcd0308042af38d2e9c0b3f4be9f96fc1528de6d39c6101c2f2199f->leave($__internal_1a61f6352fcd0308042af38d2e9c0b3f4be9f96fc1528de6d39c6101c2f2199f_prof);

    }

    // line 52
    public function block_cols($context, array $blocks = array())
    {
        $__internal_e2b6d611bb28f132455427e874788fdfc9b6512f3b022941f580f4a34cacc031 = $this->env->getExtension("native_profiler");
        $__internal_e2b6d611bb28f132455427e874788fdfc9b6512f3b022941f580f4a34cacc031->enter($__internal_e2b6d611bb28f132455427e874788fdfc9b6512f3b022941f580f4a34cacc031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 53
        echo "            ";
        // line 54
        echo "            ";
        
        $__internal_e2b6d611bb28f132455427e874788fdfc9b6512f3b022941f580f4a34cacc031->leave($__internal_e2b6d611bb28f132455427e874788fdfc9b6512f3b022941f580f4a34cacc031_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5e5c6aecd7a5946f51462e4238ee19af478cca227ee6f60f95360dab64007ac = $this->env->getExtension("native_profiler");
        $__internal_c5e5c6aecd7a5946f51462e4238ee19af478cca227ee6f60f95360dab64007ac->enter($__internal_c5e5c6aecd7a5946f51462e4238ee19af478cca227ee6f60f95360dab64007ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "
              ";
        
        $__internal_c5e5c6aecd7a5946f51462e4238ee19af478cca227ee6f60f95360dab64007ac->leave($__internal_c5e5c6aecd7a5946f51462e4238ee19af478cca227ee6f60f95360dab64007ac_prof);

    }

    // line 64
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_0457b3ad238008487e729f0f0dbfd4def2111a56343406f27e543c647a608d42 = $this->env->getExtension("native_profiler");
        $__internal_0457b3ad238008487e729f0f0dbfd4def2111a56343406f27e543c647a608d42->enter($__internal_0457b3ad238008487e729f0f0dbfd4def2111a56343406f27e543c647a608d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 65
        echo "            ";
        
        $__internal_0457b3ad238008487e729f0f0dbfd4def2111a56343406f27e543c647a608d42->leave($__internal_0457b3ad238008487e729f0f0dbfd4def2111a56343406f27e543c647a608d42_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 65,  251 => 64,  243 => 58,  237 => 57,  230 => 54,  228 => 53,  222 => 52,  211 => 9,  199 => 5,  184 => 92,  180 => 91,  176 => 90,  172 => 89,  168 => 88,  164 => 87,  160 => 86,  139 => 67,  137 => 66,  134 => 64,  129 => 60,  127 => 57,  123 => 55,  121 => 52,  113 => 47,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  63 => 18,  51 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}AALEH 2018{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/foundation.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/kube.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/orbit.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('icono.ico') }}" />*/
/*     </head>*/
/*     <body >*/
/*     <div class="body_back">*/
/*     <div class="fondo" style="padding-bottom: 0px;padding-top: 0px;">*/
/*       <div class="page-wrap">*/
/*           <div class="row">*/
/*             <a href="http://ccnc2018.ieee-ccnc.org/">*/
/*                   <img src="{{ asset('banner.png')}}" class="img-rounded img-responsive" width="100%">*/
/*             </a>*/
/*           </div>*/
/*           <div class="row">*/
/*               <div class="contain-to-grid">*/
/*                 <nav class="top-bar" data-topbar>*/
/*                   <ul class="title-area">*/
/*                     <li class="name">*/
/*                       <h1><a href=""></a></h1>*/
/*                     </li>*/
/*                     <li class="toggle-topbar menu-icon"><a href="">Menu</a></li>*/
/*                   </ul>*/
/*                   <section class="top-bar-section">*/
/*                     <ul class="left">*/
/*                       <li><a href="{{ path('home') }}">Home</a></li>*/
/*                       <li><a href="{{ path('call') }}">Call for Papers</a></li>*/
/*                       <li><a href="{{ path('instrucciones') }}">Instructions for Authors</a></li>*/
/*                       <li><a href="{{ path('programa') }}">Program</a></li>*/
/*                       <li><a href="{{ path('comite') }}">Committee</a></li>*/
/*                       <li><a href="{{ path('venue') }}">Venue</a></li>*/
/*                     </ul>*/
/*                   </section>*/
/*                   <section class="right"></section>*/
/*                 </nav>*/
/*               </div>*/
/*           </div>*/
/*           <div class="row" style="background: white;">*/
/*           <div id="content-padding">*/
/*             <div class="large-12 columns">*/
/*               <img src="{{ asset('vegas1.jpg')}}" class="img-rounded img-responsive" width="100%" >*/
/*             </div>*/
/*           </div>*/
/*           </div>*/
/*           <div class="row" style="background: white;padding-left:5px;padding-top:10px;">*/
/*             {% block cols %}*/
/*             {#<div class="large-9 columns">#}*/
/*             {% endblock %}*/
/*               <div id="content" width="100%">*/
/*                 <div id="content-padding">*/
/*               {% block content %}*/
/* */
/*               {% endblock %}*/
/*               </div>*/
/*               </div>*/
/*             </div>*/
/*             {#<div class="large-3 columns">#}*/
/*             {% block lateral %}*/
/*             {% endblock %}*/
/*             {#</div>#}*/
/*           </div>*/
/*       </div>*/
/*       <footer class="site-footer" style="background: white;max-width: 57.5rem;" >*/
/*         <div class="large-12 columns">*/
/*           <hr/>*/
/*           <div class="row">*/
/*             <div class="large-5 columns">*/
/*                 <div style="padding-left: 10px;padding-right: 10px; ">*/
/*                 <p style="font-size: 10px;">© Copyright. Workshop on Ambient Assisted Living and eHealth (AALEH 2018)</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="large-7 columns">*/
/*               */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </footer>*/
/*       </div>*/
/*     </div>*/
/*   <script src="{{asset('bundles/app/js/foundation.min.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/foundation/foundation.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/foundation/foundation.dropdown.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/foundation/foundation.tab.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/vendor/jquery.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/foundation/foundation.topbar.js')}}"></script>*/
/*   <script src="{{asset('bundles/app/js/orbit.js')}}"></script>*/
/* */
/* <script>*/
/*  $(document).foundation();*/
/* </script>*/
/*     </body>*/
/* </html>*/
/* */
