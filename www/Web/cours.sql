# -----------------------------------------------------------------------------
#       TABLE : matiere
# -----------------------------------------------------------------------------

CREATE TABLE matiere
 (
   id_m INTEGER NOT NULL AUTO_INCREMENT ,
   libelle VARCHAR(128) NULL  
   , PRIMARY KEY (id_m) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : tuto
# -----------------------------------------------------------------------------

CREATE TABLE tuto
 (
   id_t INTEGER NOT NULL AUTO_INCREMENT ,
   id_u INTEGER NOT NULL  ,
   titre VARCHAR(128) NULL  ,
   contenu TEXT NULL  ,
   dateAjout DATETIME NULL  ,
   dateModif DATETIME NULL  
   , PRIMARY KEY (id_t) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE tuto
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_tuto_byte
     ON tuto (id_u ASC);

# -----------------------------------------------------------------------------
#       TABLE : byte
# -----------------------------------------------------------------------------

CREATE TABLE byte
 (
   id_u INTEGER NOT NULL AUTO_INCREMENT ,
   username VARCHAR(128) NULL  ,
   nom VARCHAR(128) NULL  ,
   prenom VARCHAR(128) NULL  ,
   email VARCHAR(128) NULL  ,
   password VARCHAR(128) NULL  
   , PRIMARY KEY (id_u) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : cours
# -----------------------------------------------------------------------------

CREATE TABLE cours
 (
   id_c INTEGER NOT NULL AUTO_INCREMENT ,
   id_u INTEGER NOT NULL  ,
   id_m INTEGER NOT NULL  ,
   titre VARCHAR(128) NULL  ,
   description VARCHAR(128) NULL  ,
   contenu TEXT NULL  ,
   dateAjout DATETIME NULL  ,
   dateModif DATETIME NULL  
   , PRIMARY KEY (id_c) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE cours
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_cours_byte
     ON cours (id_u ASC);

CREATE  INDEX I_FK_cours_matiere
     ON cours (id_m ASC);

# -----------------------------------------------------------------------------
#       TABLE : acl
# -----------------------------------------------------------------------------

CREATE TABLE acl
 (
   id_m INTEGER NOT NULL  ,
   id_u INTEGER NOT NULL  ,
   ins INTEGER NULL  ,
   upd INTEGER NULL  ,
   del INTEGER NULL  
   , PRIMARY KEY (id_m,id_u) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE acl
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_acl_matiere
     ON acl (id_m ASC);

CREATE  INDEX I_FK_acl_byte
     ON acl (id_u ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE tuto 
  ADD FOREIGN KEY FK_tuto_byte (id_u)
      REFERENCES byte (id_u) ;


ALTER TABLE cours 
  ADD FOREIGN KEY FK_cours_byte (id_u)
      REFERENCES byte (id_u) ;


ALTER TABLE cours 
  ADD FOREIGN KEY FK_cours_matiere (id_m)
      REFERENCES matiere (id_m) ;


ALTER TABLE acl 
  ADD FOREIGN KEY FK_acl_matiere (id_m)
      REFERENCES matiere (id_m) ;


ALTER TABLE acl 
  ADD FOREIGN KEY FK_acl_byte (id_u)
      REFERENCES byte (id_u) ;

