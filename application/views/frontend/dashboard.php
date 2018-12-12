<br>
<br>
<br>
<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.plugin.min.f1cd454.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.min.f1cd454.js"></script>
<div class="page-wrap clearfix " id="page-wrap">

    <div class="global-page full">

        <div class="dashboard-header-wrap">
            <div class="dashboard-header">
                <div class="left-side">

                    <ul>
                        <li class="on">
                            <a href="<?=base_url('fndashboard')?>">
                                <i class="ico sp-pub-series mod-margin18"></i>
                                <p class="tab-title">series</p>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="right-side">
                    <ul>
                        <li class="">
                            <a href="#" target="_blank">
                                <i class="ico sp-pub-help"></i>
                                <p class="tab-title">help</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dashboard-page-wrap">
            <section class="dashboard-page clearfix" id="dashboard-info-section">
                <div class="left-side">
                    <h1 class="section-title">Series</h1>
                    <div class="series-list-wrap content-min-height">

                        <div class="menu-wrap">
                            <div class="pull-left">
                                <div class="mix-btn large static pewter" data-action="hover" data-type="button" id="btncomic">
                                    <i></i><span class="btn-label">Comic </span>
                                </div>
                                <div class="mix-btn large static pewter" data-action="hover" data-type="button" id="btnnovel">
                                    <i></i><span class="btn-label">Novel </span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <div class="mix-btn large static pewter has-ndropdown" data-action="hover" data-type="button">
                                    <i class="sp-btn-addseries"></i><span class="btn-label">new series</span>
                                    <ul class="ndropdown">

                                        <li class="each">
                                            <a href="<?=base_url('series/create/comic')?>"><i class="mod-ico sp-btn-comic"></i>comic</a>
                                        </li>

                                        <li class="each">
                                            <a href="<?=base_url('series/create/novel')?>"><i class="sp-btn-book"></i>novel</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="series-list">
                            <div id="tampil">
                                
                            </div>
                        </ul>

                    </div>
                </div>
                <div class="right-side top">

                    <div class="js-milestone-wrap">
                        <div class="milestone-wrap">
                            <header>milestone</header>
                            <div class="contents-warp">
                                <div class="header">Get started</div>
                                <ul class="checklist-wrap">
                                    <li class="check"><i class="sp-checkbox-on ico-check"></i><i class="sp-checkbox-off"></i> Create a series</li>
                                    <li class="check"><i class="sp-checkbox-on ico-check"></i><i class="sp-checkbox-off"></i> Add your first episode</li>
                                    <li><i class="sp-checkbox-on ico-check"></i><i class="sp-checkbox-off"></i> Add or schedule your next episode</li>
                                    <li><i class="sp-checkbox-on ico-check"></i><i class="sp-checkbox-off"></i> Get 25 subscribers</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="help-wrap">
                        <header>Help</header>
                        <ul class="contents">

                            <li>Other questions? <a href="#" class="hps">See all help topics</a></li>
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

        $.ajax({
            type:"POST",
            url: "<?= base_url('fndashboard/get_list') ?>",
            cache: false,
            data:{key:"novel"},
            success: function(respond){
                $("#tampil").html(respond);
                //console.log(respond);
            }
        });

        $("#btnnovel").click(function(){            
                $.ajax({
                    type:"POST",
                    url: "<?= base_url('fndashboard/get_novel') ?>",
                    cache: false,
                    data:{key:"novel"},
                    success: function(respond){
                        $("#tampil").html(respond);
                        //console.log(respond);
                    }

                })
        });

        $("#btncomic").click(function(){            
                $.ajax({
                    type:"POST",
                    url: "<?= base_url('fndashboard/get_comic') ?>",
                    cache: false,
                    data:{key:"comic"},
                    success: function(respond){
                        $("#tampil").html(respond);
                        //console.log(respond);
                    }
                })
        });

        

    })
</script>