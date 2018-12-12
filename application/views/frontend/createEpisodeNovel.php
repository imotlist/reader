<br>
<br>
<br>
<div class="page-wrap clearfix " id="page-wrap">

    <div class="global-page full">

        <div class="dashboard-header-wrap">
            <div class="dashboard-header">
                <div class="left-side">

                    <ul>
                        <li class="on">
                            <a href="/dashboard/index">
                                <i class="ico sp-pub-series mod-margin18"></i>
                                <p class="tab-title">series</p>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="right-side">
                    <ul>
                        <li class="">
                            <a href="https://help.tapas.io" target="_blank">
                                <i class="ico sp-pub-help"></i>
                                <p class="tab-title">help</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dashboard-page-wrap">
            <section class="dashboard-page dashboard-series clearfix" id="add-series-section">
                <div class="left-side">
                    <h1 class="section-title">Episode <?=$ep?></h1>
                    <div class="input-form-wrap">
                        <form id="" action="#" method="post">
                            <div class="row-label">Title</div>
                            <div class="row-input">
                                <input id="title" name="title" class="text js-em-valid" type="text" value="" autocomplete="false">
                            </div>
                            <div class="row-label">Content</div>
                            <div class="row-input">
                                <textarea id="description" name="description" class="text textarea" autocomplete="false"></textarea>
                            </div>
                            <input type="hidden" id="novelid" value="<?=$novel->novel_id?>">
                            <div class="input-form-footer">
                                <a href="#" class="mix-btn gradient mint large" id="btnsubmit"><i class="sp-btn-check"></i><span class="btn-label">Publish</span></a>
                            </div>
                            <div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-side top">

                    <div class="help-wrap">
                        <header>Novel</header>
                        <ul class="contents">
                            <li><?=$novel->novel_judul?></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <iframe src="about:blank" id="hidden-iframe" name="hidden-iframe"></iframe>
</div>
<script type="text/javascript">
    $(function(){


        $("#btnsubmit").click(function(){            
            var title = $("#title").val(); 
            var desc = $("#description").val(); 
            var idnovel = $("#novelid").val();             
                $.ajax({
                    type:"POST",
                    url: "<?= base_url('series/simpanNovelEpisode') ?>",
                    cache: false,
                    data:{title:title,desc:desc,id:idnovel},
                    success: function(respond){
                        window.location.href = "<?=base_url('series/novel/')?>"+idnovel;
                        //console.log(respond);
                    }
                });

            

        });

    })
</script>