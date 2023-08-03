<!DOCTYPE html>
<html>
<head>
  <title>Variables</title>
</head>
<body>

<?php
  $firstName = "Clara";
  $age = "23";
  $eyes = "brown";
  $family = array(
    0 => 'Jean-Pierre',
    1 => 'Sandra',
    2 => 'Diego',
    3 => 'Hugo',
    4 => 'Lora',
    5 => 'Clara',
  );
  $hungry = true;
?>

<p>Hi my name is <?php echo $firstName; ?></p>
<p>I am <?php echo $age; ?> years old</p>
<p>My eyes are <?php echo $eyes; ?></p>
<p>The first person in my family is <?php echo $family[0];?></p>
<p><?php 
if ($hungry){
    echo "I am hungry!";
} else{
    echo "I am not hungry";
}
    ?></p>

</body>
</html>