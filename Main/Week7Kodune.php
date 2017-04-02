<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$sona = "Rasmus";
for ($i = 0; $i < strlen($sona); $i++) {
    echo $sona[strlen($sona)-$i-1];
}
?>
</body>
</html>