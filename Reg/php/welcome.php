<?php
   include('session.php');
?>
   <!DOCTYPE html>

   <head>
      <title>Welcome </title>
<link rel="stylesheet" type="text/css" href="../css/plan.css"
   </head>
   
   <body bgcolor="#b1d48e">
      <h1>Welcome <?php echo $login_session; ?><br/> Please select the plans</h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
<div id="main">
<div id="Sdiv1">
<b style="margin: 20px 5px 20px 5px;">Plans Form</b>
<div id="Sdiv2">
<form action="http://localhost/ContQ/h4.html" method="post">

<input type="submit" value="try it"  class="button" required>
</form>
</div>
</div>
</div>


<div id="main">
<div id="Sdiv1">
<b style="margin: 20px 5px 20px 5px;">Plans Form</b>
<div id="Sdiv2">
<form action="../stack.html" method="post">

<input type="submit" value="try it"  class="button" required>
</form>
</div>
</div>
</div>


<div id="main">
<div id="Sdiv1">
<b style="margin: 20px 5px 20px 5px;">Plans Form</b>
<div id="Sdiv2">
<form action="php/login.php" method="post">

<input type="submit" value="purchase it"  class="button" required>
</form>
</div>
</div>
</div>
   </body>
   
</html>
