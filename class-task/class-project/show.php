<?php

$connect = mysqli_connect("localhost", "root", "", "class-project");

if ($connect) {
    echo "success";
}


// for view 

$quri = "SELECT * FROM student_info";

$result = mysqli_query($connect, $quri);

// delet button 

if(isset($_GET['dle'])){
    $dlt=$_GET['dle'];
    
    $data_delet ="DELETE FROM  student_info WHERE id=$dlt";

    if(mysqli_query($connect, $data_delet)){
        header("location:show.php");
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show Data</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }

        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background: #fff;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #ff7a00;
            color: white;
        }

        tr:hover {
            background: #f1f1f1;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Student Data</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>action</th>
        </tr>





        <?php
        // Loop through data
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['Address']; ?></td>

                <td>
                    <span class="btn btn-danger">


                        <a href="show.php?dle=<?php echo $row['id']; ?>">
                            Delete
                        </a>

                    </span>
                
                    <span class="btn btn-danger">


                        <a href="edit.php?updt=<?php echo $row['id']; ?>">
                            Edit
                        </a>

                    </span>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>



    <br>
    <br>
    <br>
    <br>

    <a href="insert.php">INSERT DATA</a>

</body>

</html>