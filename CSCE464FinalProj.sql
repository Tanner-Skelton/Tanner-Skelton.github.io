DROP TABLE IF EXISTS Feedback, Bios, CartProduct, ShoppingCart, Products, FilledOrders, Users;

CREATE TABLE Feedback (
		feedbackID int NOT NULL AUTO_INCREMENT,
		Message VARCHAR(255),
    Email VARCHAR(255),
    firstName VARCHAR(255),
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

CREATE TABLE Products (
		productID int NOT NULL AUTO_INCREMENT,
		name VARCHAR(255),
		description VARCHAR(255),
		price FLOAT,
		sku VARCHAR(255),
		inventory int,
		PRIMARY KEY (productID)
);

CREATE TABLE ShoppingCart (
		shoppingCartID int NOT NULL AUTO_INCREMENT,
		usersID int,
		FOREIGN KEY (usersID) REFERENCES Users(usersID),
		PRIMARY KEY (shoppingCartID)
);

CREATE TABLE CartProduct (
		cartProductID int NOT NULL AUTO_INCREMENT,
		productID int,
		FOREIGN KEY (productID) REFERENCES Products(productID),
		cartID int,
		FOREIGN KEY (cartID) REFERENCES ShoppingCart(shoppingCartID),
		PRIMARY KEY (cartProductID)
);

CREATE TABLE FilledOrders (
		filledOrderID int NOT NULL AUTO_INCREMENT,
		productList VARCHAR(255),
		totalPrice FLOAT,
		usersID int,
		FOREIGN KEY (usersID) REFERENCES Users(usersID),
		PRIMARY KEY (filledOrderID)
);

INSERT INTO Products (name, description, price, sku, inventory) VALUES ("pencil", "wooden writing utensil that utilizes graphite to write things, comes presharpened *sharpener not included*", 50.00, "23423lk2j23jl3", 10);

INSERT INTO Products (name, description, price, sku, inventory) VALUES ("light-saber", "If you don't know what this is you probably should not be buying it", 1000.00, "23423luke230923", 10);

INSERT INTO Products (name, description, price, sku, inventory) VALUES ("force gum (mace windu mint)", "chewing gum that gives the chewer the force while the gum still has flavor", 4.99, "2erhd2j23jl3", 10);

