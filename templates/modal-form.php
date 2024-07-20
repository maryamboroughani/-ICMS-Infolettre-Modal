<div id="infolettreModal" class="modal">
    <div class="infolettre-formulaire">
        <h2>Inscrivez-vous à notre infolettre !</h2>
        <form id="infolettre-modal-form" method="post">
            <div id="panneau-1">
                <label for="infolettre-nom">Nom :</label>
                <input type="text" id="infolettre-nom" name="nom" required>
                <button type="button" id="btn-suivant-1">Suivant</button>
            </div>
            <div id="panneau-2" style="display: none;">
                <label for="infolettre-courriel">Courriel :</label>
                <input type="email" id="infolettre-courriel" name="courriel" required>
                <button type="button" id="btn-suivant-2">Suivant</button>
            </div>
            <div id="panneau-3" style="display: none;">
                <button type="submit" name="infolettre_modal_submit">Soumettre</button>
            </div>
        </form>
    </div>
</div>
