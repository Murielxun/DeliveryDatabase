DROP TABLE Customer;
DROP TABLE Address;
DROP TABLE Giftcard_Buys;
DROP TABLE Coupon;
DROP TABLE Receives;
DROP TABLE Order;
DROP TABLE Order_Fee;
DROP TABLE Restaurant;
DROP TABLE Courier;
DROP TABLE Vehicle_Courier;
DROP TABLE Bicycle_Courier;
DROP TABLE Foot_Courier;
DROP TABLE Menu_Items_Has;
DROP TABLE Vehicle_Drives;

CREATE TABLE Customer(
	customer_id INTEGER NOT NULL,
	email CHAR(40) NOT NULL,
	age INTEGER DEFAULT 0,
	phone_number CHAR(20) NOT NULL,
	street_address CHAR(100) NOT NULL,
	postal_code CHAR(10) NOT NULL,
	name CHAR(30),
	reward_points INTEGER DEFAULT 0,
	rewards_tier CHAR(20) DEFAULT ‘Insider’,
	account_balance REAL DEFAULT 0,
	PRIMARY KEY(customer_id),
    UNIQUE (email),
	FOREIGN KEY (postal_code) REFERENCES Address
);

CREATE TABLE Address(
	postal_code CHAR(10) NOT NULL,
	city CHAR(20),
	province CHAR(20),
	PRIMARY KEY (postal_code)
);

CREATE TABLE Giftcard_Buys(
	customer_id INTEGER NOT NULL,
	card_number INTEGER NOT NULL,
	recipient_email CHAR(40) NOT NULL,
	recipient_name CHAR(30) DEFAULT 'Friend',
	expiry_date DATE,
	balance REAL,
	PRIMARY KEY (card_number),
	FOREIGN KEY (customer_id) REFERENCES Customer ON DELETE NO ACTION
);

CREATE TABLE Coupon(
	coupon_code CHAR(10) NOT NULL,
	expire_date DATE,
	discount_amount REAL,
	PRIMARY KEY (coupon_code)
);


CREATE TABLE Receives(
	customer_id INTEGER NOT NULL,
	coupon_code CHAR(20) NOT NULL,
	PRIMARY KEY (customer_id, coupon_code),
	FOREIGN KEY (customer_id) REFERENCES Customer,
	FOREIGN KEY (coupon_code) REFERENCES Coupon
);

CREATE TABLE Order (
	delivery_address CHAR(40) NOT NULL,
	restaurant_address CHAR(40),
	food_subtotal REAL,
	delivery_fee REAL,
	courier_tips REAL,
	payment_method CHAR(20),
	menu_items CHAR(500),
	date_placed DATE,
	order_number INTEGER NOT NULL,
	customer_id INTEGER NOT NULL,
	courier_id INTEGER NOT NULL,
	restaurant_id INTEGER NOT NULL,
	card_number INTEGER,
	coupon_code CHAR(10),
	PRIMARY KEY (order_number),
	FOREIGN KEY (customer_id) REFERENCES Customer ON DELETE NO ACTION,
	FOREIGN KEY (courier_id) REFERENCES Courier ON DELETE NO ACTION,
	FOREIGN KEY (restaurant_id) REFERENCES Restaurant ON DELETE NO ACTION,
	FOREIGN KEY (card_number) REFERENCES Giftcard_Buys,
	FOREIGN KEY (coupon_code) REFERENCES Coupon
);


CREATE TABLE Order_Fee (
	delivery_fee REAL,
	food_subtotal REAL,
	courier_tips REAL,
	total_price REAL,
	PRIMARY KEY (delivery_fee, food_subtotal, courier_tips)
);


CREATE TABLE Restaurant(
	restaurant_id INTEGER NOT NULL,
	postal_code CHAR(10),
	name CHAR(20),
	category CHAR(20),
	rating REAL,
	street_address CHAR(100),
	PRIMARY KEY (restaurant_id),
	UNIQUE (street_address, postal_code),
	FOREIGN KEY (postal_code) REFERENCES Address
);

