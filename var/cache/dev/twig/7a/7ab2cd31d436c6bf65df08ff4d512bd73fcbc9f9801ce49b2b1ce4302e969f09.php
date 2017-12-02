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
        $__internal_a5d19a1db6613e75191fa7bed08c9f5b9b9e14ef05c400a49bb70be81a522155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d19a1db6613e75191fa7bed08c9f5b9b9e14ef05c400a49bb70be81a522155->enter($__internal_a5d19a1db6613e75191fa7bed08c9f5b9b9e14ef05c400a49bb70be81a522155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_98d12f2f32ae689a2bbbdf5e678e3c88ae7cc70876d9d1fd633396bc88a5a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d12f2f32ae689a2bbbdf5e678e3c88ae7cc70876d9d1fd633396bc88a5a7d9->enter($__internal_98d12f2f32ae689a2bbbdf5e678e3c88ae7cc70876d9d1fd633396bc88a5a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d19a1db6613e75191fa7bed08c9f5b9b9e14ef05c400a49bb70be81a522155->leave($__internal_a5d19a1db6613e75191fa7bed08c9f5b9b9e14ef05c400a49bb70be81a522155_prof);

        
        $__internal_98d12f2f32ae689a2bbbdf5e678e3c88ae7cc70876d9d1fd633396bc88a5a7d9->leave($__internal_98d12f2f32ae689a2bbbdf5e678e3c88ae7cc70876d9d1fd633396bc88a5a7d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6904e227c1b0c8220b8b58aa3dc8dd984b1474c33dfd265f1e26c4cc5e218ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6904e227c1b0c8220b8b58aa3dc8dd984b1474c33dfd265f1e26c4cc5e218ef2->enter($__internal_6904e227c1b0c8220b8b58aa3dc8dd984b1474c33dfd265f1e26c4cc5e218ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f433d0d2f49fdfa9131db4992ecd9a7eb2547134dd4617fb038d557642473fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f433d0d2f49fdfa9131db4992ecd9a7eb2547134dd4617fb038d557642473fc1->enter($__internal_f433d0d2f49fdfa9131db4992ecd9a7eb2547134dd4617fb038d557642473fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f433d0d2f49fdfa9131db4992ecd9a7eb2547134dd4617fb038d557642473fc1->leave($__internal_f433d0d2f49fdfa9131db4992ecd9a7eb2547134dd4617fb038d557642473fc1_prof);

        
        $__internal_6904e227c1b0c8220b8b58aa3dc8dd984b1474c33dfd265f1e26c4cc5e218ef2->leave($__internal_6904e227c1b0c8220b8b58aa3dc8dd984b1474c33dfd265f1e26c4cc5e218ef2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff3210d7f146a91c47f88e95944c910585894517c2108c1bb78e457324fadbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3210d7f146a91c47f88e95944c910585894517c2108c1bb78e457324fadbe2->enter($__internal_ff3210d7f146a91c47f88e95944c910585894517c2108c1bb78e457324fadbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1ec23c46148f353cc80e096fdf71794d61925832c6af8a3df86233dc8f940db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ec23c46148f353cc80e096fdf71794d61925832c6af8a3df86233dc8f940db->enter($__internal_a1ec23c46148f353cc80e096fdf71794d61925832c6af8a3df86233dc8f940db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a1ec23c46148f353cc80e096fdf71794d61925832c6af8a3df86233dc8f940db->leave($__internal_a1ec23c46148f353cc80e096fdf71794d61925832c6af8a3df86233dc8f940db_prof);

        
        $__internal_ff3210d7f146a91c47f88e95944c910585894517c2108c1bb78e457324fadbe2->leave($__internal_ff3210d7f146a91c47f88e95944c910585894517c2108c1bb78e457324fadbe2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bb2cde8f8a63d69eb14022f2fe3634b6af417ef84cd7207d3c5761db5c32808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb2cde8f8a63d69eb14022f2fe3634b6af417ef84cd7207d3c5761db5c32808->enter($__internal_6bb2cde8f8a63d69eb14022f2fe3634b6af417ef84cd7207d3c5761db5c32808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbba52fe424e80a69235ab1ecc7ad7f1548269d3c5298cb73e06ad605bb15238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbba52fe424e80a69235ab1ecc7ad7f1548269d3c5298cb73e06ad605bb15238->enter($__internal_dbba52fe424e80a69235ab1ecc7ad7f1548269d3c5298cb73e06ad605bb15238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dbba52fe424e80a69235ab1ecc7ad7f1548269d3c5298cb73e06ad605bb15238->leave($__internal_dbba52fe424e80a69235ab1ecc7ad7f1548269d3c5298cb73e06ad605bb15238_prof);

        
        $__internal_6bb2cde8f8a63d69eb14022f2fe3634b6af417ef84cd7207d3c5761db5c32808->leave($__internal_6bb2cde8f8a63d69eb14022f2fe3634b6af417ef84cd7207d3c5761db5c32808_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
