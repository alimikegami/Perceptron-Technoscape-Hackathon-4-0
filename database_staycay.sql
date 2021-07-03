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
    accommodation_max_guest_amount INT NOT NULL,
    accomodaton_bed_room_amount INT NOT NULL,
    accomodaton_bath_room_amount INT NOT NULL,
    accommodation_desc TEXT NOT NULL,
    PRIMARY KEY(accommodation_id),
    FOREIGN KEY(accommodation_category_id) REFERENCES accommodation_category(category_id)
);

CREATE TABLE accommodation_photos (
    
    accommodation_image_path VARCHAR(255) NOT NULL,
    
)

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

CREATE TABLE booking (


)