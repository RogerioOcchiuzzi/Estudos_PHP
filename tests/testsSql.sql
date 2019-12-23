mysql -u webmaster -p
CREATE DATABASE bookstore;
SHOW DATABASES;
USE bookstore;

CREATE TABLE book(
isbn CHAR(13) NOT NULL,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
stock SMALLINT UNSIGNED NOT NULL DEFAULT 0,
price FLOAT UNSIGNED
) ENGINE=InnoDb;

DESC book;

CREATE TABLE customer(
id INT UNSIGNED NOT NULL,
firstname VARCHAR(255) NOT NULL,
surname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
type ENUM('basic', 'premium')
) ENGINE=InnoDb;

ALTER TABLE book
ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT
PRIMARY KEY FIRST;

ALTER TABLE customer
MODIFY id INT UNSIGNED NOT NULL
AUTO_INCREMENT PRIMARY KEY;

CREATE TABLE borrowed_books(
book_id INT UNSIGNED NOT NULL,
customer_id INT UNSIGNED NOT NULL,
start DATETIME NOT NULL,
end DATETIME DEFAULT NULL,
FOREIGN KEY (book_id) REFERENCES book(id),
FOREIGN KEY (customer_id) REFERENCES customer(id)
) ENGINE=InnoDb;


CREATE TABLE sale(
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
customer_id INT UNSIGNED NOT NULL,
date DATETIME NOT NULL,
FOREIGN KEY (customer_id) REFERENCES customer(id)
) ENGINE=InnoDb;

CREATE TABLE sale_book(
sale_id INT UNSIGNED NOT NULL,
book_id INT UNSIGNED NOT NULL,
amount SMALLINT UNSIGNED NOT NULL DEFAULT 1,
FOREIGN KEY (sale_id) REFERENCES sale(id),
FOREIGN KEY (book_id) REFERENCES book(id)
) ENGINE=InnoDb;

ALTER TABLE book ADD UNIQUE KEY (isbn);
ALTER TABLE customer ADD UNIQUE KEY (email);
ALTER TABLE book ADD INDEX (title);

INSERT INTO customer (firstname, surname, email, type)
VALUES ("Han", "Solo", "han@tatooine.com", "premium");

INSERT INTO customer (firstname, surname, email, type)
VALUES ("James", "Kirk", "enter@prise", "basic");

mysql> INSERT INTO customer (firstname, surname, email, type)
VALUES ("Mr", "Spock", "enter@prise", "basic");
ERROR 1062 (23000): Duplicate entry 'enter@prise' for key 'email'

INSERT INTO book (isbn,title,author,stock,price) VALUES
("9780882339726","1984","George Orwell",12,7.50),
("9789724621081","1Q84","Haruki Murakami",9,9.75),
("9780736692427","Animal Farm","George Orwell",8,3.50),
("9780307350169","Dracula","Bram Stoker",30,10.15),
("9780753179246","19 minutes","Jodi Picoult",0,10);

INSERT INTO book (isbn,title,author,price) VALUES
("9781416500360", "Odyssey", "Homer", 4.23);

INSERT INTO borrowed_books(book_id,customer_id,start,end)
VALUES
(1, 1, "2014-12-12", "2014-12-28"),
(4, 1, "2015-01-10", "2015-01-13"),
(4, 2, "2015-02-01", "2015-02-10"),
(1, 2, "2015-03-12", NULL);

SELECT firstname, surname, type FROM customer;

SELECT firstname, surname, type FROM customer
WHERE id = 1;

SELECT title, author, price FROM book
WHERE title LIKE "1%";

SELECT title, author, price FROM book
WHERE author LIKE "G%";

SELECT title, author, price FROM book
WHERE title LIKE "1%" AND stock > 0;

SELECT * FROM customer \G

SELECT COUNT(*) FROM borrowed_books
WHERE customer_id = 1 AND end IS NOT NULL;

SELECT COUNT(*) FROM customer;

SELECT COUNT(*) FROM book;

SELECT COUNT(*) FROM customer,book;

SELECT id, title, author, isbn FROM book
ORDER BY title LIMIT 4;

SELECT CONCAT(c.firstname, ' ', c.surname) AS name,
b.title, b.author,
DATE_FORMAT(bb.start, '%d-%m-%y') AS start,
DATE_FORMAT(bb.end, '%d-%m-%y') AS end
FROM borrowed_books bb
LEFT JOIN customer c ON bb.customer_id = c.id
LEFT JOIN book b ON b.id = bb.book_id
WHERE bb.start >= "2015-01-01";

SELECT author, COUNT(*) AS amount,
GROUP_CONCAT(title SEPARATOR ', ') AS titles
FROM book GROUP BY author
ORDER BY amount DESC, author;


MySQL expects the clauses of the query
to be always in the same order.
If you write the same query but change this order,
you will get an error. The order is as follows:
	1. SELECT
	2. FROM
	3. WHERE
	4. GROUP BY
	5. ORDER BY
	

UPDATE book SET price = 12.75 WHERE id = 2;

UPDATE book SET price = price * 1.16;

ALTER TABLE borrowed_books
DROP FOREIGN KEY borrowed_books_ibfk_1;

ALTER TABLE borrowed_books
DROP FOREIGN KEY borrowed_books_ibfk_2;

ALTER TABLE borrowed_books
ADD FOREIGN KEY (book_id) REFERENCES book (id)
ON DELETE CASCADE ON UPDATE CASCADE,
ADD FOREIGN KEY (customer_id) REFERENCES customer (id)
ON DELETE CASCADE ON UPDATE CASCADE;

SELECT book_id, customer_id FROM borrowed_books;

DELETE FROM book WHERE id = 4;

SELECT book_id, customer_id FROM borrowed_books;
















