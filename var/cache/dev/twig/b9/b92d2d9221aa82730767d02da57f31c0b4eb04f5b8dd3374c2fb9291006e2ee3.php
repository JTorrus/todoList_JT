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
        $__internal_6a4bee5012543f7c2bf8862f9861049760e5457e033e2d9e2543301d96aab319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4bee5012543f7c2bf8862f9861049760e5457e033e2d9e2543301d96aab319->enter($__internal_6a4bee5012543f7c2bf8862f9861049760e5457e033e2d9e2543301d96aab319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $__internal_17ca444b17f62b8bdc0e923126c64e0608d07fda14fc9f936db60d2059a6c4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ca444b17f62b8bdc0e923126c64e0608d07fda14fc9f936db60d2059a6c4b4->enter($__internal_17ca444b17f62b8bdc0e923126c64e0608d07fda14fc9f936db60d2059a6c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a4bee5012543f7c2bf8862f9861049760e5457e033e2d9e2543301d96aab319->leave($__internal_6a4bee5012543f7c2bf8862f9861049760e5457e033e2d9e2543301d96aab319_prof);

        
        $__internal_17ca444b17f62b8bdc0e923126c64e0608d07fda14fc9f936db60d2059a6c4b4->leave($__internal_17ca444b17f62b8bdc0e923126c64e0608d07fda14fc9f936db60d2059a6c4b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a880f5ef45d70f8882999591497331b44febe25d60654ed5c0639927a790384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a880f5ef45d70f8882999591497331b44febe25d60654ed5c0639927a790384->enter($__internal_7a880f5ef45d70f8882999591497331b44febe25d60654ed5c0639927a790384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_995027c5c50895b5af8dd129c753df71225ef64c863ae1eea89cfcdc2e28b832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995027c5c50895b5af8dd129c753df71225ef64c863ae1eea89cfcdc2e28b832->enter($__internal_995027c5c50895b5af8dd129c753df71225ef64c863ae1eea89cfcdc2e28b832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:update";
        
        $__internal_995027c5c50895b5af8dd129c753df71225ef64c863ae1eea89cfcdc2e28b832->leave($__internal_995027c5c50895b5af8dd129c753df71225ef64c863ae1eea89cfcdc2e28b832_prof);

        
        $__internal_7a880f5ef45d70f8882999591497331b44febe25d60654ed5c0639927a790384->leave($__internal_7a880f5ef45d70f8882999591497331b44febe25d60654ed5c0639927a790384_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cea83cf2274ce1f9d24b527b04c80607e3a7c95d3d2591311055a1cea0b86a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cea83cf2274ce1f9d24b527b04c80607e3a7c95d3d2591311055a1cea0b86a5->enter($__internal_7cea83cf2274ce1f9d24b527b04c80607e3a7c95d3d2591311055a1cea0b86a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f215500cac668820bd79b174840a14a118a000fdd9d7309eb2afa68b72351b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f215500cac668820bd79b174840a14a118a000fdd9d7309eb2afa68b72351b65->enter($__internal_f215500cac668820bd79b174840a14a118a000fdd9d7309eb2afa68b72351b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f215500cac668820bd79b174840a14a118a000fdd9d7309eb2afa68b72351b65->leave($__internal_f215500cac668820bd79b174840a14a118a000fdd9d7309eb2afa68b72351b65_prof);

        
        $__internal_7cea83cf2274ce1f9d24b527b04c80607e3a7c95d3d2591311055a1cea0b86a5->leave($__internal_7cea83cf2274ce1f9d24b527b04c80607e3a7c95d3d2591311055a1cea0b86a5_prof);

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

{% block title %}AppBundle:Tasca:update{% endblock %}

{% block body %}
<h1>Editar tasca</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:Tasca:update.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/update.html.twig");
    }
}
