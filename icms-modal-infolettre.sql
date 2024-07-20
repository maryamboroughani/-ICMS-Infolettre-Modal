-- Table structure for table `icms_modal_infolettre_settings`
CREATE TABLE IF NOT EXISTS `icms_modal_infolettre_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `background_color` varchar(255) NOT NULL DEFAULT '#ffffff',
  `text_color` varchar(255) NOT NULL DEFAULT '#000000',
  `modal_title` varchar(255) NOT NULL DEFAULT 'Inscrivez-vous à notre infolettre !',
  `name_label` varchar(255) NOT NULL DEFAULT 'Nom',
  `email_label` varchar(255) NOT NULL DEFAULT 'Courriel',
  `next_button_label` varchar(255) NOT NULL DEFAULT 'Suivant',
  `submit_button_label` varchar(255) NOT NULL DEFAULT 'Soumettre',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- Table structure for table `icms_modal_infolettre_subscribers`
CREATE TABLE IF NOT EXISTS `icms_modal_infolettre_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
