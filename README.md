# This is sandbox page!

## XMLをパースするスクリプト

 * [XMLをパースするスクリプトサンプル](https://github.com/tikemin/sandbox/blob/master/xmlparse.php)
 * [XMLのデータ](https://github.com/tikemin/sandbox/blob/master/xmldata.xml)


## 使い方
 githubからsandboxリポジトリをチェックアウトする。その後以下の手順を実行する。
 また、実際に解析する際は[XMLデータ]を対象のファイルを利用する。
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


 
