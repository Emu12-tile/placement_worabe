<html>


<?php
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "placement_dila";
// $id = 1; // the id of the row you want to update
// $newStartingDate = '2023-07-24'; // the new value for the startingDate column


// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $sql = "UPDATE experiences SET endingDate = REPLACE(endingDate, '/', '-') WHERE endingDate LIKE '%/%'";
// // $sql = "UPDATE experiences SET startingDate = '$newStartingDate' WHERE id = $id";
// // $sql = "UPDATE experiences SET endingDate = DATE_FORMAT(STR_TO_DATE(endingDate, '%d-%m-%y'), '%d-%m-%Y') WHERE endingDate LIKE '%-%-%'";
// if ($conn->query($sql) === TRUE) {
//     echo "Starting date updated successfully";
// } else {
//     echo "Error updating starting date: " . $conn->error;
// }
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "placement_dila";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $sql = "UPDATE experiences SET startingDate = REPLACE(startingDate, '/', '-') WHERE startingDate LIKE '%/%'";
// $sql = "UPDATE experiences SET startingDate = CONCAT(SUBSTRING_INDEX(startingDate, '-', 2), '-', IF(SUBSTRING_INDEX(startingDate, '-', -1) > 23, CONCAT('19', SUBSTRING_INDEX(startingDate, '-', -1)), CONCAT('20', SUBSTRING_INDEX(startingDate, '-', -1)))) WHERE CHAR_LENGTH(SUBSTRING_INDEX(startingDate, '-', -1)) = 2";
// if ($conn->query($sql) === TRUE) {
//     echo "Starting date updated successfully";
// } else {
//     echo "Error updating starting date: " . $conn->error;
// }

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "placement_dila";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE experiences SET startingDate = CONCAT(SUBSTRING_INDEX(startingDate, '-', 2), '-', IF(CHAR_LENGTH(SUBSTRING_INDEX(startingDate, '-', -1)) = 2, CONCAT('20', SUBSTRING_INDEX(startingDate, '-', -1)), SUBSTRING_INDEX(startingDate, '-', -1))) WHERE CHAR_LENGTH(SUBSTRING_INDEX(startingDate, '-', -1)) = 2";

if ($conn->query($sql) === TRUE) {
    echo "Ending date updated successfully";
} else {
    echo "Error updating ending date: " . $conn->error;
}
?>
</html>



