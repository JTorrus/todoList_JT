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
        $__internal_e31867d2ae20129f82ca4fe794d0d4b645ffe5d1c00502101f364309d20c2354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31867d2ae20129f82ca4fe794d0d4b645ffe5d1c00502101f364309d20c2354->enter($__internal_e31867d2ae20129f82ca4fe794d0d4b645ffe5d1c00502101f364309d20c2354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0a377cdda816dc2d1714c01d53571f87389af2f6126a6ff7e8cfdbf9466e1d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a377cdda816dc2d1714c01d53571f87389af2f6126a6ff7e8cfdbf9466e1d3c->enter($__internal_0a377cdda816dc2d1714c01d53571f87389af2f6126a6ff7e8cfdbf9466e1d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e31867d2ae20129f82ca4fe794d0d4b645ffe5d1c00502101f364309d20c2354->leave($__internal_e31867d2ae20129f82ca4fe794d0d4b645ffe5d1c00502101f364309d20c2354_prof);

        
        $__internal_0a377cdda816dc2d1714c01d53571f87389af2f6126a6ff7e8cfdbf9466e1d3c->leave($__internal_0a377cdda816dc2d1714c01d53571f87389af2f6126a6ff7e8cfdbf9466e1d3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c5869841c02baf0f1f12366d01683638ac82bc3e0c395b04f604cb2260197b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c5869841c02baf0f1f12366d01683638ac82bc3e0c395b04f604cb2260197b->enter($__internal_14c5869841c02baf0f1f12366d01683638ac82bc3e0c395b04f604cb2260197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a415af436216b0bd57dc3ef3d47226dc48e3f716d4a7f938c57370c13a3dfc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a415af436216b0bd57dc3ef3d47226dc48e3f716d4a7f938c57370c13a3dfc11->enter($__internal_a415af436216b0bd57dc3ef3d47226dc48e3f716d4a7f938c57370c13a3dfc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a415af436216b0bd57dc3ef3d47226dc48e3f716d4a7f938c57370c13a3dfc11->leave($__internal_a415af436216b0bd57dc3ef3d47226dc48e3f716d4a7f938c57370c13a3dfc11_prof);

        
        $__internal_14c5869841c02baf0f1f12366d01683638ac82bc3e0c395b04f604cb2260197b->leave($__internal_14c5869841c02baf0f1f12366d01683638ac82bc3e0c395b04f604cb2260197b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8c98900e8a13404ed045f08e6baf1b855c2b2100fb55be48ef62cdf82bad880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c98900e8a13404ed045f08e6baf1b855c2b2100fb55be48ef62cdf82bad880->enter($__internal_b8c98900e8a13404ed045f08e6baf1b855c2b2100fb55be48ef62cdf82bad880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e0b8bc5073af0e52bd051cb12c92f151901dd80cfff54310a46188e23bb14eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0b8bc5073af0e52bd051cb12c92f151901dd80cfff54310a46188e23bb14eb->enter($__internal_3e0b8bc5073af0e52bd051cb12c92f151901dd80cfff54310a46188e23bb14eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e0b8bc5073af0e52bd051cb12c92f151901dd80cfff54310a46188e23bb14eb->leave($__internal_3e0b8bc5073af0e52bd051cb12c92f151901dd80cfff54310a46188e23bb14eb_prof);

        
        $__internal_b8c98900e8a13404ed045f08e6baf1b855c2b2100fb55be48ef62cdf82bad880->leave($__internal_b8c98900e8a13404ed045f08e6baf1b855c2b2100fb55be48ef62cdf82bad880_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dbce02e5e21887a16a2fc1d03503976c939d65606b3f2d3f7aed8bc07992044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbce02e5e21887a16a2fc1d03503976c939d65606b3f2d3f7aed8bc07992044->enter($__internal_0dbce02e5e21887a16a2fc1d03503976c939d65606b3f2d3f7aed8bc07992044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0799c5cebb5e1cf5a72b886ddb70a8ae24037d7979fd2c9b8f6c1ea8ca455692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0799c5cebb5e1cf5a72b886ddb70a8ae24037d7979fd2c9b8f6c1ea8ca455692->enter($__internal_0799c5cebb5e1cf5a72b886ddb70a8ae24037d7979fd2c9b8f6c1ea8ca455692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0799c5cebb5e1cf5a72b886ddb70a8ae24037d7979fd2c9b8f6c1ea8ca455692->leave($__internal_0799c5cebb5e1cf5a72b886ddb70a8ae24037d7979fd2c9b8f6c1ea8ca455692_prof);

        
        $__internal_0dbce02e5e21887a16a2fc1d03503976c939d65606b3f2d3f7aed8bc07992044->leave($__internal_0dbce02e5e21887a16a2fc1d03503976c939d65606b3f2d3f7aed8bc07992044_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4411fddab65e43ec72b8f1756b6c36c0e0ea854fbab101acf667083fef6cb59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4411fddab65e43ec72b8f1756b6c36c0e0ea854fbab101acf667083fef6cb59c->enter($__internal_4411fddab65e43ec72b8f1756b6c36c0e0ea854fbab101acf667083fef6cb59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6839848f699bed6373d39a50143d537bd2302e58cd2b10b8153b2c21bcf37897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6839848f699bed6373d39a50143d537bd2302e58cd2b10b8153b2c21bcf37897->enter($__internal_6839848f699bed6373d39a50143d537bd2302e58cd2b10b8153b2c21bcf37897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6839848f699bed6373d39a50143d537bd2302e58cd2b10b8153b2c21bcf37897->leave($__internal_6839848f699bed6373d39a50143d537bd2302e58cd2b10b8153b2c21bcf37897_prof);

        
        $__internal_4411fddab65e43ec72b8f1756b6c36c0e0ea854fbab101acf667083fef6cb59c->leave($__internal_4411fddab65e43ec72b8f1756b6c36c0e0ea854fbab101acf667083fef6cb59c_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\app/Resources\\views/base.html.twig");
    }
}
