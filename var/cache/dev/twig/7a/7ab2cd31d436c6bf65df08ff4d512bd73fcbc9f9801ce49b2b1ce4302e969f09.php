<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b9651fb6cd6820ff2fe1bad7238299dac5a03aefe821a8280e408f83ad6507ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9651fb6cd6820ff2fe1bad7238299dac5a03aefe821a8280e408f83ad6507ec->enter($__internal_b9651fb6cd6820ff2fe1bad7238299dac5a03aefe821a8280e408f83ad6507ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d12eca24e1febc27f2d2105f3491cf31ac07c2016526d5b6b5d7a992ff6a5885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12eca24e1febc27f2d2105f3491cf31ac07c2016526d5b6b5d7a992ff6a5885->enter($__internal_d12eca24e1febc27f2d2105f3491cf31ac07c2016526d5b6b5d7a992ff6a5885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9651fb6cd6820ff2fe1bad7238299dac5a03aefe821a8280e408f83ad6507ec->leave($__internal_b9651fb6cd6820ff2fe1bad7238299dac5a03aefe821a8280e408f83ad6507ec_prof);

        
        $__internal_d12eca24e1febc27f2d2105f3491cf31ac07c2016526d5b6b5d7a992ff6a5885->leave($__internal_d12eca24e1febc27f2d2105f3491cf31ac07c2016526d5b6b5d7a992ff6a5885_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5da83e4aa28f36f366c63a737ddaf5c592faf241b2eda0a82ad00900c323b3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da83e4aa28f36f366c63a737ddaf5c592faf241b2eda0a82ad00900c323b3b7->enter($__internal_5da83e4aa28f36f366c63a737ddaf5c592faf241b2eda0a82ad00900c323b3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c88a92b2042191a86110c64a80bf63b3f19b07ec313679f6fa8bce84b5dec7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c88a92b2042191a86110c64a80bf63b3f19b07ec313679f6fa8bce84b5dec7e->enter($__internal_6c88a92b2042191a86110c64a80bf63b3f19b07ec313679f6fa8bce84b5dec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c88a92b2042191a86110c64a80bf63b3f19b07ec313679f6fa8bce84b5dec7e->leave($__internal_6c88a92b2042191a86110c64a80bf63b3f19b07ec313679f6fa8bce84b5dec7e_prof);

        
        $__internal_5da83e4aa28f36f366c63a737ddaf5c592faf241b2eda0a82ad00900c323b3b7->leave($__internal_5da83e4aa28f36f366c63a737ddaf5c592faf241b2eda0a82ad00900c323b3b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caa26f8d92e35d1d6f7c75033cd8c70a5dc17e0d3b4a5694c8469569d7274248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa26f8d92e35d1d6f7c75033cd8c70a5dc17e0d3b4a5694c8469569d7274248->enter($__internal_caa26f8d92e35d1d6f7c75033cd8c70a5dc17e0d3b4a5694c8469569d7274248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aecd16b49e1aa7f55df29ce5c67db9a83fa6cb697689f791cc571df218b83f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecd16b49e1aa7f55df29ce5c67db9a83fa6cb697689f791cc571df218b83f98->enter($__internal_aecd16b49e1aa7f55df29ce5c67db9a83fa6cb697689f791cc571df218b83f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aecd16b49e1aa7f55df29ce5c67db9a83fa6cb697689f791cc571df218b83f98->leave($__internal_aecd16b49e1aa7f55df29ce5c67db9a83fa6cb697689f791cc571df218b83f98_prof);

        
        $__internal_caa26f8d92e35d1d6f7c75033cd8c70a5dc17e0d3b4a5694c8469569d7274248->leave($__internal_caa26f8d92e35d1d6f7c75033cd8c70a5dc17e0d3b4a5694c8469569d7274248_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5a66cbcf30ea6f23d722b99ff0e0af51d38afedd6a886d11b0766c8aabf8501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a66cbcf30ea6f23d722b99ff0e0af51d38afedd6a886d11b0766c8aabf8501->enter($__internal_d5a66cbcf30ea6f23d722b99ff0e0af51d38afedd6a886d11b0766c8aabf8501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95b56fb3726f2b837260046a6c1e9adff00b0c8ded6d6fc62b792c5d854ef9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b56fb3726f2b837260046a6c1e9adff00b0c8ded6d6fc62b792c5d854ef9ca->enter($__internal_95b56fb3726f2b837260046a6c1e9adff00b0c8ded6d6fc62b792c5d854ef9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_95b56fb3726f2b837260046a6c1e9adff00b0c8ded6d6fc62b792c5d854ef9ca->leave($__internal_95b56fb3726f2b837260046a6c1e9adff00b0c8ded6d6fc62b792c5d854ef9ca_prof);

        
        $__internal_d5a66cbcf30ea6f23d722b99ff0e0af51d38afedd6a886d11b0766c8aabf8501->leave($__internal_d5a66cbcf30ea6f23d722b99ff0e0af51d38afedd6a886d11b0766c8aabf8501_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
