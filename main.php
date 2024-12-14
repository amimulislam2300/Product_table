<?php
$conn =mysqli_connect("localhost", "root", "", "company");


if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $product = $_POST['product'];
    $conn->query("call brand_n('$name', '$product')");
}
if(isset($_POST['btnAdd'])){
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $id = $_POST['brand_id'];

    $conn->query("call product_add('$name','$price','$id')");
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
    <form action="" method="post">
        <label for="">Name</label><br>
         <input type="text" name="name" required><br>
         <label for="">Product</label><br>
         <input type="text" name="product" required><br>

        <button type="submit" name="btn">Submit</button>
    </form>
<br><br>
    <section>
    <h2>add product</h2>
    <form action="" method="post">
        <label for="">product Name</label><br>
         <input type="text" name="pname" required><br>
         <label for="">Price</label><br>
         <input type="text" name="price" required><br>
         <label for="">Manufacture:</label>
         <select name="brand_id" id="">
            <?php
            $brand = $conn->query("select * from brand");
            while(list($id, $name)= $brand->fetch_row()){
                echo "<option value = '$id'>$name</option>";
            }

            
            
            ?>
         </select>

        <button type="submit" name="btnAdd">Submit</button>
    </form>
    </section>
</body>
</html>