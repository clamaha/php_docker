<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<title>Arrays</title>
<h1>Arrays</h1>

<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>

<h3>My family members</h3>
<?php
$family = array('Jean-Pierre', 'Sandra', 'Diego', 'Hugo', 'Lora', 'Clara');
print_r($family);
?>

<h3>My favourite recipes</h3>
<?php
$recipes = array('Lemon meringue pie', 'Tantuni', 'Cheese fondue');
print_r($recipes);
?>

<h3>Movies</h3>
<?php
$movies = array('Scarface', 'The Prestige', 'Pretty Woman');
?>
<p>My favourite movie is <?php echo $movies[0]; ?></p>

<h3>My description</h3>
<?php
$me = array(
    'firstname' => 'Clara',
    'lastname' => 'Mahaux',
    'age' => '23',
    'favourite season' => 'Autumn',
    'favourite_movies' => array('Scarface', 'The Prestige', 'Pretty Woman'),
    'soccer_lover' => false,
    'hobbies' => array('Cooking', 'Road trips', 'Taking a nap'),
);

echo '<pre>';
print_r($me);
echo '</pre>';
if ($me['soccer_lover']) {
    echo "I love soccer!";
} else {
    echo "I am not a soccer fan";
}
?>

<h3>My sister description</h3>
<?php
$sister = array(
    'firstname' => 'Lora',
    'age' => '29',
    'favourite season' => 'Summer',
    'soccer_lover' => false,
    'hobbies' => array('Cooking', 'Gossiping'),
);

echo '<pre>';
print_r($sister);
echo '</pre>';
if ($sister['soccer_lover']) {
    echo "She loves soccer!";
} else {
    echo "She is not a soccer fan";
};
?>
<br>

<h4>Multidimensional arrays</h4>
<?php
$me['sister_key'] = $sister;
echo '<pre>';
print_r($me);
echo '</pre>';

?>
<h4>Counting arrays</h4>
<?php
echo "Total amount of my sister hobbies: " . count($sister['hobbies']);
?>
<br>
<?php
echo "Total amount of my hobbies: " . count($me['hobbies']);
?>
<br>
<?php
$total_hobbies = count($me['hobbies']) + count($sister['hobbies']);
echo "Total amount of hobbies: " . $total_hobbies;
?>

<h4>Add element in array</h4>
<?php
$me['hobbies'][] = 'Taxidermy';
echo '<pre>';
print_r($me['hobbies']);
echo '</pre>';
?>

<h4>Updating an array</h4>
<?php
$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';
?>
<h4>Intersection and merge</h4>

<?php
$soulmate = array(
    'firstname' => 'Y',
    'age' => '27',
    'favourite season' => 'Spring',
    'favourite_movies' => array('Idk', 'Idk2'),
    'soccer_lover' => true,
    'hobbies' => array('Singing', 'Cooking', 'Global News')
);
$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
?>

<h4>More array exercices</h4>
<p>To be continued...</p>
<br>
<a href="/index.php">➜ Back to homepage</a>