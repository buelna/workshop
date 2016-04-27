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
        $__internal_5d458fd7b523212955e74799e881013dbd2850b0373b3202c1836567b41f3334 = $this->env->getExtension("native_profiler");
        $__internal_5d458fd7b523212955e74799e881013dbd2850b0373b3202c1836567b41f3334->enter($__internal_5d458fd7b523212955e74799e881013dbd2850b0373b3202c1836567b41f3334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    <div class=\"fondo\" style=\"padding-bottom: 0px;padding-top: 0px;\">
      <div class=\"page-wrap\">
          <div class=\"row\">
            <a href=\"http://ccnc2017.ieee-ccnc.org/\">
                  <img src=\"";
        // line 17
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
        // line 31
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
                      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("call");
        echo "\">Call for Papers</a></li>
                      <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("instrucciones");
        echo "\">Instructions for Authors</a></li>
                      <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\">Program</a></li>
                      <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("comite");
        echo "\">Committee</a></li>
                      <li><a href=\"";
        // line 36
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
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vegas1.jpg"), "html", null, true);
        echo "\" class=\"img-rounded img-responsive\" width=\"100%\" >
            </div>
          </div>
          </div>
          <div class=\"row\" style=\"background: white;padding-left:5px;padding-top:10px;\">
            ";
        // line 51
        $this->displayBlock('cols', $context, $blocks);
        // line 54
        echo "              <div id=\"content\" width=\"100%\">
                <div id=\"content-padding\">
              ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "              </div>
              </div>
            </div>
            ";
        // line 63
        echo "            ";
        $this->displayBlock('lateral', $context, $blocks);
        // line 65
        echo "            ";
        // line 66
        echo "          </div>
      </div>
      <footer class=\"site-footer\" style=\"background: white;max-width: 57.5rem;\" >
        <div class=\"large-12 columns\">
          <hr/>
          <div class=\"row\">
            <div class=\"large-5 columns\">
                <div style=\"padding-left: 10px;padding-right: 10px; \">
                <p style=\"font-size: 10px;\">© Copyright. Workshop on Ambient Assisted Living and eHealth (AALEH 2017)</p>
                </div>
            </div>
            <div class=\"large-7 columns\">
              
            </div>
          </div>
        </div>
      </footer>
      </div>
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.dropdown.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.tab.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/orbit.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).foundation();
</script>
    </body>
</html>
";
        
        $__internal_5d458fd7b523212955e74799e881013dbd2850b0373b3202c1836567b41f3334->leave($__internal_5d458fd7b523212955e74799e881013dbd2850b0373b3202c1836567b41f3334_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d1e2f94d49bc659f2777f245b1a38a48de4486b8b2d35b7d92056ab325e6d01 = $this->env->getExtension("native_profiler");
        $__internal_0d1e2f94d49bc659f2777f245b1a38a48de4486b8b2d35b7d92056ab325e6d01->enter($__internal_0d1e2f94d49bc659f2777f245b1a38a48de4486b8b2d35b7d92056ab325e6d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AALEH 2017";
        
        $__internal_0d1e2f94d49bc659f2777f245b1a38a48de4486b8b2d35b7d92056ab325e6d01->leave($__internal_0d1e2f94d49bc659f2777f245b1a38a48de4486b8b2d35b7d92056ab325e6d01_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68d05ab51fe22ff7e45d2f70cae106a70105b00ce73e4686525169ab5d2a5a33 = $this->env->getExtension("native_profiler");
        $__internal_68d05ab51fe22ff7e45d2f70cae106a70105b00ce73e4686525169ab5d2a5a33->enter($__internal_68d05ab51fe22ff7e45d2f70cae106a70105b00ce73e4686525169ab5d2a5a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_68d05ab51fe22ff7e45d2f70cae106a70105b00ce73e4686525169ab5d2a5a33->leave($__internal_68d05ab51fe22ff7e45d2f70cae106a70105b00ce73e4686525169ab5d2a5a33_prof);

    }

    // line 51
    public function block_cols($context, array $blocks = array())
    {
        $__internal_d7b3ad915c69f07a8f61831119818f036de79b1e4e43a83357782be91fc3ffa4 = $this->env->getExtension("native_profiler");
        $__internal_d7b3ad915c69f07a8f61831119818f036de79b1e4e43a83357782be91fc3ffa4->enter($__internal_d7b3ad915c69f07a8f61831119818f036de79b1e4e43a83357782be91fc3ffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 52
        echo "            ";
        // line 53
        echo "            ";
        
        $__internal_d7b3ad915c69f07a8f61831119818f036de79b1e4e43a83357782be91fc3ffa4->leave($__internal_d7b3ad915c69f07a8f61831119818f036de79b1e4e43a83357782be91fc3ffa4_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_57d49094cd7f6514e82917ddc9bd32ff05ed964012e9a5bb6f4c95e942cb7ae7 = $this->env->getExtension("native_profiler");
        $__internal_57d49094cd7f6514e82917ddc9bd32ff05ed964012e9a5bb6f4c95e942cb7ae7->enter($__internal_57d49094cd7f6514e82917ddc9bd32ff05ed964012e9a5bb6f4c95e942cb7ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "
              ";
        
        $__internal_57d49094cd7f6514e82917ddc9bd32ff05ed964012e9a5bb6f4c95e942cb7ae7->leave($__internal_57d49094cd7f6514e82917ddc9bd32ff05ed964012e9a5bb6f4c95e942cb7ae7_prof);

    }

    // line 63
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_6b2572ac93e54224a33f43d922659d093b8f08b90b56578ac5c2f415974e6e86 = $this->env->getExtension("native_profiler");
        $__internal_6b2572ac93e54224a33f43d922659d093b8f08b90b56578ac5c2f415974e6e86->enter($__internal_6b2572ac93e54224a33f43d922659d093b8f08b90b56578ac5c2f415974e6e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 64
        echo "            ";
        
        $__internal_6b2572ac93e54224a33f43d922659d093b8f08b90b56578ac5c2f415974e6e86->leave($__internal_6b2572ac93e54224a33f43d922659d093b8f08b90b56578ac5c2f415974e6e86_prof);

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
        return array (  255 => 64,  249 => 63,  241 => 57,  235 => 56,  228 => 53,  226 => 52,  220 => 51,  209 => 9,  197 => 5,  182 => 90,  178 => 89,  174 => 88,  170 => 87,  166 => 86,  162 => 85,  158 => 84,  138 => 66,  136 => 65,  133 => 63,  128 => 59,  126 => 56,  122 => 54,  120 => 51,  112 => 46,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  83 => 32,  79 => 31,  62 => 17,  51 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}AALEH 2017{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/foundation.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/kube.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/app/css/orbit.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('icono.ico') }}" />*/
/*     </head>*/
/*     <body >*/
/*     <div class="fondo" style="padding-bottom: 0px;padding-top: 0px;">*/
/*       <div class="page-wrap">*/
/*           <div class="row">*/
/*             <a href="http://ccnc2017.ieee-ccnc.org/">*/
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
/*                 <p style="font-size: 10px;">© Copyright. Workshop on Ambient Assisted Living and eHealth (AALEH 2017)</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="large-7 columns">*/
/*               */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </footer>*/
/*       </div>*/
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
