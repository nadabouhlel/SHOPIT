

 



<?php
$user ='root';
$pass='';
$db='shop';

$db = new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");

?>
<?php echo "passed"; ?> <br>
 WELCOME !!! <?php echo $_POST["uname"];   ?> <br>

YOUR PASSWORD IS : <?php echo $_POST["psw"]; ?>



