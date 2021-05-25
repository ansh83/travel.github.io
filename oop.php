<?php
/*
$object1 = new User();
$object1->name = "Alice";
$object2 = clone  $object1;
$object2->name = "Amy";
echo "object1 name = " . $object1->name . "<br />";
echo "object2 name = " . $object2->name; "<br />";

class User
{
public $name;
}
*/
?>

<?php
/*
Translate::lookup();
class Translate
{
const ENGLISH = 0;
const SPANISH = 12;
const FRENCH = 2;
const GERMAN = 3;
// ...
static function lookup()
{
echo self::SPANISH; "<br />";
echo self::GERMAN; "<br />";
}
}
*/
?>


<?php
class Test {
static $jayson = "is my name";
public $pulga = "is my surname";
function get_record(){
     echo "jayson pulga";
	 return self::$jayson;	
	}
	
	function get_surname(){
		
			 return self::$pulga;
		}
	
}

$temp = new Test();
echo "Test A:" .Test::$jayson."<br/>";
echo "Test B:". $temp->get_record()."<br/>";
echo "test C"  .$temp->pulga."<br/>";

?>

<?php

class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
}


class Subscriber extends User
{
public $phone, $email;
function display()
{
echo "Name: " . $this->name . "<br />";
echo "Pass: " . $this->password . "<br />";
echo "Phone: " . $this->phone . "<br />";
echo "Email: " . $this->email."<br />";
}
}


$object = new Subscriber;
$object2 = new Subscriber;

$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";

$object2->name = "jayson";
$object2->password = "secret";
$object2->phone = "012 345 6789";
$object2->email = "jaysonshiela.com";

$object->display();

$object2->display();


?>

<?php
$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "p1 element: " . $p1[2] . "<br>";


$p2 = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printers",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");


echo "p2 element: " . $p2['inkjet'] . "<br>";
?>


<?php
$paper = array("Copier", "Inkjet", "Laser", "Photo","jayson");
$j = 1;
foreach ($paper as $item)
{
echo "$j: $item<br>";
++$j;
}
?>

<?php
$paper = array('jayson' => "java fx",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
foreach ($paper as $item => $description)
echo "$item: $description<br>";
?>

<?php
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
while (list($item, $description) = each($paper))
echo "$item: $description<br>";
?>

<?php
$temp = explode('***', "A***sentence***with***asterisks");
print_r($temp);
printf("There are %x items in your basket", 3);
?>
<?php // formtest2.php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not entered)";
echo <<<_END
<html>
<head>
<title>Form Test</title>
</head>
<body>
Your name is: $name<br />
<form method="post" action="oop.php">
What is your name?
<input type="text" name="name" />
<input type="submit" />
</form>
</body>
</html>
_END;
?>