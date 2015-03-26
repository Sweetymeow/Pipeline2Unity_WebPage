<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

</body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
// echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
// echo "PipeNum is " . $_SESSION["pipeNum"] . "." . "<br>";
// echo "Unity Key is " . $_GET['getkey']. ".". "<br>";
// print_r($_SESSION);

?>

</body>
</html> -->