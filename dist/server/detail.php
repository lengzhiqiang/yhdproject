<?php
    include "./base.php";
    $xh=$_POST['xh'];
    $id=$_POST['id'];
    $numz=$_POST['numz'];
    $hejiz=$_POST['hejiz'];
    $conn = mysqli_connect('localhost','root','root','user');
    $sql="SELECT * FROM `product` WHERE `id`='$id' AND `xh`='$xh'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    if($data){
        $arr=array('code'=>1,'datas'=>array('xinghaoz'=>'CGM15-D100-UX','lingjianming'=>'轻便型脚轮','numz'=>$numz,'hejiz'=>$hejiz,'danjiaz'=>'123.00','baojiatime'=>'2020/8/27'));

    }else{
        $arr = array('code'=>0,'msg'=>'没有找到该商品');
    }


    echo json_encode($arr);


?>