CREATE TABLE IF NOT EXISTS MenuItem (
	id INT(10), 
	MenuItemName VARCHAR(50),
    Img VARCHAR(50),
	Price DECIMAL(10,2),
	RecipeID VARCHAR(50),
    PRIMARY KEY (RecipeID)
);

insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (1, 'Latte', 'l.jpg', '3.99', '101');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (2, 'Iced Latte', 'il.jpg', '3.99', '202');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (3, 'Coffee', 'c.jpg', '2.99', '303');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (4, 'Iced Coffee', 'ic.jpg', '2.99', '404');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (5, 'Cold Brew', 'cb.jpg', '3.49', '505');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (6, 'Hot Chocolate', 'hc.jpg', '2.99', '606');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (7, 'Caramel Macchiato', 'cm.jpg', '4.99', '707');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (8, 'Iced Caramel Macchiato', 'icm.jpg', '4.99', '808');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (9, 'Americano', 'a.jpg', '4.29', '909');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (10, 'Iced Americano', 'ia.jpg', '4.29', '1010');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (11, 'White Mocha', 'wm.jpg', '4.49', '1111');
insert into MenuItem (id, MenuItemName, Img, Price, RecipeID) values (12, 'Iced White Mocha', 'iwm.jpg', '4.49', '1212');

