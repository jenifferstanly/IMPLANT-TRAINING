<!DOCTYPE html>
<html>
<body>
<?php 
 declare(strict_types=2); 
function setHeight(int $minheight = 50)
 {
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>
</body>
</html>