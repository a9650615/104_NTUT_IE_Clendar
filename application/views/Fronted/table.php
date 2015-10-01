<div class="container">
    <?
        if(!isset($mode))$mode=false;
        if($mode==''){
    ?>
    <div class="col-sm-4">
        <a class="btn btn-default"  style="padding:10px !important;" href="<?=base_url().'clendar/getime/'.strtotime($url)?>">上一頁</a>
    </div>
    <? }?>
    <table class="table table-striped">
            <tr>
                <th>名稱</th>
                <th>日期</th>
                <th>時間</th>
                <?=($mode=="Admin")?'<th>修改</th>':''?>
            </tr>
        <?
            foreach($data as $d){
                ?>
                <tr>
                <td><a href="<?=base_url('clendar/itinerary/'.$d['ID'])?>"><?=$d['Title']?></a></td>
                <td><?=date('Y-m-d',$d['Date'])?></td>
                <td><?=$d['Time']/3600?>點</td>
                <? if($mode=="Admin"){
                    ?>
                        <td>
                            <a href="<?=base_url('admin/change/'.$d['ID'])?>">修改</a>
                            <a href="<?=base_url('admin/delete/'.$d['ID'])?>">刪除</a>
                        </td>
                    <?
                }?>    
                </tr>
                <?
            }
        ?>
    </table>
</div>