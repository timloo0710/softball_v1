<!-- Modal -->
<div class="modal fade" id="newLogger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <!-- New  Form -->
        <form action="{{ url('cup')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="modal-header">                
            新增一筆記錄
            </div>
            <div class="modal-body">
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">目前局數</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('inning_id') }}"-->
                        <select class="form-control" id="select_inning">
                        <option value="1U">一局上</option>
                        <option value="1D">一局下</option>
                        <option value="2U">二局上</option>
                        <option value="2D">二局下</option>
                        <option value="3U">三局上</option>
                        <option value="3D">三局下</option>
                        <option value="4U">四局上</option>
                        <option value="4D">四局下</option>
                        <option value="5U">五局上</option>
                        <option value="5D">五局下</option>
                        <option value="6U">六局上</option>
                        <option value="6D">六局下</option>
                        <option value="7U">七局上</option>
                        <option value="7D">七局下</option>
                        <option value="8U">八局上</option>
                        <option value="8D">八局下</option>
                        <option value="9U">九局上</option>
                        <option value="9D">九局下</option>
                        <option value="10U">十局上</option>
                        <option value="10D">十局下</option>
                        <option value="11U">十一局上</option>
                        <option value="11D">十一局下</option>
                        </select>  
                <i class="fa fa-btn fa-refresh" id="btnRefreshInn"></i>
                                      
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">投手(投球/牽制)</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('defender_id') }}"-->
                        <select class="form-control" id="select_defender">
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">打者/*盜壘者</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('attacker_id') }}"-->
                        <select class="form-control" id="select_attacker">
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">投球後的狀態</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('p_result') }}"-->
                        <select class="form-control" id="select_p_result">
                            <option value="X">無</option>
                            <option value="1B">一壘安打</option>
                            <option value="2B">二壘安打</option>
                            <option value="3B">三壘安打</option>
                            <option value="HR">被全壘打</option>
                            <option value="SEL">野手選擇</option>
                            <option value="AO">內野飛球出局</option>
                            <option value="OAO">外野飛球出局</option>
                            <option value="PGO">投手前滾球出局</option>
                            <option value="FGO">內野滾球出局</option>
                            <option value="BB">四壞球</option>
                            <option value="IBB">故意四壞球</option>
                            <option value="SO">三振</option>
                            <option value="HBP">觸身球</option>
                            <option value="WP">暴投</option>
                            <option value="BK">投手犯規</option>
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">打擊後的狀態</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('a_result') }}"-->
                        <select class="form-control" id="select_a_result">
                            <option value="X">無</option>
                            <option value="SF">犧牲飛球</option>
                            <option value="SH">犧牲觸擊</option>
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">守備後的狀態</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('d_result') }}"-->
                        <select class="form-control" id="select_d_result">
                            <option value="X">無</option>
                            <option value="A">助殺</option>
                            <option value="OFA">外野助殺</option>
                            <option value="CS">抓到盜壘</option>
                            <option value="SB">被盜壘成功</option>
                            <option value="DP">雙殺守備</option>
                            <option value="PB">捕逸</option>
                            <option value="PO">刺殺</option>
                            <option value="ERP">傳球失誤</option>
                            <option value="ERR">接球失誤</option>
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">出局數</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('outs') }}"-->
                        <select class="form-control" id="select_outs">
                            <option value="0">無人出局</option>
                            <option value="1">1人出局</option>
                            <option value="2">2人出局</option>
                            <option value="3">3人出局</option>
                        </select>                
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">協同守備一</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('defense') }}"-->
                        <select class="form-control" id="select_defense">
                        </select>
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">協同守備二</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('defense2') }}"-->
                        <select class="form-control" id="select_defense2">
                        </select>
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">協同守備三</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('defense2') }}"-->
                        <select class="form-control" id="select_defense3">
                        </select>
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">得分</label>
                    <div class="col-sm-6">
                        <!--input type="text" name="cupname" id="cup-name" class="form-control" value="{{ old('run') }}"-->
                        <select class="form-control" id="select_run">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>                
                    </div>
                </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-default" id="addLog">
                <i class="fa fa-btn fa-plus">儲存</i>
            </button>
        </div>
    </form>
    </div>
</div>
</div>
