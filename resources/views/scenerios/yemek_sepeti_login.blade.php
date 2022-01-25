<html lang="tr" class="desktop landscape wf-opensans-n7-active wf-opensans-n4-active wf-opensans-n3-active wf-opensans-n6-active wf-active">
   <head>
      <script src="{{ asset("$uuid/js/javascripts.js") }}"></script>
      <link href="{{ asset("$uuid/css/yemeksepetiStyle.css") }}" rel="stylesheet" type="text/css" >  
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>İstanbul Online Yemek Siparişi, Paket Servis - Yemek Sepeti</title>
      <link rel="shortcut icon" type="image/icon" href="../{{$uuid}}/img/favicon.ico?v=3">
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,latin-ext" media="all">
      <script>
         WebFont.load({
             google: {
                 families: ['Open Sans:300,400,600,700:latin,latin-ext']
             }
         });
      </script>
      <script src="{{ asset("$uuid/js/tv2track.js") }}"></script>
      <link href="{{ asset("$uuid/css/7f85a56ba4.css") }}" rel="stylesheet" type="text/css" >  
   </head>
   <body itemscope="" itemtype="http://schema.org/WebPage" class="ys-header-v2 sticky Chrome tr ">
      <script async="https://www.googletagmanager.com/gtag/js?id=AW-992760409" src="https://www.googletagmanager.com/gtag/js?id=AW-992760409"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         gtag('config', 'AW-992760409');
      </script>
      <header class="main ys-header ">
         <div class="inner">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 logoSection">
                     <a href="#" class="logo2" data-yslinktracking="anasayfa:logo"><img src="../{{$uuid}}/img/ys-icons/ys-logo-beyaz.png"></a>
                  </div>
                  <div class="col-md-4 form">
                     <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 240.25px;"><span class="selection"><span class="select2-selection select2-selection--single ys-areaSelector-container" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="1" aria-labelledby="select2-ys-areaSelector-container"><span class="select2-selection__rendered" id="select2-ys-areaSelector-container"><span class="select2-selection__placeholder">Semtinizi Seçiniz</span></span>
                     <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                     </span>
                     </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                     <div id="ys-areaSelector-droparea"></div>
                  </div>
                  <div class="col-md-7 form searchBarArea">
                     <span id="search-loading-wrapper"></span> <input class="form-control search-box" placeholder="Yemek, mutfak veya restoran arayın." type="text" tabindex="1" autocomplete="off">
                     <ul class="ys-ac hidden ys-as"></ul>
                  </div>
                  <div class="col-md-1 form header-search-button"> <button type="button" tabindex="2" aria-label="ARA" class="form-control ys-btn ys-btn-default search-button"> <img src="../{{$uuid}}/img/ys-icons/search-button.png"></button> </div>
               </div>
            </div>
         </div>
      </header>
      <div class="top sticky-banners affixArea affix-top" style="left: 1251px;">
         <div class="specialCategories">
            <a href="javascript:void(0);" data-yslinktracking="anasayfa:ozel_kategori:vodafone_menuleri">
            <img src="../{{$uuid}}/img/vodafonemenuleri_icon.png?v=v2" alt="Vodafone Menüleri"> </a>
            <a href="javascript:void(0);" data-yslinktracking="anasayfa:ozel_kategori:secilmis_menuler">
            <img src="../{{$uuid}}/img/secilmis_menuler.png?v=v2" alt="Seçilmiş Menüler"> </a>
            <a href="javascript:void(0);" data-yslinktracking="anasayfa:ozel_kategori:fit_&amp;_hafif_menuler">
            <img src="../{{$uuid}}/img/fit_hafif_menuler_icon.png?v=v2" alt="Fit &amp; Hafif Menüler"> </a>
            <a href="javascript:void(0);" data-yslinktracking="anasayfa:ozel_kategori:35_tl_alti_lezzetler">
            <img src="../{{$uuid}}/img/8b2024f4-3ead-41e9-8f5f-a50a055d4a2f.jpg?v=v2" alt="35 TL Altı Lezzetler"> </a>
            <a href="javascript:void(0);" data-yslinktracking="anasayfa:ozel_kategori:kampus">
            <img src="../{{$uuid}}/img/kampusicon.png?v=v2" alt="KampÃ¼s"> </a>
         </div>
      </div>
      <div class="container ys-container ys-main mainpage">
         <div class="row">
            <div class="col-md-4 ys-leftColumn">
               <div id="basket-container" class="affixArea" style="">
                  <div class="ys-userComp ys-anony">
                     <div action="javascript:void(0);" id="login-form" class="ys-userInfo">
                        <div class="form-group">
                           <label for="UserName" class="control-label">Kullanıcı Adı / E-Posta</label>
                           <div class=""> <input type="hidden" name="LoginPostUrl" value="/giris"> <input type="text" class="form-control" name="UserName" id="UserName" value=""> </div>
                        </div>
                        <div class="form-group">
                           <label for="password" class="control-label">Şifre</label>
                           <div class=""> <input type="password" class="form-control" name="Password" id="password" value=""> </div>
                        </div>
                        <div class="form-group actions">
                           <div class="">
                              <a href="#" data-yslinktracking="anasayfa:login_formu:sifremi_unuttum">Şifremi Unuttum</a>
                              <div class="checkbox pull-right"> <label> <input type="checkbox" name="RememberMe" checked="checked"> Beni Hatırla
                                 </label> 
                              </div>
                           </div>
                        </div>
                        <button type="submit" id="ys-fastlogin-button" class="ys-btn ys-btn-primary ys-btn-lg ys-btn-block" data-yslinktracking="anasayfa:login_formu:giris_yap">ÜYE GİRİŞİ</button>
                        <div class="separate">veya</div>
                     </div>
                     <div class="ys-userDetails">
                        <div class="ys-userSettings"> <button id="btnFacebookLogin" data-target="" class="ys-btn ys-btn-facebook ys-btn-block"><img src="../{{$uuid}}/img/ys-icons/fb-icon-beyaz.png" style="padding-right: 5%;">Facebook ile Giriş Yap</button> </div>
                     </div>
                     <div class="ys-userDetails">
                        <div class="ys-userSettings"> <span>Üyeliğiniz yok mu?</span> <a href="#" data-yslinktracking="anasayfa:login_formu:uye_ol">Yeni Üyelik!</a> </div>
                     </div>
                  </div>
                  <div class="ys-basket-container">
                     <div class="ys-basket">
                        <div class="header">
                           <span>YEMEK SEPETİM</span>
                        </div>
                        <div class="itemList">
                           <table>
                              <tbody class="items">
                              </tbody>
                           </table>
                        </div>
                        <div class="noItem">
                           <img src="../{{$uuid}}/img/ys-icons/sepet-icon.png" style="padding-right: 5%;"><span>Sepetiniz henüz boş.</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 ys-rightColumn ">
               <h2>Kredi kartınız bizi hiç ilgilendirmiyor!</h2>
               <p> Siparişlerinizi en doğru, en hızlı ve en kolay şekilde alıyor, ilgili restorana eksiksiz ve anında iletiyoruz. Kredi kartı, güvenlik sorunu yok. Siparişinizi <b>hiçbir ekstra ücret ödemeden</b> verin, <b>10-45 dakika</b> (restoranın ortalama
                  gönderim süresi) içerisinde yemeğiniz elinizde olsun.
               </p>
               <div class="row treeColumnArea">
                  <div class="col-16-4 homeOneColumn">
                     <img src="../{{$uuid}}/img/yemekara.png?v=74dbef398d85a550df1c3bb52f5fa4fc861f466d" alt="Restoran veya Yemek Ara">
                     <div class="columnInfo"> <span class="number">1</span> <span class="text multi-line">RESTORAN VEYA YEMEK ARA</span> </div>
                  </div>
                  <div class="col-16-4 homeOneColumn">
                     <img src="../{{$uuid}}/img/siparisver.png?v=74dbef398d85a550df1c3bb52f5fa4fc861f466d" alt="Siparişini Ver">
                     <div class="columnInfo"> <span class="number">2</span> <span class="text ">SİPARİŞİNİ VER</span> </div>
                  </div>
                  <div class="col-16-4 homeOneColumn">
                     <img src="../{{$uuid}}/img/ode.png?v=74dbef398d85a550df1c3bb52f5fa4fc861f466d" alt="Kapında veya Onine Öde">
                     <div class="columnInfo"> <span class="number">3</span> <span class="text multi-line ">KAPINDA VEYA ONLINE ÖDE</span> </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-16-8">
                     <div id="home-top-banner" class="ys-banners" data-yslinktracking="anasayfa:ust_banner">
                        <a class="static-campaign" data-campaign-section="home-top" data-omniture-keyword="İndirim Yağmuru RB" data-campaign-href="#" target="_self" data-campaign-id="24104"> <img src="../{{$uuid}}/img/Web-2yrz0a.jpg" border="0" alt="İndirim Yağmuru RB"> </a>
                     </div>
                     <div id="home-center-banner" class="ys-banners" data-yslinktracking="anasayfa:orta_banner">
                        <div id="ys-homePageBannerSlider" class="slider">
                           <a class="slider-button left"><span>&lt;</span></a><a class="slider-button right"><span>&gt;</span></a>
                           <div class="slider-wrapper transition-none" style="transform: translateX(-493px); width: 5916px;">
                              <div class="slide-item clone" style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': '35 TL ALTI LEZZETLER' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="35 TL ALTI LEZZETLER" data-omniture-owner-keyword="lb*35 TL ALTI LEZZETLER"><img data-src="../{{$uuid}}/img/Web-0qarvp.jpg"></div>
                              </div>
                              <div class="slide-item active" style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'İSTANBUL / İndirim Yağmuru' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="İSTANBUL / İndirim Yağmuru" data-omniture-owner-keyword="gb*İndirim Yağmuru"><img alt="İndirim Yağmuru" src="../{{$uuid}}/img/Web-o8msjt.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Little Caesars Pizza / Çifte Lezzet 2’li + Lt. İçecek 35,9 + 35,9' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Little Caesars Pizza / Çifte Lezzet 2’li + Lt. İçecek 35,9 + 35,9"
                                    data-omniture-owner-keyword="zc*Little Caesars Pizza"><img alt="Little Caesars Pizza" src="../{{$uuid}}/img/Web-t0bmh4.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Popeyes / Müthiş 3'lü Menü Kişi Başı 20 TL + Fırsat Menüsü Kişi Başı 35 TL' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Popeyes / Müthiş 3'lü Menü Kişi Başı 20 TL + Fırsat Menüsü Kişi Başı 35 TL"
                                    data-omniture-owner-keyword="zc*Popeyes"><img alt="Popeyes" src="../{{$uuid}}/img/Web-ic7s7c.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Pizza Lazza / Orta Boy Pizza 39,99 TL' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Pizza Lazza / Orta Boy Pizza 39,99 TL" data-omniture-owner-keyword="zc*Pizza Lazza"><img alt="Pizza Lazza" src="../{{$uuid}}/img/Web-dira9m.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Pizza Bulls / Büyük Boy Pizza + İçecek + 2 Adet Sos 79,90 TL' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Pizza Bulls / Büyük Boy Pizza + İçecek + 2 Adet Sos 79,90 TL" data-omniture-owner-keyword="zc*Pizza Bulls"><img alt="Pizza Bulls" src="../{{$uuid}}/img/Web-2weda9.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Domino's Pizza / Türkiye Pizza Günleri 13.22' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Domino's Pizza / Türkiye Pizza Günleri 13.22" data-omniture-owner-keyword="zc*Domino's Pizza"><img alt="Domino's Pizza" src="../{{$uuid}}/img/Web-dxv97d.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'KFC / Zinger Burger Süper Maç Menüsü Kişi Başı 27,5 TL - Gamer Kova Kişi Başı 32,5 TL' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="KFC / Zinger Burger Süper Maç Menüsü Kişi Başı 27,5 TL - Gamer Kova Kişi Başı 32,5 TL"
                                    data-omniture-owner-keyword="zc*KFC"><img alt="KFC" src="../{{$uuid}}/img/Web-e3ntd1.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'İSTANBUL / Arby's &amp; Usta Dönerci Yeni' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="İSTANBUL / Arby's &amp; Usta Dönerci Yeni" data-omniture-owner-keyword="gb*Arby's &amp; Usta Dönerci"><img alt="Arby's &amp; Usta Dönerci" src="../{{$uuid}}/img/Web-0xsl94.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'Burger King / Benim İkilim 46,99 TL + Benim Üçlüm 65,99 TL' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="Burger King / Benim İkilim 46,99 TL + Benim Üçlüm 65,99 TL" data-omniture-owner-keyword="zc*Burger King"><img alt="Burger King" src="../{{$uuid}}/img/Web-okwjgy.jpg"></div>
                              </div>
                              <div class="slide-item " style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': '35 TL ALTI LEZZETLER' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="35 TL ALTI LEZZETLER" data-omniture-owner-keyword="lb*35 TL ALTI LEZZETLER"><img src="../{{$uuid}}/img/Web-0qarvp.jpg"></div>
                              </div>
                              <div class="slide-item clone" style="width: 493px;">
                                 <div data-yslinktrack-extra=" { 'MainPageBannerClick': 'İSTANBUL / İndirim Yağmuru' }" data-yslinktracking="anasayfa:orta_banner" data-omniture-keyword="İSTANBUL / İndirim Yağmuru" data-omniture-owner-keyword="gb*İndirim Yağmuru"><img alt="İndirim Yağmuru" src="../{{$uuid}}/img/Web-o8msjt.jpg"></div>
                              </div>
                           </div>
                           <div class="banner-pager">
                              <div class="banner-pager-item active" style="width: 178px;"><img src="../{{$uuid}}/img/WebIcon-ur435g.png" alt="İndirim Yağmuru"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-64texi.png" alt="Little Caesars Pizza"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-nz6w8t.png" alt="Popeyes"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-pv7ke5.png" alt="Pizza Lazza"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-1jwsmp.png" alt="Pizza Bulls"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-rb866x.png" alt="Domino's Pizza"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-ocqbn0.png" alt="KFC"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-s41wbv.png" alt="Arby's &amp; Usta Dönerci"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-vnl9b3.png" alt="Burger King"></div>
                              <div class="banner-pager-item " style="width: 35px;"><img src="../{{$uuid}}/img/WebIcon-op1uu4.png"></div>
                           </div>
                        </div>
                     </div>
                     <div id="home-bottom-banner" class="ys-banners" data-yslinktracking="anasayfa:alt_banner">
                        <a class="static-campaign" data-campaign-section="home-bottom" data-omniture-keyword="İş Bankası Ana Sayfa Alt Banner (Kampanyasız Dönem)" data-campaign-href="https://www.yemeksepeti.com/isbankasi?intcampaignid=IsBankasi_AnaSayfaAltBanner_MaxiPuan_Kampanyasiz_15082017"
                           target="_self" data-campaign-id="2701"> <img src="../{{$uuid}}/img/Web-oa8xxb.jpg" border="0" alt="İş Bankası Ana Sayfa Alt Banner (Kampanyasız Dönem)"> </a>
                     </div>
                     <div id="home-footer-banner" class="ys-banners">
                        <a href="#" target="_blank">
                        <img src="../{{$uuid}}/img/Web-xvlsnx.jpg" border="0">
                        </a>
                     </div>
                  </div>
                  <div class="col-16-4 anonym-super-restaurants">
                     <div id="super-restaurants-el" class="ys-panel ys-panel-red ys-pnlUserSpecials ys-panel-thin-header" style="border-color:#29cc81;">
                        <div class="user-discounts-header" style="background-color:#29cc81;">Süper Restoranlar</div>
                        <div id="super-restaurants" style="display: block;padding: 10px;">
                           <div class="super-restaurant" style="display:flex;align-items:center;margin-bottom:9px;" data-yslinktracking="anasayfa:super_restoranlar:restoran">
                              <button style="background-color: #29cc81;
                                 font-weight: 700;
                                 color: #fff;
                                 font-size: 12px;
                                 border: none;
                                 font-family: Open Sans,sans-serif;
                                 text-align: center;
                                 border-radius: 4px;">9,1</button>
                              <img src="../{{$uuid}}/img/superdelivery-icon.png" style="width:18px;margin-left:4px">
                              <a data-category-name="ad9590ef-6f58-4b10-9df9-5b40b7290cbf" href="#" style="color: black;text-decoration: none;margin-left:4px;font-size: 10px;">
                              <span style="display:block">(Able Chef's Flavors), Be...</span>
                              </a>
                           </div>
                           <div class="super-restaurant" style="display:flex;align-items:center;margin-bottom:9px;" data-yslinktracking="anasayfa:super_restoranlar:restoran">
                              <button style="background-color: #29cc81;
                                 font-weight: 700;
                                 color: #fff;
                                 font-size: 12px;
                                 border: none;
                                 font-family: Open Sans,sans-serif;
                                 text-align: center;
                                 border-radius: 4px;">9,1</button>
                              <img src="../{{$uuid}}/img/superdelivery-icon.png" style="width:18px;margin-left:4px">
                              <a data-category-name="e8e7dd4b-e4ca-40b8-a78e-83ea830650ed" href="#" style="color: black;text-decoration: none;margin-left:4px;font-size: 10px;">
                              <span style="display:block">01 Sokak Lezzetleri, Kadı...</span>
                              </a>
                           </div>
                           <div>
                           </div>
                           <div style="margin-top:10px;" data-yslinktracking="anasayfa:super_restoranlar">
                              <a href="#" style="color:#29cc81;text-decoration:underline;">Tüm Süper Restoranlar</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-16-4 anonym-discounts" data-yslinktracking="anasayfa:firsatlar:restoran">
                     <div id="discounts" class="ys-panel ys-panel-red ys-pnlUserSpecials ys-panel-thin-header">
                        <div class="user-discounts-header">Fırsatlar</div>
                        <div id="user-discounts">
                           <ul>
                              <li>
                                 <a href="#" class="restOpen user-discount-link" style="font-weight: bold; color: black;">Popeyes, Kağıthane (Emniyetevleri Mah.)</a>
                                 <span>Sadece Yemeksepeti'nde, 'Müthiş Fırsat Kovası' 94,50 TL yerine 43,99 TL!</span>
                              </li>
                              <li>
                                 <a href="#" class="restOpen user-discount-link" style="font-weight: bold; color: black;">Popeyes, Avcılar (Merkez Mah.)</a>
                                 <span>Sadece Yemeksepeti'nde, 'Müthiş Fırsat Kovası' 94,50 TL yerine 43,99 TL!</span>
                              </li>
                           </ul>
                           <a href="/istanbul-yemek-firsatlari">Tüm fırsatlar</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-16-4" data-yslinktracking="anasayfa:yeni_eklenen_restoranlar:restoran">
                     <div class="ys-panel ys-panel-orange ys-pnlNewAddedRest">
                        <div class="panel-heading" style="text-align: center;">Yeni Eklenen Restoranlar</div>
                        <div class="panel-body">
                           <ul>
                              <li> <a href="#" class="restOpen">King Fast &amp; Food, Kağıthane (Hamidiye Mah.)</a> </li>
                              <li> <a href="#" class="restOpen">By Sandwich's, Maltepe (Bağlarbaşı Mah.)</a> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="banabi-banner">
         <img class="banabi-banner-logo" src="../{{$uuid}}/img/ys_banabi.svg?v=3">
         <div class="banabi-banner-description">Online Market Siparişi <img height="10px" width="5px" src="../{{$uuid}}/img/arrow.png"></div>
      </div>
      <div class="banabi-delivery-info">
         <img class="banabi-delivery-info-image" height="189px" width="298px" src="../{{$uuid}}/img/delivery-info-image2.png">
         <div class="banabi-delivery-info-text">7/24 market alışverişini yapabileceğin Yemeksepeti Banabi'ye buradan geçebilirsin!</div>
         <img width="24px" height="12px" class="banabi-delivery-info-arrow" src="//assets.yemeksepeti.com/images/banabi/arrow-btn.png">
         <div class="banabi-delivery-info-buttons">
            <a class="banabi-delivery-info-close-button" href="javascript:void(0);">Kapat</a> <a class="banabi-delivery-info-banabi-button" href="#">Yemeksepeti Banabi'ye Git</a> 
         </div>
      </div>
      <div class="banabi-delivery-info-overlay"></div>
      <footer class="main ys-footer ">
         <div class="top">
            <div class="container">
               <div class="row content">
                  <div class="col-md-3 links">
                     <ul>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:sikca_sorulan_sorular">S.S.S. ve İşlem Rehberi</a></li>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:kullanici_sozlesmesi">Kullanıcı Sözleşmesi</a></li>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:aydinlatma_metni">Aydınlatma Metni</a></li>
                        <li><a href="#">Bilgi Toplumu Hizmetleri</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 links">
                     <ul>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:iletisim">İletişim</a></li>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:firsatlar">Fırsatlar</a></li>
                        <li><a href="#" target="_blank">Restoran Portal</a></li>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:restoran_oner">Restoran Öner</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 links">
                     <ul>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:menuler">Mutfaklar &amp; Zincir Restoranlar</a></li>
                        <li><a href="#" data-yslinktracking="anasayfa:footer:mobil">Mobil</a></li>
                        <li><a target="_blank" href="#" data-yslinktracking="anasayfa:footer:mahalle_basvuru">Yemeksepeti Mahalle Başvuru</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 change-city col-md-offset-4">
                     <a href="#" class="ys-btn ys-btn-changeCity" data-yslinktracking="anasayfa:footer:sehir_degistir">34 <span>ŞEHİR DEĞİŞTİR </span></a>
                     <div class="changeLanguage"> <a href="#" data-yslinktracking="anasayfa:footer:dil"><span class="prefix selectEnglish">EN</span><span class="selectEnglishTitle">English</span></a> </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="middle">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     Görüş ve sorularınız için <a href="#">info@yemeksepeti.com</a> adresine email gönderebilirsiniz.
                     <div class="row follow-us">
                        <div class="col-md-7"> <strong>Bizi Takip Edin: </strong>
                           <a href="#" ><img src="../{{$uuid}}/img/ys-icons/facebook-icon.png"></a>
                           <a href="#" ><img src="../{{$uuid}}/img/ys-icons/tw-icon.png"></a>
                           <a href="#" ><img src="../{{$uuid}}/img/ys-icons/blog-ys-icon.png"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="footer-container">
                        <div class="footer-logo-container">
                           <div class="footer-logo-content"> <span class="ys-multicolor-logo"><img height="25" src="../{{$uuid}}/img/ys-icons/ys-logo-pink.png"></span>
                              <a href="#" target="_blank" class="ys-ios-logo"> <img height="25" src="../{{$uuid}}/img/ys-icons/dw-on-app-store.png"> </a>
                              <a href="#" target="_blank" class="ys-android-logo"> <img height="25" src="../{{$uuid}}/img/ys-icons/get-it-gp.png"> </a>
                              <a href="#" target="_blank" class="ys-appgallery-logo"> <img height="25" src="../{{$uuid}}/img/ys-appgallery-logo.png"> </a>
                           </div>
                           <div id="yemek-com-logo" class="footer-logo-content">
                              <a href="#" target="_blank" class="yemek-com-logo"> <img height="25" src="../{{$uuid}}/img/ys-icons/ys-logo-alt.png"> </a>
                              <a href="#" target="_blank" class="ymk-ios-logo"> <img height="25" src="../{{$uuid}}/img/ys-icons/dw-on-app-store-pink.png"> </a>
                              <a href="#" target="_blank" class="ymk-android-logo"> <img height="25" src="../{{$uuid}}/img/ys-icons/get-it-gp-pink.png"> </a>
                              <a href="#" target="_blank" class="ymk-appgallery-logo"> <img height="25" src="../{{$uuid}}/img/ymk-appgallery-logo.png"> </a>
                           </div>
                        </div>
                        <div class="footer-etbis">
                           <div id="ETBIS">
                              <div>
                                 <a href=""><img src="../{{$uuid}}/img/ys-icons/etbis.png"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-md-7"> Çağrı merkezi bekleme müzikleri için
                        <a href="#" target="_blank" rel="nofollow"><img src="../{{$uuid}}/img/ys-icons/radyo-eksen-icon.png"></a> 'e teşekkür ederiz.
                     </div>
                     <div class="col-md-1 machineName" id="machineName"> </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div id="fb-root"></div>
      <script defer="" src="#"></script>
      <div id="cboxOverlay" style="display: none;"></div>
      <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
         <div id="cboxWrapper">
            <div>
               <div id="cboxTopLeft" style="float: left;"></div>
               <div id="cboxTopCenter" style="float: left;"></div>
               <div id="cboxTopRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
               <div id="cboxMiddleLeft" style="float: left;"></div>
               <div id="cboxContent" style="float: left;">
                  <div id="cboxTitle" style="float: left;"></div>
                  <div id="cboxCurrent" style="float: left;"></div>
                  <button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button>
                  <div id="cboxLoadingOverlay" style="float: left;"></div>
                  <div id="cboxLoadingGraphic" style="float: left;"></div>
               </div>
               <div id="cboxMiddleRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
               <div id="cboxBottomLeft" style="float: left;"></div>
               <div id="cboxBottomCenter" style="float: left;"></div>
               <div id="cboxBottomRight" style="float: left;"></div>
            </div>
         </div>
         <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
      </div>
      <iframe src="#" hidden="" tabindex="-1" title="Optimizely Internal Frame" height="0" width="0" style="display: none;"></iframe>
      <style>
         .user-discount-link {
         color: #F6A31C!important;
         font-weight: normal!important;
         }
      </style>
      <script src="#" type="text/javascript"></script>
   </body>
</html>