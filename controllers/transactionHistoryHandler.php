<?php

require_once '../models/transactionHistoryModel.php';

$transactions = getTransactions();

require_once '../views/transactionHistoryView.php';

?>


<link rel="stylesheet" href="../views/transactionHistory.css">

