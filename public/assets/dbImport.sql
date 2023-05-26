SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;


INSERT INTO `categorie` (`id`, `name`) VALUES
(1,	'GESTION DES EMOTIONS'),
(2,	'TRAVERSER UNE ETAPE DE VIE'),
(3,	'AFFIRMATION DE SOI');

INSERT INTO `data_text` (`id`, `home_pres`, `text_pres`, `home_values`, `tarifs_title`, `tarifs_text1`, `tarifs_text2`, `tarifs_text3`, `tarifs_text4`, `avis_title`, `avis_text`, `new_avis_title`, `new_avis_text`, `rdv_title`, `rdv_text1`, `rdv_text2`, `rdv_text3`) VALUES
(1,	'Qui-suis-je ?',	'Pouvoir se tourner vers autrui afin de le guider dans la découverte de ses trésors enfouis sous la garde de son inconscient est une récompense : résiliences, transformations, joies, petits pas et grands changements deviennent vos victoires. Il me suffit de voir votre sourire, entendre votre soulagement pour ressentir cette émotion, à nulle autre pareille, du travail accompli sous mes yeux. Il y a du merveilleux dans l’être humain.',	'Valeurs',	'Tarifs',	'Tarifs classique',	'Tarif étudiant',	'Forfait',	'Précision forfait',	'Avis',	'Consultez les différents avis',	'Donnez votre avis',	'Ci-dessous',	'Rendez-vous',	'Prennez rendez-vous',	'Adresse',	'Autre');

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230514121015',	'2023-05-16 15:23:31',	90),
('DoctrineMigrations\\Version20230514130110',	'2023-05-16 15:23:31',	9),
('DoctrineMigrations\\Version20230514130448',	'2023-05-16 15:23:31',	24),
('DoctrineMigrations\\Version20230514151113',	'2023-05-16 15:23:31',	54),
('DoctrineMigrations\\Version20230514162319',	'2023-05-16 15:23:31',	1),
('DoctrineMigrations\\Version20230514163848',	'2023-05-16 15:23:31',	2);

INSERT INTO `skill` (`id`, `name`, `categorie_id`) VALUES
(1,	'Estime de soi, confiance en soi, timidité, complexes',	1),
(2,	'Peurs, anxiété, stress',	1),
(3,	'Agressivité, colère, nervosité, hypersensibilité',	1),
(4,	'Prise de parole en Public',	1),
(5,	'Dépasser ses blocages, ',	1),
(6,	'Préparation aux examens, aux entretiens professionnels, aux rencontres importantes',	1),
(7,	'Améliorer sa créativité, ou toute autre ressource nécessaire',	1),
(8,	'Divorce, séparation, deuil',	2),
(9,	'Changement familial',	2),
(10,	'Changement professionnel',	2),
(11,	'Tout type de changement',	2),
(12,	'Procrastination',	2),
(13,	'Savoir et pouvoir dire stop fermement',	3),
(14,	'Prendre soin de soi',	3),
(15,	'Syndrome de l’imposture',	3);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `nom`, `prenom`) VALUES
(1,	'admin@gmail.com',	'$2y$13$/M7q4WJgUHD.IcLxAkFVtOeiTnUsHT99oyyj0CSFXMD5aED8rd5Qq',	'[]',	'Valette',	'Françoise');
