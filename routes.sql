/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.0.27-community-nt 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `routes` (
	`bid` varchar (30),
	`source` varchar (90),
	`destination` varchar (90),
	`departuretime` time 
); 
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b1','Kolkata','Siliguri','10:30:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b1','Siliguri','Kolkata','20:00:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b2','Kolkata','Durgapur','05:30:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b2','Durgapur','Kolkata','15:45:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b3','Kolkata','Darjeeling','12:00:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b3','Darjeeling','Kolkata','23:45:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b4','Kolkata','Ranchi','16:00:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b4','Ranchi','Kolkata','11:00:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b5','Kolkata','Tata Nagar','18:15:00');
insert into `routes` (`bid`, `source`, `destination`, `departuretime`) values('b5','Tata Nagar','Kolkata','11:00:00');
