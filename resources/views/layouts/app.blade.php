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
    @if ( $style=== '1')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '2')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '3')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '4')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '5')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '6')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '7')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '8')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '9')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '10')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '11')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '12')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '13')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '14')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '15')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '16')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet">
    @elseif ( $style === '17')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet">
    @else
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
    @endif

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

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
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    東山高中女壘隊
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home/1') }}">比賽記錄</a></li>
                    <li><a href="{{ url('/home/2') }}">數據統計</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        <div class="form-group">
                            <div class="navbar-brand">
                                <select class="form-control" id="selectStyle" name="slStyle"  >
                                <option value='1'>一般</option>
                                <option value='2'>水藍</option>
                                <option value='3'>空明</option>
                                <option value='4'>亮黑</option>
                                <option value='5'>輕黑</option>
                                <option value='6'>淡定</option>
                                <option value='7'>報導</option>
                                <option value='8'>流明</option>
                                <option value='9'>紙張</option>
                                <option value='10'>能讀</option>
                                <option value='11'>暖意</option>
                                <option value='12'>色難</option>
                                <option value='13'>背灰</option>
                                <option value='14'>欣綠</option>
                                <option value='15'>空管</option>
                                <option value='16'>英雄</option>
                                <option value='17'>聯合</option>
                                <option value='18'>葉題</option>
                                </select>

                            </div>        
                        </div> 
                        
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@if ( $switch=== '1')
    @yield('cup')
    @yield('school')
    @yield('student')
    @yield('match')
    @yield('player')
    @yield('pitcher')
@else
    @yield('thisMatch')
    @yield('thisCup')
    @yield('thisYear')
    @yield('all')
@endif    

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<script type="text/javascript">

$(document).ready(function() {
        setCookie("cup_val", $('#select_cup').val(), 1);
        //alert(getCookie("cup_val"));
        $.ajax({
            type: "GET",
            url: "/schools/all?cup_id="+getCookie("cup_val"), 
            success:function(data) {
                // $('#save_message').html(data.message);
                console.log(data);
                        //  移除全部的項目
                $("#select_school option").remove();
                    for (var i in data) 
                    {
                        console.log(data[i].id + ",  " + data[i].name );
                        $("#select_school").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
                    }        
                } ,
                dataType: "json"
            });

        $.ajax({
            type: "GET",
            url: "/matches/all?cup_id="+getCookie("cup_val"), 
            success:function(data) {
                // $('#save_message').html(data.message);
                console.log(data);
                        //  移除全部的項目
                $("#select_match option").remove();
                    for (var i in data) 
                    {
                        console.log(data[i].id + ",  " + data[i].visit_name+ ",  " + data[i].host_name );
                        $("#select_match").append($("<option></option>").attr("value", data[i].id).text(data[i].visit_name+' VS '+data[i].host_name    ));                
                    }        
                } ,
                dataType: "json"
            });
            
        setCookie("school_val", $('#select_school').val(), 1);    
        if ( getCookie("school_val") == null){
            setCookie("school_val", 1, 1);    
        } 
        $.ajax({
            type: "GET",
            url: "/students/all?school_id="+getCookie("school_val"), 
            success:function(data) {
                fillStudent(data);
            } ,
                dataType: "json"
            });

       $(".edtLog").click(function(){ //[href~='pitcher']
             alert('edit log');    
             console.log($(this).data( "q-pid" )) ;
             console.log(getCookie("match_val"));
            });    
     
        
})

$(document).on('click', '.edtLog', function(){ 
      alert('edit log');  




});


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


// select  區   
//選 佈景風格
    $('#selectStyle').on('change', function() {
    //alert( this.value );
        window.location.replace("/style/"+this.value);  
    });
//選盃賽
    $('#select_cup').on('change', function() {
    //alert( this.value );
        setCookie("cup_val", this.value, 1);
        alert(getCookie("cup_val"));
        $.ajax({
            type: "GET",
            url: "/schools/all?cup_id="+getCookie("cup_val"), 
            success:function(data) {
                // $('#save_message').html(data.message);
                    console.log(data);
                        //  移除全部的項目
                    $("#select_school option").remove();
                    for (var i in data) 
                    {
                        console.log(data[i].id + ",  " + data[i].name );
                        $("#select_school").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
                    }        
                } ,
                dataType: "json"
            });
    });
