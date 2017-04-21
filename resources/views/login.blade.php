<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>東山高中女壘隊比賽/訓練 記錄/分析 系統</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">



            <div class="secure">Secure Login form</div>
            {!! Form::open(array('url'=>'account/login','method'=>'POST', 'id'=>'myform','name'=>'form1')) !!}
            {!! csrf_field() !!}
            <div class="control-group">
            <div class="controls">
                {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
                {!! Form::text('habit','',array('id'=>'','class'=>'form-control span6','placeholder' => 'habit')) !!}
                {!! Form::text('tall','',array('id'=>'','class'=>'form-control span6','placeholder' => 'tall')) !!}
                
            </div>
            </div>
            <div class="control-group">
            <div class="controls">
            {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
            </div>
            </div>
            {!! Form::button('Login', array('class'=>'send-btn')) !!}
            {!! Form::close() !!}

        </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<script type="text/javascript">

 $('.send-btn').click(function(){    
     var data = JSON.stringify( $(form1).serializeArray() ); //  <-----------  
  
    $.ajax({
      url: '/account/login',
      type: "post",
      data: {'email':$('input[name=email]').val(),'habit':$('input[name=habit]').val(),'tall':$('input[name=tall]').val(),'password':$('input[name=password]').val()},  // data, {'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()}
      success: function(data){
        //alert(data);
        console.log(data);
      }
    });      
  }); 

</script>

</body>
</html>
        