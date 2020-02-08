create database bus;

create table user(username varchar(70),emailid	varchar(100),mobilenumber int(200),gender varchar(50),color varchar(50),password varchar(100),dateofbirth date);

INSERT INTO `user` (`username`, `emailid`, `mobilenumber`, `gender`, `color`, `password`, `dateofbirth`) VALUES ('1', '1', '1', '1', '1', '1', '2020-02-11');


CREATE table admin(username varchar(70),password varchar(100),mobilenumber int(200),emailid varchar(100));


CREATE table buses(busno int(200),fromplace varchar(100),toplace varchar(100),fromtimeplace time,totimeplace time,seat int(100));

INSERT INTO `buses` (`busno`, `fromplace`, `toplace`, `fromtimeplace`, `totimeplace`, `seat`) VALUES ('123', '2', '1', '21:00:00', '57:00:00', '32');
