<?php
$conn = new mysqli("localhost", "root", password: "", "product_store");

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $product = $_POST['product'];
    $conn->query("call brand ('$name', '$product')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h2>Brand Table</h2>
    <form action="#" method="post">
        <label for="">Name</label><br>
         <input type="text" name="name" required><br>
         <label for="">Product</label><br>
         <input type="text" name="product" required><br>

        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>