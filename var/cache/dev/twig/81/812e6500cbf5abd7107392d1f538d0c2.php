<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/register.html.twig */
class __TwigTemplate_b0ecef9dbf46230d7490fb0803556b8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <style>
        /* Styles pour le conteneur */
        body {
            background-image: url('https://static1.srcdn.com/wordpress/wp-content/uploads/2023/06/best-elsa-cosplays-frozen-3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styles pour le formulaire */
        form {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8); /* Fond semi-transparent */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Styles pour le titre */
        h1 {
            color: #FF6F61; /* Rouge pastèque */
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Styles pour les champs de formulaire */
        input[type=\"email\"],
        input[type=\"password\"],
        input[type=\"checkbox\"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Styles pour les étiquettes des champs */
        label {
            color: #2A363B; /* Gris foncé */
            font-size: 18px;
        }

        /* Styles pour le bouton */
        .btn {
            background-color: #FF6F61; /* Rouge pastèque */
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Styles pour les erreurs de formulaire */
        .error-message {
            color: #FF6F61; /* Rouge pastèque */
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    ";
        // line 82
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 97
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        yield "    <form>
        <h1>Register</h1>
        <label for=\"inputEmail\">Email</label>
        <input type=\"email\" name=\"email\" id=\"inputEmail\" required>

        <label for=\"inputPassword\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" required>

        <input type=\"checkbox\" id=\"agreeTerms\" name=\"agreeTerms\" required>
        <label for=\"agreeTerms\">I agree to the terms and conditions</label>

        <button type=\"submit\" class=\"btn\">Register</button>
    </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 83,  167 => 82,  147 => 6,  134 => 97,  132 => 82,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Register{% endblock %}</title>
    <style>
        /* Styles pour le conteneur */
        body {
            background-image: url('https://static1.srcdn.com/wordpress/wp-content/uploads/2023/06/best-elsa-cosplays-frozen-3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styles pour le formulaire */
        form {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8); /* Fond semi-transparent */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Styles pour le titre */
        h1 {
            color: #FF6F61; /* Rouge pastèque */
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Styles pour les champs de formulaire */
        input[type=\"email\"],
        input[type=\"password\"],
        input[type=\"checkbox\"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Styles pour les étiquettes des champs */
        label {
            color: #2A363B; /* Gris foncé */
            font-size: 18px;
        }

        /* Styles pour le bouton */
        .btn {
            background-color: #FF6F61; /* Rouge pastèque */
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Styles pour les erreurs de formulaire */
        .error-message {
            color: #FF6F61; /* Rouge pastèque */
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    {% block body %}
    <form>
        <h1>Register</h1>
        <label for=\"inputEmail\">Email</label>
        <input type=\"email\" name=\"email\" id=\"inputEmail\" required>

        <label for=\"inputPassword\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" required>

        <input type=\"checkbox\" id=\"agreeTerms\" name=\"agreeTerms\" required>
        <label for=\"agreeTerms\">I agree to the terms and conditions</label>

        <button type=\"submit\" class=\"btn\">Register</button>
    </form>
    {% endblock %}
</body>
</html>
", "registration/register.html.twig", "C:\\xampp2\\htdocs\\examenmeknioumayma\\templates\\registration\\register.html.twig");
    }
}
