<div class="container">
    <div for="exampleInputEmail1">依時間搜尋<!--Email address--></div>
    <div class="col-sm-10">
        <div class="form">
            <div class="form-group">
                <input class="form-control" id="exampleInputUrl" placeholder="輸入時間" type="date">
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <button type="submit" class="btn btn-default" onclick="location.href='<?=base_url()?>admin/manage/'+exampleInputUrl.value">搜尋</button>
    </div>
</div>