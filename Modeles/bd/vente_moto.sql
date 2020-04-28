/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     21/04/2020 21:09:33                          */
/*==============================================================*/


drop table if exists administrateur;

drop table if exists moto;

/*==============================================================*/
/* Table: administrateur                                        */
/*==============================================================*/
create table administrateur
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   mail                 varchar(254),
   motdepasse           varchar(254),
   primary key (id)
);


/*==============================================================*/
/* Table: moto                                                  */
/*==============================================================*/
create table moto
(
   id                   int not null AUTO_INCREMENT,
   modele               varchar(254),
   marque               varchar(254),
   cylindre             varchar(254),
   categorie            varchar(254),
   numeroSerie          varchar(254),
   prix                 int,
   annee                date,
   primary key (id)
);