CREATE TABLE Courier (
	courier_id INTEGER NOT NULL,
	name CHAR(20),
	rating REAL,
	phone_number CHAR(20) NOT NULL,
	PRIMARY KEY (courier_id)
);

CREATE TABLE Vehicle_Courier(
	valid_vehicle  CHAR(1) DEFAULT 'n',
	valid_insurance CHAR(1) DEFAULT 'n',
	drivers_license CHAR(20),
	courier_id INTEGER NOT NULL,
	PRIMARY KEY (courier_id),
	UNIQUE (drivers_license),
	FOREIGN KEY (courier_id) REFERENCES Courier,
    CONSTRAINT vehicle_check CHECK (valid_vehicle = 'n' OR valid_vehicle = 'y'),
    CONSTRAINT insurance_check CHECK (valid_insurance = 'n' OR valid_insurance = 'y')
);

CREATE TABLE Bicycle_Courier(
	courier_id INTEGER NOT NULL,
	valid_bicycle CHAR(1) DEFAULT 'n',
	PRIMARY KEY (courier_id),
	FOREIGN KEY (courier_id) REFERENCES Courier,
    CONSTRAINT bicycle_check CHECK (valid_bicycle = 'n' OR valid_bicycle = 'y')
);

CREATE TABLE Foot_Courier(
	courier_id INTEGER NOT NULL,
	bus_pass CHAR(20),
	PRIMARY KEY (courier_id),
	UNIQUE (bus_pass),
	FOREIGN KEY (courier_id) REFERENCES Courier
);
 
CREATE TABLE Vehicle_Drives (
	vehicle_id INTEGER NOT NULL,
	type CHAR(20),
	courier_id INTEGER NOT NULL,
	PRIMARY KEY (vehicle_id),
	FOREIGN KEY (courier_id) REFERENCES Vehicle_Courier ON DELETE NO ACTION
);


CREATE TABLE Menu_Items_Has(
	name CHAR(20) NOT NULL,
	description CHAR(100),
	ingredient CHAR(100),
	category CHAR(20),
	price REAL,
	restaurant_id INTEGER NOT NULL,
	PRIMARY KEY (restaurant_id, name),
	FOREIGN KEY (restaurant_id) REFERENCES Restaurant ON DELETE CASCADE ON UPDATE CASCADE
);


-- create tuples for customer
INSERT INTO Customer (customer_id, email, age, phone_number, street_address, postal_code, name, reward_points, rewards_tier, account_balance)
VALUES (100001, 'abcde@gmail.com', 17, '7781112223', '2788 90th Avenue', 'N2H 5A5', 'Alice', 400, 'VIB', 11);

INSERT INTO Customer (customer_id, email, age, phone_number, street_address, postal_code, name, reward_points, rewards_tier, account_balance)
VALUES (100002, 'adfe@hotmail.com', 21, '7781112224', '3521 Algonquin Blvd #400', 'H2A 2Z3', 'Jack', 401, 'VIB', 111);

INSERT INTO Customer (customer_id, email, age, phone_number, street_address, postal_code, name, reward_points, rewards_tier, account_balance)
VALUES (100003, 'hamm0nd@gmail.com', 33, '7781112225', '57 49th Avenue', 'T0H 1N0', 'Waston', 0, 'Insider', 11);

INSERT INTO Customer (customer_id, email, age, phone_number, street_address, postal_code, name, reward_points, rewards_tier, account_balance)
VALUES (100004, 'tracer@outlook.com', 19, '7781112226', '1441 5th Avenue', 'S4P 3Y2', 'Tracer', 1001, 'Rouge', 32);

INSERT INTO Customer (customer_id, email, age, phone_number, street_address, postal_code, name, reward_points, rewards_tier, account_balance)
VALUES (100005, 'dontawe@gmail.com', 45, '7781112227', '4727 Ste. Catherine Ouest', 'G6P 5V8', 'Ark', 1, 'Insider', 103);


