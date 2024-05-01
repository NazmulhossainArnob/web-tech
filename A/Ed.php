<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="aba";
$conn=new mysqli($serverName,$userName,$password,$dbName);
$sql="select * from ab";
$res=mysqli_query($conn,$sql);
if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
  $sql1="delete from ab where id='$id'";
  mysqli_query($conn,$sql1);
}
else if(isset($_GET['edit']))
{
   echo $_GET['edit'];
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form method="get">
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th colspan="2">Option</th>
    </tr>
    <?php while($r=mysqli_fetch_assoc($res)) {?>
    <tr>
      <td><?php echo $r["Id"]; ?></td>
      <td><?php echo $r["Name"]; ?></td>
      <td><button name="edit" value="<?php echo $r["Id"]; ?>">Edit</button></td>
      <td><button name="delete" value="<?php echo $r["Id"]; ?>">Delete</button></td>
    </tr>
    <?php } ?>
 
  </table>
  </form>
 
</body>
</html>