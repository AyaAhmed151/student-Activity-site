
<?php
session_start();
require 'conn.php';
global $conn;

echo "<a href='logout.php'>Logout</a>";
"<br>";
$query = "SELECT email , name , phone , feedback FROM feedback" ; 
$runquery = mysqli_query($conn,$query);

if($runquery){
   // echo "done";
    if(isset($_POST['veiw'])){
while($row=mysqli_fetch_assoc($runquery)){
    echo"Email" .$row['email']  ."Name" .$row['name'] ."phone" .$row['phone'] ."Feedback" .$row['feedback'] ."<br>";
}}
}

?>
