<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val Smyth - Web Developer: <?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body class="front">
    <header>
        <section class="header">
            <div class="nav">
                <div>
                    <a href="index.html" class="logos">
                        <img src="img/svg/logo.svg" alt="A howling wolf silhouette against a blue to purple gradient moon, Val Smyth's logo - Callistowolfe" class="logo">
                        <img src="img/github.svg" alt="Github handle Callistowolfe" class="logo git">
                    </a>
                </div>
                <button class="menu-toggle" aria-label="Toggle Navigation">
                    <svg width="30" height="30" viewBox="0 0 100 80" fill="#b600ff">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>
                </button>
                <nav class="flex">
                    <ul class="flex menu">
                        <!-- Top Level-->
                        <li><a href="index.html">Home</a></li>
                        <li><a rel="noopener" href="https://blog.valsmyth.ca/" target="_blank">Blog</a></li>
                        <li>
                            <a href="#" class="has-dropdown">Code</a>
                            <ul class="dropdown">
                                <li><a rel="noopener" href="https://seeds.valsmyth.ca/public/" target="_blank">PHP</a></li>
                                <li><a href="jquery-ui.html">jQuery UI</a></li>
                                <li><a href="jquery.html">jQuery</a></li>
                                <li><a href="materialize.html">MaterializeCSS</a></li>
                                <li><a href="ajax.html">AJAX</a></li>
                                <li><a href="maps-api.html">Maps API</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown">Design</a>
                            <ul class="dropdown">
                                <li><a href="photography.html">Photography</a></li>
                                <li><a href="photoshop.html">Photoshop</a></li>
                                <li><a href="illustrator.html">Illustrator</a></li>
                                <li><a href="sketches.html">Sketches</a></li>
                            </ul>
                        </li>
                        <li><a href="my-learning.html">My Learning</a></li>
                    </ul>
                </nav>
            </div>
            <div class="banner-cover">
                <div class="action">
                    <h1>Val Smyth</h1>
                    <div class="slider">
                        <div class="slides">
                            <h2>Web Developer</h2>
                            <h2>Web Designer</h2>
                            <h2>Photographer</h2>
                        </div>
                    </div>
                    <div class="socials">
                        <a rel="noopener" href="https://www.facebook.com/valerie.smyth" target="_blank"><img src="img/svg/icons8-facebook.svg" alt="Facebook logo"></a>
                        <a rel="noopener" href="https://www.linkedin.com/in/val-smyth-00b95771/" target="_blank" class="square"><img src="img/svg/icons8-linkedin.svg" alt="LinkedIn logo"></a>
                        <a rel="noopener" href="https://www.instagram.com/callistowolfe/?hl=en" target="_blank" class="square"><img src="img/svg/icons8-instagram.svg" alt="Instagram logo"></a>
                        <a rel="noopener" href="https://github.com/callistowolfe" target="_blank"><img src="img/svg/icons8-github.svg" alt="GitHub logo"></a>
                    </div>
                </div>
            </div>
        </section>

    </header>