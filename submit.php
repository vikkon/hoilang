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
      $data = [];
      parse_str($_POST['data'], $data);
      
      if(isset($data['token']) && $data['token'] != '') {
            $token = $data['token'];
            unset($data['token']);
            $data = serialize($data);
            $time = time();
      } else { 
            return 0;
            die;
      }
      
      $sql = "INSERT INTO survey (token, data, created_at) VALUES ($token, $data, $time)";
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
