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
        $__internal_ebe829e76f47e78775482e6e9223fa6fada3727a6c07116716b4f12e2b8731b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe829e76f47e78775482e6e9223fa6fada3727a6c07116716b4f12e2b8731b1->enter($__internal_ebe829e76f47e78775482e6e9223fa6fada3727a6c07116716b4f12e2b8731b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_655770ddeefc18e268f7960e7763966c437daba7321eaba027e436224e59c4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655770ddeefc18e268f7960e7763966c437daba7321eaba027e436224e59c4fe->enter($__internal_655770ddeefc18e268f7960e7763966c437daba7321eaba027e436224e59c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe829e76f47e78775482e6e9223fa6fada3727a6c07116716b4f12e2b8731b1->leave($__internal_ebe829e76f47e78775482e6e9223fa6fada3727a6c07116716b4f12e2b8731b1_prof);

        
        $__internal_655770ddeefc18e268f7960e7763966c437daba7321eaba027e436224e59c4fe->leave($__internal_655770ddeefc18e268f7960e7763966c437daba7321eaba027e436224e59c4fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ef0ac4ae5bc6b62449750a6b69438d265d0cd25eb6ee3e4cd7a8161af1a4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ef0ac4ae5bc6b62449750a6b69438d265d0cd25eb6ee3e4cd7a8161af1a4b4->enter($__internal_01ef0ac4ae5bc6b62449750a6b69438d265d0cd25eb6ee3e4cd7a8161af1a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a0b667f27b7609b655bf32ff09c0ebbc5e72cfa3152a43410ad5f52db33de0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0b667f27b7609b655bf32ff09c0ebbc5e72cfa3152a43410ad5f52db33de0b->enter($__internal_8a0b667f27b7609b655bf32ff09c0ebbc5e72cfa3152a43410ad5f52db33de0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_8a0b667f27b7609b655bf32ff09c0ebbc5e72cfa3152a43410ad5f52db33de0b->leave($__internal_8a0b667f27b7609b655bf32ff09c0ebbc5e72cfa3152a43410ad5f52db33de0b_prof);

        
        $__internal_01ef0ac4ae5bc6b62449750a6b69438d265d0cd25eb6ee3e4cd7a8161af1a4b4->leave($__internal_01ef0ac4ae5bc6b62449750a6b69438d265d0cd25eb6ee3e4cd7a8161af1a4b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39e425b72576bc90512147c8fb29575c22e0e0761fef500d13e749eab4167ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e425b72576bc90512147c8fb29575c22e0e0761fef500d13e749eab4167ae3->enter($__internal_39e425b72576bc90512147c8fb29575c22e0e0761fef500d13e749eab4167ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af3ff36d397079397d912d95e2fb588d86145348457032209aee3006c9a101a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3ff36d397079397d912d95e2fb588d86145348457032209aee3006c9a101a5->enter($__internal_af3ff36d397079397d912d95e2fb588d86145348457032209aee3006c9a101a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Tasca:create page</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_af3ff36d397079397d912d95e2fb588d86145348457032209aee3006c9a101a5->leave($__internal_af3ff36d397079397d912d95e2fb588d86145348457032209aee3006c9a101a5_prof);

        
        $__internal_39e425b72576bc90512147c8fb29575c22e0e0761fef500d13e749eab4167ae3->leave($__internal_39e425b72576bc90512147c8fb29575c22e0e0761fef500d13e749eab4167ae3_prof);

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
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<h1>Welcome to the Tasca:create page</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:Tasca:create.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/create.html.twig");
    }
}
