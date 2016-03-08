#!/usr/bin/php
<?php
/**
 * PHPでXMLの中身を主力するスクリプト
 */

$filename = $argv[1];//2つ目が標準入力

//ファイルチェック
if(is_null($filename) || $filename === NULL) {
  exit('実行引数にファイル名を入れて下さい。');
} else if (!file_exists($filename)) {
  exit('ファイルが存在しません。');
}

//ファイル読み込み
$xml_data = file_get_contents($filename);

$simple_xml = simplexml_load_string($xml_data);

//simplexmlを配列に変換する関数
$fun = function ($simplexml, $out=array()) use (&$fun) {
  foreach ( (array) $simplexml as $index => $node ) { 
   if ( is_object($node) || is_array($node) ) { 
      $out[$index] = $fun($node);
    } else {
      $out[$index] = $node;
    }   
  }   
  return $out;
};
$arr_xml = $fun($simple_xml);

//配列の中身をcsvで出力
$fun = function ($arrxml, $out=array()) use (&$fun) {
  $cnt = 0;
  foreach ( $arrxml as $index => $node ) {
    if($cnt > 0) { echo PHP_EOL; } 
    
    if ( is_object($node) || is_array($node) ) {
      echo $index; 
      $fun($node);
    } else {
      echo  $index . "," . $node  ;
    } 
    $cnt++; 
  }
};
$fun($arr_xml);

echo PHP_EOL;

exit();

