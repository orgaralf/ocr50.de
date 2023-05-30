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
    <title>OCR50.de - Location!</title>
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

      canvas {
          border: 1px solid white;
          background-color: black;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-static.css" rel="stylesheet">
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-FM8NXVX00T"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-FM8NXVX00T');
      </script>

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
              <a class="nav-link active" href="location.php">Anfahrt</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="programm.php">Programm</a>
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
            <div class="bg-light p-5 rounded">
                <H1>Location &amp; Anfahrt</H1>
                <p class="lead">
                    Wir feiern ab 19.00 Uhr in der <a href="https://werft1.com/locations/plange-muehle-fuenf" target="_blank">Plange M&uuml;hle 5</a>,
                    im D&uuml;sseldorfer Hafen.
                    <BR><BR>
                    Folgendes ist von Interesse:
                    <UL>
                        <LI><a href="https://goo.gl/maps/uWruxyE9urDB22Ri8" target="_blank">Google Maps Link</a> (neues Fenster)</LI>
                        <LI>Die Location ist etwas ausserhalb, da man auf die "Halbinsel" rausfahren mu&szlig;</LI>
                        <LI>Bis zum ersten Hotel im Mediahafen (Courtyard Marriot) w&auml;ren es 20+ Minuten zu Fu&szlig; (1,6 km), Taxi ist empfohlen</LI>
                        <LI>Die Parkplätze sind beschrankt, Taxen können kostenlos ein- und ausfahren</LI>
                    </UL>
                    <BR><BR>
                    <H2>Hotels</H2>
                    <UL>
                        <LI>Link-Liste auf <a href="https://de.hotels.com/Hotel-Search?adults=2&d1=2023-06-03&d2=2023-06-04&destination=Medienhafen%2C%20D%C3%BCsseldorf%2C%20North%20Rhine-Westphalia%2C%20Germany&endDate=2023-06-04&latLong=51.214008%2C6.750069&regionId=553248621532511266&selected=&semdtl=&sort=DISTANCE&star=30&star=40&star=50&startDate=2023-06-03&theme=&useRewards=true&userIntent=" target="_blank">Hotels.com</a></LI>
                        <LI>Link-Liste auf <a href="https://www.hrs.de/list?location=*3542975&perimeter=30&orderBy=DistanceToDestination&startDateDay=3&startDateMonth=6&startDateYear=2023&endDateDay=4&endDateMonth=6&endDateYear=2023&language=de&currency=EUR&rooms=1&numberOfAdults%5B0%5D=2&type%5B0%5D=DOUBLEROOM&adults=2&children=0&singleRooms=0&doubleRooms=1" target="_blank">HRS.de</a></LI>
                    </UL>
                    <H2>Taxi</H2>
                    Telefon: 02 11 / 21 21 21 - Rhein-Taxi<BR>
                    oder mit FreeNow (und &auml;hnlichen Apps).
                    <BR><BR>
                    <B>Tipp für alle Anreisenden:</B> Am nächsten Sonntag findet der <a href="https://www.rheinlust.de/veranstaltungen-2/dusseldorf/" target="_blank">LEGENDÄRE Fischmarkt</a> statt
                    und es kann weiter gefeiert werden ;-).
                    <BR>
                </p>
            </div>
            <div class="align-content-center text-center col-12" style="margin-top: 30px; background-color: #FFFFFF;">
                <canvas width="320" height="640" id="game" style="background-color: #000000;"></canvas>
                <script>
                    // https://tetris.fandom.com/wiki/Tetris_Guideline

                    // get a random integer between the range of [min,max]
                    // @see https://stackoverflow.com/a/1527820/2124254
                    function getRandomInt(min, max) {
                        min = Math.ceil(min);
                        max = Math.floor(max);

                        return Math.floor(Math.random() * (max - min + 1)) + min;
                    }

                    // generate a new tetromino sequence
                    // @see https://tetris.fandom.com/wiki/Random_Generator
                    function generateSequence() {
                        const sequence = ['I', 'J', 'L', 'O', 'S', 'T', 'Z'];

                        while (sequence.length) {
                            const rand = getRandomInt(0, sequence.length - 1);
                            const name = sequence.splice(rand, 1)[0];
                            tetrominoSequence.push(name);
                        }
                    }

                    // get the next tetromino in the sequence
                    function getNextTetromino() {
                        if (tetrominoSequence.length === 0) {
                            generateSequence();
                        }

                        const name = tetrominoSequence.pop();
                        const matrix = tetrominos[name];

                        // I and O start centered, all others start in left-middle
                        const col = playfield[0].length / 2 - Math.ceil(matrix[0].length / 2);

                        // I starts on row 21 (-1), all others start on row 22 (-2)
                        const row = name === 'I' ? -1 : -2;

                        return {
                            name: name,      // name of the piece (L, O, etc.)
                            matrix: matrix,  // the current rotation matrix
                            row: row,        // current row (starts offscreen)
                            col: col         // current col
                        };
                    }

                    // rotate an NxN matrix 90deg
                    // @see https://codereview.stackexchange.com/a/186834
                    function rotate(matrix) {
                        const N = matrix.length - 1;
                        const result = matrix.map((row, i) =>
                            row.map((val, j) => matrix[N - j][i])
                        );

                        return result;
                    }

                    // check to see if the new matrix/row/col is valid
                    function isValidMove(matrix, cellRow, cellCol) {
                        for (let row = 0; row < matrix.length; row++) {
                            for (let col = 0; col < matrix[row].length; col++) {
                                if (matrix[row][col] && (
                                    // outside the game bounds
                                    cellCol + col < 0 ||
                                    cellCol + col >= playfield[0].length ||
                                    cellRow + row >= playfield.length ||
                                    // collides with another piece
                                    playfield[cellRow + row][cellCol + col])
                                ) {
                                    return false;
                                }
                            }
                        }

                        return true;
                    }

                    // place the tetromino on the playfield
                    function placeTetromino() {
                        for (let row = 0; row < tetromino.matrix.length; row++) {
                            for (let col = 0; col < tetromino.matrix[row].length; col++) {
                                if (tetromino.matrix[row][col]) {

                                    // game over if piece has any part offscreen
                                    if (tetromino.row + row < 0) {
                                        return showGameOver();
                                    }

                                    playfield[tetromino.row + row][tetromino.col + col] = tetromino.name;
                                }
                            }
                        }

                        // check for line clears starting from the bottom and working our way up
                        for (let row = playfield.length - 1; row >= 0; ) {
                            if (playfield[row].every(cell => !!cell)) {

                                // drop every row above this one
                                for (let r = row; r >= 0; r--) {
                                    for (let c = 0; c < playfield[r].length; c++) {
                                        playfield[r][c] = playfield[r-1][c];
                                    }
                                }
                            }
                            else {
                                row--;
                            }
                        }

                        tetromino = getNextTetromino();
                    }

                    // show the game over screen
                    function showGameOver() {
                        cancelAnimationFrame(rAF);
                        gameOver = true;

                        context.fillStyle = 'black';
                        context.globalAlpha = 0.75;
                        context.fillRect(0, canvas.height / 2 - 30, canvas.width, 60);

                        context.globalAlpha = 1;
                        context.fillStyle = 'white';
                        context.font = '36px monospace';
                        context.textAlign = 'center';
                        context.textBaseline = 'middle';
                        context.fillText('GAME OVER!', canvas.width / 2, canvas.height / 2);
                    }

                    const canvas = document.getElementById('game');
                    const context = canvas.getContext('2d');
                    const grid = 32;
                    const tetrominoSequence = [];

                    // keep track of what is in every cell of the game using a 2d array
                    // tetris playfield is 10x20, with a few rows offscreen
                    const playfield = [];

                    // populate the empty state
                    for (let row = -2; row < 20; row++) {
                        playfield[row] = [];

                        for (let col = 0; col < 10; col++) {
                            playfield[row][col] = 0;
                        }
                    }

                    // how to draw each tetromino
                    // @see https://tetris.fandom.com/wiki/SRS
                    const tetrominos = {
                        'I': [
                            [0,0,0,0],
                            [1,1,1,1],
                            [0,0,0,0],
                            [0,0,0,0]
                        ],
                        'J': [
                            [1,0,0],
                            [1,1,1],
                            [0,0,0],
                        ],
                        'L': [
                            [0,0,1],
                            [1,1,1],
                            [0,0,0],
                        ],
                        'O': [
                            [1,1],
                            [1,1],
                        ],
                        'S': [
                            [0,1,1],
                            [1,1,0],
                            [0,0,0],
                        ],
                        'Z': [
                            [1,1,0],
                            [0,1,1],
                            [0,0,0],
                        ],
                        'T': [
                            [0,1,0],
                            [1,1,1],
                            [0,0,0],
                        ]
                    };

                    // color of each tetromino
                    const colors = {
                        'I': 'cyan',
                        'O': 'yellow',
                        'T': 'purple',
                        'S': 'green',
                        'Z': 'red',
                        'J': 'blue',
                        'L': 'orange'
                    };

                    let count = 0;
                    let tetromino = getNextTetromino();
                    let rAF = null;  // keep track of the animation frame so we can cancel it
                    let gameOver = false;

                    // game loop
                    function loop() {
                        rAF = requestAnimationFrame(loop);
                        context.clearRect(0,0,canvas.width,canvas.height);

                        // draw the playfield
                        for (let row = 0; row < 20; row++) {
                            for (let col = 0; col < 10; col++) {
                                if (playfield[row][col]) {
                                    const name = playfield[row][col];
                                    context.fillStyle = colors[name];

                                    // drawing 1 px smaller than the grid creates a grid effect
                                    context.fillRect(col * grid, row * grid, grid-1, grid-1);
                                }
                            }
                        }

                        // draw the active tetromino
                        if (tetromino) {

                            // tetromino falls every 35 frames
                            if (++count > 35) {
                                tetromino.row++;
                                count = 0;

                                // place piece if it runs into anything
                                if (!isValidMove(tetromino.matrix, tetromino.row, tetromino.col)) {
                                    tetromino.row--;
                                    placeTetromino();
                                }
                            }

                            context.fillStyle = colors[tetromino.name];

                            for (let row = 0; row < tetromino.matrix.length; row++) {
                                for (let col = 0; col < tetromino.matrix[row].length; col++) {
                                    if (tetromino.matrix[row][col]) {

                                        // drawing 1 px smaller than the grid creates a grid effect
                                        context.fillRect((tetromino.col + col) * grid, (tetromino.row + row) * grid, grid-1, grid-1);
                                    }
                                }
                            }
                        }
                    }

                    // listen to keyboard events to move the active tetromino
                    document.addEventListener('keydown', function(e) {
                        if (gameOver) return;

                        // left and right arrow keys (move)
                        if (e.which === 37 || e.which === 39) {
                            const col = e.which === 37
                                ? tetromino.col - 1
                                : tetromino.col + 1;

                            if (isValidMove(tetromino.matrix, tetromino.row, col)) {
                                tetromino.col = col;
                            }
                        }

                        // up arrow key (rotate)
                        if (e.which === 38) {
                            const matrix = rotate(tetromino.matrix);
                            if (isValidMove(matrix, tetromino.row, tetromino.col)) {
                                tetromino.matrix = matrix;
                            }
                        }

                        // down arrow key (drop)
                        if(e.which === 40) {
                            const row = tetromino.row + 1;

                            if (!isValidMove(tetromino.matrix, row, tetromino.col)) {
                                tetromino.row = row - 1;

                                placeTetromino();
                                return;
                            }

                            tetromino.row = row;
                        }
                    });

                    // start the game
                    rAF = requestAnimationFrame(loop);
                </script>
            </div>
        <BR><BR><BR>
        &nbsp;
        </div>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
