<?php

function getQ(){
    if(isset($_COOKIE["Q"])){
      $text=$_COOKIE["Q"];
      $text=unserialize($text);
      return $text;
    }
    return array();
}

function pushQ($name){
    $arr=getQ();

    if(in_array($name,$arr)){
      unset($arr[array_search($name,$arr)]);
      $arr=array_values($arr);
    }

    $arr[]=$name;

    if(count($arr)==6){
      unset($arr[0]);
      $arr=array_values($arr);
    }
    setcookie("Q",serialize($arr),time()+84600);
}

?>
