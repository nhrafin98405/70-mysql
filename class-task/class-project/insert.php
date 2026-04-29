<?php

$connect =mysqli_connect("localhost" , "root" ,"" ,"class-project");

// connect 


if($connect){
    echo "success";
}


// data insert 

if(isset($_POST['submit'])){

    $_n = $_POST['name'];
    $_e = $_POST['email'];
    $_c = $_POST['contact'];
    $_a = $_POST['address'];


    $insrt ="INSERT INTO student_info (name,email,contact,address) values('$_n','$_e','$_c','$_a')";

    if(mysqli_query($connect,$insrt)){
        header("location:show.php");
        exit();
    }else{
        echo "Database is not insert";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .form-container {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #ff7a00;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #e66a00;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Contact Form</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="tel" name="contact" placeholder="Enter your contact number" required>
        <textarea name="address" placeholder="Enter your address" rows="3" required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>