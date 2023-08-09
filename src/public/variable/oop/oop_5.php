<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title>OOP - 5</title>
<h1>OOP</h1>
<style>
    a {
        text-decoration: none;
        font-weight: 700;
        font-size: 20px;
        color: darkgrey;
    }
</style>

<h4>Exercise 5 - public</h4>

<?php
/*
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
    class Beverage
{
    //properties
    private $color;
    private $price;
    private $temperature;

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
<br>
<a href="/variable/OOP.php">➜ Back to OOP</a>