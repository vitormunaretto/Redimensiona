<?php

/* upload/uploader.html.twig */
class __TwigTemplate_75df635343d032ef6cee693c8b47ba29ad86f8756cc7e0cc165b42892ec5190f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d637904432bb74532fbf68ce008c5fa66f67de9cd76cc330607a7ea5cf6f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d637904432bb74532fbf68ce008c5fa66f67de9cd76cc330607a7ea5cf6f4f->enter($__internal_85d637904432bb74532fbf68ce008c5fa66f67de9cd76cc330607a7ea5cf6f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "upload/uploader.html.twig"));

        $__internal_884d234779ebb541958eb7190e5fa1176ad7e59d32563e221896a5ed91dcc5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884d234779ebb541958eb7190e5fa1176ad7e59d32563e221896a5ed91dcc5ba->enter($__internal_884d234779ebb541958eb7190e5fa1176ad7e59d32563e221896a5ed91dcc5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "upload/uploader.html.twig"));

        // line 1
        echo "<html>
<head>
<title> Redimensionar </title>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<body>
<div class=\"jumbotron\">
<h1 align=\"center\"> Pagina Inicial </h1>
</div>

<nav class=\"navbar navbar-default\">
    <ul class=\"nav navbar-nav\">
        <li><a href=\"/\"> Inicio </a></li>
        <li><a href=\"/upload\"> Redimensionar </a></li>
    </ul>
</nav>

<div class=\"\">
<form method=\"post\" enctype=\"multipart/form-data\" action=\"/recebeUpload\">
   Selecione uma imagem: <input name=\"arquivo\" type=\"file\" />
   <br />
   <input type=\"submit\" value=\"Salvar\" />
</form>
</div>
</body>
</html>";
        
        $__internal_85d637904432bb74532fbf68ce008c5fa66f67de9cd76cc330607a7ea5cf6f4f->leave($__internal_85d637904432bb74532fbf68ce008c5fa66f67de9cd76cc330607a7ea5cf6f4f_prof);

        
        $__internal_884d234779ebb541958eb7190e5fa1176ad7e59d32563e221896a5ed91dcc5ba->leave($__internal_884d234779ebb541958eb7190e5fa1176ad7e59d32563e221896a5ed91dcc5ba_prof);

    }

    public function getTemplateName()
    {
        return "upload/uploader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
<title> Redimensionar </title>
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</head>
<body>
<div class=\"jumbotron\">
<h1 align=\"center\"> Pagina Inicial </h1>
</div>

<nav class=\"navbar navbar-default\">
    <ul class=\"nav navbar-nav\">
        <li><a href=\"/\"> Inicio </a></li>
        <li><a href=\"/upload\"> Redimensionar </a></li>
    </ul>
</nav>

<div class=\"\">
<form method=\"post\" enctype=\"multipart/form-data\" action=\"/recebeUpload\">
   Selecione uma imagem: <input name=\"arquivo\" type=\"file\" />
   <br />
   <input type=\"submit\" value=\"Salvar\" />
</form>
</div>
</body>
</html>", "upload/uploader.html.twig", "/home/vitor/Documents/red/app/Resources/views/upload/uploader.html.twig");
    }
}
