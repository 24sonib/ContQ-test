<?php
echo "<b><center>Container-ID</center></b>";
echo "<pre>";
sleep(8);
echo shell_exec("sudo docker ps| awk '{print $1}'");
echo "</pre>";
?>
