

-- IMPORTANT NOTES to any future editors (delete this before submitting): 
-- if you plan to edit anything in this file, DO NOT CHANGE THE ORDER OF ANY DROP/CREATE/INSERT STATEMENTS. 
-- The order needs to stay as it is because in SQL:
-- 1. You cannot define a foreign key without defining the table it references first.
-- 2. You cannot delete a foreign key without deleting the table it references first. 
-- 3. You cannot insert a foreign key into a tuple without defining the foreign key in the table it references first. 

-- Also, if making any changes in general, note that there are some SQL keywords that are not supported by Oracle. 
-- For example, Oracle does not support the "ON UPDATE" or "ON DELETE NO ACTION" keywords (reference: https://docs.oracle.com/cd/B19306_01/server.102/b14200/clauses002.htm)

-- Change the date format because the default in SQL is 'dd-mm-yyyy.' 
ALTER SESSION SET NLS_DATE_FORMAT = 'yyyy-mm-dd HH24:mi:ss'; 

DROP TABLE Menu_Items_Has;
DROP TABLE Orders;
DROP TABLE Restaurant;
DROP TABLE Giftcard_Buys;
DROP TABLE Receives;
DROP TABLE Customer;
DROP TABLE Vehicle_Drives;
DROP TABLE Vehicle_Courier;
DROP TABLE Bicycle_Courier;
DROP TABLE Foot_Courier;
DROP TABLE Courier;
DROP TABLE Address;
DROP TABLE Coupon;
DROP TABLE Order_Fee;

CREATE TABLE Order_Fee (
	delivery_fee REAL,
	food_subtotal REAL,
	courier_tips REAL,
	total_price REAL,
	PRIMARY KEY (delivery_fee, food_subtotal, courier_tips)
);

GRANT SELECT ON Order_Fee TO PUBLIC;


CREATE TABLE Coupon(
	coupon_code VARCHAR(10) NOT NULL,
	expire_date DATE,
	discount_amount REAL,
	PRIMARY KEY (coupon_code)
);

GRANT SELECT ON Coupon TO PUBLIC;


CREATE TABLE Address(
	postal_code VARCHAR(10) NOT NULL,
	city VARCHAR(20),
	province VARCHAR(20),
	PRIMARY KEY (postal_code)
);

GRANT SELECT ON Address TO PUBLIC;


CREATE TABLE Courier(
	courier_id INTEGER NOT NULL,
	name VARCHAR(20) NOT NULL,
	rating REAL,
	phone_number VARCHAR(20) NOT NULL,
	PRIMARY KEY (courier_id)
);

GRANT SELECT ON Courier TO PUBLIC;


CREATE TABLE Foot_Courier(
	courier_id INTEGER NOT NULL,
	bus_pass VARCHAR(20),
	PRIMARY KEY (courier_id),
	UNIQUE (bus_pass),
	FOREIGN KEY (courier_id) REFERENCES Courier
);

GRANT SELECT ON Foot_Courier TO PUBLIC;


CREATE TABLE Bicycle_Courier(
	courier_id INTEGER NOT NULL,
	valid_bicycle CHAR(1) DEFAULT 'n',
	PRIMARY KEY (courier_id),
	FOREIGN KEY (courier_id) REFERENCES Courier,
    CONSTRAINT bicycle_check CHECK (valid_bicycle = 'n' OR valid_bicycle = 'y')
);

GRANT SELECT ON Bicycle_Courier TO PUBLIC;


CREATE TABLE Vehicle_Courier(
	valid_vehicle CHAR(1) DEFAULT 'n',
	valid_insurance CHAR(1) DEFAULT 'n',
	drivers_license VARCHAR(20),
	courier_id INTEGER NOT NULL,
	PRIMARY KEY (courier_id),
	UNIQUE (drivers_license),
	FOREIGN KEY (courier_id) REFERENCES Courier,
    CONSTRAINT vehicle_check CHECK (valid_vehicle = 'n' OR valid_vehicle = 'y'),
    CONSTRAINT insurance_check CHECK (valid_insurance = 'n' OR valid_insurance = 'y')
);

GRANT SELECT ON Vehicle_Courier TO PUBLIC;


CREATE TABLE Vehicle_Drives(
	vehicle_id INTEGER NOT NULL,
	type VARCHAR(20),
	courier_id INTEGER NOT NULL,
	PRIMARY KEY (vehicle_id),
	FOREIGN KEY (courier_id) REFERENCES Vehicle_Courier
);

GRANT SELECT ON Vehicle_Drives TO PUBLIC;


CREATE TABLE Customer(
	customer_id INTEGER NOT NULL,
	email CHAR(40) NOT NULL,
	age INTEGER NOT NULL,
	phone_number VARCHAR(20) NOT NULL,
	street_address VARCHAR(100) NOT NULL,
	postal_code VARCHAR(10) NOT NULL,
	name VARCHAR(30),
	reward_points INTEGER DEFAULT 0,
	rewards_tier VARCHAR(20) DEFAULT 'Insider',
	account_balance REAL DEFAULT 0,
	PRIMARY KEY(customer_id),
    UNIQUE (email),
	FOREIGN KEY (postal_code) REFERENCES Address
);

GRANT SELECT ON Customer TO PUBLIC;


CREATE TABLE Receives(
	customer_id INTEGER NOT NULL,
	coupon_code VARCHAR(20) NOT NULL,
	PRIMARY KEY (customer_id, coupon_code),
	FOREIGN KEY (customer_id) REFERENCES Customer,
	FOREIGN KEY (coupon_code) REFERENCES Coupon
);

GRANT SELECT ON Receives TO PUBLIC;


CREATE TABLE Giftcard_Buys(
	customer_id INTEGER NOT NULL,
	card_number INTEGER NOT NULL,
	recipient_email VARCHAR(40) NOT NULL,
	recipient_name VARCHAR(30) DEFAULT 'Friend',
	expiry_date DATE,
	balance REAL,
	PRIMARY KEY (card_number),
	FOREIGN KEY (customer_id) REFERENCES Customer
);

GRANT SELECT ON Giftcard_Buys TO PUBLIC;


CREATE TABLE Restaurant(
	restaurant_id INTEGER NOT NULL,
	postal_code VARCHAR(10),
	name VARCHAR(50),
	category VARCHAR(20),
	rating REAL,
	street_address VARCHAR(100),
	PRIMARY KEY (restaurant_id),
	UNIQUE (street_address, postal_code),
	FOREIGN KEY (postal_code) REFERENCES Address
);

GRANT SELECT ON Restaurant TO PUBLIC;


CREATE TABLE Orders(
	delivery_address VARCHAR(40) NOT NULL,
	restaurant_address VARCHAR(40),
	food_subtotal REAL,
	delivery_fee REAL,
	courier_tips REAL,
	payment_method VARCHAR(20),
	menu_items VARCHAR(500),
	date_placed DATE,
	order_number INTEGER NOT NULL,
	customer_id INTEGER NOT NULL,
	courier_id INTEGER NOT NULL,
	restaurant_id INTEGER NOT NULL,
	card_number INTEGER,
	coupon_code VARCHAR(10),
	PRIMARY KEY (order_number),
	FOREIGN KEY (customer_id) REFERENCES Customer,
	FOREIGN KEY (courier_id) REFERENCES Courier,
	FOREIGN KEY (restaurant_id) REFERENCES Restaurant,
	FOREIGN KEY (card_number) REFERENCES Giftcard_Buys,
	FOREIGN KEY (coupon_code) REFERENCES Coupon
);

GRANT SELECT ON Orders TO PUBLIC;


CREATE TABLE Menu_Items_Has(
	name VARCHAR(50) NOT NULL,
	description VARCHAR(200),
	ingredient VARCHAR(200),
	category VARCHAR(20),
	price REAL,
	restaurant_id INTEGER NOT NULL,
	PRIMARY KEY (restaurant_id, name),
	FOREIGN KEY (restaurant_id) REFERENCES Restaurant ON DELETE CASCADE
);

GRANT SELECT ON Menu_Items_Has TO PUBLIC;


-- create tuples for order_fee
INSERT INTO Order_Fee VALUES (1.99, 19.99, 1.99, 23.97);
INSERT INTO Order_Fee VALUES (2.99, 33.2, 3.99, 40.18);
INSERT INTO Order_Fee VALUES (3.99, 20, 4.99, 28.98);
INSERT INTO Order_Fee VALUES (2.99, 11, 3.99, 17.98);
INSERT INTO Order_Fee VALUES (2.99, 5.99, 3.99, 12.97);
INSERT INTO Order_fee VALUES (4.49, 19.48, 0.0, 23.97);
INSERT INTO Order_fee VALUES (2.49, 24.98, 0.15, 27.62);
INSERT INTO Order_fee VALUES (3.49, 33.21, 3.50, 40.2);
INSERT INTO Order_fee VALUES (5.49, 120.45, 10.0, 135.94);
INSERT INTO Order_fee VALUES (2.49, 88.11, 6.50, 97.18);
INSERT INTO Order_fee VALUES (4.49, 57.16, 3.15, 64.8);
INSERT INTO Order_fee VALUES (4.49, 26.41, 0.0, 30.9);
INSERT INTO Order_fee VALUES (2.49, 150.49, 20.75, 173.73);
INSERT INTO Order_fee VALUES (1.49, 52.65, 5.0, 59.14);
INSERT INTO Order_fee VALUES (3.49, 73.50, 7.25, 84.24);

-- create tuples for coupon
INSERT INTO Coupon VALUES ('20203', '2020-12-30 23:59:59', 50);
INSERT INTO Coupon VALUES ('20204', '2021-12-30 23:59:59', 10);
INSERT INTO Coupon VALUES ('20205', '2020-11-30 23:59:59', 5);
INSERT INTO Coupon VALUES ('20206', '2021-01-30 23:59:59', 55);
INSERT INTO Coupon VALUES ('20207', '2021-01-01 23:59:59', 100);


-- create tuples for address 
INSERT INTO Address VALUES ('N2H 5A5', 'Kitchener', 'Ontario');
INSERT INTO Address VALUES ('H2A 2Z3', 'Montreal', 'Quebec');
INSERT INTO Address VALUES ('T0H 1N0', 'John Dor Prairie', 'Alberta');
INSERT INTO Address VALUES ('S4P 3Y2', 'Wollaston Lake', 'Saskatchewan');
INSERT INTO Address VALUES ('G6P 5V8', 'Arthabaska', 'Quebec');


-- create tuples for Courier
INSERT INTO Courier VALUES (30001, 'Will Powers', 7.1, '7661112223');
INSERT INTO Courier VALUES (30002, 'Mia Fey', 9.5, '7661112224');
INSERT INTO Courier VALUES (30003, 'Winston Payne', 2.9, '7661112225');
INSERT INTO Courier VALUES (30004, 'Damon Gant', 9.8, '7661112226');
INSERT INTO Courier VALUES (30005, 'Athena Cykes', 8.6, '7661112227');
INSERT INTO Courier VALUES (0000000, 'Ema Skye', 7.2, '7781112222');
INSERT INTO Courier VALUES (0000001, 'Dick Gumshoe', 7.5, '7785550000');
INSERT INTO Courier VALUES (0000002, 'Kristoph Gavin', 3.2, '7789112345');
INSERT INTO Courier VALUES (0000003, 'Dahlia Hawthorne', 8.6, '7784446781');
INSERT INTO Courier VALUES (0000004, 'Simon Blackquill', 9.6, '7787118322');

-- create tuples for foot-courier
INSERT INTO Foot_Courier VALUES (30001, '1928311238');
INSERT INTO Foot_Courier VALUES (30002, '1928311237');
INSERT INTO Foot_Courier VALUES (30003, '1928311236');
INSERT INTO Foot_Courier VALUES (30004, '1928311232');
INSERT INTO Foot_Courier VALUES (30005, '1928311231');

-- create tuples for bicycle_courier
INSERT INTO Bicycle_Courier VALUES (30001, 'y');
INSERT INTO Bicycle_Courier VALUES (30002, 'y');
INSERT INTO Bicycle_Courier VALUES (30003, 'y');
INSERT INTO Bicycle_Courier VALUES (30004, 'y');
INSERT INTO Bicycle_Courier VALUES (30005, 'n');

-- creat tuples for vehicle courier
INSERT INTO Vehicle_Courier VALUES ('y', 'y', '772910239', 30001);
INSERT INTO Vehicle_Courier VALUES ('y', 'y', '772910238', 30002);
INSERT INTO Vehicle_Courier VALUES ('y', 'n', '772910237', 30003);
INSERT INTO Vehicle_Courier VALUES ('y', 'y', '772910236', 30004);
INSERT INTO Vehicle_Courier VALUES ('y', 'y', '772910235', 30005);

-- create tuples for vehicle_drives 
INSERT INTO Vehicle_Drives VALUES (40001, 'SUV', 30001);
INSERT INTO Vehicle_Drives VALUES (40002, 'SUV', 30002);
INSERT INTO Vehicle_Drives VALUES (40003, 'SUV', 30003);
INSERT INTO Vehicle_Drives VALUES (40004, 'Coupe', 30004);
INSERT INTO Vehicle_Drives VALUES (40005, 'Coupe', 30005);

-- create tuples for customer
INSERT INTO Customer VALUES (100001, 'abcde@gmail.com', 17, '7781112223', '2788 90th Avenue', 'N2H 5A5', 'Alice', 400, 'VIB', 11);
INSERT INTO Customer VALUES (100002, 'adfe@hotmail.com', 21, '7781112224', '3521 Algonquin Blvd #400', 'H2A 2Z3', 'Jack', 401, 'VIB', 111);
INSERT INTO Customer VALUES (100003, 'hamm0nd@gmail.com', 33, '7781112225', '57 49th Avenue', 'T0H 1N0', 'Waston', 0, 'Insider', 11);
INSERT INTO Customer VALUES (100004, 'tracer@outlook.com', 19, '7781112226', '1441 5th Avenue', 'S4P 3Y2', 'Tracer', 1001, 'Rouge', 32);
INSERT INTO Customer VALUES (100005, 'dontawe@gmail.com', 45, '7781112227', '4727 Ste. Catherine Ouest', 'G6P 5V8', 'Ark', 1, 'Insider', 103);


-- create tuples for receives
INSERT INTO Receives VALUES (100001, '20203');
INSERT INTO Receives VALUES (100002, '20204');
INSERT INTO Receives VALUES (100003, '20205');
INSERT INTO Receives VALUES (100004, '20206');
INSERT INTO Receives VALUES (100005, '20207');


-- create tuples for giftcard
INSERT INTO Giftcard_Buys VALUES (100001, 1234567890, 'abcde@gmail.com', 'Alice', '2020-11-30 23:59:59', 100);
INSERT INTO Giftcard_Buys VALUES (100002, 1234567891, 'adfe@hotmail.com', 'Jack', '2020-11-30 23:59:59', 200);
INSERT INTO Giftcard_Buys VALUES (100003, 1234567892, 'hamm0nd@gmail.com', 'Waston', '2020-11-30 23:59:59', 300);
INSERT INTO Giftcard_Buys VALUES (100004, 1234567893, 'tracer@outlook.com', 'Tracer', '2020-11-30 23:59:59', 400);
INSERT INTO Giftcard_Buys VALUES (100005, 1234567894, 'dontawe@gmail.com', 'Ark', '2020-11-30 23:59:59', 500);

-- create tuples for restaurant
INSERT INTO Restaurant VALUES (200001, 'N2H 5A5', 'Qilin', 'Asian', 7.8, '2788 90th Avenue');
INSERT INTO Restaurant VALUES (200002, 'H2A 2Z3', 'McBur', 'Fast food', 9.4, '3521 Algonquin Blvd #400');
INSERT INTO Restaurant VALUES (200003, 'T0H 1N0', 'Tea House', 'Asian', 3.8, '57 49th Avenue');
INSERT INTO Restaurant VALUES (200004, 'S4P 3Y2', 'GrilledCk', 'Fast food', 8.0, '1441 5th Avenue');
INSERT INTO Restaurant VALUES (200005, 'G6P 5V8', 'Passione', 'Italian', 6.7, '4727 Ste. Catherine Ouest');
INSERT INTO Restaurant VALUES (200006, 'G6P 5V8', 'Highest Rating Italian Restaurant', 'Italian', 
								8.7, '4729 Ste. Catherine Ouest');


-- create tuples for Orders
INSERT INTO Orders VALUES ('2788 90th Avenue', '57 49th Avenue', 19.48, 4.49, 0.0, 'AMERICAN EXPRESS',
                            'Big Mac, Large Fries, Diet Coke', '2020-03-14 09:30:45', 0192999, 100001, 0000000, 200003,
                            null, null);
			    
INSERT INTO Orders VALUES ('2788 90th Avenue', '2788 90th Avenue', 24.90, 2.49, 0.15, 'GOOGLE PAY',
                            'Chicken Teriyaki Roll, Tuna Sashimi, Fried Gyoza', '2020-05-01 18:20:34', 7189012,
                            100001, 0000000, 200001, null, null);
			    
INSERT INTO Orders VALUES ('702 Lea Drive', '57 49th Avenue', 33.21, 3.49, 3.50, 'CASH',
                            'Beef Pho, Spring Roll, Chicken Wings, Coffee', '2019-12-25 12:50:24', 0001249,
                            100002, 0000001, 200003, null, null);
			    
INSERT INTO Orders VALUES ('4532 Fieldway', '3521 Algonquin Blvd #400', 120.45, 5.49, 10.0, 'VISA',
                            'Vegetable Samosas, Veggie Platter, Tandoori Chicken, Butter Paneer',
                            '2020-09-13 10:01:01', 1236895, 100002, 0000000, 200002, null, null);
			    
INSERT INTO Orders VALUES ('333 Mayflower Avenue', '3521 Algonquin Blvd #400', 88.11, 2.49, 6.50, 'GOOGLE PAY',
                            'Smoked Fish, Spicy Beef Tripe, Salted Duck, Chili Wontons, Seafood Soup',
                            '2020-01-01 18:45:16', 9111245, 100002, 0000001, 200002, null, null);
			    
INSERT INTO Orders VALUES ('1890 Kenry Street', '4729 Ste. Catherine Ouest', 57.16, 4.49, 3.15, 'MASTERCARD',
                            'Jasmine Green Tea, Winter Melon Drink, Caramel Milk Tea, Soft Tofu Soup, Kimchi Soup',
                            '2020-05-16 13:14:15', 5436432, 100004, 0000001, 200006, null, null);
			    
INSERT INTO Orders VALUES ('1775 Glentworth Road', '1441 5th Avenue', 26.41, 4.49, 0.0, 'CASH',
                            'Tex Mex Bowl, Fiesta Salad, Strawberry Banana Smoothie', '2019-12-04 11:08:12',
                            4443511, 100004, 0000002, 200004, null, null);
			    
INSERT INTO Orders VALUES ('512 Simpson Street', '1441 5th Avenue', 150.49, 2.49, 20.75, 'AMERICAN EXPRESS',
                            'Sushi Party Tray D, Sashimi Tray', '2020-07-01 19:30:30', 2221492,
                            100003, 0000002, 200004, null, null);
			    
INSERT INTO Orders VALUES ('57 49th Avenue', '4727 Ste. Catherine Ouest', 52.65, 1.49, 5.0, 'VISA',
                            'Vietnamese Sub, Rice Noodle Soup, Grilled Pork, Spring Roll', '2020-01-21 10:35:51',
                            5281932, 100003, 0000003, 200005, null, null);
			    
INSERT INTO Orders VALUES ('57 49th Avenue', '4727 Ste. Catherine Ouest', 73.50, 3.49, 7.25, 'MASTERCARD',
                            'Seafood Tofu Soup, Sweet Potato Noodles, BBQ Beef Short Ribs, Pork Bone Hot Pot',
                            '2020-07-01 18:12:21', 8101012, 100003, 0000004, 200005, null, null);

INSERT INTO Orders VALUES ('2788 90th Avenue', '2788 90th Avenue', 19.99, 1.99, 1.99, 'account balance', 'coffee', 
							'2019-10-11', 500001, 100001, 30001, 200001, 1234567890, '20203');

INSERT INTO Orders VALUES ('2788 90th Avenue', '3521 Algonquin Blvd #400', 33.2, 2.99, 3.99, 'account balance', 'coffee', 
							'2019-10-16 10:01:30', 500006, 100001, 30001, 200002, 1234567890, '20203');

INSERT INTO Orders VALUES ('2788 90th Avenue', '57 49th Avenue', 20, 3.99, 4.99, 'account balance', 'coffee', 
							'2019-10-15 12:45:10', 500007, 100001, 30001, 200003, 1234567890, '20203');

INSERT INTO Orders VALUES ('2788 90th Avenue', '1441 5th Avenue', 19.99, 1.99, 1.99, 'account balance', 'coffee', 
							'2019-10-12 14:02:23', 500008, 100001, 30001, 200004, NULL, NULL);

INSERT INTO Orders VALUES ('2788 90th Avenue', '4727 Ste. Catherine Ouest', 19.99, 1.99, 1.99, 'account balance', 
							'coffee', '2019-10-13 08:13:20', 500009, 100001, 30001, 200005, NULL, NULL);

INSERT INTO Orders VALUES ('2788 90th Avenue', '4729 Ste. Catherine Ouest', 19.99, 1.99, 1.99, 'account balance', 
							'coffee', '2019-10-14 16:24:12', 500010, 100001, 30001, 200006, NULL, NULL);

INSERT INTO Orders VALUES ('3521 Algonquin Blvd #400', '3521 Algonquin Blvd #400', 33.2, 2.99, 3.99, 'account balance', 
							'coffee', '2020-10-11 05:54:58', 500002, 100002, 30002, 200002, 1234567891, '20204');

INSERT INTO Orders VALUES ('57 49th Avenue', '57 49th Avenue', 20, 3.99, 4.99, 'account balance', 'burger', 
							'2020-01-11 11:09:18', 500003, 100003, 30003, 200003, 1234567892, '20205');

INSERT INTO Orders VALUES ('1441 5th Avenue', '1441 5th Avenue', 11, 2.99, 3.99, 'account balance', 'fries', 
							'2020-11-11 07:09:51', 500004, 100004, 30004, 200004, 1234567893, '20206');

INSERT INTO Orders VALUES ('4727 Ste. Catherine Ouest', '4727 Ste. Catherine Ouest', 5.99, 2.99, 3.99, 'account balance', 
							'noodles', '2019-10-11 09:18:18', 500005, 100005, 30005, 200005, 1234567894, '20207');


-- create tuples for menu_items_has
INSERT INTO Menu_Items_Has VALUES ('Sea Salt Caramel Macchiato', 'Secret caramel sauce recipe, best seller!', 
								   'Milk, Coffee, Sugar, Caramel, Sea Salt','Beverages', 5.99, 200001);

INSERT INTO Menu_Items_Has VALUES ('Mocha Latte', 'House-made with 70% chocolate cocoa ganache.', 'Chocolate, Coffee, Milk',
			 					   'Beverages', 5.99, 200001);

INSERT INTO Menu_Items_Has VALUES ('Shoyu Ramen with Kaarage', 'Soy sauce-flavoured ramon with karaage.', 
								   'Ramen, Kaarage, Eggs, Seaweed, Green Onion','Dinner', 7.99, 200001);

INSERT INTO Menu_Items_Has VALUES ('Tan Tan Men', 'Noodles served with a thick and creamy sesame peanut butter-flavoured broth.', 
								   'Ramen, Sesame Seeds, Sesame Oil, Peanut Butter, Minced Pork, Bean Sprouts', 'Dinner', 8.99, 200001);

INSERT INTO Menu_Items_Has VALUES ('Americano Coffee', 'Americano topped with coffee cream.', 'Coffee, Milk', 
								   'Beverages', 3.99, 200002);

INSERT INTO Menu_Items_Has VALUES ('Ham and Cheese Croissant', 'Fresh baked butter croissant with ham and cheese filling', 
								   'Turkey Ham, Cheddar Cheese, Croissant, Butter', 'Breakfast', 3.99, 200003);

INSERT INTO Menu_Items_Has VALUES ('Large French Fries', 'Classic French fries, served with condiments of choice.', 
								   'Potato, Palm Oil, Salt', 'Lunch', 5.99, 200004);

INSERT INTO Menu_Items_Has VALUES ('Crabcakes', 'House-made topped with fresh salsa.', 
								   'Crab Meat, Mayonnaise, Flour, Egg, Salsa', 'Lunch', 6.99, 200005);

INSERT INTO Menu_Items_Has VALUES ('Pita Wrap', 'Tender souvlaki wrapped in a warm pita.', 
				   'Chicken Souvlaki, White Pita, Tomatoes, Lettuce', 'Dinner', 7.99, 200005);

INSERT INTO Menu_Items_Has VALUES ('Vegetable Samosas', 'Crispy patties stuffed with veggies. 2 pieces per Orders.', 
				   'Peas, Potatoes, Spices', 'Lunch', 3.95, 200005);

INSERT INTO Menu_Items_Has VALUES ('Fish Pakoras', 'Fish marinated and fried. Served with fries.', 
				   'Fish, Yogurt, Ginger, Garlic, Potatoes', 'Lunch', 12.95, 200004);
				   
INSERT INTO Menu_Items_Has VALUES ('Vegetable Pakoras', 'Gluten friendly and vegetarian. Vegetables battered in chickpea flour.', 
				   'Chickpea Flour, Garlic, Ginger, Herbs, Broccoli, Zucchini', 'Lunch', 12.95, 200004);
				   
INSERT INTO Menu_Items_Has VALUES ('Japanese Calamari', 'Deep-fried squid with spicy mayo.', 
				   'Squid, Spicy Mayo, Lemon', 'Dinner', 7.99, 200004);
				   
INSERT INTO Menu_Items_Has VALUES ('Mango Turmeric Smoothie', 'Boosts energy and focus.', 
				   'Mango, Banana, Turmeric, Cinnamon, Chia Seeds, Coconut Oil', 'Beverage', 7.99, 200001);
				   
INSERT INTO Menu_Items_Has VALUES ('Berry Beet Smoothie', 'Improves stamina, lowers cholesterol, and high in fibre.', 
				   'Blueberry, Banana, Strawberry, Beetroot, Hemp, Vanilla Protein', 'Beverage', 7.99, 200001);	
				   
INSERT INTO Menu_Items_Has VALUES ('Miso Soup', 'Salty, savoury Japanese broth.', 
				   'Green Onion, Tofu, Broth', 'Dinner', 3.99, 200003);

INSERT INTO Menu_Items_Has VALUES ('Agedashi Tofu', 'Soft tofu coated with potato starch and deep fried.', 
				   'Tofu, Potato Starch, Seaweed, Ground Radish, Sesame, Green Onion', 'Lunch', 5.95, 200003);

INSERT INTO Menu_Items_Has VALUES ('Classic Cheeseburger', 'Lean beef patty served with veggies and a home-style sauce.', 
				   'Beef, Onions, Tomatoes, Cheese, Mayo, Sriracha, Lettuce', 'Lunch', 6.95, 200002);
