@extends('layouts.app')

@section('thisMatch')
<div class="container" id="">
    <div class="row">
        <select class="form-control" id="select_match_total">
        </select>                
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
        <div class="col-xs-6 col-sm-3"><canvas id="myChart4" ></canvas></div>
        <div class="col-xs-6 col-sm-3"><canvas id="myChart5" ></canvas></div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <!--div class="clearfix visible-xs-block"></div-->
        <div class="col-xs-6 col-sm-3"><canvas id="myChart1" ></canvas></div>
        <div class="col-xs-6 col-sm-3"><canvas id="myChart6" ></canvas></div>
    </div>
</div>
@endsection
@section('thisCup')
@endsection
@section('thisYear')
@endsection
@section('all')
@endsection


