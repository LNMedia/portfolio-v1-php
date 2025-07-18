<!DOCTYPE html lang="de">
<html>
    <head>
        <link rel="icon" type="image/png" href="https://server.areimann.de/images/favicons/areimann.de.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Header</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/stylesheets/main.css">
        <link rel="stylesheet" href="/assets/stylesheets/components/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <header>
            <div id="navbutton_mobile" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <p class="seperator1">|</p>
            <nav id="desktop_nav">
                <ul id="desktop_nav_main">
                    <li><a href="/lang/de">Startseite</a></li>
                    <li><a href="/lang/de/pages/cv.php">Lebenslauf</a></li>
                    <li><a href="https://projects.areimann.de" target="_blank">Projekte (WIP)</a></li>
                    <li><a href="https://instant-gaming.com/?igr=apixoffiziell" target="_blank">Partner</a></li>
                    <li><a href="/lang/de/pages/links.php">Linksammlung</a></li>
                </ul>
            </nav>
            <nav id="mobile_nav">
                <ul id="mobile_nav_main">
                    <li><a href="/lang/de">Startseite</a></li>
                    <li><a href="/lang/de/pages/cv.php">Lebenslauf</a></li>
                    <li><a href="https://projects.areimann.de" target="_blank">Projekte (WIP)</a></li>
                    <li><a href="https://instant-gaming.com/?igr=apixoffiziell" target="_blank">Partner</a></li>
                    <li><a href="/lang/de/pages/links.php">Linksammlung</a></li>
                </ul>
            </nav>
            <img class="logofile" src="https://server.areimann.de/images/areimann.de/logofiles/complete_logo.png" alt="Dieses Bild kann nicht angezeigt werden">
            <p class="seperator2">|</p>
            <div class="sidebarsocialicons">
                <a href="https://youtube.com/@apixoffiziell" target="_blank"><img alt="Nicht verfügbar" src="https://server.areimann.de/images/areimann.de/icons/socials/youtube.png"></a>
                <a href="https://tiktok.com/@apixoffiziell" target="_blank"><img alt="Nicht verfügbar" src="https://server.areimann.de/images/areimann.de/icons/socials/tiktok.png"></a>
                <a href="https://t.me/apixoffiziell" target="_blank"><img alt="Nicht verfügbar" src="https://server.areimann.de/images/areimann.de/icons/socials/telegram.png"></a>
                <a href="https://open.spotify.com/playlist/4UisGb0W9zBTLvcvkR9W2B?si=7b2cf2683f734388" target="_blank"><img alt="Nicht verfügbar" src="https://server.areimann.de/images/areimann.de/icons/socials/spotify.png"></a>
            </div>
            <p class="seperator3">|</p>
            <img id="lang" src="https://server.areimann.de/images/areimann.de/flags/de.png">
        </header>
        
        <script src="/assets/scripts/components/header.js" defer></script>
    </body>
</html>