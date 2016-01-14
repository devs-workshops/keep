<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_2bedb81ace0a33cf13cd52f27f226e5443bcbd0f411631d752eb1b016bc16f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a9489e0a658b525607c61d5a5bc42856dad9e16ca3bdea0e2936ddddbe96bc2 = $this->env->getExtension("native_profiler");
        $__internal_3a9489e0a658b525607c61d5a5bc42856dad9e16ca3bdea0e2936ddddbe96bc2->enter($__internal_3a9489e0a658b525607c61d5a5bc42856dad9e16ca3bdea0e2936ddddbe96bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9489e0a658b525607c61d5a5bc42856dad9e16ca3bdea0e2936ddddbe96bc2->leave($__internal_3a9489e0a658b525607c61d5a5bc42856dad9e16ca3bdea0e2936ddddbe96bc2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5b18db0fafc62a5f6bba67d316a3d0fb5d8cf61ddcf11526d6702b7d6f11853 = $this->env->getExtension("native_profiler");
        $__internal_a5b18db0fafc62a5f6bba67d316a3d0fb5d8cf61ddcf11526d6702b7d6f11853->enter($__internal_a5b18db0fafc62a5f6bba67d316a3d0fb5d8cf61ddcf11526d6702b7d6f11853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/css/materialize.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_a5b18db0fafc62a5f6bba67d316a3d0fb5d8cf61ddcf11526d6702b7d6f11853->leave($__internal_a5b18db0fafc62a5f6bba67d316a3d0fb5d8cf61ddcf11526d6702b7d6f11853_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e499ea09ddc258ae693e1978be17ca24017870ec4ed7970eff52ffa9bfee7d96 = $this->env->getExtension("native_profiler");
        $__internal_e499ea09ddc258ae693e1978be17ca24017870ec4ed7970eff52ffa9bfee7d96->enter($__internal_e499ea09ddc258ae693e1978be17ca24017870ec4ed7970eff52ffa9bfee7d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/materialize/dist/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular/angular.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/templates.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e499ea09ddc258ae693e1978be17ca24017870ec4ed7970eff52ffa9bfee7d96->leave($__internal_e499ea09ddc258ae693e1978be17ca24017870ec4ed7970eff52ffa9bfee7d96_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f38bc909608d82ed971f81f784861efc0ac1e517dc73847f81f8f99d430118a7 = $this->env->getExtension("native_profiler");
        $__internal_f38bc909608d82ed971f81f784861efc0ac1e517dc73847f81f8f99d430118a7->enter($__internal_f38bc909608d82ed971f81f784861efc0ac1e517dc73847f81f8f99d430118a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div ng-app=\"app\" class=\"grey lighten-3\" ng-controller=\"IndexController\">
        <navigation></navigation>

        <div class=\"content\">
            <div class=\"row\">
                <div class=\"col s4 offset-s4\">
                    <new-note notes=notes></new-note>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col s4\" ng-repeat=\"note in notes\">
                    <note></note>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f38bc909608d82ed971f81f784861efc0ac1e517dc73847f81f8f99d430118a7->leave($__internal_f38bc909608d82ed971f81f784861efc0ac1e517dc73847f81f8f99d430118a7_prof);

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
        return array (  92 => 18,  86 => 17,  76 => 13,  72 => 12,  67 => 10,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('bower_components/Materialize/dist/css/materialize.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/materialize/dist/js/materialize.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>*/
/* */
/*     <script src="{{ asset('assets/app.js') }}"></script>*/
/*     <script src="{{ asset('assets/templates.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div ng-app="app" class="grey lighten-3" ng-controller="IndexController">*/
/*         <navigation></navigation>*/
/* */
/*         <div class="content">*/
/*             <div class="row">*/
/*                 <div class="col s4 offset-s4">*/
/*                     <new-note notes=notes></new-note>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col s4" ng-repeat="note in notes">*/
/*                     <note></note>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
