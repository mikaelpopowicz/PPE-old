/**
*	Suppression des droits, de l'utilisateur et de la base si ils existent
*/
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'coaching'@'localhost';
DROP USER 'coaching'@'localhost';
DROP DATABASE IF EXISTS coaching;

/**
*	Création de l'utilisateur, la base et affection des droits
*/
CREATE USER 'coaching'@'localhost' IDENTIFIED BY  'motdepasse';
CREATE DATABASE IF NOT EXISTS coaching;
GRANT ALL PRIVILEGES ON  `coaching` . * TO  'coaching'@'localhost';


/**
*	Création des tables
*/
USE coaching;
# -----------------------------------------------------------------------------
#       TABLE : MEMBRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MEMBRE
 (
   id_membre INTEGER NOT NULL  ,
   nom_membre VARCHAR(128) NULL  ,
   prenom_membre VARCHAR(128) NULL  ,
   adresse_membre VARCHAR(128) NULL  ,
   ville_membre VARCHAR(128) NULL  ,
   cp_membre VARCHAR(128) NULL  ,
   telelphone_membre VARCHAR(128) NULL  ,
   mail_membre VARCHAR(128) NULL  ,
   taille_membre DECIMAL(10,2) NULL  ,
   poids_membre DECIMAL(10,2) NULL  ,
   date_inscription DATETIME NULL  ,
   login_membre VARCHAR(128) NULL  ,
   password VARCHAR(128) NULL  
   , PRIMARY KEY (id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : COACH
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COACH
 (
   id_membre INTEGER NOT NULL  ,
   nutrition INTEGER NULL  ,
   musculation INTEGER NULL  ,
   perte_de_poid INTEGER NULL  ,
   remise_en_forme INTEGER NULL  ,
   desc_coach VARCHAR(128) NULL  
   , PRIMARY KEY (id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_PAIEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_PAIEMENT
 (
   id_paiement INTEGER NOT NULL  ,
   libelle_paiement VARCHAR(128) NULL  
   , PRIMARY KEY (id_paiement) 
 ) 
 comment = "";
 
# -----------------------------------------------------------------------------
#       TABLE : PRESTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRESTATION
 (
   id_prestation INTEGER NOT NULL  ,
   id_type_presta INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   libelle_prestation VARCHAR(128) NULL  ,
   contenu_prestation VARCHAR(128) NULL  ,
   tarif_prestation DECIMAL(10,2) NULL  ,
   duree_prestation DECIMAL(10,2) NULL  
   , PRIMARY KEY (id_prestation) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   id_membre INTEGER NOT NULL  ,
   objectif CHAR(32) NULL  
   , PRIMARY KEY (id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : NEWS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NEWS
 (
   id_news INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   date_news DATETIME NULL  ,
   titre_news VARCHAR(128) NULL  ,
   contenu_news VARCHAR(128) NULL  
   , PRIMARY KEY (id_news) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_PRESTA
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_PRESTA
 (
   id_type_presta INTEGER NOT NULL  ,
   libelle_type_presta VARCHAR(128) NULL  
   , PRIMARY KEY (id_type_presta) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PROGAMME
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROGAMME
 (
   id_programme INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   id_membre_1 INTEGER NOT NULL  ,
   libelle_programme VARCHAR(128) NULL  ,
   desc_programme TEXT NULL  ,
   jour VARCHAR(128) NULL  ,
   type_programme VARCHAR(128) NULL  
   , PRIMARY KEY (id_programme) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : Abonnement
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Abonnement
 (
   id_abonnement INTEGER NOT NULL  ,
   libelle_abonnement VARCHAR(128) NULL  ,
   tarif DECIMAL(10,2) NULL  ,
   detail_abonnement VARCHAR(128) NULL  
   , PRIMARY KEY (id_abonnement) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MESSAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MESSAGE
 (
   id_emetteur INTEGER NOT NULL  ,
   id_recepteur INTEGER NOT NULL  ,
   dat_heur DATETIME NOT NULL  ,
   date_message DATETIME NULL  ,
   sujet_message VARCHAR(128) NULL  ,
   contenu VARCHAR(128) NULL  
   , PRIMARY KEY (id_emetteur,id_recepteur,dat_heur) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : NOTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NOTER
 (
   id_membre_1 INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   note INTEGER NULL  
   , PRIMARY KEY (id_membre_1,id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : COMMENTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMENTER
 (
   id_news INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   date_comm DATETIME NULL  ,
   commentaire VARCHAR(128) NULL  
   , PRIMARY KEY (id_news,id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PRENDRE_COURS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRENDRE_COURS
 (
   id_membre_1 INTEGER NOT NULL  ,
   id_membre INTEGER NOT NULL  ,
   seance_debut DATETIME NULL  ,
   seance_fin DATETIME NULL  ,
   lieu_seance VARCHAR(128) NULL  
   , PRIMARY KEY (id_membre_1,id_membre) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FACTURE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FACTURE
 (
   id_membre INTEGER NOT NULL  ,
   id_abonnement INTEGER NOT NULL  ,
   id_paiement INTEGER NOT NULL  ,
   date_debut DATE NULL  ,
   date_fin DATE NULL  
   , PRIMARY KEY (id_membre,id_abonnement,id_paiement) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE COACH 
  ADD FOREIGN KEY FK_COACH_MEMBRE (id_membre)
      REFERENCES MEMBRE (id_membre) ;


ALTER TABLE PRESTATION 
  ADD FOREIGN KEY FK_PRESTATION_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE PRESTATION 
  ADD FOREIGN KEY FK_PRESTATION_TYPE_PRESTA (id_type_presta)
      REFERENCES TYPE_PRESTA (id_type_presta) ;


ALTER TABLE CLIENT 
  ADD FOREIGN KEY FK_CLIENT_MEMBRE (id_membre)
      REFERENCES MEMBRE (id_membre) ;


ALTER TABLE NEWS 
  ADD FOREIGN KEY FK_NEWS_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE PROGAMME 
  ADD FOREIGN KEY FK_PROGAMME_CLIENT (id_membre_1)
      REFERENCES CLIENT (id_membre) ;


ALTER TABLE PROGAMME 
  ADD FOREIGN KEY FK_PROGAMME_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE MESSAGE 
  ADD FOREIGN KEY FK_MESSAGE_MEMBRE (id_emetteur)
      REFERENCES MEMBRE (id_membre) ;


ALTER TABLE MESSAGE 
  ADD FOREIGN KEY FK_MESSAGE_MEMBRE2 (id_recepteur)
      REFERENCES MEMBRE (id_membre) ;


ALTER TABLE NOTER 
  ADD FOREIGN KEY FK_NOTER_CLIENT (id_membre_1)
      REFERENCES CLIENT (id_membre) ;


ALTER TABLE NOTER 
  ADD FOREIGN KEY FK_NOTER_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE COMMENTER 
  ADD FOREIGN KEY FK_COMMENTER_NEWS (id_news)
      REFERENCES NEWS (id_news) ;


ALTER TABLE COMMENTER 
  ADD FOREIGN KEY FK_COMMENTER_MEMBRE (id_membre)
      REFERENCES MEMBRE (id_membre) ;


ALTER TABLE PRENDRE_COURS 
  ADD FOREIGN KEY FK_PRENDRE_COURS_CLIENT (id_membre_1)
      REFERENCES CLIENT (id_membre) ;


ALTER TABLE PRENDRE_COURS 
  ADD FOREIGN KEY FK_PRENDRE_COURS_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE FACTURE 
  ADD FOREIGN KEY FK_FACTURE_COACH (id_membre)
      REFERENCES COACH (id_membre) ;


ALTER TABLE FACTURE 
  ADD FOREIGN KEY FK_FACTURE_Abonnement (id_abonnement)
      REFERENCES Abonnement (id_abonnement) ;


ALTER TABLE FACTURE 
  ADD FOREIGN KEY FK_FACTURE_TYPE_PAIEMENT (id_paiement)
      REFERENCES TYPE_PAIEMENT (id_paiement) ;

