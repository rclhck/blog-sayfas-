<?php require './components/php-header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- Özel stil sayfası -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>


<?php require './components/header-client.php'; ?>



     <!-- Kategori başlığı -->
    <header class="category__title">
        <h2>Category Title</h2>
    </header>
   <!--====================== KATEGORİ BAŞLIĞI SONU =================-->


<!-- Gönderiler bölümü -->

<section class="posts">
    <div class="container posts__container">
         
        <!-- Birinci Gönderi -->
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog1.png">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Theater</a>
                <h3 class="post__title">
                    <a href="post.php">🌾"Yaşlanacak zamanımız var. Hava çığlıklarımızla dolu. Ama alışkanlık büyük bir uyuşturucu."</a>
                </h3>
                <p class="post__body">
                    Selam,
                    📚"GODOT'YU BEKLERKEN",📚bir oyundur.
                    
                    Bu oyun ilk yazıldığında hiç kimse tarafından anlaşılmamış. Ta ki, bir hapishanede sahnelenip, mahkumların ayakta uzun süre eseri alkışladığı zamana dek. Böylece edebiyat dünyası eseri daha çok incelemeye başlamış ve Godot karakterinin kim olduğunu bularak esere anlam vermişler. Öyle bir anlam ki, hep farklı. Her kişinin ki farklı. Mahkum için özgürlük, hasta için iyileşme gibi...
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar3.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
        <!-- Birinci Gönderi Sonu -->


        <!-- 2. Gönderi -->
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog2.jpeg">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Psychological</a>
                <h3 class="post__title">
                    <a href="post.php">✨ Nevzat Tarhan & Duyguların Psikolojisi ✨"</a>
                </h3>
                <p class="post__body">
            
                📗Psofesör Doktor Nevzat Tarhan’ ın psikoloji üzerine yazmış olduğu açık , anlaşılır ve çözümleyici kitaplardan birisi.
                📗 İnsan oğlunun sahip olduğu olumlu ve olumsuz tüm duyguları tek tek ele alıyor.Olumlu duyguları daha ustaca kullanmayı anlatırken asıl olanın duyguları çözümleyebilmek için kişinin kendisini tanımasının ilk adımı olduğunun vurgusuna defalarca değiniyor. 
                Farklı bakış açılarıyla zihinde yepyeni pencereler açıyor .
                📗Kendimizi ve karşımızdakini anlamak anlamlandırmak için duyguları doğru yönetebilmek adına okunması gereken bir kitap .
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar3.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
        <!-- 2. Gönderi Sonu -->

       
        <!-- 3. Gönderi -->
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog3.png">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Romance</a>
                <h3 class="post__title">
                    <a href="post.php">Masumiyet Müzesi - Orhan Pamuk ✨🕯</a>
                </h3>
                <p class="post__body">
                 O kadar gerçek, o kadar büyüleyici bir hikâyeydi ki okurken bitmesini hiç istemedim. 
                 Sonuna geldiğinizde ise okuru uzun süre etkisinde bırakacak bir kitap. Kemal ile Füsun’u tanıdığıma, onların ne kadar imkansız olsa da sürüp giden aşk hikâyesine şahit olduğum için çok mutluyum.
                 Kitabı okumaya başlamadan önce ön yargılı olduğumu belirtmeliyim. 
                 Konusu hakkında hepimizin genel olumsuz bir algısı var. 
                 Bu aşk hikâyesi doğru bir şekilde başlamıyor fakat dinlemeden (okumadan), ön yargıyla yaklaşmanın da yanlış olduğunu kitabı bitirdikten sonra görebildim. 
                 Klasik bir aşk hikâyesi okumayacaksınız. Neredeyse değil direkt takıntı düzeyinde bir aşk bu, fakat nedense size kötü hissettirmiyor. 
                 Başlarda Kemal’e çok sinirleneceksiniz, bu kadar da olmaz diyeceksiniz. Ama bir yerden sonra onunla beraber üzülürken bulacaksınız kendinizi. 
                 Füsun’a olan aşkı yüzünden bütün hayatı değişiyor, arkadaşlarını teker teker kaybediyor, işini bile umursamayacak düzeye geliyor. 
                 Önce sadece geçici bir hevesmiş gibi geliyor fakat bu sevginin ciddiyeti sizi de inandırıyor, güven veriyor. 
                 Bir bakmışsınız ağlayarak çeviriyorsunuz son sayfaları.Olay örgüsü, kurgusu o kadar ince detaylarla kurulmuş ki bu kitabın, hikâyenin gerçek olmama ihtimali yokmuş gibi hissediyorsunuz. 
                 Yazar zaten postmodern bir anlayışla romanlarını kaleme aldığı için, detaylar ilmek ilmek işleniyor. 
                 Normalde Pamuk romanları betimleme yönüyle karmaşık olabiliyor. 
                 Fakat bu kitapta beni hiç sıkmadı. 
                 Hatta bazı bölümlerde Kemal’in psikolojik sıkıntılarını, bir eşyaya yüklediği anlamları, hastalıklı duygularını okudukça biraz bunalabilirsiniz ama yine de elinizden bırakamayacağınızı garanti edebilirim. 
                 Zaten bu süreçte yazar sizi kitapta tutmak için çarpıcı olaylara da yer veriyor. 
                 Ayrıca 9 yıllık sabırlı bekleyişin sonunda artık bir kavuşma, mutluluk görme umuduyla hırsla okuyacaksınız. 
                 Anlatmak istediğim o kadar çok şey var ki, bir yerden sonra spoiler olacak. Kısacası çok severek ve her sayfasını hissederek en sonunda da ağlayarak okuduğum bir kitaptı. 
                 Herkese kesinlikle tavsiye etmekten bıkmayacağım… 🕯🤍✨
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar4.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
        <!-- 3. Gönderi Sonu -->


        <!-- 4. Gönderi --> 
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog4.png">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Science Fiction</a>
                <h3 class="post__title">
                    <a href="post.php">Lanetli Yavşan - Bora Chung</a>
                </h3>
                <p class="post__body">
                 Bilimkurgu çok fazla tercih ettiğim bir tür olmamasına rağmen okurken oldukça keyif aldığım bir öykü kitabı oldu. 
                 İçerisinde on farklı öykü barındıran Lanetli Tavşan; bilimkurgu, büyülü gerçeklik, fantastik, masal gibi türlerde özgün olarak kurgulanmış. 
                 Okurken bir film izliyormuşçasına akıcı ve soluksuz ilerliyor. Yazar daha çok toplumsal olaylara eğilmiş ve bu sorunlara çözüm olmasa da yaşayan karakterler üzerinden insanların yalnızlıklarına fayda sağlamak amacıyla kaleme almış hikâyelerini. 
                 Genel olarak umutsuzluk, hayalkırıklığı, çaresizlik, ailevi değerler, ataerkil toplum gibi konular çerçevesinde ilerliyor. 
                 Bazı öykülerde açıklanamayan tuhaf olaylar, kasvetli dünyalar, masal evrenleri bulunuyor. Alışık olduğumuz masallardan farklı olarak öyküler mutlu sonla bitmiyor ne yazık ki. 
                 Daha çok distopik bir havası var diyebiliriz. Benim en sevdiğim öykü ise; aynı zamanda kitabın son bölümü olan Rüzgarın ve Kumların Hükümdarı oldu.
                 Bütün öyküler genel olarak akıcı ilerliyor ve okuyucuyu kendine bağlıyor. 
                 Bu sayede de kısa sürede okunan keyifli bir o kadar da rahatsız ediciliği yüksek bir öykü kitabıydı. Eğer bilimkurgu, fantastik türlerini seviyorsanız, öykü okumayı da tercih ediyorsanız sıkılmadan okuyacağınız bir kitap. Keyifli okumalar…
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar5.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
       <!-- 4. Gönderi Sonu -->
       

       <!-- 5. Gönderi  -->
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog5.png">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Self-Improvement</a>
                <h3 class="post__title">
                    <a href="post.php">Vedat Milor👉HESAP LÜTFEN!</a>
                </h3>
                <p class="post__body">
                ⚘Özgün,dengeli ve lezzetli bir yaşamın peşinde...

                💫Gastronomi uzmanı,şarap uzmanı,iktisatçı,Sosyolog, televizyoncu ve yazar👉Vedat Milor🥰
                💥Gastronominin yalnızca yemek yemekten ibaret olmadığını,farklı kültürlere ve kesimlere nasıl pencere açılacağını öğreten bir gurme😉Tuhaf Dergisi Genel Yayın Yönetmeni Nurhak Kaya soruyor ve Vedat Milor tüm samimiyetiyle soruları cevaplandırıyor.Güzel bir söyleşi 👏Ben zevkle okudum.
                Bu kitap ile TV den tanıdığım Vedat Milor'u da yakından tanımış oldum.
                Kendisi hakkındaki tek eleştirim yurt dışında yaşayıp burada fikir beyan etmesi😬 🎁Vedat bey, engin tecrübeleriyle her alanda fikir beyan etmiş; arkadaşlık, aşk ,boş zamanlar,yalnızlık,iş seçimi,kariyer,hobiler,yeme_içme kültürü , yemekler,lezzetler ve yeni arayışlar.Kitaptan anladığım kadarıyla da biraz hanımcı hatta daha fazlası😅Eşi Linda otoriter ve son söz onda bitiyor👍 💐Kitap, Gastronomi 3.sınıf öğrencisi kızımın bana hediyesiydi ve ben de onu kırmamak adına okudum😘Tavsiye eder miyim derseniz bu kararı size bırakıyorum...

                ⚘Kamuoyu önünde farklı bir imaj yaratılıp sunulması, günümüzde çokça rastladığımız temel bir etik sorun, bu kitaptaki amacım kendimi olduğum gibi yansıtmak...
                ⚘İnsan,rolleriyle olduğu kadar,hobi ve ilgi alanlarıyla da anlam kazanır...
                ⚘Baştan yürümeyeceğini anladığınızda ısrar etmenize gerek yok ,koparıp atmalısınız...
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar7.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
         <!-- 5. Gönderi Sonu -->



         <!-- 6. Gönderi -->
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog6.png">
            </div>
            <div class="post__info">
                <a href="" class="category__button">History</a>
                <h3 class="post__title">
                    <a href="post.php">Falih Rıfkı Atay👉ÇANKAYA</a>
                </h3>
                <p class="post__body">
                    ✔Falih Rıfkı Atay 1923-1938 yılları arasında Atatűrk'űn yanında bulunmuş ve o dőnemi tarafsız bir gőzle hem gazeteci kimliği hem de Atatűrk'űn yakın arkadaşı olma sıfatıyla kaleme almıştır👍.
                    ✔Çankaya;Atatűrk'űn doğumundan,okul hayatına,katıldığı savaşlardan,devrimlere,insan ilişkilerinden,halka olan yakınlığına ve bilinmeyen tűm yőnlerine kadar detaylı bir anlatımla,hatıralarla dolu akıcı bir kitaptır👌.
                    ✔F.R Atay'ın yıllar őnce Zeytindağı'nı okumuştum.(Okumadıysanız kesinlikle tavsiye ederim.)Şimdi Çankaya kitabını okudum (653 sf.)ve dűşűnmeden edemedim acaba Atatűrk'ű bu denli içten anlatan başka bir kitap var mıdır?
                    ✔Her Tűrk genci bilmelidir ki biz bugűnlere Mustafa Kemal Atatűrk ve onun yakın arkadaşları sayesinde kavuştuk.Onun emaneti Cumhuriyete sahip çıkmak ve korumak bizim boynumuzun borcudur🇹🇷.
                    ✔Ayrıca bu kitapta bir kez daha Atatűrk'űn Tűrk kadınına verdiği őnemi anlatan satırları, altını çize çize okudum.Bugűn kadın-erkek eşitliğinden tutun da her alanda kadınlarında sőz sahibi olmasının tek nedeni Mustafa Kemal Atatűrk'űn Tűrk kadınına verdiği őnemdir🙋‍♀⚘.
                    ✔✔Çankaya'nın kesinlikle herkesin okuması gerektiği bir kitap olduğunu dűşűnűyorum.
                    📚Ah bu vatan, bu vatan, ne güç şartlar içinde, dosta ve düşmana karşı, ne uzun, ne çetin sabır ve çile işkencesinden sonra kurtarılmıştır.
                    📚Onun düşmanlığı, yobazlığa idi. Geriliğe idi. Türk şerefini düşüren ve Türklüğü gelişmeden alıkoyan kara ve karanlık gelenek ve göreneklere karşı idi.
                    📚Bir milletin medeniyetini ölçmek istiyor musunuz, kadına nasıl muamele ettiğine bakınız.
                    KEYİFLİ OKUMALAR DILERIM☕
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar5.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: John Mills</h5>
                        <small>June 13, 2022 - 10:34</small>
                    </div>
                </div>
            </div>
        </article>
         <!-- 6. Gönderi Sonu -->



         <!-- Diğer Gönderiler Buraya Eklenecek -->
        <!-- ... -->




    

    </section>   
 
    <!-- Gönderiler Sonu --> 




<!-- Kategori düğmeleri bölümü -->
<section class="category__buttons">
    <div class="container category__buttons-container">
        <a href="" class="category__button">Theater</a>
        <a href="" class="category__button">History</a>
        <a href="" class="category__button">Science Fiction</a>
        <a href="" class="category__button">Romance</a>
        <a href="" class="category__button">Self-Improvement</a>
        <a href="" class="category__button">Psychological</a>
    </div>
</section>
<!--====================== KATEGORİ DÜĞMELERİ SONU ==============-->

 <!-- Alt bölüm -->
<footer>
    <div class="footer__socials">
        <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Theater</a></li>
                <li><a href="">History</a></li>
                <li><a href="">Science Fiction</a></li>
                <li><a href="">Romance</a></li>
                <li><a href="">Self-Improvement</a></li>
                <li><a href="">Psychological</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright since2023&copy;</small>
    </div>
</footer>
<script src="./main.js"></script>
</body>
</html>