<?php
// Dynamische gegevens voor de vakken/technologieën
$vakken = [
    [
        'titel' => 'Web Development',
        'beschrijving' => 'Leren bouwen van moderne websites met HTML5, CSS3 en JavaScript.',
        'icoon' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>'
    ],
    [
        'titel' => 'Backend & Databases',
        'beschrijving' => 'Server-side logica schrijven met PHP en gegevens opslaan in MySQL databases.',
        'icoon' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>'
    ],
    [
        'titel' => 'Software Engineering',
        'beschrijving' => 'Objectgeoriënteerd programmeren, algoritmes en schone code schrijven.',
        'icoon' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>'
    ],
    [
        'titel' => 'Projectmatig Werken',
        'beschrijving' => 'Samenwerken in Scrum-teams aan echte softwareprojecten en opdrachten.',
        'icoon' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>'
    ]
];

// Dynamische gegevens voor de toekomst/beroepen
$beroepen = [
    'Front-end Developer',
    'Back-end Developer',
    'Full-stack Developer',
    'Database Administrator',
    'Software Tester'
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informatie over de opleiding Software Development. Ontdek het vakkenpakket en de toekomstmogelijkheden.">
    <title>Opleiding Software Development</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header & Navigatie -->
    <header class="site-header">
        <div class="container nav-container">
            <a href="#hero" class="logo">
                <span class="logo-badge">ICT</span> Software Development
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#over">Over de Studie</a></li>
                    <li><a href="#vakken">Vakken</a></li>
                    <li><a href="#rooster">Studieopbouw</a></li>
                    <li><a href="#toekomst">Toekomst</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container hero-content">
            <h1>MBO Software Development</h1>
            <p>Bouw aan de digitale toekomst. Leer programmeren, databases ontwerpen en applicaties ontwikkelen voor de echte wereld.</p>
            <a href="#vakken" class="btn">Bekijk het programma</a>
        </div>
    </section>

    <!-- Over de opleiding -->
    <section id="over" class="container">
        <h2>Wat houdt de opleiding in?</h2>
        <div class="section-text-centered">
            <p>Tijdens de opleiding Software Development transformeer je van computergebruiker naar softwaremaker. Je leert hoe je logisch nadenkt, complexe problemen oplost en deze omzet in werkende software. Er wordt gewerkt met actuele programmeringstalen en methodieken die nauw aansluiten bij het bedrijfsleven.</p>
        </div>
    </section>

    <!-- Vakken / Skills (PHP Loop + CSS Grid) -->
    <section id="vakken" class="section-white-bordered">
        <div class="container">
            <h2>Onze Kernthema's</h2>
            <div class="grid-container">
                <?php foreach ($vakken as $vak): ?>
                    <article class="card">
                        <div class="card-icon">
                            <?php echo $vak['icoon']; ?>
                        </div>
                        <h3><?php echo htmlspecialchars($vak['titel']); ?></h3>
                        <p><?php echo htmlspecialchars($vak['beschrijving']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Studieopbouw / Rooster -->
    <section id="rooster" class="container">
        <h2>Studieopbouw Leerjaar 1</h2>
        <p class="section-subtitle">Een globaal overzicht van hoe een lesweek eruitziet op de opleiding.</p>
        
        <table class="rooster-table">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Focusthema</th>
                    <th>Vakken & Projecten</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Blok 1</strong></td>
                    <td>Basics of Coding</td>
                    <td>HTML5, CSS3, Basis Logica, Scrum-introductie</td>
                </tr>
                <tr>
                    <td><strong>Blok 2</strong></td>
                    <td>Dynamic Web</td>
                    <td>JavaScript, PHP Basis, Relationele Databases (MySQL)</td>
                </tr>
                <tr>
                    <td><strong>Blok 3</strong></td>
                    <td>Advanced Software</td>
                    <td>Object-Oriented Programming (OOP), API's, Git & GitHub</td>
                </tr>
                <tr>
                    <td><strong>Blok 4</strong></td>
                    <td>Meesterproef</td>
                    <td>Eindproject: Volledige webapplicatie bouwen van A tot Z</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Toekomstmogelijkheden -->
    <section id="toekomst" class="section-white-bordered">
        <div class="container">
            <h2>Na deze studie</h2>
            <p class="section-subtitle-max">Met een diploma Software Development kun je direct aan de slag op de arbeidsmarkt of doorstuderen op het HBO.</p>
            
            <ul class="beroepen-list">
                <?php foreach ($beroepen as $beroep): ?>
                    <li class="beroep-tag"><?php echo htmlspecialchars($beroep); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-content">
            <h3>Software Development</h3>
            <p>Opleidingspresentatie voor aanstaande studenten.</p>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> Opleiding Software Development | Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>

</body>
</html>