/*
SQLyog Enterprise - MySQL GUI
MySQL - 5.0.27-community-nt 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `userlist` (
	`name` varchar (150),
	`email` varchar (150),
	`password` varchar (150),
	`gender` varchar (30),
	`dob` date 
); 
insert into `userlist` (`name`, `email`, `password`, `gender`, `dob`) values('Aakash','a@s.com','1','male','0000-00-00');
insert into `userlist` (`name`, `email`, `password`, `gender`, `dob`) values('Aakash','aks021.blackcat@gmail.com','1','male','1999-06-08');
insert into `userlist` (`name`, `email`, `password`, `gender`, `dob`) values('Aakash','saha.aakash@ymail.com','1234','Male','1994-03-19');
insert into `userlist` (`name`, `email`, `password`, `gender`, `dob`) values('srijata','srijata18@gmail.com','1234','male','1999-06-08');
