# This is Hiyoko Lab.

## 更新情報
 * 2016/3/8 新規作成
  
## XMLをパースするすくりぷと

 * [XMLをパースするスクリプトサンプル](https://github.com/tikemin/sandbox/blob/master/xmlparse.php)
 * [XMLのデータ](https://github.com/tikemin/sandbox/blob/master/xmldata.xml)

## 実行環境
 * php 5.4.30
 * Mac OS X 10.9.5
 * zsh

## 使い方
 以下に、本スクリプトの利用手順を示す。

>  `※事前にスクリプトをリポジトリよりチェックアウトすること。`

#### 実行権限付与

```
 chmod +x xmlparse.php
```
> Tips: スクリプトの実行権限を付与する。必要に応じてスクリプト内のphpの実行パスを`/usr/bin/php`から変更する。

#### 実行

```
 ./xmlparse.php xmldata.xml
``` 
> Tips: 実際に解析する際は実行引数に、解析対象のXMLファイルのファイル名を渡す。

#### 実行結果
```
 datasetdata1,value1
 data2,value2
 data3,value3
 data4subdata1,v1
 subdata2,v2
 subdata3subsubdata1,vv1
 subsubdata2,vv2
```


 
