<?php  
function request_by_curl($remote_server, $post_string) {  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array ('Content-Type: application/json;charset=utf-8'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    // 线下环境不用开启curl证书验证, 未调通情况可尝试添加该代码
    // curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    // curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $data = curl_exec($ch);
    curl_close($ch);                
    return $data;  
}  

$name=$_POST['name'];
$tel=$_POST['tel'];
$message_0=$_POST['message'];

$webhook = "https://oapi.dingtalk.com/robot/send?access_token=0487c10f11df7190d3c22f5680ff872f61b4c8adba96aad486384a60efd60b9e";
$message='火天官网客户留言，客户名：'.$name.',电话：'.$tel.',留言内容：'.$message_0;
$data = array ('msgtype' => 'text','text' => array ('content' => $message));
$data_string = json_encode($data);

$result = request_by_curl($webhook, $data_string);  
echo '<html><body>留言提交成功！ <a href="./contact.html">返回</a></body></html>"';
?>