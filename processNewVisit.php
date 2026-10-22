<?php

include "dbcon.php";

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$doctorId = $_POST['docid'];
$patientId = $_POST['ptntid'];
$cost = $_POST['cost'];

$sql = "INSERT INTO visit
(visit_date, visit_time, doctor_id, patient_id, cost)
VALUES ('$visitDate', '$visitTime', '$doctorId', '$patientId', '$cost')";

if (mysqli_query($conn, $sql)) {
    echo "Appointment saved successfully!";
} else {
    echo "Error saving appointment: " . mysqli_error($conn);
}

?>
