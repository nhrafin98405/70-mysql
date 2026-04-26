<?php
$connect = mysqli_connect("localhost", "root", "", "crud_project");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data
$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query);


// delet ariya 

if (isset($_GET['dle'])) {
    $delid = $_GET['dle'];
    $sqlcon = "DELETE FROM users WHERE id=$delid";

    if (mysqli_query($connect, $sqlcon) == TRUE) {
        header('location:view.php');
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

                <a href="insert.php">
                    <button type="button" class="btn btn-success">insert data</button>
                </a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>contact</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // Loop through data
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <!-- <td>
                            <a href="view.php?dle=$id">
                                <button type="submit" class="btn btn-danger" name="btndlt">Delet</button>
                            </a>
                        </td> -->
                                <td>
                                    <span class="btn btn-danger">

                                <td>
                                    <a href="view.php?dle=<?php echo $row['id']; ?>"
                                        class="btn btn-danger text-white text-decoration-none"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </a>
                                </td>
                                </span>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>