CREATE TABLE animateurs( id_anim int(11) NOT NULL AUTO_INCREMENT, 
                         mail_anim varchar(255),
                         pseudo_anim varchar (255), 
                         mdp_anim varchar(255), 
                         nom_anim varchar(255),
                         prenom_anim varchar(255),
                         statut_anim varchar(50),
                         num_anim int(11),
                         date_naiss_anim date, 
                         PRIMARY KEY (id_anim)
                       ); 

/*INSERT INTO animateurs VALUES
("julien.monroy@gmail.com","Monju","mdp","Monroy", "Julien","Titulaire",0614525478, '20001206'),
("jean.restam@hotmail.fr","restJean","mdp1","Restam", "Jean","Stagiaire",0617455487, '19981005'),
("maxine.flubert@live.org","fluxmax","mdp2","Flubert", "Maxine","Titulaire",0715485747, '19970502') ; */


CREATE TABLE tuteurs( 
                       id_tut int(11) NOT NULL AUTO_INCREMENT,
                       mail_tut varchar(255) , 
                       pseudo_tut varchar (255), 
                       mdp_tut varchar(255), 
                       nom_tut varchar(255),
                       prenom_tut varchar(255),
                       num_tut int(10),
                       adr_tut  varchar(200), 
                       PRIMARY KEY (id_tut)
                       ); 




CREATE TABLE enfants(  
                       id_enf int(11) NOT NULL AUTO_INCREMENT,
                       nom_enf varchar(255),
                       prenom_enf varchar(255),
                       date_naiss_enf date, 
                       fk_id_tut int(11),
                       FOREIGN KEY (fk_id_tut) REFERENCES tuteurs(id_tut),
    				          PRIMARY KEY (id_enf)); 





 CREATE TABLE directeurs(   
                          id_dir int(11) NOT NULL AUTO_INCREMENT,
                          mail_dir varchar (255), 
                          pseudo_dir varchar(255), 
                          nom_dir varchar(255),
                          prenom_dir varchar(255),
                          statut_dir varchar(50), 
                          num_dir int(10),
                          date_naiss_dir date, 
                          fk_id_anim int(11),
                          FOREIGN KEY (fk_id_anim) REFERENCES animateurs(id_anim),
                          PRIMARY KEY (id_dir)
                       ); 




CREATE TABLE sejours( id_sejour int(5) NOT NULL AUTO_INCREMENT,
                      nom_sejour varchar(50),
                      date_debut date,
                      date_fin date,
                      lieu_sejour varchar(255),
                      fk_id_dir int(11),
                      fk_id_anim int(11), 
                      fk_id_enf  int(11),
                      FOREIGN KEY (fk_id_dir) REFERENCES directeurs(id_dir),
                      FOREIGN KEY (fk_id_anim) REFERENCES animateurs(id_anim),
                      FOREIGN KEY (fk_id_enf) REFERENCES enfants(id_enf),
                   	  PRIMARY KEY (id_sejour)) ; 

