<?php
  $servername = "localhost";
  $username = "wwwuser";
  $password = "sfjkdwf";
  $dbname = "wwwmysql";
   




 
  function get_detials($P_id)
  {
    // 创建连接
    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
     
    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 


    $sql = "SELECT * FROM `P_detial_table` WHERE `P_id` =$P_id";
    $result =$conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // 输出数据
        while($row = $result->fetch_assoc()) 
        {
            return array("P_title"=>$row["P_title"],"P_gaiyao"=>$row["P_gaiyao"],"P_xiangqing"=>$row["P_xiangqing"],
              "P_canshu"=>$row["P_canshu"],"P_fanwei"=>$row["P_fanwei"]) ;
        }
    } 

    return 0;
  }

  function get_jiaju()
  {
    // 创建连接
    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
     
    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 


    $sql = "SELECT `P_title` FROM `P_detial_table` WHERE `P_class` ='智能家居方案' ORDER BY `P_order`";
    $result =$conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // 输出数据
        $ret=array();
        while($row = $result->fetch_assoc()) 
        {
            array_push($ret,$row["P_title"]);
        }
        return $ret;
    } 

    return 0;
  }

?>

        