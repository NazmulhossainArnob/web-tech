<?php
    require_once "db.php";

    function addevent($details){
        $con = getConnection();
        

            $sql = "insert into event values('','{$details['title']}','{$details['duration']}','{$details['starttime']}','{$details['endtime']}','{$details['description']}','{$details['username']}')";
            $status = mysqli_query($con, $sql);
           
            return $status;
            
      
    
       
    }







    function viewevent(){
        $con = getConnection();
        

        $sql = "select * from event";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
           echo " <tr>
            <td>{$row['title']}</td>
            <td>{$row['duration']}</td>
            <td>{$row['starttime']}</td>
            <td>{$row['endtime']}</td>
            <td>{$row['description']}</td>
           
        
        </tr>";
        }
       
        return $result;
      
    
       
    }























    ?>