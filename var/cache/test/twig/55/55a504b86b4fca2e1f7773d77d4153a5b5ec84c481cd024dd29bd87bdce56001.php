<?php

/* base.html.twig */
class __TwigTemplate_c0b61c98f4153c8b353efb82ba564207dd5c22cbc1db9c8a5fc14e18bd690277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_784bcbc1a6fb68f70285c93427a31d9d97ca72150271c871f417b5e362c8beed = $this->env->getExtension("native_profiler");
        $__internal_784bcbc1a6fb68f70285c93427a31d9d97ca72150271c871f417b5e362c8beed->enter($__internal_784bcbc1a6fb68f70285c93427a31d9d97ca72150271c871f417b5e362c8beed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_784bcbc1a6fb68f70285c93427a31d9d97ca72150271c871f417b5e362c8beed->leave($__internal_784bcbc1a6fb68f70285c93427a31d9d97ca72150271c871f417b5e362c8beed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c2a0a60d7d056c572b2ef14aba7b49431216a5d3ee18710001959c365f88b73 = $this->env->getExtension("native_profiler");
        $__internal_1c2a0a60d7d056c572b2ef14aba7b49431216a5d3ee18710001959c365f88b73->enter($__internal_1c2a0a60d7d056c572b2ef14aba7b49431216a5d3ee18710001959c365f88b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c2a0a60d7d056c572b2ef14aba7b49431216a5d3ee18710001959c365f88b73->leave($__internal_1c2a0a60d7d056c572b2ef14aba7b49431216a5d3ee18710001959c365f88b73_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74d3353630a8ff2910c765d9cf0294ab30c735a57737ec219b83f117670f3c60 = $this->env->getExtension("native_profiler");
        $__internal_74d3353630a8ff2910c765d9cf0294ab30c735a57737ec219b83f117670f3c60->enter($__internal_74d3353630a8ff2910c765d9cf0294ab30c735a57737ec219b83f117670f3c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74d3353630a8ff2910c765d9cf0294ab30c735a57737ec219b83f117670f3c60->leave($__internal_74d3353630a8ff2910c765d9cf0294ab30c735a57737ec219b83f117670f3c60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a84ce709745aa1fc17f252f9e437a7948887aa9813cac6e892318b0dd0e323a = $this->env->getExtension("native_profiler");
        $__internal_0a84ce709745aa1fc17f252f9e437a7948887aa9813cac6e892318b0dd0e323a->enter($__internal_0a84ce709745aa1fc17f252f9e437a7948887aa9813cac6e892318b0dd0e323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a84ce709745aa1fc17f252f9e437a7948887aa9813cac6e892318b0dd0e323a->leave($__internal_0a84ce709745aa1fc17f252f9e437a7948887aa9813cac6e892318b0dd0e323a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7c32c9ead5615c5d478b462e4ef9c7bfd0a41e0dec10d47fe40cf10786358f4 = $this->env->getExtension("native_profiler");
        $__internal_f7c32c9ead5615c5d478b462e4ef9c7bfd0a41e0dec10d47fe40cf10786358f4->enter($__internal_f7c32c9ead5615c5d478b462e4ef9c7bfd0a41e0dec10d47fe40cf10786358f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7c32c9ead5615c5d478b462e4ef9c7bfd0a41e0dec10d47fe40cf10786358f4->leave($__internal_f7c32c9ead5615c5d478b462e4ef9c7bfd0a41e0dec10d47fe40cf10786358f4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
