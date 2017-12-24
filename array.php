<?php

//$data=10;
//$data = [];
//
//$data[0]=10;   //numeric array
//$data[1]=20;
//$data[2]=30;
//
//
//$data['name']='Ratul';  //associative array
//$data['city']='Dhaka';
//$data['country']='Bangladesh';

//$data = [
//    'name'    => 'Ratul',
//    'city'    => 'Dhaka',
//    'country' => 'Bangladesh',
//    'phone'   =>'01333333',
//    'gender'  =>'Male'
//
//];

//echo $data['country'];

//foreach ($data as $value) {   //all info will come
//    echo $value.'<br/>';
//}

//
//echo '<pre>';  //it will show index with value
////print_r($data);
//
//var_dump($data);

//
//$data=[];
//
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=80;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;
//
//foreach ($data as $value){
//    //echo $value[0]. ' '.$value[1].' '.$value[2].' '.'<br/>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//}

function demo($firstName,$lastName=null) {
//    $firstName='Rashedujjaman';
//    $lastName='Ratul';
    $fullName=$firstName.' '.$lastName;
//        echo $fullName;
    return $fullName;
}

echo '<br>........................<br/>';
echo demo('Sakib');

echo '<br>........................<br/>';
$res =demo('Arif', 'Khan');
echo 'Full Name is : ' .$res;

echo '<br>........................<br/>';
 $res = demo('Chulbull', 'Pandey');
 echo '<h1>' .$res. '</h1>';