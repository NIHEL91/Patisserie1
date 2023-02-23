#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        idUser       Int  Auto_increment  NOT NULL ,
        role         Varchar (50) NOT NULL ,
        email        Varchar (50) NOT NULL ,
        password     Varchar (10) NOT NULL ,
        lastname     Varchar (50) NOT NULL ,
        firstname    Varchar (50) NOT NULL ,
        phone        Int NOT NULL ,
        adress       Varchar (50) NOT NULL ,
        registerdate Datetime NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: product
#------------------------------------------------------------

CREATE TABLE product(
        IdProduct   Int  Auto_increment  NOT NULL ,
        name        Varchar (50) NOT NULL ,
        description Varchar (150) NOT NULL ,
        image       Varchar (150) NOT NULL ,
        price       Float NOT NULL ,
        etat        Bool NOT NULL ,
        nombreparts Int NOT NULL ,
        promo       Varchar (255) NOT NULL
	,CONSTRAINT product_PK PRIMARY KEY (IdProduct)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: category
#------------------------------------------------------------

CREATE TABLE category(
        idCategory  Int  Auto_increment  NOT NULL ,
        name        Varchar (50) NOT NULL ,
        description Varchar (150) NOT NULL ,
        image       Varchar (150) NOT NULL ,
        etat        Bool NOT NULL
	,CONSTRAINT category_PK PRIMARY KEY (idCategory)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        IdCommande Int  Auto_increment  NOT NULL ,
        date       Datetime NOT NULL ,
        idUser     Int NOT NULL
	,CONSTRAINT commande_PK PRIMARY KEY (IdCommande)

	,CONSTRAINT commande_users_FK FOREIGN KEY (idUser) REFERENCES users(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        IdFavoris Int  Auto_increment  NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (IdFavoris)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        idContact Int  Auto_increment  NOT NULL ,
        email     Varchar (50) NOT NULL ,
        objectif  Varchar (255) NOT NULL ,
        message   Varchar (100) NOT NULL ,
        idUser    Int
	,CONSTRAINT contact_PK PRIMARY KEY (idContact)

	,CONSTRAINT contact_users_FK FOREIGN KEY (idUser) REFERENCES users(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit de categorie
#------------------------------------------------------------

CREATE TABLE produit_de_categorie(
        IdProduct                      Int NOT NULL ,
        idCategory                     Int NOT NULL ,
        IdProduct_produit_de_categorie Int NOT NULL
	,CONSTRAINT produit_de_categorie_PK PRIMARY KEY (IdProduct,idCategory,IdProduct_produit_de_categorie)

	,CONSTRAINT produit_de_categorie_product_FK FOREIGN KEY (IdProduct) REFERENCES product(IdProduct)
	,CONSTRAINT produit_de_categorie_category0_FK FOREIGN KEY (idCategory) REFERENCES category(idCategory)
	,CONSTRAINT produit_de_categorie_product1_FK FOREIGN KEY (IdProduct_produit_de_categorie) REFERENCES product(IdProduct)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ligne_commande
#------------------------------------------------------------

CREATE TABLE ligne_commande(
        IdProduct                 Int NOT NULL ,
        IdCommande                Int NOT NULL ,
        IdProduct_ligne_commande  Int NOT NULL ,
        IdCommande_ligne_commande Int NOT NULL ,
        id_lignecommande          Int NOT NULL
	,CONSTRAINT ligne_commande_PK PRIMARY KEY (IdProduct,IdCommande,IdProduct_ligne_commande,IdCommande_ligne_commande)

	,CONSTRAINT ligne_commande_product_FK FOREIGN KEY (IdProduct) REFERENCES product(IdProduct)
	,CONSTRAINT ligne_commande_commande0_FK FOREIGN KEY (IdCommande) REFERENCES commande(IdCommande)
	,CONSTRAINT ligne_commande_product1_FK FOREIGN KEY (IdProduct_ligne_commande) REFERENCES product(IdProduct)
	,CONSTRAINT ligne_commande_commande2_FK FOREIGN KEY (IdCommande_ligne_commande) REFERENCES commande(IdCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit_favoris
#------------------------------------------------------------

CREATE TABLE produit_favoris(
        IdFavoris Int NOT NULL ,
        IdProduct Int NOT NULL
	,CONSTRAINT produit_favoris_PK PRIMARY KEY (IdFavoris,IdProduct)

	,CONSTRAINT produit_favoris_favoris_FK FOREIGN KEY (IdFavoris) REFERENCES favoris(IdFavoris)
	,CONSTRAINT produit_favoris_product0_FK FOREIGN KEY (IdProduct) REFERENCES product(IdProduct)
)ENGINE=InnoDB;

