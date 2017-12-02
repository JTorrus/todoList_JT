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
        $__internal_c17e581fb6d1ab1577450925755142c881aa780176e33887c8df6139c4e257d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17e581fb6d1ab1577450925755142c881aa780176e33887c8df6139c4e257d2->enter($__internal_c17e581fb6d1ab1577450925755142c881aa780176e33887c8df6139c4e257d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $__internal_a9aeb0c2535dc76c926fc74f5edd6c071ea94cc1d906eaeb1f8730b5979738bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9aeb0c2535dc76c926fc74f5edd6c071ea94cc1d906eaeb1f8730b5979738bc->enter($__internal_a9aeb0c2535dc76c926fc74f5edd6c071ea94cc1d906eaeb1f8730b5979738bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17e581fb6d1ab1577450925755142c881aa780176e33887c8df6139c4e257d2->leave($__internal_c17e581fb6d1ab1577450925755142c881aa780176e33887c8df6139c4e257d2_prof);

        
        $__internal_a9aeb0c2535dc76c926fc74f5edd6c071ea94cc1d906eaeb1f8730b5979738bc->leave($__internal_a9aeb0c2535dc76c926fc74f5edd6c071ea94cc1d906eaeb1f8730b5979738bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d74b61afa04250df260cf9ab12916acc11be1decf8010594f68274d883ea1375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74b61afa04250df260cf9ab12916acc11be1decf8010594f68274d883ea1375->enter($__internal_d74b61afa04250df260cf9ab12916acc11be1decf8010594f68274d883ea1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77eef95e528cf6dfcc40475ef7c6234e92a5c048eda8e23bea0bd372017077fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77eef95e528cf6dfcc40475ef7c6234e92a5c048eda8e23bea0bd372017077fb->enter($__internal_77eef95e528cf6dfcc40475ef7c6234e92a5c048eda8e23bea0bd372017077fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:update";
        
        $__internal_77eef95e528cf6dfcc40475ef7c6234e92a5c048eda8e23bea0bd372017077fb->leave($__internal_77eef95e528cf6dfcc40475ef7c6234e92a5c048eda8e23bea0bd372017077fb_prof);

        
        $__internal_d74b61afa04250df260cf9ab12916acc11be1decf8010594f68274d883ea1375->leave($__internal_d74b61afa04250df260cf9ab12916acc11be1decf8010594f68274d883ea1375_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e90dbe93170316b78cdce83358ac052d89488a1ab0460df84706dcfcca1d5854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90dbe93170316b78cdce83358ac052d89488a1ab0460df84706dcfcca1d5854->enter($__internal_e90dbe93170316b78cdce83358ac052d89488a1ab0460df84706dcfcca1d5854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55549cbbea844d11e6f18d5a433e84b45a6e5f8546849d168595f42f70b6f72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55549cbbea844d11e6f18d5a433e84b45a6e5f8546849d168595f42f70b6f72f->enter($__internal_55549cbbea844d11e6f18d5a433e84b45a6e5f8546849d168595f42f70b6f72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Tasca:update page</h1>
";
        
        $__internal_55549cbbea844d11e6f18d5a433e84b45a6e5f8546849d168595f42f70b6f72f->leave($__internal_55549cbbea844d11e6f18d5a433e84b45a6e5f8546849d168595f42f70b6f72f_prof);

        
        $__internal_e90dbe93170316b78cdce83358ac052d89488a1ab0460df84706dcfcca1d5854->leave($__internal_e90dbe93170316b78cdce83358ac052d89488a1ab0460df84706dcfcca1d5854_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<h1>Welcome to the Tasca:update page</h1>
{% endblock %}
", "AppBundle:Tasca:update.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/update.html.twig");
    }
}
