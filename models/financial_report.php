<?php

require_once('db.php');

function createReport($month, $expenses, $profits_losses)
{
    $conn = getConnection();
    $month = mysqli_real_escape_string($conn, $month);
    $expenses = mysqli_real_escape_string($conn, $expenses);
    $profits_losses = mysqli_real_escape_string($conn, $profits_losses);
    $gross_margin = $expenses / $profits_losses ;
    $sql = "INSERT INTO financial_reports (month, expenses, profits_losses, gross_margin) VALUES ('$month', '$expenses', '$profits_losses', '$gross_margin')";
    $status = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $status;
}

function getReports()
{
    $conn = getConnection();
    $sql = "SELECT * FROM financial_reports";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error retrieving reports: " . mysqli_error($conn));
    }

    $reports = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $reports[] = $row;
    }

    mysqli_close($conn);
    return $reports;
}

?>
