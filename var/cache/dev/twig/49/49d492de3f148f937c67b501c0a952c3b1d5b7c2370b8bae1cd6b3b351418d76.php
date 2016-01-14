<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa3a45fd577a730916f746b4452fcddc5f6ae0c1ffe9dbff9a742deb341df471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_218e16359a71dc08345af0be7aa68a1e8dc03c0185e8d60cba9303594f9f7022 = $this->env->getExtension("native_profiler");
        $__internal_218e16359a71dc08345af0be7aa68a1e8dc03c0185e8d60cba9303594f9f7022->enter($__internal_218e16359a71dc08345af0be7aa68a1e8dc03c0185e8d60cba9303594f9f7022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218e16359a71dc08345af0be7aa68a1e8dc03c0185e8d60cba9303594f9f7022->leave($__internal_218e16359a71dc08345af0be7aa68a1e8dc03c0185e8d60cba9303594f9f7022_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f39f129db84053164e7525e102defddc42b6eadb90aadd377e92734c18491ff2 = $this->env->getExtension("native_profiler");
        $__internal_f39f129db84053164e7525e102defddc42b6eadb90aadd377e92734c18491ff2->enter($__internal_f39f129db84053164e7525e102defddc42b6eadb90aadd377e92734c18491ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f39f129db84053164e7525e102defddc42b6eadb90aadd377e92734c18491ff2->leave($__internal_f39f129db84053164e7525e102defddc42b6eadb90aadd377e92734c18491ff2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91331309698e9b9a1cfd8151dbe643279e296e89ea7d5b65b090eb5d0e51d65c = $this->env->getExtension("native_profiler");
        $__internal_91331309698e9b9a1cfd8151dbe643279e296e89ea7d5b65b090eb5d0e51d65c->enter($__internal_91331309698e9b9a1cfd8151dbe643279e296e89ea7d5b65b090eb5d0e51d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91331309698e9b9a1cfd8151dbe643279e296e89ea7d5b65b090eb5d0e51d65c->leave($__internal_91331309698e9b9a1cfd8151dbe643279e296e89ea7d5b65b090eb5d0e51d65c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dfa8347ebe94ceb580590a2ac612dc05cdf11a628451836b55e073bc86d8351 = $this->env->getExtension("native_profiler");
        $__internal_0dfa8347ebe94ceb580590a2ac612dc05cdf11a628451836b55e073bc86d8351->enter($__internal_0dfa8347ebe94ceb580590a2ac612dc05cdf11a628451836b55e073bc86d8351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0dfa8347ebe94ceb580590a2ac612dc05cdf11a628451836b55e073bc86d8351->leave($__internal_0dfa8347ebe94ceb580590a2ac612dc05cdf11a628451836b55e073bc86d8351_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
