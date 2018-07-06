<?php 
$aService = $_POST['service'];

	  if(empty($aService))
	  {
	    echo("You didn't select any service.");
	  } 
	
	else
	  {
	    $N = count($aService);
	    echo("You selected $N service(s): ");
	    for($i=0; $i < $N; $i++)
	    {
	      echo("<br>" . $aService[$i] . " ");
	    }
	  }
?>
