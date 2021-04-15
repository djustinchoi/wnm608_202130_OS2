<? 

// phpinfo()
// broken 

echo "<h1>hello out there</h1>";
echo "<h2>goodbye</h2>";
//echo works like html text??

// assignment operator is =
$a =5;
//$ is a variable

// string interpolation
echo "<div> i have $a things</div>";
echo '<div> i have $a things</div>';


// value types

//number
//integer
$b=15;
//float
$b=0.576;
echo"$b";
// b = whatever the last so -->> 0.576

//string
$name="dude";
$name='hamilton';
echo"$name";

//boolean (true&false)
$isOn = true;
//math

//order of operation
echo (5+2)*3;

//concatenation
echo"<div>b+a=c</div>";
echo"<div>$b+$a =" . ($b+$a) . "</div>";

?>

<hr>
<div>this is my name</div>
<div>
<?php
$firstname = "justin";
$lastname = "choi";
$fullname = "$firstname $lastname";
echo"$fullname"
?>
</div>