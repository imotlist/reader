<div class="page-wrap clearfix " id="page-wrap">

    <div class="global-page">
        <header class="global-page-header">

            <h1 class="page-header">novels</h1>

            <nav class="section-filter novels">
                <ul class="filter-wrap">
                    <li class="wp filter-item on" data-type="PREMIUM">
                        <a class="sort item-title" href="<?=base_url('novel')?>">All Category</a>
                    </li>
                    <li class="wp filter-item " data-type="POPULAR">
                        <a class="sort item-title" href="#">Non-fiction</a>
                    </li>
                    <li class="wp filter-item " data-type="TRENDING">
                        <a class="sort item-title" href="#">Slice of Life</a>
                    </li>
                    <li class="wp filter-item " data-type="FRESH">
                        <a class="sort item-title" href="#">Comedy</a>
                    </li>
                    <li class="wp filter-item " data-type="TAPASTIC">
                        <a class="sort item-title" href="#">Horror</a>
                    </li>
                    <li class="wp filter-item" data-type="ALL">
                        <a class="sort item-title" href="#">Romance</a>
                    </li>
                </ul>
            </nav>
            <nav class="section-sort">

                <ul class="sort-wrap">
                    <li class="sort-item "><a class="item-title" href="#!/novels?sort_type=LIKE">Drama</a></li>
                    <li class="sort-item "><a class="item-title" href="#!/novels?sort_type=POPULARITY">Mystery</a></li>
                    <li class="sort-item "><a class="item-title" href="#!/novels?sort_type=VIEW">Science Fiction</a></li>
                    <li class="sort-item "><a class="item-title" href="#!/novels?sort_type=COMMENT">Fantasy</a></li>
                </ul>
            </nav>
        </header>
        <section class="page-section" id="show">

            <ul class="content-list-wrap premium">
                <?php foreach($novel as $n): ?>
                    <li class="content-item premium">
                        <div class="item-thumb-wrap">
                            <a class="thumb-wrap" href="<?=base_url('series/novel/').$n->novel_id?>">

                                <img src="<?=base_url('assets').'/img/creator/'.$n->author_username.'/novel/'.$n->novel_cover?>" width="220" height="330">

                                <div class="thumb-overlay"></div>
                            </a>
                        </div>
                        <a class="preferred title" href="<?=base_url('series/novel/').$n->novel_id?>"><?=$n->novel_judul?></a>
                        <a class="sub-title" href="<?=base_url('author/').$n->author_username?>"><?=$n->author_nickname?></a>

                        <a class="tag badge" style="background-color: #86B666;" href="#"><?=$n->novel_genre?></a>

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