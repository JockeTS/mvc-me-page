<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* api/start.html.twig */
class __TwigTemplate_f2a9bde3ff4ba0974545d0aec83365fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/start.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/start.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/start.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " API ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"card-nav\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\">quote</a>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck");
        echo "\">deck</a>
        <form class=\"api-form\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_many");
        echo "\" method=\"POST\">
            <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\" 
                onClick=\"this.form.action='";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_shuffle");
        echo "';\">

            <input type=\"submit\" name=\"draw-one\" value=\"Draw 1\" 
                onClick=\"this.form.action='";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_one");
        echo "';\">

            <span>
                <input type=\"number\" name=\"draw-many\" value=\"3\" >
                <input type=\"submit\" value=\"Draw N\">
            </span>
        </form>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_game");
        echo "\">game</a>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_books");
        echo "\">books</a>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_book", ["isbn" => "9780261103207"]);
        echo "\">book</a>
    </nav>

    ";
        // line 26
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 27
        echo "        <p>Följande API routes finns tillgängliga:</p>

        <ul>
            <li>'quote': väljer slumpmässigt ett av tre citat. Returnerar detta i JSON-format tillsammans med
            dagens datum och senast aktuella tidsstämpel.</li>

            <li>'deck': sorterar kortleken och returnerar den i JSON-format.</li>

            <li>'deck/shuffle': blandar kortleken och returnerar den i JSON-format.</li>

            <li>'deck/draw': drar 1 kort som returneras i JSON-format
            tillsammans med antalet i leken kvarvarande kort.</li>

            <li>'deck/draw/number': drar N kort som returneras i JSON-format
            tillsammans med antalet i leken kvarvarande kort.</li>
        </ul>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api/start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 27,  135 => 26,  129 => 23,  125 => 22,  121 => 21,  111 => 14,  105 => 11,  100 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} API {% endblock %}

{% block body %}
    <nav class=\"card-nav\">
        <a href=\"{{ path('quote') }}\">quote</a>
        <a href=\"{{ path('api_deck') }}\">deck</a>
        <form class=\"api-form\" action=\"{{ path('api_deck_draw_many') }}\" method=\"POST\">
            <input type=\"submit\" name=\"shuffle\" value=\"Shuffle\" 
                onClick=\"this.form.action='{{ path('api_deck_shuffle') }}';\">

            <input type=\"submit\" name=\"draw-one\" value=\"Draw 1\" 
                onClick=\"this.form.action='{{ path('api_deck_draw_one') }}';\">

            <span>
                <input type=\"number\" name=\"draw-many\" value=\"3\" >
                <input type=\"submit\" value=\"Draw N\">
            </span>
        </form>
        <a href=\"{{ path('api_game') }}\">game</a>
        <a href=\"{{ path('api_books') }}\">books</a>
        <a href=\"{{ path('api_book', {isbn: '9780261103207'}) }}\">book</a>
    </nav>

    {% block main %}
        <p>Följande API routes finns tillgängliga:</p>

        <ul>
            <li>'quote': väljer slumpmässigt ett av tre citat. Returnerar detta i JSON-format tillsammans med
            dagens datum och senast aktuella tidsstämpel.</li>

            <li>'deck': sorterar kortleken och returnerar den i JSON-format.</li>

            <li>'deck/shuffle': blandar kortleken och returnerar den i JSON-format.</li>

            <li>'deck/draw': drar 1 kort som returneras i JSON-format
            tillsammans med antalet i leken kvarvarande kort.</li>

            <li>'deck/draw/number': drar N kort som returneras i JSON-format
            tillsammans med antalet i leken kvarvarande kort.</li>
        </ul>
    {% endblock %}
{% endblock %}", "api/start.html.twig", "/Users/jockesjolin/dbwebb-kurser/mvc/me/report/templates/api/start.html.twig");
    }
}
