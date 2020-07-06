# Task 0
Create a simple Symfony application with following entities. ( https://symfony.com/doc/current/setup.html#creating-symfony-applications)

## "Product" entity:

Fields:
- name --> string, editable
- base_price --> integer, editable
- final_prices_sum --> integer, not editable

## "Reservation" entity:

Fields:
- product --> reference to a Product, editable
- base_price --> integer, not editable
- final_price --> integer, editable

# Task 1
Create a simple list and form view; to list, create and edit Product and Reservation records. On list view, pagination, search and sort are not required, just a simple list (table) with all records.

# Task 2
If you create a new Reservation, that Reservation's "base_price" should be set to the referred Product's "base_price"
When a Product's "base_price" is updated --> update all existing Reservation's "base_price" to the same, which has a reference to this Product

# Task 3
Reservation's "final_price" is editable, but if it's left empty (null) --> should be automatically set to Reservation's "base_price".

Whenever a Reservation's "final_price" is updated --> re-calculate it's referred Product's "final_prices_sum"
Product's "final_prices_sum" should be the sum of all Reservation's "final_price", which has a reference to this Product

# Task 4 (optional)

Make Reservation's deleteable. When a reservation is deleted, recalculate it's Product's "final_prices_sum"


# Hint
Try to not implement the calculations within the controller.
