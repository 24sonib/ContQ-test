<?php
echo "<b><center>process</center></b>";
echo "<pre>";
sleep(8);
echo shell_exec('sudo docker ps');
echo "</pre>";
?>
