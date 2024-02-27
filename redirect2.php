<!DOCTYPE html>
<html>
<body>

<?php 
$goto = $_GET["loc"];

$loc_head = "Location: " . $goto;
header($loc_head); 
?>

</body>
</html>