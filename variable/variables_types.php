<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php $myName = "Virginie"; $myAge = 25; $myEyes = "brown";?>
    <p>Hi! My name <?php echo $myName; ?>.</p>
    <p>I am <?php echo $myAge; ?> years old. </p>   
    <p>My eyes are <?php echo $myEyes; ?> . </p> 
    <?php $myFamily = array (
        0 => 'Sébastien',
        1 => 'Virginie');
    ?>
    <p>The first person in my family is <?php echo $myFamily[1]; ?></p>
  </body>
</html>