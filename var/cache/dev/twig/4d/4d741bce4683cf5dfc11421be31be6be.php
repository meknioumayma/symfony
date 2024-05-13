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

/* produit_dashboard/index.html.twig */
class __TwigTemplate_e20c50feb9590670ebc5a80e2b8dd1a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_dashboard/index.html.twig"));

        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Navbar Example</title>
    <!-- Link Bootstrap CSS -->
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Link Font Awesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <style>
        /* Custom CSS for Navbar */
        .navbar {
            background-color: #343a40; /* Dark */
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* White */
            font-size: 18px; /* Increase font size */
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Yellow */
        }

        .navbar-toggler {
            border-color: #fff; /* White */
        }

        .navbar-toggler-icon {
            color: #fff; /* White */
        }

        .navbar-nav .dropdown-menu {
            background-color: #343a40; /* Dark */
        }

        .dropdown-item {
            color: #fff; /* White */
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #ffc107; /* Yellow */
            color: #343a40; /* Dark */
        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-cogs mr-2\"></i> welcome</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-home mr-2\"></i> Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-info-circle mr-2\"></i> About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-tools mr-2\"></i> Services</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-envelope mr-2\"></i> Contact
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Email</a>
                        <a class=\"dropdown-item\" href=\"#\">Phone</a>
                        <a class=\"dropdown-item\" href=\"#\">Social Media</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Link Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "produit_dashboard/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Navbar Example</title>
    <!-- Link Bootstrap CSS -->
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Link Font Awesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
    <style>
        /* Custom CSS for Navbar */
        .navbar {
            background-color: #343a40; /* Dark */
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* White */
            font-size: 18px; /* Increase font size */
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Yellow */
        }

        .navbar-toggler {
            border-color: #fff; /* White */
        }

        .navbar-toggler-icon {
            color: #fff; /* White */
        }

        .navbar-nav .dropdown-menu {
            background-color: #343a40; /* Dark */
        }

        .dropdown-item {
            color: #fff; /* White */
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #ffc107; /* Yellow */
            color: #343a40; /* Dark */
        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-cogs mr-2\"></i> welcome</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-home mr-2\"></i> Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-info-circle mr-2\"></i> About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-tools mr-2\"></i> Services</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-envelope mr-2\"></i> Contact
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Email</a>
                        <a class=\"dropdown-item\" href=\"#\">Phone</a>
                        <a class=\"dropdown-item\" href=\"#\">Social Media</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Link Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
</html>
", "produit_dashboard/index.html.twig", "C:\\xampp2\\htdocs\\ttp5\\templates\\produit_dashboard\\index.html.twig");
    }
}
