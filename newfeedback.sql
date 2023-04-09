create table feedback(
review_id int AUTO_INCREMENT,
name varchar(30),
email varchar(250),
rating int,
comment varchar(250),
PRIMARY KEY(review_id),
rid int,
FOREIGN KEY (rid) REFERENCES rest(rid)
);
