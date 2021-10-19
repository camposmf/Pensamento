USE pensamentodb;

CREATE TABLE tb_pensamento (
	id_pensamento INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nm_username VARCHAR(100) NOT NULL,
	ds_pensamento VARCHAR(100) NOT NULL,
	ds_gpsocial VARCHAR(100) NOT NULL
);