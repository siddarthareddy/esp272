<?php

function getCountArray(){
  if(isset($_COOKIE["C"])){
    $text=$_COOKIE["C"];
    $text=unserialize($text);
    return $text;
  }
  return array();
}

function addCount($name){
  $arr = getCountArray();

  if(!isset($arr[$name]))$arr[$name]=0;

  $arr[$name]++;

  setcookie("C",serialize($arr),time()+84600);
}

?>
