# POST AND GET
## 資料傳遞
### post
* 傳送的值由POST請求HTTP發送，且POST的請求不會被Cache紀錄、POST的請求對資料長度沒有限制，因此POST比GET更安全，所以較適合用來傳送隱密性較高的資料
* 透過$_POST接收
### get
* 傳送的值由GET請求URL發送，在網址列會看到"http://www.xxx.com/test/index.php?test1=value1&test2=value2"
使用GET傳遞並不適合傳送些隱密性較高的資料，而GET的請求會被Cache紀錄、GET的請求受限於 QueryString 長度限制(依瀏覽器規定)，因此GET的使用時機應為檢視資料時使用
* 透過$_GET接收

### request
* 不管使用post還是get，都可以透過 $_REQUEST 做接收