-- create tuples for coupon
INSERT INTO Coupon (coupon_code, expire_date, discount_amount)
VALUES ('20203', '2020-12-30', 50);

INSERT INTO Coupon (coupon_code, expire_date, discount_amount)
VALUES ('20204', '2021-12-30', 10);

INSERT INTO Coupon (coupon_code, expire_date, discount_amount)
VALUES ('20205', '2020-11-30', 5);

INSERT INTO Coupon (coupon_code, expire_date, discount_amount)
VALUES ('20206', '2021-01-30', 55);

INSERT INTO Coupon (coupon_code, expire_date, discount_amount)
VALUES ('20207', '2021-01-01', 100);

-- create tuples for receives
INSERT INTO Receives (customer_id, coupon_code) 
VALUES (100001, '20203');

INSERT INTO Receives (customer_id, coupon_code) 
VALUES (100002, '20204');

INSERT INTO Receives (customer_id, coupon_code) 
VALUES (100003, '20205');

INSERT INTO Receives (customer_id, coupon_code) 
VALUES (100004, '20206');

INSERT INTO Receives (customer_id, coupon_code) 
VALUES (100005, '20207');

-- create tuples for restaurant
INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200001, 'N2H 5A5', 'Qilin', 'Asian', 5, '2788 90th Avenue');

INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200002, 'H2A 2Z3', 'McBur', 'Fast food', 4.45, '3521 Algonquin Blvd #400');

INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200003, 'T0H 1N0', 'Tea House', 'Asian', 3.99, '57 49th Avenue');

INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200004, 'S4P 3Y2', 'GrilledCk', 'Fast food', 3.99, '1441 5th Avenue');

INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200005, 'G6P 5V8', 'Passione', 'Italian', 4.5, '4727 Ste. Catherine Ouest');

INSERT INTO Restaurant (restaurant_id, postal_code, name, category, rating, street_address)
VALUES (200006, 'G6P 5V8', 'Highest Rating Italian Restaurant', 'Italian', 4.9, '4729 Ste. Catherine Ouest');

-- create tuples for Courier
INSERT INTO Courier (courier_id, name, rating, phone_number)
VALUES (30001, 'Will', 5, '7661112223');

INSERT INTO Courier (courier_id, name, rating, phone_number)
VALUES (30002, 'Mick', 4.45, '7661112224');

INSERT INTO Courier (courier_id, name, rating, phone_number)
VALUES (30003, 'David', 3.99, '7661112225');

INSERT INTO Courier (courier_id, name, rating, phone_number)
VALUES (30004, 'Cart', 3.99, '7661112226');

INSERT INTO Courier (courier_id, name, rating, phone_number)
VALUES (30005, 'Meg', 4.5, '7661112227');

INSERT INTO Courier VALUES (0000000, 'Ema Skye', 9.7, '7781112222');
INSERT INTO Courier VALUES (0000001, 'Dick Gumshoe', 7.5, '7785550000');
INSERT INTO Courier VALUES (0000002, 'Kristoph Gavin', 3.2, '7789112345');
INSERT INTO Courier VALUES (0000003, 'Dahlia Hawthorne', 8.6, '7784446781');
INSERT INTO Courier VALUES (0000004, 'Simon Blackquill', 9.6, '7787118322');

-- creat tuples for vehicle courier
INSERT INTO Vehicle_Courier (valid_vehicle, valid_insurance, drivers_license, courier_id )
VALUES ('y', 'y', '772910239', 30001);

INSERT INTO Vehicle_Courier (valid_vehicle, valid_insurance, drivers_license, courier_id )
VALUES ('y', 'y', '772910238', 30002);

INSERT INTO Vehicle_Courier (valid_vehicle, valid_insurance, drivers_license, courier_id )
VALUES ('y', 'n', '772910237', 30003);

