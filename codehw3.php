<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>codehw3</title>
<style>
body {
     background-color: cadetblue;   
     }
    
 h1 {
    text-align: center; color: darkslategray; text-decoration: underline;text-decoration-style: dotted; text-decoration-color: lightcyan;   
    }
    
 h2 {
    color: lightcyan; text-decoration: underline; text-decoration-style: dotted;
    text-decoration-color: darkslategray;   
    }
    
 h3 {
    color: darkslategray; text-align: center; background-color: darkturquoise; margin-left: auto; margin-right: auto; width: 250px; height: 35px; border-radius: 30px;
    padding-bottom: 30px;
    }
    
h4 {
    color: darkslategray;   
    }
    
table{
    height: 250px; margin-left: auto; margin-right: auto; width: 950px;
    }
    
th{
    border: solid;border-color: darkturquoise; background-color: darkturquoise; text-align: center; color: darkslategray;
    }
    
tr:nth-child(odd){
    background-color: darkslategray;
    color: lightcyan;
    }
    
tr:nth-child(even){
    background-color: lightcyan;
    color: darkslategray;
    }    
</style>
</head>
<body>

<h1>Code Homework #3</h1>
    
<h2>Challenge 1: Book Lists</h2>
    
<br>
    
<?php

$booklist = array(
    array ("PHP and MySQL Web Development", "Luke Welling", "144", "Paperback", 31.63),
    array ("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett", "135","Paperback", 41.23),
    array ("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", "14", "Paperback", 40.88),
    array ("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", "251", "Paperback", 22.09),
    array ("Modern PHP: New Features and Good Practices", "Josh Lockhart", "7", "Paperback", 28.49),
    array ("Programming PHP", "Kevin Tatroe", "26", "Paperback", 28.96),
    );
    //booklist array

$booklist[0][0].$booklist[0][1].$booklist[0][2].$booklist[0][3].$booklist[0][4]. "<br>";
$booklist[1][0].$booklist[1][1].$booklist[1][2].$booklist[1][3].$booklist[1][4]. "<br>";
$booklist[2][0].$booklist[2][1].$booklist[2][2].$booklist[2][3].$booklist[2][4]. "<br>";
$booklist[3][0].$booklist[3][1].$booklist[3][2].$booklist[3][3].$booklist[3][4]. "<br>";
$booklist[4][0].$booklist[4][1].$booklist[4][2].$booklist[4][3].$booklist[4][4]. "<br>";
$booklist[5][0].$booklist[5][1].$booklist[5][2].$booklist[5][3].$booklist[5][4]. "<br>";
//Not sure if I had to do this ^^ but the slides said something about pointing to the indices in order to access elements, the loop still works even when I comment it out...
    
echo "<table>";
echo 
"<tr><th>Title</th><th>Author</th><th>Number of Pages</th><th>Book Type</th><th>Price</th></tr>";
for ($row = 0; $row < count($booklist); $row++) {
    echo "<tr>";
    for ($col = 0; $col < count($booklist[$row]); $col++) {
    echo "<td>" .$booklist[$row][$col]. "</td>";
  }
 echo "</tr>"; 
}
echo "</table>";
//loop that prints out the whole array in a table format


array_column($booklist, 4);
//isolates the book prices from the rest of the array
    
echo "<br>";

echo "<h3>";
echo "<br> Your total price is: $";
print (array_sum(array_column($booklist, 4)));
echo "</h3>";
//price of all the books

?>
  
<br>

<h2>Challenge 2: Coin Toss Continued</h2>
    
<?php
$headsinrow = 4;
echo "<h4>";
echo "<br> Looking for $headsinrow heads in a row... <br> <br>";
echo "</h4>";
    
function coinflip ($headsinrow) {

$numheads = 0;
$numofflips = 0;

while ($numheads <= $headsinrow){
$flip = mt_rand (0,1);
    if ($flip == 1){
    echo '<img src = "heads.png" alt = "heads"/>';
    ++$numheads;
    ++$numofflips;
    }
    if ($flip == 0){
    echo '<img src = "tails.png" alt = "tails"/>';
    $numheads = 0;
    ++$numofflips;
    }
    if ($numheads == $headsinrow){
    break;
    }
}
echo "<h4>";
echo "<br> Got $headsinrow heads in a row in $numofflips flips <br> <br>";
echo "</h4>";
}
//function that allows a variable amount of heads to be flipped in a row

coinflip ($headsinrow);
//calling function
?>

</body>
</html>