<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function masukdata($nama, $harga, $gambar){
    global 
    $sql = "INSERT INTO `menu` (`id`, `nama`, `harga`, `gambar`) VALUES (NULL, $nama, $harga, $gambar);";
    return $conn->query($sql) === TRUE;
}



if( $_POST["nama"] || $_POST["harga"] ||   $_POST["gambar"]) {
   
    
    masukdata(
        $_POST['name'],
        $_POST['harga'],
        $_POST['gambar']
    );
    

    header('Location: ' . $_SERVER['HTTP_REFERER']);

 }



?>