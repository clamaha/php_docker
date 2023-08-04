<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>Loops</title>
<h1>Loops</h1>
<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>
<h4>Pronouns</h4>
<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    echo $pronoun . ' code<br>';
}
?>

<h4>Numbers with "while"</h4>
<?php
    $number = 1;
    
    while ($number <= 120) {
        echo $number . ' ';
        $number++;
    }
?>

<h4>Numbers with "for"</h4>
<?php
   for ($i = 1; $i <= 120; $i++) {
    echo $i . ' ';
}
?>

<h4>Promo names</h4>
<?php
    $names = array(
        "Abdoulaye",
        "Adeline",
        "Camille",
        "Cédric",
        "Clara",
        "Corentin",
        "Ilias",
        "Jason",
        "Jérôme",
        "Lucie",
        "Manon",
        "Marius",
        "Nathan",
        "Nicolas",
        "Ozlem",
        "Pauline",
        "Pietro",
        "Robin",
        "Rui",
        "Sam",
        "Sarah",
        "Steeve",
        "Tim",
        "Youssef"
    );
    foreach ($names as $name) {
        echo $name . '<br>';
    }
?>

<h4>Countries</h4>
<?php
$countries = array(
    'BE' => 'Belgium',
    'KU' => 'Kurdistan',
    'IT' => 'Italy',
    'UK' => 'United Kingdom',
    'FR' => 'France',
    'AU' => 'Australia',
    'CA' => 'Canada',
    'US' => 'United States',
    'PT' => 'Portugal',
    'DE' => 'Germany',
    "GR" => "Greece",
    "NL" => "Netherlands",
    "CH" => "Switzerland",
    "LU" => "Luxembourg",
    "ES" => "Spain"
);

$box_HTML = '<select name="country">';
foreach ($countries as $iso_code => $country) {
    $box_HTML .= '<option value="' . $country . '">' . $country . '</option>';
}
$box_HTML .= '</select>';
?>
<label for="country">Select a country:</label>
<?php echo $box_HTML; ?>

<br>
<a href="/index.php">➜ Back to homepage</a>