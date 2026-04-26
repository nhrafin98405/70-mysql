<?php
$connect = mysqli_connect("localhost", "root", "", "crud_project");



if (isset($_POST["btnsubmit"])) {
    $_n = $_POST["fname"];
    $_c = $_POST["fcontact"];

    $q = "INSERT INTO users(name,contact) VALUES ('$_n','$_c')";

    if (mysqli_query($connect, $q)) {
        header("Location: view.php");
        exit();
    } else {
        echo "Data is not inserted";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
       <div class="col">
           <form action="" method="post">
                    <fieldset>
                        <legend><h3>DATA INSERT</h3></legend>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="fname">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="phone" name="fcontact">
                        </div>
                        
                        <button type="submit" class="btn btn-info" name="btnsubmit">add data</button>
                        
                    </fieldset>
            </form>
         </div>
       </div>
</div>

</body>
</html>