<?php
echo "<pre>";
echo '<h4 style="color:green">';
echo "<b><center>process</center></b>";
sleep(8);
echo shell_exec('sudo docker ps');
echo '</h4>';
echo "</pre>";
?>
