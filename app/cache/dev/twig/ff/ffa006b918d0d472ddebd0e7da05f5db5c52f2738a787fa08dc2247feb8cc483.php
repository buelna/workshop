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
        $__internal_9e611e3027cf3db2921f5a30f216fa768bb26dd18319d54b4a132cf5d9915280 = $this->env->getExtension("native_profiler");
        $__internal_9e611e3027cf3db2921f5a30f216fa768bb26dd18319d54b4a132cf5d9915280->enter($__internal_9e611e3027cf3db2921f5a30f216fa768bb26dd18319d54b4a132cf5d9915280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9e611e3027cf3db2921f5a30f216fa768bb26dd18319d54b4a132cf5d9915280->leave($__internal_9e611e3027cf3db2921f5a30f216fa768bb26dd18319d54b4a132cf5d9915280_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_784d5ad5c93adec25d96a995a62b31a19ccbf9f39a0cd52a56851d02611bba59 = $this->env->getExtension("native_profiler");
        $__internal_784d5ad5c93adec25d96a995a62b31a19ccbf9f39a0cd52a56851d02611bba59->enter($__internal_784d5ad5c93adec25d96a995a62b31a19ccbf9f39a0cd52a56851d02611bba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AALEH 2017";
        
        $__internal_784d5ad5c93adec25d96a995a62b31a19ccbf9f39a0cd52a56851d02611bba59->leave($__internal_784d5ad5c93adec25d96a995a62b31a19ccbf9f39a0cd52a56851d02611bba59_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4a3f567df78cfbae02ad17e2666d2e039f771257985880f463c607cbc60afc6 = $this->env->getExtension("native_profiler");
        $__internal_e4a3f567df78cfbae02ad17e2666d2e039f771257985880f463c607cbc60afc6->enter($__internal_e4a3f567df78cfbae02ad17e2666d2e039f771257985880f463c607cbc60afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e4a3f567df78cfbae02ad17e2666d2e039f771257985880f463c607cbc60afc6->leave($__internal_e4a3f567df78cfbae02ad17e2666d2e039f771257985880f463c607cbc60afc6_prof);

    }

    // line 51
    public function block_cols($context, array $blocks = array())
    {
        $__internal_8418945488e398ae1dac3b36bad6ee4335f0fa7058785d540cff11c81cfc6f82 = $this->env->getExtension("native_profiler");
        $__internal_8418945488e398ae1dac3b36bad6ee4335f0fa7058785d540cff11c81cfc6f82->enter($__internal_8418945488e398ae1dac3b36bad6ee4335f0fa7058785d540cff11c81cfc6f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cols"));

        // line 52
        echo "            ";
        // line 53
        echo "            ";
        
        $__internal_8418945488e398ae1dac3b36bad6ee4335f0fa7058785d540cff11c81cfc6f82->leave($__internal_8418945488e398ae1dac3b36bad6ee4335f0fa7058785d540cff11c81cfc6f82_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_8353dcfed66e083c84121367a871e860879ff7e5c128f1f8d7810a913fcd0068 = $this->env->getExtension("native_profiler");
        $__internal_8353dcfed66e083c84121367a871e860879ff7e5c128f1f8d7810a913fcd0068->enter($__internal_8353dcfed66e083c84121367a871e860879ff7e5c128f1f8d7810a913fcd0068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "
              ";
        
        $__internal_8353dcfed66e083c84121367a871e860879ff7e5c128f1f8d7810a913fcd0068->leave($__internal_8353dcfed66e083c84121367a871e860879ff7e5c128f1f8d7810a913fcd0068_prof);

    }

    // line 63
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_c36cc040b734412acb5f73caefa443b726b8d14f089291c8c15f0501650aca79 = $this->env->getExtension("native_profiler");
        $__internal_c36cc040b734412acb5f73caefa443b726b8d14f089291c8c15f0501650aca79->enter($__internal_c36cc040b734412acb5f73caefa443b726b8d14f089291c8c15f0501650aca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 64
        echo "            ";
        
        $__internal_c36cc040b734412acb5f73caefa443b726b8d14f089291c8c15f0501650aca79->leave($__internal_c36cc040b734412acb5f73caefa443b726b8d14f089291c8c15f0501650aca79_prof);

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
