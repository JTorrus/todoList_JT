<?php

/* AppBundle:Tasca:update.html.twig */
class __TwigTemplate_d5612394be2922056d58f59bb1608ccc8a605fdf6ef91cd46a68b8471421abf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Tasca:update.html.twig", 1);
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
        $__internal_0f09d314e101e48c688f13d805a235f5fd00472de5ad2a60541247fe765f0f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f09d314e101e48c688f13d805a235f5fd00472de5ad2a60541247fe765f0f19->enter($__internal_0f09d314e101e48c688f13d805a235f5fd00472de5ad2a60541247fe765f0f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $__internal_f038c924d27ed2d23d975926f878a5ccba47ae5ee75298a7db1a07bed37feaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f038c924d27ed2d23d975926f878a5ccba47ae5ee75298a7db1a07bed37feaf5->enter($__internal_f038c924d27ed2d23d975926f878a5ccba47ae5ee75298a7db1a07bed37feaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f09d314e101e48c688f13d805a235f5fd00472de5ad2a60541247fe765f0f19->leave($__internal_0f09d314e101e48c688f13d805a235f5fd00472de5ad2a60541247fe765f0f19_prof);

        
        $__internal_f038c924d27ed2d23d975926f878a5ccba47ae5ee75298a7db1a07bed37feaf5->leave($__internal_f038c924d27ed2d23d975926f878a5ccba47ae5ee75298a7db1a07bed37feaf5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32139c237dc4d10b1a6251f4f23df78bd06bbc30e59a5d153423de16fe047808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32139c237dc4d10b1a6251f4f23df78bd06bbc30e59a5d153423de16fe047808->enter($__internal_32139c237dc4d10b1a6251f4f23df78bd06bbc30e59a5d153423de16fe047808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6403e086a28caa5915bed06b4319da71ced75bc42668da8866cccb28f3e63981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6403e086a28caa5915bed06b4319da71ced75bc42668da8866cccb28f3e63981->enter($__internal_6403e086a28caa5915bed06b4319da71ced75bc42668da8866cccb28f3e63981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:update";
        
        $__internal_6403e086a28caa5915bed06b4319da71ced75bc42668da8866cccb28f3e63981->leave($__internal_6403e086a28caa5915bed06b4319da71ced75bc42668da8866cccb28f3e63981_prof);

        
        $__internal_32139c237dc4d10b1a6251f4f23df78bd06bbc30e59a5d153423de16fe047808->leave($__internal_32139c237dc4d10b1a6251f4f23df78bd06bbc30e59a5d153423de16fe047808_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5656a70fe60ff8e5df133242322ee0eb6bf620125f26b623c0060d6e0ca4a68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5656a70fe60ff8e5df133242322ee0eb6bf620125f26b623c0060d6e0ca4a68c->enter($__internal_5656a70fe60ff8e5df133242322ee0eb6bf620125f26b623c0060d6e0ca4a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aae928eac274836bae387102e9eede987e0c7ac0cdbc7ca99482e9a5d5dc9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aae928eac274836bae387102e9eede987e0c7ac0cdbc7ca99482e9a5d5dc9a5->enter($__internal_2aae928eac274836bae387102e9eede987e0c7ac0cdbc7ca99482e9a5d5dc9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Editar tasca</h1>

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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "
        <span>
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </span>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2aae928eac274836bae387102e9eede987e0c7ac0cdbc7ca99482e9a5d5dc9a5->leave($__internal_2aae928eac274836bae387102e9eede987e0c7ac0cdbc7ca99482e9a5d5dc9a5_prof);

        
        $__internal_5656a70fe60ff8e5df133242322ee0eb6bf620125f26b623c0060d6e0ca4a68c->leave($__internal_5656a70fe60ff8e5df133242322ee0eb6bf620125f26b623c0060d6e0ca4a68c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Tasca:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  89 => 13,  85 => 12,  80 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Tasca:update{% endblock %}

{% block body %}
<h1>Editar tasca</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

    {% for flashMessage in app.session.flashbag.get('error') %}

        <span>
            {{ flashMessage }}
        </span>

    {% endfor %}
{% endblock %}
", "AppBundle:Tasca:update.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\src\\AppBundle/Resources/views/Tasca/update.html.twig");
    }
}
