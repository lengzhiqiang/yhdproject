<?php
    include "./base.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn = mysqli_connect('localhost','root','root','user');
    $sql="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    if($data){
        $arr=array('code'=>1,'data'=>array('username'=>$username,'password'=>$password));

    }else{
        $arr = array('code'=>0,'msg'=>'用户名或密码错误');
    }


    echo json_encode($arr);


?>




