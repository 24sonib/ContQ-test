<?php
echo "<b><center>Container-ID</center></b>";
echo "<pre>";
sleep(8);
//while(true){
echo shell_exec("sudo docker ps| awk '{print $1}'");
sleep(5);
//}
echo "</pre>";
?>
