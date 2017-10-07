#mysql --host=localhost -uroot -h localhost -proot BDD_tbichot

DROP TABLE IF EXISTS OEUVRE;
DROP TABLE IF EXISTS EVENEMENT;
DROP TABLE IF EXISTS ARTICLE;
DROP TABLE IF EXISTS ARTISTE;
DROP TABLE IF EXISTS COMMENTAIRE;
DROP TABLE IF EXISTS UTILISATEUR;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: ADHERENT
#------------------------------------------------------------

CREATE TABLE ADHERENT(
        idAdherent   Int NOT NULL ,
        nomAdherent  Varchar (25) NOT NULL ,
        adresse      Varchar (25) NOT NULL ,
        datePaiement Date NOT NULL ,
        PRIMARY KEY (idAdherent )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AUTEUR
#------------------------------------------------------------

CREATE TABLE AUTEUR(
        idAuteur     Int NOT NULL ,
        nomAuteur    Varchar (25) NOT NULL ,
        prenomAuteur Varchar (25) NOT NULL ,
        PRIMARY KEY (idAuteur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: OEUVRE
#------------------------------------------------------------

CREATE TABLE OEUVRE(
        noOeuvre     Int NOT NULL ,
        titre        Varchar (25) NOT NULL ,
        dateParution Date NOT NULL ,
        idAuteur     Int NOT NULL ,
        PRIMARY KEY (noOeuvre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: EXEMPLAIRE
#------------------------------------------------------------

CREATE TABLE EXEMPLAIRE(
        noExemplaire Int NOT NULL ,
        etat         Varchar (25) NOT NULL ,
        dateAchat    Date NOT NULL ,
        prix         Float NOT NULL ,
        noOeuvre     Int NOT NULL ,
        PRIMARY KEY (noExemplaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: EMPRUNT
#------------------------------------------------------------

CREATE TABLE EMPRUNT(
	  	idAdherent   Int NOT NULL ,
	  	noExemplaire Int NOT NULL ,
        dateEmprunt  Date NOT NULL ,
        dateRendu    Date NOT NULL ,
        PRIMARY KEY (idAdherent, noExemplaire, dateEmprunt )
)ENGINE=InnoDB;

ALTER TABLE OEUVRE ADD CONSTRAINT FK_OEUVRE_idAuteur FOREIGN KEY (idAuteur) REFERENCES AUTEUR(idAuteur);
ALTER TABLE EXEMPLAIRE ADD CONSTRAINT FK_EXEMPLAIRE_noOeuvre FOREIGN KEY (noOeuvre) REFERENCES OEUVRE(noOeuvre);
ALTER TABLE EMPRUNT ADD CONSTRAINT FK_EMPRUNT_idAdherent FOREIGN KEY (idAdherent) REFERENCES ADHERENT(idAdherent);
ALTER TABLE EMPRUNT ADD CONSTRAINT FK_EMPRUNT_noExemplaire FOREIGN KEY (noExemplaire) REFERENCES EXEMPLAIRE(noExemplaire);

LOAD DATA LOCAL INFILE 'ADHERENT.csv' INTO TABLE ADHERENT FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'AUTEUR.csv' INTO TABLE AUTEUR FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'OEUVRE.csv' INTO TABLE OEUVRE FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'EXEMPLAIRE.csv' INTO TABLE EXEMPLAIRE FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'EMPRUNT.csv' INTO TABLE EMPRUNT FIELDS TERMINATED BY ',';

UPDATE EMPRUNT SET dateRendu = 'NULL' WHERE dateRendu = "0000-00-00";
UPDATE OEUVRE SET dateParution = 'NULL' WHERE dateParution = "0000-00-00";

###############
## REQUETE 1 ##
###############
SELECT nomAuteur FROM AUTEUR WHERE nomAuteur LIKE "P%";

###############
## REQUETE 2 ##
###############
SELECT count(EMPRUNT.noExemplaire) as nbrLocation FROM EMPRUNT WHERE EMPRUNT.dateRendu = NULL OR EMPRUNT.dateRendu ='0000-00-00';

###############
## REQUETE 3 ##
###############
SELECT EXEMPLAIRE.noExemplaire, titre FROM EXEMPLAIRE JOIN OEUVRE ON EXEMPLAIRE.noOeuvre = OEUVRE.noOeuvre WHERE OEUVRE.titre LIKE "%la%" ORDER BY OEUVRE.titre DESC;

###############
## REQUETE 4 ##
###############
SELECT titre, EXEMPLAIRE.noExemplaire, nomAuteur FROM EXEMPLAIRE
	JOIN OEUVRE ON EXEMPLAIRE.noOeuvre = OEUVRE.noOeuvre
	JOIN AUTEUR ON OEUVRE.idAuteur = AUTEUR.idAuteur
	WHERE etat = "MAUVAIS" ORDER BY titre;

###############
## REQUETE 5 ##
###############
SELECT titre, count(EXEMPLAIRE.noExemplaire) AS NbrExemplaire FROM OEUVRE JOIN EXEMPLAIRE ON OEUVRE.noOeuvre = EXEMPLAIRE.noOeuvre
	JOIN AUTEUR ON AUTEUR.idAuteur = OEUVRE.idAuteur WHERE AUTEUR.nomAuteur = "christie" GROUP BY titre;

###############
## REQUETE 6 ##
###############
SELECT count(Oeuvre.noOeuvre) as NbrOeuvre, nomAuteur FROM OEUVRE JOIN AUTEUR ON OEUVRE.idAuteur = AUTEUR.idAuteur GROUP BY nomAuteur;


###############
## REQUETE 7 ##
###############
SELECT nomAdherent, dateEmprunt, DATE_ADD(dateEmprunt, INTERVAL 45 DAY) as date_rendu_max FROM ADHERENT JOIN EMPRUNT ON ADHERENT.idAdherent = EMPRUNT.idAdherent
	WHERE EMPRUNT.dateRendu = NULL OR EMPRUNT.dateRendu = '0000-00-00' ORDER BY nomAdherent;

###############
## REQUETE 8 ##
###############
SELECT titre FROM OEUVRE WHERE YEAR(dateParution) IN (SELECT YEAR(dateParution) FROM OEUVRE WHERE titre = "le retour de Poirot") AND titre <> "le retour de Poirot";

###############
## REQUETE 9 ##
###############
#'2016-02-27' pour vérifier la requête
SELECT nomAdherent,
		dateEmprunt,
		DATEDIFF(CURDATE(), dateEmprunt) AS dateDATEDIFF_curdate,
		DATEDIFF(CURDATE(), dateEmprunt)*0.5 AS dette_max,
		IF(DATEDIFF(CURDATE(), dateEmprunt)*0.5 > 90, 90, DATEDIFF(CURDATE(), dateEmprunt)*0.5) AS dette FROM ADHERENT JOIN EMPRUNT ON ADHERENT.idAdherent = EMPRUNT.idAdherent
 	WHERE DATEDIFF(CURDATE(), dateEmprunt) > 45 AND dateRendu = '0000-00-00';

################
## REQUETE 10 ##
################
SELECT nomAuteur FROM AUTEUR WHERE idAuteur NOT IN (SELECT idAuteur FROM OEUVRE);

################
## REQUETE 11 ##
################
SELECT noExemplaire, titre, nomAuteur FROM EXEMPLAIRE JOIN OEUVRE ON EXEMPLAIRE.noOeuvre = OEUVRE.noOeuvre JOIN AUTEUR ON OEUVRE.idAuteur = AUTEUR.idAuteur
WHERE EXEMPLAIRE.noExemplaire NOT IN (SELECT noExemplaire FROM EMPRUNT);



