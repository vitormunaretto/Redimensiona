<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d7d34cdafae8af38c6f20d020f36760e68ad5ede9f8be7c52af7fd978d2fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d7d34cdafae8af38c6f20d020f36760e68ad5ede9f8be7c52af7fd978d2fca->enter($__internal_39d7d34cdafae8af38c6f20d020f36760e68ad5ede9f8be7c52af7fd978d2fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5462e82fbea20f7815cee26adaeeec1eeb0f9c4443efcd5c34f137ee0b3751fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5462e82fbea20f7815cee26adaeeec1eeb0f9c4443efcd5c34f137ee0b3751fc->enter($__internal_5462e82fbea20f7815cee26adaeeec1eeb0f9c4443efcd5c34f137ee0b3751fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d7d34cdafae8af38c6f20d020f36760e68ad5ede9f8be7c52af7fd978d2fca->leave($__internal_39d7d34cdafae8af38c6f20d020f36760e68ad5ede9f8be7c52af7fd978d2fca_prof);

        
        $__internal_5462e82fbea20f7815cee26adaeeec1eeb0f9c4443efcd5c34f137ee0b3751fc->leave($__internal_5462e82fbea20f7815cee26adaeeec1eeb0f9c4443efcd5c34f137ee0b3751fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24199a9b88934c737208b53116ff67ef26c0c08de8e12bba38499ea980434a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24199a9b88934c737208b53116ff67ef26c0c08de8e12bba38499ea980434a19->enter($__internal_24199a9b88934c737208b53116ff67ef26c0c08de8e12bba38499ea980434a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95fb5a564d1a23ba1019157b0f9352d8edeb673f45464c543266f208062a69a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fb5a564d1a23ba1019157b0f9352d8edeb673f45464c543266f208062a69a4->enter($__internal_95fb5a564d1a23ba1019157b0f9352d8edeb673f45464c543266f208062a69a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95fb5a564d1a23ba1019157b0f9352d8edeb673f45464c543266f208062a69a4->leave($__internal_95fb5a564d1a23ba1019157b0f9352d8edeb673f45464c543266f208062a69a4_prof);

        
        $__internal_24199a9b88934c737208b53116ff67ef26c0c08de8e12bba38499ea980434a19->leave($__internal_24199a9b88934c737208b53116ff67ef26c0c08de8e12bba38499ea980434a19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef7e08567eda06fd6a2cf29f4d3e53ceaef0eae2114da19741675e09b014bc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7e08567eda06fd6a2cf29f4d3e53ceaef0eae2114da19741675e09b014bc23->enter($__internal_ef7e08567eda06fd6a2cf29f4d3e53ceaef0eae2114da19741675e09b014bc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a151756a20a767aa9cd51ccb47d44abfdb8d1be717abbe1ca403375a4c351cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a151756a20a767aa9cd51ccb47d44abfdb8d1be717abbe1ca403375a4c351cf2->enter($__internal_a151756a20a767aa9cd51ccb47d44abfdb8d1be717abbe1ca403375a4c351cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a151756a20a767aa9cd51ccb47d44abfdb8d1be717abbe1ca403375a4c351cf2->leave($__internal_a151756a20a767aa9cd51ccb47d44abfdb8d1be717abbe1ca403375a4c351cf2_prof);

        
        $__internal_ef7e08567eda06fd6a2cf29f4d3e53ceaef0eae2114da19741675e09b014bc23->leave($__internal_ef7e08567eda06fd6a2cf29f4d3e53ceaef0eae2114da19741675e09b014bc23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddab21a455144a7a5597abbf405b868f17b101af40bf404e6ae29c7febc6582a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddab21a455144a7a5597abbf405b868f17b101af40bf404e6ae29c7febc6582a->enter($__internal_ddab21a455144a7a5597abbf405b868f17b101af40bf404e6ae29c7febc6582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ade66ef9b29b5844e66a2757fa28f015104463678156003683e877f3605a6e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade66ef9b29b5844e66a2757fa28f015104463678156003683e877f3605a6e63->enter($__internal_ade66ef9b29b5844e66a2757fa28f015104463678156003683e877f3605a6e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ade66ef9b29b5844e66a2757fa28f015104463678156003683e877f3605a6e63->leave($__internal_ade66ef9b29b5844e66a2757fa28f015104463678156003683e877f3605a6e63_prof);

        
        $__internal_ddab21a455144a7a5597abbf405b868f17b101af40bf404e6ae29c7febc6582a->leave($__internal_ddab21a455144a7a5597abbf405b868f17b101af40bf404e6ae29c7febc6582a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vitor/Documents/red/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
