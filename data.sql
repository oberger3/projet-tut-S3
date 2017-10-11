#mysql --host=localhost -uroot -h localhost -proot BDD_tbichot

DROP TABLE IF EXISTS OEUVRE;
DROP TABLE IF EXISTS EVENEMENT;
DROP TABLE IF EXISTS ARTICLE;
DROP TABLE IF EXISTS ARTISTE;
DROP TABLE IF EXISTS COMMENTAIRE;
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
        dateAjout      Date NOT NULL,
        categorie_id   int(10),
        technique_id   int(10),
        texte          VARCHAR(500),
        photo          varchar(20)
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
        dateDebut     Date NOT NULL ,
        dateFin       Date NOT NULL ,
        nbParticipant int(10),
        lieu          Varchar(50),
        horaireDebut       DATETIME,
        horaireFin       DATETIME,
        dateAjout      Date NOT NULL,
        idAuteur      Int NOT NULL,
        texte          VARCHAR(500)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


##------------------------------------------------------------
# Table: ARTICLE
#------------------------------------------------------------

CREATE TABLE ARTICLE(
  idArticle     int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre         Varchar (25) NOT NULL ,
  dateAjout      Date NOT NULL,
  idAuteur      Int NOT NULL,
  texte          VARCHAR(500)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
	  	idCategorie   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  	nomCategorie  Varchar(30) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

#------------------------------------------------------------
# Table: TECHNIQUE
#------------------------------------------------------------

CREATE TABLE TECHNIQUE(
  idTechnique   int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomTechnique  Varchar(30) NOT NULL
)DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


ALTER TABLE OEUVRE ADD CONSTRAINT FK_OEUVRE_artiste_id FOREIGN KEY (artiste_id) REFERENCES ARTISTE(idArtiste);
ALTER TABLE EXEMPLAIRE ADD CONSTRAINT FK_EXEMPLAIRE_noOeuvre FOREIGN KEY (noOeuvre) REFERENCES OEUVRE(noOeuvre);
ALTER TABLE EMPRUNT ADD CONSTRAINT FK_EMPRUNT_idAdherent FOREIGN KEY (idAdherent) REFERENCES ADHERENT(idAdherent);
ALTER TABLE EMPRUNT ADD CONSTRAINT FK_EMPRUNT_noExemplaire FOREIGN KEY (noExemplaire) REFERENCES EXEMPLAIRE(noExemplaire);
