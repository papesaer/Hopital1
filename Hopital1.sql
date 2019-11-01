-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 01 nov. 2019 à 04:59
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Hopital1`
--

-- --------------------------------------------------------

--
-- Structure de la table `Inscrits`
--

CREATE TABLE `Inscrits` (
  `id_inscrit` int(11) NOT NULL,
  `Nom_inscrit` varchar(50) NOT NULL,
  `prenom_inscrit` varchar(50) NOT NULL,
  `Statut` varchar(50) NOT NULL,
  `Logine` varchar(50) NOT NULL,
  `Mot_pass` varchar(50) NOT NULL,
  `Domaine` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Inscrits`
--

INSERT INTO `Inscrits` (`id_inscrit`, `Nom_inscrit`, `prenom_inscrit`, `Statut`, `Logine`, `Mot_pass`, `Domaine`, `active`, `level`) VALUES
(116, 'Md Dia', 'Maimouna', 'SECRETAIRE', 'HEMA1', 'papepol1', 'HEMATOLOGIE', 1, 1),
(117, 'Docteur Seck', 'pape', 'MEDECIN', 'HEMA2', 'papepol12', 'HEMATOLOGIE', 1, 2),
(119, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(120, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(121, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(122, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(123, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(124, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(125, 'Ka', 'pape momar', '', '', '', 'RIMESITHERAPIE', 0, 0),
(126, 'Md DIOP', 'Diol', 'SECRETAIRE', 'RHUM1', 'papepol1', 'RHUMATOLOGIE', 2, 3),
(127, 'Mr Thiam', 'Tamba', 'MEDECINE', 'RHUM2', 'papepol123', 'RHUMATOLOGIE', 2, 4),
(128, 'Docteur Mar', 'Zul', 'MEDECIN', 'DODO1', 'papepol1', 'DODONTOLOGIE', 3, 5),
(129, 'Md Tall', 'Zora', 'SECRETAIRE', 'DODO2', 'papepol123', 'DODONTOLOGIE', 3, 6),
(130, '', '', '', '', '', '', 0, 0),
(131, '', '', '', '', '', '', 0, 0),
(132, '', '', '', '', '', '', 0, 0),
(133, '', '', '', '', '', '', 0, 0),
(136, 'DIOP', 'pape', 'DOCTEUR', 'RHU', 'pwoqpeowq', 'RIMESITHERAPIE', 0, 0),
(137, 'DIOP', 'pape', 'DOCTEUR', 'RHU', 'pwoqpeowq', 'RIMESITHERAPIE', 0, 0),
(138, 'DIOP', 'pape', 'DOCTEUR', 'RHU', 'pwoqpeowq', 'RIMESITHERAPIE', 0, 0),
(139, 'DIOP', 'pape', 'DOCTEUR', 'RHU', 'pwoqpeowq', 'RIMESITHERAPIE', 0, 0),
(140, 'DIOP', 'pape', 'DOCTEUR', 'resw', 'hsags', 'RIMESITHERAPIE', 0, 0),
(141, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(142, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(143, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(144, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(145, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(146, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(147, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(148, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(149, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(150, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(151, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(152, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(153, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(154, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(155, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(156, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(157, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(158, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(159, 'diop', 'ppas', '', '', '', 'HEMATOLOGIE', 0, 0),
(160, 'diop', 'ppas', '', '', '', 'HEMATOLOGIE', 0, 0),
(161, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(162, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(163, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(164, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(165, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(166, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(167, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(168, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(169, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(170, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(171, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(172, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(173, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(174, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(175, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(176, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(177, 'Medecin', 'Docteur Di', '', '', '', 'RIMESITHERAPIE', 0, 0),
(178, 'par', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(179, 'par', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(180, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(181, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(182, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(183, 'poura', 'poura', '', '', '', 'poura', 0, 0),
(184, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(185, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(186, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(187, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(188, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(189, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(190, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(191, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(192, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(193, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(194, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(195, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(196, 'DIOP', 'SAER', '', '', '', 'RIMESITHERAPIE', 0, 0),
(197, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(198, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(199, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(200, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(201, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(202, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(203, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(204, 'seck', 'pape saer', '', '', '', 'dodonto', 0, 0),
(205, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(206, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(207, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(208, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(209, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(210, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(211, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(212, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(213, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(214, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(215, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(216, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(217, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(218, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(219, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(220, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(221, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(222, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(223, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(224, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(225, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(226, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(227, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(228, 'erwqtet', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(229, 'erwqtet', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(230, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(231, 'erwqtet', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(232, 'erwqtet', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(233, 'erwqtet', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(234, 'Dr Sarr', 'Bamba', '', '', '', 'HEMATOLOGIE', 0, 0),
(235, 'Dr Sarr', 'Bamba', '', '', '', 'HEMATOLOGIE', 0, 0),
(236, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(237, 'diop', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(238, 'seck', 'pape saer', '', '', '', 'RIMESITHER', 0, 0),
(239, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(240, 'seck', 'pape saer', '', '', '', 'RHUMATOLOG', 0, 0),
(241, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(242, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(243, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(244, 'seck', 'pape saer', '', '', '', 'RIMESITHERAPIE', 0, 0),
(245, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(246, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(247, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(248, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(249, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(250, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(251, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(252, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(253, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(254, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(255, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(256, 'seyy', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(257, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(258, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(259, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(260, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(261, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(262, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(263, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(264, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(265, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(266, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(267, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(268, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(269, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(270, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(271, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(272, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(273, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(274, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(275, 'MR ka', 'pape', '', '', '', 'HEMATOLOGIE', 0, 0),
(276, 'MR ka', 'pape', '', '', '', 'HEMATOLOGIE', 0, 0),
(277, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'HEMATOLOGIE', 0, 0),
(278, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(279, 'Diawarra', 'Laye', 'DOCTEUR', 'pape', 'seck', 'lolo', 0, 0),
(280, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(281, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(282, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(283, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(284, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(285, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(286, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(287, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(288, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(289, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(290, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(291, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(292, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(293, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(294, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(295, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(296, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(297, 'seck', 'pape saer', 'SECRETAIRE', 'pape saer seck', 'Mot_pass', 'RIMESITHERAPIE', 0, 0),
(298, 'seck', 'pape saer', 'DOCTEUR', 'pape saer seck', 'Mot_pass', 'HEMATOLOGIE', 0, 0),
(299, 'seck', 'pape saer', 'SECRETAIRE', 'pape saer seck', 'Mot_pass', 'HEMATOLOGIE', 0, 0),
(300, 'seck', 'pape saer', 'SECRETAIRE', 'pape saer seck', 'Mot_pass', 'HEMATOLOGIE', 0, 0),
(301, 'seck', 'pape saer', 'SECRETAIRE', 'pape saer seck', 'Mot_pass', 'HEMATOLOGIE', 0, 0),
(302, 'xas', 'xZ', 'zxc', 'bv', 'Mot_pass', 'x', 0, 0),
(303, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(304, 'seck', 'pape saer', '', '', '', 'HEMATOLOGI', 0, 0),
(305, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(306, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(307, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(308, 'seck las', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(309, 'Dia', 'Laye', '', '', '', 'HEMATOLOGIE', 0, 0),
(310, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(311, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(312, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(313, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(314, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(315, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(316, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(317, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(318, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(319, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(320, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(321, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(322, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(323, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(324, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(325, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(326, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(327, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(328, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(329, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(330, 'seck', 'pape saer', '', '', '', 'HEMATOLOGIE', 0, 0),
(331, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(332, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(333, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(334, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(335, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(336, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(337, 'seck', 'pape saer', '', '', '', 'RHUMATOLOGIE', 0, 0),
(338, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(339, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0),
(340, 'seck', 'pape saer', '', '', '', 'DODONTOLOGIE', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Patients`
--

CREATE TABLE `Patients` (
  `id_patient` int(11) NOT NULL,
  `Nom_patient` varchar(50) NOT NULL,
  `Prenom_patient` varchar(50) NOT NULL,
  `Tel_patient` int(11) NOT NULL,
  `Adress_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Patients`
--

INSERT INTO `Patients` (`id_patient`, `Nom_patient`, `Prenom_patient`, `Tel_patient`, `Adress_patient`) VALUES
(1, 'seck', 'pape saer', 778901234, 0),
(2, 'Diouf', 'Souleymane', 770001213, 0),
(3, 'Kane', 'Bbaloulaye', 782341567, 0),
(4, 'Diouf sarr', 'Moustapha', 778901234, 0),
(5, 'Diallo', 'Laye', 708901234, 0),
(6, 'Thiam', 'Fama', 778901234, 0),
(7, 'Gueye', 'Tamba', 778901325, 0),
(8, '', '', 0, 0),
(9, '', '', 0, 0),
(10, '', '', 0, 0),
(11, '', '', 0, 0),
(12, 'seck', 'pape saer', 775652467, 0),
(13, 'Thiam', 'Fama', 778906534, 0),
(14, 'seck', 'pape saer', 5652467, 0),
(15, 'seck', 'pape saer', 5652467, 0),
(16, 'seck', 'pape saer', 5652467, 0),
(17, 'seck', 'pape saer', 5652467, 0),
(18, 'seck', 'pape saer', 5652467, 0),
(19, 'seck', 'pape saer', 5652467, 0),
(20, 'seck', 'pape saer', 778903514, 0),
(21, 'seck', 'pape saer', 5652467, 0),
(22, 'seck', 'pape saer', 5652467, 0),
(23, 'seck', 'pape saer', 5652467, 0),
(24, 'seck', 'pape saer', 5652467, 0),
(25, 'seck', 'pape saer', 5652467, 0),
(26, 'seck', 'pape saer', 5652467, 0),
(27, 'seck', 'pape saer', 5652467, 0),
(28, 'seck', 'pape saer', 5652467, 0),
(29, 'seck', 'pape saer', 5652467, 0),
(30, 'seck', 'pape saer', 5652467, 0),
(31, 'seck', 'pape saer', 5652467, 0),
(32, 'seck', 'pape saer', 5652467, 0),
(33, 'seck', 'pape saer', 5652467, 0),
(34, 'seck', 'pape saer', 5652467, 0),
(35, 'seck', 'pape saer', 5652467, 0),
(36, 'seck', 'pape saer', 5652467, 0),
(37, 'seck', 'pape saer', 6213646, 0),
(38, 'seck', 'pape saer', 5652467, 0),
(39, 'seck', 'pape saer', 5652467, 0),
(40, 'seck', 'pape saer', 5652467, 0),
(41, 'seck', 'pape saer', 5652467, 0),
(42, 'seck', 'pape saer', 5652467, 0),
(43, 'seck', 'pape saer', 5652467, 0),
(44, 'seck', 'pape saer', 5652467, 0),
(45, 'aw', 'pape saer', 5652467, 0),
(46, 'aw', 'pape saer', 5652467, 0),
(47, 'aw', 'pape saer', 5652467, 0),
(48, 'aw', 'pape saer', 5652467, 0),
(49, 'Seck', 'Dame', 773841379, 0),
(50, 'seck', 'pape saer', 0, 0),
(51, 'seck', 'pape saer', 0, 0),
(52, 'seck', 'pape saer', 5652467, 0),
(53, 'seck', 'pape saer', 5652467, 0),
(54, 'pour', 'pour', 5652467, 0),
(55, 'poura', 'poura', 5652467, 0),
(56, 'seck', 'pape saer', 5652467, 0),
(57, 'seck', 'pape saer', 5652467, 0),
(58, 'seck', 'pape saer', 5652467, 0),
(59, 'seck', 'pape saer', 5652467, 0),
(60, 'seck', 'pape saer', 5652467, 0),
(61, 'seck', 'pape saer', 5652467, 0),
(62, 'pio', 'pio', 3225435, 0),
(63, 'pio', 'pio', 3225435, 0),
(64, 'SECK', 'MOUSTAPHA', 776543526, 0),
(65, 'seck', 'pape saer', 3225435, 0),
(66, 'seck', 'pape saer', 0, 0),
(67, 'seck', 'pape saer', 0, 0),
(68, 'seck', 'pape saer', 3225435, 0),
(69, 'seck', 'pape saer', 5652467, 0),
(70, 'seck', 'pape saer', 5652467, 0),
(71, 'seck', 'pape saer', 5652467, 0),
(72, 'seck', 'pape saer', 5652467, 0),
(73, 'sar', 'coulibali', 2147483647, 0),
(74, 'ka', 'moussa', 778907635, 0),
(75, 'ka', 'moussa', 778907635, 0),
(76, 'ka', 'moussa', 778907635, 0),
(77, 'ka', 'moussa', 778907635, 0),
(78, 'ka', 'moussa', 778907635, 0),
(79, 'ka', 'moussa', 778907635, 0),
(80, 'ka', 'moussa', 778907635, 0),
(81, 'ka', 'moussa', 778907635, 0),
(82, 'ka', 'moussa', 778907635, 0),
(83, 'ka', 'moussa', 778907635, 0),
(84, 'ka', 'moussa', 778907635, 0),
(85, 'ka', 'moussa', 778907635, 0),
(86, 'seck', 'pape saer', 5652467, 0),
(87, 'ka', 'moussa', 778907635, 0),
(88, 'ka', 'moussa', 778907635, 0),
(89, 'seck', 'pape saer', 5652467, 0),
(90, 'ka', 'moussa', 778907635, 0),
(91, 'ka', 'moussa', 778907635, 0),
(92, 'ka', 'moussa', 778907635, 0),
(93, 'ka', 'moussa', 778907635, 0),
(94, 'ka', 'moussa', 778907635, 0),
(95, 'nasnb', 'pape saer', 432424, 0),
(96, 'ka', 'moussa', 778907635, 0),
(97, 'ka', 'moussa', 778907635, 0),
(98, 'kxz', 'smcasc', 0, 0),
(99, 'ka', 'moussa', 778907635, 0),
(100, 'ka', 'moussa', 778907635, 0),
(101, 'ka', 'moussa', 778907635, 0),
(102, 'Diouf', 'Moussa', 778904625, 0),
(103, 'Diouf', 'Moussa', 778904625, 0),
(104, 'seck', 'pape saer', 5652467, 0),
(105, 'seck', 'pape saer', 5652467, 0),
(106, 'seck', 'pape saer', 5652467, 0),
(107, 'seck', 'pape saer', 0, 0),
(108, 'seck', 'pape saer', 0, 0),
(109, 'Thiune', 'sabm', 0, 0),
(110, 'Thiune', 'sabm', 0, 0),
(111, 'mbeur', 'pape saer', 5652467, 0),
(112, 'mbeur', 'pape saer', 5652467, 0),
(113, 'Mberttt', 'pape saer', 0, 0),
(114, 'Diene', 'FArba sarr', 5652467, 0),
(115, 'Diene', 'FArba sarr', 5652467, 0),
(116, 'Diuof', 'pape', 3225435, 0),
(117, 'seck', 'pape saer', 5652467, 0),
(118, 'seck', 'pape saer', 5652467, 0),
(119, 'seck', 'pape saer', 3225435, 0),
(120, 'seck', 'pape saer', 3225435, 0),
(121, 'DIOUHGR', 'pape saer', 3225435, 0),
(122, 'diuof', 'pom', 0, 0),
(123, 'pot', 'pot', 5652467, 0),
(124, 'seck', 'pape saer', 6213646, 0),
(125, 'seck', 'pape saer', 3225435, 0),
(126, 'seck', 'pape saer', 5652467, 0),
(127, 'seck', 'pape saer', 5652467, 0),
(128, 'seck', 'pape saer', 5652467, 0),
(129, 'seck', 'pape saer', 5652467, 0),
(130, 'seck', 'pape saer', 5652467, 0),
(131, 'seck', 'pape saer', 5652467, 0),
(132, 'seck', 'pape saer', 5652467, 0),
(133, 'seck', 'pape saer', 6213646, 0),
(134, 'seck', 'pape saer', 6213646, 0),
(135, 'seck', 'pape saer', 6213646, 0),
(136, 'seck', 'pape saer', 6213646, 0),
(137, 'seck', 'pape saer', 5652467, 0),
(138, 'seck', 'pape saer', 5652467, 0),
(139, 'seck', 'pape saer', 3225435, 0),
(140, 'seck', 'pape saer', 3225435, 0),
(141, 'seck', 'pape saer', 3225435, 0),
(142, 'seck', 'pape saer', 5652467, 0),
(143, 'Sarr', 'Abdou', 778904513, 0),
(144, 'Sarr', 'Abdou', 778904513, 0),
(145, 'seck', 'pape saer', 5652467, 0),
(146, 'seck', 'pape saer', 5652467, 0),
(147, 'seck', 'pape saer', 5652467, 0),
(148, 'seck', 'pape ', 5652467, 0),
(149, 'seck', 'pape ', 5652467, 0),
(150, 'seck', 'pape ', 5652467, 0),
(151, 'seck', 'pape saer', 779012517, 0),
(152, 'seck', 'pape saer', 778972314, 0),
(153, 'jj', 'k', 5652467, 0),
(154, 'jj', 'k', 5652467, 0),
(155, 'seck', 'pape saer', 5652467, 0),
(156, 'dia', 'pape saer', 5652467, 0),
(157, 'dia', 'mali', 5652467, 0),
(158, 'Diallo', 'mali', 5652467, 0),
(159, 'Diallo', 'mali', 5652467, 0),
(160, 'seck', 'pape saer', 5652467, 0),
(161, 'Diallo', 'msar', 5652467, 0),
(162, 'seck', 'pape saer', 5652467, 0),
(163, 'Diallo', 'msar', 5652467, 0),
(164, 'seck', 'pape saer', 5652467, 0),
(165, 'seck', 'pape saer', 6213646, 0),
(166, 'seck', 'pape saer', 5652467, 0),
(167, 'seck', 'pape saer', 3225435, 0),
(168, 'seck', 'pape saer', 3225435, 0),
(169, 'seck', 'pape saer', 3225435, 0),
(170, 'seck', 'pape saer', 3225435, 0),
(171, 'seck', 'pape saer', 3225435, 0),
(172, 'seck', 'pape saer', 3225435, 0),
(173, 'seck', 'pape saer', 5652467, 0),
(174, 'seck', 'pape saer', 5652467, 0),
(175, 'seck', 'pape saer', 5652467, 0),
(176, 'seck', 'pape saer', 5652467, 0),
(177, 'seck', 'pape saer', 5652467, 0),
(178, 'seck', 'pape saer', 5652467, 0),
(179, 'seck', 'pape saer', 3225435, 0),
(180, 'seck', 'pape saer', 5652467, 0),
(181, 'seck', 'pape saer', 5652467, 0),
(182, 'seck', 'pape saer', 5652467, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Services`
--

CREATE TABLE `Services` (
  `id_service` int(11) NOT NULL,
  `nom_service` varchar(50) NOT NULL,
  `id_inscrit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `V_RDV_Patients_Inscrits`
--

CREATE TABLE `V_RDV_Patients_Inscrits` (
  `Nom_inscrit` varchar(50) NOT NULL,
  `prenom_inscrit` varchar(50) NOT NULL,
  `Domaine` varchar(50) NOT NULL,
  `Nom_Patient` varchar(50) NOT NULL,
  `Prenom_patient` varchar(50) NOT NULL,
  `Tel_patient` int(11) NOT NULL,
  `Adress_patient` varchar(50) NOT NULL,
  `Date_RDV` date NOT NULL,
  `Heured_RDV` int(11) NOT NULL,
  `Nom_RDV` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `Statut` varchar(50) NOT NULL,
  `Logine` varchar(50) NOT NULL,
  `Mot_pass` varchar(50) NOT NULL,
  `Date_indispo` date NOT NULL,
  `Heure_indispo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `V_RDV_Patients_Inscrits`
--

INSERT INTO `V_RDV_Patients_Inscrits` (`Nom_inscrit`, `prenom_inscrit`, `Domaine`, `Nom_Patient`, `Prenom_patient`, `Tel_patient`, `Adress_patient`, `Date_RDV`, `Heured_RDV`, `Nom_RDV`, `id`, `Statut`, `Logine`, `Mot_pass`, `Date_indispo`, `Heure_indispo`) VALUES
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-07', 9, 'pape saer ', 303, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-07', 9, 'pape saer ', 304, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-07', 9, 'pape saer ', 305, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-07', 9, 'pape saer ', 306, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-07', 9, 'pape saer ', 307, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-02', 0, 'pape saer ', 308, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-08', 9, 'pape saer ', 309, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-08', 9, 'pape saer ', 310, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-08', 9, 'pape saer ', 311, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-08', 9, 'pape saer ', 312, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-15', 8, 'pape saer ', 313, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-08', 8, 'pape saer ', 314, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'RHUMATOLOGIE', 'seck', 'pape saer', 3225435, 'kaffrine', '2019-11-09', 9, 'pape saer ', 315, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'DODONTOLOGIE', 'seck', 'pape saer', 5652467, 'kaffrine', '2019-11-06', 0, 'pape saer ', 316, '', '', '', '0000-00-00', '00:00:00'),
('seck', 'pape saer', 'DODONTOLOGIE', '', '', 0, '', '0000-00-00', 0, '', 317, '', '', '', '2019-11-08', '00:00:00'),
('seck', 'pape saer', 'HEMATOLOGIE', '', '', 0, '', '0000-00-00', 0, '', 318, '', '', '', '2019-11-08', '16:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Inscrits`
--
ALTER TABLE `Inscrits`
  ADD PRIMARY KEY (`id_inscrit`);

--
-- Index pour la table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_inscrit` (`id_inscrit`);

--
-- Index pour la table `V_RDV_Patients_Inscrits`
--
ALTER TABLE `V_RDV_Patients_Inscrits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Inscrits`
--
ALTER TABLE `Inscrits`
  MODIFY `id_inscrit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT pour la table `Patients`
--
ALTER TABLE `Patients`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT pour la table `Services`
--
ALTER TABLE `Services`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `V_RDV_Patients_Inscrits`
--
ALTER TABLE `V_RDV_Patients_Inscrits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `Services_ibfk_1` FOREIGN KEY (`id_inscrit`) REFERENCES `Inscrits` (`id_inscrit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
