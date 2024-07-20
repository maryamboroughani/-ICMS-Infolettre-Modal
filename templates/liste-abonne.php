<div class="wrapper">
    <h2>Liste des Abonnés</h2>

    <?php if (!empty($subscribers)) : ?>
        <table class="sub">
            <thead>
                <tr>
                    <th class="manage-column column-columnname">Nom</th>
                    <th class="manage-column column-columnname">Courriel</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscribers as $subscriber) : ?>
                    <tr>
                        <td class="column-columnname"><?php echo esc_html($subscriber->nom); ?></td>
                        <td class="column-columnname"><?php echo esc_html($subscriber->courriel); ?></td>
                      
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Aucun abonné trouvé.</p>
    <?php endif; ?>
</div>
