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
        $__internal_4f282f6ddc30a8341e7d900f4abf161e7d67b7c0aa215257246e7a71934f2ab1 = $this->env->getExtension("native_profiler");
        $__internal_4f282f6ddc30a8341e7d900f4abf161e7d67b7c0aa215257246e7a71934f2ab1->enter($__internal_4f282f6ddc30a8341e7d900f4abf161e7d67b7c0aa215257246e7a71934f2ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4f282f6ddc30a8341e7d900f4abf161e7d67b7c0aa215257246e7a71934f2ab1->leave($__internal_4f282f6ddc30a8341e7d900f4abf161e7d67b7c0aa215257246e7a71934f2ab1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03b54393141b0b3191d73ba915330f6fdf66a28ab721854447efaff441f1e8bc = $this->env->getExtension("native_profiler");
        $__internal_03b54393141b0b3191d73ba915330f6fdf66a28ab721854447efaff441f1e8bc->enter($__internal_03b54393141b0b3191d73ba915330f6fdf66a28ab721854447efaff441f1e8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03b54393141b0b3191d73ba915330f6fdf66a28ab721854447efaff441f1e8bc->leave($__internal_03b54393141b0b3191d73ba915330f6fdf66a28ab721854447efaff441f1e8bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16de1f09a482ed05f8e532401e677d3ff5ce8e06bea3da88cdc7f520f927cbed = $this->env->getExtension("native_profiler");
        $__internal_16de1f09a482ed05f8e532401e677d3ff5ce8e06bea3da88cdc7f520f927cbed->enter($__internal_16de1f09a482ed05f8e532401e677d3ff5ce8e06bea3da88cdc7f520f927cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16de1f09a482ed05f8e532401e677d3ff5ce8e06bea3da88cdc7f520f927cbed->leave($__internal_16de1f09a482ed05f8e532401e677d3ff5ce8e06bea3da88cdc7f520f927cbed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_113e290b93056a7deabf59c1a8b5d5105cb71a5f61caf320a0c507385c63917e = $this->env->getExtension("native_profiler");
        $__internal_113e290b93056a7deabf59c1a8b5d5105cb71a5f61caf320a0c507385c63917e->enter($__internal_113e290b93056a7deabf59c1a8b5d5105cb71a5f61caf320a0c507385c63917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_113e290b93056a7deabf59c1a8b5d5105cb71a5f61caf320a0c507385c63917e->leave($__internal_113e290b93056a7deabf59c1a8b5d5105cb71a5f61caf320a0c507385c63917e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11a2569fc85680fb2ce8734c11fc062b0e492d26d049aca85c5d335cd7a6f991 = $this->env->getExtension("native_profiler");
        $__internal_11a2569fc85680fb2ce8734c11fc062b0e492d26d049aca85c5d335cd7a6f991->enter($__internal_11a2569fc85680fb2ce8734c11fc062b0e492d26d049aca85c5d335cd7a6f991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_11a2569fc85680fb2ce8734c11fc062b0e492d26d049aca85c5d335cd7a6f991->leave($__internal_11a2569fc85680fb2ce8734c11fc062b0e492d26d049aca85c5d335cd7a6f991_prof);

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
