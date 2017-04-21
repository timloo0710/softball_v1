        <!--  Name -->
        <div class="form-group">
            <label for="cup-name" class="col-sm-3 control-label">學校名</label>
            <div class="col-sm-6">
                <input type="text" name="cupname" id="school-name" class="form-control" value="{{ old('cup') }}">
            </div>
                <button type="button" class="btn btn-warning btn-sm" id="addSchool" >                
                新增
                </button>
            
        </div>

        <table class="table table-striped table-hover ">
        <thead>
            <tr>
            <th>#</th>
            <th>學校名</th>
            <th>動作</th>
            </tr>
        </thead>
        <tbody>  
        <tr class="info">
            <td>1</td>
            <td>東山</td>
            <td>
                <button type="button" class="btn btn-warning btn-sm" >                
                編輯
                </button>
                <button type="button" class="btn btn-success btn-sm" >                
                刪除
                </button>
                <button type="button" class="btn btn-warning btn-sm" >                
                ...
                </button>
            </td>
            </tr>
            <tr class="success">
            <td>2</td>
            <td>埔工</td>
            <td>
                <button type="button" class="btn btn-warning btn-sm" >                
                編輯
                </button>
                <button type="button" class="btn btn-success btn-sm" >                
                    刪除
                </button>
                <button type="button" class="btn btn-warning btn-sm" >                
                ...
                </button>
            </td>
            </tr>
            <tr class="danger">
            <td>3</td>
            <td>秀峰</td>
            <td>
                <button type="button" class="btn btn-warning btn-sm" >                
                編輯
                </button>
                <button type="button" class="btn btn-success btn-sm" >                
                    刪除
                </button>
                <button type="button" class="btn btn-warning btn-sm" >                
                ...
                </button>
                
            </td>
            </tr>
        </tbody>
        </table>  
