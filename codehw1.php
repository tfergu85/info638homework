<html>
<head>
<style>
 body {
     background-color: thistle;   
     }
    
 h1 {
    text-align: center; color: rebeccapurple; text-decoration: underline;text-decoration-style: dotted; text-decoration-color: snow;   
    }
    
 h2 {
    color: snow; text-decoration: underline; text-decoration-style: dotted;
    text-decoration-color: rebeccapurple;   
    }
    
 h3 {
    color: rebeccapurple;    
    }
</style>
</head>

<body>

<h1>Code Homework #1</h1>


<h2>Challenge 1: Correct Change</h2>


<?php
$total_change = 799;
$dollars = (int) ($total_change / 100);
$change_minus_dollars = $total_change - ($dollars * 100);
$quarters = (int) ($change_minus_dollars / 25);
$dimes = (int) (($change_minus_dollars - (25 * $quarters)) / 10);
$nickels = (int) (($change_minus_dollars - (25 * $quarters) - (10 * $dimes)) / 5);

    
echo "You are due $total_change cents back in change total. <br> <br>";

echo "You are due back:" . ' '; 

echo (int) ($total_change / 100) . ' ' . "dollar(s)," . ' '; 
//prints dollar(s)

echo (int) ($change_minus_dollars / 25) . ' ' . "quarter(s)," . ' '; 
//prints quarter(s)
    
echo (int) (($change_minus_dollars - (25 * $quarters)) / 10) . ' ' . "dime(s)," . ' '; 
//prints dimes(s)
    
echo (int) (($change_minus_dollars - (25 * $quarters) - (10 * $dimes)) / 5) . ' ' . "nickel(s)," . ' '; 
//prints nickel(s)
    
echo (int) (($change_minus_dollars - (25 * $quarters) - (10 * $dimes) - (5 * $nickels)) / 1) . 
' ' . "cent(s)" . ' '; 
//prints cent(s)
//Program works with any amount of change
?>
    
<br>
<br>

<h2>Challenge 2: Bottles of Beer</h2>
    
<h3>Part A</h3>
    
<?php    
$count1 = 99;
$count2 = 98;
    
while ($count1 >= 1 && $count2 >= 0)
{
    echo "$count1 bottles of beer on the wall. $count1 bottles of beer! <br> Take one down and pass it around, $count2 bottles of beer on the wall! <br> <br>";
    --$count1;
    --$count2;
//prints entire Bottles of Beer song   
} 
?>
    
<h3>Part B</h3>

<?php    
$count1 = 8;
$count2 = $count1 - (1);
    
while ($count1 >= 1 && $count2 >= 0)
{
    echo "$count1 bottles of beer on the wall. $count1 bottles of beer! <br> Take one down and pass it around, $count2 bottles of beer on the wall! <br> <br>";
    --$count1;
    --$count2;
//prints Bottles of Beer song for any number of beers  
} 
?>
    

</body>
</html>