<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xs-4 ct">
                    <a class="btn btn-default"  href="<?=base_url().'clendar/getime/'.$method->last_c()?>">
                        <span class="glyphicon glyphicon-chevron-left"></span>上個月
                    </a>
                </div>
                <div class="col-xs-4 ct" style="padding-top:1%;"><?=$year?>-<?=$month?>-<?=$day?></div>
                <div class="col-xs-4 ct">
                    <a class="btn btn-default" href="<?=base_url().'clendar/getime/'.$method->next_c()?>">
                        <span class="glyphicon glyphicon-chevron-right"></span>下個月
                    </a>
                </div>
            </div>
            <?=$table_output?>
        </div>
    </div>
</div>