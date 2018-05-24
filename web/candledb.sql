DROP TABLE IF EXISTS Inventory CASCADE;
DROP TABLE IF EXISTS Orders CASCADE;
DROP TABLE IF EXISTS Customer CASCADE;


CREATE TABLE Inventory (
  Inventory_ID serial NOT NULL,
  ProductName VARCHAR(255) NOT NULL,
  Price INT NOT NULL,
  Images VARCHAR(255) NOT NULL, 
  Quantity INT NOT NULL, 
  CONSTRAINT pk_Inventory_ID PRIMARY KEY (Inventory_ID)
);

CREATE TABLE Orders (
  Order_ID serial NOT NULL,
  OrderDate TIMESTAMP,
  Inventory_ID INT NOT NULL,
  Amount INT NOT NULL, 
  Customer_ID INT NOT NULL,
  CONSTRAINT pk_Order_ID PRIMARY KEY (Order_ID)
  );

CREATE TABLE Customer (
  Customer_ID serial NOT NULL,
  FirstName VARCHAR(255) NOT NULL, 
  LastName VARCHAR(255) NOT NULL, 
  Address VARCHAR(255) NOT NULL, 
  Email VARCHAR(255) NOT NULL, 
  Payment VARCHAR(255) NOT NULL, 
  Order_ID INT NOT NULL, 
  CONSTRAINT pk_Customer_ID PRIMARY KEY (Customer_ID)
  );
 
  ALTER TABLE Orders 
  ADD CONSTRAINT fk_Orders_Inventory_ID FOREIGN KEY (Inventory_ID) REFERENCES Inventory(Inventory_ID);
  
  ALTER TABLE Orders
  ADD CONSTRAINT fk_Orders_Customer_ID FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID); 
  
  ALTER TABLE Customer
  ADD CONSTRAINT fk_Customer_Order_ID FOREIGN KEY (Order_ID) REFERENCES Orders(Order_ID);   


