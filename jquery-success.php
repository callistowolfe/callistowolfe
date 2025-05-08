<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val Smyth - Web Developer: Sketches</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
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
                        <li><a href="/index">Home</a></li>
                        <li><a rel="noopener" href="https://blog.valsmyth.ca/" target="_blank">Blog</a></li>
                        <li>
                            <a href="#" class="has-dropdown">Code</a>
                            <ul class="dropdown">
                                <li><a rel="noopener" href="https://seeds.valsmyth.ca/public/" target="_blank">PHP</a></li>
                                <li><a href="/jquery-ui">jQuery UI</a></li>
                                <li><a href="/jquery">jQuery</a></li>
                                <li><a href="/materialize">MaterializeCSS</a></li>
                                <li><a href="/ajax">AJAX</a></li>
                                <li><a href="/maps-api">Maps API</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown">Design</a>
                            <ul class="dropdown">
                                <li><a href="/photography">Photography</a></li>
                                <li><a href="/photoshop">Photoshop</a></li>
                                <li><a href="/illustrator">Illustrator</a></li>
                                <li><a href="/sketches">Sketches</a></li>
                            </ul>
                        </li>
                        <li><a href="/my-learning">My Learning</a></li>
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
    <main>
        <section class="container-ui">
            <h2>Successful Form</h2>
            <p>If you were redirected to this page, the validation has passed. No information was saved.</p>
            <p>Feel free to play with the signpad! It doesn't upload anywhere, but you can download it.</p>
        </section>

        <section>
            <div class="container-ui signature-background">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div id="signpad"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <a href="/index" class="logos">
                <img src="img/svg/logo.svg" alt="A howling wolf silhouette against a blue to purple gradient moon, Val Smyth's logo - Callistowolfe" class="logo">
                <img src="img/github.svg" alt="Github handle Callistowolfe" class="logo git">
            </a>
        </div>
        <div>
            <h2>Val Smyth</h2>
            <p>&copy; 2024 My first website</p>
        </div>
        <nav class="footnav">
            <ul class="foot-menu">
                <li><a href="/index">Home</a></li>
                <li><a rel="noopener" href="https://blog.valsmyth.ca/" target="_blank">Blog</a></li>
                <li><a href="/my-learning">My Learning</a></li>
                <li><a href="license.txt" target="_blank">Licenses</a></li>
            </ul>
        </nav>
    </footer>
    <script src="js/signpad.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#signpad').SignPad({
                width           : 800,
                height          : 200,
                lineColor       : '#9da4e2',
                lineWidth       : 2,
                userId          : null,
                canvasId        : 'signature-pad-canvas',
                minStrokeLength : 500,
                styles          : {
                    clearBtn        : "btn btn-danger btn-sm",
                    undoBtn         : "btn btn-info btn-sm",
                    saveBtn         : "btn btn-success btn-sm",
                    downloadBtn     : "btn btn-info btn-sm"
                }
            });
        });
    </script>
</body>
</html>