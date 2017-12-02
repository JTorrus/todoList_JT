<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f61fd1470e9f5391de8cab865b242588231ce6962e6f3fd2d3b01a59eb726a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61fd1470e9f5391de8cab865b242588231ce6962e6f3fd2d3b01a59eb726a9e->enter($__internal_f61fd1470e9f5391de8cab865b242588231ce6962e6f3fd2d3b01a59eb726a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fb4b9752a37206cf78d23e9073b9c0d6bd127003bcfeef978d41e83980e5d3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4b9752a37206cf78d23e9073b9c0d6bd127003bcfeef978d41e83980e5d3ff->enter($__internal_fb4b9752a37206cf78d23e9073b9c0d6bd127003bcfeef978d41e83980e5d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav style=\"width: 100%; background-color: black\">
            <ul style=\"list-style-type: none\">
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"create\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Crear</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"update\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Modificar</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"list\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Llistar</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"remove\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Eliminar</span>
                    </a>
                </li>
            </ul>
        </nav>

        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_f61fd1470e9f5391de8cab865b242588231ce6962e6f3fd2d3b01a59eb726a9e->leave($__internal_f61fd1470e9f5391de8cab865b242588231ce6962e6f3fd2d3b01a59eb726a9e_prof);

        
        $__internal_fb4b9752a37206cf78d23e9073b9c0d6bd127003bcfeef978d41e83980e5d3ff->leave($__internal_fb4b9752a37206cf78d23e9073b9c0d6bd127003bcfeef978d41e83980e5d3ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffeba7d94f2766b5ae41ce5b1a6acd0ddfdb291c23641e655b6a401ef94c50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffeba7d94f2766b5ae41ce5b1a6acd0ddfdb291c23641e655b6a401ef94c50a->enter($__internal_0ffeba7d94f2766b5ae41ce5b1a6acd0ddfdb291c23641e655b6a401ef94c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12b3b2dbda0195b5d0b478ed477312c6f4ddbe454b30cf2c4e27652a4f932ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b3b2dbda0195b5d0b478ed477312c6f4ddbe454b30cf2c4e27652a4f932ad0->enter($__internal_12b3b2dbda0195b5d0b478ed477312c6f4ddbe454b30cf2c4e27652a4f932ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12b3b2dbda0195b5d0b478ed477312c6f4ddbe454b30cf2c4e27652a4f932ad0->leave($__internal_12b3b2dbda0195b5d0b478ed477312c6f4ddbe454b30cf2c4e27652a4f932ad0_prof);

        
        $__internal_0ffeba7d94f2766b5ae41ce5b1a6acd0ddfdb291c23641e655b6a401ef94c50a->leave($__internal_0ffeba7d94f2766b5ae41ce5b1a6acd0ddfdb291c23641e655b6a401ef94c50a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59ee0b01a9908a5f7995dd46bcbdfc5f797c2ddfaf2ae7a72d1b7f840ee01735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ee0b01a9908a5f7995dd46bcbdfc5f797c2ddfaf2ae7a72d1b7f840ee01735->enter($__internal_59ee0b01a9908a5f7995dd46bcbdfc5f797c2ddfaf2ae7a72d1b7f840ee01735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c70f8a24d3809d126b89f33b9640960088118ba90abcade212f8710d40592f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70f8a24d3809d126b89f33b9640960088118ba90abcade212f8710d40592f03->enter($__internal_c70f8a24d3809d126b89f33b9640960088118ba90abcade212f8710d40592f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c70f8a24d3809d126b89f33b9640960088118ba90abcade212f8710d40592f03->leave($__internal_c70f8a24d3809d126b89f33b9640960088118ba90abcade212f8710d40592f03_prof);

        
        $__internal_59ee0b01a9908a5f7995dd46bcbdfc5f797c2ddfaf2ae7a72d1b7f840ee01735->leave($__internal_59ee0b01a9908a5f7995dd46bcbdfc5f797c2ddfaf2ae7a72d1b7f840ee01735_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_99804fd3f2f821584bbb9a4ed2a03b9274530a996d8046ca94d31cdef9e1fdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99804fd3f2f821584bbb9a4ed2a03b9274530a996d8046ca94d31cdef9e1fdc0->enter($__internal_99804fd3f2f821584bbb9a4ed2a03b9274530a996d8046ca94d31cdef9e1fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_569e4ceb46fa5abc40f5da4d3eafca2762e954bed2cbd463ea6e8cffabced44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569e4ceb46fa5abc40f5da4d3eafca2762e954bed2cbd463ea6e8cffabced44a->enter($__internal_569e4ceb46fa5abc40f5da4d3eafca2762e954bed2cbd463ea6e8cffabced44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_569e4ceb46fa5abc40f5da4d3eafca2762e954bed2cbd463ea6e8cffabced44a->leave($__internal_569e4ceb46fa5abc40f5da4d3eafca2762e954bed2cbd463ea6e8cffabced44a_prof);

        
        $__internal_99804fd3f2f821584bbb9a4ed2a03b9274530a996d8046ca94d31cdef9e1fdc0->leave($__internal_99804fd3f2f821584bbb9a4ed2a03b9274530a996d8046ca94d31cdef9e1fdc0_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6af76a55acab735b222778ffcd3da131d170a4341a46d42db1d9263b708ce3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af76a55acab735b222778ffcd3da131d170a4341a46d42db1d9263b708ce3ad->enter($__internal_6af76a55acab735b222778ffcd3da131d170a4341a46d42db1d9263b708ce3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bc430724f6fe35466b249453c805124ac1f79a8d36627545e2534bac1129ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc430724f6fe35466b249453c805124ac1f79a8d36627545e2534bac1129ae0->enter($__internal_6bc430724f6fe35466b249453c805124ac1f79a8d36627545e2534bac1129ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6bc430724f6fe35466b249453c805124ac1f79a8d36627545e2534bac1129ae0->leave($__internal_6bc430724f6fe35466b249453c805124ac1f79a8d36627545e2534bac1129ae0_prof);

        
        $__internal_6af76a55acab735b222778ffcd3da131d170a4341a46d42db1d9263b708ce3ad->leave($__internal_6af76a55acab735b222778ffcd3da131d170a4341a46d42db1d9263b708ce3ad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  125 => 35,  108 => 6,  90 => 5,  78 => 37,  75 => 36,  73 => 35,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <nav style=\"width: 100%; background-color: black\">
            <ul style=\"list-style-type: none\">
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"create\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Crear</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"update\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Modificar</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"list\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Llistar</span>
                    </a>
                </li>
                <li style=\"display: inline-block; background-color: black\">
                    <a href=\"remove\" style=\"text-decoration: none; color:white\">
                        <span style=\"font-weight:bold\">Eliminar</span>
                    </a>
                </li>
            </ul>
        </nav>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\app/Resources\\views/base.html.twig");
    }
}
