<?php
session_start();

echo"welcome ".$_SESSION['name'];
?>
<center> 
    <form method="POST" action="f.php">
        <input type="submit" value="veiw" name="veiw">
    </form>
</center>