<html>
<body>
<?php
      $servername = "localhost";
      $database = "hoilang";
      $username = "myfpt";
      $password = "hoilang2020";

      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection

      if (!$conn) {
            die("Eror 404");
      }

      $sql_select = "SELECT * FROM survey";
      
      echo '<table> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">token</font> </td> 
          <td> <font face="Arial">overall</font> </td> 
          <td> <font face="Arial">qualityStore</font> </td> 
          <td> <font face="Arial">qualityStage</font> </td> 
          <td> <font face="Arial">spaceStage</font> </td> 
          <td> <font face="Arial">durationProgram</font> </td> 
          <td> <font face="Arial">qualityLunching</font> </td> 
          <td> <font face="Arial">qualityBtc</font> </td> 
          <td> <font face="Arial">likeThing</font> </td> 
          <td> <font face="Arial">channelResourceOther</font> </td> 
          <td> <font face="Arial">improveThing</font> </td> 
          <td> <font face="Arial">created_at</font> </td> 
      </tr>';
      
      $score = [];
      $score[4] = 'Xuất sắc';
      $score[3] = 'Tốt';
      $score[2] = 'Khá';
      $score[1] = 'Trung Bình';
      $score[0] = 'Kém';
      
      if ($result = $conn->query($sql_select)) {
        while ($row = $result->fetch_assoc()) {
          $field1name = $row["id"];
          $field2name = $row["token"];
          $field3name = $score[$row["overall"]];
          $field4name = $score[$row["qualityStore"]];
          $field5name = $score[$row["qualityStage"]]; 
          $field6name = $score[$row["spaceStage"]]; 
          $field7name = $score[$row["durationProgram"]]; 
          $field8name = $score[$row["qualityLunching"]]; 
          $field9name = $score[$row["qualityBtc"]]; 
          $field10name = $row["likeThing"]; 
          $field11name = $row["channelResourceOther"]; 
          $field12name = $row["improveThing"]; 
          $field13name = $row["created_at"]; 

          echo '<tr> 
                    <td>'.$field1name.'</td> 
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td> 
                    <td>'.$field4name.'</td> 
                    <td>'.$field5name.'</td> 
                    <td>'.$field6name.'</td> 
                    <td>'.$field7name.'</td> 
                    <td>'.$field8name.'</td> 
                    <td>'.$field9name.'</td> 
                    <td>'.$field10name.'</td> 
                    <td>'.$field11name.'</td> 
                    <td>'.$field12name.'</td> 
                    <td>'.date('m/d/Y H:i:s', $field13name).'</td> 
                </tr>';
        }
        $result->free();
      }
  ?>
  </body>
  </html>
