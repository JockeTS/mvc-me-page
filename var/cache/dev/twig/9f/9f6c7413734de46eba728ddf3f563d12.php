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

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        echo " Report ";
        
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
        echo "    <h1>Redovisning av kursmoment i kursen 'mvc'</h1>

    <ul class=\"report-nav\">
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom010\">kmom10</a></li>
    </ul>

    <section id=\"kmom01\">
        <h2>Kmom01</h2>

        <h3>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.</h3>

        <p>Min senaste erfarenhet av objektorientering kommer från oopython-kursen. Där fick man lära sig generellt om klasser, objekt och arv och hur man går tillväga för att hantera objekt i kodflödet.</p>

        <p>Jag tycker även att modellering av struktur- och flödesdiagram vilket vi sysslade med både i databas och oopython har lett till ett mer objektorienterat tankesätt.</p>

        <p>Jag har även sysslat lite med Java / Android tidigare vilket gjorde att jag hade lite koll innan. Där var såvitt jag minns i princip allting knutet till objekt som interagerade med varandra på olika sätt.</p>

        <h3>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?</h3>

        <p>Det första man behöver veta är hur man skapar en klass i PHP och vilka nyckelord man använder. Sedan hur man definierar attribut för en klass och om man väljer att göra dem publika, skyddade eller privata.</p>

        <p>Man bör också ha koll på användandet av setters och getters då det generellt är så man interagerar med attributen. En genväg här kan ju dock vara att använda en konstruktor vid skapandet av nya objekt.</p>

        <p>För webbplatsen som helhet så kan det också vara bra att känna till hur man sparar och använder objekt med hjälp av sessionsvariabler.</p>

        <p>Jobbar man med större projekt så kan det även rekommenderas att ha koll på namespaces för att undvika att klasser med samma namn kolliderar med varandra.</p>

        <p>Även hur man automatiskt \"registrerar\" klasser med hjälp av autoloader för att minska antalet requires och includes.</p>

        <h3>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?</h3>

        <p>Det var lite rörigt till en början såsom jag alltid tycker det är med nya ramverk. Har inte riktigt fått full koll på hur allt hänger ihop men förhoppningsvis sätter det sig under kursens gång.</p>

        <p>Men jag tycker systemet med routes känns smidigt och man får en bra överblick över webbplatsens innehåll, speciellt när man kan samla flera routes i en fil.</p>

        <p>Gillar även sättet att definiera olika blocks i template-motorn Twig funkar bra och gör det lätt att återanvända mallar som man sedan kan skräddarsy när man behöver en ny vy.</p>

        <p>Har lite sämre koll på hur man får ordning på assets och i synnerhet CSS. Hann tyvärr inte få igång något CSS-ramverk och tyckte det var lite osmidigt att \"build:a assets\" varje gång man ville ändra på något.</p>

        <h3>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.</h3>

        <p>Skulle gärna vilja lära mig lite mer om Standard PHP Library då jag gillar att ha koll på vilken funktionalitet som redan finns tillgänglig när det är en specifik uppgift man ska lösa, så slipper man \"återuppfinna hjulet\".</p>

        <p>Tycker också det var mycket intressant med olika datastrukturer i oopython så det vore kul att utforska dessa lite även i PHP. Vill också lära mig mer om namespaces då jag får en känsla av att det kan avhjälpa en hel del huvudvärk i vissa specifika situationer.</p>

        <p>En annan sak som jag inte vet om den direkt relaterar till PHP men i alla fall nämndes i artikeln är katalogstrukturer för webbplatser. Det har jag tyckt varit ett lite knepigt ämne ända sen webtec-kursen och är något jag gärna skulle lära mig mer om.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Jag har lärt mig och fått en del repetition kring PHP i allmänhet och objektorientering i synnerhet. Även blivit introducerad till ramverket Symfony med dess olika tillhörande delar. Också lite \"PHP-filosofi\" tack vare de olika sektionerna i PHP The Right Way.</p>

        <p>Även en del återbekantat mig med tidigare ämnen som Git, CSS, bildhantering m.m som tillhör skapandet av webbplatser men som det tagits en paus med under de två senaste kurserna.</p>
    </section>

    <section id=\"kmom02\">
        <h2>Kmom02</h2>

        <h3>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h3>

        <p>Arv används bland annat för att kunna skapa basklasser som andra klasser kan ärva ifrån. På så sätt kan man skapa olika specialiseringar av en klass utan att behöva skriva om grundkoden varje gång. Detta visades exempel på i både övningen med Pig-spelet och uppgiften där CardGraphics ärvde från Card.</p>

        <p>Komposition för klasser och objekt handlar om \"livscykeln\" för objekt. Om objekt 1 har ett kompositionsförhållande till objekt 2 så innebär det att objekt 1 bara existerar i förhållande till objekt 2.</p>

        <p>Alltså kan objekt 1 inte existera självständigt utan det \"ägs\" till fullo av objekt 2. Detta såg vi också exempel på i uppgiften där Card bara kan existera inuti en DeckOfCards (i alla fall på det sättet jag valde att implementera det).</p>

        <p>Ett interface kan liknas vid ett kontrakt som de klasser som implementerar interface:t måste uppfylla. Det handlar alltså om en samling metoder som måste finnas i de klasser som implementerar interface:t.</p>

        <p>Det måste vara samma metodnamn, parametrar, returtyper m.m men i övrigt är det fritt att utforma metoderna som man vill. På detta sätt kan objekt från olika klasser i vissa sammanhang behandlas på samma sätt så länge de implementerar samma interface.</p>

        <p>Traits är på liknande sätt som interface en samling metoder som kan användas av flera klasser. Skillnaden är att metoderna i en trait redan är definierade och inte behöver definieras i de klasser som använder trait:et.</p>

        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h3>

        <p>Jag gjorde övningen för Pig-spelet och använde sedan en liknande struktur för att implementera uppgiften. Hade en del problem med diverse felmeddelanden från Symfony vilket gjorde att det drog ut på tiden. Jag är ändå rätt nöjd med slutresultatet även om det såklart går att förbättra mycket.</p>

        <p>Jag gjorde inte exakt som i kraven på alla punkter. Bland annat så valde jag att ha det så att kortleken som sparas i session återställs varje gång man besöker landningssidan. Sedan använder man samma kortlek i de övriga rutterna.</p>

        <p>Alltså kan man både sortera, blanda och dra kort i vilken ordning man vill. Jag valde att ge varje Card-objekt ett numeriskt värde för både svit och valör just för att underlätta sorteringen.</p>

        <p>Utseendemässigt så har korten just nu en väldigt basic style med enbart siffra och symbol. Så det är väl nåt som jag gärna skulle förbättra i kommande kmom. Jag lyckades i alla fall få till olika färger för sviterna men jag vet inte om sättet detta implementerades på var det optimala.</p>

        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>

        <p>Just i detta fallet kände jag inte att det hjälpte så mycket eftersom uppgiften var ganska lik övningen vilket gjorde att jag från början hade en ganska bra aning om hur klasserna skulle se ut. Sen tycker jag det kan vara svårt att börja rita flödesdiagram innan man börjar skriva kod och det känns som man får ändra mycket i efterhand.</p>

        <p>Men jag antar att det är en fråga om övning och vad som skiljer en bra utvecklare från en mindre bra - att kunna se hela problemet framför sig och hur man ska lösa det utan att börja med en implementering som kanske är ett slöseri på tid.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Det är återigen en blandning av många olika saker. Har blivit mer bekväm med Symfony som ramverk efter en del frustration med att komma igång. Sedan är det många koncept inom objektorientering och PHP som har antingen fräschats upp från tidigare kurser eller lärts från början.</p>

        <p>Har även försökt förbättra mitt Git-flöde och jobba på en sak i taget för att därefter göra en commit med ett beskrivande meddelande. Gillade även att använda cs-fixer för att dels se vilka avvikelser man gjort från Symfonys kodstandard samt att få det åtgärdat med ett enskilt kommando i terminalen.</p>
    </section>

    <section id=\"kmom03\">
        <h2>Kmom03</h2>

        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>

        <p>Jag måste erkänna att jag fann det ganska svårt att i förväg planera hela applikationen beväpnad med enbart papper och penna. Det hjälpte dock en del att lyssna på föreläsningen om Polya och top-down respektive bottom-up-perspektiven.</p>

        <p>Framförallt om hur man kan kombinera de båda. Så jag tror att det i alla fall för mig personligen är den rätta vägen framåt i fortsättningen. Det är svårt att se allt klart framför sig innan man börjar bygga, även för ganska simpla applikationer.</p>

        <p>Samtidigt så hjälper det mycket att planera även de gånger planeringen inte blir så bra då det blir lättare att veta var man ska börja och man får ett hum om helheten redan från början.</p>

        <p>Det optimala kanske vore att ha både planera och bygga parallellt så man kan växla om man kör fast i det ena. Men jag vet inte om det anses korrekt i utvecklar-världen.</p>

        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h3>

        <p>Jag löste uppgiften genom att ha en klass för själva spel-objektet som innehåller olika metoder för att dra kort, byta spelare, spela åt banken m.m. Dessa metoder aktiveras till största del från de olika rutterna som är definierade för spelet.</p>

        <p>För en mänsklig spelare kommer man till dessa rutter genom att trycka på de olika knapparna medan banken kallar på metoderna direkt inne i Game-objektet. Utöver detta finns det även en klass för spelare som främst innehåller de kort som en spelare har dragit.</p>

        <p>Jag hade först tänkt ha ett attribut för poäng men det komplicerades lite av att ess kan räknas som både 1 och 14. Så det fick bli en metod som beräknar vilka poäng som är möjliga givet vilka kort man har istället. När det gäller hur banken spelar så blev det en ganska enkel implementation.</p>

        <p>Banken drar ett till kort så länge dess lägsta giltiga värde är mindre än sjutton. Här inser jag att det finns en del utrymme för förbättring och jag testade lite olika varianter men det var den som jag ansåg fungerade bäst.</p>

        <p>Tycker även att koden blev lite rörig och kan tänka mig att det skulle kunna vara frustrerande att sätta sig in i koden för en utomstående. Så jag skulle gärna rensa upp lite och även utöka stöd för fler spelare än två.</p>

        <h3>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h3>

        <p>Jag börjar vänja mig mer och mer med att använda ramverk som Symfony nu, efter en del initial frustration. Det hjälper ju en del också att ramverken vi hittills använt i kursen är ganska lika varandra.</p>

        <p>Det är generellt olika rutter som utför något och sedan antingen renderar en vy eller redirectar till en vy. Det som gör det lite mer utmanande är när det ska kombineras med objektorienterad PHP, vars syntax fortfarande gör mig lite förvirrad ibland.</p>

        <p>Men jag kände att det klarnade mer i det här kmomet då man fick träna mycket på att skapa egna klasser och sedan på olika sätt jobba med objekten i koden.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>TIL är som sagt att jag fått en större förståelse och vana för den objektorienterade biten samt Symfony i sig. Har även lärt mig hur man kan tänka och planera kring en applikation (eller problem generellt) så att man inte bara hoppar in i ett projekt och prövar sig fram.</p>

        <p>Det har även varit lärorikt att programmera ett spel då det är ett lite annat sätt att tänka än \"vanliga\" projekt. Man måste ha bra koll på alla steg i spelet och sannolikheten för buggar eller att man missat nåt känns stor.</p>
    </section>

    <section id=\"kmom04\">
        <h2>Kmom04</h2>

        <h3>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h3>

        <p>Jag tyckte det var roligare än förväntat att skriva enhetstester med PHPUnit. Det tog ett tag att sätta sig in i hur man ska tänka för att testa sin kod på ett bra sätt. Jag antar att detta också reflekteras i min kod.</p>

        <p>För klasser som inte gör så mycket så är det väl egentligen inte så mycket att tänka på men när det gäller att testa själva spellogiken så känns det som det blir mer komplicerat.</p>

        <p>Detta beror väl främst på att spelet har olika states vilket kan bli svårt att simulera utan input från användaren (beroende på hur man skrivit sin kod).</p>

        <h3>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h3>

        <p>Jag nådde 100% kodtäckning för klasserna som hanterar enskilda kort och kortleken. Detta berodde nog främst på att de var lätta att testa då de inte innehåller så många if-satser och liknande.</p>

        <p>För klasserna som hanterar spellogiken och spelar-objekten låg motsvarande siffra på ca 95%. Player-klassen var något mer invecklad att testa då jag inte enbart ville testa ett objekt efter skapande men även när spelaren har dragit kort.</p>

        <p>På så vis gick det att testa de olika metoderna som beräknar poäng och även att få en sträng-representation av spelaren med annat än default-värdena.</p>

        <p>Det var på liknande sätt med Game-klassen med skillnaden att det är flera utomstående objekt som ingår. Detta gjorde att man fick tänka till lite inför varje test-case så att man skapar ett game state som kan tänkas motsvara en riktig spelomgång innan man kör testerna.</p>

        <p>Jag gjorde inga tester för BankPlayer eftersom den inte används i koden för tillfället.</p>

        <h3>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?</h3>

        <p>Jag upplevde inte min kod som speciellt testbar eftersom det inte var något jag tagit hänsyn till när koden skrevs. Det känns som att klasserna måste kunna fungera ganska självständigt för att de ska kunna testas på ett smidigt sätt.</p>

        <p>Även om många klasser alltid kommer innehålla objekt av andra klasser så vill man kunna testa en klass utan de klasser som \"står över\" den. Det är i alla fall så jag uppfattade det.</p>

        <p>Exempelvis ville jag kunna testa Player-klassen utan att skapa ett Game-objekt medans man inte kommer undan att skapa Player-objekt om man testar Game-klassen.</p>

        <h3>Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h3>

        <p>Jag behövde inte skriva om så mycket egentligen förutom att lägga till en metod för att lägga till kort till ett spelar-objekt i Player-klassen istället för att det som tidigare gjordes direkt i Game-klassen.</p>

        <h3>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h3>

        <p>Jag tror att så är fallet och att om koden är lätt att testa så innebär det att den är skriven på ett mer genomtänkt sätt och kanske även mer modulär för att underlätta enhetstester. Jag tror att sådan kod är lättare att sätta sig in i för utomstående eller om man varit borta från ett projekt en längre tid.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Det första jag fick bekanta mig med var Xdebug vars installation inte var fullt så enkel på min Mac-maskin. Därefter lästes artikeln om olika filosofier för testning i mjukvarusammanhang.</p>

        <p>Sedan använde jag exemplet och övningen för att komma igång med PHPUnit för att sedan försöka applicera den nya kunskapen på de egna klasserna för kortspelet.</p>

        <p>Fick också lära mig om DocBlock samt hur man autogenererar dokumentation för sin kodbas.</p>
    </section>

    <section id=\"kmom05\">
        <h2>Kmom05</h2>

        <h3>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?</h3>

        <p>Tycker det gick smidigt att jobba igenom övningen och det var inte någon del som jag fastnade på.</p>

        <p>Det var en del inställningar och ändringar som skulle göras men tyckte det var lätt att skapa en databas, entity-klasser och migrations.</p>

        <p>Jag trodde först att man behövde göra en migration varje gång man ändrar nåt i databasen, men efter att ha lagt till metoden som hämtar en bok utifrån dess isbn-nummer så drog jag slutsatsen att det bara är ändringar som berör databasens schema och inte metoder som bara hämtar data.</p>

        <h3>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet?</h3>

        <p>Ja jag försökte att tänka på användargränssnittet vid designandet av library-appen. Det första beslutet jag tog var att låta landningssidan och sidan som visar alla böcker vara densamma. Det kändes som att det förenklade flödet lite.</p>

        <p>Därifrån kan man sedan klicka på den bok som man vill se en detaljvy för. Från denna kan man se bokens bild om en sådan finns samt antingen uppdatera eller radera boken.</p>

        <p>Man kan även lägga till en ny bok från översikts-sidan. Alla vyer som inte är översiktssidan innehåller även en länk till översikts-vyn så att man snabbt ska kunna navigera tillbaka.</p>

        <p>Försökte även styla knapparna så de såg mer tydliga och tilltalande ut än de förvalda.</p>

        <h3>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser?</h3>

        <p>Tycker det gick bra att jobba med ORM. Kanske berodde det på att det passade uppgiften väldigt bra med ett bibliotek där man kan lägga till böcker.</p>

        <p>Den tydligheten gjorde att det blev ganska lätt att jobba objektorienterat även med databasen.</p>

        <p>Jag vet inte om det underlättade så mycket egentligen jämfört med relationsmodellen men jag gillade att använda de autogenererade metoderna i repository- och book-klasserna och tyckte det kändes intuitivt.</p>

        <h3>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?</h3>

        <p>ORM-konceptet kändes som en positiv överraskning och det var intressant att jobba mot databaser på ett annat sätt än relationsmodellen.</p>

        <p>Vore kul att testa det i en lite större uppgift för att verkligen se vad det \"går för\". Tror också det hjälpte mycket att det var så pass smidigt att komma igång med Doctrine.</p>

        <h3>Vilken är din TIL för detta kmom? TIL var främst hur man kommer igång med Doctrine i en app som använder Symfony-ramverket. Även en del om databaser med ett objektorienterat synsätt generellt (ORM).</h3>

        <p>Fick också öva lite på hur man bestämmer ett användargränssnitt utifrån en delvis löst definierad kravlista. Kraven i sig var tydliga men inte exakt vilket struktur man skulle ha på allt vilket gjorde att man fick tänka lite själv.</p>
    </section>

    <section id=\"kmom06\">
        <h2>Kmom06</h2>

        <h3>Hur uppfattade du verktyget phpmetrics och fann du några särskilda bitar mer värdefulla än andra? Var det några särskilda metrics eller bilder du uppskattade?</h3>

        <p>Jag tyckte PhpMetrics generellt var ett bra verktyg men uppfattade ibland användargränssnittet som lite rörigt. Det var väldigt mycket data som presenterades vilket gjorde att det kunde kännas lite överväldigande för en oinsatt. Kändes även ibland som man hittade samma mätvärden på flera olika ställen.</p>

        <p>Tyckte Violations var intressant att ta del av då det visade mer övergripande fel och varningar i de olika klasserna, även om det inte var helt klart hur dessa skulle åtgärdas.</p>

        <p>Därefter var det främst komplexiteten jag tittade på för de olika klasserna och deras metoder. Gillade att det var smidigt att sortera på de olika mätvärdena vilket gjorde att man snabbt kunde se var fokus borde läggas. Coupling-tabben var också behjälplig för att bilda sig en uppfattning om hur de olika klasserna var beroende av varandra.</p>

        <h3>Berätta hur det gick att integrera med Scrutinizer och vilken är din första känsla av verktyget och dess badges? Vilken kodtäckning och kodkvalitet fick du efter första bygget?</h3>

        <p>Tyckte det gick ganska smidigt att integrera mitt repo med Scrutinizer. Vet dock inte om jag gjorde nåt fel då jag var tvungen att manuellt starta en inspektion varje gång jag gjort ändringar. Trodde att det skulle ske automatiskt efter varje git push.</p>

        <p>Hursomhelst så var det smidigt att se vilka issues man behövde fixa för att nå en högre poäng. Det var också bra med färgkodad kodkvalitet så man fick ett hum om hur bra ens kodbas var överlag. Jag fick 10 i betyg av Scrutinizer och en kodtäckning om 33%.</p>

        <p>Dock så fail:ade mitt bygge efter att jag la till enhetstester för LibraryController. Nånting om att man inte ska extenda Monolog\\Logger. Men då det är något internt i Symfony så verkar det inte vara något jag kan göra så mycket åt, förutsatt att jag inte gjorde nåt fel med enhetstesterna.</p>

        <h3>Hur är din egen syn på kodkvalitet, berätta lite om den? Tror du man kan man påvisa kodkvalitet i någon viss mån med badges eller vad tror du?</h3>

        <p>Jag tror att man till stor del kan påvisa kodkvalitet med hjälp av badges, även om det kanske inte är perfekt. Framförallt när det kommer till att uppskatta hur kostsamt det är att gå in i kodbasen för att underhålla eller lägga till features. Så som nämndes i en av föreläsningarna.</p>
        
        <p>Koden kan säkert fungera jättebra i många fall även med låga betyg från Scrutinizer och liknande verktyg. Men just när det kommer till kodens \"användarvänlighet\" och säkerligen även risken för komplexa buggar så tror jag det hjälper mycket att ha bra mätvärden. Särskilt för stora och långtgående projekt.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Detta kmom har mest handlat om olika sätt att analysera befintlig kodbas istället för att lägga till nya features. Även om det kanske inte är det mest spännande alltid så har det känts bra att stanna upp och få en \"reality check\" om hur det ligger till med ens kodkvalitet.</p>
        
        <p>Har lärt mig om vilka mätvärden man bör hålla ett extra öga på vilket blir lättare att komma ihåg tack vare \"de 6C:na\". Har också fått öva på att analysera olika issues, försöka åtgärda dessa och jämföra mätvärdena före och efter.</p>
    </section>

    <section id=\"kmom10\">
        <h2>Kmom10</h2>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Report {% endblock %}

