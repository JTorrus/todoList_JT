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
        $__internal_dc5756c7e81887f630daeb5cfa5fc4e31b3202bd6f6de01b63db76857782ab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5756c7e81887f630daeb5cfa5fc4e31b3202bd6f6de01b63db76857782ab09->enter($__internal_dc5756c7e81887f630daeb5cfa5fc4e31b3202bd6f6de01b63db76857782ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15f833327437a1c8bf3ca32acdaec720928c44e1774391d6c26a2ebf2d73f236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f833327437a1c8bf3ca32acdaec720928c44e1774391d6c26a2ebf2d73f236->enter($__internal_15f833327437a1c8bf3ca32acdaec720928c44e1774391d6c26a2ebf2d73f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5756c7e81887f630daeb5cfa5fc4e31b3202bd6f6de01b63db76857782ab09->leave($__internal_dc5756c7e81887f630daeb5cfa5fc4e31b3202bd6f6de01b63db76857782ab09_prof);

        
        $__internal_15f833327437a1c8bf3ca32acdaec720928c44e1774391d6c26a2ebf2d73f236->leave($__internal_15f833327437a1c8bf3ca32acdaec720928c44e1774391d6c26a2ebf2d73f236_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08529ec2c25cf31062fe877c44edea55a6623aaae76acbc22597a0349c462e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08529ec2c25cf31062fe877c44edea55a6623aaae76acbc22597a0349c462e2d->enter($__internal_08529ec2c25cf31062fe877c44edea55a6623aaae76acbc22597a0349c462e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9ff813479375abcc46c2c4652820921f9f1517c3ebf1da80db704f14c68de50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ff813479375abcc46c2c4652820921f9f1517c3ebf1da80db704f14c68de50->enter($__internal_f9ff813479375abcc46c2c4652820921f9f1517c3ebf1da80db704f14c68de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9ff813479375abcc46c2c4652820921f9f1517c3ebf1da80db704f14c68de50->leave($__internal_f9ff813479375abcc46c2c4652820921f9f1517c3ebf1da80db704f14c68de50_prof);

        
        $__internal_08529ec2c25cf31062fe877c44edea55a6623aaae76acbc22597a0349c462e2d->leave($__internal_08529ec2c25cf31062fe877c44edea55a6623aaae76acbc22597a0349c462e2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9493c5f99f123231e9f65183fee23a84f3f6ba02b370a1fb18fa95b3afb13738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9493c5f99f123231e9f65183fee23a84f3f6ba02b370a1fb18fa95b3afb13738->enter($__internal_9493c5f99f123231e9f65183fee23a84f3f6ba02b370a1fb18fa95b3afb13738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a48067d6aa52886aad9bbfde745b2dd5ba556a6b5c8f2ce484ec48a80ff3428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a48067d6aa52886aad9bbfde745b2dd5ba556a6b5c8f2ce484ec48a80ff3428->enter($__internal_4a48067d6aa52886aad9bbfde745b2dd5ba556a6b5c8f2ce484ec48a80ff3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a48067d6aa52886aad9bbfde745b2dd5ba556a6b5c8f2ce484ec48a80ff3428->leave($__internal_4a48067d6aa52886aad9bbfde745b2dd5ba556a6b5c8f2ce484ec48a80ff3428_prof);

        
        $__internal_9493c5f99f123231e9f65183fee23a84f3f6ba02b370a1fb18fa95b3afb13738->leave($__internal_9493c5f99f123231e9f65183fee23a84f3f6ba02b370a1fb18fa95b3afb13738_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e585a4a4327598045559e0beef2fcaab654d400f96d24335e821ab584a02789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e585a4a4327598045559e0beef2fcaab654d400f96d24335e821ab584a02789->enter($__internal_7e585a4a4327598045559e0beef2fcaab654d400f96d24335e821ab584a02789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_560acaa785de5b4ccd72430d8226dccd98c24ba364ab9bfb8ca32d5541fff5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560acaa785de5b4ccd72430d8226dccd98c24ba364ab9bfb8ca32d5541fff5d7->enter($__internal_560acaa785de5b4ccd72430d8226dccd98c24ba364ab9bfb8ca32d5541fff5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_560acaa785de5b4ccd72430d8226dccd98c24ba364ab9bfb8ca32d5541fff5d7->leave($__internal_560acaa785de5b4ccd72430d8226dccd98c24ba364ab9bfb8ca32d5541fff5d7_prof);

        
        $__internal_7e585a4a4327598045559e0beef2fcaab654d400f96d24335e821ab584a02789->leave($__internal_7e585a4a4327598045559e0beef2fcaab654d400f96d24335e821ab584a02789_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
