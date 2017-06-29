<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a953538df5db9b3ab5d6503c53b684880b4903ad5ffb3fba40bbc9c03833e9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a953538df5db9b3ab5d6503c53b684880b4903ad5ffb3fba40bbc9c03833e9a8->enter($__internal_a953538df5db9b3ab5d6503c53b684880b4903ad5ffb3fba40bbc9c03833e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_40d4fd2222879efd8d3a3bc1ccb934d719deae8c2422099206d8da073f71e558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d4fd2222879efd8d3a3bc1ccb934d719deae8c2422099206d8da073f71e558->enter($__internal_40d4fd2222879efd8d3a3bc1ccb934d719deae8c2422099206d8da073f71e558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a953538df5db9b3ab5d6503c53b684880b4903ad5ffb3fba40bbc9c03833e9a8->leave($__internal_a953538df5db9b3ab5d6503c53b684880b4903ad5ffb3fba40bbc9c03833e9a8_prof);

        
        $__internal_40d4fd2222879efd8d3a3bc1ccb934d719deae8c2422099206d8da073f71e558->leave($__internal_40d4fd2222879efd8d3a3bc1ccb934d719deae8c2422099206d8da073f71e558_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a2b053ce44158e5eac98468b7d7f9a19d44881061ab2a3b4bbe657496d0bd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2b053ce44158e5eac98468b7d7f9a19d44881061ab2a3b4bbe657496d0bd58->enter($__internal_5a2b053ce44158e5eac98468b7d7f9a19d44881061ab2a3b4bbe657496d0bd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4eb711e4d478eb1e6a10377787eb2283b61076ecee91460be41ded33d3e7190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4eb711e4d478eb1e6a10377787eb2283b61076ecee91460be41ded33d3e7190->enter($__internal_e4eb711e4d478eb1e6a10377787eb2283b61076ecee91460be41ded33d3e7190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e4eb711e4d478eb1e6a10377787eb2283b61076ecee91460be41ded33d3e7190->leave($__internal_e4eb711e4d478eb1e6a10377787eb2283b61076ecee91460be41ded33d3e7190_prof);

        
        $__internal_5a2b053ce44158e5eac98468b7d7f9a19d44881061ab2a3b4bbe657496d0bd58->leave($__internal_5a2b053ce44158e5eac98468b7d7f9a19d44881061ab2a3b4bbe657496d0bd58_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_54953b407fd5bee8dcceccb4c127ad52a1f987104712e3905cab89f8f825ce32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54953b407fd5bee8dcceccb4c127ad52a1f987104712e3905cab89f8f825ce32->enter($__internal_54953b407fd5bee8dcceccb4c127ad52a1f987104712e3905cab89f8f825ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82885af2c448f0a704a4f6b314c7ce30ceaaa05387e9ad945912dfdbdfbbebac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82885af2c448f0a704a4f6b314c7ce30ceaaa05387e9ad945912dfdbdfbbebac->enter($__internal_82885af2c448f0a704a4f6b314c7ce30ceaaa05387e9ad945912dfdbdfbbebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82885af2c448f0a704a4f6b314c7ce30ceaaa05387e9ad945912dfdbdfbbebac->leave($__internal_82885af2c448f0a704a4f6b314c7ce30ceaaa05387e9ad945912dfdbdfbbebac_prof);

        
        $__internal_54953b407fd5bee8dcceccb4c127ad52a1f987104712e3905cab89f8f825ce32->leave($__internal_54953b407fd5bee8dcceccb4c127ad52a1f987104712e3905cab89f8f825ce32_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_73b5f90013697ea548245ac28a494f830528f7ce811cb0b9b7d08fbf120f6968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b5f90013697ea548245ac28a494f830528f7ce811cb0b9b7d08fbf120f6968->enter($__internal_73b5f90013697ea548245ac28a494f830528f7ce811cb0b9b7d08fbf120f6968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6718f6342d396baac19a232cd386a2543c0f31bcf4153b8d9de486291c36bc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6718f6342d396baac19a232cd386a2543c0f31bcf4153b8d9de486291c36bc6c->enter($__internal_6718f6342d396baac19a232cd386a2543c0f31bcf4153b8d9de486291c36bc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6718f6342d396baac19a232cd386a2543c0f31bcf4153b8d9de486291c36bc6c->leave($__internal_6718f6342d396baac19a232cd386a2543c0f31bcf4153b8d9de486291c36bc6c_prof);

        
        $__internal_73b5f90013697ea548245ac28a494f830528f7ce811cb0b9b7d08fbf120f6968->leave($__internal_73b5f90013697ea548245ac28a494f830528f7ce811cb0b9b7d08fbf120f6968_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vitor/Documents/red/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
