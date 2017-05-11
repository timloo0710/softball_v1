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
    <script src="https://cdn.rawgit.com/konvajs/konva/1.6.2/konva.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<script type="text/javascript">

function fillSelSchoolByCup2(){
   console.log(getCookie("cup_val"));
//        alert(getCookie("cup_val"));
    $.ajax({
        type: "GET",
        url: "/schools/byCup?cup_id="+getCookie("cup_val"), 
        success:function(data) {
                updateSelSchool(data);
                console.log(data);
                    //  移除全部的項目
                    $("#select_visit option").remove();
                    $("#select_host option").remove();
                for (var i in data) 
                {
                    console.log(data[i].id + ",  " + data[i].name );
                    $("#select_visit").append($("<option></option>").attr("value", data[i].name).text(data[i].name));                
                    $("#select_host").append($("<option></option>").attr("value", data[i].name).text(data[i].name));                
                }        
            } ,
            dataType: "json"
        });

} 

function fillSelSchoolByCup(){
   console.log(getCookie("cup_val"));
//        alert(getCookie("cup_val"));
    $.ajax({
        type: "GET",
        url: "/schools/byCup?cup_id="+getCookie("cup_val"),  // byCup
        success:function(data) {
                console.log(data);
                updateSelSchool(data);
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
} 

$(document).ready(function() {
        setCookie("cup_val", $('#select_cup').val(), 1);
        //alert(getCookie("cup_val"));
        fillSelSchoolByCup2();
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
                //統計用 
                $("#select_match_total option").remove();
                    for (var i in data) 
                    {
                        console.log(data[i].id + ",  " + data[i].visit_name+ ",  " + data[i].host_name );
                        $("#select_match_total").append($("<option></option>").attr("value", data[i].id).text(data[i].visit_name+' VS '+data[i].host_name    ));                
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
})

//單筆維護
$(document).on('click', '.edtMaster', function(){ 
    //判斷型別，xx決定開那一個圈
    console.log($(this).data( "type" )) ;
    console.log($(this).data( "id" )) ;
    
    console.log($('#select_cup').val()) ;
    //抓資料，填入form
    if ($(this).data("type")=='cup' ){
        var cid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_cup').val();
        $.ajax({
            type: "GET",
            url: "/cups/"+cid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                console.log(data['id'] +'---------'+data['cupname'] );
                //data[i].id + ",  " + data[i].name 
                $('#cupname').val(data['cupname']);
                $('#place').val(data['place']);
                $('#creator').val(data['creator']);
                $('#junior').val(data['junior']);
                $('#cid').val(data['id']);
            } ,
            dataType: "json"
            });
    }else if ($(this).data("type")=='school' ){
        var sid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_school').val();
        $.ajax({
            type: "GET",
            url: "/schools/"+sid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                console.log(data['id'] +'---------'+data['name'] );
                //data[i].id + ",  " + data[i].name 
                $('#schoolname').val(data['name']);
                $('#sid').val(data['id']);
            } ,
            dataType: "json"
            });
    } else {
        var mid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_match').val();
        console.log("match edited");
        $.ajax({
            type: "GET",
            url: "/matches/"+mid+"/edit",  //$(this).data( "id" )
            success:function(data) {
//                console.log(data);
                //fillSelSchoolByCup2();
                //data[i].id + ",  " + data[i].name 
                console.log(data['id'] +'---------'+data['visit_name'] );
                console.log(data['id'] +'---------'+data['host_name'] );
                $('#holded_at').val(data['holded_at']);
                $('#begin_time_set').val(data['begin_time_set']);
                $('#game_order').val(data['game_order']);
                //$("#select_visit select").val(data['visit_name']);
                $("#select_visit").val(data['visit_name']);
                //$("#select_host select").val(data['host_name']);
                $("#select_host").val(data['host_name']);
                $('#mid').val(data['mid']);
            } ,
            dataType: "json"
            });

    }
    //**開窗

});

//單筆刪除
$(document).on('click', '.delMaster', function(){ 
    if ($(this).data("type")=='cup' ){
        var cid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_cup').val();
        $.ajax({
            type: "DELETE",
            url: "/cups/"+cid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                console.log(data['id'] +'---------'+data['cupname'] );
                updateSelCup(data);
            } ,
            dataType: "json"
            });
    }else if ($(this).data("type")=='school' ){
        var sid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_school').val();
        $.ajax({
            type: "DELETE",
            url: "/schools/"+sid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                console.log(data['id'] +'---------'+data['cupname'] );
                updateSelSchool(data);
            } ,
            dataType: "json"
            });
    } else {
        var mid= $(this).data( "id" )?$(this).data( "id" ) :$('#select_match').val();
        $.ajax({
            type: "DELETE",
            url: "/matches/"+mid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                console.log(data['id'] +'---------'+data['cupname'] );
                updateSelMatch(data);
            } ,
            dataType: "json"
            });
    }
});


