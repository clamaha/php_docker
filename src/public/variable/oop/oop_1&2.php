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
/*
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
*/
class Beverage
{
    //properties
    public string $color;
    public float $price;
    public string $temperature;

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
$cola = new Beverage("black", 2, "cold");
$cola->getInfo();
echo "<br>" . "This beverage is $cola->temperature.";
?>

<h4>Exercise 2 - extending</h4>

<?php
/* 
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
*/
class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct($color, $price, $temperature="cold", $name, $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage()
    {
        echo "This alcohol have a percentage of $this->alcoholPercentage%.";
    }   
}
$duvel = new Beer("blond", 3.5, "cold","Duvel", 8.5);
$duvel->getAlcoholPercentage();
echo "<br>" . "This beer color is $duvel->color" . "<br>";
$duvel->getInfo();
?>
<br>
<a href="/variable/OOP.php">➜ Back to OOP</a>