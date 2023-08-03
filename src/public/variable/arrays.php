<title>Arrays</title>
<h1>Arrays</h1>

<style>
    a {text-decoration:none; font-weight:700; font-size:20px; color:darkgrey;}
</style>

<h3>1. My family members</h3>
<?php
   $family = array('Jean-Pierre','Sandra','Diego','Hugo','Lora','Clara'); 
  print_r($family);
?>

<h3>2. My favourite recipes</h3>
<?php
   $recipes = array('Lemon meringue pie','Tantuni','Cheese fondue'); 
  print_r($recipes);
?>

<h3>3. Movies</h3>
<?php
   $movies = array('Scarface','The Prestige','Pretty Woman'); 
?>
<p>My favourite movie is <?php echo $movies[0];?></p>

<h3>4. My description</h3>
<?php
    $me = array(
    'firstname' => 'Clara',
    'lastname' => 'Mahaux',
    'age' => '23',
    'favourite season' => 'Autumn',
    'favourite_movies' => array ('Scarface','The Prestige','Pretty Woman'),
    $soccer_lover = false,
    'hobbies' => array ('Cooking', 'Road trips', 'Taking a nap'),
    );
    
    echo '<pre>';
    print_r($me);
    echo '</pre>';
        if ($soccer_lover){
            echo "I love soccer!";
        } else{
            echo "I am not a soccer fan";
        }
?>

<h3>5. My sister description</h3>
<?php
    $sister = array(
    'firstname' => 'Lora',
    'age' => '29',
    'favourite season' => 'Summer',
    $soccer_lover = false,
    'hobbies' => array ('Cooking', 'Gossiping'),
    );
    
    echo '<pre>';
    print_r($sister);
    echo '</pre>';
        if ($soccer_lover){
            echo "She loves soccer!";
        } else{
            echo "She is not a soccer fan";
        };  
?>
<br>
<h4>Multidimensional array</h4>
<?php
    $me['sister_key'] = $sister;
    echo '<pre>';
    print_r($me);
    echo '</pre>';
?>

<br>
<a href="/index.php">➜ Back to homepage</a>

