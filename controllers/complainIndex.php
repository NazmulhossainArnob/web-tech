<?php

require_once '../models/complainModel.php';
require_once 'complainController.php';

if(isset($_GET['action']))
{
switch ($_GET['action'])
{
case 'create_complain':
include '../views/createComplain.php';
break;
case 'view_complains':
$complains = getComplains();
break;
default:
include '../views/viewPageComplain.php';
break;
}
}
else
{
include '../views/viewPageComplain.php';
}

?>

<link rel="stylesheet" href="../views/viewComplains.css">
<link rel="stylesheet" href="../views/viewPageComplain.css">
<link rel="stylesheet" href="../views/createComplain.css">
