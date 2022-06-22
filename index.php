<?php
require_once 'mail.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/windows-logo.png">
    <title>Portfolio - Wassim Salmi</title>
</head>

<body>
    <div class="main">
        <div class="desktop">
            <div class="trash app">
                <img class="trash app_image" src="./images/full-trash.png" alt="full_trash">
                <p class="trash app_title">Corbeille</p>
            </div>
            <div class="projects app" id="projects">
                <img class="projects app_image" src="./images/projects.png" alt="folder">
                <p class="projects app_title">Projets</p>
            </div>
            <div class="skills app" id="skills">
                <img class="skills app_image" src="./images/skills.png" alt="skills">
                <p class="skills app_title">Compétences</p>
            </div>
            <div class="me app" id="me">
                <img class="me app_image" src="./images/me.png" alt="me">
                <p class="me app_title">Moi</p>
            </div>
            <div class="linkedin app" id="linkedin">
                <img class="linkedin app_image" src="./images/linkedin.png" alt="linkedin">
                <p class="linkedin app_title">Linkedin</p>
            </div>
            <div class="github app" id="github">
                <img class="github app_image" src="./images/github.png" alt="github">
                <p class="github app_title ">Github</p>
            </div>
            <div class="email app" id="email">
                <img class="email app_image" src="./images/email.png" alt="email">
                <p class="email app_title">Contact</p>
            </div>
        </div>
        <footer class="footer">
            <nav>
                <a class="footer_app" href="">
                    <img src="./images/windows-logo.png" alt="windows logo">
                </a>
            </nav>
        </footer>
    </div>

    <div id="popup_trash">
        <div class="popup">
            <div id="header_popup_trash" class="header_popup">
                <div class="left">
                    <p>Poubelle</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_trash" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_trash">
                <a href="http://muscuprogress.alwaysdata.net/" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/pomme.png" alt="pomme">
                        <p class="app_title">Pomme entamée</p>
                    </div>
                </a>
                <a href="https://www.flaticon.com/fr/icones-gratuites/lait" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/bouteille-de-lait.png" alt="lait">
                        <p class="app_title">Lait périmé</p>
                    </div>
                </a>
                
            </div>
        </div>
    </div>

    <div id="popup_projects">
        <div class="popup">
            <div id="header_popup_projects" class="header_popup">
                <div class="left">
                    <p>Projets</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_projects" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_projects">
                <a href="http://muscuprogress.alwaysdata.net/" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/dumbbell.png" alt="MuscuProgress">
                        <p class="app_title">MuscuProgress</p>
                    </div>
                </a>
                <a href="https://castrading-import.com/" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/cas-trading.png" alt="cas-trading">
                        <p class="app_title">Cas Trading</p>
                    </div>
                </a>
                <a href="" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/commerce-electronique.png" alt="e-commerce Symfony">
                        <p class="app_title">e-commerce Symfony</p>
                    </div>
                </a>
                <a href="" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/ux.png" alt="Blog poo">
                        <p class="app_title">Blog poo</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="popup_skills">
        <div class="popup">
            <div id="header_popup_skills" class="header_popup">
                <div class="left">
                    <p>Compétences</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_skills" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_skills">
                <a class="app" href="https://developer.mozilla.org/fr/docs/Web/HTML" target="_blank">
                    <img class="app_image" src="./images/html-5.png" alt="html">
                    <p class="app_title">HTML</p>
                </a>
                <a class="app" href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank">
                    <img class="app_image" src="./images/css-3.png" alt="css">
                    <p class="app_title">CSS</p>
                </a>
                <a class="app" href="https://www.php.net/docs.php" target="_blank">
                    <img class="app_image" src="./images/php.png" alt="php">
                    <p class="app_title">PHP</p>
                </a>
                <a class="app" href="https://docs.python.org/fr/3/" target="_blank">
                    <img class="app_image" src="./images/python.png" alt="python">
                    <p class="app_title">Python</p>
                </a>
                <a class="app" href="https://docs.oracle.com/en/java/" target="_blank">
                    <img class="app_image" src="./images/java.png" alt="java">
                    <p class="app_title">Java</p>
                </a>
                <a class="app" href="https://docs.oracle.com/en/java/" target="_blank">
                    <img class="app_image" src="./images/mysql.png" alt="mysql">
                    <p class="app_title">MySql</p>
                </a>
                <a class="app" href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank">
                    <img class="app_image" src="./images/js.png" alt="javascript">
                    <p class="app_title">JavaScript</p>
                </a>
                <a class="app" href="https://symfony.com/doc/current/index.html" target="_blank">
                    <img class="app_image" src="./images/symfony.png" alt="symfony">
                    <p class="app_title">Symfony</p>
                </a>
                <a class="app" href="https://fr.reactjs.org/docs/getting-started.html" target="_blank">
                    <img class="app_image" src="./images/physics.png" alt="react">
                    <p class="app_title">React</p>
                </a>
                <a class="app" href="https://git-scm.com/doc" target="_blank">
                    <img class="app_image" src="./images/git.png" alt="git">
                    <p class="app_title">Git</p>
                </a>
                <a class="app" href="https://www.adobe.com/fr/products/photoshop/landpb.html" target="_blank">
                    <img class="app_image" src="./images/photoshop.png" alt="photoshop">
                    <p class="app_title">Photoshop</p>
                </a>
                <a class="app" href="https://www.figma.com" target="_blank">
                    <img class="app_image" src="./images/figma.png" alt="figma">
                    <p class="app_title">Figma</p>
                </a>
            </div>
        </div>
    </div>

    <div id="popup_me">
        <div class="popup">
            <div id="header_popup_me" class="header_popup">
                <div class="left">
                    <p>Moi</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_me" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_me">
                <div class="img_and_text">
                    <img src="./images/me.png" alt="">
                    <p>Salmi Wassim</p>
                </div>
                <div class="descritpion">
                    <p>Salut ! Je suis Salmi Wassim, j'ai 21ans et je suis Développeur Web ! <br /> Issue d'une
                        formation Bac +2 Développeur Web et Web Mobile, je met en pratique mes compétences pour créer
                        des sites web</p>
                </div>
                <div class="documents">
                    <a href="./documents/cv.pdf" target="_blank">
                        <div class="app">
                            <img class="app_image" src="./images/format-de-fichier-pdf.png" alt="pdf">
                            <p class="app_title">cv.pdf</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_linkedin">
        <div class="popup">
            <div id="header_popup_linkedin" class="header_popup">
                <div class="left">
                    <p>Linkedin</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_linkedin" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_linkedin">
                <a href="https://www.linkedin.com/in/wassim-salmi-489322224/" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/http.png" alt="link">
                        <p class="app_title">Profil</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="popup_github">
        <div class="popup">
            <div id="header_popup_github" class="header_popup">
                <div class="left">
                    <p>Github</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_github" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_github">
                <a href="https://github.com/WassimSss" target="_blank">
                    <div class="app">
                        <img class="app_image" src="./images/http.png" alt="link">
                        <p class="app_title">Profil</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="popup_email" <?php if ($_POST['contact_form']) { ?> class="active" <?php } ?>>
        <div class="popup">
            <div id="header_popup_email" class="header_popup">
                <div class="left">
                    <p>Email</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_email" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_email">
                <p>📧 Mail : <a href="mailto:wassimassalmi@gmail.com">wassimassalmi@gmail.com</a></p>
                <p>📱 Télephone : <a href="tel:0769806467">0769806467</a></p>

                <h3>Me contacter : </h3>

                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Votre e-mail" value="<?php if (isset($_POST['email'])) {
                                                                                            echo $_POST['email'];
                                                                                        } ?>">
                    <textarea name="message" cols="30" rows="10" placeholder="Message"><?php if (isset($_POST['message'])) {
                                                                                            echo $_POST['message'];
                                                                                        } ?></textarea>
                    <input type="submit" value="Envoyer" name="contact_form">
                    <p><?php if (isset($erreur)) {
                            echo $erreur;
                        } ?></p>
                </form>
            </div>
        </div>
    </div>

    <div id="popup_screen">
        <div class="popup">
            <div id="header_popup_screen" class="header_popup">
                <div class="left">
                    <p>Personnaliser</p>
                </div>
                <div class="right">
                    <p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </p>
                    <p>
                        <ion-icon name="tablet-landscape-outline"></ion-icon>
                    </p>
                    <button id="close_screen" class="close" onclick="closePopup(this)">
                        <p>
                            <ion-icon name="close-outline"></ion-icon>
                        </p>
                    </button>
                </div>
            </div>
            <div id="content_popup_screen">
                <h3>Changer la couleur de la police</h3>
                <div>
                    <input type="color" value="#ffffff" id="color_font">
                    <input type="button" value="Changer" id="change_font">
                </div>

                <h3>Changer la couleur de la barre des taches</h3>
                <div>
                    <input type="color" value="#333333" id="color_nav">
                    <input type="button" value="Changer" id="change_nav">
                </div>


                <h3>Le fond d'écran</h3>
                <div>
                    <input type="color" value="#d12c2c" id="color_screen">
                    <input type="button" value="Changer" id="change_screen">
                </div>
            </div>
        </div>
    </div>

    <div class="right_click">
        <button class="btn btn1">Personnaliser</button>
        <button class="btn btn2">Réactiver le clique droit</button>
    </div>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./js/popup.js"></script>

</html>