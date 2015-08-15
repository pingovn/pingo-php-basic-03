select name, phone, email, order_code,
		SUM(sum_money) as te
from marketdb.orders, marketdb.customers
where customer_id = customers.id
and customers.name like '%thie%'
having te > 4000;

select order_code, sum_money, products.name, quatity, fix_price
from marketdb.orders, marketdb.customers, products, 
	order_product_associations
where customer_id = customers.id
      and products.id = order_product_associations.product_id
      and orders.id = order_product_associations.order_id
      and order_code like '%15082015_0001_2%';