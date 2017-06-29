<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_98061a3f3ab82bad7e351c264c59cb9fdd2203240d8462558b027b67dfbb2b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98061a3f3ab82bad7e351c264c59cb9fdd2203240d8462558b027b67dfbb2b48->enter($__internal_98061a3f3ab82bad7e351c264c59cb9fdd2203240d8462558b027b67dfbb2b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d724b803d30ae63aaac3f5c325925ab8dfe486c0e3841dfa73ab5f1fb76c3a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d724b803d30ae63aaac3f5c325925ab8dfe486c0e3841dfa73ab5f1fb76c3a62->enter($__internal_d724b803d30ae63aaac3f5c325925ab8dfe486c0e3841dfa73ab5f1fb76c3a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98061a3f3ab82bad7e351c264c59cb9fdd2203240d8462558b027b67dfbb2b48->leave($__internal_98061a3f3ab82bad7e351c264c59cb9fdd2203240d8462558b027b67dfbb2b48_prof);

        
        $__internal_d724b803d30ae63aaac3f5c325925ab8dfe486c0e3841dfa73ab5f1fb76c3a62->leave($__internal_d724b803d30ae63aaac3f5c325925ab8dfe486c0e3841dfa73ab5f1fb76c3a62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbf9c2c4f4cff95979a9e75748650a337dbba709f2fbb58c0b4f0ee48130b16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf9c2c4f4cff95979a9e75748650a337dbba709f2fbb58c0b4f0ee48130b16a->enter($__internal_fbf9c2c4f4cff95979a9e75748650a337dbba709f2fbb58c0b4f0ee48130b16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6c95c4c287bfc205616ed0c56d6d210a940e354247fc15f9dc1477f21577e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c95c4c287bfc205616ed0c56d6d210a940e354247fc15f9dc1477f21577e76->enter($__internal_c6c95c4c287bfc205616ed0c56d6d210a940e354247fc15f9dc1477f21577e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c6c95c4c287bfc205616ed0c56d6d210a940e354247fc15f9dc1477f21577e76->leave($__internal_c6c95c4c287bfc205616ed0c56d6d210a940e354247fc15f9dc1477f21577e76_prof);

        
        $__internal_fbf9c2c4f4cff95979a9e75748650a337dbba709f2fbb58c0b4f0ee48130b16a->leave($__internal_fbf9c2c4f4cff95979a9e75748650a337dbba709f2fbb58c0b4f0ee48130b16a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_692ab39cdb71bc517fe4b125808da39e5b341e655ec4b9e694292e6916eead13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692ab39cdb71bc517fe4b125808da39e5b341e655ec4b9e694292e6916eead13->enter($__internal_692ab39cdb71bc517fe4b125808da39e5b341e655ec4b9e694292e6916eead13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1d5df293fa926b3d86d2083b7aacf961b2ab51ef792bdde0c7d1945d799dd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d5df293fa926b3d86d2083b7aacf961b2ab51ef792bdde0c7d1945d799dd34->enter($__internal_f1d5df293fa926b3d86d2083b7aacf961b2ab51ef792bdde0c7d1945d799dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f1d5df293fa926b3d86d2083b7aacf961b2ab51ef792bdde0c7d1945d799dd34->leave($__internal_f1d5df293fa926b3d86d2083b7aacf961b2ab51ef792bdde0c7d1945d799dd34_prof);

        
        $__internal_692ab39cdb71bc517fe4b125808da39e5b341e655ec4b9e694292e6916eead13->leave($__internal_692ab39cdb71bc517fe4b125808da39e5b341e655ec4b9e694292e6916eead13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66154f79bf9ab2d423759e39278f0bd1265b85144fdb7c3198799a8f5f94698c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66154f79bf9ab2d423759e39278f0bd1265b85144fdb7c3198799a8f5f94698c->enter($__internal_66154f79bf9ab2d423759e39278f0bd1265b85144fdb7c3198799a8f5f94698c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7839e65a6e16924ee03fa1fdc9da07e5612a1c1bf7cf2d764bda1896d54238e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7839e65a6e16924ee03fa1fdc9da07e5612a1c1bf7cf2d764bda1896d54238e->enter($__internal_c7839e65a6e16924ee03fa1fdc9da07e5612a1c1bf7cf2d764bda1896d54238e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c7839e65a6e16924ee03fa1fdc9da07e5612a1c1bf7cf2d764bda1896d54238e->leave($__internal_c7839e65a6e16924ee03fa1fdc9da07e5612a1c1bf7cf2d764bda1896d54238e_prof);

        
        $__internal_66154f79bf9ab2d423759e39278f0bd1265b85144fdb7c3198799a8f5f94698c->leave($__internal_66154f79bf9ab2d423759e39278f0bd1265b85144fdb7c3198799a8f5f94698c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vitor/Documents/red/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
