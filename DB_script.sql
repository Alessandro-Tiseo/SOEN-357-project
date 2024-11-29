CREATE TABLE `student` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` varchar(45) NOT NULL,
    `password` varchar(45) NOT NULL,
    `given_name` varchar(45) NOT NULL,
    `surname` varchar(45) NOT NULL,

    CONSTRAINT `uq_student_email`
    UNIQUE(`email`),

    CONSTRAINT `student_id`
    PRIMARY KEY(`id`)
);

--Add Students
INSERT INTO `student` (`email`, `password`, `given_name`, `surname`)
VALUES ('Molson@Concordia.ca', 'JMSB', 'John', 'Molson');
INSERT INTO `student` (`email`, `password`, `given_name`, `surname`)
VALUES ('validemail@yahoo.ca', 'MyPwd', 'Guy', 'Concordia');