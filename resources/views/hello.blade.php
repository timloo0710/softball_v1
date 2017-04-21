<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row col-lg-5">
            <h2>測試get ajax從 server 端抓資料</h2>
            <button type='button' class="btn btn-warning" id="getRequest" >ajax get</button>
        </div>
        <div class="row col-lg-5">
            <h2>註冊表單簡單二欄位</h2>
            <form id="myform" action="#">
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">盃賽名稱</label>
                    <div class="col-sm-6">
                        <input type="text" id="cupname" class="form-control" placeholder="盃賽名稱" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="place" class="col-sm-3 control-label">比賽場地</label>
                    <div class="col-sm-6">
                        <input type="text" id="place" class="form-control" placeholder="比賽場地" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="creator" class="col-sm-3 control-label">主辦單位</label>
                    <div class="col-sm-6">
                        <input type="text" id="creator" class="form-control" placeholder="主辦單位" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="junior" class="col-sm-3 control-label">級別</label>
                    <div class="col-sm-6">
                        <input type="text" id="junior" class="form-control" placeholder="高(國)中" >
                    </div>
                </div>

                <input type="submit" value="新增盃賽ajax" class="btn btn-info">

            </form>
        </div>

    </div>
    <div id="getRequestData" >    </div>
    <div id="postRequestData" >    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#getRequest').click(function(){
            //alert($(this).text());
            $.get('getRequest',function(data){
               // console.log(data);
               $('#getRequestData').append(data);
            });
        });

        $('#myform').submit(function(){
            var cname=$('#cupname').val();
            var place=$('#place').val();
            var creator=$('#creator').val();
            var junior=$('#junior').val();
            
            $.post('cups/store',{cupname:cname,place:place,creator:creator,junior:junior},function(data){
                console.log(data);
                $('#postRequestData').html(data);
            })
        });
    });
</script>
</body>
</html>