INSERT INTO Vehicle_Courier (valid_vehicle, valid_insurance, drivers_license, courier_id )
VALUES ('y', 'y', '772910236', 30004);

INSERT INTO Vehicle_Courier (valid_vehicle, valid_insurance, drivers_license, courier_id )
VALUES ('y', 'y', '772910235', 30005);

-- create tuples for vehicle_drives 
INSERT INTO Vehicle_Drives (vehicle_id, type, courier_id)
VALUES (40001, 'SUV', 30001);

INSERT INTO Vehicle_Drives (vehicle_id, type, courier_id)
VALUES (40002, 'SUV', 30002);

INSERT INTO Vehicle_Drives (vehicle_id, type, courier_id)
VALUES (40003, 'SUV', 30003);

INSERT INTO Vehicle_Drives (vehicle_id, type, courier_id)
VALUES (40004, 'Coupe', 30004);

INSERT INTO Vehicle_Drives (vehicle_id, type, courier_id)
VALUES (40005, 'Coupe', 30005);

-- create tuples for bicycle_courier
INSERT INTO Bicycle_Courier (courier_id, valid_bicycle)
VALUES (30001, 'y');

INSERT INTO Bicycle_Courier (courier_id, valid_bicycle)
VALUES (30002, 'y');

INSERT INTO Bicycle_Courier (courier_id, valid_bicycle)
VALUES (30003, 'y');

INSERT INTO Bicycle_Courier (courier_id, valid_bicycle)
VALUES (30004, 'y');

INSERT INTO Bicycle_Courier (courier_id, valid_bicycle)
VALUES (30005, 'n');

-- create tuples for foot-courier
INSERT INTO Foot_Courier (courier_id, bus_pass) 
VALUES (30001, '1928311238');

INSERT INTO Foot_Courier (courier_id, bus_pass) 
VALUES (30002, '1928311237');

INSERT INTO Foot_Courier (courier_id, bus_pass) 
VALUES (30003, '1928311236');

INSERT INTO Foot_Courier (courier_id, bus_pass) 
VALUES (30004, '1928311232');

INSERT INTO Foot_Courier (courier_id, bus_pass) 
VALUES (30005, '1928311231');


-- create tuples for giftcard
INSERT INTO Giftcard_Buys (customer_id, card_number, recipient_email, recipient_name, expiry_date, balance)
VALUES (100001, 1234567890, 'abcde@gmail.com', 'Alice', '2020-11-30', 100);

INSERT INTO Giftcard_Buys (customer_id, card_number, recipient_email, recipient_name, expiry_date, balance)
VALUES (100002, 1234567891, 'adfe@hotmail.com', 'Jack', '2020-11-30', 200);

INSERT INTO Giftcard_Buys (customer_id, card_number, recipient_email, recipient_name, expiry_date, balance)
VALUES (100003, 1234567892, 'hamm0nd@gmail.com', 'Waston', '2020-11-30', 300);

INSERT INTO Giftcard_Buys (customer_id, card_number, recipient_email, recipient_name, expiry_date, balance)
VALUES (100004, 1234567893, 'tracer@outlook.com', 'Tracer', '2020-11-30', 400);

INSERT INTO Giftcard_Buys (customer_id, card_number, recipient_email, recipient_name, expiry_date, balance)
VALUES (100005, 1234567894, 'dontawe@gmail.com', 'Ark', '2020-11-30', 500);

-- create tuples for address 
INSERT INTO Address (postal_code, city, province)
VALUES ('N2H 5A5', 'Kitchener', 'Ontario');

INSERT INTO Address (postal_code, city, province)
VALUES ('H2A 2Z3', 'Montreal', 'Quebec');

INSERT INTO Address (postal_code, city, province)
VALUES ('T0H 1N0', 'John Dor Prairie', 'Alberta');

INSERT INTO Address (postal_code, city, province)
VALUES ('S4P 3Y2', 'Wollaston Lake', 'Saskatchewan');

