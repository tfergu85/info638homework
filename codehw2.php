<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>codehw2</title>
<style>
 body {
     background-color: darkseagreen;   
     }
    
 h1 {
    text-align: center; color: darkgreen; text-decoration: underline;text-decoration-style: dotted; text-decoration-color: snow;   
    }
    
 h2 {
    color: snow; text-decoration: underline; text-decoration-style: dotted;
    text-decoration-color: darkgreen;   
    }
    
 h3 {
    color: darkgreen;    
    }
</style>
</head>

<body>

<h1>Code Homework #2</h1>
    
<h2>Challenge 1: ISBN Validation</h2>

<br>
    
<?php

$isbn = "052101073X";
 
echo "Checking ISBN: $isbn for validity... <br> <br>";
    
function isbnvalidity ($isbn) {
    
$digit1 = substr ($isbn, 0, 1); //first digit of isbn
$digit2 = substr ($isbn, 1, 1); //second digit of isbn
$digit3 = substr ($isbn, 2, 1); //third digit of isbn
$digit4 = substr ($isbn, 3, 1); //fourth digit of isbn
$digit5 = substr ($isbn, 4, 1); //fifth digit of isbn
$digit6 = substr ($isbn, 5, 1); //sixth digit of isbn
$digit7 = substr ($isbn, 6, 1); //seventh digit of isbn
$digit8 = substr ($isbn, 7, 1); //eighth digit of isbn
$digit9 = substr ($isbn, 8, 1); //ninth digit of isbn
$digit10 = substr ($isbn, 9, 1); //tenth digit of isbn   


if ($digit10 == "X")
{
$digit10 == "10";
return True;
}
//if last digit of isbn is an X
    
$isbn_sum = (10 * $digit1) + (9 * $digit2) + (8 * $digit3) + (7 * $digit4) + (6 * $digit5) + (5 * $digit6) + (4 * $digit7) + (3 *$digit8) + (2 * $digit9) + (1 * $digit10);
//sum of isbn digits

$isbn_quotient = $isbn_sum % 11;
//sum of isbn digits divided by 11
    
if ($isbn_quotient == 0) 
{
return True;
}
else {
return False;
} 
   }
//if the sum of isbn divided by 11 is a whole number, it will evaluate as True
    

if (isbnvalidity ($isbn) == True)
{
echo "This is a valid ISBN!";   
} 
else {
echo "This is NOT a valid ISBN!";
}
//calling function
//program should work with valid/invalid isbns and isbns with Xs
      
?>
    
<br>
<br>
<br>
    
<h2>Challenge 2: Coin Toss</h2>
    
<h3>Part A</h3>
    
<p>Flipping a coin 1 time...</p>
    
<?php
$coin1 = mt_rand (1,2);
    
if ($coin1 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
//flips coin 1 time
?>

<p>Flipping a coin 3 times...</p>

<?php  
$coin1 = mt_rand (1,2);
$coin2 = mt_rand (1,2);
$coin3 = mt_rand (1,2);  
    
if ($coin1 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin2 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
        
if ($coin3 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
//flips coin 3 times
?>
    
<p>Flipping a coin 5 times...</p>

<?php
$coin1 = mt_rand (1,2);
$coin2 = mt_rand (1,2);
$coin3 = mt_rand (1,2);
$coin4 = mt_rand (1,2);
$coin5 = mt_rand (1,2);
 
if ($coin1 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin2 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
        
if ($coin3 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin4 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}

if ($coin5 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
//flips coin 5 times   
?>
    
<p>Flipping a coin 7 times...</p>

<?php
$coin1 = mt_rand (1,2);
$coin2 = mt_rand (1,2);
$coin3 = mt_rand (1,2);
$coin4 = mt_rand (1,2);
$coin5 = mt_rand (1,2); 
$coin6 = mt_rand (1,2);
$coin7 = mt_rand (1,2);
    
if ($coin1 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin2 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
        
if ($coin3 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin4 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}

if ($coin5 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin6 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin7 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
//flips a coin 7 times
?>

<p>Flipping a coin 9 times...</p>
    
<?php
$coin1 = mt_rand (1,2);
$coin2 = mt_rand (1,2);
$coin3 = mt_rand (1,2);
$coin4 = mt_rand (1,2);
$coin5 = mt_rand (1,2); 
$coin6 = mt_rand (1,2);
$coin7 = mt_rand (1,2);
$coin8 = mt_rand (1,2);
$coin9 = mt_rand (1,2);
    
if ($coin1 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin2 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
        
if ($coin3 == 1) 
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin4 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}

if ($coin5 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin6 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin7 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
    
if ($coin8 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}

if ($coin9 == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
} 
else {
echo '<img src = "tails.png" alt = "tails"/>';
}
//flips coin 9 times
//Works, but there must be a more succinct way to do this...
?>
    
    
<h3>Part B</h3>
    
<p>Beginning the coin flipping...</p>
    
<?php
mt_rand (1,2);

for ($count = 1; $count >= 1; ++$count){

if (mt_rand (1,2) == 2)
{
echo '<img src = "tails.png" alt = "tails"/>';
}      
elseif (mt_rand (1,2) == 1)
{
echo '<img src = "heads.png" alt = "heads"/>';
}
else 
{
echo '<img src = "heads.png" alt = "heads"/>';
break;
}

}
 
echo "<br>" . "<br>" . "Flipped two heads in a row, in $count flips!";
//Had alot of trouble with this one-- sometimes it works, but it's probably a fluke
//It always ends on at least one heads, but it doesn't always break after two heads
?>

</body>
</html>