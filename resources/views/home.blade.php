@extends('layouts.app')

@section('cup')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="form-control" id="select_cup">
                                @foreach ($cups as $cup)
                                    <option value="{{ $cup->id }}">{{ $cup->cupname }} </option>
                                @endforeach                            
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal">                
                                編輯
                            </button>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">                
                                刪除
                            </button>
                        </div>
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">                
                            新增一個盃賽
                        </button>
                    </div>
                </div>

                <div class="panel-body">
                    @include('forms.cup')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('school')
<hr>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="select_school">
                            </select>
                            @include('forms.school')
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal">                
                                編輯
                            </button>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">                
                                刪除
                            </button>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#Modal_school">                
                                新增一所學校
                            </button>
                            <button type="button" id="newStudent" class="btn btn-info btn-xs" data-toggle="modal" data-target="#Modal_student">                
                                新增該校球員
                            </button>
                            @include('forms.student')
                        </div>
                        <table class="table table-striped table-hover "  id="studentsBySchool" >

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('student')

@endsection

@section('match')
<hr>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="form-control" id="select_match">
                            </select>                
                          </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal">                
                                編輯
                            </button>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">                
                                刪除
                            </button>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#Modal_match" id="newMatch"  >                
                                新增一個對戰組合
                            </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @include('forms.match')
                </div>
            </div>
        </div>
    </div>

@endsection
@section('player')
<hr>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#newPlayer">                
                            新增雙方球員
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!--@include('forms.visitor') --> 
                            <table class="table table-striped table-hover "  id="v_team" >
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <!--@include('forms.hoster') --> 
                            <table class="table table-striped table-hover "  id="h_team" >
                            </table>
                        </div>
                    </div>                                                                         
                </div>
                <div class="panel-body">
                    @include('forms.player')
                </div>
            </div>
        </div>
    </div>

@endsection
@section('pitcher')
<hr>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#newLogger">                
                        記錄本場比賽
                    </button>
                </div>
                <div class="panel-body">
                    @include('forms.logger')
                </div>
                <table class="table table-striped table-hover "  id="clog" >
                </table>
                
            </div>
        </div>
    </div>

@endsection


