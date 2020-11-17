

-- 1) Insertion Query: Create a customer account
-- Inputs to be provided by user: customer_id, email, age, phone_number, street_address, postal_code, name
INSERT INTO Customer 
    VALUES(customer_id, email, age, phone_number, street_address, postal_code, name, 0, 'Bronze', 0.0);

-- 2) Deletion Query: Deleting a customer account
-- Inputs to be provided by user: delete_cid
DELETE FROM Customer 
WHERE customer_id = delete_cid;

-- 3) Update Query: Update a customer's email
-- Inputs to be provided by user: new_email, u_cid
UPDATE Customer
SET email = new_email
WHERE customer_id = u_cid;

-- 4) Update Query: Update a customer's age
-- Inputs to be provided by user: new_age, u_cid
UPDATE Customer
SET age = new_age
WHERE customer_id = u_cid;

-- 5) Update Query: Update a customer's phone number
-- Inputs to be provided by user: new_number, u_cid
UPDATE Customer
SET phone_number = new_number
WHERE customer_id = u_cid;

-- 6) Update Query: Update a customer's street address and postal code
-- Inputs to be provided by user: new_addr, new_postalcode, u_cid
UPDATE Customer
SET street_address = new_addr,
    postal_code = new_postalcode
WHERE customer_id = u_cid;

-- 7) Selection Query: Find all restaurants that have a rating greater than a specified number,
-- where 0.0 is the minimum rating and 10.0 is the maximum rating.
-- Inputs to be provided by the user: val
SELECT restaurant_id, name
FROM Restaurant
WHERE rating > val;

-- 8) Projection Query: Find the date placed, food subtotal, and payment method for all orders.
SELECT date_placed, food_subtotal, payment_method
FROM Orders;

-- 9) Join Query: For all restaurants that have a rating that is higher than some value, return the average food subtotal for 
-- the orders made at each of those restaurants, as well as the IDs, names, and ratings of the restaurants.
-- Inputs to be provided by the user: val
SELECT avg(food_subtotal), restaurant_id, name, rating
FROM Restaurant JOIN Orders
    ON Restaurant.restaurant_id = Orders.restaurant_id
WHERE rating > val
GROUP BY restaurant_id;

-- 10) Aggregation with Group By Query: For each restaurant category, find the restaurants that have the highest rating in that category. 
SELECT name, category, MAX(rating)
FROM Restaurant 
GROUP BY category;

-- 11) Aggregation with Having Query: Find the name and age of customers who have placed at least three orders, where only
-- orders with a food subtotal > 50 are considered. 
SELECT DISTINCT C.name, C.age
FROM Orders O, Customer C
WHERE O.customer_id = C.customer_id AND O.food_subtotal > 50
GROUP BY customer_id
HAVING COUNT(*) > 2;

-- 12) Nested Aggregation with Group By Query: Find the restaurant categories that have the lowest average price of menu items  
-- compared to all other restaurant categories.  
SELECT category, avgprice
FROM Restaurant R, Menu_Items_Has M
WHERE R.restaurant_id = M.restaurant_id
GROUP BY R.category 
HAVING AVG(M.price) <= ALL (SELECT AVG(M2.price)
                            FROM Restaurant R2, Menu_Items_Has M2
                            WHERE R2.restaurant_id = M2.restaurant_id
                            GROUP BY R2.category);

-- 13) Division Query: Find all customers who have ordered from all restaurants in Vancouver, BC.
SELECT DISTINCT C.name
FROM Customer C
WHERE NOT EXISTS (SELECT R.restaurant_id
                  FROM Restaurant R, Address A
                  WHERE R.postal_code = A.postal_code 
                    AND A.city = 'Vancouver' 
                    AND A.province = 'BC'
                    EXCEPT (SELECT O.restaurant_id
                            FROM Orders O, Restaurant R2, Address A2
                            WHERE O.restaurant_id = R2.restaurant_id 
                                AND R2.postal_code = A2.postal_code
                                AND A2.city = 'Vancouver'
                                AND A2.province = 'BC'
                                AND O.customer_id = C.customer_id));
                                    













