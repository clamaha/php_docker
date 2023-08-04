<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>Variables</title>
<h1>Variables</h1>
<style>
  a {
    text-decoration: none;
    font-weight: 700;
    font-size: 20px;
    color: darkgrey;
  }
</style>

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
<p>The first person in my family is <?php echo $family[0]; ?></p>
<p><?php
    if ($hungry) {
      echo "I am hungry!";
    } else {
      echo "I am not hungry";
    }
    ?></p>
<br>
<a href="/index.php">➜ Back to homepage</a>