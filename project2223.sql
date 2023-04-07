use project2223;

CREATE TABLE `users` (
`UserID` int(10) unsigned NOT NULL AUTO_INCREMENT,
`Username` varchar(100) NOT NULL,
`UserEmail` varchar(100) NOT NULL,
`UserPassword` varchar(500) NOT NULL,
`UserFirstName` varchar(50) NOT NULL DEFAULT "",
`UserLastName` varchar(50) NOT NULL DEFAULT "",
`UserPhone` varchar(20) NOT NULL DEFAULT "",
`UserAddress` varchar(100) NOT NULL DEFAULT "",
`UserCountry` varchar(30) NOT NULL DEFAULT "",
`UserRegistrationAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`UserUpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`UserRole` int(1) unsigned NOT NULL DEFAULT 2,
PRIMARY KEY (`UserID`),
FOREIGN KEY (`UserRole`) REFERENCES `Roles`(`RoleID`)
) ENGINE=InnoDB;

drop table users;
select * from users;
insert into users(`Username`, `UserEmail`, `UserPassword`, `UserRole`) values("admin", "admin@gmail.com", "$2y$10$giZBkg9KM0NV4BNR9ECj2egH6RssE0FdxOhNqJv3oCD59PiQ6Rzg2", 0);
insert into users(`Username`, `UserEmail`, `UserPassword`, `UserRole`) values("owner", "owner@gmail.com", "$2y$10$7fv6g6.A96lGjlD3wL4prOlP7LdOTIbefV1mL96I8l1vGJf0ldB8C", 1);
insert into users(`Username`, `UserEmail`, `UserPassword`, `UserRole`) values("customer", "customer@gmail.com", "$2y$10$IaSQdj9zyE52KrKrXnzFk.pQ0Eus7pwou1pMxduQ4X/1ESEAs7Gbq", 2);


CREATE TABLE `Roles` (
	`RoleID` int(1) unsigned NOT NULL DEFAULT 2,
	`RoleName` varchar(100) NOT NULL,
	`RoleCreateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`RoleUpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`RoleID`)
) ENGINE=InnoDB;

drop tables roles;

insert into Roles(`RoleID`, `RoleName`) values (0, "admin");
insert into Roles(`RoleID`, `RoleName`) values (1, "owner");
insert into Roles(`RoleID`, `RoleName`) values (2, "customer");
select * from roles;

