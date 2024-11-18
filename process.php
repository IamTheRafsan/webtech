<?php

//Full Name
if(isset($_POST['fullName'])){
    $StudentName = $_POST['fullName'];
    
}
else{echo"NO Result";}

//Id
if(isset($_POST['id'])){
    $StudentId = $_POST['id'];
    
}
else{echo"NO Result";}

//E-mail
if(isset($_POST['email'])){
    $StudentEmail = $_POST['email'];
    
}
else{echo"NO Result";}

//Choosen Book
if(isset($_POST['books'])){
    $BookName = $_POST['books'];
    
}
else{echo"NO Result";}

//Token
if(isset($_POST['token'])){
    $Token = $_POST['token'];
    
}
else{echo"NO Result";}

//Borrow Date
if(isset($_POST['borrowDate'])){
    $BorrowDate = $_POST['borrowDate'];
    
}
else{echo"NO Result";}

//Return Date
if(isset($_POST['returnDate'])){
    $ReturnDate = $_POST['returnDate'];
}
else{echo"NO Result";}

echo "<div style='width: 400px; margin: 0 auto; padding:50px; border:1px solid #333; font-family: Arial, sans-serif;'>";
echo "<h2 style='text-align: center; font-size: 0.9em; color:#666;'> Thank you for borrowing the book</h2>";
echo "<hr style ='border: 1px solid #333;'><br>";
echo "<p>Full Name:  $StudentName</p>";
echo "<p>Student ID:  $StudentId</p>";
echo "<p>Student Email:  $StudentEmail</p>";
echo "<p>Book Name:  $BookName</p>";
echo "<p>Token No.:  $Token</p>";
echo "<p>Borrow Date:  $BorrowDate</p>";
echo "<p>Return Date:  $ReturnDate</p>";

echo "</div>";

?>