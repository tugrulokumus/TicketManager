CREATE DATABASE ticket_management;

USE ticket_management;

/*Table structure for table activities */

CREATE TABLE activities (
  ID int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100),
  activity_type_id int(11),
  activity_time datetime,
  city_id int(11),
  showroom_id int(11),
  PRIMARY KEY (ID),
  KEY fk_city_id (city_id),
  KEY fk_showroom_id (showroom_id),
  KEY fk_activity_type (activity_type_id),
  CONSTRAINT fk_activity_type FOREIGN KEY (activity_type_id) REFERENCES activity_types (ID),
  CONSTRAINT fk_city_id FOREIGN KEY (city_id) REFERENCES cities (ID) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_showroom_id FOREIGN KEY (showroom_id) REFERENCES showrooms (ID)
) ENGINE=InnoDB;

/*Data for the table activities */

insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (1,'CRR Caz Orkestrası',3,'2016-12-28 20:00:00',1,6);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (2,'Olten Filarmoni/Yeni Yıl Konseri',3,'2016-12-21 20:00:00',3,9);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (3,'Rogue One:A Star Wars Story',1,'2016-12-28 15:45:00',2,3);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (4,'Rogue One: A Star Wars Story',1,'2016-12-30 21:45:00',2,3);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (5,'Fantastic Beasts and Where To Find Them',1,'2016-12-21 14:15:00',1,1);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (6,'Fantastic Beasts and Where To Find Them',1,'2016-12-28 21:00:00',1,1);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (7,'Guguk Kuşu',2,'2016-12-25 18:00:00',1,5);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (8,'Anadolu Ateşi',4,'2016-12-24 20:30:00',2,8);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (9,'Fındıkkıran',4,'2016-12-23 20:00:00',1,7);
insert  into activities(ID,name,activity_type_id,activity_time,city_id,showroom_id) values (10,'Yeni Yıl Konseri',3,'2016-12-29 20:00:00',1,7);

/*Table structure for table activity_types */


CREATE TABLE activity_types (
  ID int(11) NOT NULL AUTO_INCREMENT,
  name varchar(65),
  PRIMARY KEY (ID),
  UNIQUE KEY name_UNIQUE (name)
) ENGINE=InnoDB;

/*Data for the table activity_types */

insert  into activity_types(ID,name) values (1,'Cinema');
insert  into activity_types(ID,name) values (3,'Concert');
insert  into activity_types(ID,name) values (4,'Dance');
insert  into activity_types(ID,name) values (2,'Theatre');

/*Table structure for table cities */


CREATE TABLE cities (
  ID int(11) NOT NULL AUTO_INCREMENT,
  name varchar(64) ,
  PRIMARY KEY (ID)
) ENGINE=InnoDB;

/*Data for the table cities */

insert  into cities(ID,name) values (1,'Istanbul');
insert  into cities(ID,name) values (2,'Ankara');
insert  into cities(ID,name) values (3,'Izmır');

/*Table structure for table reservations */


CREATE TABLE reservations (
  ID int(11) NOT NULL AUTO_INCREMENT,
  activity_id int(11),
  user_id int(11),
  ticket_count int(11),
  PRIMARY KEY (ID),
  KEY fk_actvity_id (activity_id),
  KEY fk_user_id (user_id),
  CONSTRAINT fk_actvity_id FOREIGN KEY (activity_id) REFERENCES activities (ID),
  CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (ID)
) ENGINE=InnoDB;

/*Data for the table reservations */

insert  into reservations(ID,activity_id,user_id,ticket_count) values (1,3,1,2);
insert  into reservations(ID,activity_id,user_id,ticket_count) values (2,5,2,3);
insert  into reservations(ID,activity_id,user_id,ticket_count) values (3,7,3,2);

/*Table structure for table showrooms */

CREATE TABLE showrooms (
  ID int(11) NOT NULL AUTO_INCREMENT,
  name varchar(64),
  city_id int(11),
  PRIMARY KEY (ID),
  KEY fk_showrooms_city_id (city_id),
  CONSTRAINT fk_showrooms_city_id FOREIGN KEY (city_id) REFERENCES cities (ID)
) ENGINE=InnoDB;

/*Data for the table showrooms */

insert  into showrooms(ID,name,city_id) values (1,'Cinemaximum',1);
insert  into showrooms(ID,name,city_id) values (2,'Cinema Pink',1);
insert  into showrooms(ID,name,city_id) values (3,'Cinemaximum',2);
insert  into showrooms(ID,name,city_id) values (5,'Zorlu PSM',1);
insert  into showrooms(ID,name,city_id) values (6,'Cemal Reşit Rey',1);
insert  into showrooms(ID,name,city_id) values (7,'Süreyya Operası',1);
insert  into showrooms(ID,name,city_id) values (8,'ATO Gösteri Merkezi',2);
insert  into showrooms(ID,name,city_id) values (9,'AAS Sanat Merkezi',3);

/*Table structure for table users */


CREATE TABLE users (
  ID int(11) NOT NULL AUTO_INCREMENT,
  UserName varchar(64) ,
  Password varchar(64) NOT NULL,
  PRIMARY KEY (ID),
  UNIQUE KEY UserName_UNIQUE (UserName)
) ENGINE=InnoDB;

/*Data for the table users */

insert  into users(ID,UserName,Password) values (1,'begum','12345');
insert  into users(ID,UserName,Password) values (2,'tugrul','67890');
insert  into users(ID,UserName,Password) values (3,'reyhan','54321');

/*Table structure for table view_reservations */

CREATE  VIEW view_reservations AS 
	select activities.name AS name,users.UserName AS username,reservations.ticket_count AS ticket_count 
	from ((activities join reservations on((activities.ID = reservations.activity_id))) join users on((users.ID = reservations.user_id)));
