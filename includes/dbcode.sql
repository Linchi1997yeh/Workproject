CREATE TABLE users (
	  user_id int(11) not NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(256) not NULL,
    password varchar(256) not NULL,
    user_email varchar(256) not NULL
);

insert into users (username,password,user_email)
  VALUES ('admin','password','linchiyeh@hotmail.com');
	insert into users (username,password,user_email)
	  VALUES ('aaa','111','aaa@hotmail.com');
CREATE TABLE vehicle(
	id int(11) not NULL PRIMARY KEY AUTO_INCREMENT,
	vehicle_licence varchar(256) not NULL,
	location_lat float(10,6) not NULL,
	location_lgn float(10,6) not NULL,
	city varchar(256) not NULL
);
