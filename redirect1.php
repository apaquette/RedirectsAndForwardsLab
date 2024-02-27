<!DOCTYPE html>
<html>
<body>

<?php 
    $goto = "";

    function isInternalURL($url){
        $allowedPages = array("testPage1.php", "testPage2.php", "testPage2.php");
        return (in_array($url, $allowedPages));
    }

    if(isset($_GET["loc"])){
        $goto = $_GET["loc"];
    }

    if(isInternalURL($goto)){
        echo "<script>location.href='$goto';</script>";
    }
?>

</body>
</html>
