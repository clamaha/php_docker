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
class Beverage
{
    //properties
    private string $color;
    private $price;
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
    private $name;
    private $alcoholPercentage;

    public function __construct($name, $alcoholPercentage, $color, $price, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage()
    {
        echo "This alcohol have a percentage of $this->alcoholPercentage.";
    }
    public function beerInfo()
    {
        echo "Hi I'm Duvel and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color";
    }
}
$duvel = new Beer("Duvel", "8.5%", "blond", "3.5€", "cold");
$duvel->getAlcoholPercentage();
$duvel->color = "light";
echo "<br>" . "This beer color is $duvel->color";
echo "<br>" . $duvel->color . "<br>";
$duvel->getInfo();
?>
<br>
<br>
<a href="/variable/OOP.php">➜ Back to OOP</a>