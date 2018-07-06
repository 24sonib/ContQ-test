<html>
<head>
</head>
<body>
<?php 
shell_exec("shellinaboxd -b -t -s /:root:root:HOME:'docker run -it centos' -p 4250  >/dev/null 2>/dev/null &");
?>
<h3>Stack selected visit Container by below link</h3>
<a href="http://localhost:4250">Container</a>
</body>
</html>
