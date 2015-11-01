use musikkavis

CREATE TABLE bruker
(
	e_mail varchar(100) NOT NULL,
	passord varchar(20) NOT NULL,
	fornavn text NOT NULL,
	etternavn text NOT NULL,
	registered DATE NOT NULL,
	sub_expire DATE,
	utype int, 
	PRIMARY KEY (e_mail)
	
);

CREATE TABLE artikkel_type
(
	a_typeID varchar(100) NOT NULL,
	PRIMARY KEY (a_typeID)
);

CREATE TABLE artikkel
(
	artikkelID int IDENTITY(1,1) NOT NULL,
	tittel text NOT NULL,
	tekst text NOT NULL,
	ingress text NOT NULL,
	bildeurl text NOT NULL,
	PRIMARY KEY (artikkelID),
	a_typeID varchar(100) FOREIGN KEY REFERENCES artikkel_type(a_typeID)
	
);

CREATE TABLE artikkel_bruker
(
	e_mail varchar(100) FOREIGN KEY REFERENCES bruker(e_mail),
	artikkelID int FOREIGN KEY REFERENCES artikkel(artikkelID),
	artikkel_forfatter bit NOT NULL,
	artikkel_liker bit NOT NULL,
	PRIMARY KEY (artikkelID, e_mail)
);

CREATE TABLE kommentar
(
	kommentarID int NOT NULL,
	tittel text NOT NULL,
	tekst text NOT NULL,
	PRIMARY KEY (kommentarID),
	artikkelID int FOREIGN KEY REFERENCES artikkel(artikkelID),
);

CREATE TABLE kommentar_bruker
(
	kommentarID int FOREIGN KEY REFERENCES kommentar(kommentarID),
	e_mail varchar(100) FOREIGN KEY REFERENCES bruker(e_mail),
	kommentar_forfatter bit NOT NULL,
	kommentar_liker bit NOT NULL,
	PRIMARY KEY (e_mail, kommentarID)
);