{% block body %}
    <h1>Redovisning av kursmoment i kursen 'mvc'</h1>

    <ul class=\"report-nav\">
        <li><a href=\"#kmom01\">kmom01</a></li>
        <li><a href=\"#kmom02\">kmom02</a></li>
        <li><a href=\"#kmom03\">kmom03</a></li>
        <li><a href=\"#kmom04\">kmom04</a></li>
        <li><a href=\"#kmom05\">kmom05</a></li>
        <li><a href=\"#kmom06\">kmom06</a></li>
        <li><a href=\"#kmom010\">kmom10</a></li>
    </ul>

    <section id=\"kmom01\">
        <h2>Kmom01</h2>

        <h3>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.</h3>

        <p>Min senaste erfarenhet av objektorientering kommer från oopython-kursen. Där fick man lära sig generellt om klasser, objekt och arv och hur man går tillväga för att hantera objekt i kodflödet.</p>

        <p>Jag tycker även att modellering av struktur- och flödesdiagram vilket vi sysslade med både i databas och oopython har lett till ett mer objektorienterat tankesätt.</p>

        <p>Jag har även sysslat lite med Java / Android tidigare vilket gjorde att jag hade lite koll innan. Där var såvitt jag minns i princip allting knutet till objekt som interagerade med varandra på olika sätt.</p>

        <h3>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå för att kunna komma igång och skapa sina första klasser?</h3>

        <p>Det första man behöver veta är hur man skapar en klass i PHP och vilka nyckelord man använder. Sedan hur man definierar attribut för en klass och om man väljer att göra dem publika, skyddade eller privata.</p>

        <p>Man bör också ha koll på användandet av setters och getters då det generellt är så man interagerar med attributen. En genväg här kan ju dock vara att använda en konstruktor vid skapandet av nya objekt.</p>

        <p>För webbplatsen som helhet så kan det också vara bra att känna till hur man sparar och använder objekt med hjälp av sessionsvariabler.</p>

        <p>Jobbar man med större projekt så kan det även rekommenderas att ha koll på namespaces för att undvika att klasser med samma namn kolliderar med varandra.</p>

        <p>Även hur man automatiskt \"registrerar\" klasser med hjälp av autoloader för att minska antalet requires och includes.</p>

        <h3>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur uppfattar du den?</h3>

        <p>Det var lite rörigt till en början såsom jag alltid tycker det är med nya ramverk. Har inte riktigt fått full koll på hur allt hänger ihop men förhoppningsvis sätter det sig under kursens gång.</p>

        <p>Men jag tycker systemet med routes känns smidigt och man får en bra överblick över webbplatsens innehåll, speciellt när man kan samla flera routes i en fil.</p>

        <p>Gillar även sättet att definiera olika blocks i template-motorn Twig funkar bra och gör det lätt att återanvända mallar som man sedan kan skräddarsy när man behöver en ny vy.</p>

        <p>Har lite sämre koll på hur man får ordning på assets och i synnerhet CSS. Hann tyvärr inte få igång något CSS-ramverk och tyckte det var lite osmidigt att \"build:a assets\" varje gång man ville ändra på något.</p>

        <h3>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar av artikeln som du känner mer värdefulla.</h3>

        <p>Skulle gärna vilja lära mig lite mer om Standard PHP Library då jag gillar att ha koll på vilken funktionalitet som redan finns tillgänglig när det är en specifik uppgift man ska lösa, så slipper man \"återuppfinna hjulet\".</p>

        <p>Tycker också det var mycket intressant med olika datastrukturer i oopython så det vore kul att utforska dessa lite även i PHP. Vill också lära mig mer om namespaces då jag får en känsla av att det kan avhjälpa en hel del huvudvärk i vissa specifika situationer.</p>

        <p>En annan sak som jag inte vet om den direkt relaterar till PHP men i alla fall nämndes i artikeln är katalogstrukturer för webbplatser. Det har jag tyckt varit ett lite knepigt ämne ända sen webtec-kursen och är något jag gärna skulle lära mig mer om.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Jag har lärt mig och fått en del repetition kring PHP i allmänhet och objektorientering i synnerhet. Även blivit introducerad till ramverket Symfony med dess olika tillhörande delar. Också lite \"PHP-filosofi\" tack vare de olika sektionerna i PHP The Right Way.</p>

        <p>Även en del återbekantat mig med tidigare ämnen som Git, CSS, bildhantering m.m som tillhör skapandet av webbplatser men som det tagits en paus med under de två senaste kurserna.</p>
    </section>

    <section id=\"kmom02\">
        <h2>Kmom02</h2>

        <h3>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h3>

        <p>Arv används bland annat för att kunna skapa basklasser som andra klasser kan ärva ifrån. På så sätt kan man skapa olika specialiseringar av en klass utan att behöva skriva om grundkoden varje gång. Detta visades exempel på i både övningen med Pig-spelet och uppgiften där CardGraphics ärvde från Card.</p>

        <p>Komposition för klasser och objekt handlar om \"livscykeln\" för objekt. Om objekt 1 har ett kompositionsförhållande till objekt 2 så innebär det att objekt 1 bara existerar i förhållande till objekt 2.</p>

        <p>Alltså kan objekt 1 inte existera självständigt utan det \"ägs\" till fullo av objekt 2. Detta såg vi också exempel på i uppgiften där Card bara kan existera inuti en DeckOfCards (i alla fall på det sättet jag valde att implementera det).</p>

        <p>Ett interface kan liknas vid ett kontrakt som de klasser som implementerar interface:t måste uppfylla. Det handlar alltså om en samling metoder som måste finnas i de klasser som implementerar interface:t.</p>

        <p>Det måste vara samma metodnamn, parametrar, returtyper m.m men i övrigt är det fritt att utforma metoderna som man vill. På detta sätt kan objekt från olika klasser i vissa sammanhang behandlas på samma sätt så länge de implementerar samma interface.</p>

        <p>Traits är på liknande sätt som interface en samling metoder som kan användas av flera klasser. Skillnaden är att metoderna i en trait redan är definierade och inte behöver definieras i de klasser som använder trait:et.</p>

        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h3>

        <p>Jag gjorde övningen för Pig-spelet och använde sedan en liknande struktur för att implementera uppgiften. Hade en del problem med diverse felmeddelanden från Symfony vilket gjorde att det drog ut på tiden. Jag är ändå rätt nöjd med slutresultatet även om det såklart går att förbättra mycket.</p>

        <p>Jag gjorde inte exakt som i kraven på alla punkter. Bland annat så valde jag att ha det så att kortleken som sparas i session återställs varje gång man besöker landningssidan. Sedan använder man samma kortlek i de övriga rutterna.</p>

        <p>Alltså kan man både sortera, blanda och dra kort i vilken ordning man vill. Jag valde att ge varje Card-objekt ett numeriskt värde för både svit och valör just för att underlätta sorteringen.</p>

        <p>Utseendemässigt så har korten just nu en väldigt basic style med enbart siffra och symbol. Så det är väl nåt som jag gärna skulle förbättra i kommande kmom. Jag lyckades i alla fall få till olika färger för sviterna men jag vet inte om sättet detta implementerades på var det optimala.</p>

        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>

        <p>Just i detta fallet kände jag inte att det hjälpte så mycket eftersom uppgiften var ganska lik övningen vilket gjorde att jag från början hade en ganska bra aning om hur klasserna skulle se ut. Sen tycker jag det kan vara svårt att börja rita flödesdiagram innan man börjar skriva kod och det känns som man får ändra mycket i efterhand.</p>

        <p>Men jag antar att det är en fråga om övning och vad som skiljer en bra utvecklare från en mindre bra - att kunna se hela problemet framför sig och hur man ska lösa det utan att börja med en implementering som kanske är ett slöseri på tid.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Det är återigen en blandning av många olika saker. Har blivit mer bekväm med Symfony som ramverk efter en del frustration med att komma igång. Sedan är det många koncept inom objektorientering och PHP som har antingen fräschats upp från tidigare kurser eller lärts från början.</p>

        <p>Har även försökt förbättra mitt Git-flöde och jobba på en sak i taget för att därefter göra en commit med ett beskrivande meddelande. Gillade även att använda cs-fixer för att dels se vilka avvikelser man gjort från Symfonys kodstandard samt att få det åtgärdat med ett enskilt kommando i terminalen.</p>
    </section>

    <section id=\"kmom03\">
        <h2>Kmom03</h2>

        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och pseudokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>

        <p>Jag måste erkänna att jag fann det ganska svårt att i förväg planera hela applikationen beväpnad med enbart papper och penna. Det hjälpte dock en del att lyssna på föreläsningen om Polya och top-down respektive bottom-up-perspektiven.</p>

        <p>Framförallt om hur man kan kombinera de båda. Så jag tror att det i alla fall för mig personligen är den rätta vägen framåt i fortsättningen. Det är svårt att se allt klart framför sig innan man börjar bygga, även för ganska simpla applikationer.</p>

        <p>Samtidigt så hjälper det mycket att planera även de gånger planeringen inte blir så bra då det blir lättare att veta var man ska börja och man får ett hum om helheten redan från början.</p>

        <p>Det optimala kanske vore att ha både planera och bygga parallellt så man kan växla om man kör fast i det ena. Men jag vet inte om det anses korrekt i utvecklar-världen.</p>

        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h3>

        <p>Jag löste uppgiften genom att ha en klass för själva spel-objektet som innehåller olika metoder för att dra kort, byta spelare, spela åt banken m.m. Dessa metoder aktiveras till största del från de olika rutterna som är definierade för spelet.</p>

        <p>För en mänsklig spelare kommer man till dessa rutter genom att trycka på de olika knapparna medan banken kallar på metoderna direkt inne i Game-objektet. Utöver detta finns det även en klass för spelare som främst innehåller de kort som en spelare har dragit.</p>

        <p>Jag hade först tänkt ha ett attribut för poäng men det komplicerades lite av att ess kan räknas som både 1 och 14. Så det fick bli en metod som beräknar vilka poäng som är möjliga givet vilka kort man har istället. När det gäller hur banken spelar så blev det en ganska enkel implementation.</p>

        <p>Banken drar ett till kort så länge dess lägsta giltiga värde är mindre än sjutton. Här inser jag att det finns en del utrymme för förbättring och jag testade lite olika varianter men det var den som jag ansåg fungerade bäst.</p>

        <p>Tycker även att koden blev lite rörig och kan tänka mig att det skulle kunna vara frustrerande att sätta sig in i koden för en utomstående. Så jag skulle gärna rensa upp lite och även utöka stöd för fler spelare än två.</p>

        <h3>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h3>

        <p>Jag börjar vänja mig mer och mer med att använda ramverk som Symfony nu, efter en del initial frustration. Det hjälper ju en del också att ramverken vi hittills använt i kursen är ganska lika varandra.</p>

        <p>Det är generellt olika rutter som utför något och sedan antingen renderar en vy eller redirectar till en vy. Det som gör det lite mer utmanande är när det ska kombineras med objektorienterad PHP, vars syntax fortfarande gör mig lite förvirrad ibland.</p>

        <p>Men jag kände att det klarnade mer i det här kmomet då man fick träna mycket på att skapa egna klasser och sedan på olika sätt jobba med objekten i koden.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>TIL är som sagt att jag fått en större förståelse och vana för den objektorienterade biten samt Symfony i sig. Har även lärt mig hur man kan tänka och planera kring en applikation (eller problem generellt) så att man inte bara hoppar in i ett projekt och prövar sig fram.</p>

        <p>Det har även varit lärorikt att programmera ett spel då det är ett lite annat sätt att tänka än \"vanliga\" projekt. Man måste ha bra koll på alla steg i spelet och sannolikheten för buggar eller att man missat nåt känns stor.</p>
    </section>

    <section id=\"kmom04\">
        <h2>Kmom04</h2>

        <h3>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h3>

        <p>Jag tyckte det var roligare än förväntat att skriva enhetstester med PHPUnit. Det tog ett tag att sätta sig in i hur man ska tänka för att testa sin kod på ett bra sätt. Jag antar att detta också reflekteras i min kod.</p>

        <p>För klasser som inte gör så mycket så är det väl egentligen inte så mycket att tänka på men när det gäller att testa själva spellogiken så känns det som det blir mer komplicerat.</p>

        <p>Detta beror väl främst på att spelet har olika states vilket kan bli svårt att simulera utan input från användaren (beroende på hur man skrivit sin kod).</p>

        <h3>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h3>

        <p>Jag nådde 100% kodtäckning för klasserna som hanterar enskilda kort och kortleken. Detta berodde nog främst på att de var lätta att testa då de inte innehåller så många if-satser och liknande.</p>

        <p>För klasserna som hanterar spellogiken och spelar-objekten låg motsvarande siffra på ca 95%. Player-klassen var något mer invecklad att testa då jag inte enbart ville testa ett objekt efter skapande men även när spelaren har dragit kort.</p>

        <p>På så vis gick det att testa de olika metoderna som beräknar poäng och även att få en sträng-representation av spelaren med annat än default-värdena.</p>

        <p>Det var på liknande sätt med Game-klassen med skillnaden att det är flera utomstående objekt som ingår. Detta gjorde att man fick tänka till lite inför varje test-case så att man skapar ett game state som kan tänkas motsvara en riktig spelomgång innan man kör testerna.</p>

        <p>Jag gjorde inga tester för BankPlayer eftersom den inte används i koden för tillfället.</p>

        <h3>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?</h3>

        <p>Jag upplevde inte min kod som speciellt testbar eftersom det inte var något jag tagit hänsyn till när koden skrevs. Det känns som att klasserna måste kunna fungera ganska självständigt för att de ska kunna testas på ett smidigt sätt.</p>

        <p>Även om många klasser alltid kommer innehålla objekt av andra klasser så vill man kunna testa en klass utan de klasser som \"står över\" den. Det är i alla fall så jag uppfattade det.</p>

        <p>Exempelvis ville jag kunna testa Player-klassen utan att skapa ett Game-objekt medans man inte kommer undan att skapa Player-objekt om man testar Game-klassen.</p>

        <h3>Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h3>

        <p>Jag behövde inte skriva om så mycket egentligen förutom att lägga till en metod för att lägga till kort till ett spelar-objekt i Player-klassen istället för att det som tidigare gjordes direkt i Game-klassen.</p>

        <h3>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h3>

        <p>Jag tror att så är fallet och att om koden är lätt att testa så innebär det att den är skriven på ett mer genomtänkt sätt och kanske även mer modulär för att underlätta enhetstester. Jag tror att sådan kod är lättare att sätta sig in i för utomstående eller om man varit borta från ett projekt en längre tid.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Det första jag fick bekanta mig med var Xdebug vars installation inte var fullt så enkel på min Mac-maskin. Därefter lästes artikeln om olika filosofier för testning i mjukvarusammanhang.</p>

        <p>Sedan använde jag exemplet och övningen för att komma igång med PHPUnit för att sedan försöka applicera den nya kunskapen på de egna klasserna för kortspelet.</p>

        <p>Fick också lära mig om DocBlock samt hur man autogenererar dokumentation för sin kodbas.</p>
    </section>

    <section id=\"kmom05\">
        <h2>Kmom05</h2>

        <h3>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen?</h3>

        <p>Tycker det gick smidigt att jobba igenom övningen och det var inte någon del som jag fastnade på.</p>

        <p>Det var en del inställningar och ändringar som skulle göras men tyckte det var lätt att skapa en databas, entity-klasser och migrations.</p>

        <p>Jag trodde först att man behövde göra en migration varje gång man ändrar nåt i databasen, men efter att ha lagt till metoden som hämtar en bok utifrån dess isbn-nummer så drog jag slutsatsen att det bara är ändringar som berör databasens schema och inte metoder som bara hämtar data.</p>

        <h3>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet?</h3>

        <p>Ja jag försökte att tänka på användargränssnittet vid designandet av library-appen. Det första beslutet jag tog var att låta landningssidan och sidan som visar alla böcker vara densamma. Det kändes som att det förenklade flödet lite.</p>

        <p>Därifrån kan man sedan klicka på den bok som man vill se en detaljvy för. Från denna kan man se bokens bild om en sådan finns samt antingen uppdatera eller radera boken.</p>

        <p>Man kan även lägga till en ny bok från översikts-sidan. Alla vyer som inte är översiktssidan innehåller även en länk till översikts-vyn så att man snabbt ska kunna navigera tillbaka.</p>

        <p>Försökte även styla knapparna så de såg mer tydliga och tilltalande ut än de förvalda.</p>

        <h3>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser?</h3>

        <p>Tycker det gick bra att jobba med ORM. Kanske berodde det på att det passade uppgiften väldigt bra med ett bibliotek där man kan lägga till böcker.</p>

        <p>Den tydligheten gjorde att det blev ganska lätt att jobba objektorienterat även med databasen.</p>

        <p>Jag vet inte om det underlättade så mycket egentligen jämfört med relationsmodellen men jag gillade att använda de autogenererade metoderna i repository- och book-klasserna och tyckte det kändes intuitivt.</p>

        <h3>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser?</h3>

        <p>ORM-konceptet kändes som en positiv överraskning och det var intressant att jobba mot databaser på ett annat sätt än relationsmodellen.</p>

        <p>Vore kul att testa det i en lite större uppgift för att verkligen se vad det \"går för\". Tror också det hjälpte mycket att det var så pass smidigt att komma igång med Doctrine.</p>

        <h3>Vilken är din TIL för detta kmom? TIL var främst hur man kommer igång med Doctrine i en app som använder Symfony-ramverket. Även en del om databaser med ett objektorienterat synsätt generellt (ORM).</h3>

        <p>Fick också öva lite på hur man bestämmer ett användargränssnitt utifrån en delvis löst definierad kravlista. Kraven i sig var tydliga men inte exakt vilket struktur man skulle ha på allt vilket gjorde att man fick tänka lite själv.</p>
    </section>

    <section id=\"kmom06\">
        <h2>Kmom06</h2>

        <h3>Hur uppfattade du verktyget phpmetrics och fann du några särskilda bitar mer värdefulla än andra? Var det några särskilda metrics eller bilder du uppskattade?</h3>

        <p>Jag tyckte PhpMetrics generellt var ett bra verktyg men uppfattade ibland användargränssnittet som lite rörigt. Det var väldigt mycket data som presenterades vilket gjorde att det kunde kännas lite överväldigande för en oinsatt. Kändes även ibland som man hittade samma mätvärden på flera olika ställen.</p>

        <p>Tyckte Violations var intressant att ta del av då det visade mer övergripande fel och varningar i de olika klasserna, även om det inte var helt klart hur dessa skulle åtgärdas.</p>

        <p>Därefter var det främst komplexiteten jag tittade på för de olika klasserna och deras metoder. Gillade att det var smidigt att sortera på de olika mätvärdena vilket gjorde att man snabbt kunde se var fokus borde läggas. Coupling-tabben var också behjälplig för att bilda sig en uppfattning om hur de olika klasserna var beroende av varandra.</p>

        <h3>Berätta hur det gick att integrera med Scrutinizer och vilken är din första känsla av verktyget och dess badges? Vilken kodtäckning och kodkvalitet fick du efter första bygget?</h3>

        <p>Tyckte det gick ganska smidigt att integrera mitt repo med Scrutinizer. Vet dock inte om jag gjorde nåt fel då jag var tvungen att manuellt starta en inspektion varje gång jag gjort ändringar. Trodde att det skulle ske automatiskt efter varje git push.</p>

        <p>Hursomhelst så var det smidigt att se vilka issues man behövde fixa för att nå en högre poäng. Det var också bra med färgkodad kodkvalitet så man fick ett hum om hur bra ens kodbas var överlag. Jag fick 10 i betyg av Scrutinizer och en kodtäckning om 33%.</p>

        <p>Dock så fail:ade mitt bygge efter att jag la till enhetstester för LibraryController. Nånting om att man inte ska extenda Monolog\\Logger. Men då det är något internt i Symfony så verkar det inte vara något jag kan göra så mycket åt, förutsatt att jag inte gjorde nåt fel med enhetstesterna.</p>

        <h3>Hur är din egen syn på kodkvalitet, berätta lite om den? Tror du man kan man påvisa kodkvalitet i någon viss mån med badges eller vad tror du?</h3>

        <p>Jag tror att man till stor del kan påvisa kodkvalitet med hjälp av badges, även om det kanske inte är perfekt. Framförallt när det kommer till att uppskatta hur kostsamt det är att gå in i kodbasen för att underhålla eller lägga till features. Så som nämndes i en av föreläsningarna.</p>
        
        <p>Koden kan säkert fungera jättebra i många fall även med låga betyg från Scrutinizer och liknande verktyg. Men just när det kommer till kodens \"användarvänlighet\" och säkerligen även risken för komplexa buggar så tror jag det hjälper mycket att ha bra mätvärden. Särskilt för stora och långtgående projekt.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>

        <p>Detta kmom har mest handlat om olika sätt att analysera befintlig kodbas istället för att lägga till nya features. Även om det kanske inte är det mest spännande alltid så har det känts bra att stanna upp och få en \"reality check\" om hur det ligger till med ens kodkvalitet.</p>
        
        <p>Har lärt mig om vilka mätvärden man bör hålla ett extra öga på vilket blir lättare att komma ihåg tack vare \"de 6C:na\". Har också fått öva på att analysera olika issues, försöka åtgärda dessa och jämföra mätvärdena före och efter.</p>
    </section>

    <section id=\"kmom10\">
        <h2>Kmom10</h2>
    </section>
{% endblock %}", "report.html.twig", "/Users/jockesjolin/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