CREATE TABLE Products (
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`ProductID` VARCHAR(5) NOT NULL UNIQUE,
	`CategoryID` VARCHAR(5) NOT NULL,
    -- `UnitID` VARCHAR(5) NOT NULL,
	`ProductName` VARCHAR(255) NOT NULL,
    `ProductImg` VARCHAR(255) NOT NULL,
    `ProductShortDesc` TEXT,
	`ProductInfo` TEXT,
	`ProductPrice` DECIMAL(10, 2) NOT NULL,
    `ProductQuantity` INT(11) UNSIGNED NOT NULL,
	`ProductCreatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`ProductUpdatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`,`ProductID`),
    FOREIGN KEY (`CategoryID`) REFERENCES `Categories`(`CategoryID`)
    -- ,FOREIGN KEY (`UnitID`) REFERENCES `Categories`(`UnitID`)
) ENGINE=InnoDB;

ALTER TABLE Products MODIFY ProductID VARCHAR(10) NOT NULL DEFAULT 'SP000';
DELIMITER //
CREATE TRIGGER set_product_code BEFORE INSERT ON Products
FOR EACH ROW
BEGIN
  SET @next_code = (SELECT MAX(ProductID) FROM Products);
  IF (@next_code IS NULL) THEN SET @next_code = 'SP000'; END IF;
  SET NEW.ProductID = CONCAT('SP', LPAD(SUBSTR(@next_code, 3) + 1, 3, '0'));
END//


drop table products;
insert into products(`ProductID`,`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("SP001", "F", "Strawberry", "strawberry.png","Strawberries, sweet, juicy and packed with Vitamin C, antioxidants and fiber. Available all year round.",
		"Red watermelon is a fruit rich in water and essential vitamins and minerals, especially low in calories and fat. Watermelon is considered a substitute for regular drinking water. Watermelon is sweet when it has a dark green rind, withered stem, and yellow area on the tail."
        , 25, 78);
        


insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Banana", "banana.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 25.3, 87);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Grape", "grape.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 7.79, 38);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Mango", "mango.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 69.60, 52);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Orange", "orange.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 89.16, 94);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Peach", "peach.png","Strawberries, sweet, juicy and packed with Vitamin C, antioxidants and fiber. Available all year round.",
		"Red watermelon is a fruit rich in water and essential vitamins and minerals, especially low in calories and fat. Watermelon is considered a substitute for regular drinking water. Watermelon is sweet when it has a dark green rind, withered stem, and yellow area on the tail."
        , 48.73, 144);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Pineapple", "pineapple.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 71.37, 197);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("F", "Strawberry", "strawberry.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 3.56, 172);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Cauliflower", "cauliflower.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 44.24, 14);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Cucumber", "cucumber.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 43.69, 61);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Eggplant", "eggplant.png","Strawberries, sweet, juicy and packed with Vitamin C, antioxidants and fiber. Available all year round.",
		"Red watermelon is a fruit rich in water and essential vitamins and minerals, especially low in calories and fat. Watermelon is considered a substitute for regular drinking water. Watermelon is sweet when it has a dark green rind, withered stem, and yellow area on the tail."
        , 64.20, 88);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Peppers", "peppers.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 74.27, 135);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Potatoes", "potatoes.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 35.74, 21);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("V", "Tomatoes", "tomatoes.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 17.03, 57);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("M", "Beef", "beef.png","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 17.35, 106);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("M", "Chicken", "chicken.png","Strawberries, sweet, juicy and packed with Vitamin C, antioxidants and fiber. Available all year round.",
		"Red watermelon is a fruit rich in water and essential vitamins and minerals, especially low in calories and fat. Watermelon is considered a substitute for regular drinking water. Watermelon is sweet when it has a dark green rind, withered stem, and yellow area on the tail."
        , 29.58, 79);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("M", "Lamb", "lamb.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 42.13, 34);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("D", "TH trueButter", "butter.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 31.14, 83);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("D", "Moon Cheese", "cheese-snack.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 64.82, 3);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("D", "THtruemilk", "thtruemilk.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 19.27, 78);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("D", "Yogurt Vinamilk", "yogurt-vinamilk.jpg","Strawberries, sweet, juicy and packed with Vitamin C, antioxidants and fiber. Available all year round.",
		"Red watermelon is a fruit rich in water and essential vitamins and minerals, especially low in calories and fat. Watermelon is considered a substitute for regular drinking water. Watermelon is sweet when it has a dark green rind, withered stem, and yellow area on the tail."
        , 15.64, 124);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("D", "Vinamilk", "vinamilk.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 33.57, 142);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("Dr", "Red Wine", "red-wine.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 66.55, 133);
insert into products(`CategoryID`,`ProductName`,`ProductImg`,`ProductShortDesc`,`ProductInfo`, `ProductPrice`, `ProductQuantity`) 
	values ("Dr", "Fresh juice", "juice.jpg","Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.",
		"Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere."
        , 65.91, 29);


CREATE TABLE Categories(
	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`CategoryID` VARCHAR(5) NOT NULL UNIQUE,
    `CategoryName` VARCHAR(100) NOT NULL,
    `CategoryCreatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `CategoryUpdatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(`ID`,`CategoryID`)
) ENGINE=InnoDB;

drop table Categories;
insert into Categories(`CategoryID`, `CategoryName`) values ("F", "Fruits");
insert into Categories(`CategoryID`, `CategoryName`) values ("V", "Vegetables");
insert into Categories(`CategoryID`, `CategoryName`) values ("M", "Meat");
insert into Categories(`CategoryID`, `CategoryName`) values ("D", "Dairy");
insert into Categories(`CategoryID`, `CategoryName`) values ("Dr", "Drink");


-- CREATE TABLE ProductImages(
-- 	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
-- 	`ProductID` VARCHAR(5) NOT NULL,
--     `ImgUrl` VARCHAR(255) NOT NULL,
--     `ImgCreatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     `ImgUpdatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
--     PRIMARY KEY(`ID`),
--     FOREIGN KEY (`ProductID`) REFERENCES `Products`(`ProductID`)
-- ) ENGINE=InnoDB;

-- CREATE TABLE Units(
-- 	`ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
--     `UnitID` VARCHAR(5) NOT NULL,
--     `UnitName` VARCHAR(255) NOT NULL,
--     `UnitCreatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     `UnitUpdatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
--     PRIMARY KEY(`ID`,`UnitID`)
-- ) ENGINE=InnoDB;
