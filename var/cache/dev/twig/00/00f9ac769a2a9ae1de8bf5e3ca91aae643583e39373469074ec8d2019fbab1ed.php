<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f44046e877b3324a1c1bb7fa10d338cc13dad727f3925b2ee90f0fb3d74ba918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44046e877b3324a1c1bb7fa10d338cc13dad727f3925b2ee90f0fb3d74ba918->enter($__internal_f44046e877b3324a1c1bb7fa10d338cc13dad727f3925b2ee90f0fb3d74ba918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7ccf9e755ceea8f00e075345a8b3827b61dde27b7c9d1ed99733410b6158cd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccf9e755ceea8f00e075345a8b3827b61dde27b7c9d1ed99733410b6158cd76->enter($__internal_7ccf9e755ceea8f00e075345a8b3827b61dde27b7c9d1ed99733410b6158cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f44046e877b3324a1c1bb7fa10d338cc13dad727f3925b2ee90f0fb3d74ba918->leave($__internal_f44046e877b3324a1c1bb7fa10d338cc13dad727f3925b2ee90f0fb3d74ba918_prof);

        
        $__internal_7ccf9e755ceea8f00e075345a8b3827b61dde27b7c9d1ed99733410b6158cd76->leave($__internal_7ccf9e755ceea8f00e075345a8b3827b61dde27b7c9d1ed99733410b6158cd76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0faeba024f60b26aa8c7fc7f73b4b0eb4c16b855b6e42f407c709bcd300d4cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0faeba024f60b26aa8c7fc7f73b4b0eb4c16b855b6e42f407c709bcd300d4cfe->enter($__internal_0faeba024f60b26aa8c7fc7f73b4b0eb4c16b855b6e42f407c709bcd300d4cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_461c879fad802a28f2c2ac1d85eb7e15d5ae97bdc8c2cc3e0cb4db78cb863401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461c879fad802a28f2c2ac1d85eb7e15d5ae97bdc8c2cc3e0cb4db78cb863401->enter($__internal_461c879fad802a28f2c2ac1d85eb7e15d5ae97bdc8c2cc3e0cb4db78cb863401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_461c879fad802a28f2c2ac1d85eb7e15d5ae97bdc8c2cc3e0cb4db78cb863401->leave($__internal_461c879fad802a28f2c2ac1d85eb7e15d5ae97bdc8c2cc3e0cb4db78cb863401_prof);

        
        $__internal_0faeba024f60b26aa8c7fc7f73b4b0eb4c16b855b6e42f407c709bcd300d4cfe->leave($__internal_0faeba024f60b26aa8c7fc7f73b4b0eb4c16b855b6e42f407c709bcd300d4cfe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bc58db413d364509cb65d34ea1d0f12c48a5966cc5ac2e686119053934c5f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc58db413d364509cb65d34ea1d0f12c48a5966cc5ac2e686119053934c5f23->enter($__internal_4bc58db413d364509cb65d34ea1d0f12c48a5966cc5ac2e686119053934c5f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9026667a0924fa33e4004072f32b1d5e176d975c70042fa5c4e88df0ccbbb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9026667a0924fa33e4004072f32b1d5e176d975c70042fa5c4e88df0ccbbb57->enter($__internal_b9026667a0924fa33e4004072f32b1d5e176d975c70042fa5c4e88df0ccbbb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b9026667a0924fa33e4004072f32b1d5e176d975c70042fa5c4e88df0ccbbb57->leave($__internal_b9026667a0924fa33e4004072f32b1d5e176d975c70042fa5c4e88df0ccbbb57_prof);

        
        $__internal_4bc58db413d364509cb65d34ea1d0f12c48a5966cc5ac2e686119053934c5f23->leave($__internal_4bc58db413d364509cb65d34ea1d0f12c48a5966cc5ac2e686119053934c5f23_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c79e95705d368b8ff6cd01b2db1ab483831a215cd5234bd21fc66603a5781b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c79e95705d368b8ff6cd01b2db1ab483831a215cd5234bd21fc66603a5781b->enter($__internal_e4c79e95705d368b8ff6cd01b2db1ab483831a215cd5234bd21fc66603a5781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0220e5e73ab23d1e91aae2795813c2de13b291d9b22668be4310ce1c339cc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0220e5e73ab23d1e91aae2795813c2de13b291d9b22668be4310ce1c339cc9a->enter($__internal_c0220e5e73ab23d1e91aae2795813c2de13b291d9b22668be4310ce1c339cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0220e5e73ab23d1e91aae2795813c2de13b291d9b22668be4310ce1c339cc9a->leave($__internal_c0220e5e73ab23d1e91aae2795813c2de13b291d9b22668be4310ce1c339cc9a_prof);

        
        $__internal_e4c79e95705d368b8ff6cd01b2db1ab483831a215cd5234bd21fc66603a5781b->leave($__internal_e4c79e95705d368b8ff6cd01b2db1ab483831a215cd5234bd21fc66603a5781b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\todolist\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
