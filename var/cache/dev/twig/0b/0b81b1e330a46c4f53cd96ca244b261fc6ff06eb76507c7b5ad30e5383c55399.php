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
        $__internal_7f1398a768ca909a447d5ce3f3c289ea280da77c8405b8aa64ff5554abdcbf0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1398a768ca909a447d5ce3f3c289ea280da77c8405b8aa64ff5554abdcbf0a->enter($__internal_7f1398a768ca909a447d5ce3f3c289ea280da77c8405b8aa64ff5554abdcbf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f3fc01d5a4894b3b66f505f34183637b6c7f353c693b61b52bf88b4580016cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fc01d5a4894b3b66f505f34183637b6c7f353c693b61b52bf88b4580016cc7->enter($__internal_f3fc01d5a4894b3b66f505f34183637b6c7f353c693b61b52bf88b4580016cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7f1398a768ca909a447d5ce3f3c289ea280da77c8405b8aa64ff5554abdcbf0a->leave($__internal_7f1398a768ca909a447d5ce3f3c289ea280da77c8405b8aa64ff5554abdcbf0a_prof);

        
        $__internal_f3fc01d5a4894b3b66f505f34183637b6c7f353c693b61b52bf88b4580016cc7->leave($__internal_f3fc01d5a4894b3b66f505f34183637b6c7f353c693b61b52bf88b4580016cc7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6b532aaae47edc3711d97fcaadeeebae73376ce7a9647c6c0a948e346b1f0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b532aaae47edc3711d97fcaadeeebae73376ce7a9647c6c0a948e346b1f0b1->enter($__internal_e6b532aaae47edc3711d97fcaadeeebae73376ce7a9647c6c0a948e346b1f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_370a013e5052c30454bd36e59172e6c8c00cee096973313c567913c67fbdbced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370a013e5052c30454bd36e59172e6c8c00cee096973313c567913c67fbdbced->enter($__internal_370a013e5052c30454bd36e59172e6c8c00cee096973313c567913c67fbdbced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_370a013e5052c30454bd36e59172e6c8c00cee096973313c567913c67fbdbced->leave($__internal_370a013e5052c30454bd36e59172e6c8c00cee096973313c567913c67fbdbced_prof);

        
        $__internal_e6b532aaae47edc3711d97fcaadeeebae73376ce7a9647c6c0a948e346b1f0b1->leave($__internal_e6b532aaae47edc3711d97fcaadeeebae73376ce7a9647c6c0a948e346b1f0b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3ea7684c9767be9e32f9c8520e391b56ba88b31cde9c89834534c65db1466c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea7684c9767be9e32f9c8520e391b56ba88b31cde9c89834534c65db1466c8->enter($__internal_b3ea7684c9767be9e32f9c8520e391b56ba88b31cde9c89834534c65db1466c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a07c51da1143421191e8bcff51601d0211b9cb54b9b53bec8a757bc67649851d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07c51da1143421191e8bcff51601d0211b9cb54b9b53bec8a757bc67649851d->enter($__internal_a07c51da1143421191e8bcff51601d0211b9cb54b9b53bec8a757bc67649851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a07c51da1143421191e8bcff51601d0211b9cb54b9b53bec8a757bc67649851d->leave($__internal_a07c51da1143421191e8bcff51601d0211b9cb54b9b53bec8a757bc67649851d_prof);

        
        $__internal_b3ea7684c9767be9e32f9c8520e391b56ba88b31cde9c89834534c65db1466c8->leave($__internal_b3ea7684c9767be9e32f9c8520e391b56ba88b31cde9c89834534c65db1466c8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b04de61bdbf2a3e2cfca2276d581a6adf90a4a6595c93a2d4c1fcde4c83eba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b04de61bdbf2a3e2cfca2276d581a6adf90a4a6595c93a2d4c1fcde4c83eba8->enter($__internal_7b04de61bdbf2a3e2cfca2276d581a6adf90a4a6595c93a2d4c1fcde4c83eba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_baca14eb0514da89dbb9ddd35497086b9177e856e45fa7676dacfb0c5d13b6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baca14eb0514da89dbb9ddd35497086b9177e856e45fa7676dacfb0c5d13b6bf->enter($__internal_baca14eb0514da89dbb9ddd35497086b9177e856e45fa7676dacfb0c5d13b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_baca14eb0514da89dbb9ddd35497086b9177e856e45fa7676dacfb0c5d13b6bf->leave($__internal_baca14eb0514da89dbb9ddd35497086b9177e856e45fa7676dacfb0c5d13b6bf_prof);

        
        $__internal_7b04de61bdbf2a3e2cfca2276d581a6adf90a4a6595c93a2d4c1fcde4c83eba8->leave($__internal_7b04de61bdbf2a3e2cfca2276d581a6adf90a4a6595c93a2d4c1fcde4c83eba8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_436384c17d014dd84af416c8263d6646ffc58fb9edd9e39be29298ea5c0258d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436384c17d014dd84af416c8263d6646ffc58fb9edd9e39be29298ea5c0258d5->enter($__internal_436384c17d014dd84af416c8263d6646ffc58fb9edd9e39be29298ea5c0258d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5970892aa35962b504d75c0c004215e8b833071bff4ddd85cad820618fc8f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5970892aa35962b504d75c0c004215e8b833071bff4ddd85cad820618fc8f7b->enter($__internal_e5970892aa35962b504d75c0c004215e8b833071bff4ddd85cad820618fc8f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5970892aa35962b504d75c0c004215e8b833071bff4ddd85cad820618fc8f7b->leave($__internal_e5970892aa35962b504d75c0c004215e8b833071bff4ddd85cad820618fc8f7b_prof);

        
        $__internal_436384c17d014dd84af416c8263d6646ffc58fb9edd9e39be29298ea5c0258d5->leave($__internal_436384c17d014dd84af416c8263d6646ffc58fb9edd9e39be29298ea5c0258d5_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\todolist\\app/Resources\\views/base.html.twig");
    }
}
