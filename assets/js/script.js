document.addEventListener('DOMContentLoaded', function () {
    // Function to handle panel navigation
    function showPanel(panelId) {
        document.querySelectorAll('#infolettre-modal-form > div').forEach(function (div) {
            div.style.display = 'none';
        });
        document.getElementById(panelId).style.display = 'block';
    }

    // Handle 'Suivant' button clicks
    const btnSuivant1 = document.getElementById('btn-suivant-1');
    if (btnSuivant1) {
        btnSuivant1.addEventListener('click', function () {
            showPanel('panneau-2');
        });
    }

    const btnSuivant2 = document.getElementById('btn-suivant-2');
    if (btnSuivant2) {
        btnSuivant2.addEventListener('click', function () {
            showPanel('panneau-3');
        });
    }
});
