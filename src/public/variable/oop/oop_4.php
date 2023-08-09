<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>OOP - 4</title>
<h1>OOP</h1>
<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>

<h4>Exercise 4 - protected</h4>
<?php 
/*
Copy the code of exercise 3 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in the child class.
*/
class Beverage
{
    //properties
    protected string $color;
    protected float $price;
    protected string $temperature;

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
    protected string $name;
    protected float $alcoholPercentage;

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
    public function beerInfo()
    {
        echo "<br> Hi, I'm Duvel! I have an alcohol percentage of $this->alcoholPercentage% and I have a $this->color color.";
    }
}
$duvel = new Beer("blond", 3.5, "cold","Duvel", 8.5);
$duvel->getAlcoholPercentage();
$duvel->color = "light";
echo "<br>" . "This beer color is $duvel->color";
echo "<br>" . $duvel->color . "<br>";
$duvel->beerInfo();
?>
?>

<br>
<a href="/variable/OOP.php">➜ Back to OOP</a>