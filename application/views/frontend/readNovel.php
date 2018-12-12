<br>
<div class="page-wrap clearfix " id="page-wrap">

    <div id="smart-view" class="">

        <a id="cover-section" class=""></a>
        <section id="main-streams">
            <section id="episodes-section">
                <div class="episode-ads"></div>

                <header class="episodes-header">
                    <div class="inner ">Episodes
                        <span class="episode-count">&nbsp;&nbsp;(<span class="episode-index">1</span> of 1)</span>
                    </div>
                </header>

                <div id="episodes" class="clearfix ">
                    <center>
                        <img src="<?=base_url('assets').'/img/creator/'.$novel->author_username.'/novel/'.$novel->novel_cover?>" width="500" height="500" alt="Home">
                    </center>
                </div>
                <div id="loading-indicator" class="hidden yellow tbm">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </section>
        </section>
        <section id="left-side-bar" class="docked">
            <div class="tr">
                <div class="tc">
                    <div class="inner">
                        <div class="tr ttr">
                            <div class="tc">
                                <div id="side-bar-holder"></div>
                            </div>
                        </div>
                        <div class="tr ttr" id="series-info-box">
                            <div class="tc">                              

                                <div class="series-info-wrap" id="series-info-wrap">
                                    <header class="series-header">

                                        <h1 class="title">
                                        <a class="series-header-title" href="#"><?= $novel->novel_judul ?></a>
                                          <?php if(!empty($auth)): ?>  
                                            <a class="series-edit-btn" href="<?=base_url('series/editnovel/'.$novel->novel_id)?>" data-toggle="tooltip" data-title="Edit" data-placement="right"><i class="sp-ico-edit-on"></i></a>
                                          <?php endif ?>
                                    </h1>
                                        <div class="extra-header-info">

                                            <div class="author">
                                                <a href="#" class="thumb">
                                                    <img src="<?=base_url('assets/img/profile/'.$novel->author_profile)?>" width="40" height="40" alt="imotlist" class="circle">
                                                </a>
                                                <span itemscope="" itemprop="author" itemtype="http://schema.org/Person">
                                            <a href="<?=base_url('author/'.$novel->author_username)?>" class="name" title="imotlist" rel="author" itemprop="url"><span itemprop="name"><?=$novel->author_nickname?></span></a>
                                                </span>
                                            </div>

                                            <div class="buttons">
                                                <div class="subscribe-btn-wrap bt">
                                                    <a id="subscribe-btn" href="#!/subscription/action/125732" class=" p-btn normal subscribe-btn " data-where="Subscribe Button Sidebar" data-is-subscribed="false" data-set-focus="false" data-toggle="tooltip" data-title="Subscribe" data-placement="top" data-original-title="" title="">

                                                        <i class="ico sp-btn-bookmark"></i>

                                                        <span class="btn-label add txt">Add to Library</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <ul class="number-status">
                                                <li class="common-tooltip" data-title="0 views" data-placement="right" data-original-title="" title="">
                                                    <i class="sp-tab-views-on"></i>
                                                    <span class="cnt-txt"><?=$novel->novel_genre?></span>
                                                </li>
                                                <li data-type="subscriber" class="sp-line " data-href="#">
                                                    <i class="sp-tab-subs-on"></i>
                                                    <span class="cnt-txt js-cnt" data-cnt="0">0</span>
                                                </li>

                                            </ul>
                                            <div id="series-description" class="description scrollbar-wrap vertical-sc">
                                                <div class="shadow top off"></div>
                                                <div class="shadow bottom off"></div>
                                                <div class="viewport">
                                                    <div class="text overview" style="top: 0px;">

                                                        <span id="series-desc-body">
                                                            <?= substr($novel->novel_desc, 0,50) ?> ...
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="scrollbar disable" style="height: 20px;">
                                                    <div class="track" style="height: 20px;">
                                                        <div class="thumb" style="top: 0px; height: 20px;">
                                                            <div class="end"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                </div>
                            </div>
                        </div>
                        <div class="tr ttr">
                            <div class="tc">
                                <div class="episode-list-bar">
                                    <header class="bar">
                                        <span class="txt">Episode</span>

                                    </header>
                                </div>
                            </div>
                        </div>
                        <div class="tr">
                            <div class="tc fh">
                                <div class="tc-wrap">
                                    <div id="episode-nav-wrap">
                                        <div id="episode-nav" class="scrollbar-wrap fh vertical-sc">
                                            <div class="viewport fh">
                                                <ul id="episode-list" class="overview" style="top: 0px;">
                                                    <?php foreach($series as $s): ?>
                                                        <li class="episode">
                                                            <a class="cp episode-box novels" href="#" name="<?=$s->chapter_id?>">
                                                                <div class="episode-thumb-wrap">
                                                                    <div class="thumb-filter  " data-title="Chapter 1" data-placement="right" data-original-title="" title="">
                                                                        <i class=""></i>
                                                                    </div>
                                                                    <img class="ep-thumb-img" src="<?=base_url('assets').'/img/creator/'.$novel->author_username.'/novel/'.$novel->novel_cover?>" data-uid="1263616" data-load="false" width="50" height="50" alt="Chapter 1">
                                                                    <div class="ep-new-icon-small ">N</div>
                                                                </div>
                                                                <div class="episode-info ">
                                                                    <h3 class="title" title="<?=$s->chapter_no?>">Chapter <?=$s->chapter_no?></h3>
                                                                    <div class="time" title="2018-12-09 11:38:21 PST">
                                                                        <span class="desc "></span><?=$s->chapter_judul?>
                                                                    </div>
                                                                </div>

                                                            </a>
                                                            <?php if(!empty($auth)): ?>  
                                                             <a class="ep-edit-btn" href="<?=base_url('series/editnovelEpisode/'.$s->chapter_id)?>" data-toggle="tooltip" data-title="Edit" data-placement="bottom" data-original-title="" title=""><i class="sp-ico-edit-on"></i></a>
                                                            <?php endif ?>

                                                        </li>
                                                    <?php endforeach ?>

                                                </ul>
                                            </div>
                                            <div class="scrollbar disable" style="height: 265px;">
                                                <div class="track" style="height: 265px;">
                                                    <div class="thumb" style="top: 0px; height: 265px;">
                                                        <div class="end"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="loading-bar"></div>

        <div id="ep-first-nav" class="ep-nav first-ep">
            <a href="#!/first-episode" class="first" data-toggle="tooltip" data-placement="left" data-html="true" data-original-title="" title="">
                <i class="sp-ico-page-first"></i>
                <img width="50" height="50" src="https://d30womf5coomej.cloudfront.net/sa/31/2510d8db-a465-42cb-a6b1-a3261089d3a9.png">
            </a>
        </div>
        <div id="ep-nav" class="ep-nav">
            <a href="#!/prev-episode" class="prev hidden" data-toggle="tooltip" data-placement="left" data-html="true" data-original-title="" title="">
                <i class="sp-ico-page-prev"></i>
                <img width="50" height="50">
            </a>
            <a href="#!/next-episode" class="next" data-placement="left" data-html="true" data-original-title="" title="">
                <i class="sp-ico-page-next"></i>
                <img width="50" height="50" src="https://d30womf5coomej.cloudfront.net/sa/cd/3435f3af-cd13-4b40-8c47-2180760716c8.jpg">
            </a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){

        $(".cp").click(function(){
            var key = $(this).attr('name');

            $.ajax({
                    type:"POST",
                    url: "<?= base_url('series/getnovelSeries') ?>",
                    cache: false,
                    data:{id:key},
                    success: function(respond){
                        $("#episodes").html(respond);
                    }
                });            
        });        

    })
</script>