//多筆維護
$(document).on('click', '.edtDetail', function(){ 
    //判斷型別，決定開那一個圈
    if ($(this).data("type")=='log' ){
        var lid= $(this).data( "id" );// ?$(this).data( "id" ) :$('#select_cup').val();
        var inn= $(this).data( "inning" );
        console.log(lid);
        $.ajax({
            type: "GET",
            url: "/pitchers/"+lid,  //$(this).data( "id" )
            success:function(data) {
                console.log(data);
                $('#inning_id').val(data['inning_id']);
                $('#defender_id').val(data['defender_id']);
                $('#attacker_id').val(data['attacker_id']);
                $("#catcher").val(data['catcher']);
                $("#p_result").val(data['p_result']);
                $("#a_result").val(data['a_result']);
                $("#d_result").val(data['d_result']);
                $("#outs").val(data['outs']);
                $("#defense").val(data['defense']);
                $("#defense2").val(data['defense2']);
                $("#run").val(data['run']);
                $('#lid').val(data['id']);
            } ,
            dataType: "json"
            });
    }    //抓資料，填入form

    //開窗

    //key值不要秀出來，那些值不秀呢?設唯讀，還是秀
    //存檔，寫入



});


$(document).on('click', '.delDetail', function(){ 
      alert('edit log');  
//判斷型別，
//走不同的url
//類似

//不想刪，有機會反悔
//確認，就直接刪掉



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
        console.log(getCookie("cup_val"));
        $('#eBtnCup').data('id',this.value);        
        $('#dBtnCup').data('id',this.value);        
    //更新 id 屬性，給edit/delete 用

    fillSelSchoolByCup2();
    });
