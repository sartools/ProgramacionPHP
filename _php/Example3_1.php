<?php
  $number = $_POST['number'];
  if (isset($number)) {
	 $count = intval($_POST['count']);
	 $count++;
	 $numbers = Array();
     array_push($numbers,$number);
	 for ($i = 0; $i < $count-1; $i++) {
	    array_push($numbers,$_POST['number'.$i]);
	}
  } else {
	$count = 0;
  }
?>
<html>
	<head>
		<title>My Lottery</title>
	</head>
	<body>
   <h2>My Lottery</h2>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <?php
      if ($count == 0) {
        echo "<h3>Wellcome!!</h3>";
	  } else {
	    echo "<label>Your winning numbers are: </label>";
	    for ($i = 0; $i < $count-1; $i++)
			echo "<b>".$numbers[$i]."</b>, ";
		echo "<b>".$numbers[$count-1]."</b></p>";
	  }
	  if ($count == 6) {
		  echo "<h3>Good luck!!</h3>";
	  } else { 
    ?>
   <label>Please, enter a number:</label>
   <input type='text' name='number'/>
   <input type='submit'>
   <?php } ?>
   <input type="hidden" value="<?php echo $count; ?>" name="count"/>
   <?php
      for ($i = 0; $i < $count; $i++) { ?>
      <input type="hidden" value="<?php echo $numbers[$i]; ?>" 
	         name="number<?php echo $i?>"/>
   <?php } ?>
   </form>
  </body>
 </html>