//選學校
    $('#select_school').on('change blur', function() {
    //alert( this.value );
        setCookie("school_val", this.value, 1);
        //alert(getCookie("school_val"));
        $.ajax({
            type: "GET",
            url: "/students/all?school_id="+getCookie("school_val"), 
            success:function(data) {
                fillStudent(data);
                } ,
                dataType: "json"
            });
    });
//選對戰組合
    $('#select_match').on('change blur', function() {
    //alert( this.value );
      //  setCookie("school_val", this.value, 1);
        //alert(getCookie("school_val"));
        $.ajax({
            type: "GET",
            url: "/players/all?mid="+getCookie("match_val"), 
            success:function(data) {
                fillPlayer(data);
                } ,
                dataType: "json"
            });

        $.ajax({
            type: "GET",
            url: "/pitchers/all?mid="+getCookie("match_val"), 
            success:function(data) {
                fillLog(data);
                } ,
                dataType: "json"
            });
    });

    
//選先攻後攻
    $('#select_hv').on('change', function() {
        setCookie("match_val", $('#select_match').val(), 1); 
        console.log(getCookie("match_val"));
        $.ajax({
            type: "GET",
            url: "/students/hv?match_id="+getCookie("match_val")+"&hv="+this.value, 
            success:function(data) {
            console.log(data);
            $("#select_hv_names option").remove();
            for (var i in data) 
                {
                console.log(data[i].id + ",  " + data[i].name );
                $("#select_hv_names").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
                }        
            } ,
            dataType: "json"
        });
    });
//選 上下半局 U是上半，找V 客隊，先攻隊，打者 的
    $('#select_inning').on('change blur', function() {
        console.log(getCookie("match_val"));
        var inn = this.value;
        $.ajax({
            type: "GET",
            url: "/players/all?mid="+getCookie("match_val"), //+"&hv="+this.value
            success:function(data) {
                var attack_html;
                var defend_html;                
                    $("#select_attacker option").remove();
                    $("#select_defender option").remove();
                    $("#select_catcher option").remove();
                    $("#select_catcher").append($("<option></option>").attr("value", "X").text(" **無"));
                    $("#select_defense option").remove();
                    $("#select_defense").append($("<option></option>").attr("value", "X").text(" **無"));
                    $("#select_defense2 option").remove();
                    $("#select_defense2").append($("<option></option>").attr("value", "X").text(" **無"));
                if (inn.indexOf('U') >= 0){ //上半局
                    console.log("上半局 inn :  " + inn );
                    
                    for (var i in data) {
                        if (data[i].hv=='V' ) {
                            $("#select_attacker").append($("<option></option>").attr("value", data[i].id).text(data[i].hitorder+'  '+data[i].backno+'  **'+data[i].name));                
                        } else { //守備
                            if ((data[i].pos=='P') || (data[i].pos=='C')){
                                $("#select_defender").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                                $("#select_catcher").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                            } else {
                                $("#select_defense").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                                $("#select_defense2").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                            }
                        }
                    } 
                           
                } else { //下半局
                    console.log("下半局 inn :  " + inn );
                    
                    for (var i in data) {
                        if (data[i].hv=='H' ) {
                            $("#select_attacker").append($("<option></option>").attr("value", data[i].id).text(data[i].hitorder+'  '+data[i].backno+'  **'+data[i].name));                
                        } else { //守備
                            if ((data[i].pos=='P') || (data[i].pos=='C')){
                                $("#select_defender").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                                $("#select_catcher").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                            } else {
                                $("#select_defense").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                                $("#select_defense2").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                            }
                        }
                    }
                            
                }
            } ,
            dataType: "json"
        });
    })
