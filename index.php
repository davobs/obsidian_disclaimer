<?php

/*
 
Plugin Name: Obsidian disclaimer plugin
 
Description: Obsidian disclaimer plugin
 
Version: 1.02

Author: Dav

*/
add_action('after_setup_theme', 'init_plug');
function init_plug()
{
    function desc_short_function()
    {
        $blog_name = get_bloginfo('name');
        preg_match('/([^\s]+)/', $blog_name, $name);
        //echo '<span class="desc-short">Artiklen er en annonce, da den er sponsoreret af vores partnere.</span>';
        echo '<span class="desc-short">Artiklen er en annonce<div class="disclaimer-tooltip"><img width="20px" height="20px" class="question-mark" src="' . plugin_dir_url(__FILE__) . 'question.svg"><div class="top"><p>' . $name[0] . ' er finansieret af vores partnere, og artiklerne anses dermed som sponsoreret indhold.</p><i></i></div></div></span>';
    }

    function desc_short_function_cr()
    {
        $blog_name = get_bloginfo('name');
        preg_match('/([^\s]+)/', $blog_name, $name);
        //echo '<span class="desc-short">Artiklen er en annonce, da den er sponsoreret af vores partnere.</span>';
        echo '<span class="desc-short">' . $name[0] . ' er finansieret af vores partnere, og artiklerne anses dermed som sponsoreret indhold.</span>';
    }

    function desc_long_function()
    {
        $blog_name = get_bloginfo('name');
        preg_match('/([^\s]+)/', $blog_name, $name);
        echo '<p class="text full desc-long"><span id="more"></span> Udvælgelsen af produkter sker på baggrund af analyser og research, men artiklen inkluderer kun produkter, der udbydes af vores partnere. Bemærk<span id="dots">...</span><span id="more2">, artiklens årstal er, hvornår artiklen er opdateret, og ikke nødvendigvis et udtryk for, hvornår produkterne er testet.</span><span onclick="readFunction()" id="readBtn"> Læs mere</span></p>';
    }

    function om_os_function()
    {
        $blog_name = get_bloginfo('name');
        preg_match('/([^\s]+)/', $blog_name, $name);
        $cats =  get_categories('number=5&show_count=1&orderby=count&order=DESC&title_li=');
        // $args = array( 
        //     'post_type' => 'any',
        //     'post_status' => 'publish',    
        // );
        $cat_names = array();
        foreach ($cats as $cat) {
            if (!next($cats)) {
                $cat_name = $cat->name;
                $category_id = get_cat_ID($cat->name);
                $category_link = get_category_link($category_id);
                $cat_names[] = '<a href="' . $category_link . '">' . $cat_name . '</a>';
            } else {
                $cat_name = $cat->name;
                $category_id = get_cat_ID($cat->name);
                $category_link = get_category_link($category_id);
                $cat_names[] = '<a href="' . $category_link . '">' . $cat_name . '</a>';
            }
        };
        $cat_for_print = implode(", ", $cat_names);
        echo '<div class="entry-content alignwide">

    <div>
        <div>
            <h2>Kort om ' . $name[0] . '</h2>
            <div class="intro_text">
                <p>'  . $name[0]  . ' er et online forbrugermagasin til formål at hjælpe vores læsere 
via inspiration og vejledning i at finde det rette produkt til den rette pris ved at 
lave værdiskabende, sponsorerede artikler inden for ' . $cat_for_print .  '.</p>
            </div>
    </div>
    <div class="gradient-grey">
        <div>
            <h3>Hvem står bag '  . $name[0]  . '?</h3>
            <p>'  . $name[0]  . ' er i dag en del af det digitale mediehus, Obsidian Media. Vi er en 
dansk virksomhed med hovedkontor i Aarhus.</p>
            <p>
                <a href="https://obsidianmedia.dk/" data-wct-parsed="1">Obsidian Media ApS</a>
                <br>Bødker Balles Gård 15B<br>8000 Aarhus<br>CVR: 40483667<br>
                    <br>kontakt@obsidianmedia.dk</br>
                </p>
                <p>&nbsp;</p>
                <p>Vores vision er ambitiøs; vi ønsker at være din foretrukne portal, når du som 
forbruger skal indsamle viden om forbrugsgoder.</p>
                <p>Vi har en ambition om at publicere kvalitetsindhold, der skaber maksimal værdi
og nytte for vores læsere gennem grundig research og god formidling i de 
emner, skriver artikler om.</p>
                <p>Deraf er vores mission, at vi skal hjælpe forbrugeren med at få inspiration og 
nyttig viden, der hjælper dem med at finde det rette produkt, der matcher 
netop deres behov, til den rette pris.</p>
            </div>
            <div>
                <h3>Redaktionelle retningslinjer, samarbejdspartnere
og annoncer</h3>
                <p>Vi er et annoncefinansieret medie, fordi vi linker ind til udvalgte 
samarbejdspartnere for de produkter og ydelser, vi beskriver, analyserer og 
anbefaler i vores guides.</p>
                <p>Udvælgelsen af produkter er afgrænset til webshops, der findes i vores 
annoncenetværk – herunder Pricerunner, som samarbejder med over 9.000 
butikker, og dermed dækker vi næsten samtlige webshops i Skandinavien. 
Derved begrænses vi i praksis stort set ikke ikke i vores udvælgelse af 
produkter. </p>
                <p>Vores annoncer fungerer typisk via den såkaldte affiliate-marketing-model, 
hvor vi som medie refererer vores læsere videre til vores partnere, og såfremt vedkommende klikker og køber produktet, bliver vi belønnet med en mindre 
kommission.</p>
                <p>I andre tilfælde består annonce-modellen af et samarbejde med Pricerunner. 
Her bruger vi Pricerunners pristabeller i vores artikler, mod en lille andel af 
Pricerunners annonceindtjening, hvilket er en mindre betaling per klik på deres 
pristabeller. </p>
                <p>Det er vores model, og det er vi meget åbne om, da det finansierer vores 
arbejde med fortsat at skabe gode værdiskabende forbrugerguides online. Det 
betyder også, at vi er en slags digitale ambassadører for vores partnere, da vi 
har en økonomisk interesse.</p>
                <p>Med det nævnt, er det meget vigtigt at understrege, at vi først og fremmest 
forsøger at skabe værdi for vores læsere.</p>
                <p>Det er ligeledes vigtigt at nævne, at vi ikke tester produkterne selv, men via en
kompliceret dataindsamling og research samler eksterne tests, 
kundeanmeldelser, produktspecifikationer og priser ét sted, så du som 
forbruger får et bedre grundlag for at træffe den rette købsbeslutning.</p>
            </div>
            <div>
                <h3>Hvordan finder vi de bedste produkter? </h3>
                <p>Mange af vores artikler er forbrugerguides, der handler om, hvordan du som 
kunde finder det bedste produkt til dine behov. Dette stiller høje krav til vores 
research-arbejde, hvor det er vores fornemmeste opgave at identificere de 
bedste produkter på markedet til ethvert behov.</p>
                <p>Vi skaber først og fremmest værdi gennem aggregering af information. Vi 
samler alt information ét sted og sammenholder produkterne op imod 
hinanden på forskellige specifikationer og egenskaber, så du kan træffe en 
mere grundig købsbeslutning.</p>
                <p>Når vi vurderer, hvilke produkter, der skal med i artiklen, og hvilke der skal 
fremhæves, samler vi vurderinger fra andre tests og eksperter på området:</p>
                <ul>
                    <li>Officielle forbrugerråd såsom danske Forbrugerrådet TÆNK, svenske 
Råd og Rön, norske ForbrukerRådet, britiske Which, amerikanske 
ConsumerReports samt flere andre.</li>
                    <li>Officielle tests fra større medier som Politiken, Jyllands-Posten, NY 
Times, BBC, m.fl.</li>
                    <li>Ekspertråd fra danske og udenlandske medier inden for produktets 
nicher som fx Flatpanels, KitchenArena, TechGearLab, 
OutdoorGearLab, GoodHouseKeeping, PCGamer, Runrepeat etc. </li>
                    <li>YouTube’ere der tester og anmeldelser produkter inden for det 
aktuelle emne.</li>
                </ul>
                <p>&nbsp;</p>
                <p>Disse tests og ekspertråd sammenholder vi med kundeanmeldelser. Kunden test i den virkelige verden efter vores vurdering meget om produktets kvalitet. Det er vitalt for vores analyse, hvordan forbrugeren tager imod produktet. Det sker ved at indsamle forbrugernes anmeldelser på tværs af platforme som Amazon, Google, Trustpilot samt større webshops som Coop, Elgiganten, Power, Whiteaway, m.fl.</p>
                <p>En anden vigtig del af vurderingen af udvælgelsen af de bedste produkter til forskellige behov er selvfølgelig produktets egenskaber og specifikationer. I vores analyse af, hvorvidt der er værdi for pengene, og hvem produktet passer til, medregner vi naturligvis produktets specifikationer i vores analyse.</p>
                <p>I forbindelse vores research-proces laver vi en teknisk indsamling, hvor vi indsætter alle relevante specifikationer i en database. Det muliggør sammenligning produkternes egenskaber op imod pris, testresultater og anmeldelser. </p>
                <p>Vi supplerer ofte ovenstående med research på online portaler og fora, dialog med forhandlere, producenter og fagfolk for at danne bedst mulige forståelse af, hvilke faktorer der har størst betydning i købsbeslutningen for produktet. </p>
                <p>I mange tilfælde scorer vi produktet på disse nøglefaktorer, således du som kunde får et overblik over, hvordan produktet scorer på de udvalgte parametre sammenlignet med de øvrige produkter. </p>
                <p>Slutteligt, spiller vores egen data også en vigtig rolle i, hvilke produkter vi anbefaler. Vi har brugeradfærdsdata på, hvilke produkter der bliver klikket mest på, samt hvad raten for køb er på de respektive produkter, hvilket siger rigtig meget om produktets popularitet og dermed kundernes præferencer, såfremt anmeldelserne af produktet er positive </p>
                <p>Det er svært at sætte to streger under, hvad der vægter højst i vores analyse, da det er meget forskellige fra produktkategori til produktkategori. Der kan være artikler, hvor der ikke er lavet reelle tests. Nogle gange tages alle parametre i spil, andre gange vægter enkelte parametre højst.</p>
                <p>For at maksimere værdiskabelse og hjælpe dig som læser med at få mest mulig værdi, laver vi også en prissammenligning på produktet, så vores læsere får anbefalet det bedste og billigste sted at købe produktet. </p>
                <h3>Hvem laver udvælgelse og research af produkter?</h3>
                <p>Vi har et dedikeret Product Research team, som på nuværende tidspunkter tæller fem ansatte, som fortrinsvist er baseret i vores kontor i Banja Luka i Bosnien.</p>
                <p>Vores Product Research specialister har ansvaret for selve research-arbejdet, hvilket inkluderer processerne beskrevet ovenfor inklusivt at gennemtrævle internettet for test og anmeldelser, indtaste produktdata i vores database, og analysere produkterne på baggrund af dette med sparring fra specialister i Danmark, som står for at sætte de overordnede rammerne for research, analyse og udvælgelse samt kvalitetssikring. </p>
            </div>
            <div>
                <h3>Forbehold</h3>
                <p>Vi '  . $name[0]  . '&nbsp;og Obsidian Media tager forbehold for tastefejl eller ved forkerte angivne oplysninger relateret til de produkter og services vi belyser på vores sites. Selvom vi bruger enormt meget tid på research og kvalitetssikring, kan der opstå fejl i vores artikler, og vi anbefaler altid, at du som læser/kunde altid tjekker produktinformationer hos forhandleren eller leverandøren af produktet.</p>
            </div>
        </div>
</div>';
    }


    add_shortcode('obsidian_media_desc_short', 'desc_short_function');
    add_shortcode('obsidian_media_desc_short_cr', 'desc_short_function_cr');
    add_shortcode('obsidian_media_desc_long', 'desc_long_function');
    add_shortcode('obsidian_media_om_os', 'om_os_function');
}


wp_enqueue_style('disclaimer_style', plugins_url() . '/obsidian_disclaimer/style.css');



add_action('wp_footer', function () {

?>
    <script>
        function readFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var moreText2 = document.getElementById("more2");
            var btnText = document.getElementById("readBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "\xa0 Læs mere";
                moreText.style.display = "none";
                moreText2.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "\xa0 Læs mindre";
                moreText.style.display = "inline";
                moreText2.style.display = "inline";
            }
        }
    </script>
<?php

}, 100);
