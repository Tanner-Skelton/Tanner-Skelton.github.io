DROP TABLE IF EXISTS Feedback, Bios, Users;

CREATE TABLE Feedback (
	feedbackID int NOT NULL AUTO_INCREMENT,
	Message VARCHAR(255),
    Email VARCHAR(255),
    lirstName VARCHAR(255),
    lastName VARCHAR(255),
    PRIMARY KEY (feedbackID)
    );

CREATE TABLE Bios (
	biosID int NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(255),
    lastName VARCHAR(255),
    About VARCHAR(255),
    PRIMARY KEY (biosID)
    );
    
CREATE TABLE Users (
	usersID int NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    email VARCHAR(255),
    userPassword VARCHAR(255),
    PRIMARY KEY (usersID)
);
