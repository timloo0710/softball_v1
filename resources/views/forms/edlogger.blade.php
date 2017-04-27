
<!-- Modal -->
<div class="modal fade" id="edtLogger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <!-- New  Form -->
        <form action="{{ url('cup')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
        <div class="modal-header">                
            修改一筆記錄
        </div>
    <div class="modal-body">
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">目前局數</label>
                <div class="col-sm-6">
                    <input type="hidden" id="lid" class="form-control"  >
                    <input type="text"  id="inning_id" class="form-control" value="{{ old('inning_id') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">投手(投球/牽制)</label>
                <div class="col-sm-6">
                    <input type="text" id="defender_id" class="form-control" value="{{ old('defender_id') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">打者/*盜壘者</label>
                <div class="col-sm-6">
                    <input type="text"  id="attacker_id" class="form-control" value="{{ old('attacker_id') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">補手(有效牽制)</label>
                <div class="col-sm-6">
                    <input type="text"  id="catcher" class="form-control" value="{{ old('catcher') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">投球後的狀態</label>
                <div class="col-sm-6">
                    <input type="text"  id="p_result" class="form-control" value="{{ old('p_result') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">打擊後的狀態</label>
                <div class="col-sm-6">
                    <input type="text"  id="a_result" class="form-control" value="{{ old('a_result') }}"-->
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">守備後的狀態</label>
                <div class="col-sm-6">
                    <input type="text"  id="d_result" class="form-control" value="{{ old('d_result') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">出局數</label>
                <div class="col-sm-6">
                    <input type="text"  id="outs" class="form-control" value="{{ old('outs') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">協同守備一</label>
                <div class="col-sm-6">
                    <input type="text"  id="defense" class="form-control" value="{{ old('defense') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">協同守備二</label>
                <div class="col-sm-6">
                    <input type="text"  id="defense2" class="form-control" value="{{ old('defense2') }}">
                </div>
            </div>
            <!--  Name -->
            <div class="form-group">
                <label for="cup-name" class="col-sm-3 control-label">得分</label>
                <div class="col-sm-6">
                    <input type="text" id="run" class="form-control" value="{{ old('run') }}">
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" id="edtLog">
                        <i class="fa fa-btn fa-plus">儲存</i>
                    </button>
    </div>
    </form>
    </div>
</div>
</div>
