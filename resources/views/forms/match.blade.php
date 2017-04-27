        <!-- Modal -->
        <div class="modal fade" id="Modal_match" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- New  Form -->
                    <form action="#" method="POST" class="form-horizontal">
                    <div class="modal-header">                
                        新增一個對戰
                    </div>
                    <div class="modal-body">
                        <!--  Name -->
                        <div class="form-group">
                            <label for="holded_at" class="col-sm-3 control-label">比賽日期</label>
                            <div class="col-sm-6">
                                <input type="hidden" id="mid" class="form-control"  >
                                <input type="text" name="holded_at" id="holded_at" class="form-control" value="{{ old('holded_at') }}">
                            </div>
                        </div>
                        <!--  Name -->
                        <div class="form-group">
                            <label for="holded_at" class="col-sm-3 control-label">開始時間</label>
                            <div class="col-sm-6">
                                <input type="text" name="begin_time_set" id="begin_time_set" class="form-control" value="{{ old('holded_at') }}">
                            </div>
                        </div>
                        <!--  Name -->
                        <div class="form-group">
                            <label for="game_order" class="col-sm-3 control-label">場次</label>
                            <div class="col-sm-6">
                                <input type="text" name="game_order" id="game_order" class="form-control" value="{{ old('game_order') }}">
                            </div>
                        </div>
                        <!--  Name -->
                        <div class="form-group">
                            <label for="cup-name" class="col-sm-3 control-label">先攻隊伍</label>
                            <div class="col-sm-6">
                               <select class="form-control" id="select_visit"></select> 
                            </div>
                        </div>
                        <!--  Name -->
                        <div class="form-group">
                            <label for="cup-name" class="col-sm-3 control-label">先守隊伍</label>
                            <div class="col-sm-6">
                               <select class="form-control" id="select_host"></select> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default" id="addMatch" >
                            <i class="fa fa-btn fa-plus">儲存</i>
                        </button>
                    </div>
                  </form>
                </div>
            </div>
        </div>                                
