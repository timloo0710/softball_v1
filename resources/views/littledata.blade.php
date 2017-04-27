@extends('layouts.app')

@section('thisMatch')
<div class="container" id="">
    <div class="row">
        <div class="col-xs-6 col-sm-4"><canvas id="myChart1" ></canvas></div>
        <div class="col-xs-6 col-sm-4"><canvas id="myChart2" ></canvas></div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6 col-sm-4"><canvas id="myChart3" ></canvas></div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-4"><canvas id="myChart4" ></canvas></div>
        <div class="col-xs-6 col-sm-4"><canvas id="myChart5" ></canvas></div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6 col-sm-4"><canvas id="myChart6" ></canvas></div>
    </div>
</div>
@endsection
@section('thisCup')
@endsection
@section('thisYear')
@endsection
@section('all')
@endsection


