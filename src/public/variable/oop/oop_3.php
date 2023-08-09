<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>OOP - 3</title>
<h1>OOP</h1>
<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>
<h4>Exercise 3 - private</h4>
<?php

/*
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."
TODO: Print this method on the screen on a new line.
*/
class Beverage
{
    //properties
    private string $color;
    private float $price;
    private string $temperature;

    // constructor 
    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    //functions
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color.";
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $temperature = "cold", $name, $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage()
    {
        echo "This alcohol have a percentage of $this->alcoholPercentage%.";
    }
    private function beerInfo()
    {
        echo "<br> Hi, I'm Duvel! I have an alcohol percentage of $this->alcoholPercentage% and I have a $this->color color.";
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}
$duvel = new Beer("blond", 3.5, "cold","Duvel", 8.5);
$duvel->getAlcoholPercentage();
$duvel->color = "light";
echo "<br>" . "This beer color is $duvel->color";
echo "<br>" . $duvel->color . "<br>";
$duvel->getInfo();

?>
<br>
<br>
<a href="/variable/OOP.php">➜ Back to OOP</a>