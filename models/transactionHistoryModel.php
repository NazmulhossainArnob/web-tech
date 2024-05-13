<?php

require_once 'db.php';

function getTransactions() {
    $conn = getConnection();

    $sql = "SELECT * FROM transactions";

    $result = mysqli_query($conn, $sql);

    $transactions = array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $transactions[] = $row;
        }
    }

    mysqli_close($conn);

    return $transactions;
}

?>
