<?php

/* AppBundle:Tasca:create.html.twig */
class __TwigTemplate_9d60c6a38f23258f00844d3cfd4c467aefd74e700f8782e0cb3bfc84c1f8b780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Tasca:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_458ea052017221f9e9b02303cd913437b4ad19bd96212f4b5f5dec208c967bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458ea052017221f9e9b02303cd913437b4ad19bd96212f4b5f5dec208c967bd2->enter($__internal_458ea052017221f9e9b02303cd913437b4ad19bd96212f4b5f5dec208c967bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_f6f84dce87c8d093227f2e73e4cf9c853bbf1ead167b46bb3defe06181d27454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f84dce87c8d093227f2e73e4cf9c853bbf1ead167b46bb3defe06181d27454->enter($__internal_f6f84dce87c8d093227f2e73e4cf9c853bbf1ead167b46bb3defe06181d27454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458ea052017221f9e9b02303cd913437b4ad19bd96212f4b5f5dec208c967bd2->leave($__internal_458ea052017221f9e9b02303cd913437b4ad19bd96212f4b5f5dec208c967bd2_prof);

        
        $__internal_f6f84dce87c8d093227f2e73e4cf9c853bbf1ead167b46bb3defe06181d27454->leave($__internal_f6f84dce87c8d093227f2e73e4cf9c853bbf1ead167b46bb3defe06181d27454_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0c06db87f3016e42470b8008d6a0855a14339c1bf68e9a79b20d2145b84ed55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c06db87f3016e42470b8008d6a0855a14339c1bf68e9a79b20d2145b84ed55->enter($__internal_b0c06db87f3016e42470b8008d6a0855a14339c1bf68e9a79b20d2145b84ed55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f1095bd61c4000395a1af8cb0b96451eb267c6b3583513876c9f3a91e52fa9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1095bd61c4000395a1af8cb0b96451eb267c6b3583513876c9f3a91e52fa9e->enter($__internal_2f1095bd61c4000395a1af8cb0b96451eb267c6b3583513876c9f3a91e52fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_2f1095bd61c4000395a1af8cb0b96451eb267c6b3583513876c9f3a91e52fa9e->leave($__internal_2f1095bd61c4000395a1af8cb0b96451eb267c6b3583513876c9f3a91e52fa9e_prof);

        
        $__internal_b0c06db87f3016e42470b8008d6a0855a14339c1bf68e9a79b20d2145b84ed55->leave($__internal_b0c06db87f3016e42470b8008d6a0855a14339c1bf68e9a79b20d2145b84ed55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fe519b8a92806fdcf04ab4d92edc0492f59d35e9a7d1825c36127bee2f9ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fe519b8a92806fdcf04ab4d92edc0492f59d35e9a7d1825c36127bee2f9ca1->enter($__internal_89fe519b8a92806fdcf04ab4d92edc0492f59d35e9a7d1825c36127bee2f9ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2afb7fe4d5d083fd20e603d23bad358fbc4abf6a9036e4c977d0a33ff10cce7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afb7fe4d5d083fd20e603d23bad358fbc4abf6a9036e4c977d0a33ff10cce7e->enter($__internal_2afb7fe4d5d083fd20e603d23bad358fbc4abf6a9036e4c977d0a33ff10cce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Crear tasca</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2afb7fe4d5d083fd20e603d23bad358fbc4abf6a9036e4c977d0a33ff10cce7e->leave($__internal_2afb7fe4d5d083fd20e603d23bad358fbc4abf6a9036e4c977d0a33ff10cce7e_prof);

        
        $__internal_89fe519b8a92806fdcf04ab4d92edc0492f59d35e9a7d1825c36127bee2f9ca1->leave($__internal_89fe519b8a92806fdcf04ab4d92edc0492f59d35e9a7d1825c36127bee2f9ca1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Tasca:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Tasca:create{% endblock %}

{% block body %}
<h1>Crear tasca</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:Tasca:create.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/create.html.twig");
    }
}
