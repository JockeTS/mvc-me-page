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

/* game/doc.html.twig */
class __TwigTemplate_f65923ba4080cf076f59a09e38d4f4b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/doc.html.twig", 1);
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

        echo " Game ";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_start");
        echo "\">Game</a>
    </nav>

    ";
        // line 10
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

        // line 11
        echo "        <h3>Dokumentation</h3>

        <h4>Flödesschema (för en spelare)</h4>

        <img width=\"357\" height=\"522\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/player-flow.png"), "html", null, true);
        echo "\" alt=\"player flowchart\">

        <h4>Pseudokod</h4>

        <p>Ett nytt Game-objekt skapas vid starten av varje nytt spel. Detta objekt skapar i sin tur ett nytt DeckOfCards-objekt och blandar korten. Därefter skapas även två Player-objekt där bank-spelaren skapas sist (och därmed blir den som spelar sist).</p>

        <p>Därefter visas huvudvyn (main) och spelaren ställs inför valet att antingen dra ett kort eller stanna. Drar man ett kort så går spelet till \"add\"-rutten vilken bara hämtar Game-objectet från sessionen och lägger till ett kort till den aktiva spelaren. Därefter sparas Game i session och redirect:ar till main-vyn.</p>

        <p>Om man istället väljer att stanna så går spelet till \"stop\"-rutten vilken gör samma som ovan men istället för att lägga till ett kort så ändras den aktiva spelaren till nästa i turordningen.</p>

        <p>Om man kommit till den sista spelaren så innebär det att det är bankens tur. Då körs metoden playBank vilken drar kort tills den lägsta poängen är 17 eller mer. Därefter sätts flaggan gameOver till true varpå spelet räknar ut vem som vann och ersätter knapparna med en restart-knapp.</p>

        <h4>Klassbeskrivning</h4>

        <p>GameController: en egen controller för kortspelet tjugoett för att hantera spelets olika rutter och förhindra att övriga controllers blir alltför röriga.</p>

        <p>Game: den centrala klassen för spelet. Håller koll på kortleken, spelarna och vems tur det är samt om spelet är slut eller inte. Innehåller även en metod för att låta banken spelar när det är dennes tur.</p>

        <p>Player: en instans av spelarklassen skapas för varje deltagare och den håller koll på spelarens namn och vilka kort denna har dragit. Innehåller även ett antal metoder för att beräkna de olika poäng som kan uppnås utifrån vilka kort man dragit (pga att ess kan räknas som 1 eller 14).</p>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 15,  117 => 11,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Game {% endblock %}

{% block body %}
    <nav class=\"card-nav\">
        <a href=\"{{ path('game_start') }}\">Game</a>
    </nav>

    {% block main %}
        <h3>Dokumentation</h3>

        <h4>Flödesschema (för en spelare)</h4>

        <img width=\"357\" height=\"522\" src=\"{{ asset('img/player-flow.png') }}\" alt=\"player flowchart\">

        <h4>Pseudokod</h4>

        <p>Ett nytt Game-objekt skapas vid starten av varje nytt spel. Detta objekt skapar i sin tur ett nytt DeckOfCards-objekt och blandar korten. Därefter skapas även två Player-objekt där bank-spelaren skapas sist (och därmed blir den som spelar sist).</p>

        <p>Därefter visas huvudvyn (main) och spelaren ställs inför valet att antingen dra ett kort eller stanna. Drar man ett kort så går spelet till \"add\"-rutten vilken bara hämtar Game-objectet från sessionen och lägger till ett kort till den aktiva spelaren. Därefter sparas Game i session och redirect:ar till main-vyn.</p>

        <p>Om man istället väljer att stanna så går spelet till \"stop\"-rutten vilken gör samma som ovan men istället för att lägga till ett kort så ändras den aktiva spelaren till nästa i turordningen.</p>

        <p>Om man kommit till den sista spelaren så innebär det att det är bankens tur. Då körs metoden playBank vilken drar kort tills den lägsta poängen är 17 eller mer. Därefter sätts flaggan gameOver till true varpå spelet räknar ut vem som vann och ersätter knapparna med en restart-knapp.</p>

        <h4>Klassbeskrivning</h4>

        <p>GameController: en egen controller för kortspelet tjugoett för att hantera spelets olika rutter och förhindra att övriga controllers blir alltför röriga.</p>

        <p>Game: den centrala klassen för spelet. Håller koll på kortleken, spelarna och vems tur det är samt om spelet är slut eller inte. Innehåller även en metod för att låta banken spelar när det är dennes tur.</p>

        <p>Player: en instans av spelarklassen skapas för varje deltagare och den håller koll på spelarens namn och vilka kort denna har dragit. Innehåller även ett antal metoder för att beräkna de olika poäng som kan uppnås utifrån vilka kort man dragit (pga att ess kan räknas som 1 eller 14).</p>
    {% endblock %}
{% endblock %}", "game/doc.html.twig", "/Users/jockesjolin/dbwebb-kurser/mvc/me/report/templates/game/doc.html.twig");
    }
}
