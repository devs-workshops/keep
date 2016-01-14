<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ca7136e60db542aebd93d827551a9052566b20ffe99f9a5382adb4cb7d6ed9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b71a981a13bd51f9093f2d74b3135a855767461231d4d3335b56dfb23ae211e9 = $this->env->getExtension("native_profiler");
        $__internal_b71a981a13bd51f9093f2d74b3135a855767461231d4d3335b56dfb23ae211e9->enter($__internal_b71a981a13bd51f9093f2d74b3135a855767461231d4d3335b56dfb23ae211e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71a981a13bd51f9093f2d74b3135a855767461231d4d3335b56dfb23ae211e9->leave($__internal_b71a981a13bd51f9093f2d74b3135a855767461231d4d3335b56dfb23ae211e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7c532a7fbcb90ab3263b4910af1a03c13b602d74642741a1729e819a5790484 = $this->env->getExtension("native_profiler");
        $__internal_f7c532a7fbcb90ab3263b4910af1a03c13b602d74642741a1729e819a5790484->enter($__internal_f7c532a7fbcb90ab3263b4910af1a03c13b602d74642741a1729e819a5790484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7c532a7fbcb90ab3263b4910af1a03c13b602d74642741a1729e819a5790484->leave($__internal_f7c532a7fbcb90ab3263b4910af1a03c13b602d74642741a1729e819a5790484_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34fc92d74734b14ee023a0b3a2f216be9d5d39ccd6ffe9dd39648fe69296aedc = $this->env->getExtension("native_profiler");
        $__internal_34fc92d74734b14ee023a0b3a2f216be9d5d39ccd6ffe9dd39648fe69296aedc->enter($__internal_34fc92d74734b14ee023a0b3a2f216be9d5d39ccd6ffe9dd39648fe69296aedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34fc92d74734b14ee023a0b3a2f216be9d5d39ccd6ffe9dd39648fe69296aedc->leave($__internal_34fc92d74734b14ee023a0b3a2f216be9d5d39ccd6ffe9dd39648fe69296aedc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d87187610e53456e51772bd101e968892aa5e17f15782bb3cf1fb162cc67841 = $this->env->getExtension("native_profiler");
        $__internal_6d87187610e53456e51772bd101e968892aa5e17f15782bb3cf1fb162cc67841->enter($__internal_6d87187610e53456e51772bd101e968892aa5e17f15782bb3cf1fb162cc67841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d87187610e53456e51772bd101e968892aa5e17f15782bb3cf1fb162cc67841->leave($__internal_6d87187610e53456e51772bd101e968892aa5e17f15782bb3cf1fb162cc67841_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
