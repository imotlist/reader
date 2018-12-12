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
                        <form enctype="multipart/form-data" id="" action="<?= base_url('series/simpanComicEpisode')?>" method="post">
                            <div class="row-label">Title</div>
                            <div class="row-input">
                                <input id="title" name="title" class="text js-em-valid" type="text" value="" autocomplete="false">
                            </div>
                            <div class="row-label">Content</div>
                            <input type="file" multiple class="multi with-preview" maxlength="10" accept="gif|jpg|png" name="userfile[]"/>
                            <input type="hidden" name="id" id="id" value="<?=$comic->comic_id?>">
                            <div class="input-form-footer">
                                <button type="submit" class="mix-btn gradient mint large"><i class="sp-btn-check"></i><span class="btn-label">Publish</span></button>
                            </div>
                            <div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-side top">

                    <div class="help-wrap">
                        <header>Comic</header>
                        <ul class="contents">
                            <li><?=$comic->comic_judul?></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <iframe src="about:blank" id="hidden-iframe" name="hidden-iframe"></iframe>
</div>
<script type="text/javascript" src="<?=base_url('assets/multi_upload/dist/js/jquery.dm-uploader.min.js')?>"></script>
<script type="text/javascript">
    $(function(){


        $("#btnsubmit2").click(function(){            
            var title = $("#title").val(); 
            var desc = $("#description").val(); 
            var id = $("#id").val();             
                $.ajax({
                    type:"POST",
                    url: "<?= base_url('series/simpanComicEpisode') ?>",
                    cache: false,
                    data:{title:title,desc:desc,id:id},
                    success: function(respond){
                        window.location.href = "<?=base_url('series/comic/')?>"+id;
                        //console.log(respond);
                    }
                });

            

        });

    })
</script>