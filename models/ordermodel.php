<?php
    require_once "db.php";
    require_once '../models/cartmodel.php';
    //session_start();


    function addtoorder ($details){


        $con = getConnection();
        
        $sql = "select * from cart where customername='{$details['username']}'";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
             $customername=$row['customername'];
             $foodid=$row['foodid'];
             $restaurentid=$row['restaurentid'];
             $foodname=$row['foodname'];
             $description=$row['description'];
             $category=$row['category'];
             $price=$row['price'];
             $image=$row['image'];
             $sql = "insert into orders values('','$customername','$foodid','$restaurentid','$foodname','$description','$category','$price','$image')";
             
             $status = mysqli_query($con, $sql);
             clearcart ($customername);

            
        
    
        }

        return $status;
        // $con = getConnection();
        // $sql = "insert into order values('','{$fooddetails['customername']}','{$fooddetails['foodid']}','{$fooddetails['restaurentid']}','{$fooddetails['foodname']}', '{$fooddetails['description']}','{$fooddetails['category']}','{$fooddetails['price']}','{$fooddetails['image']}')";
        // $status = mysqli_query($con, $sql);
        // return $status;
    }

    function vieworder ($customername){
        $con = getConnection();
        
        $sql = "SELECT * FROM orders
        WHERE customername= '$customername';";

        $result = mysqli_query($con, $sql);
        
        while($row = mysqli_fetch_assoc($result)){
            
        echo " <tr>
            <td>
        <table>
            <tr>
                <td>
              <img src='../assets/{$row['image']}' height='100' width='150'>
                </td>

            </tr>
        </table>
        </td>
        <td>
        <table>
            <tr>
                <td>
                {$row['foodname']} <br>
               {$row['description']} <br>
               Price : 
               {$row['price']} <br>
                </td>
            </tr>
        </table>
        </td>

        </tr>
 

    ";
        }
        return $result;
      
    }  

    function cancelorder ($customername){
        $con = getConnection();
        
        $sql = "DELETE FROM orders WHERE customername='$customername';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }

?>
