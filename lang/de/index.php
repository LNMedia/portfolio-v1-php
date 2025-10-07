<!DOCTYPE html>
<html lang="de">
    <head>
        <link rel="icon" type="image/png" href="https://projects.areimann.de/archive/portfolio-v1/assets/img/favicon.png">
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
        <link rel="stylesheet" href="https://projects.areimann.de/archive/portfolio-v1/assets/stylesheets/main.css">
        <link rel="stylesheet" href="https://projects.areimann.de/archive/portfolio-v1/assets/stylesheets/pages/homepage.css">
    </head>
        
    <body>
        <!-- Background -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/animated_triplet_element_darkgray_red.php');; ?>

        <!-- Header -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/headerDE.php'); ?>
        <style>
            #desktop_nav_main li:nth-child(1) a, #mobile_nav_main li:nth-child(1) a {
                background: rgba(150,0,0,0.2);
                pointer-events: none;
            }
        </style>

        <!-- Contents -->
        <main>
            <!-- Main Header Image -->
            <section id="main1">
                <img class="main1_Banner" src="https://projects.areimann.de/archive/portfolio-v1/assets/img/big_pictures/mainBanner.png">
                <img class="main1_Selfie" src="https://projects.areimann.de/archive/portfolio-v1/assets/img/self_pictures/front_1.png">
                <h2 class="main1_Hey">Hey, ich bin</h2>
                <h1 class="main1_Name">Andreas</h1>
                <div class="main1_animatedTextContainer">
                    <div class="main1_animatedText"></div>
                </div>
            </section>

            <!-- Sektion 2 - Übersicht -->
            <section id="main2">
                <h1 class="main2_Header">Übersicht</h1>
                <div class="main2_menuContainer">
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main3')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/aboutme.png" alt="Bild 1" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Über Mich</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main4')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/skills.png" alt="Bild 2" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Fähigkeiten</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main5')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/projects.png" alt="Bild 3" class="main2_menuPointImage">
                        <p class="main2_menuPointText">aktuelle Projekte</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main6')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/contact.png" alt="Bild 4" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Kontakt</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="navigateToPage('pages/cv.php')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/cv.png" alt="Bild 5" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Lebenslauf</p>
                    </div>
                </div>
            </section>

            <!-- Sektion 3 - Über Mich -->
            <section id="main3">
                <h1 class="main3_Header">Über Mich</h1>
                <div class="main3_AboutMe">
                    <img class="main3_Selfie" src="https://projects.areimann.de/archive/portfolio-v1/assets/img/self_pictures/front_1_transparent.png">
                    <div class="main3_Text">
                        <p>
                            Ich bin Andreas Reimann, ein vielseitiger Video Editor mit einem breiten Spektrum an Fähigkeiten, insbesondere in der Videoproduktion.
                            Ich arbeite mit Software wie DaVinci Resolve und OBS, um qualitativ hochwertige Inhalte zu erstellen.
                            Ich habe vor, eigene kleine Filme zu produzieren, um meine kreativen Ideen visuell umzusetzen und meine Fähigkeiten im Storytelling weiter zu entwickeln.
                        </p>
                        <p>
                            Neben meiner Arbeit als Video Editor bin ich auch Musiker und Produzent.
                            Ich arbeite mit DAWs wie FL Studio, Audacity und Adobe Audition und spiele Piano, um kreative Audioproduktionen zu entwickeln und anderen Menschen eine Freude zu bereiten.
                        </p>
                        <p>
                            Zudem bin ich ein vielseitiger Webentwickler mit Fokus auf Frontend-, aber auch Fähigkeiten in der Backend-Entwicklung sowie Serveradministration.
                            Ich nutze diese Kenntnisse, um ansprechende Webanwendungen zu erstellen und zu betreuen.
                        </p>
                        <p>
                            Darüber hinaus habe ich eine abgeschlossene Ausbildung als Elektroniker für Energie- und Gebäudetechnik. (08.2016 - 02.2020)
                            Diese technische Grundlage unterstützt mich in meiner Karriere und ermöglicht mir, komplexe Probleme effektiv zu lösen.
                        </p>
                        <p>
                            Zusätzlich habe ich Erfahrung im Live Streaming und nutze Plattformen wie TikTok und YouTube, um Gaming-Inhalte und kreative Projekte mit meiner Community zu teilen.
                        </p>
                        <p>
                            Derzeit plane ich auch, mit dem Podcasten zu beginnen, um meine effektive Stimmlage als Erzähler zu trainieren und meine Erzählfähigkeiten weiterzuentwickeln.
                        </p>
                        <p>
                            Ich freue mich darauf, Ihnen meine Projekte und Arbeiten vorzustellen.
                            Für mehr Informationen besuchen Sie bitte die entsprechenden Seiten meiner Website.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Sektion 4 - Fähigkeiten -->
            <section id="main4">
                <h1 class="main4_Header">Fähigkeiten</h1>
                <div class="skills-container">
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/editing.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Video Editing und Content Creation</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/streaming.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>LIVE Streaming</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/music.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Musikproduktion</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/electrician.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Elektroniker für Energie- und Gebäudetechnik</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/development.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Webentwicklung (Frontend (teils Backend))</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 55%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/podcast.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Podcasting</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/movie.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Film-Erstellung</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sektion 5 - aktuelle Projekte -->
            <section id="main5">
                <h1 class="main5_Header">aktuelle Projekte</h1>
                <div class="projects-container" id="projects-container"></div>
            </section>

            <!-- Sektion 6 - Kontakt -->
             <section id="main6">
                <h1 class="main6_Header">Kontakt (WIP)</h1>
                <div class="main6_Container">
                    <div class="main6_Form">WIP</div>
                </div>
            </section>
        </main>


        <!-- Footer -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/footerDE.php'); ?>

        <script src="https://projects.areimann.de/archive/portfolio-v1/assets/scripts/pages/homepageDE.js"></script>
    </body>
</html>