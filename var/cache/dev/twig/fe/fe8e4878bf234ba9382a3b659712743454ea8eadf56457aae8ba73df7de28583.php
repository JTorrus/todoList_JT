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
        $__internal_094d2e656410f3c0b7a10931298f59349e691e4c35a70c19f3b1e54ec4cdbd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094d2e656410f3c0b7a10931298f59349e691e4c35a70c19f3b1e54ec4cdbd78->enter($__internal_094d2e656410f3c0b7a10931298f59349e691e4c35a70c19f3b1e54ec4cdbd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_3f3fba0d6450569d07a6787a8a4cb943c08c92c630e19c43aa627cc2f262b7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3fba0d6450569d07a6787a8a4cb943c08c92c630e19c43aa627cc2f262b7e7->enter($__internal_3f3fba0d6450569d07a6787a8a4cb943c08c92c630e19c43aa627cc2f262b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094d2e656410f3c0b7a10931298f59349e691e4c35a70c19f3b1e54ec4cdbd78->leave($__internal_094d2e656410f3c0b7a10931298f59349e691e4c35a70c19f3b1e54ec4cdbd78_prof);

        
        $__internal_3f3fba0d6450569d07a6787a8a4cb943c08c92c630e19c43aa627cc2f262b7e7->leave($__internal_3f3fba0d6450569d07a6787a8a4cb943c08c92c630e19c43aa627cc2f262b7e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5df62e0d02e814a37b882d230ba7f487655f0e61ebbe9635baa3f6d85bffca4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df62e0d02e814a37b882d230ba7f487655f0e61ebbe9635baa3f6d85bffca4b->enter($__internal_5df62e0d02e814a37b882d230ba7f487655f0e61ebbe9635baa3f6d85bffca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6956457fc7fa5e88134b1dd31b3beac59a38fdb3417a11577a7bb0e71491ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6956457fc7fa5e88134b1dd31b3beac59a38fdb3417a11577a7bb0e71491ce2->enter($__internal_c6956457fc7fa5e88134b1dd31b3beac59a38fdb3417a11577a7bb0e71491ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_c6956457fc7fa5e88134b1dd31b3beac59a38fdb3417a11577a7bb0e71491ce2->leave($__internal_c6956457fc7fa5e88134b1dd31b3beac59a38fdb3417a11577a7bb0e71491ce2_prof);

        
        $__internal_5df62e0d02e814a37b882d230ba7f487655f0e61ebbe9635baa3f6d85bffca4b->leave($__internal_5df62e0d02e814a37b882d230ba7f487655f0e61ebbe9635baa3f6d85bffca4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_957a88717e65e34f52e70919d7188fea61339f59939ac1a395800d08031aa4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957a88717e65e34f52e70919d7188fea61339f59939ac1a395800d08031aa4fb->enter($__internal_957a88717e65e34f52e70919d7188fea61339f59939ac1a395800d08031aa4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b7d880db9dd3e39b502df8d534c7dd1a4f333aa4b0965a4bb99700189d64a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7d880db9dd3e39b502df8d534c7dd1a4f333aa4b0965a4bb99700189d64a48->enter($__internal_0b7d880db9dd3e39b502df8d534c7dd1a4f333aa4b0965a4bb99700189d64a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b7d880db9dd3e39b502df8d534c7dd1a4f333aa4b0965a4bb99700189d64a48->leave($__internal_0b7d880db9dd3e39b502df8d534c7dd1a4f333aa4b0965a4bb99700189d64a48_prof);

        
        $__internal_957a88717e65e34f52e70919d7188fea61339f59939ac1a395800d08031aa4fb->leave($__internal_957a88717e65e34f52e70919d7188fea61339f59939ac1a395800d08031aa4fb_prof);

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
