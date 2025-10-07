<!DOCTYPE html>
<html>
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
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/animated_triplet_element_darkgray_red.php'); ?>

        <!-- Header -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/headerEN.php'); ?>
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
                <h2 class="main1_Hey">Hey, i am</h2>
                <h1 class="main1_Name">Andreas</h1>
                <div class="main1_animatedTextContainer">
                    <div class="main1_animatedText"></div>
                </div>
            </section>

            <!-- Sektion 2 - Übersicht -->
            <section id="main2">
                <h1 class="main2_Header">Overview</h1>
                <div class="main2_menuContainer">
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main3')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/aboutme.png" alt="Bild 1" class="main2_menuPointImage">
                        <p class="main2_menuPointText">About Me</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main4')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/skills.png" alt="Bild 2" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Skills</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main5')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/projects.png" alt="Bild 3" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Projekts</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="smoothScrollTo('main6')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/contact.png" alt="Bild 4" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Contact</p>
                    </div>
                    <div class="main2_MenuPoint" onclick="navigateToPage('pages/cv.php')">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/overview/cv.png" alt="Bild 5" class="main2_menuPointImage">
                        <p class="main2_menuPointText">Personal Resume</p>
                    </div>
                </div>
            </section>

            <!-- Sektion 3 - Über Mich -->
            <section id="main3">
                <h1 class="main3_Header">About Me</h1>
                <div class="main3_AboutMe">
                    <img class="main3_Selfie" src="https://projects.areimann.de/archive/portfolio-v1/assets/img/self_pictures/front_1_transparent.png">
                    <div class="main3_Text">
                        <p>
                            I am Andreas Reimann, a versatile video editor with a wide range of skills, particularly in video production. 
                            I work with software like DaVinci Resolve and OBS to create high-quality content. 
                            I plan to produce my own small films to visually bring my creative ideas to life and further develop my storytelling abilities.
                        </p>
                        <p>
                            In addition to my work as a video editor, I am also a musician and producer. 
                            I use DAWs like FL Studio, Audacity, and Adobe Audition, and I play the piano to develop creative audio productions and bring joy to others.
                        </p>
                        <p>
                            Furthermore, I am a versatile web developer focusing on frontend development, but I also have skills in backend development and server administration. 
                            I use this knowledge to create and maintain engaging web applications.
                        </p>
                        <p>
                            Additionally, I have completed an apprenticeship as an electronics technician for energy and building technology (08.2016 - 02.2020). 
                            This technical foundation supports my career and enables me to solve complex problems effectively.
                        </p>
                        <p>
                            I also have experience in live streaming and use platforms like TikTok and YouTube to share gaming content and creative projects with my community.
                        </p>
                        <p>
                            Currently, I am also planning to start podcasting to train my effective narration voice and further develop my storytelling skills.
                        </p>
                        <p>
                            I look forward to presenting my projects and work to you. 
                            For more information, please visit the relevant sections of my website.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Sektion 4 - Fähigkeiten -->
            <section id="main4">
                <h1 class="main4_Header">Skills</h1>
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
                            <span>Musikproduction</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/electrician.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Electronics engineer for energy and building technology</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <img src="https://projects.areimann.de/archive/portfolio-v1/assets/img/icons/skills/development.png" alt="Video Editing Icon" class="skill-icon">
                        <div class="skill-info">
                            <span>Web development (frontend (partly backend))</span>
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
                            <span>Moviemaking</span>
                            <div class="progress-bar-container">
                                <div class="progress-bar" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sektion 5 - aktuelle Projekte -->
            <section id="main5">
                <h1 class="main5_Header">Projects</h1>
                <div class="projects-container" id="projects-container"></div>
            </section>
            
            <!-- Sektion 6 - Kontakt -->
             <section id="main6">
                <h1 class="main6_Header">Contact (WIP)</h1>
                <div class="main6_Container">
                    <div class="main6_Form">WIP</div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/portfolio-v1/assets/components/footerEN.php'); ?>

        <script src="https://projects.areimann.de/archive/portfolio-v1/assets/scripts/pages/homepageEN.js"></script>
    </body>
</html>