CREATE TABLE `student` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` varchar(45) NOT NULL,
    `password` varchar(45) NOT NULL,
    `given_name` varchar(45) NOT NULL,
    `surname` varchar(45) NOT NULL,

    CONSTRAINT `student_id`
    PRIMARY KEY(`id`)
)

INSERT INTO `student` (`email`, `password`, `given_name`, `surname`)
VALUES ('Molson@Concordia.ca', 'JMSB', 'John', 'Molson');