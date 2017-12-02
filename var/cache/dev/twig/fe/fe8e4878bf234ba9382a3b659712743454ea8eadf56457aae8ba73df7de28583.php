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
        $__internal_8ebd324dc57ee01a23e299c709fab32a3c1e9d261d88a46f8e51155026e5f31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebd324dc57ee01a23e299c709fab32a3c1e9d261d88a46f8e51155026e5f31c->enter($__internal_8ebd324dc57ee01a23e299c709fab32a3c1e9d261d88a46f8e51155026e5f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_7f84a7eec9c6f934155cb2fb730d5cd13e66f794a7444f63340d3ecb7344f0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f84a7eec9c6f934155cb2fb730d5cd13e66f794a7444f63340d3ecb7344f0b9->enter($__internal_7f84a7eec9c6f934155cb2fb730d5cd13e66f794a7444f63340d3ecb7344f0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebd324dc57ee01a23e299c709fab32a3c1e9d261d88a46f8e51155026e5f31c->leave($__internal_8ebd324dc57ee01a23e299c709fab32a3c1e9d261d88a46f8e51155026e5f31c_prof);

        
        $__internal_7f84a7eec9c6f934155cb2fb730d5cd13e66f794a7444f63340d3ecb7344f0b9->leave($__internal_7f84a7eec9c6f934155cb2fb730d5cd13e66f794a7444f63340d3ecb7344f0b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ed68ffe5e339270d86c2f5618a6d6a176cea9cfa7c7ca568504314e06e2ac52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed68ffe5e339270d86c2f5618a6d6a176cea9cfa7c7ca568504314e06e2ac52->enter($__internal_9ed68ffe5e339270d86c2f5618a6d6a176cea9cfa7c7ca568504314e06e2ac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67823ba67e5debfe07f56d8740004580610783700aa4b8b67334b8a12239217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67823ba67e5debfe07f56d8740004580610783700aa4b8b67334b8a12239217a->enter($__internal_67823ba67e5debfe07f56d8740004580610783700aa4b8b67334b8a12239217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_67823ba67e5debfe07f56d8740004580610783700aa4b8b67334b8a12239217a->leave($__internal_67823ba67e5debfe07f56d8740004580610783700aa4b8b67334b8a12239217a_prof);

        
        $__internal_9ed68ffe5e339270d86c2f5618a6d6a176cea9cfa7c7ca568504314e06e2ac52->leave($__internal_9ed68ffe5e339270d86c2f5618a6d6a176cea9cfa7c7ca568504314e06e2ac52_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6bee9e5018d2f3092d1bbdea4e594c696bb9b178e4e3804ab8dae8898cb0f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bee9e5018d2f3092d1bbdea4e594c696bb9b178e4e3804ab8dae8898cb0f67->enter($__internal_e6bee9e5018d2f3092d1bbdea4e594c696bb9b178e4e3804ab8dae8898cb0f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5578851beee7c535cd3812a3148e7a5840b3a02da7a1af6e2f7dd28c8bbe3734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5578851beee7c535cd3812a3148e7a5840b3a02da7a1af6e2f7dd28c8bbe3734->enter($__internal_5578851beee7c535cd3812a3148e7a5840b3a02da7a1af6e2f7dd28c8bbe3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5578851beee7c535cd3812a3148e7a5840b3a02da7a1af6e2f7dd28c8bbe3734->leave($__internal_5578851beee7c535cd3812a3148e7a5840b3a02da7a1af6e2f7dd28c8bbe3734_prof);

        
        $__internal_e6bee9e5018d2f3092d1bbdea4e594c696bb9b178e4e3804ab8dae8898cb0f67->leave($__internal_e6bee9e5018d2f3092d1bbdea4e594c696bb9b178e4e3804ab8dae8898cb0f67_prof);

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
", "AppBundle:Tasca:create.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\src\\AppBundle/Resources/views/Tasca/create.html.twig");
    }
}
