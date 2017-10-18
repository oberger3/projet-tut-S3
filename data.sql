#mysql --host=localhost -uroot -h localhost -proot BDD_tbichot
DROP TABLE IF EXISTS COMMENTAIRE_OEUVRE;
DROP TABLE IF EXISTS COMMENTAIRE_ARTICLE;
DROP TABLE IF EXISTS COMMENTAIRE_EVENEMENT;

DROP TABLE IF EXISTS ARTICLE;
DROP TABLE IF EXISTS OEUVRE;
DROP TABLE IF EXISTS EVENEMENT;
DROP TABLE IF EXISTS ARTISTE;

DROP TABLE IF EXISTS UTILISATEUR;
DROP TABLE IF EXISTS CATEGORIE;
DROP TABLE IF EXISTS TECHNIQUE;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: OEUVRE
#------------------------------------------------------------

CREATE TABLE OEUVRE(
        idOeuvre       int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nomOeuvre      Varchar (40) NOT NULL ,
        artiste_id      int(10) NOT NULL,
        disponibilite  BOOLEAN NOT NULL ,
        dateAjout      DATETIME NOT NULL,
        categorie_id   int(10),
        technique_id   int(10),
        texte          VARCHAR(500),
        photo          varchar(20),
        nbVue          int(10) DEFAULT 0
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: AUTEUR
#------------------------------------------------------------

CREATE TABLE ARTISTE(
        idArtiste     int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nomArtiste    Varchar (25) NOT NULL ,
        prenomArtiste Varchar (25) NOT NULL ,
        domaine       Varchar (25)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: EVENEMENT
#------------------------------------------------------------

CREATE TABLE EVENEMENT(
        idEvenement   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        titre         Varchar (25) NOT NULL ,
        dateDebut     DATETIME NOT NULL ,
        dateFin       DATETIME NOT NULL ,
        nbParticipant int(10) DEFAULT 0,
        lieu          Varchar(50),
        dateAjout      DATETIME NOT NULL,
        dernierMAJ     DATETIME,
        artiste_id     Int NOT NULL,
        texte          VARCHAR(500),
        nbVue           int(10) DEFAULT 0
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


##------------------------------------------------------------
# Table: ARTICLE
#------------------------------------------------------------

CREATE TABLE ARTICLE(
  idArticle     int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre         Varchar (25) NOT NULL ,
  dateAjout      DATETIME NOT NULL,
  dernierMAJ     DATETIME,
  artiste_id      Int NOT NULL,
  texte           VARCHAR(500),
  nbVue           int(10) DEFAULT 0
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
	  	idCategorie   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  	nomCategorie  VARCHAR(30) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

#------------------------------------------------------------
# Table: TECHNIQUE
#------------------------------------------------------------

CREATE TABLE TECHNIQUE(
  idTechnique   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomTechnique  VARCHAR(30) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL DEFAULT '',
  password VARCHAR(255) NOT NULL DEFAULT '',
  motdepasse VARCHAR(255) NOT NULL DEFAULT '',
  roles VARCHAR(255) NOT NULL DEFAULT '',
  email  VARCHAR(255) NOT NULL DEFAULT '',
  isEnabled TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: COMMENTAIRE
#------------------------------------------------------------

CREATE TABLE COMMENTAIRE_OEUVRE(
  idCommentaire_O   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  oeuvre_id       Int NOT NULL,
  dateAjout       DATETIME NOT NULL,
  pseudo          VARCHAR(30) NOT NULL,
  email  VARCHAR(255) NOT NULL DEFAULT '',
  commentaire     VARCHAR(200) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE COMMENTAIRE_ARTICLE(
  idCommentaire_A  int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  article_id      Int NOT NULL,
  dateAjout       DATETIME NOT NULL,
  pseudo          VARCHAR(30) NOT NULL,
  email  VARCHAR(255) NOT NULL DEFAULT '',
  commentaire     VARCHAR(200) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE COMMENTAIRE_EVENEMENT(
  idCommentaire_E   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  evenement_id    Int NOT NULL,
  dateAjout       DATETIME NOT NULL,
  pseudo          VARCHAR(30) NOT NULL,
  email  VARCHAR(255) NOT NULL DEFAULT '',
  commentaire     VARCHAR(200) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


ALTER TABLE OEUVRE ADD CONSTRAINT FK_OEUVRE_artiste_id FOREIGN KEY (artiste_id) REFERENCES ARTISTE(idArtiste);
ALTER TABLE OEUVRE ADD CONSTRAINT FK_OEUVRE_categorie_id FOREIGN KEY (categorie_id) REFERENCES CATEGORIE(idCategorie);
ALTER TABLE OEUVRE ADD CONSTRAINT FK_OEUVRE_technique_id FOREIGN KEY (technique_id) REFERENCES TECHNIQUE(idTechnique);
ALTER TABLE ARTICLE ADD CONSTRAINT FK_ARTICLE_artiste_id FOREIGN KEY (artiste_id) REFERENCES ARTISTE(idArtiste);
ALTER TABLE EVENEMENT ADD CONSTRAINT FK_EVENEMENT_artiste_id FOREIGN KEY (artiste_id) REFERENCES ARTISTE(idArtiste);
ALTER TABLE COMMENTAIRE_OEUVRE ADD CONSTRAINT FK_COMMENTAIRE_OEUVRE_oeuvre_id FOREIGN KEY (oeuvre_id) REFERENCES OEUVRE(idOeuvre);
ALTER TABLE COMMENTAIRE_ARTICLE ADD CONSTRAINT FK_COMMENTAIRE_ARTICLE_article_id FOREIGN KEY (article_id) REFERENCES ARTICLE(idArticle);
ALTER TABLE COMMENTAIRE_EVENEMENT ADD CONSTRAINT FK_COMMENTAIRE_EVENEMENT_evenement_id FOREIGN KEY (evenement_id) REFERENCES EVENEMENT(idEvenement);


INSERT INTO ARTISTE VALUES (1, 'HEIDET', 'Martine', 'Peintre');
INSERT INTO CATEGORIE VALUES (1, 'Paysage');
INSERT INTO TECHNIQUE VALUES (1, '');

INSERT INTO ARTICLE VALUES (1, 'La peinture', '2017-10-01 18:00:00', DEFAULT, 1, 
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', DEFAULT);
INSERT INTO EVENEMENT VALUES (1, 'Vernissage', '2017-10-01 18:00:00', '2017-11-01 18:00:00', DEFAULT, 'Colombier-Fontaine', '2017-09-01 18:00:00', NULL, 1, 
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', DEFAULT);
INSERT INTO OEUVRE VALUES (1, 'La Joconde', 1, true, '2017-10-01 18:00:00', 1, 1, 
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'tableau_01.png', DEFAULT);

INSERT INTO UTILISATEUR (id,username,password,motdepasse,email,roles) VALUES
(1, 'admin', '$2y$13$mJK5hyDNAY9rcDuEBofjJ.h3d7xBwlApfMoknBDO0AvXLr1AaJM02', 'admin', 'admin@gmail.com','ROLE_ADMIN'),
(2, 'invite', '$2y$13$j5rdj5QL3fd.IZlA5JNbc.kTRaa1YbJK/G7h2mB51ySzaDdgEbo8W', 'invite', 'admin@gmail.com','ROLE_INVITE');


