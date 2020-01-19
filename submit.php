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
            $time = time();
            
            $overall = isset($data['overall']) ? $data['overall'] : '';
            $quality_store = isset($data['quality-store']) ? $data['quality-store'] : '';
            $quality_stage = isset($data['quality-stage']) ? $data['quality-stage'] : '';
            $space_stage = isset($data['space-stage']) ? $data['space-stage'] : '';
            $duration_program = isset($data['duration-program']) ? $data['duration-program'] : '';
            $quality_lunching = isset($data['quality-lunching']) ? $data['quality-lunching'] : '';
            $like_thing = isset($data['like_thing']) ? $data['like_thing'] : '';
            $channel_resource = isset($data['channel-resource']) ? $data['channel-resource'] : '';
            $channel_resource_other = isset($data['channel-resource-other']) ? $data['channel-resource-other'] : '';
            $improve_thing = isset($data['improve_thing']) ? $data['improve_thing'] : '';
            
      } else { 
            return 0;
            die;
      }
      
      $sql = "INSERT INTO survey (token, qualityStore, qualityStage, spaceStage, durationProgram, qualityLunching, likeThing, channelResource, channelResourceOther, improveThing, created_at) 
                        VALUES ($token, $quality_store, $quality_stage,  $space_stage,  $duration_program,  $quality_lunching,  $like_thing,  $channel_resource,  $channel_resource_other, $improve_thing, $time)";
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
