<html>
<head>
<title> My First Web Page </title>
<body align=center><h1>
<?php
//Equality and Inequality
$a = 2;
$b = 3;
$month = "December";

if ($a===$b)echo "a is equal to b <br>";
if ($month=="December") echo "It's Christmas time!<br>";

if ($a>$b) echo "a is greater than b<br>";
if ($a<$b) echo "a is less than b";
echo "<br>";
if ($a>=$b) echo "a is greater equal than b";
echo "<br>";
if ($a<=$b) echo "a is less equal than b";
$c = 1;
$d = 0;
echo $c and $d;
echo "<br>";
if ($c or $d)
{
	echo "One of the operands or both operands are TRUE";
}
echo "<br>";
echo $c xor $d;
$bank_balance = 90;
$savings = 100;
if ($bank_balance<100)
{
	$money = 1000;
	$bank_balance+=$money; // The same as bank_balance = bank_balance + money
	echo "<br>";
	echo "The bank balance is:<br>".$bank_balance;
}

else 
{
	$savings +=50;
	$bank_balance-=50;
	echo "The savings is <br>".$savings;
	echo "The bank balance is: <br>".$bank_balance;
}

$page = "Web Page";
switch ($page)
{
	case "Home";
	{
		echo "You chose Home";
		break;
	}
	
	case "Login";
	{
		echo "You chose Login";
		break;
	}	
	
	
	case "Links";
	{
		echo "You chose Links";
		break;
	}
	default:
	{	
		echo "None of the choices is correct";
	}
}


$fuel = 100;
echo $fuel <=1? "Fill tank now": "There's enough fuel";
	
	
	

	
	
	
	


?> </h1>
</body>
</head>

</html>