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
      die("Error 404");
}
 

if(isset($_POST['data'])) {
      $data = [];
      parse_str($_POST['data'], $data);
      
      if(isset($data['token']) && $data['token'] != '') {
            $token = $data['token'];
            $sql_select = "SELECT id FROM survey where token=".$token;
            $result = $conn->query($sql_select);
            if ($result->num_rows > 0) {
                  return 3;
                  die;
            }
            
            unset($data['token']);
            $time = time();
            
            $overall = isset($data['overall']) ? $data['overall'] : 'null';
            $quality_store = isset($data['quality-store']) ? $data['quality-store'] : 'null';
            $quality_stage = isset($data['quality-stage']) ? $data['quality-stage'] : 'null';
            $space_stage = isset($data['space-stage']) ? $data['space-stage'] : 'null';
            $duration_program = isset($data['duration-program']) ? $data['duration-program'] : 'null';
            $quality_lunching = isset($data['quality-lunching']) ? $data['quality-lunching'] : 'null';
            $quality_btc = isset($data['quality-btc']) ? $data['quality-btc'] : 'null';
            $like_thing = isset($data['like_thing']) && $data['like_thing'] != '' ? $data['like_thing'] : 'null';
            $channel_resource = isset($data['channel-resource']) ? $data['channel-resource'] : 'null';
            $channel_resource_other = isset($data['channel-resource-other']) && $data['channel-resource-other'] != '' ? $data['channel-resource-other'] : 'null';
            $improve_thing = isset($data['improve_thing']) && $data['improve_thing'] != '' ? $data['improve_thing'] : 'null';
            
      } else { 
            return 0;
            die;
      }
      
      $sql = "INSERT INTO survey (token, overall, qualityStore, qualityStage, spaceStage, durationProgram, qualityLunching, qualityBtc, likeThing, channelResource, channelResourceOther, improveThing, created_at) 
                        VALUES ($token, $overall, $quality_store, $quality_stage,  $space_stage,  $duration_program,  $quality_lunching,  $quality_btc,  $like_thing,  $channel_resource,  $channel_resource_other, $improve_thing, $time)";
      if (mysqli_query($conn, $sql)) {
            return 1;
            die;
      } else {
            echo "Error 404".mysqli_error($conn);
            return 1;
            die;
      }
      return 1;
      die;
} else {
      return 0;
      die;
}
mysqli_close($conn);

?>
