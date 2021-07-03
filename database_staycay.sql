CREATE TABLE user_account (
    user_id INT AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_user)
);

CREATE TABLE accommodation_category (
    category_id INT AUTO_INCREMENT,
    category VARCHAR(30),
    PRIMARY KEY(category_id)
);

CREATE TABLE accommodation (
    accommodation_id INT AUTO_INCREMENT,
    accommodation_name VARCHAR(30) NOT NULL,
    accommodation_province VARCHAR(13) NOT NULL,
    accommodation_districts VARCHAR(25) NOT NULL,
    accommodation_street_address VARCHAR(50) NOT NULL,
    accommodation_category_id INT NOT NULL,
    accommodation_price_per_night INT NOT NULL,
    accommodation_max_guest_per_housing INT NOT NULL,
    accommodation_bed_room_amount INT NOT NULL,
    accommodation_bath_room_amount INT NOT NULL,
    accommodation_housing_amount INT NOT NULL,
    accommodation_desc TEXT NOT NULL,
    PRIMARY KEY(accommodation_id),
    FOREIGN KEY(accommodation_category_id) REFERENCES accommodation_category(category_id)
);

CREATE TABLE accommodation_photo (
    photo_id INT AUTO_INCREMENT,
    accommodation_id INT,
    accommodation_image_name VARCHAR(20) NOT NULL,
    PRIMARY KEY(photo_id),
    FOREIGN KEY(accommodation_id) REFERENCES accommodation(accommodation_id)
);

CREATE TABLE rating (
    rating_id INT AUTO_INCREMENT.
    accommodation_id INT,
    user_id INT NOT NULL,
    star_rating INT NOT NULL,
    review TEXT,
    PRIMARY KEY(rating_id),
    FOREIGN KEY(accommodation_id) REFERENCES accommodation(accommodation_id),
    FOREIGN KEY(user_id) REFERENCES user_account(user_id)
);

CREATE TABLE event (
    event_id INT AUTO_INCREMENT,
    accommodation_id INT NOT NULL,
    user_id INT NOT NULL,
    event_title CHAR(75) NOT NULL,
    event_desc TEXT NOT NULL,
    PRIMARY KEY(event_id),
    FOREIGN KEY(accommodation_id) REFERENCES accommodation(accommodation_id),
    FOREIGN KEY(user_id) REFERENCES user_account(user_id)
);

CREATE TABLE booking (
    booking_id INT AUTO_INCREMENT,
    accommodation_id INT NOT NULL,
    user_id INT NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    PRIMARY KEY(booking_id),
    FOREIGN KEY(accommodation_id) REFERENCES accommodation(accommodation_id)
);


