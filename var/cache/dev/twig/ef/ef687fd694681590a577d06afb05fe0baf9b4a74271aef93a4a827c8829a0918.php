<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_ea50329f69d1c356aeaa172ead3489f550584f5e9ec298bf59576beb6fb65b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea50329f69d1c356aeaa172ead3489f550584f5e9ec298bf59576beb6fb65b5f->enter($__internal_ea50329f69d1c356aeaa172ead3489f550584f5e9ec298bf59576beb6fb65b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_52cb24b0593f71dc8dadc4eaaba2723034cc44269aa7fdf6c888bc1ee40fb6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cb24b0593f71dc8dadc4eaaba2723034cc44269aa7fdf6c888bc1ee40fb6c6->enter($__internal_52cb24b0593f71dc8dadc4eaaba2723034cc44269aa7fdf6c888bc1ee40fb6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea50329f69d1c356aeaa172ead3489f550584f5e9ec298bf59576beb6fb65b5f->leave($__internal_ea50329f69d1c356aeaa172ead3489f550584f5e9ec298bf59576beb6fb65b5f_prof);

        
        $__internal_52cb24b0593f71dc8dadc4eaaba2723034cc44269aa7fdf6c888bc1ee40fb6c6->leave($__internal_52cb24b0593f71dc8dadc4eaaba2723034cc44269aa7fdf6c888bc1ee40fb6c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcf7bc7a755895ad0b082454acd7b158bb87ec9a1afaf61a8607be692aba2c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf7bc7a755895ad0b082454acd7b158bb87ec9a1afaf61a8607be692aba2c64->enter($__internal_bcf7bc7a755895ad0b082454acd7b158bb87ec9a1afaf61a8607be692aba2c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4175918112d2b10806197a5e0b23ff17231b27d0f3549e4c40da7839d19322bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4175918112d2b10806197a5e0b23ff17231b27d0f3549e4c40da7839d19322bf->enter($__internal_4175918112d2b10806197a5e0b23ff17231b27d0f3549e4c40da7839d19322bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4175918112d2b10806197a5e0b23ff17231b27d0f3549e4c40da7839d19322bf->leave($__internal_4175918112d2b10806197a5e0b23ff17231b27d0f3549e4c40da7839d19322bf_prof);

        
        $__internal_bcf7bc7a755895ad0b082454acd7b158bb87ec9a1afaf61a8607be692aba2c64->leave($__internal_bcf7bc7a755895ad0b082454acd7b158bb87ec9a1afaf61a8607be692aba2c64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_895dbad799c2189e564a5c230bf2c035a8b6bf2d16cbb14f6d50d43292e56cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895dbad799c2189e564a5c230bf2c035a8b6bf2d16cbb14f6d50d43292e56cfe->enter($__internal_895dbad799c2189e564a5c230bf2c035a8b6bf2d16cbb14f6d50d43292e56cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8c7497f02990e0688cfab3745d97b912afb08039dc8eca0622ca14e8ce586da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c7497f02990e0688cfab3745d97b912afb08039dc8eca0622ca14e8ce586da->enter($__internal_e8c7497f02990e0688cfab3745d97b912afb08039dc8eca0622ca14e8ce586da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8c7497f02990e0688cfab3745d97b912afb08039dc8eca0622ca14e8ce586da->leave($__internal_e8c7497f02990e0688cfab3745d97b912afb08039dc8eca0622ca14e8ce586da_prof);

        
        $__internal_895dbad799c2189e564a5c230bf2c035a8b6bf2d16cbb14f6d50d43292e56cfe->leave($__internal_895dbad799c2189e564a5c230bf2c035a8b6bf2d16cbb14f6d50d43292e56cfe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6858e0e694ff8c095093bb390f037ce1805cf8d8338161a50342f35f8e76aa04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6858e0e694ff8c095093bb390f037ce1805cf8d8338161a50342f35f8e76aa04->enter($__internal_6858e0e694ff8c095093bb390f037ce1805cf8d8338161a50342f35f8e76aa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b0795269a6579ef1f06dbe8bf563ca7f10070a89bf1bddde6fa0152e2813bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0795269a6579ef1f06dbe8bf563ca7f10070a89bf1bddde6fa0152e2813bf7->enter($__internal_4b0795269a6579ef1f06dbe8bf563ca7f10070a89bf1bddde6fa0152e2813bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b0795269a6579ef1f06dbe8bf563ca7f10070a89bf1bddde6fa0152e2813bf7->leave($__internal_4b0795269a6579ef1f06dbe8bf563ca7f10070a89bf1bddde6fa0152e2813bf7_prof);

        
        $__internal_6858e0e694ff8c095093bb390f037ce1805cf8d8338161a50342f35f8e76aa04->leave($__internal_6858e0e694ff8c095093bb390f037ce1805cf8d8338161a50342f35f8e76aa04_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
