CREATE DATABASE JAZZ;



CREATE TABLE Customer(
userId INT PRIMARY KEY,
f_name VARCHAR(100),
l_name VARCHAR(100),
city VARCHAR(100),
country VARCHAR(100),
postal_code VARCHAR(100)
)

CREATE TABLE Feedback(
frate VARCHAR(50),
date VARCHAR(15),
comment VARCHAR(15),
UNIQUE(frate)
)

CREATE TABLE category(
cat_no INT,
UNIQUE(cat_no)
)

CREATE TABLE Administator(
admin_Id int,
email VARCHAR(50),
f_Name VARCHAR(20),
l_Name VARCHAR(20),

CONSTRAINT admin_pk PRIMARY KEY (admin_Id)
)

CREATE TABLE RegisterdCustomer(
customerId INT,
CONSTRAINT rc_pk PRIMARY KEY(customerId)
)

CREATE TABLE submit(
user_Id INT,
rate VARCHAR(50),
CONSTRAINT submit_pk PRIMARY KEY (user_Id,rate),
CONSTRAINT submit_fk FOREIGN KEY (user_Id)REFERENCES customer(userID),
CONSTRAINT sfeed_fk FOREIGN KEY (rate) REFERENCES Feedback(frate)
)

CREATE TABLE Orders(
order_Id INT,
quantity INT,
total_amount FLOAT,
admin_Id INT,
user_Id INT,
CONSTRAINT o_pk PRIMARY KEY (order_Id),
CONSTRAINT ad_fk FOREIGN KEY (admin_Id) REFERENCES Administator(admin_ID),
CONSTRAINT us_fk FOREIGN KEY (user_Id) REFERENCES Customer(userId)
)

CREATE TABLE Delivers(
d_Id INT,
order_id INT,
dates VARCHAR(15),
CONSTRAINT d_pk PRIMARY KEY (d_id),
CONSTRAINT d_fk FOREIGN KEY (order_id) REFERENCES Orders(Order_Id)
)

CREATE TABLE Belongs(
cat_no int,
product_id int,
CONSTRAINT b_pk PRIMARY KEY (cat_no,product_id),
CONSTRAINT b_fk FOREIGN KEY (product_id) REFERENCES Product(product_Id)
)

CREATE TABLE Cart(
cart_id INT,
customer_id INT,
CONSTRAINT c_pk PRIMARY KEY (cart_id),
CONSTRAINT c_fk FOREIGN KEY (customer_id) REFERENCES RegisterdCustomer(customerId)
)

CREATE TABLE Deliveryperson(
d_id int,
workingHours int,
salary int,
l_name VARCHAR(50),
f_name VARCHAR(50),
adminId int,
CONSTRAINT d_pk PRIMARY KEY (d_id),
CONSTRAINT d_fk FOREIGN KEY (adminID) REFERENCES Administator(admin_Id)
)

CREATE TABLE Product(
product_Id int,
name VARCHAR(50),
price INT,
description VARCHAR(100),
cart_id INT,
CONSTRAINT p_pk PRIMARY KEY (product_Id),
CONSTRAINT p_fk FOREIGN KEY (cart_id) REFERENCES Cart(cart_id),
)

CREATE TABLE Deliveryvehicle(
vehicle_no int,
type VARCHAR(50),
did int,
CONSTRAINT dv_pk PRIMARY KEY (vehicle_no),
CONSTRAINT dv_fk FOREIGN KEY (did) REFERENCES Deliveryperson(d_id)
)
CREATE TABLE Have(
order_id int,
product_id int,
CONSTRAINT h_pk PRIMARY KEY (order_id,product_id),
CONSTRAINT o_fk FOREIGN KEY (order_id) REFERENCES Orders(Order_Id),
CONSTRAINT op_fk FOREIGN KEY (product_id) REFERENCES Product(product_Id)
)

CREATE TABLE admin_no(
admin_id int,
phone int,
CONSTRAINT an_pk PRIMARY KEY (admin_id,phone),
CONSTRAINT an_fk FOREIGN KEY (admin_id) REFERENCES Administator(admin_Id)
)

CREATE TABLE user_no(
user_id int,
phone int,
CONSTRAINT u_pk PRIMARY KEY (user_id,phone),
CONSTRAINT u_fk FOREIGN KEY (user_id) REFERENCES Customer(userId)
)

CREATE TABLE deliveryPerson_no(
dp_id int,
phone int,
CONSTRAINT dp_pk PRIMARY KEY (dp_id,phone),
CONSTRAINT dp_fk FOREIGN KEY (dp_id) REFERENCES Deliveryperson(d_id)
)



