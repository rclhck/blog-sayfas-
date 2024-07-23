<?php require './components/php-header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- ÖZEL STİL DOSYASI -->
    <link rel="stylesheet" href="./style.css">
    
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--color-gray-200);
            overflow-x: hidden;
            background: var(--color-bg);
            font-size: 0.9rem;
        }

        .about__section {
            padding: 2rem;
        }

        .about__post-author {
            max-width: 800px;
            margin: auto;
            text-align: justify;
        }

        .about__post-author h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--color-white);
        }

        .about__post-author p {
            margin-bottom: 1.5rem;
        }

        .about__post-author h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--color-white);
        }

        .about__post-author ol {
            margin-bottom: 1.5rem;
        }

        .about__post-author li {
            margin-bottom: 0.5rem;
        }

        .footer__socials {
            margin-inline: auto;
            width: fit-content;
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.2rem;
        }

        .footer__container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            text-align: center;
        }

        footer h4 {
            color: var(--color-white);
            margin-bottom: 0.6rem;
        }

        footer ul li {
            padding: 0.4rem 0;
        }

        footer ul a {
            opacity: 0.75;
        }

        footer ul a:hover {
            letter-spacing: 0.2rem;
            opacity: 1;
        }

        .footer__copyright {
            text-align: center;
            padding: 1.5rem 0;
            border-top: 2px solid var(--color-bg);
            margin-top: 2rem;
        }
    </style>

</head>

<body>
    
    <?php require './components/header-client.php'; ?>

    <!-- HAKKINDA SAYFASI -->

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- İÇE EKLENEN CSS KODLARI -->
    
    
    <section class="about__section">
        <div class="about__post-author">
            <h1>Land of Books'a Hoş Geldiniz</h1>
            <p>Kitap Tutkunlarının Buluşma Noktası</p>
            <p>Kitap almadan önce sağlıklı bir kitap referansına göz atın!</p>
            <p>Kitap okumaya yeni başlayan okurlar için onlara okumayı sevdirecek kitaplar önermek istiyoruz. Bir konuya yeni giriş yapanlar, doğru "başlangıç" kitaplarıyla yola çıkıp uzmanlaşsın istiyoruz. Alanının uzmanları en iyi kitapları önersin istiyoruz.</p>
            <p>Hazırladığımız kriterler ile satın almayı düşündüğünüz kitap hakkında bir bakışta bilgi sahibi olabilmenizi önemsiyoruz. Aynı kitabı okuyup farklı yorum yapan okurları bir araya getirmek, başka okumalarla sizin okuma deneyiminizi de güçlendirmek istiyoruz.</p>
            <p>Ebeveynler çocukları için güvenilir okuma listeleri bulsun, bir kitabı okumadan satın alabilsin, çocuklarımız iyi kitaplar okusun ve en iyi yazarlarla tanışsınlar istiyoruz.</p>
            <p>Kitap kulüpleri, yayıncılıkla ilgili güncel gelişmeler ve kitap okuma alışkanlıklarıyla ilgili önerilerden tüm okurların haberdar olmasını istiyoruz.</p>
            <p>Türkiye’de okuma kültürü ve alışkanlıkları gelişirse daha yaşanılır bir ülke olacağımıza inanıyoruz.</p>
    
            <h2>Yayıncılık İlkelerimiz:</h2>
            <ol>
                <li><strong>Çeşitlilik ve Kalite:</strong> Türkiye'deki binlerce yayınevinden her yıl yayımlanan on binlerce kitap arasından özenle seçilmiş eserleri sunarak çeşitliliği ve kaliteyi ön planda tutuyoruz.</li>
                <li><strong>Uzman Tavsiyeleri:</strong> Alanında uzman kişilerin en iyi kitapları önerdiği bir platform oluşturarak, okurların ilgi alanlarına uygun kitaplar keşfetmelerini sağlıyoruz.</li>
                <li><strong>Çocuklar İçin Güvenilir Kaynak:</strong> Ebeveynlere, çocukları için güvenilir okuma listeleri sunarak, çocukların sağlıklı bir şekilde kitaplarla tanışmalarını destekliyoruz.</li>
                <li><strong>İçerik Üretme ve İnsan Haklarına Saygı:</strong> İçeriklerimizi hazırlarken insan hakları evrensel bildirisi, UNESCO kültürel çeşitlilik evrensel bildirgesi ve gazetecilik meslek ilkeleri gibi temel prensipleri esas alıyoruz. Telif haklarına saygı gösteriyor, intihal ve sansüre karşı duruyoruz.</li>
                <li><strong>Türk Dili ve Kültürüne Katkı:</strong> Türk dilinin korunması ve geliştirilmesini önemsiyor, Türk kültürüne katkı sağlayacak eserlere öncelik veriyoruz.</li>
                <li><strong>Hata ve Düzeltmeye Saygı:</strong> Herhangi bir içerikte oluşan hatalara karşı duyarlılık gösteriyor, etkilenen kişi veya kurumların düzeltme taleplerine saygı gösteriyoruz.</li>
            </ol>
            <p>Land of Books, kitapseverleri bir araya getiren, okuma alışkanlıklarını geliştiren ve kitap kültürünü yaygınlaştıran bir platform olarak Türkiye'de okuma kültürünün gelişimine katkıda bulunmayı hedeflemektedir.</p>
        </div>
    </section>
    
    <!-- HAKKINDA SAYFASI SONU -->

    <!-- ALT MENÜ -->
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
            <small>Copyright since 2023 &copy;</small>
        </div>
    </footer>
    <!-- ALT MENÜ SONU -->

    <script src="./main.js"></script>
</body>

</html>