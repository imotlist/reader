<?php 
    $log_data = $this->session->userdata('log_data');
    if(!empty($log_data)){
      $uname = $log_data->author_username;
    }
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from tapas.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Dec 2018 01:35:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# comicpanda: http://ogp.me/ns/fb/comicpanda#" itemscope itemtype="http://schema.org/Article">
    <title>Tapas: Read and Discover Comics Online</title>    
    <meta name="description" content="Tapas connects readers with artists to showcase the best webcomics. Discover new comics and artists, or publish your work and reach a larger audience."/>     
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Tapas: Read and Discover Comics Online"/>
    <meta property="og:image" content="<?=base_url('assets')?>/sbr/resources/images/tapastic-logo.html"/>
    <meta property="og:description" content="Tapas connects readers with artists to showcase the best webcomics. Discover new comics and artists, or publish your work and reach a larger audience."/>
    <meta itemprop="name" content="Tapas: Read and Discover Comics Online">
    <meta itemprop="description" content="Tapas connects readers with artists to showcase the best webcomics. Discover new comics and artists, or publish your work and reach a larger audience.">
    <meta itemprop="image" content="<?=base_url('assets')?>/sbr/resources/images/tapastic-logo.html"/>
    <style type="text/css">
        #banner-section {
            background-image: linear-gradient(to bottom, rgba(34, 34, 34, 0.5), rgba(34, 34, 34, 0.5)), url("<?=base_url('assets')?>/sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-image: -moz-linear-gradient(top, rgba(34, 34, 34, 0.5), rgba(34, 34, 34, 0.5)), url("<?=base_url('assets')?>/sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-image: -o-linear-gradient(top, rgba(34, 34, 34, 0.5), rgba(34, 34, 34, 0.5)), url("<?=base_url('assets')?>/sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-image: -ms-linear-gradient(top, rgba(34, 34, 34, 0.5), rgba(34, 34, 34, 0.5)), url("<?=base_url('assets')?>/sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(34, 34, 34, 0.5)), to(rgba(34, 34, 34, 0.5))), url("<?=base_url('assets')?>sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-image: -webkit-linear-gradient(top, rgba(34, 34, 34, 0.5), rgba(34, 34, 34, 0.5)), url("<?=base_url('assets')?>/sbr/a/f5/f849495f-9dfd-4c51-ad7d-27ffe053d86d.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }        
    </style>
    <style type="text/css">
      .panelin{
            display: none;
            position: fixed;
            top: 100px;
            right: 100px;
            width: 300px;
            border: 3px solid #73AD21;
      }
    </style>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta charset="utf-8"/>
<meta name="keywords" content="webcomics, onilne comics, visual stories, graphic novels, webcomic, online comic, novels, webnovels"/>
<meta name="author" content="Tapas"/>


<meta property="fb:admins" content="100003095288120" />
<meta property="fb:app_id" content="283723698368894" />


    <meta property="og:url" content="https://tapas.io/">

<meta name="msvalidate.01" content="96F62F4B64E3A1AD4D13CF909FA18BC7" />

<link href="https://tapas.io/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?=base_url('assets')?>/sbr/resources/images/tapastic-touch-icon.png">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/sbr/resources/css/panda.min.f1cd454.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/sbr/resources/css/panda.sprite.min.f1cd454.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/sbr/resources/css/panda.plugins.min.f1cd454.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/sbr/resources/css/panda.hero.min.f1cd454.css" media="screen" />


<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.plugin.min.f1cd454.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.min.f1cd454.js"></script>

<script type="text/javascript">
  /*<![CDATA[*/
  var pandaConfig = {
      env : 'prod',
      appDomain: '<?=base_url()?>',
      wsDomain: '<?=base_url()?>/:8531',
      PSTOffsetTime: -480,
      today : '2018/12/07 23:57:14',
      prefixResourceSrc : 'resources',
      staticServer : 'https://sbr',
      soundCloudKey : '77ebe8493143e294405e4a380b2515df',
      stripeKey :'',
      currentUrl : '<?=base_url('assets')?>',
      fbId : 283723698368894,
      uname   : '__anonymous__',
      isDesktop : true,
      isTablet : false,
      isMobile : false,
      isNormalView : true,
      isSignedIn: false,
      rTapasIoHost: 'https://r.tapas.io',
      distributorid: '1000000570',
      userId: -1
  };
  /*]]>*/
</script>

    <!-- Venatus Market v3 Long form admanger -->
    <script>
      (function() {
        document.write('<div id="vmv3-ad-manager" style="display:none"></div>');
        document
          .getElementById("vmv3-ad-manager")
          .innerHTML = '<iframe id="vmv3-frm" src="javascript:\'<html><body></body></html>\'" width="0" height="0" data-mode="scan" data-site-id="5b55efda46e0fb0001f55864"></iframe>';
        var loaderFrame = document.getElementById("vmv3-frm");
        var loaderFrameWindow = loaderFrame.contentWindow ? loaderFrame.contentWindow : loaderFrame.contentDocument;
        
      })();
    </script>
    <!-- / Venatus Market v3 -->


</head>
<body class="desktop ">
<!--[if lte IE 9]>
    <div style="background-color:#E98422; height:40px; color:#FFF; text-align:center;font-size:16px;line-height:40px">
        Tapas is not supported in your web browser(Internet Explorer 7, 8 or 9).
        <a href="http://windows.microsoft.com/ie" target="_blank" style="color:#FFD46A">Please update your browser</a>.
    </div>
