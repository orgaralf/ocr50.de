<?php
    require_once("inc/base.php");
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Details zur Feier in Düsseldorf - nur mit Passwort zugänglich!">
    <meta name="author" content="Ralf Schwoebel">
    <meta name="generator" content="manually">
    <title>OCR50.de - Programm</title>
    <link rel="canonical" href="https://www.ocr50.de/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-static.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">OCR50.de</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Startseite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="location.php">Anfahrt</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link active" href="programm.php">Programm</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="dresscode.php">Dresscode</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="geschenke.php">Geschenke</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="bg-light p-5 rounded">
                <H1>Rahmenprogramm</H1>
                <img src="img/roller.png" class="float-end img-fluid">
                <p class="lead">
                    <UL>
                        <LI class="p-2"><B>19:00 Uhr</B> Ankommen, Snacks, Drinks, Sundowner Live-Musik</LI>
                        <LI class="p-2"><B>ca. 20:00 Uhr</B> Willkommensgru&szlig von Oli, Chris und Ralf</LI>
                        <LI class="p-2"><B>ca. 20:15 Uhr</B> Abendessen</LI>
                        <LI class="p-2"><B>ca. 22:00 Uhr</B> Live-Musik, Tanzen</LI>
                        <LI class="p-2"><B>ca. 23:30 Uhr</B> DJ, Tanzen</LI>
                    </UL>
                    Es gibt ein paar Photo-Momente. Die Bilder sammeln wir im Nachgang hier auf der Site.
                    Bitte denkt an den <a href="dresscode.php">Dresscode</a>, damit wir alle was zu Schauen haben.
                </p>
            </div>
        </div>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>