<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title><?php echo $title; ?></title>
 <meta name="Description" content="<?php echo $description; ?>">

 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
 <meta name="format-detection" content="telephone=no">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
 <link rel="stylesheet" href="css/common.css?<?= time() ?>">
 <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
 <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">

 <?php include 'font_common.php'; ?>

 <!-- Swiper -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

 <!-- lightbox -->
 <link href="lightbox2/css/lightbox.css" rel="stylesheet" type="text/css">
</head>

<body id="top">

 <div id="wrapper" class="contents">
  <?php include 'header.php'; ?>

  <section id="slide-wrapper">
   <div id="catch">
    <h2 class="js-span-text">みんなで囲むあったかご飯<br>大阪の子どもたちに元気と笑顔を</h2>
    <h3><img src="img/logo.png" alt="<?php echo $company; ?>"></h3>

   </div>
   <div id="slideshow">
    <div class="swiper-container">
     <div class="swiper-wrapper">
      <div class="swiper-slide">
       <div class="slide-img">
        <img src="img/slide01.jpg" alt="食事を楽しんでいる女の子の画像" decoding="async">
       </div>
      </div>
      <div class="swiper-slide">
       <div class="slide-img">
        <img src="img/slide03.jpg" alt="温かいカレーライスのアップ画像" decoding="async">
       </div>
      </div>
      <div class="swiper-slide">
       <div class="slide-img">
        <img src="img/slide02.jpg" alt="いただきますの挨拶をする子どもたちの画像" decoding="async">
       </div>
      </div>
      <div class="swiper-slide">
       <div class="slide-img">
        <img src="img/slide04.jpg" alt="ご飯、卵焼き、ひじき、唐揚げなどが詰まった温かみのある美味しそうなお弁当画像" decoding="async">
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <div id="l-main">

   <section>
    <div class="single">
     <div class="news-box">
      <h2 class="news-title"><span class="eng">Topics</span><span class="ja">お知らせ</span></h2>
      <div id="top-blog" class="news-right" data-aos="fade" data-aos-delay="200" data-aos-duration="1200">
       <div class="scrollbar">
        <dl class="news-bl">
         <dt><time datetime="2025-01-01">2025.01.01</time></dt>
         <dd><?php echo $company; ?>のホームページを公開しました。</dd>
        </dl>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section>
    <div class="single">
     <div class="top-cont02 type1">
      <div class="inner">
       <div class="top-cont02-txt" data-aos="fade" data-aos-delay="200" data-aos-duration="1200">
        <h2 class="title02"><span class="ja"><?php echo $company; ?>の<br>ホームページへようこそ！</span><span class="eng">Greeting</span></h2>
        <p class="js-marker">私たちは、『<span>家庭の自立をサポートする</span>』というミッションを掲げ、大阪の子供たちが明るく元気に生活できるよう、さまざまな取り組みを行っています。</p>
        <p>家庭の事情により、やりたいことができない子供たちに寄り添い、支えの手を差し伸べることで、彼らの生活の安定を目指し、明るい未来を築いていきたいと考えています。</p>
        <p>このホームページでは、私たちの取り組みや活動報告、支援方法についてご紹介しています。</p>
        <p>ぜひご覧いただき、活動にご興味をお持ちいただいた方やご支援を検討される方は、お気軽にご連絡ください。皆様からの温かいご支援を心からお待ちしています。</p>

        <ul class="list2 t-m30">
         <li class="btn01 type1"><a href="support.php"><i class="far fa-handshake"></i> 支援する</a></li>
         <li class="btn01 type1"><a href="about.php"><i class="fas fa-building"></i> 法人概要</a></li>
        </ul>
       </div>

       <div class="top-cont02-img">
        <div class="img01" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200"><img src="img/top01.jpg" alt="楽しそうに食事をしている女の子の画像"></div>
        <div class="img02" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1200"><img src="img/top02.jpg" alt="ケチャップがかかったオムライス弁当の画像"></div>
       </div>
      </div>
     </div>
    </div>
   </section>

   <section class="bg-greet">
    <div class="single">
     <div class="small-box note-side">
      <div class="tcenter">
       <img src="img/greet-title.png" alt="大阪府のこどもたちへ">
      </div>
      <div class="column2" data-aos="fade" data-aos-delay="200" data-aos-duration="1200">
       <div class="child03 bm20 tcenter">
        <img src="img/greet-img.png" alt="笑顔でランドセルを背負った子どもたちのイラスト" class="w70">
       </div>
       <div class="child04 sentence2 tcenter">

        <ul class="list-inline type1 chosei2">
         <li>子ども食堂を利用したい</li>
         <li>お弁当が欲しい</li>
         <li>困りごとを相談したい</li>
        </ul>


        <p>なんでもここからご連絡ください。<br>メッセージは代表者・<?php echo $daihyo; ?>だけが確認しますので、<br>安心してメッセージを送ってくださいね！</p>

        <div class="btn01 type-line t-m30">
         <a href="<?php echo $link_line; ?>" target="_blank"><i class="fab fa-line fa-lg green"></i> 友達登録はこちら</a>
        </div>

       </div>
      </div>
     </div>
    </div>
   </section>

   <section>
    <div class="single type1">

     <h2 class="title01 tcenter"><span class="eng">Service</span><span class="ja">主な取り組み</span></h2>


     <ul class="instructor">
      <li data-aos="fade-left" data-aos-delay="200" data-aos-duration="1200">
       <div class="relative"><img src="img/point01.jpg" alt="学習支援" class="img-r2">
        <h2 class="mtitle_ribon type1">学習支援</h2>
       </div>
       <p class="tcenter t-m15">
       <ul class="list_disc">
        <li>学習場所の提供</li>
        <li>宿題や学習のサポート</li>
        <li>体験型学習の機会提供</li>
       </ul>
       </p>
      </li>
      <li data-aos="fade-right" data-aos-delay="200" data-aos-duration="1200">
       <div class="relative"><img src="img/point02.jpg" alt="登校支援" class="img-r2">
        <h2 class="mtitle_ribon sbc type1">登校支援</h2>
       </div>
       <p class="tcenter t-m15">
       <ul class="list_disc">
        <li>朝が苦手な子の起床サポート</li>
        <li>学校への送迎支援</li>
        <li>朝食の準備</li>
       </ul>
       </p>
      </li>
      <li data-aos="fade-left" data-aos-delay="200" data-aos-duration="1200">
       <div class="relative"><img src="img/point03.jpg" alt="食事支援" class="img-r2">
        <h2 class="mtitle_ribon type1">食事支援</h2>
       </div>
       <p class="tcenter t-m15">
       <ul class="list_disc">
        <li>無料弁当の配布</li>
        <li>子ども食堂の運営</li>
       </ul>
       </p>
      </li>
      <li data-aos="fade-right" data-aos-delay="200" data-aos-duration="1200">
       <div class="relative"><img src="img/point04.jpg" alt="物資提供・配達支援" class="img-r2">
        <h2 class="mtitle_ribon sbc type1">物資提供・配達支援</h2>
       </div>
       <p class="tcenter t-m15">
       <ul class="list_disc">
        <li>食料品・衣類・日用品などの提供</li>
        <li>外出が難しい家庭への物資配達</li>
       </ul>
       </p>
      </li>
     </ul>
     <div class="btn01 t-m30">
      <a href="action.php"><i class="far fa-heart"></i> 詳しくはこちら</a>
     </div>
    </div>
   </section>

   <section class="bg-beige2 type1">
    <div class="single">
     <div class="top-bnr" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1200">
      <a href="report.php">
       <div class="inner">
        <div class="child">
         <img src="img/top-bnr01.png" alt="笑顔でジャンプしている二人の子どものイラスト">
        </div>
        <div class="child-txt">
         <p class="top-bnr-title"><span class="glowAnime">活動報告</span><br>無料弁当の提供や物資配達、<br>季節ごとのイベントなど<br>多くの活動を行っています。</p>

         <p class="top-bnr-txt">詳細はこちら</p>
        </div>
        <div class="child">
         <img src="img/top-bnr02.png" alt="自転車に乗る子どものイラスト">
        </div>
       </div>
      </a>
     </div>
    </div>
   </section>

   <section>
    <div class="single02">
     <h2 class="title-big tcenter" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1200"><span class="eng">Instagram</span><span class="ja">インスタグラム</span></h2>
     <div class="gallerybox animation-round mask chosei2">
      <ul class="slide_list">
       <li><a href="gallery/2025/01/001.jpg" rel="lightbox[photo]"><img src="gallery/2025/01/001.jpg" alt=""></a></li>
       <li><a href="gallery/2025/01/002.jpg" rel="lightbox[photo]"><img src="gallery/2025/01/002.jpg" alt=""></a></li>
       <li><a href="gallery/2025/01/003.jpg" rel="lightbox[photo]"><img src="gallery/2025/01/003.jpg" alt=""></a></li>
       <li><a href="gallery/2025/01/004.jpg" rel="lightbox[photo]"><img src="gallery/2025/01/004.jpg" alt=""></a></li>
       <li><a href="gallery/2024/12/001.jpg" rel="lightbox[photo]"><img src="gallery/2024/12/001.jpg" alt=""></a></li>
       <li><a href="gallery/2024/12/002.jpg" rel="lightbox[photo]"><img src="gallery/2024/12/002.jpg" alt=""></a></li>
      </ul>
      <div class="instagram-btn">
       <a href="<?php echo $link_instagram; ?>" target="_blank" rel="noopener" class="btn-instagram">
        <img src="img/instagram-btn.png" title="Instagram"><i class="fab fa-instagram"></i>
       </a>
      </div>
      <ul class="slide_list2">
       <li><a href="gallery/2024/12/003.jpg" rel="lightbox[photo]"><img src="gallery/2024/12/003.jpg" alt=""></a></li>
       <li><a href="gallery/2024/12/004.jpg" rel="lightbox[photo]"><img src="gallery/2024/12/004.jpg" alt=""></a></li>
       <li><a href="gallery/2024/12/005.jpg" rel="lightbox[photo]"><img src="gallery/2024/12/005.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/001.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/001.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/002.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/002.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/003.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/003.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/004.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/004.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/005.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/005.jpg" alt=""></a></li>
       <li><a href="gallery/2024/10/006.jpg" rel="lightbox[photo]"><img src="gallery/2024/10/006.jpg" alt=""></a></li>
      </ul>
     </div>
     <div class="btn-fuchi"><a href="<?php echo $link_instagram; ?>" target="_blank" rel="noopener">SHOW ALL</a></div>
    </div>
   </section>


  </div>
  <?php include 'footer.php'; ?>
 </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
 <script src="aos/aos.js"></script>
 <script src="aos/aos_set.js"></script>
 <script src="lightbox2/js/lightbox-2.6.min.js" type="text/javascript"></script>
 <script src="lightbox2/js/modernizr.custom.js" type="text/javascript"></script>
 <script src="js/infiniteslide.js?<?= time() ?>"></script>
 <script src="js/txt-glow.js?<?= time() ?>"></script>
 <script src="js/split2.js?<?= time() ?>"></script>
 <script src="js/basis.js?<?= time() ?>"></script>
 <script>
  // slider
  $(window).on('load', function() {
   setTimeout(function() {
    var swiper = new Swiper('.swiper-container', {
     effect: 'fade',
     loop: true,
     speed: 2000,
     autoplay: {
      delay: 5000,
      disableOnInteraction: false
     },
    }, 300);
   });

   // キャッチコピーのアニメーション
   setTimeout(function() {
    $("#catch h2").addClass('on');
   }, 400);
   setTimeout(function() {
    $("#catch h3").addClass('on');
   }, 3000);
  });
  
  // Infiniteslideの初期化
  $(function() {
      // infiniteslide
      $('.slide_list').infiniteslide({
        speed: 20,
        responsive: true,
        direction: 'right',
        pauseonhover: false
      });
    });

    $(function() {
      // infiniteslide
      $('.slide_list2').infiniteslide({
        speed: 20,
        responsive: true,
        direction: 'left',
        pauseonhover: false
      });
    });
 </script>
</body>

</html>