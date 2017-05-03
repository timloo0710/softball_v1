@extends('layouts.data')

@section('thisMatch')
<div class="container" id="">
    <div class="row">
        <select class="form-control" id="select_match_total">
        </select>   
        <i class="fa fa-btn fa-refresh" id="btnRefreshMatch"></i>             
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-3">
        <h2>投手</h2>
            <table class="table table-striped table-hover "  id="h_pitcher" >
            </table>
        </div>
        <div class="col-xs-6 col-sm-3">
        <h2>打者</h2>
            <table class="table table-striped table-hover "  id="h_batter" >
            </table>
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <!--div class="clearfix visible-xs-block"></div-->
        <div class="col-xs-6 col-sm-3">
        <h2>客隊投手</h2>
            <table class="table table-striped table-hover "  id="v_pitcher" >
            </table>
        </div>
        <div class="col-xs-6 col-sm-3">
        <h2>客隊打者</h2>
            <table class="table table-striped table-hover "  id="v_batter" >
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-3" id="rdr_hp">
            <canvas id="hp1" ></canvas>
            <canvas id="hp2" ></canvas>
        </div>
        <div class="col-xs-6 col-sm-3" id="rdr_hb">
            <canvas id="hb1" ></canvas>
            <canvas id="hb2" ></canvas>
            <canvas id="hb3" ></canvas>
            <canvas id="hb4" ></canvas>
            <canvas id="hb5" ></canvas>
            <canvas id="hb6" ></canvas>
            <canvas id="hb7" ></canvas>
            <canvas id="hb8" ></canvas>
            <canvas id="hb9" ></canvas>
            <canvas id="hb10" ></canvas>
            <canvas id="hb11" ></canvas>
            <canvas id="hb12" ></canvas>
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <!--div class="clearfix visible-xs-block"></div-->
        <div class="col-xs-6 col-sm-3" id="rdr_vp">
            <canvas id="vp1" ></canvas>
            <canvas id="vp2" ></canvas>
        </div>
        <div class="col-xs-6 col-sm-3" id="rdr_vb">
            <canvas id="vb1" ></canvas>
            <canvas id="vb2" ></canvas>
            <canvas id="vb3" ></canvas>
            <canvas id="vb4" ></canvas>
            <canvas id="vb5" ></canvas>
            <canvas id="vb6" ></canvas>
            <canvas id="vb7" ></canvas>
            <canvas id="vb8" ></canvas>
            <canvas id="vb9" ></canvas>
            <canvas id="vb10" ></canvas>
            <canvas id="vb11" ></canvas>
            <canvas id="vb12" ></canvas>
            <canvas id="vb13" ></canvas>
            <canvas id="vb14" ></canvas>
            <canvas id="vb15" ></canvas>
            <canvas id="vb16" ></canvas>
        </div>
    </div>
</div>
@endsection
@section('thisCup')
@endsection
@section('thisYear')
@endsection
@section('all')
@endsection


