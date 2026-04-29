<!-- <?php

$connect = mysqli_connect("localhost", "root", "", "class-project");

if(isset($_GET['id'])){
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM student_info WHERE id=$id");
$data = mysqli_fetch_assoc($result);
}

// update
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $update = "UPDATE student_info 
               SET name='$name', email='$email', contact='$contact', address='$address' 
               WHERE id=$id";

    if(mysqli_query($connect,$update)){
        header("location:show.php");
    } else {
        echo "Error: ";
    }
}

?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>"><br>
    <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
    <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    <input type="text" name="contact" value="<?php echo $data['contact']; ?>"><br>
    <textarea name="address"><?php echo $data['Address']; ?></textarea><br>

    <button name="update">Update</button>
</form> -->



<?php

$connect = mysqli_connect("localhost", "root", "", "class-project");

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

    $result = mysqli_query($connect, "SELECT * FROM student_info WHERE id=$id");
    $data = mysqli_fetch_assoc($result);
}

// update
if(isset($_POST['update'])){

    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $update = "UPDATE student_info 
               SET name='$name', email='$email', contact='$contact', address='$address' 
               WHERE id=$id";

    if(mysqli_query($connect,$update)){
        header("location:show.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}

?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>"><br>

    <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
    <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    <input type="text" name="contact" value="<?php echo $data['contact']; ?>"><br>

    <textarea name="address"><?php echo $data['address']; ?></textarea><br>

    <button name="update">Update</button>
</form>