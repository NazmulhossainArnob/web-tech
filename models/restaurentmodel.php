<?php
    require_once "db.php";

   
    function searchrestaurent ($search){
        $con = getConnection();
        
        $sql = "SELECT * FROM restaurent 
        WHERE restaurentname LIKE '%$search%' OR address LIKE '%$search%' OR status LIKE '%$search%';";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
        echo " <tr>
            <td>
        <table>
            <tr>
                <td>
                <a href='../views/menubrowsing.php?restaurentid={$row['restaurentid']}'><img src='../assets/{$row['image']}' height='100' width='150'></a>
                </td>
            </tr>
        </table>
        </td>
        <td>
        <table>
            <tr>
                <td>
                {$row['restaurentname']} <br>
               {$row['address']} <br>
               {$row['phonenumber']} <br>
               Status : 
               {$row['status']} <br>
                </td>
            </tr>
        </table>
        </td>

        </tr>";
        }
       
        return $result;
    }

    function restaurentbrowse(){
        $con = getConnection();
        
        $sql = "SELECT * FROM restaurent;";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
        echo " <tr>
            <td>
        <table>
            <tr>
                <td>
                <a href='../views/menubrowsing.php?restaurentid={$row['restaurentid']}'><img src='../assets/{$row['image']}' height='100' width='150'></a>
                </td>
            </tr>
        </table>
        </td>
        <td>
        <table>
            <tr>
                <td>
                {$row['restaurentname']} <br>
               {$row['address']} <br>
               {$row['phonenumber']} <br>
               Status : 
               {$row['status']} <br>
                </td>
                
            </tr>
        </table>
        </td>

        </tr>";
        }
       
        return $result;
    }



?>

