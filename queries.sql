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

