
<html>
<head><link rel="stylesheet" type="text/css" href="css/style.css"> 


</head>
<body>
<center>


<h2>
<p class="sinistro" align="left"><a class="a1" href="/elearning/logsign/teacher/docloginok.php">Back</a></p>
<p class="destro" align="right"><a  class="a2" href="../logout.php">Logout</a> </p>
</h2>
<?php
session_start();
$idcorso=$_SESSION['idcorso'];
$host = "localhost";
$username="myelearn_asim";
$pass="asim140897";
$db_nome="myelearn_dbelearning";

    $mysqli = new mysqli('localhost','myelearn_asim','asim140897','myelearn_dbelearning');
    if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    }

  $del_img=$_GET["filename"];
  $query = "DELETE FROM files WHERE filename='$del_img'";
  $result=mysqli_query($mysqli,$query);
  if($result){
   
             unlink("upload/$del_img");
             header("Location: index.php?success=File deleted successfully!!!"."&idcorso=".$_SESSION['idcorso']);
    
              }
  else{
    
               header("Location: index.php?error:Error while trying to delete this file "."&idcorso=".$_SESSION['idcorso']);
    
 }


?>
</body>
</html>



	



