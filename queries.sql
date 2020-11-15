--hardcoded queries

-- projection query
SELECT date_placed, payment_method
FROM Order

-- aggregation with group by
-- find max rating of restaurants, where restaurants are grouped by category
SELECT category, MAX(rating)
FROM Restaurant 
GROUP BY category

-- aggregation with having 
-- find all customers who have ordered at least three orders
SELECT customer_id, COUNT(*)
FROM Order
GROUP BY customer_id
HAVING COUNT(*) > 2

-- nested aggregation with with group by 
-- find those categories for which their avg price is the min over all categories
SELECT temp.category, temp.avgprice
FROM (SELECT item.category, AVG(item.price) avgprice
      FROM Menu_Items_Has item
      GROUP BY item.category) AS temp
WHERE temp.avgprice = (SELECT MIN (temp.avgprice)
                       FROM temp)

-- division 
-- find the customer who have ordered all restaurant
SELECT Customer.name
FROM Customer
WHERE NOT EXISTS (SELECT restaurant_id
                  FROM Restaurant
                  WHERE NOT EXISTS (SELECT restaurant_id
                                    FROM Order
                                    WHERE Order.restaurant_id = Restaurant.restaurant_id AND Order.customer_id = Customer.customer_id))
                                    
 -- Insertion Query
-- Create a customer account
INSERT INTO Customer VALUES(customer_id, email, age, phone_number, street_address, postal_code,
	                        name, reward_points, rewards_tier, account_balance);

-- Deletion Query
-- Delete a customer account
-- (delete_cid is to be provided by the user)
DELETE FROM Customer WHERE customer_id = delete_cid;

-- Update a customer's information
-- (updated_email and u_cid are to be provided by the user)
UPDATE Customer
SET email = updated_email
WHERE customer_id = u_cid; 

-- Selection Query
-- Find all restaurants that have a rating greater than a specified number,
-- where 0.0 is the minimum rating and 10.0 is the maximum rating.
-- (num is to be provided by the user)
SELECT restaurant_id, name
FROM Restaurant
WHERE rating > num;

-- Join Query
-- Join the Order, Customer, and Restaurant tables to find information about the 
-- spending habits and restaurant preferences of customers of a specific rewards tier.
-- (specify_tier is to be provided by the user)
SELECT order_number, food_subtotal, customer_id, restaurant_id, rating
FROM Customer JOIN Orders
    ON Customer.customer_id = Orders.customer_id
    JOIN Restaurant
    ON Restaurant.restaurant_id = Orders.restaurant_id
WHERE rewards_tier = 'specify_tier';






