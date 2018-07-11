// Zowel na laden pagina als na wijzigen breedte moet de functie aangeroepen worden
window.onresize = show_width_and_articles;
window.onload = show_width_and_articles;

function show_width_and_articles() {

    // Breedte uitlezen
    let width = window.innerWidth;

    // Breedte op het scherm zetten
    document.getElementById("count").innerHTML = width;

    // AJAX actie om $_SESSION['articles_per_page'] aan te passen en in beeld te brengen
    let request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var aantal = this.responseText;
            var divjes = '';
            for (var i = 0 ; i < aantal ; i++) {
                divjes += '<div>PLAATJE</div>';
            }
            document.getElementById("articles").innerHTML = divjes;
        }
    }
    request.open("GET","process.php?width=" + width,true);
    request.send(width);
};

