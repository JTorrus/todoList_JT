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
        $__internal_7832521b41d6840c6e2b808b009af1c6424e837244671addd807a04fb645eca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7832521b41d6840c6e2b808b009af1c6424e837244671addd807a04fb645eca7->enter($__internal_7832521b41d6840c6e2b808b009af1c6424e837244671addd807a04fb645eca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8ad4eac7d7f5975b16f85e5a6df87eff83d0314e1b90b09be02e1794036203db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad4eac7d7f5975b16f85e5a6df87eff83d0314e1b90b09be02e1794036203db->enter($__internal_8ad4eac7d7f5975b16f85e5a6df87eff83d0314e1b90b09be02e1794036203db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7832521b41d6840c6e2b808b009af1c6424e837244671addd807a04fb645eca7->leave($__internal_7832521b41d6840c6e2b808b009af1c6424e837244671addd807a04fb645eca7_prof);

        
        $__internal_8ad4eac7d7f5975b16f85e5a6df87eff83d0314e1b90b09be02e1794036203db->leave($__internal_8ad4eac7d7f5975b16f85e5a6df87eff83d0314e1b90b09be02e1794036203db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d925de3966201c5de196fe576f8d2626167b57c8600d9fc2ccc9f1bf25e51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d925de3966201c5de196fe576f8d2626167b57c8600d9fc2ccc9f1bf25e51e->enter($__internal_e1d925de3966201c5de196fe576f8d2626167b57c8600d9fc2ccc9f1bf25e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbbc8854742bb1de5ab9ffa2966f60e9f36315594b3856195896823e9a6e366d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbc8854742bb1de5ab9ffa2966f60e9f36315594b3856195896823e9a6e366d->enter($__internal_fbbc8854742bb1de5ab9ffa2966f60e9f36315594b3856195896823e9a6e366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fbbc8854742bb1de5ab9ffa2966f60e9f36315594b3856195896823e9a6e366d->leave($__internal_fbbc8854742bb1de5ab9ffa2966f60e9f36315594b3856195896823e9a6e366d_prof);

        
        $__internal_e1d925de3966201c5de196fe576f8d2626167b57c8600d9fc2ccc9f1bf25e51e->leave($__internal_e1d925de3966201c5de196fe576f8d2626167b57c8600d9fc2ccc9f1bf25e51e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae55e1b45d2d66a6ffb764fa201b2a102c92fb44f7140b20073640ef3ff04a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae55e1b45d2d66a6ffb764fa201b2a102c92fb44f7140b20073640ef3ff04a75->enter($__internal_ae55e1b45d2d66a6ffb764fa201b2a102c92fb44f7140b20073640ef3ff04a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd9dfe82c70a687c9a0048852b175c54811fe0af4670ac980b7cc139c5c54ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9dfe82c70a687c9a0048852b175c54811fe0af4670ac980b7cc139c5c54ed0->enter($__internal_dd9dfe82c70a687c9a0048852b175c54811fe0af4670ac980b7cc139c5c54ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dd9dfe82c70a687c9a0048852b175c54811fe0af4670ac980b7cc139c5c54ed0->leave($__internal_dd9dfe82c70a687c9a0048852b175c54811fe0af4670ac980b7cc139c5c54ed0_prof);

        
        $__internal_ae55e1b45d2d66a6ffb764fa201b2a102c92fb44f7140b20073640ef3ff04a75->leave($__internal_ae55e1b45d2d66a6ffb764fa201b2a102c92fb44f7140b20073640ef3ff04a75_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fb6481ff0b8b59cda0f6e46fc933c2e13d86cd509d7f014c901c096c441a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fb6481ff0b8b59cda0f6e46fc933c2e13d86cd509d7f014c901c096c441a37->enter($__internal_a8fb6481ff0b8b59cda0f6e46fc933c2e13d86cd509d7f014c901c096c441a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc83f4778f17b46673520ce3555071198b9de5c86875cd89ef1835131b140183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc83f4778f17b46673520ce3555071198b9de5c86875cd89ef1835131b140183->enter($__internal_cc83f4778f17b46673520ce3555071198b9de5c86875cd89ef1835131b140183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc83f4778f17b46673520ce3555071198b9de5c86875cd89ef1835131b140183->leave($__internal_cc83f4778f17b46673520ce3555071198b9de5c86875cd89ef1835131b140183_prof);

        
        $__internal_a8fb6481ff0b8b59cda0f6e46fc933c2e13d86cd509d7f014c901c096c441a37->leave($__internal_a8fb6481ff0b8b59cda0f6e46fc933c2e13d86cd509d7f014c901c096c441a37_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\todoList_JT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
