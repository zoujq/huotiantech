<?php
  $servername = "localhost";
  $username = "wwwuser";
  $password = "sfjkdwf";
  $dbname = "wwwmysql";
   




 
  function get_detials()
  {
      // 创建连接
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
       
      // 检测连接
      if ($conn->connect_error) {
          die("连接失败: " . $conn->connect_error);
      } 
      $sql = "SELECT * FROM `P_detial_table` WHERE `P_id` =1";
      $result =$conn->query($sql);

      if ($result->num_rows > 0) 
      {
          // 输出数据
          while($row = $result->fetch_assoc()) 
          {
              return "P_title: " . $row["P_title"];
          }
      } 

      return 0;
  }

?>

        