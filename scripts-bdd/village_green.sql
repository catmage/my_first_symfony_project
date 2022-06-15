-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 oct. 2021 à 19:20
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `village_green`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Guitare'),
(2, 'Clavier'),
(3, 'Studio'),
(4, 'Sono'),
(5, 'Eclairage'),
(6, 'DJ'),
(7, 'Cases'),
(8, 'Accessoires'),
(9, 'Instruments à vent'),
(10, 'Batteries');

-- --------------------------------------------------------

--
-- Structure de la table `commercial_department`
--

DROP TABLE IF EXISTS `commercial_department`;
CREATE TABLE IF NOT EXISTS `commercial_department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `delivery_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `shipping_date` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `billing_date` datetime DEFAULT NULL,
  `order_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tax` decimal(7,2) DEFAULT NULL,
  `unit_price` decimal(7,2) NOT NULL,
  `payment_method` tinyint(1) NOT NULL,
  `quantity` int NOT NULL,
  `discount` decimal(7,2) DEFAULT NULL,
  `total_price` decimal(9,2) NOT NULL,
  `additional_discount` decimal(9,2) DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `orders_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_845CA2C14584665A` (`product_id`),
  KEY `IDX_845CA2C1CFFE9AD6` (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_wording` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL,
  `stock_alert` int NOT NULL,
  `long_wording` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subcategory_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD5DC6FE57` (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `short_wording`, `picture`, `reference`, `brand`, `price`, `stock`, `stock_alert`, `long_wording`, `subcategory_id`) VALUES
(1, 'SAS-75 Alto', 'Saxophone', '404544905849c8c8750479801403548cb5e65773.jpeg', '188679', 'Startone', '620.00', 24, 5, 'Info : Clé de Fa# aigu\r\nBascule\r\nRepose-pouce réglable\r\nCorps et clétage en laiton\r\nFinition: Vernis doré', 1),
(2, 'F310 Natural', 'guitare acoustique', '1d6a9f1a0a2ee7067be9b12526cdf641b95dbc85.jpeg', '14110', 'Yamaha', '133.99', 87, 5, 'Egalement disponible en électro-acoustique.\r\nLe modèle F310 présente une qualité étonnante dans cette gamme de prix. Le corps en épicéa et meranti délvre un son vivant, chaleureux et clair, dans la lignée de la fameuse gamme FG. Son corps aux dimensions réduites et son diapason intermédiaire feront le bonheur des plus jeunes.\r\nLa version amplifiée, FX310, est équipée d\'un préampli simple (volume, tonalité) qui ne nécessite pas de pile. Le son est surprenant de naturel et de chaleur acoustique, avec un excellent équilibre tonal entre les cordes. Un choix idéal pour les guitaristes souhaitant découvrir les charmes de la guitare électro-acoustique. \r\nTable: épicéa\r\nDos et éclisses: Meranti\r\nManche: Nato\r\nTouche: Palissandre\r\nChevalet: Palissandre\r\nProfondeur de caisse: 96-116mm \r\nDiapason: 636mm\r\nMécaniques: Chromées\r\nSystème électro-acoustique: micro piezo sous le sillet, préampli passif avec volume et tonalité\r\nCouleurs: natural, tobacco brown sunburst\r\nLes guitares acoustiques Yamaha sont des références autour du monde depuis plus de 35 ans, depuis la présentation des premières dreadnoughts FG au milieu des années 60. Des instruments qui se distinguaient déjà pour leur très haute qualité et un prix abordable. \r\nL\'évolution récente des FG continue à leur assurer une place à part dans le catalogue des guitares acoustiques Yamaha qui s\'est largement étoffé avec de nombreux modèles électro-acoustiques de grande qualité. Que ce soit avec les traditionnelles DW dreadnoughts, les FPX avec leur design folk, la gamme économique F, les instruments d\'études ou les larges series CJ/CJX Country Jumbos, tous les styles de jeu seront comblés. Le rapport qualité/prix est réellement superbe.', 2),
(3, 'C80', 'guitare classique', '762949c31249e1ad6f63d78679f0e96d145437c9.jpeg', '20966', 'Yamaha', '204.99', 76, 5, 'Un concentré de qualités\r\nLe modèle C80 présente un ensemble de qualités rares dans cette catégorie de prix : fabrication irréprochable, confort de jeu assuré et sonorité agréable et bien équilibrée. L\'utilisation de bois sélectionnés (épicéa, Nato, Palissandre) garantit une utilisation sereine durant de longues années. Le vernis brillant rehausse la beauté de l\'instrument, tout comme les mécaniques dorées. \r\n\r\nTable: épicéa\r\nDos et éclisses: Nato\r\nManche: Nato\r\nTouche: Palissandre\r\nChévalet: Palissandre\r\nProfondeur de caisse: 94-100mm\r\nLargeur sillet: 52mm\r\nDiapason: 650mm\r\nMécaniques: Doré (YTM06)\r\nColoris: Naturel\r\nFinition: Vernis Brillant', 3),
(4, 'RS420 Fired Red', 'guitare électrique', '2534fd20d7f5c94b8fe3d587bec2c957483abc77.jpeg', '305487', 'Yamaha', '575.99', 23, 5, ': Fabrication Indonésie\r\nConstruction set-in\r\nDiapason 628 mm (24 - 3/4“)\r\nManche nato\r\nProfil du manche slim\r\ntouche Palissandre\r\nradius 350mm (13 - 3/4“)\r\nFrettes medium\r\nCorps érable/nato\r\nBody Cut back only\r\nmecanique à bain d\'huile\r\nAccastillage nickel\r\nSillet / plastique, largeur / 43 mm\r\nchevalet Tune-O-Matic\r\nCordier stopbar\r\nPickguards Black 3-Plis\r\nMicros Alnico Humbuckers\r\nContrôles master volume/tonalité\r\nFonction dry-switch (push-pull)\r\nFinition de la table High Gloss', 4),
(5, 'Go : Piano', 'clavier arrangeur', 'ad080784a2ea2364ab193954e547de7b034b2c79.jpeg', '238197', 'Roland', '279.99', 65, 5, 'Vous avez toujours eu envie d\'apprendre le piano, mais vous ne possédez pas la place nécessaire ou le budget approprié ? Le GO:PIANO de Roland résout ces problèmes et vous permet de réaliser votre rêve. Très abordable, le GO:PIANO constitue une solution portable de haute qualité qui rend l\'apprentissage de l\'instrument amusant et facile. Il intègre des sons et un toucher authentiques dérivés des meilleurs pianos domestiques Roland, et sa compatibilité Bluetooth® vous permet de travailler avec des applis musicales éducatives depuis votre terminal mobile favori. Intégrant des haut-parleurs, des fonctionnalités d\'apprentissage et bien plus, le GO:PIANO constitue un parfait compagnon pour commencer l\'étude de l\'instrument.\r\n\r\n\r\nPoints forts du produits\r\n\r\n- Des performance de piano premium dans un instrument compact et abordable\r\n- Un clavier 61 touches de taille standard avec réponse au toucher authentique\r\n- Les fameux sons de piano Roland avec une polyphonie de 128 voix\r\n- Intègre également des sons de pianos électriques, orgues et autres pour explorer différents styles\r\n- Compatibilité audio/MIDI par Bluetooth pour la connexion à une tablette ou un smartphone\r\n- Haut-parleurs intégrés et prise casque pour jouer en toute occasion\r\n- Métronome, transposition et enregistrement pour la pratique quotidienne\r\n- Léger, facile à transporter, fonctionnement sur piles\r\n- Dimensions (L x P x H): 877 x 271 x 82 mm (sans pupitre)\r\n- Alimentation secteur fournie AC 100-240V 50-60 Hz 0.4A\r\n- Poids : 3.9 kg', 5),
(6, 'A-88 MK2', 'clavier maitre', '99178696ff678a44359a8f1ed0f99d55028335eb.jpeg', '312956', 'Roland', '949.99', 34, 5, 'Dernier arrivé dans la gamme fournie de contrôleurs MIDI professionnels Roland, le Roland A-88 MK2 est d’une jouabilité impressionnante et intègre des outils créatifs pour les musiciens et producteurs actuels. Notre fameux clavier à mécanisme de marteaux, des matériaux robustes, des fonctions modernes comme la connectivité USB-C, les contrôleurs rétro-éclairés et la future compatibilité MIDI 2.0, pour bénéficier des meilleures performances de sa catégorie.\r\nCaractéristiques :\r\n- 88 touches sensibles à la vélocité\r\n- Touches avec échappement et sensation ivoire\r\n- Construction compact\r\n- 8x pads\r\n- 2x commandes assignables\r\n- 8x boutons assignables\r\n- USB Type-C vers USB Type-C \r\n- USB Type-C vers USB Type-A\r\n- Connexion pour pédale de sustain\r\n- Connexion pour pédale d\'expression et sustain\r\n- Alimentation via USB\r\n- Consommation: 260 mA (via USB)\r\n- MIDI Out\r\n- USB de type B\r\n- Dimensions: 1429 x 274 x 119 mm\r\n- Poids: 16,3 kg\r\n- Couleur: Noir', 6),
(7, 'Genos', 'clavier arrangeur', '2ae4fc32f1bc5f30fd34acc34aa37091bbfe134c.jpeg', '255494', 'Yamaha', '3798.00', 12, 5, 'Infos : Caractéristiques techniques Yamaha Genos\r\n\r\nDimensions\r\nLargeur : 1,234 mm (48-9/16)\r\nHauteur : 138 mm (5-7/16)\r\nProfondeur : 456 mm (17-15/16)\r\nPoids : 13.0 kg (28 lb, 11 oz)\r\n\r\nInterface de contrôle\r\nNombre de touches : 76\r\nType : Organ (FSX), Initial Touch/Aftertouch\r\nRéponse du toucher : Normal, Easy1, Easy2, Soft1, Soft2, Hard1, Hard2\r\nJoystick : Oui\r\nPotentiomètre de contrôle : 6 Live Control knobs (Assignable)\r\nSliders : 9 Live Control sliders (Assignable), Cross Fader\r\nArt. Switches : 3\r\nEcran principal : TFT Color Wide VGA LCD, 800 x 480 pixels (9 inch), écran tactile\r\nEcran secondaire : OLED (Live Control view), 589 x 48 pixels\r\n\r\nSonorités\r\nMoteur Audio : AWM Stereo Sampling, AEM technology\r\nPolyphonie : 256 (max.) (128 for Preset Voice + 128 for Expansion Voice)\r\nNombre de sonorités : 1,652 + 58 Drum/SFX Kits\r\nSonorités améliorées : 10 Revo! Drums/SFX, 76 Ensemble, 390 Super Articulation!, 75 Super Articulation2!, 82 MegaVoice, 40 Sweet!, 81 Cool!, 160 Live!, 24 Organ Flutes!\r\n\r\nEffets\r\nReverb : 59 Preset + 3 User\r\nChorus : 107 Preset + 3 User\r\nDSP : Variation: 358 Preset (with VCM) + 3 User | Insertion 1-28: 358 Preset (with VCM) + 10 User\r\nMaster Compressor : 5 Preset + 5 User\r\nMaster EQ : 5 Preset + 2 User\r\nPart EQ : 28 Parts\r\nVocal Harmony: 54 | Synth Vocoder: 20\r\nNombre emplacement User : 60\r\nEffets vocaux (avec le micro) : Noise Gate, Compressor, 3 Band EQ | Vocal Effect: 23\r\n\r\nStyles\r\nNombre de preset : 550\r\nCatégorie : 491 Pro, 39 Session, 10 Free Play, 10 DJ\r\nFingering : Single Finger, Fingered, Fingered On Bass, Multi Finger, AI Fingered, Full Keyboard, AI Full Keyboard\r\nContrôles : INTRO x 3, MAIN VARIATION x 4, FILL x 4, BREAK, ENDING x 3\r\nOne Touch Setting (OTS) : 4 pour chacun des styles\r\nCompatibilité : Style File Format (SFF), Style File Format GE (SFF GE)\r\n\r\nMulti Pads\r\nNombre de banques Multi pads : 448 Banques x 4 Pads\r\nAudio Link : Oui\r\n\r\nMorceaux intégrés au Yamaha Genos\r\nNombre de presets : 9 Demo Songs, 11 Preset Songs\r\nNombre de pistes : 16\r\nFonctions d\'enregistrement : Quick Recording, Multi Track Recording, Step Recording\r\nFormat Playback : SMF (Format 0, Format 1) , XF\r\nFormat enregistrement : SMF (Format 0), approx. 300 KB per Song\r\n\r\nFonctions\r\nPlayback : WAV (44.1 kHz, 16 bit, stereo), MP3 (44.1 kHz, 64/96/128/256/320 kbps, stereo)\r\nRecording : WAV (44.1 kHz, 16 bit, stereo), approx. 0.8 GB (80 minutes) per Song\r\nTime Stretch : Oui\r\nPitch Shift : Oui\r\nVocal Cancel : Oui\r\nHarmony/Echo : Oui\r\nArpeggio : Oui\r\nPanel Sustain : Oui\r\nMono/Poly : Oui\r\nStyle Creator : Oui\r\nOTS Information : Oui\r\nMulti Pad Creator : Oui\r\nAffichage partition : Oui\r\nAffichage des paroles : Oui\r\nMetronome : Oui\r\nTempo Range : 5 – 500, Tap Tempo\r\nTranspose : -12 – 0 – +12\r\nAccordage : 414.8 – 440.0 – 466.8 Hz (approx. 0.2 Hz increments)\r\nBouton Octave : Oui\r\nGammes : 9 Types\r\nDirect Access : Oui\r\n\r\nConnectiques et mémoires\r\nMémoire interne : Oui(approx. 58 GB)\r\nMémoire externe : USB flash drive\r\nPrise casque : Standard stereo phone jack (PHONES)\r\nPédales : 1 (SUSTAIN), 2 (ART.1), 3 (VOLUME), Fonction assignable\r\nMicrophone : Oui (Combo Jack) , Prise Phantom (+48V) disponible\r\nMIDI : MIDI A (IN/OUT) , MIDI B (IN/OUT)\r\nAUX IN : L/L+R, R\r\nDIGITAL OUT : Yes (coaxial)\r\nLINE OUT : MAIN (L/L+R, R) , SUB (1, 2) , SUB (3, 4 / AUX OUT)\r\nUSB TO DEVICE : Oui (x 3)\r\nUSB TO HOST : Oui', 5),
(8, 'Stage Custom Birch Natural Wood', 'batterie acoustique', '9e155679f7294ff9576d17a90c0a9eb241277d3b.jpeg', '184330', 'Yamaha', '1025.99', 14, 5, 'Infos : Configuration New standard : \r\n- Grosse caisse 22\"x17\"\r\n- Tom 10\"x07\"\r\n- Tom 12\"x08\"\r\n- Tom basse 16\"x15\"\r\n- Caisse claire en bois 14\"x5,5\"\r\n- Support de tom TH945C\r\n\r\n- Cerclage acier \r\n- Triple Flange Hoop de 1.5mm d’épaisseur, \r\n- Coquilles chromes\r\n- Fûts 100% bouleau\r\n- Peau de frappe et résonnance Remo UT transparente \r\n- Peau de résonnance grosse caisse Remo UT Ebony P3\r\n- Peau de frappe grosse caisse Remo UT Clear P3\r\n\r\nPack Hardware HW680W:\r\n\r\n2 pieds perche CS665A\r\n1 pédale hi-hat HS660\r\n1 pied de caisse claire SS660\r\n1 pédale de grosse caisse FP7219', 7),
(9, 'DTX6K-X', 'batterie électronique', '96c43de0914c781046c5482f6d020596f9fc0f25.jpeg', '341155', 'Yamaha', '988.00', 25, 5, 'Le kit contient:\r\n• Nouveau module DTX-PRO\r\n• Caisse claire XP80 3 zones\r\n• 3 x Pads de tom TP70\r\n• Pad de grosse caisse KP65\r\n• Pad de Charleston 10“\r\n• Pédale de contrôle de charley HH65\r\n• Cymbale crash 10“\r\n• Cymbale Ride PCY135 3 zones\r\n• Rack DTX6K\r\n\r\nLa Yamaha DTX6K-X fait partie d\'une nouvelle ère de batteries électroniques. Utilisant des sons échantillonnés de dernière génération enregistrés dans les meilleurs et plus célèbre studios européens, ils offrent un nouveau niveau de réalisme en plus des meilleures caractéristiques des précédents modèles de DTX.', 8),
(10, 'X1832USB', 'console de mixage', '33ee5f30ee684c04ed38c08a013ad11a1e8f842e.jpeg', '80807', 'Behringer', '221.00', 36, 5, 'Voici la nouvelle génération des célèbres consoles XENYX. Pour fêter ses 20 ans d\'existence, Behringer n\'a pas lésiné sur les moyens : entrées rivalisant avec les racks dédiés haut de gamme, nouveau circuit ULN (Ultra-Low-Noise) offrant un excellent rapport signal/bruit, nouveau circuit d\'égalisation British EQs ultra-réactif et qui sait rester musical même dans les extrêmes.\r\nAjoutez à tout ceci le savoir-faire et la robustesse Behringer et vous obtenez la console dont vous rêviez.\r\n\r\nConsole analogique ULN (Ultra Low-Noise).\r\n\r\n- Port USB intégré\r\n- 1 compresseur par tranche éditable.\r\n- 6 préamplis micro XENYX de dernière génération.\r\n- Egaliseur 3 bandes “British EQ“ néo-classeeique.\r\n- Processeur d\'effets stéréo 24 bit, 100 presets.\r\n- Interface audio USB incluse, Logiciels d\'enregistrement et d\'édition audio en téléchargement gratuit.\r\n- Egaliseur graphique stéréo 9 bandes.\r\n- Système révolutionnaire FBQ : détection de Larsen identifiant instantanément les fréquences d\'accrochage.\r\n- Effet stéréo 3D surround XPQ.\r\n- Fonction éliminateur de voix supprimant le chant des enregistrements.\r\n- Canaux mono avec insert pour les périphériques.\r\n- 3 départs auxiliaires par canal : 1 pré-fader pour le monitoring, 1 commutable pré/post-fader pour le monitoring et les effets, 1 post-fader pour le processeur interne ou effet externe.\r\n- LED de crêtes, touches Mute et de routing vers le Main Mix et les sous-groupes, fonctions solo et PFL par canal.\r\n- 2 sous-groupes avec sorties séparées et 2 retours auxiliaires stéréo.\r\n- Sorties Main Mix symétriques sur jacks et XLR plaqués or, sortie Control Room séparée, sortie casque et sortie magnéto.\r\n- Sorties Control Room et casque avec matrice de sélection des sources, entrées magnéto assignables aux sorties Main Mix ou Control Room et casque.', 9),
(11, 'B115D', 'enceinte de façade active', '82ef690d17b5f62961a9e97d1d4ffbcd7ea626ac.jpeg', '181760', 'Behringer', '221.99', 24, 5, '- Enceinte sono 2 voies, 1000 W, amplification Classe-D, ultra-compacte et légère\r\n- Woofer 15\" à grand débattement, très puissant, délivre des basses profondes\r\n- Tweeter 1,35\" à moteur de compression en aluminium, pour une restitution optimale des aigus\r\n- Mixeur 2 canaux intégré avec entrées micro/ligne sur combo XLR/jack 6,35 mm, contrôle du volume et affichage LED individuels\r\n- EQ 2 bandes intégré\r\n- Compatible avec l’option sans-fil BEHRINGER ULM (pas incluse)\r\n- Dispersion très large\r\n- Peut être utilisé comme retour de scène\r\n- Sortie ligne sur XLR, pour brancher plusieurs enceintes\r\n- Châssis de forme trapézoïdale, pour des positionnements variés\r\n- Puits pour installation sur trépied\r\n- Poignées de transport ergonomiques\r\n- Dimensions : 713 x 427 x 313 mm\r\n- 17,5 kg\r\n- Conçu par BEHRINGER Allemagne', 11),
(12, 'CBR15', 'enceinte de façade passive', '251d92da0b0574cb018daa9e751940364ca9a912.jpeg', '189624', 'Yamaha', '338.99', 65, 5, ': • Enceintes 2 voies Bass-Reflex\r\n• Jusqu’à 1000W (CBR15)\r\n• Transducteurs exclusifs\r\n• Circuit de protection performant\r\n• Coque plastique compacte et résistante\r\n• Guide d’ondes large dispersion 90°x60°\r\n• Conception symétrique pour retours (CBR12 et CBR15)\r\n• Poignées ergonomiques\r\n• Connectique speakON et Jack 6,35\r\n• 3 points d’accroche M8 (2 sur CBR10)\r\n• Housses optionnelles', 11),
(13, 'FT Case T300', 'flight case', 'f4270ee30075a35531b404c86d012b361b19265c.jpeg', '341488', 'Power Flightcase', '299.99', 45, 5, ': Flightcase professionnel de transport type malle avec 2 compartiments. \r\n\r\nCarcatéristiques techniques : Multiplis de 9mm \r\n- Coins à boule métal \r\n- Renforts d’angle avec cornières profilées alu \r\n- Ouverture par le dessus avec charnière \r\n- Elingue de retenue du capot \r\n- Coupelles sur capot pour empiler un ou plusieurs flightcases \r\n- 4 poignées de transport rabattables \r\n- 2 systèmes de fermeture papillon \r\n- 4 roulettes pivotantes \r\n- 2 compartiments de 325 x 400 mm \r\n- Finition : noir et silver\r\n\r\n- Dimensions intérieures (L x l x h) : 660 x 400 x 420mm\r\n- Dimensions extérieures (L x l x h) : 684 x 424 x 520mm\r\n- Poids : 24,4Kgs', 10);

-- --------------------------------------------------------

--
-- Structure de la table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DDCA44812469DE2` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `category_id`) VALUES
(1, 'Saxophone', 9),
(2, 'Guitare acoustique', 1),
(3, 'Guitare classique', 1),
(4, 'Guitare électrique', 1),
(5, 'Clavier arrangeur', 2),
(6, 'Clavier maitre', 2),
(7, 'Batterie acoustique', 10),
(8, 'Batterie electronique', 10),
(9, 'Console de mixage', 6),
(10, 'Flight case', 7),
(11, 'Enceinte', 4),
(12, 'Pupitre', 8),
(13, 'Soubassophone', 9),
(14, 'Tuba', 9),
(15, 'Clarinette', 9),
(16, 'Projecteur', 5),
(17, 'Ukulélé', 1);

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `society` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `supplier_product`
--

DROP TABLE IF EXISTS `supplier_product`;
CREATE TABLE IF NOT EXISTS `supplier_product` (
  `supplier_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`supplier_id`,`product_id`),
  KEY `IDX_522F70B22ADD6D8C` (`supplier_id`),
  KEY `IDX_522F70B24584665A` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_product`
--

DROP TABLE IF EXISTS `team_product`;
CREATE TABLE IF NOT EXISTS `team_product` (
  `team_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`team_id`,`product_id`),
  KEY `IDX_2C33759A296CD8AE` (`team_id`),
  KEY `IDX_2C33759A4584665A` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_subcategory`
--

DROP TABLE IF EXISTS `team_subcategory`;
CREATE TABLE IF NOT EXISTS `team_subcategory` (
  `team_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  PRIMARY KEY (`team_id`,`subcategory_id`),
  KEY `IDX_E6EC4B05296CD8AE` (`team_id`),
  KEY `IDX_E6EC4B055DC6FE57` (`subcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_supplier`
--

DROP TABLE IF EXISTS `team_supplier`;
CREATE TABLE IF NOT EXISTS `team_supplier` (
  `team_id` int NOT NULL,
  `supplier_id` int NOT NULL,
  PRIMARY KEY (`team_id`,`supplier_id`),
  KEY `IDX_2368B000296CD8AE` (`team_id`),
  KEY `IDX_2368B0002ADD6D8C` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `society` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercial_department_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D6497E7A525A` (`commercial_department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`, `address`, `city`, `zipcode`, `country`, `phone`, `type`, `society`, `commercial_department_id`) VALUES
(1, 'test@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VEZEUnBIdzluelNMVUY4eQ$dHayzs1M6Pfe/edRoOronS/XNnxafaR3KafeeYK7hCg', 'Prenom', 'Nom', '12 rue de je ne sais où', 'Paris', '75000', 'France', '0650505021', NULL, NULL, NULL),
(2, 'nouveautest@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$UUczOHpRUzFKbGliZjBJWQ$+K7PvlUEZs11Sex/wqnH5/D7FrUEm5BZiew0Wto5BB8', 'Nouveau', 'Test', '45 rue du test', 'Amiens', '80000', 'France', '0652525254', NULL, NULL, NULL),
(3, 'bonjourtest@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$dnIwd1VhNktJcGFmTHFjSg$w4B7XpUgoXIBWvtmTxdBQ81NiAiuxVRLXdUVFGPw+uU', 'Nouveau', 'Test', '45 rue du test', 'Amiens', '80000', 'France', '0652525254', NULL, NULL, NULL),
(4, 'aurevirrtest@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VHl1N2ppdGpKai4ub29qMQ$rkx6DF6zBk34WrSl7LYxxDlhLfyOQlA0huefsGZ1oOE', 'Nouveau', 'Test', '45 rue du test', 'Amiens', '80000', 'France', '0652525254', NULL, NULL, NULL),
(5, 'nimenhao@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$Lm5VWjlMTVdXVW9XQzV1VA$1N1BLBLf1i1vp/yg9xvOoZmNguL3DyvpV8LEjNvZ2QM', 'nimen', 'hao', '11 rue de rien', 'Amiens', '80000', 'France', '040201045', NULL, NULL, NULL),
(6, 'yoyo@yoyo.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$QW94Yk1uSkxNQUw2NXBmRQ$3vi1rfPhzVu0qBnn7/NFxkZvyZu8pC3LQiE5LwE7W8I', 'Bonjour', 'Bonjour', '18 rue de bonjour', 'Bonjour', '90000', 'France', '0987656433', NULL, NULL, NULL),
(7, 'admin@villagegreen.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$cW5yLjd6cnB3dldkQWRZVQ$u0/oQwv1Jwn8UgPzbzFR0VgAiASPfKdA/akTXGEFWU0', 'Christophe', 'Goldson', '10 rue de la Somme', 'Amiens', '80000', 'France', '0645236754', NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C14584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_845CA2C1CFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD5DC6FE57` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Contraintes pour la table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `FK_DDCA44812469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `supplier_product`
--
ALTER TABLE `supplier_product`
  ADD CONSTRAINT `FK_522F70B22ADD6D8C` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_522F70B24584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `team_product`
--
ALTER TABLE `team_product`
  ADD CONSTRAINT `FK_2C33759A296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2C33759A4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `team_subcategory`
--
ALTER TABLE `team_subcategory`
  ADD CONSTRAINT `FK_E6EC4B05296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E6EC4B055DC6FE57` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `team_supplier`
--
ALTER TABLE `team_supplier`
  ADD CONSTRAINT `FK_2368B000296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2368B0002ADD6D8C` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6497E7A525A` FOREIGN KEY (`commercial_department_id`) REFERENCES `commercial_department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
