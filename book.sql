/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.0.27-community-nt 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `book` (
	`name` varchar (150),
	`email` varchar (150),
	`bid` varchar (30),
	`seats` double ,
	`source` varchar (150),
	`destination` varchar (150),
	`bustype` varchar (15),
	`depart_date` date ,
	`dept_time` time ,
	`bookid` double 
); 
insert into `book` (`name`, `email`, `bid`, `seats`, `source`, `destination`, `bustype`, `depart_date`, `dept_time`, `bookid`) values('Aakash','aks021.blackcat@gmail.com','b3','4','Kolkata','Darjeeling','AC','2016-07-08','12:00:00','1');
