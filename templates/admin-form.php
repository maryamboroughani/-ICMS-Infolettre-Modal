<div class="infolettre-formulaire">
    <h2><?php echo get_admin_page_title(); ?></h2>
    <form method="post" action="">
        <?php wp_nonce_field('icms_modal_infolettre_save_settings', 'icms_modal_infolettre_nonce'); ?>

        <label for="infolettre-couleur-fond">Couleur de fond :</label>
        <input type="color" id="infolettre-couleur-fond" name="infolettre-couleur-fond" value="<?php echo esc_attr($settings->background_color); ?>"><br><br>

        <label for="infolettre-couleur-texte">Couleur :</label>
        <input type="color" id="infolettre-couleur-texte" name="infolettre-couleur-texte" value="<?php echo esc_attr($settings->text_color); ?>"><br><br>

        <label for="infolettre-titre">Titre  :</label>
        <input type="text" id="infolettre-titre" name="infolettre-titre" value="<?php echo esc_attr($settings->modal_title); ?>"><br><br>

        <label for="infolettre-intitule-nom">Intitulé 'Nom' :</label>
        <input type="text" id="infolettre-intitule-nom" name="infolettre-intitule-nom" value="<?php echo esc_attr($settings->name_label); ?>"><br><br>

        <label for="infolettre-intitule-courriel">Intitulé 'Courriel' :</label>
        <input type="text" id="infolettre-intitule-courriel" name="infolettre-intitule-courriel" value="<?php echo esc_attr($settings->email_label); ?>"><br><br>

        <label for="infolettre-intitule-suivant">Boutons 'Suivant' :</label>
        <input type="text" id="infolettre-intitule-suivant" name="infolettre-intitule-suivant" value="<?php echo esc_attr($settings->next_button_label); ?>"><br><br>

        <label for="infolettre-intitule-soumettre">Bouton 'Soumettre' :</label>
        <input type="text" id="infolettre-intitule-soumettre" name="infolettre-intitule-soumettre" value="<?php echo esc_attr($settings->submit_button_label); ?>"><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</div>
