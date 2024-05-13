<?php 
require_once "../models/eventmodel.php";

    session_start();
    // if(isset($_REQUEST['submit'])){

     

       
        $username = $_SESSION['username']; 
        $password = $_SESSION['password']; 
     
        $title = $_REQUEST['eventTitle'];
        $duration = $_REQUEST['eventDuration']; 
        $starttime = $_REQUEST['startTime'];
        $endtime = $_REQUEST['endTime'];
        $description = $_REQUEST['eventDescription'];
       

       

        if($title == "" || $duration == "" || $starttime == "" || $endtime == "" || $description == "" ) {
            echo "Null value ..";
            
        }
      
        else{

        $details = ['title'=>$title, 'duration'=> $duration, 'starttime'=> $starttime, 'username' => $username,'endtime' => $endtime,'description' => $description];

       
        $status = addevent($details);
        if($status){

          header('location: ../views/viewevent.php');

        }else{
            echo "DB error, try again";
        }
    }
// }
    // else{
    //     echo "invalid requestsss...";
    // }
?>