<?php
    if (isset($_POST['sent'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $age = trim($_POST['age']);
        $note = trim($_POST['note']);

        if (!$name || !$email || !$age || !filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($age, FILTER_VALIDATE_INT)) {
            $error = true;
        } else {
            $to = "poloplno@instruktori.cz, me@jandrabek.cz";
            $subject = "[Poloplno] Přihláška " . $name;
            $headers = "From: poloplno@instruktori.cz\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
            $message = "Zdravím,\nprávě se přihlásil nový účastník\n\nJméno: $name\nE-mail: $email\nVěk: $age\nPoznámka:\n$note\n\n--Poloplno web\n";
            if(mail($to, $subject, $message, $headers)) {
                header('Location: /?success=1#signup');
                exit();
            } else {
                $error2 = true;
            }
        }
    }
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Poloplno &mdash; zážitkovka o svobodě pohledu na svět</title>
    <meta name="author" content="Jan Drábek" />
    <meta name="description" content="Zážitkovka o vidění a prožívání našeho světa a naší svobodě v tomto prožívání." />
    <meta name="keywords"  content="poloplno,zážitkovka,svoboda,pocity,potřeby,den blbec,nepříjemné události,frustrace,život" />
    <meta name="Resource-type" content="Document" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

    <meta property="og:url"                content="http://poloplno.instruktori.cz/" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Poloplno &mdash; zážitkovka o svobodě pohledu na svět" />
    <meta property="og:description"        content="„Naší největší svobodou je svoboda volby přístupu.” V. E. Frankl" />
    <meta property="og:image"              content="http://poloplno.instruktori.cz/fb.jpg" />

    <link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="style.css?v=2" />

    <script src="https://unpkg.com/tippy.js@2.5.0/dist/tippy.all.min.js"></script>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<ul id="menu">
    <li data-menuanchor="intro" class="active"><a href="#intro">Poloplno</a></li>
    <li data-menuanchor="why"><a href="#why">Proč jet</a></li>
    <li data-menuanchor="about"><a href="#about">Informace</a></li>
    <li data-menuanchor="orgs"><a href="#orgs">Tým</a></li>
    <li data-menuanchor="signup"><a href="#signup">Přihláška</a></li>
    <li data-menuanchor="contact"><a href="#contact">Kontakt</a></li>
</ul>
<div id="fullpage">
    <div class="section" id="section0">
        <div class="content section-vertical-centered">
            <div class="intro shadowed-box">
                <img src="logo.png" width="153" height="280" alt="Poloplno" />
                <div>
                    <p>1.&thinsp;6.&nbsp;&ndash;&nbsp;3.&thinsp;6.&thinsp;2018</p>
                    <h1><span>POLOPLNO</span></h1>
                    <p>Zážitková akce o svobodné volbě pohledu na svět</p>
                </div>
                &nbsp;
            </div>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="content section-vertical-centered">
            <div class="anotation shadowed-box">
                <p>Zaspali jste rande? Čekali jste hodinu ve frontě, abyste zjistili, že se dá platit pouze hotovostí, kterou nemáte? A ta dobrá tyčinka je ve slevě jen pro držitele Billa karty? Prostě den blbec?</p>
                <p>Jak pravil V. E. Frankl: <em>„Naší největší svobodou je svoboda volby přístupu.”</em><br>Pokud si toto uvědomíme, můžeme být spokojení, i když právě takový zdánlivý den blbec přijde.</p>
                <p>Pojďme společně prožít a potrénovat vědomou volbu pohledu na svět.</p>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="content section-vertical-centered">
            <div class="info shadowed-box">
                <p>
                    <b>Kdy</b><br>
                    1.&thinsp;6.&nbsp;-&nbsp;3.&thinsp;6.&thinsp;2018<br>
                    Od pozdního pátečního odpoledne do nedělního večera.
                </p>
                <p>
                    <b>Kde</b><br>
                    Obůrka u Blanska
                </p>
                <p>
                    <b>Pro koho</b><br>
                    Je Ti nad 18 a zaujalo Tě naše téma? Pak právě pro Tebe!
                </p>
                <p>
                    <b>Za kolik</b><br>
                    900 kč<br>
                </p>
                <p>
                    <b>Co s sebou</b><br>
                    Spacák, pohodlné oblečení a otevřenou mysl.
                </p>
            </div>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="content section-vertical-centered" style="overflow:hidden;">
            <div class="authors shadowed-box">
                <h2>Tým</h2>
                <div class="authors-grid">
                    <div class="author author-janca" data-tippy-interactive="true" data-tippy-theme="light rounded" data-tippy-arrow="true" data-tippy-size="large" data-tippy-arrowtransform="scale(2)" data-tippy-animation="fade" data-tippy-distance="15" data-tippy-interactiveborder="20" data-local="true" data-tippy="">
                        <img width="150px;" src="orgs/janca.jpg" class="avatar"><br>
                        <b>Janča</b>
                    </div>
                    <div class="author author-fana">
                        <img width="150px;" src="orgs/fana2.jpg" class="avatar"><br>
                        <b>Fáňa</b>
                    </div>
                    <div class="author author-hanka">
                        <img width="150px;" src="orgs/hanka.jpg" class="avatar"><br>
                        <b>Hanka</b>
                    </div>
                    <div class="author author-jan">
                        <img width="150px;" src="orgs/jan.jpg" class="avatar"><br>
                        <b>Jan</b>
                    </div>
                    <div class="author author-glum">
                        <img width="150px;" src="orgs/glum.jpg" class="avatar"><br>
                        <b>Glum</b>
                    </div>
                    <div class="author author-tom">
                        <img width="150px;" src="orgs/tom.jpg" class="avatar"><br>
                        <b>Tom</b>
                    </div>
                    <div class="author author-kristy">
                        <img width="150px;" src="orgs/kristy.jpg" class="avatar"><br>
                        <b>Kristy</b>
                    </div>
                    <div class="author author-matej">
                        <img width="150px;" src="orgs/matej.jpg" class="avatar"><br>
                        <b>Matěj</b>
                    </div>
                </div>
                <div id="author-janca" style="display: none;">
                    <p>V profesním životě učím angličtinu a zajímám se o alternativní metody vzdělávání. Ve volném čase pak ráda jezdím do hor, hraju deskovky, cvičím akrojogu a chodím do divadla. K instruktorům jsem se dostala díky své vášni k neformálnímu vzdělávání a zážitkové pedagogice.</p>

                    <p>Poloplno mě baví připravovat proto, že ráda hledám možnosti, jak si zpříjemnit vlastní prožívání. Těším se, že účastníkům pomůžu vytvořit prostředí, ve kterém dostanou dostatek podmětů k zamyšlení se nad vlastním vnímáním světa a z akce odjedou obohacení o prohloubené sebepoznání.</p>
                </div>
                <div id="author-fana" style="display: none;">
                    <p>Hlavou většinou v oblacích, tělem přebíhám od jednoho ke druhému, od larpů k zážitkovce, od deskovek ke komiksům, od filmů ke knihám a básním, od cestování k lenošení, od poslouchání k mluvení. Studuji psychologii a zajímá mě vše lidské, tedy i to, jak koukáme na svět kolem sebe. Jako nevyléčitelný optimista vidím duhu i v tmavém dole. A na Poloplnu vám ji ráda ukážu.</p>
                </div>
                <div id="author-hanka" style="display: none;">
                    <p>Pár vět o sobě, fííha... Jsem instruktorka tělem i duší. Krom toho, že to vlastně studuji, tak mě můžete vidět skákat po překážkách v lanáči, sjíždět sjezdovky s kupou dětí za zády a v létě jezdím jako animátorka na školy v přírodě. Opravdu nevím, co dřív, ale děsně mě to baví! Občas si sama říkám, není čas se zastavit? Poohlédnout se po tom, co dělám a třeba si i říct, jestli by to nešlo jinak? Budu se tedy těšit na naše společné překonávání vlastních překážek.</p>
                </div>
                <div id="author-glum" style="display: none;">
                    <p>Prací kartografickou živíce se, po lesích běhaje a po horách ťapaje, přišlo by mi fajn, aby Instruktoři nevymřeli… a k tomu jsou potřeba nějaký ty akce a nějací ti noví lidi. Změní se nějak moje chuť řešit problém, když o něm nebudu přemýšlet jako o problému, ale třeba jako o příležitosti se něco naučit? Hm… možná, že jo… A je ta latrína při pohledu shora poloprázdná nebo poloplná? A změní se to nějak když do ní spadnu?</p>
                </div>
                <div id="author-kristy" style="display: none;">
                    <p>Jsem studentka architektury, lektorka tvořivých kroužků, horami poměrně čerstvě okouzlená turistka...ale hlavně jsem životní labužník zapáleně se pídící za všemi krásami a poezií světa. Proto je pro mne téma volby pohledu na věci, co se kolem mne dějí, velmi důležité&hellip; Ono totiž „&hellip;po stříbrném mostě kráčí luna. Svět je jak chleba vytažený z pece a noc ujídá&hellip;“ je přeci jen, přiznejme si, o něco poetičtější a člověk si to lépe užije, než když je „prostě tma jak v pytli!“</p>
                </div>
                <div id="author-tom" style="display: none;">
                    <p>Jsem šťastný, když se společně s kamarády procházím přírodou, když luštíme šifry, když dokazujeme na tabuli tvrzení z teorie složitosti, nebo když připravujeme zážitkové soustředění pro středoškoláky. V rámci laboratoře Adaptabilního učení na Fakultě informatiky pracuji na své životní misi efektivní a zábavné výuky pomocí umělé inteligence. Vědomé pohledy na nepříjemné události mi umožňují být šťastný bez ohledu na okolnosti a věnovat svoji energii naplňování této mise.</p>
                </div>
                <div id="author-matej" style="display: none;">
                    <p>Beru si na svá bedra zodpovědnost za každičký kousek světa, který se mě dotýká. A stejně tak si beru zodpovědnost za svoji poloplnou mysl a zcela plně úspěšný průběh víkendovky ;)</p>
                </div>

                <div id="author-jan" style="display: none;">
                    <p>Jako softwarový inženýr každý den řeším řadu “problémů” (výzev) a je pro mě vlastně nezbytné umět najít či upravit svůj pohled na konkrétní problém, abych jej uměl správně rozložit a vyřešit… A jako zvědavého a občas trochu filozofujícího člověka mě baví zkoumat nakolik se tento způsob hledání a upravování našich pohledů na věci kolem nás dá aplikovat i mimo hranice počítačů.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="section" id="section4">
        <div class="content section-vertical-centered">
            <div class="signup shadowed-box">
                <h2>Přihláška</h2>
                <div class="texts">
                    <p class="hide">Stojíme o každého účastníka ochotného ponořit se do zákoutí naší svobody pohledu na svět. Chceš-li vyzkoušet vidět svět Poloplný, vyplň následující přihlášku&hellip; a my se ti do pár dnů ozveme s dalšími informacemi, včetně podrobnějšího dotazníku. Údaje, které nám poskytneš, budou sloužit jen pro účely pořádání této akce pod Instruktory Brno, nikomu dalšímu je nepředáme.</p>
                    <p class="show_more" title="...ochotného ponořit se do zákoutí naší svobody pohledu na svět. Chceš-li vyzkoušet vidět svět Poloplný, vyplň následující přihlášku&hellip; a my se ti do pár dnů ozveme s dalšími informacemi, včetně podrobnějšího dotazníku. Údaje, které nám poskytneš, budou sloužit jen pro účely pořádání této akce pod Instruktory Brno, nikomu dalšímu je nepředáme.">Stojíme o každého účastníka&hellip;</p>
                    <p>Cena za celou akci včetně ubytování a stravování je 900 Kč, <span class="context-help help-storno">storno podmínky</span>.</p>
                    <?php
                    if (isset($error) && $error) {
                        echo '<p class="error">Vyplňte, prosím, povinné údaje: jméno, e-mail a věk.</p>';
                    }
                    if (isset($error2) && $error2) {
                        echo '<p class="error">Omlouváme se, ale došlo k chybě při odesílání vaší zprávy, prosím pošlete nám e-mail na adresu <a href="mailto:poloplno@instruktori.cz">poloplno@instruktori.cz</a>.</p>';
                    }
                    if (isset($_GET['success'])) {
                        echo '<p class="success">Vaše přihláška byla úspěšně odeslána, ozveme se vám během pár dní.</p>';
                    }
                    ?>
                </div>
                <form method="post" action="/#signup">
                    <label><span>Celé jméno:</span>
                        <input required type="text" name="name" placeholder="Celé jméno" size="20" value="<?php echo htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : null)?>">
                    </label>
                    <label><span>E-mail:</span>
                        <input required type="email" name="email" placeholder="E-mail" size="20" value="<?php echo htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : null)?>">
                    </label>
                    <label><span>Věk:</span>
                        <input required type="number" name="age" size="20" placeholder="Věk" value="<?php echo htmlspecialchars(isset($_POST['age']) ? $_POST['age'] : null)?>">
                    </label>
                    <label><span>Vaše očekávání a vzkazy:</span>
                        <textarea name="note" cols="20" rows="3" placeholder="Vaše očekávání a vzkazy..."><?php echo htmlspecialchars(isset($_POST['note']) ? $_POST['note'] : null)?></textarea>
                    </label>
                    <label><span></span>
                        <input type="submit" name='sent' value="Odeslat">
                    </label>
                </form>

                <div id="help-storno-content" style="display:none">
                    <p>Více než 28 dní před akcí – 0% storno<br>
                    28 – 14 dní před začátkem akce – 30% storno<br>
                    14 až 8 den před začátkem akce – 50% storno<br>
                        7 den či později – 100% storno</p>
                    <p>V případě zrušení akce ze strany organizátorů vracíme 100% uhrazené částky.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section5">
        <div class="content section-vertical-centered">
            <div class="contact">
                <h2>Kontakt</h2>
                <p>Pokud jste zvědaví, nejistí nebo vás trápí jakýkoliv jiný dotaz, nebojte se nám ozvat na e-mail:</p>

                <a href="mailto:poloplno@instruktori.cz">poloplno@instruktori.cz</a>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    Copyright © Poloplno 2018.<br>Akce je pořádána pod záštitou <a href="http://www.instruktori.cz/">Instruktorů Brno</a>.
</div>
<script>
    tippy('.author-janca', {html: '#author-janca', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-fana', {html: '#author-fana', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-hanka', {html: '#author-hanka', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-glum', {html: '#author-glum', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-kristy', {html: '#author-kristy', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-tom', {html: '#author-tom', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-matej', {html: '#author-matej', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.author-jan', {html: '#author-jan', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.help-storno', {html: '#help-storno-content', arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
    tippy('.show_more', {arrow: true, arrowTransform: 'scale(2)', maxWidth: '350px'});
</script>

<script type="text/javascript" src="javascript.fullPage.min.js"></script>
<script type="text/javascript">
    fullpage.initialize('#fullpage', {
        anchors: ['intro', 'why', 'about', 'orgs', 'signup', 'contact'],
        sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
        menu: '#menu',
        css3:true,
        autoScrolling: true,
        keyboardScrolling: false, // space in forms!
    });
</script>

</body>
</html>
