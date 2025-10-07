<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/favicon.png">
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
        <link rel="stylesheet" href="https://projects.areimann.de/archive/demos/portfolio-v1/assets/stylesheets/main.css">
        <link rel="stylesheet" href="https://projects.areimann.de/archive/demos/portfolio-v1/assets/stylesheets/pages/links.css">
    </head>
        

    <body>
        <!-- Background -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/demos/portfolio-v1/assets/components/animated_triplet_element_darkgray_red.php'); ?>

        <!-- Header -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/demos/portfolio-v1/assets/components/headerEN.php'); ?>
        <style>
            #desktop_nav_main li:nth-child(5) a, #mobile_nav_main li:nth-child(5) a {
                background: rgba(150,0,0,0.2);
                pointer-events: none;
            }
        </style>

        <!-- Content -->
        <main>
            <div class="linktree">
                <h1 class="treeText">My Links</h1>
                <div class="links-container">
                    <a href="https://youtube.com/@apixoffiziell" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/youtube.png" alt="Banner 1" class="banner">
                        <span>@APiXoffiziell (Main)</span>
                    </a>
                    <a href="#" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/youtube.png" alt="Banner 1" class="banner">
                        <span>@APiXgamelib (Full Games)</span>
                    </a>
                    <a href="https://youtube.com/@andifenrirofficial" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/youtube.png" alt="Banner 1" class="banner">
                        <span>@AndiFenrir (Musik)</span>
                    </a>
                    <a href="https://tiktok.com/@apixoffiziell" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/tiktok.png" alt="Banner 1" class="banner">
                        <span>@APiXoffiziell (Main)</span>
                    </a>
                    <a href="#" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/tiktok.png" alt="Banner 1" class="banner">
                        <span>Video Laboratorium</span>
                    </a>
                    <a href="https://tiktok.com/@andifenrirofficial" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/tiktok.png" alt="Banner 1" class="banner">
                        <span>@AndiFenrir (Musik)</span>
                    </a>
                    <a href="https://t.me/lupinexmedia" target="_blank" class="link">
                        <img src="https://projects.areimann.de/archive/demos/portfolio-v1/assets/img/logofiles/linktree/telegram.png" alt="Banner 1" class="banner">
                        <span></span>
                    </a>
                </div>
            </div>
        </main>


        <!-- Footer -->
        <?php echo file_get_contents('https://projects.areimann.de/archive/demos/portfolio-v1/assets/components/footerEN.php'); ?>
    </body>
</html>