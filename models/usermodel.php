<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                //print_r($row); echo "<br>";
    
                       $_SESSION['username']= $row['username'];
                       $_SESSION['password']= $row['password'];
                       $_SESSION['role']= $row['role'];
                       $_SESSION['name']= $row['name'];
                       $_SESSION['email']= $row['email'];
                       $_SESSION['gender']= $row['gender'];
                       $_SESSION['dob']= $row['dob'];
                       $_SESSION['phonenumber']= $row['phonenumber'];
                       $_SESSION['address']= $row['address'];
                       $_SESSION['profilepicture']= $row['profilepicture'];
                       $_SESSION['joiningdate']= $row['joiningdate'];
                       
            }
            return true;
        }else{
            return false;
        }
    }

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into user values('','{$user['username']}','{$user['password']}','{$user['role']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}','{$user['phonenumber']}','{$user['address']}','{$user['joiningdate']}','{$user['profilepicture']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function changepassword ($details){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET password = '{$details['newpassword']}'
        WHERE username = '{$details['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editprofile ($user){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET name = '{$user['name']}', email = '{$user['email']}', gender = '{$user['gender']}', dob = '{$user['dob']}', phonenumber = '{$user['phonenumber']}', address = '{$user['address']}'
        WHERE username = '{$user['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editprofilepicture ($user){
        $con = getConnection();
        
        $sql = "UPDATE user
        SET profilepicture = '{$user['profilepicture']}'
        WHERE username = '{$user['username']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }



     function viewuser ($role){
        $con = getConnection();
        
        $sql = "select * from user where role='$role'";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
           echo " <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['address']}</td>
            <td>{$row['joiningdate']}</td>
            <td>{$row['phonenumber']}</td>
            <td> <a  style = '  background-color: #f44336;
            color: white;
            padding: 7px 12px;
           
            text-decoration: none;
           ' href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a>  </td>
        
        </tr>";
        }
       
        return $result;
    }

    // function viewvendorlist (){
    //     $con = getConnection();
        
    //     $sql = "select * from user where role='vendor'";

    //     $result = mysqli_query($con, $sql);
    //     while($row = mysqli_fetch_assoc($result)){
    //         //print_r($row); echo "<br>";
    //        echo " <tr>
    //         <td>{$row['id']}</td>
    //         <td>{$row['name']}</td>
    //         <td>{$row['username']}</td>
    //         <td>{$row['email']}</td>
    //         <td>{$row['gender']}</td>
    //         <td>{$row['dob']}</td>
    //         <td>{$row['address']}</td>
    //         <td>{$row['joiningdate']}</td>
    //         <td>{$row['phonenumber']}</td>
    //         <td><a href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a> </td>
        
    //     </tr>";
    //     }
       
    //     return $result;
    // }

    // function viewcustomerlist (){
    //     $con = getConnection();
        
    //     $sql = "select * from user where role='customer'";

    //     $result = mysqli_query($con, $sql);
    //     while($row = mysqli_fetch_assoc($result)){
    //         //print_r($row); echo "<br>";
    //        echo " <tr>
    //         <td>{$row['id']}</td>
    //         <td>{$row['name']}</td>
    //         <td>{$row['username']}</td>
    //         <td>{$row['email']}</td>
    //         <td>{$row['gender']}</td>
    //         <td>{$row['dob']}</td>
    //         <td>{$row['address']}</td>
    //         <td>{$row['joiningdate']}</td>
    //         <td>{$row['phonenumber']}</td>
    //         <td><a href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a> </td>
        
    //     </tr>";
    //     }
       
    //     return $result;
    // }

    // function viewdeliverymanlist (){
    //     $con = getConnection();
        
    //     $sql = "select * from user where role='admin'";

    //     $result = mysqli_query($con, $sql);
    //     while($row = mysqli_fetch_assoc($result)){
    //         //print_r($row); echo "<br>";
    //        echo " <tr>
    //         <td>{$row['id']}</td>
    //         <td>{$row['name']}</td>
    //         <td>{$row['username']}</td>
    //         <td>{$row['email']}</td>
    //         <td>{$row['gender']}</td>
    //         <td>{$row['dob']}</td>
    //         <td>{$row['address']}</td>
    //         <td>{$row['joiningdate']}</td>
    //         <td>{$row['phonenumber']}</td>
    //         <td><a href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a> </td>
        
    //     </tr>";
    //     }
       
    //     return $result;
    // }
    function deleteuser ($id){
        $con = getConnection();
        
        $sql = "DELETE FROM user WHERE id='$id';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function searchuser ($search){
        $con = getConnection();
        
        $sql = "SELECT * FROM user 
        WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR username LIKE '%$search%' OR email LIKE '%$search%' OR gender LIKE '%$search%' OR dob LIKE '%$search%' OR address LIKE '%$search%' OR joiningdate LIKE '%$search%' OR phonenumber LIKE '%$search%';";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
        echo " <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['address']}</td>
            <td>{$row['joiningdate']}</td>
            <td>{$row['phonenumber']}</td>
            <td><a style = '  background-color: #f44336;
            color: white;
            padding: 7px 12px;
           
            text-decoration: none;
           ' href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a> </td>

        </tr>";
        }
       
        return $result;
    }

    function viewalluser (){
        $con = getConnection();
        
        $sql = "select * from user";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
           echo " <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['address']}</td>
            <td>{$row['joiningdate']}</td>
            <td>{$row['phonenumber']}</td>
            <td><a  style = '  background-color: #f44336;
            color: white;
            padding: 7px 12px;
           
            text-decoration: none;
           ' href='../controllers/deleteuserhandler.php?id=".$row['id']."'>Delete</a>  </td>
        
        </tr>";
        }
       
        return $result;
    }


    function googlesignin($email)
    {
        $con = getConnection();
        $sql = "select * from user WHERE email='$email';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                //print_r($row); echo "<br>";
    
                       $_SESSION['username']= $row['username'];
                       $_SESSION['password']= $row['password'];
                       $_SESSION['role']= $row['role'];
                       $_SESSION['name']= $row['name'];
                       $_SESSION['email']= $row['email'];
                       $_SESSION['gender']= $row['gender'];
                       $_SESSION['dob']= $row['dob'];
                       $_SESSION['phonenumber']= $row['phonenumber'];
                       $_SESSION['address']= $row['address'];
                       $_SESSION['profilepicture']= $row['profilepicture'];
                       $_SESSION['joiningdate']= $row['joiningdate'];
                       
            }
            return true;
        }else{
            return false;
        }
    }

    function updateinfo ($user){
        $con = getConnection();
        $sql = "insert into user values('','{$user['username']}','{$user['password']}','{$user['role']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}','{$user['phonenumber']}','{$user['address']}','{$user['joiningdate']}','{$user['profilepicture']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function checkuser ($user){
        $con = getConnection();
        $sql = "select * from user where username='{$user['username']}' and phonenumber='{$user['phonenumber']}' and email='{$user['email']}' and dob='{$user['dob']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function randompassword($username,$randompassword)
    {
        $con = getConnection();
        $sql = "UPDATE user
        SET password ='{$randompassword}'
        WHERE username = '{$username}';";
        $result = mysqli_query($con, $sql);
         return $result;
    }






    function emailexists($email){
        $con = getConnection();
        $sql = "select * from user where email='{$email}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function phonenumberexists($phonenumber){
        $con = getConnection();
        $sql = "select * from user where phonenumber='{$phonenumber}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function usernameexists($username){
        $con = getConnection();
        $sql = "select * from user where username='{$username}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
?>