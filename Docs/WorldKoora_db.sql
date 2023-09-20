/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  9/18/2023 9:07:01 PM                     */
/*==============================================================*/


drop table if exists BLOG;

drop table if exists CITY;

drop table if exists COACH;

drop table if exists COUNTRY;

drop table if exists LEAGUE;

drop table if exists "MATCH";

drop table if exists MATCHINFOS;

drop table if exists NEWS;

drop table if exists PICTURES;

drop table if exists PLAYER;

drop table if exists PLAYERDETAILS;

drop table if exists RAPPORTDETAILS;

drop table if exists RAPPORTMATCH;

drop table if exists REACTION;

drop table if exists TEAM;

drop table if exists TEAMNATIONAL;

drop table if exists VIDEO;

/*==============================================================*/
/* Table : BLOG                                                 */
/*==============================================================*/
create table BLOG
(
   BLOGID               char(10) not null,
   NEWSID               int not null,
   PICTURESID           int not null,
   VIDEOID              int not null,
   primary key (BLOGID)
);

/*==============================================================*/
/* Table : CITY                                                 */
/*==============================================================*/
create table CITY
(
   CITYID               int not null auto_increment,
   COUNTRYID            int not null,
   LOGO                 text,
   primary key (CITYID)
);

/*==============================================================*/
/* Table : COACH                                                */
/*==============================================================*/
create table COACH
(
   COACHID              char(10) not null,
   TEAMID               int not null,
   FIRSTNAME            varchar(60),
   LASTNAME             varchar(60),
   DATEOFBIRTH__        date,
   PHOTO                char(150),
   primary key (COACHID)
);

/*==============================================================*/
/* Table : COUNTRY                                              */
/*==============================================================*/
create table COUNTRY
(
   COUNTRYID            int not null auto_increment,
   COUNTRYNAME          char(60),
   primary key (COUNTRYID)
);

/*==============================================================*/
/* Table : LEAGUE                                               */
/*==============================================================*/
create table LEAGUE
(
   LIGUEID              int not null auto_increment,
   LIGUENAME            char(60),
   COUNTRY              char(60),
   primary key (LIGUEID)
);

/*==============================================================*/
/* Table : "MATCH"                                              */
/*==============================================================*/
create table "MATCH"
(
   MATCHID              int not null auto_increment,
   TEAMID               int not null,
   TEA_TEAMID           int not null,
   LIGUEID              int not null,
   DATEANDTIME          datetime,
   SCORETEAMA           int,
   SCORETEAMB           int,
   MATCHSTATUT          char(60),
   primary key (MATCHID)
);

/*==============================================================*/
/* Table : MATCHINFOS                                           */
/*==============================================================*/
create table MATCHINFOS
(
   MATCHINFOID          int not null auto_increment,
   MATCHID              int not null,
   PLAYERID             int not null,
   REDCARD              bool,
   YELLOWCARD           bool,
   GOALS                bool,
   ASSISTS              bool,
   INJURY               bool,
   primary key (MATCHINFOID)
);

/*==============================================================*/
/* Table : NEWS                                                 */
/*==============================================================*/
create table NEWS
(
   NEWSID               int not null auto_increment,
   TITLE__              char(50),
   DATEANDTIME__        datetime,
   DESCRIPTION__        text,
   primary key (NEWSID)
);

/*==============================================================*/
/* Table : PICTURES                                             */
/*==============================================================*/
create table PICTURES
(
   PICTURESID           int not null auto_increment,
   PATH                 char(200),
   primary key (PICTURESID)
);

/*==============================================================*/
/* Table : PLAYER                                               */
/*==============================================================*/
create table PLAYER
(
   PLAYERID             int not null auto_increment,
   PLAYERID2            int not null,
   TEAMID               int not null,
   TEAMID2              int not null,
   FIRSTNAME            varchar(60),
   LASTNAME             varchar(60),
   NATIONALITY          char(60),
   PLAYERNUMBER         int,
   DATEOFBIRTH          date,
   AGE                  int,
   HEIGHT               float,
   WEIGHT               float,
   POSITION             char(20),
   PHOTO                char(150),
   primary key (PLAYERID)
);

/*==============================================================*/
/* Table : PLAYERDETAILS                                        */
/*==============================================================*/
create table PLAYERDETAILS
(
   PLAYERID2            int not null auto_increment,
   ASSISTS__            int,
   PASSES__             int,
   PASSESPERMATCH__     int,
   BIGCHANCESCREATED__  int,
   YELLOWCARDS__        int,
   HEIGHTREDCARDS__     int,
   FOULS__              int,
   OFFSIDES__           int,
   primary key (PLAYERID2)
);

/*==============================================================*/
/* Table : RAPPORTDETAILS                                       */
/*==============================================================*/
create table RAPPORTDETAILS
(
   RAPPORTDETAILSID     int not null auto_increment,
   MATCHID              int not null,
   RAPPORTID            int not null,
   PICTURESID           int not null,
   VIDEOID              int not null,
   primary key (RAPPORTDETAILSID)
);

