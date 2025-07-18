<!DOCTYPE html lang="de">
<html>
    <head>
        <link rel="icon" type="image/png" href="https://server.areimann.de/images/favicons/areimann.de.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio Website - A. Reimann</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="/assets/stylesheets/main.css">
        <link rel="stylesheet" href="/assets/stylesheets/pages/cv.css">
    </head>
        

    <body>
        <!-- Background -->
        <?php include 'X:/areimann.de/assets/components/animated_triplet_element_darkgray_red.php'; ?>

        <!-- Header -->
        <?php include 'X:/areimann.de/assets/components/headerDE.php'; ?>
        <style>
            #desktop_nav_main li:nth-child(2) a, #mobile_nav_main li:nth-child(2) a {
                background: rgba(150,0,0,0.2);
                pointer-events: none;
            }
        </style>

        <!-- Content -->
        <main>
            <div class="about-me">
                <img src="https://server.areimann.de/images/areimann.de/self_pictures/front_1_transparent.png" alt="Andreas Reimann" style="float: left; margin-right: 20px; width: 250px; height: auto;">
                <h1>Über Mich</h1>
                <p><strong>Name:</strong> Andreas Reimann</p>
                <p><strong>Geboren am:</strong> 06.10.1998</p>
                
                <h2>Berufliche und hobbymäßige Ziele</h2>
                <ul>
                    <li><strong>Software- und Webentwicklung:</strong> Ich strebe danach, innovative Softwarelösungen zu entwickeln, die sowohl die Benutzerfreundlichkeit als auch die Funktionalität verbessern. Mein Fokus liegt auf der Entwicklung von Webseiten und Anwendungen mit einem soliden Backend.</li>
                    <li><strong>Webvideoproduzent und Live-Streamer:</strong> Mit jahrelanger Erfahrung in der Videoproduktion und im Live-Streaming bin ich versiert im Umgang mit verschiedenen Softwaretools, darunter Davinci Resolve, Wondershare Filmora 11, CapCut und OBS. Ich produziere Inhalte für Plattformen wie YouTube und TikTok und genieße es, meine Zuschauer in die Welt des Gamings mitzunehmen und sie zu unterhalten.</li>
                    <li><strong>Musikproduktion:</strong> Als Musiker und Produzent bringe ich meine kreativen Ideen in die Realität, indem ich hauptsächlich mit ImageLine FL Studio und Audacity arbeite. Ich liebe es, Musik zu komponieren und verschiedene Genres zu erkunden.</li>
                </ul>

                <h2>Aktuelle Fähigkeiten und Erfahrungen</h2>
                <ul>
                    <li><strong>Programmierkenntnisse:</strong> Ich beherrsche mehrere Programmiersprachen, darunter HTML, PHP, CSS, JavaScript und SQL. Mein Engagement für kontinuierliches Lernen zeigt sich in meinen persönlichen Projekten, in denen ich Scripts schreibe und mich weiterbilde.</li>
                    <li><strong>Servertechnik:</strong> Ich betreibe einen eigenen Webserver zur Datenspeicherung (NAS) und verwalte Gameserver auf meinem Home-PC. Ich bin versiert in der Einrichtung von Websites auf Home-Servern, einschließlich SSL-Zertifizierung und eigener Domain.</li>
                    <li><strong>Datenbankverwaltung:</strong> Ich habe eine eigene MySQL-Datenbank auf meinem Home-PC eingerichtet und gepflegt.</li>
                    <li><strong>Ordner- und Dateistrukturen:</strong> Ich plane und setze effektive Ordner- und Dateistrukturen für systeminterne Archivierungssysteme um.</li>
                    <li><strong>Audionetzwerke:</strong> Ich habe ein Audionetzwerk in einem Heimnetzwerk realisiert, wobei ich VoiceMeeter (VBAN) verwendet habe.</li>
                    <li><strong>Musikproduktion:</strong> Ich produziere Musik basierend auf meinen eigenen Ideen und spiele Piano, um meiner Kreativität Ausdruck zu verleihen.</li>
                    <li><strong>Videoproduktion:</strong> Ich habe Erfahrung im Aufnehmen und Schneiden von Videos für Plattformen wie TikTok und YouTube, insbesondere im Gaming-Bereich, und ich liebe es, Inhalte zu erstellen, die die Zuschauer fesseln.</li>
                    <li><strong>Live-Streaming:</strong> Ich streame regelmäßig Live-Inhalte auf TikTok und YouTube und teile meine Leidenschaft für Spiele mit einem breiten Publikum.</li>
                </ul>

                <h2>Zusätzliche Kenntnisse</h2>
                <ul>
                    <li><strong>Bildbearbeitung:</strong> Ich habe Grundkenntnisse in der Bildbearbeitung, die ich durch persönliche Projekte weiter ausbaue.</li>
                    <li><strong>DNS-Verwaltung:</strong> Ich habe grundlegende Erfahrungen im Umgang mit dem Domain Name System und verstehe die Grundlagen der DNS-Administration.</li>
                    <li><strong>KI-Anwendungen:</strong> Ich nutze KI-Tools wie ChatGPT und BlackBoxAI, wobei ich bereits fortgeschrittene Kenntnisse erworben habe.</li>
                    <li><strong>Englische Sprachkenntnisse:</strong> Ich bin in der Lage, schriftlich auf Englisch zu kommunizieren, jedoch weniger im gesprochenen Bereich.</li>
                    <li><strong>Office-Anwendungen:</strong> Ich bin mit Open Office vertraut und habe Erfahrung in der Nutzung von Excel, Word und PowerPoint.</li>
                    <li><strong>PC-Setups:</strong> Ich habe Kenntnisse im Aufbau komplexer PC-Setups und kann diese effizient einrichten.</li>
                    <li><strong>Kommandozeile und PowerShell:</strong> Ich bin mit der Verwendung der Kommandozeile und PowerShell unter Windows vertraut und nutze diese Werkzeuge regelmäßig.</li>
                </ul>

                <h2>Angehender Podcaster</h2>
                <p>Ich interessiere mich auch für das Podcasting und plane, meine eigenen Geschichten und Ideen in Audioform zu teilen. Dabei möchte ich verschiedene Themen erkunden und meine Kreativität zum Ausdruck bringen. Mein Ziel ist es, eine fesselnde Erzählweise zu entwickeln, die meine Zuhörer in den Bann zieht und sie zum Nachdenken anregt.</p>

                <h2>Angehender Filmemacher</h2>
                <p>In der Welt des Filmemachens möchte ich meine Visionen zum Leben erwecken, indem ich Geschichten visuell umsetze. Ich plane, kurze Filme und Dokumentationen zu erstellen, um verschiedene Perspektiven darzustellen und Emotionen zu transportieren. Dabei werde ich meine Erfahrungen in der Videoproduktion und -bearbeitung einfließen lassen und innovative Ansätze verfolgen, um meine Erzählungen zu bereichern.</p>

                <h2>Abschlusswort</h2>
                <p>Ich freue mich darauf, meine Fähigkeiten weiter auszubauen und neue Projekte in Angriff zu nehmen. Mit meiner Leidenschaft für Technologie, Kreativität und Kommunikation strebe ich danach, einen bleibenden Eindruck zu hinterlassen und meine Visionen in die Realität umzusetzen. Für weitere Informationen besuche bitte die entsprechenden Seiten meines Portfolios.</p>
            </div>
        </main>

        <!-- Footer -->
        <?php include 'X:/areimann.de/assets/components/footerDE.php'; ?>
    </body>
</html>