//------------------------------------------------------------------------------------------------------------------    
//  新增區
//  新增盃賽
 $('#addCup').click(function(){    
    var cname=$('#cupname').val();
    var place=$('#place').val();
    var creator=$('#creator').val();
    var junior=$('#junior').val();
        /*
            $.post('/cups/store',{cupname:cname,place:place,creator:creator,junior:junior},function(data){
                console.log(data);
                var json = data;
                console.log(json);
                //data.forEach(function(obj) { console.log(obj.id); });
                console.log(json.length);
                for(var i = 0; i < data.length; i++) {
                    var obj = data[i];

                    console.log(obj.id);
                // console.log(obj.cupname);
                }        
                //$('#postRequestData').html(data);

            })
        */
   $.ajax({
        type: "POST",
        url: "/cups/store", 
        data: {cupname:cname,place:place,creator:creator,junior:junior},//{'cupname':$('input[name=cupname]').val(),'place':$('input[name=place]').val(),'creator':$('input[name=creator]').val(),'junior':$('input[name=junior]').val(), '_token': $('input[name=_token]').val()},
        //contentType: "json",
        //processData: false,
        success:function(data) {
        // $('#save_message').html(data.message);
            console.log(data);
                //  移除全部的項目
                $("#select_cup option").remove();
            for (var i in data) 
            {
                console.log(data[i].id + ",  " + data[i].cupname );
                $("#select_cup").append($("<option></option>").attr("value", data[i].id).text(data[i].cupname));                
            }        
        } ,
        dataType: "json"
    });
    
 }); 
//新增學校
 $('#addSchool').click(function(){    
    var sname=$('#schoolname').val();
    var cid = getCookie("cup_val");
  $.ajax({
        type: "POST",
        url: "/schools/store", 
        data: {schoolname:sname,cup_id:cid},//{'cupname':$('input[name=cupname]').val(),'place':$('input[name=place]').val(),'creator':$('input[name=creator]').val(),'junior':$('input[name=junior]').val(), '_token': $('input[name=_token]').val()},
        success:function(data) {
            console.log(data);
                //  移除全部的項目
            $("#select_school option").remove();
            for (var i in data) 
            {
                console.log(data[i].id + ",  " + data[i].name );
                $("#select_school").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
            } 
        } ,
        dataType: "json"
    });
 });    
//新增學生
$('#addStudent').click(function(){ 
    var sname=$('#studentname').val();
    $.ajax({
            type: "POST",
            url: "/students/store", 
            data: {studentname:sname,school_id:getCookie("school_val")},
            success:function(data) {
                fillStudent(data);
            } ,
            dataType: "json"
        });
    
 });    
 
//新增對戰
 $('#addMatch').click(function(){    
    var holded_at=$('#holded_at').val();
    var begin_time_set=$('#begin_time_set').val();
    var game_order=$('#game_order').val();
    var visit_name=$('#select_visit option:selected').text();
    var host_name=$('#select_host option:selected').text();
    
    var cid = getCookie("cup_val");
  $.ajax({
        type: "POST",
        url: "/matches/store", 
        data: {holded_at:holded_at,begin_time_set:begin_time_set,game_order:game_order,visit_name:visit_name,host_name:host_name,cid:cid},
        success:function(data) {
            console.log(data);
                //  移除全部的項目
            $("#select_match option").remove();
            for (var i in data) 
            {
                console.log(data[i].id + ",  " + data[i].visit_name+ ",  " + data[i].host_name );
                $("#select_match").append($("<option></option>").attr("value", data[i].id).text(data[i].visit_name+' VS '+data[i].host_name    ));                
            } 
        } ,
        dataType: "json"
    });
    
 });    

//新增選手
 $('#addPlayer').click(function(){    
    setCookie("match_val", $('#select_match').val(), 1); 
    var hv=$('#select_hv').val();
    var hitorder=$('#select_hitorder').val();
    var pos=$('#select_pos').val();
    var playername=$('#select_hv_names option:selected').text();
    var backno=$('#backno').val();
    
    var mid = getCookie("match_val");
    console.log(mid);
  $.ajax({
        type: "POST",
        url: "/players/store", 
        data: {hv:hv,hitorder:hitorder,pos:pos,playername:playername,backno:backno,mid:mid},
        success:function(data) {
            console.log(data);
             fillPlayer(data);
        } ,
        dataType: "json"
    });
    
 });    

