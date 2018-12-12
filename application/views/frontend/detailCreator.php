<?php 
    $log_data = $this->session->userdata('log_data');
    if(!empty($log_data)){
      $uname = $log_data->author_username;
    }
?>

<br>
<br>
<br>
<div class="page-wrap clearfix" id="boks">
    <div id="formEdit" style="position: fixed; top: 100px;left:200px;width: 500px; background-color: #fff;display: none">

        <h2>Edit Profile</h2>
        <form method="post" action="<?=base_url('home/updateProfil')?>">
            <input type="hidden" name="id" value="<?=$c->author_id?>">
            <label>Nick Name</label>
            <input type="text" name="nick" value="<?= $c->author_nickname ?>">
            <label>Full Name</label>
            <input type="text" name="full" value="<?= $c->author_full_name ?>">
            <label>Email</label>
            <input type="email" name="email" value="<?= $c->author_email ?>">
            <br>
            <button type="submit" class="mix-btn gradient mint large" id="btnedit">
                <i class="sp-btn-check"></i><span class="btn-label">Ubah</span>
            </button>
        </form>
    </div>
    <div class="global-page" id="con">
        <header class="global-page-header">

            <h1 class="page-header">Creator
                <?php if(!empty($log_data)): ?>
                    <button type="submit" class="mix-btn gradient mint large" id="btnedito">
                        <i class="sp-btn-check"></i><span class="btn-label">Edit</span>
                    </button>
                <?php endif ?>
            </h1>
            <div>Nick Name : <?= $c->author_nickname ?></div>
            <br>
            <div>Full Name : <?= $c->author_full_name ?></div>
            <br>
            <div>Email : <?= $c->author_email ?></div>
            <br>
            <div>Birth Date : <?= $c->author_birthdate ?></div>

            <div style="position: absolute; right: 0;top: 0">
                <?php if(!empty($c->author_profile)): ?>
                <img src="<?=base_url('assets').'/img/profile/'.$c->author_profile?>" width="220" height="220">
                <?php else: ?>
                    <img src="<?=base_url('assets').'/img/profile/default.png'?>" width="220" height="220">
                <?php endif ?>
                <?php if(!empty($log_data)): ?>
                    <form method="post" enctype="multipart/form-data" action="<?=base_url('home/gantiFoto')?>">
                        <input type="hidden" name="id" value="<?=$c->author_id?>">
                        <input type="hidden" name="uname" value="<?=$c->author_username?>">
                        <input type="file" name="file">
                        <button type="submit">Upload</button>    
                    </form>
                <?php endif ?>
            </div>
        </header>
        <br>
        <br>
        <hr>
        <h3>Novel List</h3>
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
        <h3>Comic List</h3>
        <section class="page-section" id="show">

            <ul class="content-list-wrap premium">
                <?php foreach($comic as $n): ?>
                    <li class="content-item premium">
                        <div class="item-thumb-wrap">
                            <a class="thumb-wrap" href="<?=base_url('series/comic/').$n->comic_id?>">

                                <img src="<?=base_url('assets').'/img/creator/'.$n->author_username.'/comic/'.$n->comic_cover?>" width="220" height="330">

                                <div class="thumb-overlay"></div>
                            </a>
                        </div>
                        <a class="preferred title" href="<?=base_url('series/comic/').$n->comic_id?>"><?=$n->comic_judul?></a>
                        <a class="sub-title" href="<?=base_url('author/').$n->author_username?>"><?=$n->author_nickname?></a>

                        <a class="tag badge" style="background-color: #86B666;" href="#"><?=$n->comic_genre?></a>

                    </li>                
                <?php endforeach ?>
            </ul>

        </section>

    </div>

    <iframe src="about:blank" id="hidden-iframe" name="hidden-iframe"></iframe>
</div>
<script type="text/javascript">
    $(function(){
        $("#btnedito").click(function(){            
            $("#formEdit").show();     
            $("#con").hide();   
            $("#boks").attr('style','height:1000px');               

        });

    })
</script>
