<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
// echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "PipeNum is " . $_SESSION["pipeNum"] . ".";
$_SESSION["pipeNum"] = 1;
echo "<br>";
print_r($_SESSION);

?>

</body>
</html>