# softball_v1
dong sang school softball team

為女兒球隊做的比賽記錄系統。

本站架在mocha 付費空間。

用subdomain 的方式來簡化網址。

larvel 5.3.X 實作後端。
簡單的樣板拼湊(blade), 把網頁切小一點。

***關掉了  CSRF Protection 
要打開的話，記得去 app/Http/Middleware/VerifyCsrfToken.php 設定 ***

後端laravel 的view主要是產生兩張網頁，之後由jquery透過ajax更新內容。

新增/修改/刪除 皆用標準的restful 型式。在前端呼叫，在後端實現。

簡單的一table操作，透過Eloquent ORM ，存取mysql db。回傳json(toJson())給前端，達成互動。

複雜一點的select 查詢，用 Running Raw SQL Queries ($users = DB::select('select * from users where active = ?', [1]);)，
再用php 內建的json_encode，轉json傳回給前端。 

網頁配色是用bootswatch。

統計圖表是引用 chart js 的radar 型態的圖。

後端group by 打者(or 投者)的各種結打擊結果的小計json數據，傳回前端。前端接收後，組成符合chart js 的radar 型態的 associate array 的 array，
讓chart js 畫出 radar圖。


![Image of Yaktocat](https://github.com/timloo0710/softball_v1/blob/master/sf1.jpg)

![Image of Yaktocat](https://github.com/timloo0710/softball_v1/blob/master/sf2.jpg)
![Image of Yaktocat](https://github.com/timloo0710/softball_v1/blob/master/sf3.jpg)
![Image of Yaktocat](https://github.com/timloo0710/softball_v1/blob/master/sf4.jpg)

![Image of Yaktocat](https://github.com/timloo0710/softball_v1/blob/master/mean.JPG)
