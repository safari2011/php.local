<?php include "func.php" ?>
<html>
<head>

</head>
<body>
<?php
$string='hellow'; $color='red'; echo '<span style="background: '.$color.'">'.$string.'</span>'
?>
<?php if (20>10): ?>
    <p>a string is first code!</p>
<?php endif;?>
<?php  $a=30; $b=50; if(true) {
    echo "<p>.$a.va.$b.is aval</p>";
} ?>
<?php
echo sum(20,30);
echo sum(40,50);
echo sum(2,80);
echo sum(0,30);
echo sum(200,30);
?>

</body>
</html>