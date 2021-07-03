<?php 
// connect to database
$conn = mysqli_connect("localhost", "root", "", "db_staycay");

// read data
function read($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$records = [];
	while ($tuples = mysqli_fetch_assoc($result)) {
		$records[] = $tuples;
	}
	return $records;
}

function execute_query($query) {
	global $conn;
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		return true;
	}
	return false;
}

function execute_multi_query($query) {
	global $conn;
	mysqli_multi_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		return true;
	}
	return false;
}

function check_email($email) {
	global $conn;
	mysqli_query($conn, "SELECT * FROM user_account WHERE username = '$email';");
	return mysqli_affected_rows($conn);
}

function register_user($record) {
    global $conn;
    $email = $record["email"];
	$pwd = mysqli_real_escape_string($conn, $record["password_akun_login"]);
	$pwd_konf = mysqli_real_escape_string($conn, $record["password_akun_konfirmasi"]);
	if ($pwd !== $pwd_konf) {
		return 1;
	} elseif ((check_email($email)) > 0) {
		return 3;
	} else {
		$nama = $record["nama"];
        $nomor_hp = $record["nomor_hp"];
		$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
		$query_akun = "INSERT INTO user_account VALUES('', '$nama', '$email', '$nomor_hp', '$hashed_pwd');";
		if (execute_query($query_akun)) {
			return 4;
		}
	}
}

function login($email, $password)
{
	global $conn;
	$uname = stripslashes($email);
	$pwd = mysqli_real_escape_string($conn, $password);
	$query = "SELECT email, user_password FROM user_account WHERE email = '$email';";
	$res = mysqli_query($conn, $query);
	if (mysqli_num_rows($res) === 1) {
		$account = mysqli_fetch_assoc($res);
		if (password_verify($pwd, $account['passwouser_passwordrd_user'])) {
			
		}
	}
}

function review($star, $review, $user, $accommodation) {
    global $conn;
    $query = "INSERT INTO rating VALUES('', $accommodation, $user, '$star', '$review');";
    if(execute_query($query)) {
        return 1;
    }
    return 0;
}

function create_event($accommodation, $user, $event_title, $event_desc, $start, $end) {
    global $conn;
    $query = "INSERT INTO event VALUES('', $accommodation, $user, '$event_title', '$event_desc', '$start', '$end');";
    if(execute_query($query)) {
        return 1;
    }
    return 0;
}

function check_file_type($file_type) {
	$accepted_values = ["image/jpeg", "image/jpg", "image/png"];
	if (in_array($file_type, $accepted_values)) {
		return true;
	}
	return false;
}

function create_accommodation($record, $images) {
    global $conn;
    $name = $record["name"];
    $province = $record["province"];
    $districts = $record["districts"];
    $street_address = $record["street_address"];
    $category_id = $record["category_id"];
    $price_per_night = $record["price_per_night"];
    $max_guest = $record["max_guest"];
    $bed_room = $record["bed_room"];
    $bath_room = $record["bath_room"];
    $housing = $record["housing"];
    $desc = $record["desc"];
    // Inserting accommodation data
    $query = "INSERT INTO accommodation VALUES('', '$name', '$province', '$districts', '$street_address', $category_id, $price_per_night, $max_guest, $bed_room, $bath_room, $housing, '$desc');";
    // handling accommodation images
    $photos_amount = count($images["photos"]["name"]);
    $file_type = [];
    for($i=0; $i<$photos_amount; $i++) {
        array_push($file_type, $images["photos"]["type"][$i]);
        if(!check_file_type($images["photos"]["type"][$i])) {
            return 0;
        } elseif ($images['photos']['size'][$i] > 500000) {
            return 1;
        }
        
    }
    $last_insert_id = "SELECT accommodation_id FROM accommodation ORDER BY accommodation_id DESC LIMIT 1;";
    $last_insert_id = read($last_insert_id);
    $last_insert_id = $last_insert_id[0]["accommodation_id"];
    $query = "";
    for($i=0; $i<$photos_amount; $i++) {
        $temp = explode("/", $file_type[$i]);
        $file_ext = "." . $temp[1];
        $file_name = uniqid() . $file_ext;
        move_uploaded_file($images["photos"]["tmp_name"][$i], 'Img/Accommodation/' . $file_name);
        $query = $query . "INSERT INTO accommodation_photo VALUES('', $last_insert_id, '$file_name');";
    }
    
    if(execute_multi_query($query)) {
        return 2;
    }
    return 3;
}

function book($record) {
    global $conn;
    $user_id = $record["user_id"];
    $accommodation_id = $record["acc_id"];
    $check_in = $record["checkin"];
	$check_out = $record["checkout"];
    $price = $record["price"];
    $total_guest = $record["total_guest"];
    $query_retrieve_reservation_amount = "SELECT COUNT(booking_id) AS jumlah FROM booking WHERE (check_in BETWEEN '$check_in' AND '$check_out') AND (check_out BETWEEN '$check_in' AND '$check_out') AND (accomodation_id = $accommodation_id);";
    $query_amount_of_housing = "SELECT accommodation_housing_amount FROM accommodation WHERE accomodation_id = $accommodation_id;";
    $jumlah_reservasi = read($query_retrieve_reservation_amount);
    $jumlah_housing = read($query_amount_of_housing);

    if ($jumlah_reservasi[0]["jumlah"] < $jumlah_housing[0]["accommodation_housing_amount"]) {
        $query = "INSERT INTO booking VALUES('', $accommodation_id, $user_id, '$check_in', '$check_out', DATEDIFF('$check_in', '$check_out') * $price, $total_guest);";
        if(execute_query($query)) {
            return 1;
        }
        return 0;
    }
    return 2;
}
 

?>