# This is sandbox page!

## XMLをパースするスクリプト

 * [XMLをパースするスクリプトサンプル](https://github.com/tikemin/sandbox/blob/master/xmlparse.php)
 * [XMLのデータ](https://github.com/tikemin/sandbox/blob/master/xmldata.xml)


## 使い方
 以下に、本スクリプトの利用手順を示す。¥¥
 実際に解析する際は[XMLデータ]を対象のファイルを利用する。¥¥
 ```事前にスクリプトをチェック合うとする事```
#### 実行権限付与

```
 chmod +x xmlparse.php
```
#### 実行
```
 ./xmlparse.php xmldata.xml
``` 
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


 
