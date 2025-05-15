--userTable
CREATE TABLE Users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50)NOT NULL,
    LastName VARCHAR(50)NOT NULL,
    Email VARCHAR(100)UNIQUE NOT NULL,
    Password VARCHAR(255)NOT NULL
);
-- PetTable
CREATE TABLE Pets (
    PetID INT PRIMARY KEY AUTO_INCREMENT,
    Specifies ENUM('Bird','Dog','Cat')NOT NULL,
    Gender ENUM('Male','Female')NOT NULL,
    Available BOOLEAN DEFAULT False,
    Price DECIMAL(10,2)NOT NULL
);
-- OrderTable
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY AUTO_INCREMENT,
    Quantity INT NOT NULL,
    Price DECIMAL(10,2)NOT NULL,
    UserID INT,
    PetID INT,
    FOREIGN KEY(UserID)REFERENCES Users(ID),
    FOREIGN KEY(PetID)REFERENCES Pets(PetID)
);
--------------------------------------------------------------------
--insert users data
INSERT INTO Users (ID,FirstName,LastName, Email,Password) VALUES('madona','ashraf','madona@example.com','m@2004'),
('sara','mark','sara005@example.com','sm005'),('Youssef','ramez','youssef@example.com','y#666'),
('Salma','khalid','salma25@example.com','s258'),('maria','hany','maria99@example.com','maria&555'),
('Ahmed','Ali','ahmed123.ali@example.com','123'),('Mona','Hassan','mona@example.com','7m8'),
('Youssef','Kamal','youssef2003@example.com','Y&2003'),('Salma','Omar','salma@example.com','19#80'),
('Tarek','Ibrahim','tarek15@example.com','tarek&2015');
--insert pets data
INSERT INTO Pets(Specifies,Gender,Available,Price)VALUES
('dog','male',TRUE,1200.00),('cat','female',TRUE,900.00),('bird','male',FALSE,300.00),('dog','female',TRUE,1500.00),
('cat','male',FALSE,800.00),('cat','female',TRUE,2350.00),('bird','female',TRUE,980.00),('bird','male',TRUE,450.00),
('dog','male',TRUE,1600.00),('bird','male',FALSE,500.00);
--insert orders data
INSERT INTO Orders(Quantity,Price,UserID,PetID)VALUES
(1,1200.00,1,1),(1,900.00,10,2),(2,600.00,2,3),(1,1500.00,8,4),(1,800.00,9,5),(1,2350.00,1,6),(1,980.00,5,7),   
(2,900.00,3,8),(1,1600.00,4,9),(1,500.00,5,10); 