//新增記錄
 $('#addLog').click(function(){    
    //setCookie("match_val", $('#select_match').val(), 1); 
    var inn=$('#select_inning').val();
    var defender=$('#select_defender option:selected').text();
         defender = defender.split("**")[1];
    var attacker=$('#select_attacker option:selected').text();
        attacker = attacker.split("**")[1];
    var catcher=$('#select_catcher option:selected').text();
         catcher = catcher.split("**")[1];
    var p_result=$('#select_p_result option:selected').text();
    var a_result=$('#select_a_result option:selected').text();
    var d_result=$('#select_d_result option:selected').text();
    var outs=$('#select_outs').val();
    var defense=$('#select_defense option:selected').text();
        defense = defense.split("**")[1];
    var defense2=$('#select_defense2 option:selected').text();
        defense2 = defense2.split("**")[1];
    var run=$('#select_run').val();
    
    var mid = getCookie("match_val");
    console.log(mid);
  $.ajax({
        type: "POST",
        url: "/pitchers/store", 
        data: {inn:inn,defender:defender,attacker:attacker,catcher:catcher,p_result:p_result,a_result:a_result,d_result:d_result,outs:outs,defense:defense,defense2:defense2,run:run,mid:mid},
        success:function(data) {
            console.log(data);
             fillLog(data);
        } ,
        dataType: "json"
    });
 });    

//填入賽事記錄 表格
function fillLog(data){
    console.log(data);
    var s_html="";
    //  移除全部的項目
    $("#clog").empty();
    s_html="<thead>  <tr>   <th>目前半局</th>   <th>投手</th>    <th>打者</th>  <th>內容</th> <th>出局數</th> <th>得/失分</th><th>動作</th> </tr>    </thead>    <tbody> "; 

    for (var i in data) 
    {
            var color="";
            //console.log(i%4);
            if (i%4==0)
                color="info";
            else if (i%4==1)
                color="success";
            else if (i%4==2)
                color="danger";
            else if (i%4==3)
                color="warning";
            s_html+=  '<tr class="'+color+'">';
            s_html+=  '    <td>'+data[i].inning_id+'</td>';
            s_html+=  '    <td>'+data[i].defender_id+'</td>';
            s_html+=  '    <td>'+data[i].attacker_id+'</td>';
            s_html+=  '    <td>'+data[i].p_result+'</td>';
            s_html+=  '    <td>'+data[i].outs+'</td>';
            s_html+=  '    <td>'+data[i].run+'</td>';
            s_html+=  '    <td><button type="button" data-q-pid="'+data[i].id+'" class="edtLog btn btn-warning btn-xs" id="edtLog_'+data[i].id+'" >編輯</button>';
           // s_html+=  '    <td><a href="/pitchers/'+data[i].id+'" data-q-pid="'+data[i].id+'" class="edtLog  btn btn-warning btn-xs" id="edtLog_'+data[i].id+'" >編輯</a>';
            s_html+=  '        <button type="button" data-d-pid="'+data[i].id+'"class="delLog  btn btn-success btn-xs" id="delLog_'+data[i].id+'" >刪除</button></td></tr>';
            //console.log(data[i].hitorder + ",  " + data[i].name );
    } 
    s_html+="</tbody> ";
    $("#clog").html(s_html) ;
}




//填入球員 表格
function fillPlayer(data){
    console.log(data);
    var s_html="";
    var host_html="";
    //  移除全部的項目
    $("#v_team").empty();
    $("#h_team").empty();
    s_html="<thead>  <tr>   <th>棒次</th>   <th>守備</th>    <th>背號</th>  <th>姓名</th> <th>操作</th> </tr>    </thead>    <tbody> "; 
    host_html="<thead>  <tr>   <th>棒次</th>   <th>守備</th>    <th>背號</th>  <th>姓名</th> <th>操作</th> </tr>    </thead>    <tbody> "; 

    for (var i in data) 
    {
        if (data[i].hv=='V')
        {
            var color="";
            console.log(i%4);
            if (i%4==0)
                color="info";
            else if (i%4==1)
                color="success";
            else if (i%4==2)
                color="danger";
            else if (i%4==3)
                color="warning";
            s_html+=  '<tr class="'+color+'">';
            s_html+=  '    <td>'+data[i].hitorder+'</td>';
            s_html+=  '    <td>'+data[i].pos+'</td>';
            s_html+=  '    <td>'+data[i].backno+'</td>';
            s_html+=  '    <td>'+data[i].name+'</td>';
            s_html+=  '    <td><button type="button" class="btn btn-warning btn-xs" >編輯</button>';
            s_html+=  '        <button type="button" class="btn btn-success btn-xs" >刪除</button></td></tr>';
            console.log(data[i].hitorder + ",  " + data[i].name );
        }
        else
        {
            var color="";
            console.log(i%4);
            if (i%4==0)
                color="info";
            else if (i%4==1)
                color="success";
            else if (i%4==2)
                color="danger";
            else if (i%4==3)
                color="warning";
            host_html+=  '<tr class="'+color+'">';
            host_html+=  '    <td>'+data[i].hitorder+'</td>';
            host_html+=  '    <td>'+data[i].pos+'</td>';
            host_html+=  '    <td>'+data[i].backno+'</td>';
            host_html+=  '    <td>'+data[i].name+'</td>';
            host_html+=  '    <td><button type="button" class="btn btn-warning btn-xs" >編輯</button>';
            host_html+=  '        <button type="button" class="btn btn-success btn-xs" >刪除</button></td></tr>';
            console.log(data[i].hitorder + ",  " + data[i].name );
        }
    } 
    s_html+="</tbody> ";
    host_html+="</tbody> ";
    console.log(s_html); 
    $("#v_team").html(s_html) ;
    $("#h_team").html(host_html) ;
}

