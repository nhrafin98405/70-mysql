<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "batch-70");


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $conn->query("call nhr_info('$name','$address','$email','$contact')");
}
$manufac = $db->query("select * form manufacturer");
while (list($mid, $_mname))

?>
<!-- BEGIN
INSERT INTO users(name,address,email,contact)values(n,a,e,c);
END -->

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<h2>User Form</h2>

<form method="POST" action="">
    Name: <br>
    <input type="text" name="name" required><br><br>

    Address: <br>
    <textarea name="address" required></textarea><br><br>

    Email: <br>
    <input type="email" name="email" required><br><br>

    Contact: <br>
    <input type="text" name="contact" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<table> 



<?php 

$product = $conn->query(" select * from nhr_view");
while(list($n,$a,$e)=$product->fetch_row()){

echo "<tr>

            <td>$n</td>
            <td>$a</td>
            <td>$e</td>
           

            </tr>";
}




?>
</table>

</body>
</html>