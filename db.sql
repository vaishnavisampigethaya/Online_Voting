CREATE TABLE `student`.`tbadministrators` ( `admin_id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(35) NOT NULL , `last_name` VARCHAR(35) NOT NULL , `email` varchar(50) NOT NULL ,`password` varchar(35) NOT NULL, PRIMARY KEY (`admin_id`)) ENGINE = InnoDB; 




CREATE TABLE `student`.`tbcandidates` ( `candidate_id` INT NOT NULL AUTO_INCREMENT , `candidate_name` VARCHAR(35) NOT NULL , `candidate_position` VARCHAR(35) NOT NULL , `candidate_cvotes` INT NOT NULL , PRIMARY KEY (`candidate_id`)) ENGINE = InnoDB; 


CREATE TABLE `student`.`tbmembers` ( `member_id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(35) NOT NULL , `last_name` VARCHAR(35) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(35) NOT NULL , PRIMARY KEY (`member_id`, `email`(50))) ENGINE = InnoDB; 


CREATE TABLE `student`.`tbposition` ( `position_id` INT NOT NULL AUTO_INCREMENT , `position_name` VARCHAR(35) NOT NULL , PRIMARY KEY (`position_id`, `position_name`(35))) ENGINE = InnoDB; 


ALTER TABLE `tbposition` ADD INDEX(`position_name`); 


ALTER TABLE `tbcandidates` ADD CONSTRAINT `fk1` FOREIGN KEY (`candidate_position`) REFERENCES `tbposition`(`position_name`) ON DELETE CASCADE ON UPDATE CASCADE; 


INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, 'admin', '123', 'admin@gmail.com', 'admin');
CREATE PROCEDURE `getposition`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT * from `tbposition`; 