<![endif]-->
<div id="fb-root"></div>
<div id="ajax-error"></div>
<div class="body-outline">  
<div class="global-nav transparent">
    <div class="global-nav-content clearfix js-nav-content">
        <div class="global-nav-content-left">
            <div class="global-nav-content-item mod-hover">
                <a class="btn img-btn clear global-nav-content-item-btn mod-logo-btn" href="<?=base_url()?>">
                    <i class="ico sp-nav-logo"></i>
                </a>
            </div>
            <div class="global-nav-content-item ">
                <a class="btn txt-btn global-nav-content-item-btn ga-tracking" href="<?=base_url('comic')?>"
                   data-ga-category="top-navigation"
                   data-ga-action="clicked"
                   data-ga-label="comics">Comics</a>
            </div>
            <div class="global-nav-content-item ">
                <a class="btn txt-btn global-nav-content-item-btn ga-tracking" href="<?=base_url('novel')?>"
                   data-ga-category="top-navigation"
                   data-ga-action="clicked"
                   data-ga-label="novels">Novels</a>
            </div>
            <div class="global-nav-content-item ">
                <a class="btn txt-btn global-nav-content-item-btn ga-tracking" href="<?=base_url('creator')?>"
                   data-ga-category="top-navigation"
                   data-ga-action="clicked"
                   data-ga-label="creators">Creators</a>
            </div>
        </div>

        <div class="global-nav-content-right">
            <div class="global-nav-content-right-menus js-nav-menus">

                    <div class="global-nav-content-item">
                        <a class="btn txt-btn quince global-nav-content-item-btn" href="<?=base_url('fndashboard')?>">Publish</a>
                    </div>
                    <?php if(!empty($uname)): ?>
                      <div class="global-nav-content-item js-top-menu" data-id="account" data-virtual-hover="true">
                        <a class="btn img-btn clear global-nav-content-item-img-btn mod-thumbnail js-nav-btn" href="#">
                          <?php if(empty($log_data->author_profile)): ?>
                            <img src="<?=base_url('assets/img/profile/default.png')?>" alt="default" width="30" height="30" class="circle">
                          <?php else: ?>
                            <img src="<?=base_url('assets/img/profile/').$log_data->author_profile?>" alt="<?=$log_data->author_username?>" width="30" height="30" class="circle">
                          <?php endif ?>
                        </a>
                        <div class="global-nav-content-item-list js-event-menu">
                            <ul class="global-nav-content-item-list-body">
                                <li class="nav-item-wrap mod-profile">
                                    <a class="btn img-btn clear nav-profile-btn" href="#">
                                      <?php if(empty($log_data->author_profile)): ?>
                                        <img src="<?=base_url('assets/img/profile/default.png')?>" alt="default" width="40" height="40" class="circle">
                                      <?php else:?>
                                        <img src="<?=base_url('assets/img/profile/').$log_data->author_profile?>" alt="<?=$log_data->author_username?>" width="40" height="40" class="circle">
                                      <?php endif?>
                                        <div class="thumb-overlay"></div>
                                    </a>
                                    <div class="nav-profile">
                                        <a class="txt-btn white nav-profile-name txt-l-f" href="<?=$log_data->author_username?>"><?=$log_data->author_username?></a>
                                        
                                    </div>
                                </li>
                                
                                <li class="nav-item-wrap mod-menu">
                                    <a class="btn mix-btn large clear nav-item-btn" href="<?=base_url('fndashboard')?>">
                                        <i class="ico sp-btn-book"></i>
                                        <label class="btn-label">My Books</label>
                                    </a>
                                </li>
                                <li class="nav-item-wrap mod-menu">
                                    <a class="btn mix-btn large clear nav-item-btn" href="<?=base_url('creator/detail/'.$log_data->author_id)?>" target="_blank">
                                        <i class="ico mod-5 sp-btn-settings"></i>
                                        <label class="btn-label">Profile</label>
                                    </a>
                                </li>
                                <li class="nav-item-wrap mod-menu mod-top-line">
                                    <a class="btn mix-btn normal large clear nav-item-btn" href="<?=base_url('author/logout')?>">
                                        <i class="ico mod-2 sp-btn-logout"></i>
                                        <label class="btn-label">Log out</label>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <?php else: ?>
                      <div class="global-nav-content-item">
                          <a id="btnlogin" class="btn txt-btn normal trans-white global-nav-content-item-btn have-to-sign sign-in js-nav-login" href="#"
                             >Log in</a>
                      </div>             
                    <?php endif ?>
            </div>
            <div class="global-nav-content-right-search">
                <div class="global-nav-search js-search-wrap">
                    <div class="global-nav-search-query">
                        <a class="btn img-btn global-nav-search-btn js-search-open-btn"><i class="ico sp-nav-search"></i></a>
                        <form action="https://tapas.io/search?q=" method="GET" class="global-nav-search-form" id="nav-search-form">
                            <input type="text" class="global-nav-search-input js-search-input"
                                   name="q" autocomplete="off" placeholder="Search" maxlength="25"
                                   data-href="#!/search/list-nav">
                        </form>
                        <a class="btn img-btn global-nav-search-btn mod-close-btn js-search-close-btn"><i class="ico sp-btn-x"></i></a>
                    </div>
                    <div class="global-nav-search-result js-search-result">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>