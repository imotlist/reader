<footer class="global-footer">
    <div class="panelin">
        <h2>Panel Login</h2>
    </div>
    <div class="gradient"></div>
    <section class="global-footer-section">
        <div class="global-footer-menus">
            <div class="global-footer-icon">
                <ul class="global-footer-icon-items">
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="./"><i class="ico sp-aw-tapamon-pocket-small"></i></a>
                    </li>
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="#" target="_blank"><i class="ico sp-ico-social-fb"></i></a>
                    </li>
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="#" target="_blank"><i class="ico sp-ico-social-twit"></i></a>
                    </li>
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="#" target="_blank"><i class="ico sp-ico-social-tumb"></i></a>
                    </li>
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="#" target="_blank"><i class="ico sp-ico-social-med"></i></a>
                    </li>
                    <li class="global-footer-icon-item">
                        <a class="img-btn clear pan" href="#" target="_blank"><i class="ico sp-ico-social-insta"></i></a>
                    </li>
                </ul>
            </div>
            <div class="global-footer-link">
                <ul class="global-footer-link-items">
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn large global-footer-link-item-btn" href="#">about</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn large global-footer-link-item-btn" href="#" target="_blank">help</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn large global-footer-link-item-btn" href="#" target="_blank">forums</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn large global-footer-link-item-btn" href="#" target="_blank">blog</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn large global-footer-link-item-btn" href="#">contact</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn normal large global-footer-link-item-btn" href="#">Publish</a>
                    </li>
                    <li class="global-footer-link-item">
                        <a class="btn txt-btn normal large global-footer-link-item-btn" href="#">Newsfeed</a>
                    </li>
                </ul>
            </div>
            <div class="global-footer-company">
                <p class="global-footer-company-p">&copy; 2018 Tapas Media.</p>
                <p class="global-footer-company-p">Made with Seoul in California.</p>
                
            </div>
        </div>
    </section>
</footer>
<a href="#!/go-to-top" class="btn img-btn go-to-top js-go-to-top-btn">
    <i class="ico sp-ico-page-top"></i>
</a>
<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.plugin.min.f1cd454.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/sbr/resources/js/panda.min.f1cd454.js"></script>
<script src="<?=base_url('assets')?>/apis.google.com/js/platform.js" async defer></script>
<script src="<?=base_url('assets')?>/checkout.stripe.com/checkout.js"></script>
<script src="<?=base_url('assets')?>/js.braintreegateway.com/web/3.38.1/js/client.min.js"></script>
<script src="<?=base_url('assets')?>/js.braintreegateway.com/web/3.38.1/js/paypal-checkout.min.js"></script>
<script src="<?=base_url('assets')?>/firebasejs/4.7.0/firebase.js"></script>

<!-- End Quantcast tag -->
<script type="text/javascript">
    $(function(){
        $("#btnlogin").click(function(){
            $("#modal-login").attr('style','inline-block');
        });

        $("#btnclose").click(function(){
            location.reload();
        });

        $("#btnsign").click(function(){
            $("#form1").attr('class','sign-menu mod-effect on js-sign-module js-login hidden');
            $("#form2").attr('class','sign-menu mod-effect on js-sign-module js-login');
        });

        $("#btnlog").click(function(){
            $("#form1").attr('class','sign-menu mod-effect on js-sign-module js-login');
            $("#form2").attr('class','sign-menu mod-effect on js-sign-module js-login hidden');
        });
    })
</script>

<div class="modal-backdrop" style="display: none" id="modal-login">
    
    <div class="global-prompt popup mod-sign js-sign-prompt bigEntrance">
        <div class="sign-bg">
            <i class="sp-aw-tapamon-login"></i>
        </div>
        <div style="position: absolute;right: 10px;"><button class="p-btn small" id="btnclose">x</button></div>
        <div class="sign-menu mod-effect on js-sign-module js-login" id="form1">
            <h3 class="sign-label">Log in to Tapas</h3>
            <div class="sign-button-wrap">
                <form action="<?= base_url('author/login') ?>" method="post" class="js-sign-form">
                    <input type="hidden" name="from" value="https://tapas.io/">
                    <div class="sign-input">
                        <label>Username</label>
                        <input type="text" name="username" class="sign-input-text js-txt js-focus" placeholder="username" maxlength="100">
                    </div>
                    <div class="sign-input force mbl">
                        <label>Password</label>
                        <a class="show-password js-show-password"><i class="sp-field-showpw"></i></a>
                        <input type="password" name="password"  class="sign-input-text mod-padding js-txt" placeholder="password" maxlength="100">
                    </div>
                    <div class="sign-btn">
                        <button type="submit" class="p-btn normal static quince">Log in</button>
                    </div>
                </form>
                <p><a class="mint js-effect-btn" data-target=".js-login">Log in</a> or <a class="mint js-effect-btn"  id="btnsign">sign up</a> with email</p>
            </div>
        </div>
        <div class="sign-menu mod-effect on js-sign-module js-login hidden" id="form2">
            <h3 class="sign-label">Sign up</h3>
            <p>Already have a Tapas account? <a class="mint js-effect-btn" id="btnlog">Log in.</a></p>
            <div class="sign-button-wrap">
                <form action="<?= base_url('author/signup') ?>" method="post" class="js-sign-form">
                    <input type="hidden" name="nobot" value="6abe6997-cc86-474f-bee1-887189d5ddfb" autocomplete="off">
                    <div class="sign-input">
                        <label>Username</label>
                        <input type="text" name="username" class="sign-input-text js-txt js-focus" placeholder="username" maxlength="100">
                    </div>
                    <div class="sign-input force mbl">
                        <label>Password</label>
                        <a class="show-password js-show-password"><i class="sp-field-showpw"></i></a>
                        <input type="password" name="password" class="sign-input-text mod-padding js-txt" placeholder="password" maxlength="50">
                    </div>
                    <div class="sign-btn">
                        <button type="submit" class="p-btn normal static mint">Sign up</button>
                    </div>
                </form>
            </div>
            <p class="note">By signing up, you agree to our <a href="#">Terms of Use</a></p>
        </div>
    </div>
</div>

</body>
</html>