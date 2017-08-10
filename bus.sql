/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.0.27-community-nt 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `bus` (
	`bid` varchar (30),
	`type` varchar (30)
); 
insert into `bus` (`bid`, `type`) values('b1','AC');
insert into `bus` (`bid`, `type`) values('b2','AC');
insert into `bus` (`bid`, `type`) values('b3','NON-AC');
insert into `bus` (`bid`, `type`) values('b4','NON-AC');
insert into `bus` (`bid`, `type`) values('b5','NON-AC');
