/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.0.27-community-nt 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `offer` (
	`offerid` varchar (30),
	`offername` varchar (150)
); 
insert into `offer` (`offerid`, `offername`) values('off1','10% off for passenger with age 80+');
insert into `offer` (`offerid`, `offername`) values('off2','5% off new year');
