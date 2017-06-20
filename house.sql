DROP TABLE IF EXISTS users;
CREATE TABLE users(
    userID int(11) NOT NULL AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    f_name varchar(50),
    l_name varchar(50),
    contact int(11),
    upassword char(128) NOT NULL,
    email varchar(50)NOT NULL,

    CONSTRAINT pk_users_table PRIMARY KEY(userID)
);
DROP TABLE IF EXISTS houses;
CREATE TABLE houses(
    houseID int(11) NOT NULL AUTO_INCREMENT,
    image varchar(11) NOT NULL,
    description varchar(255),
    price double NOT NULL,
    rooms int(11)NOT NULL,
    listing varchar(50),
    street varchar(50),
    city varchar(50),

    CONSTRAINT pk_houses_table PRIMARY KEY(houseID)
);

DROP TABLE IF EXISTS admin;
CREATE TABLE admin(
    id int(11) NOT NULL AUTO_INCREMENT,
    ausername varchar(20) NOT NULL,
    apassword char(128) NOT NULL,

    CONSTRAINT pk_admin_table PRIMARY KEY(id)
);

DROP TABLE IF EXISTS users_favorites;
CREATE TABLE users_favorites(
    id int(11) NOT NULL AUTO_INCREMENT,
    userID int NOT NULL,
    houseID int NOT NULL,

    CONSTRAINT pk_users_favorites_table PRIMARY KEY(id),
    CONSTRAINT fk_users_favorites_table_1 FOREIGN KEY userID REFERENCES users(userID),
    CONSTRAINT fk_users_favorites_table_2 FOREIGN KEY houseID REFERENCES houses(houseID)
);

DROP TABLE IF EXISTS appointments;
CREATE TABLE appoinments(
    id int(11) NOT NULL AUTO_INCREMENT,
    userID int(11) NOT NULL,
    houseID int(11) NOT NULL,
    choosen_date date NOT NULL,
    choosen_time time NOT NULL, 

    CONSTRAINT pk_appointments_table PRIMARY KEY(id),
    CONSTRAINT fk_appointments_table_1 FOREIGN KEY userID REFERENCES users(userID),
    CONSTRAINT fk_appointments_table_2 FOREIGN KEY houseID REFERENCES houses(houseID)
);


