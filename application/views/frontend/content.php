<div class="global-tongue-feedback hidden">
    <div class="feedback-message"></div>
</div>

    <div class="page-wrap clearfix " id="page-wrap">
  <section class="global-header-banner" id="banner-section">
        <div class="inner">
            <div class="banner-wrap">
                <span class="type">Spotlight</span>
                <p class="preferred title">US.</p>
                
                    <p class="author"><span>by</span> Daniella Emeline</p>
                
                <p class="desc">All Wendy want is to be with Lynn but all Lynn want is to find a perfect boyfriend.</p>
            </div>
        </div>
        <a href="#" class="banner-link ga-tracking"
           data-ga-category="hp"
           data-ga-action="main-topbanner-clicked"
           data-ga-label="maintopbanner"></a>
    </section>

<section class="section-row" id="promo-section">
    <div class="inner">
        <i class="ico sp-aw-ribbon-small"></i>
        <a class="app-btn andro"
           href="#"
           target="_blank">
            <i class="sp-btn-googleplay-180"></i>
        </a>
        <a class="app-btn ios" href="#">
            <i class="sp-btn-appstore-180"></i>
        </a>
    </div>
</section>   
        
        <section class="section-row">
            <div class="inner">
                <div class="tp-carousel">
                    <div class="tp-carousel-inner">
                        <div class="tp-carousel-item active">
                          <ul class="content-list-wrap">
                              
                                  <li class="content-item-pair">
                                      <div class="item-thumb-wrap">
                                          <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                             data-ga-action="big-tile-clicked" data-ga-label="big-tile-image-604"
                                             href="<?=base_url('comic')?>">
                                              <img src="<?=base_url('assets')?>/sbr/a/5f/9e3f4ec1-f9b3-485a-8d03-7dac9543702f.jpg" width="460" height="230">
                                              
                                              <div class="thumb-overlay"></div>
                                          </a>
                                      </div>
                                      
                                  </li>
                              
                                  <li class="content-item-pair">
                                      <div class="item-thumb-wrap">
                                          <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                             data-ga-action="big-tile-clicked" data-ga-label="big-tile-image-605"
                                             href="<?=base_url('novel')?>">
                                              <img src="<?=base_url('assets')?>/sbr/a/e2/c327c9c3-6f33-44aa-b95d-874a4943f8d6.jpg" width="460" height="230">
                                              
                                              <div class="thumb-overlay"></div>
                                          </a>
                                      </div>
                                      
                                  </li>
                              
                          </ul>
                        </div>
                        
                    </div>
                    
                        <a class="nav-btn js-nav-btn prev dark hidden" href="#prev" data-direction="prev">
                            <i class="ico sp-ico-prev"></i>
                        </a>
                        <a class="nav-btn js-nav-btn next dark hidden"
                           href="#next" data-direction="next">
                            <i class="ico sp-ico-next"></i>
                        </a>                    
                </div>
            </div>
        </section>
    
        
        <section class="section-row">
            <div class="inner">
                <div class="section-title-wrap">
                    <h1 class="section-title">New Novels</h1>
                    <div class="more-btn"><a href="<?=base_url('novel')?>">See all</a></div>
                    <p class="section-desc">There's New Come Novels
                    </p>
                </div>
                <div class="tp-carousel">
                    <div class="tp-carousel-inner">
                        
                            <div class="tp-carousel-item active">
                                <ul class="content-list-wrap">
                                    <?php foreach($novel as $n): ?>
                                        <li class="content-item">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="popular-clicked" data-ga-label="image-124155"
                                                   href="<?=base_url('series/novel/').$n->novel_id?>">
                                                    <img src="<?=base_url('assets').'/img/creator/'.$n->author_username.'/novel/'.$n->novel_cover?>" width="172" height="172">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            <a class="preferred title ga-tracking" data-ga-category="hp" data-ga-action="popular-clicked"
                                               data-ga-label="title-124155"
                                               href="<?=base_url('novel/').$n->novel_id?>"><?= $n->novel_judul ?></a>
                                            <a class="sub-title" href="<?=base_url('author/').$n->author_username?>"><?= $n->author_nickname ?></a>
                                            <a class="tag "
                                               href="<?=base_url('genre/').$n->novel_genre?>"><?= $n->novel_genre ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        
                            <div class="tp-carousel-item ">
                                <ul class="content-list-wrap">
                                    
                                        <li class="content-item">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="popular-clicked" data-ga-label="image-124802"
                                                   href="https://tapas.io/series/pitbullandmew">
                                                    <img src="<?=base_url('assets')?>/sbr/sa/b6/74f33af5-ab34-46fe-9aff-e8a5079e6d4d_m.jpg" width="172" height="172">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            <a class="preferred title ga-tracking" data-ga-category="hp" data-ga-action="popular-clicked"
                                               data-ga-label="title-124802"
                                               href="https://tapas.io/series/pitbullandmew">Pit Bull and Mew</a>
                                            <a class="sub-title" href="https://tapas.io/MAFKEUNTAPAS">MAF KEUN</a>
                                            <a class="tag "
                                               href="https://tapas.io/comics?browse=POPULAR&amp;genre=1">Slice of Life</a>
                                        </li>
                                    
                                        <li class="content-item">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="popular-clicked" data-ga-label="image-119053"
                                                   href="https://tapas.io/series/US_comic">
                                                    <img src="<?=base_url('assets')?>/sbr/sa/1b/b1fd1342-cce3-4dc3-bfbd-0df1e3c5101f_m.jpg" width="172" height="172">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            <a class="preferred title ga-tracking" data-ga-category="hp" data-ga-action="popular-clicked"
                                               data-ga-label="title-119053"
                                               href="https://tapas.io/series/US_comic">US.</a>
                                            <a class="sub-title" href="https://tapas.io/daniellaemeline">Daniella Emeline</a>
                                            <a class="tag "
                                               href="https://tapas.io/comics?browse=POPULAR&amp;genre=5">Romance</a>
                                        </li>
                                    
                                </ul>
                            </div>
                        
                    </div>
                    <a class="nav-btn js-nav-btn prev dark hidden" href="#prev" data-direction="prev">
                        <i class="ico sp-ico-prev"></i>
                    </a>
                    <a class="nav-btn js-nav-btn next dark "
                       href="#next" data-direction="next">
                        <i class="ico sp-ico-next"></i>
                    </a>
                </div>
            </div>
        </section>
        
        <section class="section-row">
            <div class="inner">
                
                <div class="tp-carousel">
                    <div class="tp-carousel-inner">
                            <div class="tp-carousel-item active">
                                <ul class="content-list-wrap">
                                    
                                        <li class="content-item-pair">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="big-tile-clicked" data-ga-label="big-tile-image-802"
                                                   href="#">
                                                    <img src="<?=base_url('assets')?>/sbr/a/dd/923a7ce6-5ff0-4cbf-b9a3-41b23d4f5dd6.jpg" width="460" height="230">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    
                                        <li class="content-item-pair">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="big-tile-clicked" data-ga-label="big-tile-image-746"
                                                   href="#">
                                                    <img src="<?=base_url('assets')?>/sbr/a/99/0adb01ea-e7cb-4c53-bcf8-a075383754a2.jpg" width="460" height="230">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            
                                        </li>
                                    
                                </ul>
                            </div>
                        
                    </div>
                    
                        <a class="nav-btn js-nav-btn prev dark hidden" href="#prev" data-direction="prev">
                            <i class="ico sp-ico-prev"></i>
                        </a>
                        <a class="nav-btn js-nav-btn next dark "
                           href="#next" data-direction="next">
                            <i class="ico sp-ico-next"></i>
                        </a>
                    
                </div>
            </div>
        </section>
    
        
        <section class="section-row">
            <div class="inner">
                
                    <div class="section-title-wrap">
                        <h1 class="section-title force mbn">New Comics</h1>
                        <div class="more-btn"><a href="<?=base_url('comic')?>">See all</a></div>
                        <p class="section-desc">There's New Comes Comics</p>
                    </div>
                
                <div class="tp-carousel">
                    <div class="tp-carousel-inner">                
                          <div class="tp-carousel-item active">
                                <ul class="content-list-wrap">                                    
                                    <?php foreach($comic as $c): ?>
                                        <li class="content-item">
                                            <div class="item-thumb-wrap">
                                                <a class="thumb-wrap ga-tracking" data-ga-category="hp"
                                                   data-ga-action="popular-clicked" data-ga-label="image-124155"
                                                   href="<?=base_url('series/comic/').$c->comic_id?>">
                                                    <img src="<?=base_url('assets').'/img/creator/'.$c->author_username.'/comic/'.$c->comic_cover?>" width="172" height="172">
                                                    
                                                    <div class="thumb-overlay"></div>
                                                </a>
                                            </div>
                                            <a class="preferred title ga-tracking" data-ga-category="hp" data-ga-action="popular-clicked"
                                               data-ga-label="title-124155"
                                               href="<?=base_url('novel/').$n->novel_id?>"><?= $c->comic_judul ?></a>
                                            <a class="sub-title" href="<?=base_url('author/').$n->author_username?>"><?= $c->author_nickname ?></a>
                                            <a class="tag "
                                               href="<?=base_url('genre/').$n->novel_genre?>"><?= $c->comic_genre ?></a>
                                        </li>
                                    <?php endforeach; ?>

                                    
                                </ul>
                            </div>
                        
                    </div>
                    
                        <a class="nav-btn js-nav-btn prev dark hidden" href="#prev" data-direction="prev">
                            <i class="ico sp-ico-prev"></i>
                        </a>
                        <a class="nav-btn js-nav-btn next dark "
                           href="#next" data-direction="next">
                            <i class="ico sp-ico-next"></i>
                        </a>
                    
                </div>
            </div>
        </section>
    
        
        <section class="section-row" id="creator-section">
            <div class="inner">
                <div class="banner-wrap">
                    <p class="title">are you a creator?</p>
                    <p class="desc">
                        Become a part of the best community of webcomic and web novel<br>
                        creators in the world. Ready to publish your story?
                    </p>
                    <a class="p-btn high static quince" href="https://tapas.io/publishing"><label class="btn-label dark">learn more</label></a>
                </div>
            </div>
            <div class="section-layer"></div>
        </section>

        <iframe src="about:blank" id="hidden-iframe" name="hidden-iframe"></iframe>
    </div>
</div>

    



