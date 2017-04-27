<!-- Modal -->
<div class="modal fade" id="newPlayer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

    <!-- New  Form -->
    <form action="{{ url('cup')}}" method="POST" class="form-horizontal">
    
    <div class="modal-header">                
        新增客隊/主隊
    </div>
    <div class="modal-body">
        <!--  Name -->
        <div class="form-group">
            <label for="cup-name" class="col-sm-3 control-label">先攻/守隊伍</label>

            <div class="col-sm-6">
                <!--input type="text" name="hv" id="hv" class="form-control" value="{{ old('hv') }}"-->
                <select class="form-control" id="select_hv">
                    <option value="V">先攻</option>
                    <option value="H">先守</option>
                </select>
            </div>
        </div>
        <!--  Name -->
        <div class="form-group">
            <label for="hitorder" class="col-sm-3 control-label">棒次</label>
            <div class="col-sm-6">
                <!--input type="text" name="hitorder" id="hitorder" class="form-control" value="{{ old('hitorder') }}"-->
                <select class="form-control" id="select_hitorder">
                    <option value="1">第1棒</option>
                    <option value="2">第2棒</option>
                    <option value="3">第3棒</option>
                    <option value="4">第4棒</option>
                    <option value="5">第5棒</option>
                    <option value="6">第6棒</option>
                    <option value="7">第7棒</option>
                    <option value="8">第8棒</option>
                    <option value="9">第9棒</option>
                    <option value="R">代打</option>
                    <option value="0">專任投手</option>
                </select>
            </div>
        </div>
        <!--  Name -->
        <div class="form-group">
            <label for="pos" class="col-sm-3 control-label">守備位置</label>
            <div class="col-sm-6">
                <!--input type="text" name="pos" id="pos" class="form-control" value="{{ old('pos') }}"-->
                <select class="form-control" id="select_pos">
                    <option value="P">投手</option>
                    <option value="C">捕手</option>
                    <option value="1B">1壘手</option>
                    <option value="2B">2壘手</option>
                    <option value="3B">3壘手</option>
                    <option value="SS">遊擊手</option>
                    <option value="RF">右外野手</option>
                    <option value="CF">中外野手</option>
                    <option value="LF">左外野手</option>
                    <option value="DP">指定打擊</option>
                    <option value="X">無</option>

                </select>
            </div>
        </div>
        <!--  Name -->
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">姓名</label>
            <div class="col-sm-6">
                <!--input type="text" name="name" id="playername" class="form-control" value="{{ old('name') }}"-->
                <select class="form-control" id="select_hv_names">
                </select>
            </div>
        </div>
        <!--  Name -->
        <div class="form-group">
            <label for="backno" class="col-sm-3 control-label">背號</label>
            <div class="col-sm-6">
                <input type="text" name="backno" id="backno" class="form-control" placeholder="#11" value="{{ old('backno') }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" id="addPlayer">
            <i class="fa fa-btn fa-plus">新增</i>
        </button>
    </div>
    </form>
    </div>
</div>
</div>                                
