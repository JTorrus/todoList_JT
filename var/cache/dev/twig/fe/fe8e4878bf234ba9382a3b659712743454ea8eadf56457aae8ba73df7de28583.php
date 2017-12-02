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
        $__internal_0444e079467971c809155dea4faf1986d5ee5965aaaa6e90de3fc27d2e102c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0444e079467971c809155dea4faf1986d5ee5965aaaa6e90de3fc27d2e102c51->enter($__internal_0444e079467971c809155dea4faf1986d5ee5965aaaa6e90de3fc27d2e102c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_4f595ad02c6484fa9be73e61bb2936e537aaeecb377fd5ecb7cec00e07b765e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f595ad02c6484fa9be73e61bb2936e537aaeecb377fd5ecb7cec00e07b765e0->enter($__internal_4f595ad02c6484fa9be73e61bb2936e537aaeecb377fd5ecb7cec00e07b765e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0444e079467971c809155dea4faf1986d5ee5965aaaa6e90de3fc27d2e102c51->leave($__internal_0444e079467971c809155dea4faf1986d5ee5965aaaa6e90de3fc27d2e102c51_prof);

        
        $__internal_4f595ad02c6484fa9be73e61bb2936e537aaeecb377fd5ecb7cec00e07b765e0->leave($__internal_4f595ad02c6484fa9be73e61bb2936e537aaeecb377fd5ecb7cec00e07b765e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcdf801d21cc8aff7c3831e45bdb3ac6d9c8fc5c423428387aae7d17a8040911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdf801d21cc8aff7c3831e45bdb3ac6d9c8fc5c423428387aae7d17a8040911->enter($__internal_dcdf801d21cc8aff7c3831e45bdb3ac6d9c8fc5c423428387aae7d17a8040911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a2a0e2312adc972d8b1b6231e55ab66bcd169f1d279f708b3ff850438e0c64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2a0e2312adc972d8b1b6231e55ab66bcd169f1d279f708b3ff850438e0c64a->enter($__internal_6a2a0e2312adc972d8b1b6231e55ab66bcd169f1d279f708b3ff850438e0c64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_6a2a0e2312adc972d8b1b6231e55ab66bcd169f1d279f708b3ff850438e0c64a->leave($__internal_6a2a0e2312adc972d8b1b6231e55ab66bcd169f1d279f708b3ff850438e0c64a_prof);

        
        $__internal_dcdf801d21cc8aff7c3831e45bdb3ac6d9c8fc5c423428387aae7d17a8040911->leave($__internal_dcdf801d21cc8aff7c3831e45bdb3ac6d9c8fc5c423428387aae7d17a8040911_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_320cb3ce99136eddcb0197d7b7d7cf2fe1c48fc242b7b58effdc3deb0c6a62d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320cb3ce99136eddcb0197d7b7d7cf2fe1c48fc242b7b58effdc3deb0c6a62d5->enter($__internal_320cb3ce99136eddcb0197d7b7d7cf2fe1c48fc242b7b58effdc3deb0c6a62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9958efa0803b9fc719b4936ed1b577cf619c1172f64a4ce9b2f9852311738169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9958efa0803b9fc719b4936ed1b577cf619c1172f64a4ce9b2f9852311738169->enter($__internal_9958efa0803b9fc719b4936ed1b577cf619c1172f64a4ce9b2f9852311738169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Tasca:create page</h1>

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
        
        $__internal_9958efa0803b9fc719b4936ed1b577cf619c1172f64a4ce9b2f9852311738169->leave($__internal_9958efa0803b9fc719b4936ed1b577cf619c1172f64a4ce9b2f9852311738169_prof);

        
        $__internal_320cb3ce99136eddcb0197d7b7d7cf2fe1c48fc242b7b58effdc3deb0c6a62d5->leave($__internal_320cb3ce99136eddcb0197d7b7d7cf2fe1c48fc242b7b58effdc3deb0c6a62d5_prof);

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
<h1>Welcome to the Tasca:create page</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:Tasca:create.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/create.html.twig");
    }
}
