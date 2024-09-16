<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body  style="margin: 50px">
    <div class="container">

        <img src="student_management.jfif" alt="Student Management System" class="logo">
        <h1>Student Management System</h1>

        <h2>Add Student</h2>
        <form action="process-form.php" method="post">
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" required><br><br>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>
            <label for="address">Address:</label>
            <input type="text" name="address"   
 required><br><br>
            <label for="diploma_id">diploma_id</label>
 ID:</label>
            <input type="text" name="diploma_id" required><br><br>
            <input type="submit" value="Add Student">
        </form>

        <h2>View Students</h2>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Diploma ID</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php



$host = "localhost";
$dbname ="test1";
$username = "root";
$password = "";

$connection = new mysqli($host, $username, $password, $dbname);

if($connection->connect_error) {
    die("Connection faild: " . $connection->connect_error);
}

$sql ="SELECT * FROM test1";
$result =$connection->query($sql);

if (!$result){
    die("Invalid query : " .$conn->error);
}

while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["student_id"] . "</td>
    <td>" . $row["name"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["diploma_id"] . "</td>
    <td>
        <a class='btn btn-primary btn-sm' href='update.php?id=?$row[id]'>Update</a>
        <a class='btn btn-primary btn-sm' href='delete.php?id=?$row[id]'>Delete</a>
    
    
    </td>
    </tr> ";

}
  ?>
        <tbody>



        </tbody>
        </table>
    </div>
</body>
</html>