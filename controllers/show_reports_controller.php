<?php

require_once '../models/financial_report.php';

$reports = getReports();

require_once '../views/show_reports.php';

?>
<link rel="stylesheet" href="../views/show_reports.css">