//選學校
    $('#select_school').on('change blur', function() {
    //alert( this.value );
        setCookie("school_val", this.value, 1);
        $('#eBtnSchool').data('id',this.value);        
        $('#dBtnSchool').data('id',this.value);        
        //alert(getCookie("school_val"));
    //更新 id 屬性，給edit/delete 用
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
        setCookie("match_val", this.value, 1);
        //更新 id 屬性，給edit/delete 用
        $('#eBtnMatch').data('id',this.value);        
        $('#dBtnMatch').data('id',this.value);        

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





function refreshHV(data){
    console.log(data);
    $("#select_hv_names option").remove();
    for (var i in data) 
        {
        console.log(data[i].id + ",  " + data[i].name );
        $("#select_hv_names").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
        }        

}

$('#btnRefreshPlayer').click(function() {
    $.ajax({
    type: "GET",
    url: "/students/hv?match_id="+$('#select_match').val()+"&hv="+$('#select_hv').val(), 
    success:function(data) {
        refreshHV(data);
    } ,
    dataType: "json"
    });
    
});


//選先攻後攻
    $('#select_hv').on('change blur', function() {
        setCookie("match_val", $('#select_match').val(), 1); 
        console.log(getCookie("match_val"));
        $.ajax({
            type: "GET",
            url: "/students/hv?match_id="+getCookie("match_val")+"&hv="+this.value, 
            success:function(data) {
                refreshHV(data);
            } ,
            dataType: "json"
        });
    });


$('#btnRefreshInn').click(function() {
        $.ajax({
        type: "GET",
        url: "/players/all?mid="+getCookie("match_val"), //+"&hv="+this.value
        success:function(data) {
            refreshInn(data);                
        } ,
        dataType: "json"
    });
});

function refreshInn(data){
    var inn = $('#select_inning').val();
    var attack_html;
    var defend_html;                
        $("#select_attacker option").remove();
        $("#select_defender option").remove();
        $("#select_defense option").remove();
        $("#select_defense").append($("<option></option>").attr("value", "X").text(" **無"));
        $("#select_defense2 option").remove();
        $("#select_defense2").append($("<option></option>").attr("value", "X").text(" **無"));
        $("#select_defense3 option").remove();
        $("#select_defense3").append($("<option></option>").attr("value", "X").text(" **無"));
    if (inn.indexOf('U') >= 0){ //上半局
        console.log("上半局 inn :  " + inn );
        for (var i in data) {
            if (data[i].hv=='V' ) {
                $("#select_attacker").append($("<option></option>").attr("value", data[i].id).text(data[i].hitorder+'  '+data[i].backno+'  **'+data[i].name));                
            } else { //守備
                if ((data[i].pos=='P') ){ //|| (data[i].pos=='C')
                    $("#select_defender").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                } 
                $("#select_defense").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                $("#select_defense2").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                $("#select_defense3").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                
            }
        } 
    } else { //下半局
        console.log("下半局 inn :  " + inn );
        for (var i in data) {
            if (data[i].hv=='H' ) {
                $("#select_attacker").append($("<option></option>").attr("value", data[i].id).text(data[i].hitorder+'  '+data[i].backno+'  **'+data[i].name));                
            } else { //守備
                if ((data[i].pos=='P') ){ //|| (data[i].pos=='C')
                    $("#select_defender").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                } 
                $("#select_defense").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                $("#select_defense2").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                $("#select_defense3").append($("<option></option>").attr("value", data[i].id).text(data[i].pos+'  '+data[i].backno+'  **'+data[i].name));                
                
            }
        }
    }
    
};


//選 上下半局 U是上半，找V 客隊，先攻隊，打者 的
    $('#select_inning').on('change blur', function() {
        console.log(getCookie("match_val"));
        var inn = this.value;
        $.ajax({
            type: "GET",
            url: "/players/all?mid="+getCookie("match_val"), //+"&hv="+this.value
            success:function(data) {
                refreshInn(data);                
            } ,
            dataType: "json"
        });
    })
//------------------------------------------------------------------------------------------------------------------    
//  新增區
//  新增盃賽
function updateSelCup(data){
    //  移除全部的項目
    $("#select_cup option").remove();
    for (var i in data) 
    {
        console.log(data[i].id + ",  " + data[i].cupname );
        $("#select_cup").append($("<option></option>").attr("value", data[i].id).text(data[i].cupname));                
    }        
}

 $('#addCup').click(function(){    
    var cname=$('#cupname').val();
    var place=$('#place').val();
    var creator=$('#creator').val();
    var junior=$('#junior').val();
    if ($('#cid').val()) {
        $.ajax({
                type: "PUT",
                url: "/cups/"+$('#cid').val(), 
                data: {cupname:cname,place:place,creator:creator,junior:junior},
                success:function(data) {
                // $('#save_message').html(data.message);
                    console.log(data);
                    updateSelCup(data);
                } ,
                dataType: "json"
            });

    } else {
        $.ajax({
                type: "POST",
                url: "/cups/store", 
                data: {cupname:cname,place:place,creator:creator,junior:junior},//{'cupname':$('input[name=cupname]').val(),'place':$('input[name=place]').val(),'creator':$('input[name=creator]').val(),'junior':$('input[name=junior]').val(), '_token': $('input[name=_token]').val()},
                //contentType: "json",
                //processData: false,
                success:function(data) {
                // $('#save_message').html(data.message);
                    console.log(data);
                    updateSelCup(data);
                } ,
                dataType: "json"
            });
    }
 }); 



function updateSelSchool(data){
        //  移除全部的項目
    $("#select_school option").remove();
    for (var i in data) 
    {
        console.log(data[i].id + ",  " + data[i].name );
        $("#select_school").append($("<option></option>").attr("value", data[i].id).text(data[i].name));                
    } 
}

//新增(儲存)學校
 $('#addSchool').click(function(){    
    var sname=$('#schoolname').val();
    var cid = getCookie("cup_val");
    if ($('#sid').val()) {
        $.ajax({
                type: "PUT",
                url: "/schools/"+$('#sid').val(), 
                data: {schoolname:sname},
                success:function(data) {
                // $('#save_message').html(data.message);
                    console.log(data);
                    updateSelSchool(data);
                } ,
                dataType: "json"
            });

    } else {
        $.ajax({
                type: "POST",
                url: "/schools/store", 
                data: {schoolname:sname,cup_id:cid},//{'cupname':$('input[name=cupname]').val(),'place':$('input[name=place]').val(),'creator':$('input[name=creator]').val(),'junior':$('input[name=junior]').val(), '_token': $('input[name=_token]').val()},
                success:function(data) {
                    console.log(data);
                    updateSelSchool(data);
                } ,
                dataType: "json"
            });
    }
 }); 

$('#aBtnSchool').click(function(){    
 $('#sid').val(null);
 $('#schoolname').val(null);
}); 


$('#aBtnLog').click(function(){    
 //$('#lid').val(null);
 //$('#schoolname').val(null);
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

function updateSelMatch(data){
    //  移除全部的項目
    $("#select_match option").remove();
    for (var i in data) 
    {
        console.log(data[i].id + ",  " + data[i].visit_name+ ",  " + data[i].host_name );
        $("#select_match").append($("<option></option>").attr("value", data[i].id).text(data[i].visit_name+' VS '+data[i].host_name    ));                
    } 

};

$('#aBtnMatch').click(function(){    
 $('#mid').val(null);
 $('#holded_at').val(null);
 $('#begin_time_set').val(null);
 $('#game_order').val(null);
 $('#select_visit').val(null);
 $('#select_host').val(null);
 
}); 
 
//新增對戰
 $('#addMatch').click(function(){    
    var holded_at=$('#holded_at').val();
    var begin_time_set=$('#begin_time_set').val();
    var game_order=$('#game_order').val();
    var visit_name=$('#select_visit option:selected').text();
    var host_name=$('#select_host option:selected').text();
    
    var cid = getCookie("cup_val");
    if ($('#mid').val()) {
        $.ajax({
                type: "PUT",
                url: "/matches/"+$('#mid').val(), 
                data: {schoolname:sname},
                success:function(data) {
                    console.log(data);
                    updateSelMatch(data)
                } ,
                dataType: "json"
            });
    } else {
        $.ajax({
                type: "POST",
                url: "/matches/store", 
                data: {holded_at:holded_at,begin_time_set:begin_time_set,game_order:game_order,visit_name:visit_name,host_name:host_name,cid:cid},
                success:function(data) {
                    console.log(data);
                    updateSelMatch(data)
                } ,
                dataType: "json"
            });
    }
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

        var inn=$('#select_inning').val();
        var defender=$('#select_defender option:selected').text();
            defender = defender.split("**")[1];
        var attacker=$('#select_attacker option:selected').text();
            attacker = attacker.split("**")[1];
       // var catcher=$('#select_catcher option:selected').text();
       //     catcher = catcher.split("**")[1];
        var p_result=$('#select_p_result option:selected').text();
        var a_result=$('#select_a_result option:selected').text();
        var d_result=$('#select_d_result option:selected').text();
        var outs=$('#select_outs').val();
        var defense=$('#select_defense option:selected').text();
            defense = defense.split("**")[1];
        var defense2=$('#select_defense2 option:selected').text();
            defense2 = defense2.split("**")[1];
        var defense3=$('#select_defense3 option:selected').text();
            defense3 = defense3.split("**")[1];
            
        var run=$('#select_run').val();
        
        var mid = getCookie("match_val");
        console.log(mid);
        $.ajax({
                type: "POST",
                url: "/pitchers/store",   //catcher:catcher,
                data: {inn:inn,defender:defender,attacker:attacker,p_result:p_result,a_result:a_result,d_result:d_result,outs:outs,defense:defense,defense2:defense2,defense3:defense3,run:run,mid:mid},
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
    var o_inn=data[0].inning_id;
    var n_inn;

    for (var i in data) 
    {
        n_inn = data[i].inning_id

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
        if (!(n_inn==o_inn) || (i==0))
            s_html+=  '    <td>'+data[i].inning_id+'</td>';
        else
            s_html+=  '    <td></td>';
        s_html+=  '    <td>'+data[i].defender_id+'</td>';
        s_html+=  '    <td>'+data[i].attacker_id+'</td>';
        s_html+=  '    <td>'+data[i].p_result+'</td>';
        s_html+=  '    <td>'+data[i].outs+'</td>';
        s_html+=  '    <td>'+data[i].run+'</td>';
        s_html+=  '    <td><button type="button" class="edtDetail btn btn-warning btn-xs" data-inning="'+data[i].inning_id+'"  data-type="log" data-id="'+data[i].id+'" data-toggle="modal" data-target="#edtLogger">編輯</button>';
        s_html+=  '        <button type="button" data-d-pid="'+data[i].id+'"class="delDetail  btn btn-success btn-xs" id="delLog_'+data[i].id+'" >刪除</button></td></tr>';
        //console.log(data[i].hitorder + ",  " + data[i].name );
        o_inn = data[i].inning_id
    } 
    s_html+="</tbody> ";
    console.log(s_html);
    $("#clog").html(s_html) ;
}




//填入球員 表格
function fillPlayer(data){
    console.log('--------------------fillPlayer----------------------------------------------');
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
    fillSelSchoolByCup2();
 });    

$("#edtLog").click(function(){ //[href~='pitcher'] 
//    if ($('#lid').val()){ //編輯
    var inn=$('#inning_id').val();
    var defender=$('#defender_id').val();
    var attacker=$('#attacker_id').val();
   //var catcher=$('#catcher').val();
    var p_result=$('#p_result').val();
    var a_result=$('#a_result').val();
    var d_result=$('#d_result').val();
    var outs=$('#outs').val();
    var defense=$('#defense').val();
    var defense2=$('#defense2').val();
    var defense3=$('#defense3').val();
    var run=$('#run').val();
    var mid = getCookie("match_val");
    console.log(mid);
    $.ajax({
            type: "PUT",
            url: "/pitchers/"+$('#lid').val(), 
            data: {inn:inn,defender:defender,attacker:attacker,defense3:defense3,p_result:p_result,a_result:a_result,d_result:d_result,outs:outs,defense:defense,defense2:defense2,run:run,mid:mid},
            success:function(data) {
                console.log(data);
                fillLog(data);
            } ,
            dataType: "json"
        });

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
//------------------------------------------------------------------------------------------------------------------------------------------------------------

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
var stage = new Konva.Stage({
  container: 'softball_field',
  width: 600,
  height: 800
});

var dragLayer = new Konva.Layer();
var Layer9 = new Konva.Layer();


var rect = new Konva.Rect({
      x: 125,
      y: 560,
      width: 200,
      height: 200,
      //fill: 'green',
      stroke: 'black',
      strokeWidth: 3
    });
      Layer9.add(rect);

  var hLine1 = new Konva.Line({
      points: [125, 620, 325, 620],
      stroke: 'red',
      strokeWidth: 3,
      lineCap: 'round',
      lineJoin: 'round'
    });

  var hLine2 = new Konva.Line({
      points: [125, 700, 325, 700],
      stroke: 'red',
      strokeWidth: 3,
      lineCap: 'round',
      lineJoin: 'round'
    });

  var vLine1 = new Konva.Line({
      points: [180, 560, 180, 760],
      stroke: 'red',
      strokeWidth: 3,
      lineCap: 'round',
      lineJoin: 'round'
    });

  var vLine2 = new Konva.Line({
      points: [275, 560, 275, 760],
      stroke: 'red',
      strokeWidth: 3,
      lineCap: 'round',
      lineJoin: 'round'
    });

      Layer9.add(hLine1,hLine2,vLine1,vLine2);

//stage.add(layer, dragLayer);
      stage.add(Layer9);

var ballLayer = new Konva.Layer();
stage.add(ballLayer);
var pics = ["/img/strike/b1.png", "/img/strike/b2.png", "/img/strike/b3.png", "/img/strike/b4.png", "/img/strike/b5.png",
            "/img/strike/b6.png", "/img/strike/b7.png", "/img/strike/b8.png", "/img/strike/b9.png", "/img/strike/b10.png"
            ];
$.each(pics, function( index, value ) {
            // create new Konva.Image from src attribute
            Konva.Image.fromURL(value, function(image) {
                // 
                if (index<=4){
                    image.setAttrs({
                        draggable: true,
                        x: index*25,
                        y:570,
                        width:20,
                        height:20
                    });

                } else {
                    image.setAttrs({
                        draggable: true,
                        x: (index-5)*25,
                        y:600,
                        width:20,
                        height:20
                    });
                }

                image.on('dragend', function() {
                console.log('position:'+stage.getPointerPosition().x+'-------' +stage.getPointerPosition().y);
                });                    
                
                // append to layer
                ballLayer.add(image);
                // update layer
                ballLayer.draw();
            })
});

var skpics = ["/img/strike/s1.png", "/img/strike/s2.png", "/img/strike/s3.png", "/img/strike/s4.png", "/img/strike/s5.png",
            "/img/strike/s6.png", "/img/strike/s7.png", "/img/strike/s8.png", "/img/strike/s9.png", "/img/strike/s10.png"
            ];
$.each(skpics, function( index, value ) {
            // create new Konva.Image from src attribute
            Konva.Image.fromURL(value, function(image) {
                // 
                if (index<=4){
                    image.setAttrs({
                        draggable: true,
                        x: 350+index*25,
                        y:570,
                        width:20,
                        height:20
                    });
                } else {
                    image.setAttrs({
                        draggable: true,
                        x: 350+(index-5)*25,
                        y:600,
                        width:20,
                        height:20
                    });
                }
                // append to layer
                ballLayer.add(image);
                // update layer
                ballLayer.draw();
            })
});

var fypics = ["/img/strike/f1.png", "/img/strike/f2.png", "/img/strike/f3.png", "/img/strike/f4.png", "/img/strike/f5.png",
            "/img/strike/f6.png", "/img/strike/f7.png", "/img/strike/f8.png", "/img/strike/f9.png", "/img/strike/f10.png"
            ];
$.each(fypics, function( index, value ) {
            // create new Konva.Image from src attribute
            Konva.Image.fromURL(value, function(image) {
                // 
                if (index<=4){
                    image.setAttrs({
                        draggable: true,
                        x: index*25,
                        y:470,
                        width:20,
                        height:20
                    });
                } else {
                    image.setAttrs({
                        draggable: true,
                        x: (index-5)*25,
                        y:500,
                        width:20,
                        height:20
                    });
                }
                // append to layer
                ballLayer.add(image);
                // update layer
                ballLayer.draw();
            })
});


var gdpics = ["/img/strike/d1.png", "/img/strike/d2.png", "/img/strike/d3.png", "/img/strike/d4.png", "/img/strike/d5.png",
            "/img/strike/d6.png", "/img/strike/d7.png", "/img/strike/d8.png", "/img/strike/d9.png", "/img/strike/d10.png"
            ];
$.each(gdpics, function( index, value ) {
            // create new Konva.Image from src attribute
            Konva.Image.fromURL(value, function(image) {
                // 
                if (index<=4){
                    image.setAttrs({
                        draggable: true,
                        x: 350+index*25,
                        y:470,
                        width:20,
                        height:20
                    });
                } else {
                    image.setAttrs({
                        draggable: true,
                        x: 350+(index-5)*25,
                        y:500,
                        width:20,
                        height:20
                    });
                }
                // append to layer
                ballLayer.add(image);
                // update layer
                ballLayer.draw();
            })
});


/*
var imageObj = new Image();
    imageObj.src = '/img/field.jpg';
    imageObj.onload = function() {
      var softField = new Konva.Image({
        x: 10,
        y: 5,
        image: imageObj,
        width: 450,
        height: 550
      });
      // add the shape to the layer
      dragLayer.add(softField);
      softField.moveToBottom();
      // add the layer to the stage
      stage.add(dragLayer);
    };
dragLayer.draw();
*/

Konva.Image.fromURL('/img/field.jpg', function(image){
  // image is Konva.Image instance
  //image.x=10,
  //image.y=5;
  //image.width = 450;
  //image.height = 550;
 // 
    image.setAttrs({
        //draggable: true,
        x: 10,
        y:5,
        width:450,
        height:550
    });
 
  ballLayer.add(image);
  ballLayer.draw();
  image.moveToBottom();
  ballLayer.draw();
});


</script>

</body>
</html>
