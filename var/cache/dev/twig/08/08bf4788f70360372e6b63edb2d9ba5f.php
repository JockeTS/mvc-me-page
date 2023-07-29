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

/* metrics.html.twig */
class __TwigTemplate_0fec7a81ab1b55065f3628b85c313439 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metrics.html.twig", 1);
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

        echo " Metrics ";
        
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
        echo "    ";
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

        // line 7
        echo "        <h2>Metrics-analys</h2>

        <h3>Introduktion</h3>

        <p>Nedan följer ett antal regler och mätvärden som används för att säkerställa kodkvaliteten i ett projekt.</p>

        <ul>
            <li>
                <h4>Code Size (Kodstorlek)</h4>
                
                <p>Här avses den rent fysiska storleken och omfattningen av kodbasen. Det finns ett antal olika sätt att beräkna denna. Det första är att rakt av räkna antalet kodrader så som de är skrivna i källkoden. Det innebär att varje radbrytning gör att storleken ökar med 1.</p>

                <p>Det gör att detta kanske inte är det mest relevanta mättalet eftersom radbrytningar ofta görs för att öka läsbarheten av koden. Man kan då istället beräkna antalet logiska kodrader, vilket jag antar i PHPs fall innebär antalet statements som avslutas med semikolon samt kodblock inneslutna av måsvingar såsom loopar och liknande.</p>

                <p>Man kan också beräkna antalet kommentarer vilket kanske kan anses irrelevant. Dock så kan det generellt antas att ju fler kommentarer det finns desto mer komplicerad är koden. Detta är något som kan påverka vissa mättal negativt.</p>
            </li>

            <li>
                <h4>Code Coverage (Kodtäckning)</h4>
                <p>Den andel av kodbasen som täcks av enhetstester. Anges i procent och man bör eftersträva en så hög siffra som möjligt. Dock bör man inte stirra sig blind på denna siffra då det bara säger hur många rader kod som har gåtts igenom under testerna och inte hur bra testerna i sig är. Själv hade jag en kodtäckning om ca 35%.</p>
            </li>

            <li>
                <h4>Cyclomatic Complexity (Kodkomplexitet)</h4>
                
                <p>Här mäts de olika klasserna utefter hur många beslutspunkter dess olika metoder innehåller. Varje beslutspunkt ökar poängen med 1. Beslutspunkter definieras som det antal valmöjligheter som kan inträffa under exekvering.</p>
                
                <p>Om exempelvis en if-sats har 3 möjliga fall som kan inträffa så ökar kodkomplexiteten med 3. Ju större kodkomplexitet desto fler enhetstester krävs för att testa en klass/metod och det kan också göra koden svårare att underhålla. I min app så är det som för många andra mättal Game-klassen som kniper rekordet med 17 olika beslutspunkter.</p>
            </li>

            <li>
                <h4>Cohesion (Sammanhang)</h4>

                <p>Cohesion är ett sätt att mäta hur pass väl avgränsade olika modulers ansvarsområden är i ett projekt. En lägre poäng tilldelas om en klass har tydligt definierade uppgifter och där de olika metoderna kan sägas höra ihop i ett sammanhang.</p>

                <p>Jag antar att de olika Controller-klasserna i projektet kan anses ha hög cohesion då metoderna servar olika routes men där routerna ändå är relaterade till varandra på ett tydligt sätt.</p>

                <p>I mitt fall tycks PhpMetrics anse att klassen ApiController har låg cohesion (LCOM 8). Det kan jag till viss del förstå eftersom den hanterar alla API-routes och således hanterar många olika klasser relaterat till kortspelet, Doctrine-databasen samt diverse olika metoder.</p>
                
                <p>Dock så anser jag det försvarbart i det här fallet då jag gärna har alla API-metoder samlade på ett ställe. Ett alternativ hade kanske varit att istället lägga dessa metoder direkt i \"föräldra-klasserna\".</p> 
            </li>

            <li>
                <h4>Coupling (Beroende)</h4>
                
                <p>Coupling syftar till graden av beroende mellan olika moduler i ett projekt. Varje klass tilldelas en poäng som beror på hur många andra klasser den är beroende av. Detta kallas efferent coupling och varje beroende ökar poängen med 1. Man eftersträvar alltså en så låg poäng som möjligt.</p>

                <p>Man kan även mäta afferent coupling som räknar hur många klasser som är beroende av klassen i fråga. Det finns även ett stabilitetsindex från 0 till 1 där 0 innebär en stabil klass och 1 att klassen är instabil.</p> 
                
                <p>I min egen kod så är tydligen Game-klassen den minst stabila med ett index på 0.67, tätt följt av BookRepository på 0.6. Det är kanske inte så konstigt med tanke på att Game ansvarar för hela kortspelslogiken vilket naturligt innefattar hantering av de klasser som ingår i spelet.</p>

                <p>BookRepository i sin tur är kopplingen mellan entity-klassen Book och Doctrine-ramverket vilket också gör det oundvikligt att den är beroende av många klasser.</p>
            </li>

            <li>
                <h4>CRAP Score</h4>

                <p>Behandlar förhållandet mellan kodstorlek, kodkomplexitet och enhetstestning för klasser och metoder. En klass vars metoder har kombinationen hög komplexitet och låg andel kodtäckning för enhetstester kommer att resultera i ett högt CRAP-score.</p>
                
                <p>På så vis kan det sägas vara en uppskattning av den mängd arbete som måste utföras för att en klass inte längre ska befinna sig i riskzonen för brusten funktionalitet. En CRAP-score över 30 anses vara CRAPPY och något som bör åtgärdas snarast.</p>
                
                <p>Jag \"lyckades\" enligt phpunit få en CRAP-score om otroliga 156 poäng för LibraryController men kan inte riktigt klura ut varför. Den täcks visserligen inte av några enhetstester men är enligt PhpMetrics inte mer komplex än andra, liknande klasser utan kodtäckning.</p>

            </li>
        </ul>

        <h3>PhpMetrics</h3>

        <img width=\"750\" height=\"406\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/violations.png"), "html", null, true);
        echo "\" alt=\"violations report\">

        <p>Det första jag noterade var 3 stycken violations. Tydligen anser den att en av mina klasser (ApiController) är en \"god class\" som vet för mycket för sitt eget bästa. Detta då klassen har många publika metoder, låg cohesion samt använder många externa klasser. För att lösa denna violation vore den uppenbara lösningen att dela upp metoderna i olika moduler men som tidigare förklarat är jag ganska bekväm med nuvarande implementation.</p>

        <p>Det är även 2 moduler som bryter mot \"Stable Abstractions Principle\". Lite oklart vad detta betyder men efter lite research så tolkar jag det som att klasser som ligger till grund för ett system ska vara abstrakta och stabila dvs inte kunna ändras så mycket medan klasser som ofta instansieras till objekt ska vara konkreta och instabila dvs kunna erbjuda flera variationer för implementering. Jag vet dock inte varför PhpMetrics anser att modulerna Card och Entity bryter mot dessa regler.</p>

        <img width=\"750\" height=\"315\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/metrics.png"), "html", null, true);
        echo "\" alt=\"metrics report\">

        <p>Mina klasser har en genomsnittlig komplexitet på 3.71 vilket jag får anta kan ses som godkänt. Game och Player-klasserna har dock en komplexitet på 17 respektive 11 så där kan det finnas utrymme för förbättringar.</p>

        <h3>Scrutinizer</h3>

        <div class=\"badge-container\">
            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/quality-score.png?b=main\" alt=\"Scrutinizer Code Quality\">
            </a>

            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/inspections/91fded6f-92b0-48b1-a1ff-1ea47ecb6c25/code-structure/test-coverage\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/coverage.png?b=main\" alt=\"Code Coverage\">
            </a>

            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/build-status/main\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/build.png?b=main\" alt=\"Build Status\">
            </a>
        </div>

        <p>Scrutinizer gav min kod det generösa betyget 10 efter sin analys, vilket jag antar inte är någon större bedrift med en så liten kodbas. Men alltid roligt med lite positiv feedback. Med det sagt så hittar Scrutinizer även ett antal issues. 5 stycken närmare bestämt, där 1 är Best Practice, 1 är oanvänd kod och 3 är buggar.</p>

        <p>2 av filerna är tillhör dock Symfony-ramverket samt PhpCsFixer vilket inte är något jag vågar mig på att åtgärda.
        Resterande 2 filer består av LibraryController där en metod tar emot en parameter som inte används samt BookRepository.</p>
        
        <p>I den senare är det min metod findOneByIsbn som Scrutinizer påstår kan returnera en integer vilket inte är definierat som en return-type. Jag kunde dock inte hitta något om detta i dokumentationen där det står att metoden antingen returnerar en instans av Entity-objektet om fältet matchar alternativt null om inget hittas.</p>

        <p>Scrutinizer verkar generellt beräkna komplexiteten något högre än PhpMetrics varför Game får en poäng om 22 och Player 16.</p>

        <h3>Förbättringar</h3>

        <p>Jag tänkte börja med att försöka åtgärda de ovan nämnda issues som Scrutinizer hittade i mina egen-skrivna klasser LibraryController samt BookRepository.</p>

        <p>Båda felen var relativt lätta att åtgära, bara att ta bort en parameter i LibraryController och lägga till en return type i BookRepository. Därefter körde jag en ny inspektion i Scrutinizer varpå jag möttes av den glada nyheten att det nu var 2 issues mindre i kodbasen.</p>

        <p>Därefter vill jag lägga ytterligare fokus på LibraryController då den har en komplexitet på 12 enligt Scrutinizer och en CRAP-score på 156 enligt PHPUnit. Jag tänker att jag inte kan ändra så mycket i koden i sig men att det däremot vore bra att lägga till enhetstester då den inte har någon kodtäckning alls i nuläget.</p>

        <p>De enhetstester jag la till för LibraryController var av det enklare slaget. 4 GET-vyer testas, först att svaret från servern är korrekt och sedan att de förväntade text-elementen finns med på de testade sidorna. Trots att testerna är väldigt simpla och kodtäckningen bara 33% för LibraryController så minskade CRAP-score:n till 54.67 enligt PHPUnit.</p>

        <h3>Diskussion</h3>

        <p>Jag tror att verktyg likt de vi använt i kursen kan vara ett bra sätt att förbättra sin kodkvalitet. Även om man ofta har en bra känsla för den kod man skrivit själv (så länge det var nyligen) så visar mätvärden svart på vitt var det kan finnas brister som behöver åtgärdas.</p> 

        <p>Det kan nog även vara väldigt hjälpsamt vid större projekt där det är omöjligt att själv ha koll på hela kodbasen och kan då ge en fingervisning om var teamet bör fokusera sina ansträngningar.</p> 

        <p>Det finns väl en potentiell nackdel i att man kanske fokuserar på mätvärdena lite för mycket i vissa fall och kanske lägger för mycket tid på att förbättra dessa även när det inte riktigt behövs. Det kan ju bli ett sätt att slippa ta itu med mer fundamentala problem i kodbasen.</p> 

        <p>När det gäller andra sätt att jobba mot clean code som inte involverar mätvärden så kan jag väl främst tänka mig att det gäller att använda sunt förnuft. Att försöka skriva koden på ett sätt så det blir lätt både för en själv i framtiden och andra att snabbt kunna förstå vad som händer och kunna felsöka.</p>
        
        <p>Det gäller då att kommentera koden på ett effektivt sätt men utan att överdriva. Även att med kodkomplexitet i bakhuvudet försöka begränsa antalet beslutssteg och liknande. Sedan bör man väl även se till att ha bra rutiner för versionshantering så det blir tydligt vad som har lagts till i varje ny version.</p> 
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 81,  179 => 75,  109 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Metrics {% endblock %}

