create database bus;

create table user(username varchar(70),emailid	varchar(100),mobilenumber int(200),gender varchar(50),color varchar(50),password varchar(100),dateofbirth date);

INSERT INTO `user` (`username`, `emailid`, `mobilenumber`, `gender`, `color`, `password`, `dateofbirth`) VALUES ('1', '1', '1', '1', '1', '1', '2020-02-11');


CREATE table admin(username varchar(70),password varchar(100),mobilenumber int(200),emailid varchar(100));

INSERT INTO `admin` (`username`, `password`, `mobilenumber`, `emailid`) VALUES ('1', '1', '1', '1');

CREATE table buses(busno int(200),fromplace varchar(100),toplace varchar(100),fromtimeplace time,totimeplace time,seat int(100),status varchar(100),direction varchar(100));

INSERT INTO `buses` (`busno`, `fromplace`, `toplace`, `fromtimeplace`, `totimeplace`, `seat`, `status`,`direction`) VALUES ('1', 'theni', 'bodi', '21:00:00', '57:00:00', '32', 'active','1');

ALTER TABLE `buses` ADD PRIMARY KEY(`busno`);

DELETE FROM `buses` WHERE busno='$bn';


INSERT INTO `studentdetails` (`name`, `reg_number`, `roll_number`, `father_name`, `nationality`, `religion`, `caste`, `community`, `sex`, `dateofbirth`, `course`, `branch`, `admittedon`, `receiptno`, `receiptdate`, `mothertongue`, `state`, `present_address`, `taluk`, `city`, `district`, `cell_number`, `aadhar_number`, `tcno`, `issuedon`, `Year_Of_Passout`) VALUES ('Bhavani R', '1715007', '17cs008', 'Rangasamy A', 'Indian', 'Hindu', 'BC', 'Gowda', 'Female', '2000-03-14', 'BE', 'Computer Science and Engineering', '2020-03-10', '12', '2020-01-09', 'Tamil', 'Tamilnadu', '13yugiu', 'Bodinyakanur', 'Karaikudi', 'Theni', '1234567890', '1234567890', '123', '2020-03-18', '2021');