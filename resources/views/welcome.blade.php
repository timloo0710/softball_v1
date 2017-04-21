<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"
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
            <form id="register" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="firstname">姓</label>
                <input type="text" id="firstname" class="form-control" >

                <label for="lastname">名</label>
                <input type="text" id="lastname" class="form-control">
                
                <input type="submit" value="註冊ajax" class="btn btn-info">

            </form>
        </div>

    </div>
    <div id="getRequestData" >    </div>
    <div id="postRequestData" >    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup(
        {
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }
    );
    $(document).ready(function(){
        $('#getRequest').click(function(){
            //alert($(this).text());
            $.get('getRequest',function(data){
               // console.log(data);
               $('#getRequestData').append(data);
            });
        });

        $('#register').submit(function(){
            var fname=$('#firstname').val();
            var lname=$('#lastname').val();
            $.post('register',{firstname:fname,lastname:lname},function(data){
                console.log(data);
                $('#postRequestData').html(data);
            })
        });
    });
</script>
</body>
</html>
