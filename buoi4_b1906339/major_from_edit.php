<!DOCTYPE HTML>
<html>  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id =  $_POST['id'];
$sql = "select * FROM major WHERE ID='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<body>
<?php print_r($row)?>
<form action="major_edit.php" method="post">
ID:<input type="text" name="id" value="<?php echo $row['id'];?>"><br>
Hoten: <input type="text" name="major_name" value="<?php echo $row['major_name'];?>"><br>

<input type="submit">
</form>

</body>
</html>
