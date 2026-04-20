<?php


$connect = mysqli_connect("localhost", "root", "", "students");

// success mesage 

if ($connect) {
    $cmgs = "SUCCESS";
} else {
    $cmgs = "ERROR";
}

echo "<h2>DATABASE CONNECTION : " . $cmgs;


// take data from form 

if (isset($_POST["submit"])) {
    $ename = $_POST["name"];
    $eadd = $_POST["address"];
    $econtact = $_POST["contact_no"];

    $connect->query("call sdata_entry('$ename','$eadd','$econtact')");
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Entry</title>
</head>

<body>

    <h2>Enter Student Info</h2>

    <form method="POST">

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Address:</label><br>
        <input type="text" name="address" required><br><br>

        <label>Contact No:</label><br>
        <input type="text" name="contact_no" required><br><br>

        <button type="submit" name="submit">Submit</button>

    </form>

    <br>
    <br>
    <hr>
    <br>
    <br>
    <br>

    <table>
        <?php

            // creat view 
            // code CREATE OR REPLACE VIEW student_view AS
            // SELECT name, address, contact_no
            // FROM nhr_class;


            // show on browser 

            $dshow =$connect->query("SELECT * FROM student_view");
            while(list($i,$n,$a,$e)=$dshow->fetch_row()){

                echo "<tr>

                            <td>$i</td>
                            <td>$n</td>
                            <td>$a</td>
                            <td>$e</td>
                        

                            </tr>";
            }





        ?>
    </table>

</body>

</html>