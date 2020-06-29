<?php
  $servername = "localhost";
  $username = "wwwuser";
  $password = "sfjkdwf";
  $dbname = "wwwmysql";
   

  // 创建连接
  $conn = new mysqli($servername, $username, $password, $dbname);
   
  // 检测连接
  if ($conn->connect_error) {
      die("连接失败: " . $conn->connect_error);
  } 


 
  function get_detials()
  {
     $sql = "SELECT * FROM `P_detial_table` WHERE `P_id` =1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) 
      {
          // 输出数据
          while($row = $result->fetch_assoc()) 
          {
              echo "P_title: " . $row["P_title"];
          }
      } 
    
  }

?>

        