<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>OOP - 1</title>
<h1>OOP - 1</h1>
<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>

<h4>Exercise 1 - classes</h4>

<?php
class Beverage
{
    //properties
    public $color;
    public $price;
    public $temperature;

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
//instantiating new object
$cola = new Beverage("black", "2€", "cold");
$cola->getInfo();
echo "<br>" . "This beverage is $cola->temperature.";
?>

<h4>Exercise 2 - extending</h4>

<?php
class Beer extends Beverage
{
    public $name;
    public $alcoholPercentage;

    public function __construct($name, $alcoholPercentage, $color, $price, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage()
    {
        echo "This alcohol have a percentage of $this->alcoholPercentage->.";
    }   
}
$duvel = new Beer("Duvel", "8.5%", "blond", "3.5€", "cold");
$duvel->getAlcoholPercentage();
echo "<br>" . "This beer color is $duvel->color" . "<br>";
$duvel->getInfo();
?>

<br>
<a href="/index.php">➜ Back to homepage</a>