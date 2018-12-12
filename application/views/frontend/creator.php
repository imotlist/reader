<br>
<br>
<br>
<div class="page-wrap clearfix " id="page-wrap">

    <div class="global-page">
        <header class="global-page-header">

            <h1 class="page-header">Creator</h1>

        </header>
        <section class="page-section" id="show">

            <ul class="content-list-wrap premium">
                <?php foreach($creator as $c): ?>
                    <li class="content-item premium">
                        <div class="item-thumb-wrap">
                            <a class="thumb-wrap" href="<?=base_url('creator/detail/').$c->author_id?>">
                                <?php if(!empty($c->author_profile)): ?>
                                    <img src="<?=base_url('assets').'/img/profile/'.$c->author_profile?>" width="220" height="220">
                                <?php else: ?>
                                    <img src="<?=base_url('assets').'/img/profile/default.png'?>" width="220" height="220">
                                <?php endif ?>
                                <div class="thumb-overlay"></div>
                            </a>
                        </div>
                        <a class="preferred title" href="#"><?=$c->author_username?></a>
                        <a class="sub-title" href="#"><?=$c->author_nickname?></a>

                    </li>                
                <?php endforeach ?>
            </ul>

        </section>

    </div>

    <iframe src="about:blank" id="hidden-iframe" name="hidden-iframe"></iframe>
</div>
<script type="text/javascript">
    $(function(){

        $(".sort").click(function(){
            var key = $(this).html();
            //console.log(key);
            $.ajax({
                    type:"POST",
                    url: "<?= base_url('novel/getSortNovel') ?>",
                    cache: false,
                    data:{key:key},
                    success: function(respond){
                        $("#show").html(respond);
                    }
                });            
        }); 

        $(".wp").click(function(){
            $(".wp").attr('class','wp filter-item')
            $(this).attr('class','wp filter-item on')
        });       

    })
</script>