/*==============================================================*/
/* Table : RAPPORTMATCH                                         */
/*==============================================================*/
create table RAPPORTMATCH
(
   RAPPORTID            int not null auto_increment,
   CONTENT              text,
   primary key (RAPPORTID)
);

/*==============================================================*/
/* Table : REACTION                                             */
/*==============================================================*/
create table REACTION
(
   REACTIONID           int not null auto_increment,
   BLOGID               char(10) not null,
   COMMENT              text,
   "LIKE"               bool,
   USERNAME             char(60),
   primary key (REACTIONID)
);

/*==============================================================*/
/* Table : TEAM                                                 */
/*==============================================================*/
create table TEAM
(
   TEAMID               int not null auto_increment,
   LIGUEID              int not null,
   TEAMNAME             varchar(60),
   CREATIONDATE         date,
   COUNTRY              char(60),
   NUMBEROFPLAYER       int,
   RANK                 int,
   PRESEDENT            char(60),
   CITYNAME             char(10),
   LOGO                 text,
   primary key (TEAMID)
);

/*==============================================================*/
/* Table : TEAMNATIONAL                                         */
/*==============================================================*/
create table TEAMNATIONAL
(
   TEAMID2              int not null auto_increment,
   TEAMNAME             varchar(60),
   CREATIONDATE         date,
   COUNTRY              char(60),
   NUMBEROFPLAYER       int,
   RANK                 int,
   PRESEDENT            char(60),
   LOGO                 text,
   primary key (TEAMID2)
);

/*==============================================================*/
/* Table : VIDEO                                                */
/*==============================================================*/
create table VIDEO
(
   VIDEOID              int not null,
   PATH                 char(200),
   primary key (VIDEOID)
);

alter table BLOG add constraint FK_ASSOCIATION_10 foreign key (PICTURESID)
      references PICTURES (PICTURESID) on delete restrict on update restrict;

alter table BLOG add constraint FK_ASSOCIATION_11 foreign key (VIDEOID)
      references VIDEO (VIDEOID) on delete restrict on update restrict;

alter table BLOG add constraint FK_ASSOCIATION_7 foreign key (NEWSID)
      references NEWS (NEWSID) on delete restrict on update restrict;

alter table CITY add constraint FK_ASSOCIATION_8 foreign key (COUNTRYID)
      references COUNTRY (COUNTRYID) on delete restrict on update restrict;

alter table COACH add constraint FK_ASSOCIATION_5 foreign key (TEAMID)
      references TEAM (TEAMID) on delete restrict on update restrict;

alter table "MATCH" add constraint FK_ASSOCIATION_17 foreign key (LIGUEID)
      references LEAGUE (LIGUEID) on delete restrict on update restrict;

alter table "MATCH" add constraint FK_ASSOCIATION_3 foreign key (TEAMID)
      references TEAM (TEAMID) on delete restrict on update restrict;

alter table "MATCH" add constraint FK_ASSOCIATION_4 foreign key (TEA_TEAMID)
      references TEAM (TEAMID) on delete restrict on update restrict;

alter table MATCHINFOS add constraint FK_ASSOCIATION_12 foreign key (MATCHID)
      references "MATCH" (MATCHID) on delete restrict on update restrict;

alter table MATCHINFOS add constraint FK_ASSOCIATION_19 foreign key (PLAYERID)
      references PLAYER (PLAYERID) on delete restrict on update restrict;

alter table PLAYER add constraint FK_ASSOCIATION_1 foreign key (PLAYERID2)
      references PLAYERDETAILS (PLAYERID2) on delete restrict on update restrict;

alter table PLAYER add constraint FK_ASSOCIATION_18 foreign key (TEAMID2)
      references TEAMNATIONAL (TEAMID2) on delete restrict on update restrict;

alter table PLAYER add constraint FK_ASSOCIATION_2 foreign key (TEAMID)
      references TEAM (TEAMID) on delete restrict on update restrict;

alter table RAPPORTDETAILS add constraint FK_ASSOCIATION_13 foreign key (MATCHID)
      references "MATCH" (MATCHID) on delete restrict on update restrict;

alter table RAPPORTDETAILS add constraint FK_ASSOCIATION_14 foreign key (RAPPORTID)
      references RAPPORTMATCH (RAPPORTID) on delete restrict on update restrict;

alter table RAPPORTDETAILS add constraint FK_ASSOCIATION_15 foreign key (PICTURESID)
      references PICTURES (PICTURESID) on delete restrict on update restrict;

alter table RAPPORTDETAILS add constraint FK_ASSOCIATION_16 foreign key (VIDEOID)
      references VIDEO (VIDEOID) on delete restrict on update restrict;

alter table REACTION add constraint FK_ASSOCIATION_9 foreign key (BLOGID)
      references BLOG (BLOGID) on delete restrict on update restrict;

alter table TEAM add constraint FK_ASSOCIATION_6 foreign key (LIGUEID)
      references LEAGUE (LIGUEID) on delete restrict on update restrict;

