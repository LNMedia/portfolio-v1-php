//Context-Menü deaktivieren
//Deactivate Context-Menu
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
});

function langRedirect() {
        var systemsprache = navigator.language || navigator.userLanguage;
        var sprache;
        
        if (systemsprache.startsWith('de')) {
            sprache = 'de';
        } else {
            sprache = 'en';
        }
            window.location.href = '/archive/demos/portfolio-v1/lang/' + sprache;
            }

langRedirect()