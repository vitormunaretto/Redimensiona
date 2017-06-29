<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_673f0b8b2642cf7b4013588d89ea53bbc335e2864d1de36cafdc4184e04d7cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673f0b8b2642cf7b4013588d89ea53bbc335e2864d1de36cafdc4184e04d7cae->enter($__internal_673f0b8b2642cf7b4013588d89ea53bbc335e2864d1de36cafdc4184e04d7cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6e59b0dd93bd04a2a98ed4d54e1201a05451dc7c12db6fa854ea5ba2af35d5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e59b0dd93bd04a2a98ed4d54e1201a05451dc7c12db6fa854ea5ba2af35d5d9->enter($__internal_6e59b0dd93bd04a2a98ed4d54e1201a05451dc7c12db6fa854ea5ba2af35d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_673f0b8b2642cf7b4013588d89ea53bbc335e2864d1de36cafdc4184e04d7cae->leave($__internal_673f0b8b2642cf7b4013588d89ea53bbc335e2864d1de36cafdc4184e04d7cae_prof);

        
        $__internal_6e59b0dd93bd04a2a98ed4d54e1201a05451dc7c12db6fa854ea5ba2af35d5d9->leave($__internal_6e59b0dd93bd04a2a98ed4d54e1201a05451dc7c12db6fa854ea5ba2af35d5d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ec63b82d1734ed05f953b77a0c5a41868407b6856f8f3c80d33c24196154fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ec63b82d1734ed05f953b77a0c5a41868407b6856f8f3c80d33c24196154fd->enter($__internal_54ec63b82d1734ed05f953b77a0c5a41868407b6856f8f3c80d33c24196154fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e8d0cd9d7edfbd810bb90c6cc78ef695f09cd67eb2fef7252e33dee11c4317c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8d0cd9d7edfbd810bb90c6cc78ef695f09cd67eb2fef7252e33dee11c4317c->enter($__internal_7e8d0cd9d7edfbd810bb90c6cc78ef695f09cd67eb2fef7252e33dee11c4317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7e8d0cd9d7edfbd810bb90c6cc78ef695f09cd67eb2fef7252e33dee11c4317c->leave($__internal_7e8d0cd9d7edfbd810bb90c6cc78ef695f09cd67eb2fef7252e33dee11c4317c_prof);

        
        $__internal_54ec63b82d1734ed05f953b77a0c5a41868407b6856f8f3c80d33c24196154fd->leave($__internal_54ec63b82d1734ed05f953b77a0c5a41868407b6856f8f3c80d33c24196154fd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4770ab2e5dff90cd801738e9a186b586ee8fbb91c47d046d17a071b8b351ece9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4770ab2e5dff90cd801738e9a186b586ee8fbb91c47d046d17a071b8b351ece9->enter($__internal_4770ab2e5dff90cd801738e9a186b586ee8fbb91c47d046d17a071b8b351ece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f55d702a0ab7a5f6f231c4fe1123d4c7575f20c536b3c43535d15c74f8c997d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f55d702a0ab7a5f6f231c4fe1123d4c7575f20c536b3c43535d15c74f8c997d->enter($__internal_9f55d702a0ab7a5f6f231c4fe1123d4c7575f20c536b3c43535d15c74f8c997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f55d702a0ab7a5f6f231c4fe1123d4c7575f20c536b3c43535d15c74f8c997d->leave($__internal_9f55d702a0ab7a5f6f231c4fe1123d4c7575f20c536b3c43535d15c74f8c997d_prof);

        
        $__internal_4770ab2e5dff90cd801738e9a186b586ee8fbb91c47d046d17a071b8b351ece9->leave($__internal_4770ab2e5dff90cd801738e9a186b586ee8fbb91c47d046d17a071b8b351ece9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_00bfbbd91e1635f3cafb40facbeeb477751350d1a0cb7842bda04de713862192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bfbbd91e1635f3cafb40facbeeb477751350d1a0cb7842bda04de713862192->enter($__internal_00bfbbd91e1635f3cafb40facbeeb477751350d1a0cb7842bda04de713862192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6395465b8ea6a5c671d5bb446a9ae3d0a6a156f83deb1f0f1a33086d66c9fda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6395465b8ea6a5c671d5bb446a9ae3d0a6a156f83deb1f0f1a33086d66c9fda7->enter($__internal_6395465b8ea6a5c671d5bb446a9ae3d0a6a156f83deb1f0f1a33086d66c9fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6395465b8ea6a5c671d5bb446a9ae3d0a6a156f83deb1f0f1a33086d66c9fda7->leave($__internal_6395465b8ea6a5c671d5bb446a9ae3d0a6a156f83deb1f0f1a33086d66c9fda7_prof);

        
        $__internal_00bfbbd91e1635f3cafb40facbeeb477751350d1a0cb7842bda04de713862192->leave($__internal_00bfbbd91e1635f3cafb40facbeeb477751350d1a0cb7842bda04de713862192_prof);

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
", "@Twig/layout.html.twig", "/home/vitor/Documents/red/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
