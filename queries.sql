
-- (IMPLEMENTED IN CUSTOMER.PHP)
-- 1) Insertion Query: Create a customer account 
-- Inputs to be provided by user: customer_id, email, age, phone_number, street_address, postal_code, name
INSERT INTO Customer 
    VALUES(customer_id, 'email', age, 'phone_number', 'street_address', 'postal_code', 'name', 0, 'Bronze', 0.0);
    

-- (IMPLEMENTED IN CUSTOMER.PHP)
-- 2) Deletion Query: Deleting a customer account 
-- Inputs to be provided by user: delete_cid
DELETE FROM Customer 
WHERE customer_id = delete_cid;


-- (ALL UPDATE QUERIES IMPLEMENTED IN CUSTOMER.PHP)
-- 3) Update Query: Update a customer's email 
-- Inputs to be provided by user: new_email, u_cid
UPDATE Customer
SET email = 'new_email'
WHERE customer_id = u_cid;

-- 4) Update Query: Update a customer's age
-- Inputs to be provided by user: new_age, u_cid
UPDATE Customer
SET age = new_age
WHERE customer_id = u_cid;

-- 5) Update Query: Update a customer's phone number
-- Inputs to be provided by user: new_number, u_cid
UPDATE Customer
SET phone_number = 'new_number'
WHERE customer_id = u_cid;

-- 6) Update Query: Update a customer's street address and postal code
-- Inputs to be provided by user: new_addr, new_postalcode, u_cid
UPDATE Customer
SET street_address = 'new_addr',
    postal_code = 'new_postalcode'
WHERE customer_id = u_cid;


-- (IMPLEMENTED IN CUSTOMER.PHP)
-- 7) Selection Query: Find all restaurants that have a rating greater than a specified number, 
-- where 0.0 is the minimum rating and 10.0 is the maximum rating.
-- Inputs to be provided by the user: val
SELECT restaurant_id, name, rating
FROM Restaurant
WHERE rating > val;

-- (IMPLEMENTED IN RESTAURANT.PHP)
-- 8) Projection Query: Find the date placed, food subtotal, and payment method for all orders.
SELECT order_number, restaurant_id, customer_id, date_placed, food_subtotal 
FROM Orders

-- IMPLEMENTED IN RESTAURANT.PHP
-- 9) Join Query: For all restaurants that have a rating that is higher than some value, return the average food subtotal for 
-- the orders made at each of those restaurants, as well as the IDs, names, and ratings of the restaurants.
-- Inputs to be provided by the user: val
SELECT avg_subtotal, R.restaurant_id, R.name, R.rating
FROM Restaurant R, (SELECT R2.restaurant_id AS res_id, avg(food_subtotal) AS avg_subtotal
                    FROM Restaurant R2 JOIN Orders O
                    ON R2.restaurant_id = O.restaurant_id
                    WHERE R2.rating > val
                    GROUP BY R2.restaurant_id)
WHERE R.restaurant_id = res_id;

-- (IMPLEMENTED IN CUSTOMER.PHP)
-- 10) Aggregation with Group By Query: For each restaurant category, find the restaurants that have the highest rating in that category. 
SELECT R.name, R.category, max_rating 
FROM Restaurant R, (SELECT R2.category AS current_category, MAX(rating) AS max_rating
                    FROM Restaurant R2
                    GROUP BY R2.category)
WHERE R.rating >= max_rating AND R.category = current_category;

-- IMPLEMENTED IN RESTAURANT.PHP
-- 11) Aggregation with Having Query: Find the IDs of customers who have placed at least three orders, where only
-- orders with a food subtotal > 20 are considered. 
SELECT DISTINCT C.customer_id, COUNT(*)
FROM Orders O, Customer C
WHERE O.customer_id = C.customer_id AND O.food_subtotal > 20
GROUP BY C.customer_id
HAVING COUNT(*) > 2;


-- (IMPLEMENTED IN CUSTOMER.PHP)
-- 12) Nested Aggregation with Group By Query: Find the restaurant categories that have the lowest average price of menu items  
-- compared to all other restaurant categories.  
SELECT R.category, AVG(M.price)
FROM Restaurant R, Menu_Items_Has M
WHERE R.restaurant_id = M.restaurant_id
GROUP BY R.category 
HAVING AVG(M.price) <= ALL (SELECT AVG(M2.price)
                            FROM Restaurant R2, Menu_Items_Has M2
                            WHERE R2.restaurant_id = M2.restaurant_id
                            GROUP BY R2.category);
                            

-- IMPLEMENTED IN RESTAURANT.PHP
-- 13) Division Query: Find all customers who have ordered from all restaurants in Montreal, Quebec.
SELECT C.name, C.customer_id
FROM Customer C
WHERE NOT EXISTS ((SELECT R.restaurant_id
                  FROM Restaurant R, Address A
                  WHERE R.postal_code = A.postal_code 
                    AND A.city = 'Montreal' 
                    AND A.province = 'Quebec')
                    MINUS (SELECT O.restaurant_id
                            FROM Orders O, Restaurant R2, Address A2
                            WHERE O.restaurant_id = R2.restaurant_id 
                                AND O.customer_id = C.customer_id
                                AND R2.postal_code = A2.postal_code
                                AND A2.city = 'Montreal'
                                AND A2.province = 'Quebec'));

-- Other Hardcoded Simple Queries

-- IN Restaurant.php
-- 14) An Example For A Simple Aggregation Using Count
SELECT count(*) 
FROM Menu_Items_Has  
WHERE restaurant_id= 'user_input' AND name = 'user_input';

-- 15) An Example For Delete
DELETE FROM Menu_Items_Has  
WHERE restaurant_id= 'user_input' AND name = 'user_input';

-- 16) An Example For Update
UPDATE Menu_Items_Has 
SET description = 'user_input' 
WHERE restaurant_id= 'user_input' AND name = 'user_input';

-- 17) Select Order With A Certain Food Subtotal Range For A Specific Restaurant
SELECT order_number, restaurant_id, customer_id, date_placed, food_subtotal 
FROM Orders 
WHERE restaurant_id = 'user_input' AND food_subtotal <= 'user_input' AND food_subtotal >= 'user_input';

-- 18) Display Customer Info Who Has Ordered In A Specific Restaurant
SELECT o.order_number, c.customer_id, c.email, c.name, c.phone_number, c.street_address 
FROM Customer c, Restaurant r, Orders o 
WHERE o.customer_id = c.customer_id AND r.restaurant_id = o.restaurant_id AND r.restaurant_id = 'user_input';

-- IN Courier.php
-- 19) An Example Of Aggregation Using Count
SELECT count(*) 
FROM Foot_Courier 
WHERE bus_pass = 'user_input';

-- 20) An Example Of Delete
DELETE FROM Courier
WHERE courier_id= 'user_input';

-- 21) An Example of Update
UPDATE Bicycle_Courier 
SET valid_bicycle= 'user_input' 
WHERE courier_id= 'user_input';
                                    













