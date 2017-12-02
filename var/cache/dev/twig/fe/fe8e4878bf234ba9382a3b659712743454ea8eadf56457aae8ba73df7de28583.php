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
        $__internal_2ae54e09c795f5bc8a17ec11a2a830b8611fe5a49a0bc5d6fe13a1868e288bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae54e09c795f5bc8a17ec11a2a830b8611fe5a49a0bc5d6fe13a1868e288bb7->enter($__internal_2ae54e09c795f5bc8a17ec11a2a830b8611fe5a49a0bc5d6fe13a1868e288bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $__internal_69c06cfa6c8bb7fd7a3d562efe8eff0d4e5ca04234468bb415f4e0cd976171ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c06cfa6c8bb7fd7a3d562efe8eff0d4e5ca04234468bb415f4e0cd976171ad->enter($__internal_69c06cfa6c8bb7fd7a3d562efe8eff0d4e5ca04234468bb415f4e0cd976171ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasca:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae54e09c795f5bc8a17ec11a2a830b8611fe5a49a0bc5d6fe13a1868e288bb7->leave($__internal_2ae54e09c795f5bc8a17ec11a2a830b8611fe5a49a0bc5d6fe13a1868e288bb7_prof);

        
        $__internal_69c06cfa6c8bb7fd7a3d562efe8eff0d4e5ca04234468bb415f4e0cd976171ad->leave($__internal_69c06cfa6c8bb7fd7a3d562efe8eff0d4e5ca04234468bb415f4e0cd976171ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_631fb33e8e73e04b2e1ca88fbbe3fa7eea77bfacd16d6d09d21e467bd1268039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631fb33e8e73e04b2e1ca88fbbe3fa7eea77bfacd16d6d09d21e467bd1268039->enter($__internal_631fb33e8e73e04b2e1ca88fbbe3fa7eea77bfacd16d6d09d21e467bd1268039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7bd497a2b60cfe5a932f0da3a6e0b1dabe2e4124cc4f3b070c5baf2d15875d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bd497a2b60cfe5a932f0da3a6e0b1dabe2e4124cc4f3b070c5baf2d15875d9->enter($__internal_d7bd497a2b60cfe5a932f0da3a6e0b1dabe2e4124cc4f3b070c5baf2d15875d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Tasca:create";
        
        $__internal_d7bd497a2b60cfe5a932f0da3a6e0b1dabe2e4124cc4f3b070c5baf2d15875d9->leave($__internal_d7bd497a2b60cfe5a932f0da3a6e0b1dabe2e4124cc4f3b070c5baf2d15875d9_prof);

        
        $__internal_631fb33e8e73e04b2e1ca88fbbe3fa7eea77bfacd16d6d09d21e467bd1268039->leave($__internal_631fb33e8e73e04b2e1ca88fbbe3fa7eea77bfacd16d6d09d21e467bd1268039_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce631b2a2694d98a591a5cec20cc46a1ec36166991d265a7e02213058d2f83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce631b2a2694d98a591a5cec20cc46a1ec36166991d265a7e02213058d2f83c->enter($__internal_9ce631b2a2694d98a591a5cec20cc46a1ec36166991d265a7e02213058d2f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_233a0a78b9b1d42a2531e606cf7b95c6376f06a807448fee870ab0fd01468b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233a0a78b9b1d42a2531e606cf7b95c6376f06a807448fee870ab0fd01468b05->enter($__internal_233a0a78b9b1d42a2531e606cf7b95c6376f06a807448fee870ab0fd01468b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Tasca:create page</h1>
";
        
        $__internal_233a0a78b9b1d42a2531e606cf7b95c6376f06a807448fee870ab0fd01468b05->leave($__internal_233a0a78b9b1d42a2531e606cf7b95c6376f06a807448fee870ab0fd01468b05_prof);

        
        $__internal_9ce631b2a2694d98a591a5cec20cc46a1ec36166991d265a7e02213058d2f83c->leave($__internal_9ce631b2a2694d98a591a5cec20cc46a1ec36166991d265a7e02213058d2f83c_prof);

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

{% block title %}AppBundle:Tasca:create{% endblock %}

{% block body %}
<h1>Welcome to the Tasca:create page</h1>
{% endblock %}
", "AppBundle:Tasca:create.html.twig", "C:\\xampp\\htdocs\\todolist\\src\\AppBundle/Resources/views/Tasca/create.html.twig");
    }
}
