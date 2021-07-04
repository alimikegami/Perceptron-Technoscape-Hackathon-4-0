<?php
$conn = mysqli_connect("localhost", "root", "", "db_staycay");
require_once "functions.php"; 
$user = $_POST['userid'];
$acc= $_POST['accid'];
$in = $_POST['in'];
$out = $_POST['out'];
$gst = $_POST['guest_amount'];
$query_retrieve_reservation_amount = "SELECT COUNT(booking_id) AS jumlah FROM booking WHERE (check_in BETWEEN '$in' AND '$out') AND (check_out BETWEEN '$in' AND '$out') AND (accommodation_id = $acc);";
$query_amount_of_housing = "SELECT accommodation_housing_amount, accommodation_price_per_night FROM accommodation WHERE accommodation_id = $acc;";
$jumlah_reservasi = read($query_retrieve_reservation_amount);
$jumlah_housing = read($query_amount_of_housing);
$start_date = date_create($in);
$end_date = date_create($out);
$diff = date_diff($start_date, $end_date);
$diff = $diff->format("%R%a");
$diff = substr($diff,1);
$diff = (int)$diff;
if ($jumlah_reservasi[0]["jumlah"] < $jumlah_housing[0]["accommodation_housing_amount"]) {
    echo json_encode(array("availability"=>1, "price"=>$jumlah_housing[0]["accommodation_price_per_night"], "day"=>$diff));
} else {
    echo json_encode(array("availability"=>$diff));
}

?>