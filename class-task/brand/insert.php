<?php 

$connect = mysqli_connect("localhost","root","","brand");


if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['bsubmit'])){

    $_n = $_POST['name'];
    $_c = $_POST['contact'];

    $insert = "INSERT INTO brands(name,contact) VALUES('$_n','$_c')";

    if(mysqli_query($connect,$insert)){
        echo "Brand inserted successfully";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}



if(isset($_POST['psubmit'])){
    $_pn = $_POST['pname'];   
    $_pp = $_POST['pprice'];

    $secins ="INSERT INTO products(name,price) VALUES('$_pn','$_pp')";

    if(mysqli_query($connect,$secins)){
        header("location: insert.php");
        exit();
    } else {
        echo "Database not inserted: " . mysqli_error($connect);
    }
}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>


<h1>brand table</h1>

<form  method="post" >
    
    
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="contact">Contact:</label><br>
    <input type="text" id="contact" name="contact" required><br><br>
    
    <label for="file">Upload File:</label><br>
    <input type="file" id="file" name="file"><br><br>
    
    <input type="submit" value="Submit" name="bsubmit">

</form>


<br><br><br><hr>




<h1>product table</h1>


<form action="#" method="post" >
    
    <label for="name">Product Name:</label><br>
    <input type="text" id="pname" name="name" required><br><br>
    
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="pprice" step="0.01" required><br><br>
    
    
    
    <input type="submit" value="Submit" name="psubmit">

</form>


</body>
</html>