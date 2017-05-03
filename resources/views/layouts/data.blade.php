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
    <script src="http://culmat.github.io/jsTreeTable/treeTable.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<script type="text/javascript">

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


$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "/matches/all?cup_id="+getCookie("cup_val"), 
        success:function(data) {
            // $('#save_message').html(data.message);
        console.log(data);
        fillMatch(data);
        //統計用 
        } ,
            dataType: "json"
        });

})

function fillMatch(data){
    $("#select_match_total option").remove();
        for (var i in data) 
        {
            console.log(data[i].id + ",  " + data[i].visit_name+ ",  " + data[i].host_name );
            $("#select_match_total").append($("<option></option>").attr("value", data[i].id).text(data[i].visit_name+' VS '+data[i].host_name    ));                
        }  
}

$("#btnRefreshMatch").click(function(){ 
    $.ajax({
        type: "GET",
        url: "/matches/all?cup_id="+getCookie("cup_val"), 
        success:function(data) {
            // $('#save_message').html(data.message);
        console.log(data);
        fillMatch(data);
        //統計用 
        } ,
            dataType: "json"
        });
    });


function fillPlayerTotals(data){
    var s_html="";
    //  移除全部的項目
    var o_plr=data[0].player;
    var n_plr;
    s_html="<thead>  <tr>   <th>姓名</th>   <th>內容</th>    <th>小計</th>   </tr>    </thead>    <tbody> "; 
    for (var i in data) 
    {
            n_plr = data[i].player
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
            if (!(n_plr==o_plr) || (i==0)){
            s_html+=  '    <td>'+data[i].player+'</td>';
            }
            else {            s_html+=  '    <td></td>';
            }
            s_html+=  '    <td>'+data[i].result+'</td>';
            s_html+=  '    <td>'+data[i].count+'</td>';
            //console.log(data[i].player + ",  " + data[i].count );
            o_plr=data[i].player;
    } 
    s_html+="</tbody> ";
  //  console.log(s_html); 
    return s_html ;
}

function treePlayerTotals(data){
    var s_html="";
    //  移除全部的項目
    s_html="<thead>  <tr>   <th>姓名/內容</th>    <th>小計</th>   </tr>    </thead>    <tbody> "; 

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
            s_html+=  '    <td>'+data[i].player+'</td>';
            s_html+=  '    <td>'+data[i].result+'</td>';
            s_html+=  '    <td>'+data[i].count+'</td>';
            //console.log(data[i].player + ",  " + data[i].count );
    } 
    s_html+="</tbody> ";
  //  console.log(s_html); 
    return s_html ;
}


//選對戰組合_統計用
$('#select_match_total').on('change blur', function() {
    $("#h_pitcher").empty();
    $("#h_batter").empty();
    $("#v_pitcher").empty();
    $("#v_batter").empty();
    $.ajax({
        type: "GET",
        url: "/totals/host/"+this.value+"/pitcher", 
        success:function(data) {
            console.log('--------------------fillPlayerTotals----------------------------------------------');
                $("#h_pitcher").html(fillPlayerTotals(data)) ; 
                radarPlayerTotals(data,'hp'); 
            } ,
            dataType: "json"
        });

    $.ajax({
        type: "GET",
        url: "/totals/host/"+this.value+"/batter", 
        success:function(data) {
            $("#h_batter").html( fillPlayerTotals(data));
                radarPlayerTotals(data,'hb'); 
            } ,
            dataType: "json"
        });

    $.ajax({
        type: "GET",
        url: "/totals/visit/"+this.value+"/pitcher", 
        success:function(data) {
            $("#v_pitcher").html( fillPlayerTotals(data));
            radarPlayerTotals(data,'vp'); 
            } ,
            dataType: "json"
        });

    $.ajax({
        type: "GET",
        url: "/totals/visit/"+this.value+"/batter", 
        success:function(data) {
            $("#v_batter").html( fillPlayerTotals(data));
            radarPlayerTotals(data,'vb'); 
            } ,
            dataType: "json"
        });
});


function radarPlayerTotals(data,plr){
    var o_player;
    var n_player;
    var canvas;
    var ctx;
    var chart;
    var labels=[];
    var rtdata=[];
    var rdrdata={};  
    var j = 0;
    o_player =  data[0].player; 
    console.log(data);
    //console.log('8:'+ data[8].result);
    //console.log('9:'+ data[9].result);
    for (var i in data) 
    {
        if (i==1) { 
          //   canvas = $('<canvas />').attr({
          //              id: "canvas" + i
          //          }); 
          //    ctx = $('#canvas'+i);      
          j=1;
        };
        n_player =  data[i].player;                     
        if (!(n_player==o_player) ){
            console.log('not equal: ' +i);
            console.log('n_player = '+n_player );
            console.log('o_player = '+o_player );
            console.log('rtdata = '+rtdata );
            console.log('labels = '+labels );
            var chart_data = {
                labels:labels, // ["1B 一安", "2B 二安", "3B 二安", "HR 全壘打", "GO 滾地球出局", "AO 飛球出局", "K 三振","GIDP 雙殺打","R 得分","RBI 打點"]
                datasets: [
                    {
                        label: o_player,
                        backgroundColor: "rgba(179,181,198,0.2)",
                        borderColor: "rgba(179,181,198,1)",
                        pointBackgroundColor: "rgba(179,181,198,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(179,181,198,1)",
                        data: rtdata
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

            chart = new Chart( $('#'+plr+j), {
            type: 'radar',
                data: chart_data,
                options: options
            });
            //$('#rdr_hp').append( canvas );

            labels = [];
            rtdata.length  = [];
            j++;
            //-----------------------------------------------
            // canvas = $('<canvas />').attr({
            //            id: "canvas" + i
            //        });
            // ctx = $('#canvas'+i);          

        }
         console.log('i:'+i+'-------'+data[i].result)   
         labels.push(data[i].result);
         rtdata.push(data[i].count);

         o_player =  data[i].player;           
    }


    var data = {
        labels:labels, // ["1B 一安", "2B 二安", "3B 二安", "HR 全壘打", "GO 滾地球出局", "AO 飛球出局", "K 三振","GIDP 雙殺打","R 得分","RBI 打點"]
        datasets: [
            {
                label: o_player,
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: rtdata
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

    chart = new Chart($('#'+plr+j), {
    type: 'radar',
        data: data,
        options: options
    });
//    $('#rdr_hp').append( canvas );

}


var data = {
    labels: ["1B 一安", "2B 二安", "3B 二安", "HR 全壘打", "GO 滾地球出局", "AO 飛球出局", "K 三振","GIDP 雙殺打","R 得分","RBI 打點"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [65, 59, 90, 81, 56, 55, 40, 56, 55, 40]
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