//填入參賽學生表格
function fillStudent(data){
    console.log(data);
    var s_html="";
    //  移除全部的項目
    $("#studentsBySchool").empty();
    s_html="<thead>  <tr>   <th>#</th>   <th>球員姓名</th>    <th>動作</th>    </tr>    </thead>    <tbody> "; 

    for (var i in data) 
    {
        var color="";
        console.log(i%4);
        if (i%4==0)
            color="info";
        else if (i%4==1)
            color="success";
        else if (i%4==2)
            color="danger";
        else if (i%4==3)
            color="warning";
        s_html+=  '<tr class="'+color+'">';
        s_html+=  '    <td>'+i+'</td>';
        s_html+=  '    <td>'+data[i].name+'</td>';
        s_html+=  '    <td><button type="button" class="btn btn-warning btn-xs" >編輯</button>';
        s_html+=  '        <button type="button" class="btn btn-success btn-xs" >刪除</button></td></tr>';
        console.log(data[i].id + ",  " + data[i].name );
    } 
    s_html+="</tbody> ";
    console.log(s_html); 
    $("#studentsBySchool").html(s_html) ;
}
//開窗: 學生窗
$('#newStudent').click(function(){ 
    setCookie("school_val", $('#select_school').val());
    //alert(getCookie("school_val"));
    console.log(getCookie("school_val"));
 });    
//開窗: 對戰窗
$('#newMatch').click(function(){ 
   console.log(getCookie("cup_val"));
//        alert(getCookie("cup_val"));
    $.ajax({
        type: "GET",
        url: "/schools/all?cup_id="+getCookie("cup_val"), 
        success:function(data) {
            // $('#save_message').html(data.message);
                console.log(data);
                    //  移除全部的項目
                    $("#select_visit option").remove();
                    $("#select_host option").remove();
                for (var i in data) 
                {
                    console.log(data[i].id + ",  " + data[i].name );
                    $("#select_visit").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
                    $("#select_host").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
                }        
            } ,
            dataType: "json"
        });
 });    

$(".edtLog").click(function(){ //[href~='pitcher'] 
    console.log($(this).data( "q-pid" )) ;
    console.log(getCookie("match_val"));
 });    

$("[data-d-pid]").click(function(){ 
    console.log($(this).data( "d-pid" )) ;
    console.log(getCookie("match_val"));
 });    

/*
function onSubmit( form ){
  //var data = JSON.stringify( $(form).serializeArray() ); //  <-----------

  console.log( data );
  //alert(data);

});
  return false; //don't submit
}

*/

var data = {
    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
    ]
};

 var options= {
            scale: {
                reverse: true,
                ticks: {
                    beginAtZero: true
                }
            }
    };

//------------------------------------------------------------------
var ctx4 = document.getElementById("myChart4");
var myChart4 = new Chart(ctx4, {
  type: 'radar',
    data: data,
    options: options
});

//------------------------------------------------------------------
var ctx5 = document.getElementById("myChart5");
var myChart5 = new Chart(ctx5, {
  type: 'radar',
    data: data,
    options: options
});

//------------------------------------------------------------------
var ctx6 = document.getElementById("myChart6");
var myChart6 = new Chart(ctx6, {
  type: 'radar',
    data: data,
    options: options
});

</script>

</body>
</html>
