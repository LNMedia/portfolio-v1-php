//Context-Menü deaktivieren
//Deactivate Context-Menu
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
});
const langbutton = document.getElementById("lang");
//langbutton.addEventListener("click", function() {
//   window.location.href = "/language/en/";
//})

function toggleMenu() {
    const navButtonMobile = document.getElementById("navbutton_mobile");
    const navMobile = document.getElementById("mobile_nav");
    
    navMobile.classList.toggle('open'); // Menü umschalten
    navButtonMobile.classList.toggle('openButton'); // Button-Animation umschalten
}

document.addEventListener('click', function(event) {
    const navButtonMobile = document.getElementById("navbutton_mobile");
    const navMobile = document.getElementById("mobile_nav");
    
    // Prüfen, ob das Ziel des Klicks nicht das Menü oder der Button ist
    if (!navMobile.contains(event.target) && !navButtonMobile.contains(event.target)) {
        navMobile.classList.remove('open'); // Menü schließen
        navButtonMobile.classList.remove('openButton'); // Button zurücksetzen
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var langLink = document.getElementById("lang");

    // Eventlistener für das Klicken auf das Bild
    langLink.addEventListener("click", function(event) {
        event.preventDefault();  // Verhindert das Standardverhalten des Links

        // Die aktuelle URL abrufen
        var currentUrl = window.location.href;

        // Wenn die URL "/de/" enthält, ersetze es durch "/en/"
        if (currentUrl.includes("/de")) {
            var newUrl = currentUrl.replace("/de", "/en");
            window.location.href = newUrl;
        }
        // Wenn die URL "/en/" enthält, ersetze es durch "/de/" (optional, falls du einen Umschalter möchtest)
        else if (currentUrl.includes("/en")) {
            var newUrl = currentUrl.replace("/en", "/de");
            window.location.href = newUrl;  // Neue URL aufrufen
        }
    });
});