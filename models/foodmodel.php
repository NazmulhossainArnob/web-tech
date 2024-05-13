<?php
    require_once "db.php";

   
    function searchfood ($search){
        $con = getConnection();
        
        $sql = "SELECT * FROM food 
        WHERE foodname LIKE '%$search%' OR price LIKE '%$search%' OR category LIKE '%$search%' OR description LIKE '%$search%';";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
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
        <tr>
        <td>
        <a href='../controllers/carthandler.php?foodid={$row['foodid']}'>Add to Cart</a>
        </td>
    </tr>
        ";
        }
       
        return $result;
    }


    function foodbrowse ($restaurentid){
        $con = getConnection();
        
        $sql = "SELECT * FROM food 
        WHERE restaurentid= '$restaurentid';";

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
        <tr>
        <td>
        <a href='../controllers/carthandler.php?foodid={$row['foodid']}'>Add to Cart</a>
        </td>
    </tr>
    ";
        }
       
        return $result;
    }    
    
    
    function getfoodbyid($foodid){
        $con = getConnection();
        $sql = "select * from food where foodid='$foodid'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
               
    
                       $_SESSION['foodid']= $row['foodid'];
                       $_SESSION['restaurentid']= $row['restaurentid'];
                       $_SESSION['foodname']= $row['foodname'];
                       $_SESSION['description']= $row['description'];
                       $_SESSION['category']= $row['category'];
                       $_SESSION['price']= $row['price'];
                       $_SESSION['image']= $row['image'];
                       
            }
            return true;
        }else{
            return false;
        }
    }


    function addfood ($fooddetails){
        $con = getConnection();
        $sql = "select restaurentid from restaurent where username='{$fooddetails['username']}'";
        $result = mysqli_query($con, $sql);

        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
               
    
                      
                       $restaurentid= $row['restaurentid'];
                       echo  $restaurentid;

                       
            }

            $sql = "insert into food values('','{$restaurentid}','{$fooddetails['foodname']}','{$fooddetails['description']}','{$fooddetails['category']}','{$fooddetails['price']}','{$fooddetails['image']}')";
            $status = mysqli_query($con, $sql);
           
            return $status;
            
        }
        else
        {
            echo "something is wrong";
        }
    
       
    }

    function viewmenu (){
        $con = getConnection();
        $sql = "select restaurentid from restaurent where username='{$_SESSION['username']}'";
        $result = mysqli_query($con, $sql);

        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
               
    
                      
                       $restaurentid= $row['restaurentid'];
                       echo  $restaurentid;

                       
            }

            $sql = "select * from FOOD where restaurentid='$restaurentid'";

            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                
               echo " <tr>
                <td>{$row['foodname']}</td>
                <td>{$row['description']}</td>
                <td>{$row['category']}</td>
                <td>{$row['price']}</td>
                <td><img src='../assets/{$row['image']}' height=50 width=50></td>
                <td> <a
                href='../views/editmenu.php?foodid=".$row['foodid']."'>Edit</a>  </td>
                <td> <a
                href='../controllers/deletefoodhandler.php?foodid=".$row['foodid']."'>Delete</a>  </td>
            
            </tr>";
            }
           
            return $result;
            
        }
        
        else
        {
            echo "something is wrong";
        }
    
       
    }

    function deletefood ($foodid){
        $con = getConnection();
        
        $sql = "DELETE FROM food WHERE foodid='$foodid';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editfood ($fooddetails){
        $con = getConnection();
        
        $sql = "UPDATE food
        SET foodname = '{$fooddetails['foodname']}', description = '{$fooddetails['description']}', category = '{$fooddetails['category']}', price = '{$fooddetails['price']}', image = '{$fooddetails['image']}'
        WHERE foodid = '{$fooddetails['foodid']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }

?>

