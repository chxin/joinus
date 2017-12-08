<?php 
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function storemessage() {
        $name = $college = $class = $email = $phone = $message ="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name=$_POST['name'];  
            $college=$_POST['college'];  
            $class=$_POST['class'];  
            // $ID=$_POST['ID'];  
            $email=$_POST['email'];  
            $phone=$_POST['phone'];  
            $message=$_POST['message'];
        }
        
        $DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];  
        //设置时区  
        date_default_timezone_set('Asia/Shanghai');  
        //按指定格式输出日期  
        $date=date('Y-m-d H:i');  
        $out_put_string=$date."\t姓名：".$name ."\t学号：".$college ."\t班级：".$class."\t电话：". $phone."\t邮箱:". $email."\t信息:".$message."\n" ;
        @$fp=fopen("./jscss/.newMember",'a+');  
        flock($fp,LOCK_EX); 
        //文件流 
        if(!$fp){  
        echo "<div style='color:red;padding-top:30%;font-size:30px' align='center'></div>"; 
        exit;  
        } 
        //将数据写入到文件  
        fwrite($fp,$out_put_string,strlen($out_put_string));
        flock($fp,LOCK_UN);  
        //关闭文件流  
        fclose($fp);  
    }
    function goodbye1(){
        $url="http://nongchao.auto.hust.edu.cn"; 
        echo "<scrīpt LANGUAGE='Javascrīpt'>"; 
        echo "location.href='$url'"; 
        echo "</scrīpt>"; 
    }
    function goodbye2(){
        echo "<!DOCTYPE html><html><head><script>function load(){window.location.href='http://nongchao.auto.hust.edu.cn';}</script></head><body onload='load()'><h1>报名成功!</h1></body></html>";
    }
    sleep(2);
    storemessage();
    // sleep(2);
    goodbye2();
 ?>