<!--
<?php
/**
 * Created by PhpStorm.
 * User: zengzehao
 * Date: 16-11-7
 * Time: 下午10:16
 */
$servername = "localhost";
$username = "root";
$password = "root";
//Create connection
$conn = new mysqli($servername, $username, $password);

//Check conection
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo "Connected successfully";
?>
-->
<?php
$servername = "localhost";
$username = "root";
$password = "zzh1996512zzh";
$dbname = "myblog";

// Create connection
mysqli_query("SET character_set_results=utf8", $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
/**
$sql = "insert into catalog (id,name) values ('4','娱乐')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

?>
