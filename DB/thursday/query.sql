\echo '*********************List all restaurant names*********************'
-- write your query here
SELECT name FROM w4_restaurant;
\echo '****************List restaurant names and addresses****************'
-- write your query here
SELECT name,address FROM w4_restaurant;
\echo '************************List  all customers************************'
-- write your query here
SELECT first_name,last_name FROM w4_customer;
\echo '**List  all menu item names and prices of a particular restaurant**'
-- write your query here
SELECT r.name, m.name, m.price 
FROM w4_menu_item m 
INNER JOIN w4_restaurant r ON m.restaurant_id = r.id
WHERE r.id = 1;
\echo '*View all orders of a particular customer - show the customer name*'
-- write your query here
SELECT c.first_name AS "First Name"
     , c.last_name AS "Last Name"
     , o.id AS "Order Number" 
     , m.name AS "Food Order"
FROM w4_order o 
INNER JOIN w4_customer c ON o.customer_id = c.id 
INNER JOIN w4_order_menu_items i ON o.id = i.order_id
INNER JOIN w4_menu_item m ON i.menu_item_id = m.id
WHERE c.id = 1;
\echo '************List  all orders of a particular restaurant************'
-- write your query here
SELECT r.name AS "Restaurant"
      , o.id AS "Order #"
      , m.name  AS "Food"
      , m.price::float8::numeric::money AS "Price"
FROM w4_order o
INNER JOIN w4_order_menu_items i ON o.id = i.order_id 
INNER JOIN w4_menu_item m ON i.menu_item_id = m.id 
INNER JOIN w4_restaurant r ON m.restaurant_id = r.id 
WHERE r.id = 1 or r.id = 3
ORDER BY r.name;

\echo '************Total cost of a menus food items************'
SELECT SUM(m.price)
FROM w4_menu_item m 
INNER JOIN w4_restaurant r ON m.restaurant_id = r.id 
WHERE r.id = 1;