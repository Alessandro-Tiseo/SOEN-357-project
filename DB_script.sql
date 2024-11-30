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

CREATE TABLE `tutor` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` varchar(45) NOT NULL,
    `password` varchar(45) NOT NULL,
    `given_name` varchar(45) NOT NULL,
    `surname` varchar(45) NOT NULL,

    CONSTRAINT `uq_tutor_email`
    UNIQUE(`email`),

    CONSTRAINT `tutor_id`
    PRIMARY KEY(`id`)
);

CREATE TABLE `session` (
    `student_id` INT NOT NULL,
    `tutor_id` INT NOT NULL,
    `day` DATE,
    `time` TIMESTAMP,
    `subject` varchar(30),

    CONSTRAINT `uq_session`
    PRIMARY KEY(`student_id`, `tutor_id`, `day`, `time`),

    FOREIGN KEY (`student_id`) REFERENCES student(`id`),
    FOREIGN KEY (`tutor_id`) REFERENCES tutor(`id`)
);

INSERT INTO `student` (`email`, `password`, `given_name`, `surname`)
VALUES ('Molson@Concordia.ca', 'JMSB', 'John', 'Molson');
INSERT INTO `student` (`email`, `password`, `given_name`, `surname`)
VALUES ('validemail@yahoo.ca', 'MyPwd', 'Guy', 'Concordia');

INSERT INTO `tutor` (`email`, `password`, `given_name`, `surname`)
VALUES ('Cody@Concordia.ca', 'SOEN', 'Gina', 'Cody');
INSERT INTO `tutor` (`email`, `password`, `given_name`, `surname`)
VALUES ('realemail@yahoo.ca', 'MyPwd', 'Ven', 'Dome');
INSERT INTO `tutor` (`email`, `password`, `given_name`, `surname`)
VALUES ('actualmail@yahoo.ca', 'MyPwd', 'Honore', 'Beaugrand');

INSERT INTO `session` (`student_id`, `tutor_id`, `day`, `time`, `subject`)
VALUES ('1', '1', '2000-11-30', '11:59:00', 'SOEN357');
INSERT INTO `session` (`student_id`, `tutor_id`, `day`, `time`, `subject`)
VALUES ('1', '2', '2000-12-31', '11:59:00', 'MATH 205');
INSERT INTO `session` (`student_id`, `tutor_id`, `day`, `time`, `subject`)
VALUES ('1', '3', '2000-12-31', '13:59:00', 'MATH 204');