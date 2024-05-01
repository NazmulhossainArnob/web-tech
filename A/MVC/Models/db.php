 <?php 

function conn()
{
   $serverName="localhost";
   $userName="root";
   $pass="";
   $dbName="abcd";
   $conn=new mysqli($serverName,$userName,$pass,$dbName);
   return $conn;
}
 


?>