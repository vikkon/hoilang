<?php
$servername = "localhost";
$database = "hoilang";
$username = "myfpt";
$password = "hoilang2020";

// Create connection

function dd($data) {
      echo "<pre>";
      echo var_dump($data);
      echo "</pre>";
      die;
}

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

if(isset($_POST['data'])) {
      $data = unserialize($_POST['data']);
      dd($data);
      
      $sql = "INSERT INTO survey (token, data) VALUES ('Thom', 'Vial')";
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      return 1;
      die;
} else {
      return 0;
      die;
}
mysqli_close($conn);

?>
