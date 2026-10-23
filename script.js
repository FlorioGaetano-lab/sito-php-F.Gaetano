
document.addEventListener('DOMContentLoaded', function () {
    const ricerca = document.getElementById('ricerca');
    const schede = document.querySelectorAll('.exercise-card');
    const messaggio = document.getElementById('nessun-risultato');

    if (!ricerca) {
        return;
    }

    ricerca.addEventListener('input', function () {
        const testo = ricerca.value.trim().toLowerCase();
        let visibili = 0;

        schede.forEach(function (scheda) {
            const nome = scheda.dataset.nome.toLowerCase();
            const corrisponde = nome.includes(testo);

            scheda.hidden = !corrisponde;

            if (corrisponde) {
                visibili++;
            }
        });

        if (messaggio) {
            messaggio.hidden = visibili !== 0;
        }
    });
});

