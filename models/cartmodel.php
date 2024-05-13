<?php
    require_once "db.php";
    session_start();


    function addtocart ($fooddetails){
        $con = getConnection();
        $sql = "insert into cart values('','{$fooddetails['customername']}','{$fooddetails['foodid']}','{$fooddetails['restaurentid']}','{$fooddetails['foodname']}', '{$fooddetails['description']}','{$fooddetails['category']}','{$fooddetails['price']}','{$fooddetails['image']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function viewcart ($customername){
        $con = getConnection();
        
        $sql = "SELECT * FROM cart 
        WHERE customername= '$customername';";

        $result = mysqli_query($con, $sql);
        $totalprice=0;
        while($row = mysqli_fetch_assoc($result)){
            $totalprice=$totalprice+$row['price'];
            
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

        $_SESSION['totalprice']= $totalprice;
        return $totalprice;
    }  

    function clearcart ($customername){
        $con = getConnection();
        
        $sql = "DELETE FROM cart WHERE customername='$customername';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }

?>