INSERT INTO Address (postal_code, city, province)
VALUES ('G6P 5V8', 'Arthabaska', 'Quebec');

-- create tuples for order
INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '2788 90th Avenue', 19.99, 1.99, 1.99, 'account balance', 'coffee', '2019-10-11', 500001, 100001, 30001, 200001, 1234567890, '20203');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '3521 Algonquin Blvd #400', 33.2, 2.99, 3.99, 'account balance', 'coffee', '2019-10-16 10:01:30', 500006, 100001, 30001, 200002, 1234567890, '20203');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '57 49th Avenue', 20, 3.99, 4.99, 'account balance', 'coffee', '2019-10-15 12:45:10', 500007, 100001, 30001, 200003, 1234567890, '20203');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '1441 5th Avenue', 19.99, 1.99, 1.99, 'account balance', 'coffee', '2019-10-12 14:02:23', 500008, 100001, 30001, 200004, NULL, NULL);

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '4727 Ste. Catherine Ouest', 19.99, 1.99, 1.99, 'account balance', 'coffee', '2019-10-13 08:13:20', 500009, 100001, 30001, 200005, NULL, NULL);

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('2788 90th Avenue', '4729 Ste. Catherine Ouest', 19.99, 1.99, 1.99, 'account balance', 'coffee', '2019-10-14 16:24:12', 500010, 100001, 30001, 200006, NULL, NULL);

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('3521 Algonquin Blvd #400', '3521 Algonquin Blvd #400', 33.2, 2.99, 3.99, 'account balance', 'coffee', '2020-10-11 05:54:58', 500002, 100002, 30002, 200002, 1234567891, '20204');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('57 49th Avenue', '57 49th Avenue', 20, 3.99, 4.99, 'account balance', 'burger', '2020-01-11 11:09:18', 500003, 100003, 30003, 200003, 1234567892, '20205');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('1441 5th Avenue', '1441 5th Avenue', 11, 2.99, 3.99, 'account balance', 'fries', '2020-11-11 07:09:51', 500004, 100004, 30004, 200004, 1234567893, '20206');

INSERT INTO Order 
(delivery_address, restaurant_address, food_subtotal, delivery_fee, courier_tips, payment_method, menu_items,date_placed, order_number, customer_id, courier_id, restaurant_id, card_number, coupon_code)
VALUES ('4727 Ste. Catherine Ouest', '4727 Ste. Catherine Ouest', 5.99, 2.99, 3.99, 'account balance', 'noodles', '2019-10-11 09:18:18', 500005, 100005, 30005, 200005, 1234567894, '20207');

INSERT INTO Order VALUES ('881 Anderson Court', '912 Westminister Avenue', '19.48', '4.49', '0.0', 'AMERICAN EXPRESS',
                            'Big Mac, Large Fries, Diet Coke', '2020-03-14 09:30:45', 0192999, 100001, 0000000, 200003,
                            null, null);
			    
INSERT INTO Order VALUES ('312 Ash Walk', '1112 Kinder Grove', '24.90', '2.49', '0.15', 'GOOGLE PAY',
                            'Chicken Teriyaki Roll, Tuna Sashimi, Fried Gyoza', '2020-05-01 18:20:34', 7189012,
                            100001, 0000000, 200003, null, null);
			    
INSERT INTO Order VALUES ('702 Lea Drive', '101 Commonwealth Avenue', '33.21', '3.49', '3.50', 'CASH',
                            'Beef Pho, Spring Roll, Chicken Wings, Coffee', '2019-12-25 12:50:24', 0001249,
                            100002, 0000001, 200003, null, null);
			    
INSERT INTO Order VALUES ('4532 Fieldway', '373 Hutton Bank', '120.45', '5.49', '10.0', 'VISA',
                            'Vegetable Samosas, Veggie Platter, Tandoori Chicken, Butter Paneer',
                            '2020-09-13 10:01:01', 1236895, 100002, 0000000, 200002, null, null);
			    
