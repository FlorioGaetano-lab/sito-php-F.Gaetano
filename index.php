
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10151d">

    <title>Il mio spazio | 5EINF</title>

    <link rel="stylesheet" href="style.css?v=4">
</head>

<body>

    <header class="topbar">
        <a class="brand" href="index.php" aria-label="Home">
            <span class="brand-mark">&lt;?&gt;</span>
            <span>Il mio <strong>spazio</strong></span>
        </a>

        <nav aria-label="Navigazione principale">
            <a class="active" href="#esercizi">Esercizi</a>
            <a href="#strumenti">Strumenti</a>
            <a href="info.php">Info PHP</a>
        </nav>

        <span class="class-tag">5EINF</span>
    </header>

    <main>

        <section class="hero">
            <div class="hero-copy">
                <p class="eyebrow">
                    <span class="status-dot"></span>
                    Area di lavoro · Informatica
                </p>

                <h1>
                    Benvenuto nel<br>
                    <span>mio spazio.</span>
                </h1>

                <p class="intro">
                    Qui raccolgo gli esercizi e i progetti realizzati
                    durante le lezioni di informatica.
                    Scegli un lavoro per aprirlo.
                </p>

                <a class="primary-link" href="#esercizi">
                    Esplora gli esercizi
                    <span aria-hidden="true">↓</span>
                </a>
            </div>

            <div class="hero-art" aria-hidden="true">
                <div class="orbit orbit-one"></div>
                <div class="orbit orbit-two"></div>

                <div class="code-card">
                    <span class="code-dots">● ● ●</span>

                    <code>
                        <i>&lt;?php</i><br>
                        <b>$nome</b> = <em>"Florio Gaetano"</em>;<br>
                        <b>$classe</b> = <em>"5EINF"</em>;<br>
                        <b>echo</b> <em>"Ciao!"</em>;<br>
                        <i>?&gt;</i>
                    </code>
                </div>

                <span class="float-tag">{ codice }</span>
                <span class="float-php">php</span>
            </div>
        </section>

        <section class="section" id="esercizi">

            <div class="section-heading">
                <div>
                    <p class="eyebrow">Raccolta</p>
                    <h2>I miei esercizi</h2>
                </div>

                <span class="count">04 progetti</span>
            </div>

            <div class="project-grid">
             <!-- EXERCISE-CARDS-START -->
    <a class="project-card" href="es01a/">
        <div class="project-icon purple">
            <span>&lt;/&gt;</span>
        </div>
        <div class="project-content">
            <h3 class="project-title">Tabella pitagorica</h3>
            <p>Apri l'esercitazione e visualizza il lavoro svolto.</p>
        </div>
        <span class="card-arrow" aria-hidden="true"></span>
    </a>
    <a class="project-card" href="es01b/">
        <div class="project-icon orange">
            <span>&lt;/&gt;</span>
        </div>
        <div class="project-content">
            <h3 class="project-title">Saluti in PHP</h3>
            <p>Apri l'esercitazione e visualizza il lavoro svolto.</p>
        </div>
        <span class="card-arrow" aria-hidden="true"></span>
    </a>
    <a class="project-card" href="es01c/">
        <div class="project-icon green">
            <span>&lt;/&gt;</span>
        </div>
        <div class="project-content">
            <h3 class="project-title">Triangoli</h3>
            <p>Apri l'esercitazione e visualizza il lavoro svolto.</p>
        </div>
        <span class="card-arrow" aria-hidden="true"></span>
    </a>
    <a class="project-card" href="es02a/">
        <div class="project-icon purple">
            <span>&lt;/&gt;</span>
        </div>
        <div class="project-content">
            <h3 class="project-title">Accesso alla pagina</h3>
            <p>Apri l'esercitazione e visualizza il lavoro svolto.</p>
        </div>
        <span class="card-arrow" aria-hidden="true"></span>
    </a>
    <a class="project-card" href="es02b/">
        <div class="project-icon orange">
            <span>&lt;/&gt;</span>
        </div>
        <div class="project-content">
            <h3 class="project-title">Esercizio 02b</h3>
            <p>Apri l'esercitazione e visualizza il lavoro svolto.</p>
        </div>
        <span class="card-arrow" aria-hidden="true"></span>
    </a>
<!-- EXERCISE-CARDS-END -->
            </div>
        </section>

        <section class="tools-section" id="strumenti">

            <div>
                <p class="eyebrow">Risorse rapide</p>
                <h2>Strumenti</h2>
            </div>

            <div class="tool-links">

                <a href="adminer.php" target="_blank" rel="noopener">
                    <span>▤</span>
                    <span>
                        <strong>Adminer</strong>
                        <small>Gestione database</small>
                    </span>
                    <b>↗</b>
                </a>

                <a href="info.php">
                    <span>ⓘ</span>
                    <span>
                        <strong>Informazioni PHP</strong>
                        <small>Dettagli dell'ambiente</small>
                    </span>
                    <b>↗</b>
                </a>

            </div>
        </section>

    </main>

    <footer>
        <a class="brand footer-brand" href="index.php">
            <span class="brand-mark">&lt;?&gt;</span>
            <span>Il mio <strong>spazio</strong></span>
        </a>

        <span>5EINF · Informatica</span>

        <span id="current-year"></span>
    </footer>

    <script src="script.js?v=3"></script>

</body>
</html>

