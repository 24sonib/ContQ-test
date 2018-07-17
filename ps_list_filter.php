<?php
echo "<pre>";
echo '<h4 style="color: white">';
echo "<b><center>Container-ID</center></b>";
sleep(8);
//while(true){
echo shell_exec("sudo docker ps| awk '{print $1}'");
//sleep(5);
//}
echo '</h4>';
echo "</pre>";
?>
