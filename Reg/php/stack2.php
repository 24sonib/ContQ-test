<html>
<head>
</head>
<body>
<?php 
$srip = shell_exec("sh -c script/term3.sh &");
?>
<h3>Stack selected visit Container by below link</h3>
<a href="https://<?php echo $srip; ?>:4200">Container</a>
</body>
</html>