{% block body %}
    {% block main %}
        <h2>Metrics-analys</h2>

        <h3>Introduktion</h3>

        <p>Nedan följer ett antal regler och mätvärden som används för att säkerställa kodkvaliteten i ett projekt.</p>

        <ul>
            <li>
                <h4>Code Size (Kodstorlek)</h4>
                
                <p>Här avses den rent fysiska storleken och omfattningen av kodbasen. Det finns ett antal olika sätt att beräkna denna. Det första är att rakt av räkna antalet kodrader så som de är skrivna i källkoden. Det innebär att varje radbrytning gör att storleken ökar med 1.</p>

                <p>Det gör att detta kanske inte är det mest relevanta mättalet eftersom radbrytningar ofta görs för att öka läsbarheten av koden. Man kan då istället beräkna antalet logiska kodrader, vilket jag antar i PHPs fall innebär antalet statements som avslutas med semikolon samt kodblock inneslutna av måsvingar såsom loopar och liknande.</p>

                <p>Man kan också beräkna antalet kommentarer vilket kanske kan anses irrelevant. Dock så kan det generellt antas att ju fler kommentarer det finns desto mer komplicerad är koden. Detta är något som kan påverka vissa mättal negativt.</p>
            </li>

            <li>
                <h4>Code Coverage (Kodtäckning)</h4>
                <p>Den andel av kodbasen som täcks av enhetstester. Anges i procent och man bör eftersträva en så hög siffra som möjligt. Dock bör man inte stirra sig blind på denna siffra då det bara säger hur många rader kod som har gåtts igenom under testerna och inte hur bra testerna i sig är. Själv hade jag en kodtäckning om ca 35%.</p>
            </li>

            <li>
                <h4>Cyclomatic Complexity (Kodkomplexitet)</h4>
                
                <p>Här mäts de olika klasserna utefter hur många beslutspunkter dess olika metoder innehåller. Varje beslutspunkt ökar poängen med 1. Beslutspunkter definieras som det antal valmöjligheter som kan inträffa under exekvering.</p>
                
                <p>Om exempelvis en if-sats har 3 möjliga fall som kan inträffa så ökar kodkomplexiteten med 3. Ju större kodkomplexitet desto fler enhetstester krävs för att testa en klass/metod och det kan också göra koden svårare att underhålla. I min app så är det som för många andra mättal Game-klassen som kniper rekordet med 17 olika beslutspunkter.</p>
            </li>

            <li>
                <h4>Cohesion (Sammanhang)</h4>

                <p>Cohesion är ett sätt att mäta hur pass väl avgränsade olika modulers ansvarsområden är i ett projekt. En lägre poäng tilldelas om en klass har tydligt definierade uppgifter och där de olika metoderna kan sägas höra ihop i ett sammanhang.</p>

                <p>Jag antar att de olika Controller-klasserna i projektet kan anses ha hög cohesion då metoderna servar olika routes men där routerna ändå är relaterade till varandra på ett tydligt sätt.</p>

                <p>I mitt fall tycks PhpMetrics anse att klassen ApiController har låg cohesion (LCOM 8). Det kan jag till viss del förstå eftersom den hanterar alla API-routes och således hanterar många olika klasser relaterat till kortspelet, Doctrine-databasen samt diverse olika metoder.</p>
                
                <p>Dock så anser jag det försvarbart i det här fallet då jag gärna har alla API-metoder samlade på ett ställe. Ett alternativ hade kanske varit att istället lägga dessa metoder direkt i \"föräldra-klasserna\".</p> 
            </li>

            <li>
                <h4>Coupling (Beroende)</h4>
                
                <p>Coupling syftar till graden av beroende mellan olika moduler i ett projekt. Varje klass tilldelas en poäng som beror på hur många andra klasser den är beroende av. Detta kallas efferent coupling och varje beroende ökar poängen med 1. Man eftersträvar alltså en så låg poäng som möjligt.</p>

                <p>Man kan även mäta afferent coupling som räknar hur många klasser som är beroende av klassen i fråga. Det finns även ett stabilitetsindex från 0 till 1 där 0 innebär en stabil klass och 1 att klassen är instabil.</p> 
                
                <p>I min egen kod så är tydligen Game-klassen den minst stabila med ett index på 0.67, tätt följt av BookRepository på 0.6. Det är kanske inte så konstigt med tanke på att Game ansvarar för hela kortspelslogiken vilket naturligt innefattar hantering av de klasser som ingår i spelet.</p>

                <p>BookRepository i sin tur är kopplingen mellan entity-klassen Book och Doctrine-ramverket vilket också gör det oundvikligt att den är beroende av många klasser.</p>
            </li>

            <li>
                <h4>CRAP Score</h4>

                <p>Behandlar förhållandet mellan kodstorlek, kodkomplexitet och enhetstestning för klasser och metoder. En klass vars metoder har kombinationen hög komplexitet och låg andel kodtäckning för enhetstester kommer att resultera i ett högt CRAP-score.</p>
                
                <p>På så vis kan det sägas vara en uppskattning av den mängd arbete som måste utföras för att en klass inte längre ska befinna sig i riskzonen för brusten funktionalitet. En CRAP-score över 30 anses vara CRAPPY och något som bör åtgärdas snarast.</p>
                
                <p>Jag \"lyckades\" enligt phpunit få en CRAP-score om otroliga 156 poäng för LibraryController men kan inte riktigt klura ut varför. Den täcks visserligen inte av några enhetstester men är enligt PhpMetrics inte mer komplex än andra, liknande klasser utan kodtäckning.</p>

            </li>
        </ul>

        <h3>PhpMetrics</h3>

        <img width=\"750\" height=\"406\" src=\"{{ asset('img/violations.png') }}\" alt=\"violations report\">

        <p>Det första jag noterade var 3 stycken violations. Tydligen anser den att en av mina klasser (ApiController) är en \"god class\" som vet för mycket för sitt eget bästa. Detta då klassen har många publika metoder, låg cohesion samt använder många externa klasser. För att lösa denna violation vore den uppenbara lösningen att dela upp metoderna i olika moduler men som tidigare förklarat är jag ganska bekväm med nuvarande implementation.</p>

        <p>Det är även 2 moduler som bryter mot \"Stable Abstractions Principle\". Lite oklart vad detta betyder men efter lite research så tolkar jag det som att klasser som ligger till grund för ett system ska vara abstrakta och stabila dvs inte kunna ändras så mycket medan klasser som ofta instansieras till objekt ska vara konkreta och instabila dvs kunna erbjuda flera variationer för implementering. Jag vet dock inte varför PhpMetrics anser att modulerna Card och Entity bryter mot dessa regler.</p>

        <img width=\"750\" height=\"315\" src=\"{{ asset('img/metrics.png') }}\" alt=\"metrics report\">

        <p>Mina klasser har en genomsnittlig komplexitet på 3.71 vilket jag får anta kan ses som godkänt. Game och Player-klasserna har dock en komplexitet på 17 respektive 11 så där kan det finnas utrymme för förbättringar.</p>

        <h3>Scrutinizer</h3>

        <div class=\"badge-container\">
            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/quality-score.png?b=main\" alt=\"Scrutinizer Code Quality\">
            </a>

            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/inspections/91fded6f-92b0-48b1-a1ff-1ea47ecb6c25/code-structure/test-coverage\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/coverage.png?b=main\" alt=\"Code Coverage\">
            </a>

            <a href=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/build-status/main\" target=\"_blank\">
                <img src=\"https://scrutinizer-ci.com/g/JockeTS/mvc-me-page/badges/build.png?b=main\" alt=\"Build Status\">
            </a>
        </div>

        <p>Scrutinizer gav min kod det generösa betyget 10 efter sin analys, vilket jag antar inte är någon större bedrift med en så liten kodbas. Men alltid roligt med lite positiv feedback. Med det sagt så hittar Scrutinizer även ett antal issues. 5 stycken närmare bestämt, där 1 är Best Practice, 1 är oanvänd kod och 3 är buggar.</p>

        <p>2 av filerna är tillhör dock Symfony-ramverket samt PhpCsFixer vilket inte är något jag vågar mig på att åtgärda.
        Resterande 2 filer består av LibraryController där en metod tar emot en parameter som inte används samt BookRepository.</p>
        
        <p>I den senare är det min metod findOneByIsbn som Scrutinizer påstår kan returnera en integer vilket inte är definierat som en return-type. Jag kunde dock inte hitta något om detta i dokumentationen där det står att metoden antingen returnerar en instans av Entity-objektet om fältet matchar alternativt null om inget hittas.</p>

        <p>Scrutinizer verkar generellt beräkna komplexiteten något högre än PhpMetrics varför Game får en poäng om 22 och Player 16.</p>

        <h3>Förbättringar</h3>

        <p>Jag tänkte börja med att försöka åtgärda de ovan nämnda issues som Scrutinizer hittade i mina egen-skrivna klasser LibraryController samt BookRepository.</p>

        <p>Båda felen var relativt lätta att åtgära, bara att ta bort en parameter i LibraryController och lägga till en return type i BookRepository. Därefter körde jag en ny inspektion i Scrutinizer varpå jag möttes av den glada nyheten att det nu var 2 issues mindre i kodbasen.</p>

        <p>Därefter vill jag lägga ytterligare fokus på LibraryController då den har en komplexitet på 12 enligt Scrutinizer och en CRAP-score på 156 enligt PHPUnit. Jag tänker att jag inte kan ändra så mycket i koden i sig men att det däremot vore bra att lägga till enhetstester då den inte har någon kodtäckning alls i nuläget.</p>

        <p>De enhetstester jag la till för LibraryController var av det enklare slaget. 4 GET-vyer testas, först att svaret från servern är korrekt och sedan att de förväntade text-elementen finns med på de testade sidorna. Trots att testerna är väldigt simpla och kodtäckningen bara 33% för LibraryController så minskade CRAP-score:n till 54.67 enligt PHPUnit.</p>

        <h3>Diskussion</h3>

        <p>Jag tror att verktyg likt de vi använt i kursen kan vara ett bra sätt att förbättra sin kodkvalitet. Även om man ofta har en bra känsla för den kod man skrivit själv (så länge det var nyligen) så visar mätvärden svart på vitt var det kan finnas brister som behöver åtgärdas.</p> 

        <p>Det kan nog även vara väldigt hjälpsamt vid större projekt där det är omöjligt att själv ha koll på hela kodbasen och kan då ge en fingervisning om var teamet bör fokusera sina ansträngningar.</p> 

        <p>Det finns väl en potentiell nackdel i att man kanske fokuserar på mätvärdena lite för mycket i vissa fall och kanske lägger för mycket tid på att förbättra dessa även när det inte riktigt behövs. Det kan ju bli ett sätt att slippa ta itu med mer fundamentala problem i kodbasen.</p> 

        <p>När det gäller andra sätt att jobba mot clean code som inte involverar mätvärden så kan jag väl främst tänka mig att det gäller att använda sunt förnuft. Att försöka skriva koden på ett sätt så det blir lätt både för en själv i framtiden och andra att snabbt kunna förstå vad som händer och kunna felsöka.</p>
        
        <p>Det gäller då att kommentera koden på ett effektivt sätt men utan att överdriva. Även att med kodkomplexitet i bakhuvudet försöka begränsa antalet beslutssteg och liknande. Sedan bör man väl även se till att ha bra rutiner för versionshantering så det blir tydligt vad som har lagts till i varje ny version.</p> 
    {% endblock %}
{% endblock %}
", "metrics.html.twig", "/Users/jockesjolin/dbwebb-kurser/mvc/me/report/templates/metrics.html.twig");
    }
}
