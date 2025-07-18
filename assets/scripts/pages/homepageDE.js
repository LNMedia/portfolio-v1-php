const animatedText = document.querySelector('.main1_animatedText');

const texts = [
    "angehender Webentwickler (Frontend)",
    "Video Editor und Content Creator",
    "LIVE Streamer",
    "angehender Filmemacher",
    "Musiker und Produzent",
    "angehender Podcaster",
    "gelernter Elektroniker"
];

let currentIndex = 0;
let currentText = '';
let isDeleting = false;
let speed = 60;
let delay = 1000;

function type() {
    const fullText = texts[currentIndex];

    // Schreib- oder Löschprozess
    if (isDeleting) {
        currentText = fullText.substring(0, currentText.length - 1); // Löschen
    } else {
        currentText = fullText.substring(0, currentText.length + 1); // Schreiben
    }

    // Text mit Cursor anzeigen
    animatedText.textContent = '> ' + currentText + '_';

    // Überprüfe, ob der vollständige Text geschrieben wurde
    if (!isDeleting && currentText === fullText) {
        // Warte, bevor das Löschen beginnt
        setTimeout(() => {
            isDeleting = true;
            type(); // Fortsetzen nach dem Delay
        }, delay);
        return;
    }
    
    // Überprüfe, ob der vollständige Text gelöscht wurde
    if (isDeleting && currentText === '') {
        // Starte den nächsten Text, wenn der aktuelle gelöscht ist
        isDeleting = false;
        currentIndex = (currentIndex + 1) % texts.length; // Nächster Text
    }

    // Bestimme die Geschwindigkeit je nachdem, ob gelöscht oder geschrieben wird
    const typingSpeed = isDeleting ? speed / 2 : speed;
    setTimeout(type, typingSpeed); // Timer für das Schreiben/Löschen
}

// Animation automatisch beim Laden der Seite starten
document.addEventListener('DOMContentLoaded', type);



function smoothScrollTo(targetId) {
    const target = document.getElementById(targetId);
    if (!target) return;

    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - 100; // 100px vom oberen Bildschirmrand abziehen
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1000; // Dauer der Animation in Millisekunden
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1); // Normalisierung des Fortschritts

        // Quadratische Ease-In-Out-Kurve
        const ease = progress < 0.5 
            ? 2 * progress * progress 
            : -1 + (4 - 2 * progress) * progress;

        window.scrollTo(0, startPosition + distance * ease);

        if (timeElapsed < duration) {
            requestAnimationFrame(animation); // Animation fortsetzen
        }
    }

    requestAnimationFrame(animation); // Animation starten
}

function navigateToPage(page) {
    window.location.href = page; // Wechselt zur angegebenen Datei
}


const projects = [
    {
        title: "Ein kleines Browser-Minigame - Light Logic Game",
        description: "Hier habe ich versucht ein kleines Browsergame zu programmieren, bei dem es darauf ankommt sein Geschick zu beweisen. (Durch einige Änderungen an den Dateipfaden kann es zu Fehlern kommen. Diese werden in Zukunft noch behoben)",
        link: "https://server.areimann.de/projects/games/projekte/001.light-logic-game/", // Link zum Projekt
        image: "https://server.areimann.de/projects/games/projekte/001.light-logic-game/assets/images/logo.png" // Bild des Projekts
    },
    {
        title: "Aktiver YouTube Kanal",
        description: "Ich würde dies als Projekt mit aufnehmen, da ich hier meine Videoschnitt Skills aufbessere und mit neuen Funktionen versuche meine Fähigkeiten im Schnitt zu verbessern.",
        link: "https://youtube.com/@apixoffiziell",
        image: "https://server.areimann.de/images/areimann.de/icons/logos/youtube.png"
    },
    // Weitere Projekte können hier hinzugefügt werden
];

// Funktion zum Rendern der Projekte
function renderProjects() {
    const container = document.getElementById('projects-container');
    container.innerHTML = ''; // Vorherige Inhalte löschen

    projects.forEach(project => {
        const projectDiv = document.createElement('div');
        projectDiv.classList.add('project');

        projectDiv.innerHTML = `
            <div class="project-content">
                <img src="${project.image}" alt="${project.title}" class="project-image">
                <div class="project-text">
                    <h3>${project.title}</h3>
                    <p>${project.description}</p>
                    <a href="${project.link}" target="_blank">Mehr erfahren</a>
                </div>
            </div>
        `;
        
        container.appendChild(projectDiv);
    });
}
document.addEventListener('DOMContentLoaded', renderProjects);