const animatedText = document.querySelector('.main1_animatedText');

const texts = [
    "Aspiring Web Developer (Frontend)",
    "Video Editor and Content Creator",
    "LIVE Streamer",
    "Aspiring Filmmaker",
    "Musician and Producer",
    "Aspiring Podcaster",
    "Trained Electronics Technician"
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
        title: "Small Browser-Minigame - Light Logic Game",
        description: "I've been working on a small browser game where the goal is to test your skills. (Due to some changes in the file paths, there may be errors. These will be fixed in the future.)",
        link: "#", // Link zum Projekt
        image: "#" // Bild des Projekts
    },
    {
        title: "Active YouTube Kanal",
        description: "I’m including this as a project because it allows me to enhance my video editing skills. I’m using this opportunity to explore new features and improve my editing techniques.",
        link: "#",
        image: "#"
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