INSERT INTO Order VALUES ('333 Mayflower Avenue', '991 St Johns Avenue', '88.11', '2.49', '6.50', 'GOOGLE PAY',
                            'Smoked Fish, Spicy Beef Tripe, Salted Duck, Chili Wontons, Seafood Soup',
                            '2020-01-01 18:45:16', 9111245, 100002, 0000001, 200002, null, null);
			    
INSERT INTO Order VALUES ('1890 Kenry Street', '404 Cranwell Grove', '57.16', '4.49', '3.15', 'MASTERCARD',
                            'Jasmine Green Tea, Winter Melon Drink, Caramel Milk Tea, Soft Tofu Soup, Kimchi Soup',
                            '2020-05-16 13:14:15', 5436432, 100004, 0000001, 200006, null, null);
			    
INSERT INTO Order VALUES ('1775 Glentworth Road', '2341 Montfort Drive', '26.41', '4.49', '0.0', 'CASH',
                            'Tex Mex Bowl, Fiesta Salad, Strawberry Banana Smoothie', '2019-12-04 11:08:12',
                            4443511, 100004, 0000002, 200004, null, null);
			    
INSERT INTO Order VALUES ('512 Simpson Street', '522 Dickinson Road', '150.49', '2.49', '20.75', 'AMERICAN EXPRESS',
                            'Sushi Party Tray D, Sashimi Tray', '2020-07-01 19:30:30', 2221492,
                            100003, 0000002, 200004, null, null);
			    
INSERT INTO Order VALUES ('017 Tythings Street', '3667 Anthony Crescent', '52.65', '1.49', '5.0', 'VISA',
                            'Vietnamese Sub, Rice Noodle Soup, Grilled Pork, Spring Roll', '2020-01-21 10:35:51',
                            5281932, 100003, 0000003, 200005, null, null);
			    
INSERT INTO Order VALUES ('1546 Western Esplanade', '1781 Florence Gardens', '73.50', '3.49', '7.25', 'MASTERCARD',
                            'Seafood Tofu Soup, Sweet Potato Noodles, BBQ Beef Short Ribs, Pork Bone Hot Pot',
                            '2020-07-01 18:12:21', 8101012, 100003, 0000004, 200005, null, null);

-- create tuples for order_fee
INSERT INTO Order_Fee (delivery_fee, food_subtotal, courier_tips, total_price)
VALUES (1.99, 19.99, 1.99, 23.97);

INSERT INTO Order_Fee (delivery_fee, food_subtotal, courier_tips, total_price)
VALUES (2.99, 33.2, 3.99, 40.18);

INSERT INTO Order_Fee (delivery_fee, food_subtotal, courier_tips, total_price)
VALUES (3.99, 20, 4.99, 28.98);

INSERT INTO Order_Fee (delivery_fee, food_subtotal, courier_tips, total_price)
VALUES (2.99, 11, 3.99, 17.98);

INSERT INTO Order_Fee (delivery_fee, food_subtotal, courier_tips, total_price)
VALUES (2.99, 5.99, 3.99, 12.97);

-- create tuples for menu_items_has
INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('coffee', 'Just order it', 'milk', 'beverages', 3.99, 200001);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('milk', 'Just order it', 'milk', 'beverages', 3.99, 200001);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('pasta', 'Just order it', 'flour', 'dinner', 7.99, 200001);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('noodles', 'Just order it', 'flour', 'dinner', 7.99, 200001);



INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('coffee', 'Just order it', 'milk', 'beverages', 3.99, 200002);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('burger', 'Just order it', 'chicken', 'dinner', 8.99, 200003);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('fries', 'Just order it', 'potato', 'dinner', 3.99, 200004);

INSERT INTO Menu_Items_Has (name, description, ingredient, category, price, restaurant_id)
VALUES ('noodles', 'Just order it', 'flour', 'dinner', 6.99, 200005);
