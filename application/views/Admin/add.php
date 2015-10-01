<div class="container">
<div class="col-md-12">
<div class="panel panel-primary dialog-panel">
      <div class="panel-heading">
        <h5>添加行程</h5>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" action="<?=(isset($ID))?base_url('admin/post/change/'.$ID):base_url('admin/post/add')?>" method="post">
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_title">活動行程</label>
            <div class="col-md-8">
              <div class="col-md-8 indent-small">
                <div class="form-group internal">
                  <input class="form-control" id="id_last_name" placeholder="名稱" value="<?=(isset($sql[0]))?$sql[0]->Title:''?>" name="data[Title]" type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_checkin">日期</label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal input-group">
                  <input type="date" class="form-control datepicker" name="data[Date]" value="<?=(isset($sql[0]))?(date('Y-m-d',$sql[0]->Date)):''?>" id="id_checkin">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
              <label class="control-label col-md-2" for="id_checkout">時間</label>
              <div class="col-md-3">
                <div class="form-group internal input-group">
                  <select class="form-control"  name="data[Time]" value="<?=(isset($sql[0]))?$sql[0]->Time:''?>" id="id_title">
                    <?
                      $data->output_time_opt();
                    ?>
                  </select>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_equipment">類型</label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal">
                  <select class="form-control" id="id_equipment">
                    <option value="">一般</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2" for="id_comments">內容</label>
            <div class="col-md-6">
              <textarea class="form-control" id="id_comments" name="data[Other]"  placeholder="詳細內容" rows="3"><?=(isset($sql[0]))?$sql[0]->Other:''?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn-lg btn-primary" type="submit">送出</button>
            </div>
            <div class="col-md-3">
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
</div>
