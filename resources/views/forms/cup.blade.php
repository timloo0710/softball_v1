<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- New  Form -->
        <form id="Cupform" action="#">
        <div class="modal-header">                
            新增一個盃賽
        </div>
        <div class="modal-body">
                <!--  Name -->
                <div class="form-group">
                    <label for="cupname" class="col-sm-3 control-label">盃賽名稱</label>
                    <div class="col-sm-6">
                        <input type="text" id="cupname" class="form-control" placeholder="盃賽名稱" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="place" class="col-sm-3 control-label">比賽場地</label>
                    <div class="col-sm-6">
                        <input type="text" id="place" class="form-control" placeholder="比賽場地" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="creator" class="col-sm-3 control-label">主辦單位</label>
                    <div class="col-sm-6">
                        <input type="text" id="creator" class="form-control" placeholder="主辦單位" >
                    </div>
                </div>
                <!--  Name -->
                <div class="form-group">
                    <label for="cup-name" class="col-sm-3 control-label">級別</label>
                    <div class="col-sm-6">
                        <input type="text" id="junior" class="form-control" placeholder="高(國)中" >
                        <input type="hidden" id="cid" class="form-control"  >
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" id="addCup" class="btn btn-default">
                <i class="fa fa-btn fa-plus">儲存</i>
            </button>
        </div>
    </form>
    </div>
</div>
</div>                                
