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
                    <h1 class="section-title">Edit novel series</h1>
                    <div class="input-form-wrap">
                        <form id="" action="#" method="post">
                            <div class="row-label">title</div>
                            <div class="row-input">
                                <input id="title" name="title" class="text js-em-valid" type="text" value="<?=$novel->novel_judul?>" autocomplete="false">
                            </div>
                            <div class="row-label">description</div>
                            <div class="row-input">
                                <textarea id="description" name="description" class="text textarea" autocomplete="false"><?=$novel->novel_desc?></textarea>
                            </div>
                            <div class="row-merge">
                                <div class="thumb-wrap mod-wider">
                                    <div class="row-label">thumbnail
                                        <div class="tip">300 x 300px</div>
                                    </div>
                                    <div class="inner ib">
                                        <div class="fake-file-wrap mod-thumb series">
                                            <input type="file" class="thumb-file file series" id="image" name="file">
                                        </div>
                                        <div class="thumb-preview-wrap">

                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="series thumbnail" class="js-thumb observer thumb preview hidden" width="200" height="200">

                                            <div class="default-bg">
                                                <i class="sp-ico-upload-big"></i>
                                                <span>choose file...</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="thumbnail-guide mod-wide pull-right">
                                        <p class="title">Thumbnail Tips</p>
                                        <p class="desc">Thumbnails must be a PNG, JPG, or GIF under 2 MB, and safe for all ages.</p>
                                        <p class="desc">Not an artist? Try using a royalty free image, working with a comic creator from the Tapas community, or creating your own with <a href="https://www.canva.com" target="_blank" class="bold">Canva.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row-label">genre
                                <div class="tip">(select the genre that best describes your series)</div>
                            </div>
                            <div class="row-input">
                                <ul class="dashboard-categories">

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Comedy'): ?>
                                                <input type="radio" class="p-radio" id="genre12" name="genres" value="Comedy" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre12" name="genres" value="Comedy">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre12">Comedy
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Fantasy'): ?>
                                                <input type="radio" class="p-radio" id="genre11" name="genres" value="Fantasy" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre11" name="genres" value="Fantasy">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre11">Fantasy
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Horror'): ?>
                                                <input type="radio" class="p-radio" id="genre19" name="genres" value="Horror" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre19" name="genres" value="Horror">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre19">Horror
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Mystery'): ?>
                                                <input type="radio" class="p-radio" id="genre17" name="genres" value="Mystery" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre17" name="genres" value="Mystery">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre17">Mystery
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Non-fiction'): ?>
                                                <input type="radio" class="p-radio" id="genre14" name="genres" value="Non-fiction" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre14" name="genres" value="Non-fiction">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre14">Non-fiction
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Romance'): ?>
                                                <input type="radio" class="p-radio" id="genre16" name="genres" value="Romance" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre16" name="genres" value="Romance">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre16">Romance
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Science Fiction'): ?>
                                                <input type="radio" class="p-radio" id="genre15" name="genres" value="Science Fiction" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre15" name="genres" value="Science Fiction">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre15">Science Fiction
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="radio-wrap">
                                            <?php if($novel->novel_genre == 'Slice Of Life'): ?>
                                                <input type="radio" class="p-radio" id="genre20" name="genres" value="Slice Of Life" checked>
                                            <?php else: ?>
                                                <input type="radio" class="p-radio" id="genre20" name="genres" value="Slice Of Life">
                                            <?php endif ?>
                                            <label class="p-radio-label" for="genre20">Slice of Life
                                                <div class="inner"></div>
                                                <div class="switch"></div>
                                            </label>
                                        </div>
                                    </li>
                                    <input id="genreinput" type="hidden" value="<?= $novel->novel_genre ?>">
                                    <input id="novelid" type="hidden" value="<?=$novel->novel_id?>">
                                </ul>
                                <div class="error-message hidden">You may choose a genre.</div>
                            </div>
                            <div class="input-form-footer">
                                <a href="#" class="mix-btn gradient mint large" id="btnsubmit"><i class="sp-btn-check"></i><span class="btn-label">create series</span></a>
                            </div>
                            <div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-side top">

                    <div class="help-wrap">
                        <header>Help</header>
                        <ul class="contents">
                            <li>Got a question? <a href="#" target="_blank">We’re here to help!</a></li>
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

        $("input[name='genres']").change(function(){
            $("#genreinput").val($(this).val());
            
        });        

        $("#btnsubmit").click(function(){            
            var id = $("#novelid").val(); 
            var title = $("#title").val(); 
            var desc = $("#description").val(); 
            var genre = $("#genreinput").val(); 
            var extension=$('#image').val().replace(/^.*\./, '');
            
                $.ajax({
                    type:"POST",
                    url: "<?= base_url('series/updateNovel') ?>",
                    cache: false,
                    data:{id:id,title:title,desc:desc,genre:genre,ext:extension},
                    success: function(respond){
                        window.location.href = "<?=base_url('fndashboard')?>";
                    }
                });            

        });

    })
</script>