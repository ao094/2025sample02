<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title>取り組み｜<?php echo $title; ?></title>
 <meta name="Description" content="取り組み｜<?php echo $description; ?>">

 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
 <meta name="format-detection" content="telephone=no">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
 <link rel="stylesheet" href="css/common.css?<?= time() ?>">
 <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
 <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
 
 <?php include 'font_common.php'; ?>
</head>

<body id="top">
 <div id="wrapper" class="contents">
  <?php include 'header.php'; ?>

  <div class="page-title type01">
   <div class="inner">
    <h2 class="page-lead"><span class="eng glowAnime">Action</span><span class="ja">取り組み</span></h2>
   </div>
  </div>
  <ol class="breadcrumb">
   <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
   <li>取り組み</li>
  </ol>

  <section class="bg-beige">
   <div class="single">
    <div class="small-box type1">
     <div class="photo-style01 chosei2">
      <div class="img01" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1200"><img src="img/action01.jpg"></div>
      <div class="img02" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1200"><img src="img/action02.jpg"></div>
     </div>
     <h2 class="mtitle mtitle_left"><span class="eng">Issues of Osaka</span><span class="ja">大阪が抱える課題</span></h2>
     <p class="mtext0">『<span class="marker-pale">深刻化するシングル家庭</span>』</p>
     <div class="note-side sentence2">
      <p>全国各地で、シングルマザーやシングルファザーの家庭が増加しています。</p>
      <p>そのような家庭では、親が1人で子育てと仕事を両立しなければならない現状があります。</p>
      <p>子供が体調を崩した場合、親は仕事を休む必要があり、収入が減ることで生活が困難になる負のサイクルが生じやすくなっています。</p>
      <p>このような課題を解決するために、地域全体で子育てを支える仕組みを構築することが重要です。</p>

     </div>
    </div>
   </div>
  </section>

  <section class="bg-beige">
   <div class="single">
    <p class="tcenter"><img src="img/icon2.png" alt=""></p>
    <div class="mbox animation slideup sentence2">

     <h3 class="mtitle_box t-m30"><?php echo $company; ?>のミッション</h3>
     <div class="column2">
      <div class="child04">
       <p class="mtext0">『家庭の自立をサポートする』</p>
       <p>家庭や仕事の状況により、子供と十分に向き合えない親御さんや、支援を必要としている子供たちが増えています。</p>
       <p>私たちは、そのような方々を支えるために、地域全体で協力しながらさまざまな取り組みを行っています。</p>
       <p>これらの活動を通じて、地域がつながり、支え合うコミュニティを築き、共に子育てを進めていきたいと考えています。</p>
       <p>最終的には、シングル家庭が自立し、明るい未来を実現することを目指しています。</p>

      </div>
      <div class="child03">
       <img src="img/mission.jpg" alt="私たちのミッション" class="img-r">
      </div>
     </div>

    </div>
    <div class="mbox animation slideup sentence2" data-aos="fade" data-aos-delay="200" data-aos-duration="800">

     <h3 class="mtitle_box t-m30">現在の活動に至るまで</h3>

     <div class="column2">
      <div class="child03">
       <img src="img/daihyo.jpg" alt="<?php echo $daihyo; ?>" class="img-r">
      </div>
      <div class="child04">
       <p>元スクールソーシャルワーカーとして働いていた代表が、学校だけでは十分にサポートできない子供たちがいる現状を目の当たりにし、学校以外の場で活動を始めたことがきっかけです。</p>
       <p>最初は1人で家庭を訪問し、登校支援や食事支援を行っていましたが、より多くの子供たちを支援するため、2024年に活動を法人化し、規模を拡大しました。</p>
       <p>現在では、保育園児から中学生までを対象に、パートスタッフや大学生ボランティア、地域住民の協力を得ながら、さまざまな支援活動に取り組んでいます。</p>
      </div>
     </div>


    </div>

   </div>
  </section>

  <section>
   <div class="single">
    <h2 class="mtitle"><span class="eng">Our Action</span><span class="ja">活動内容</span></h2>
    <div class="column2">
     <div class="child-img" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
      <div class="bgextend bgLRextendTrigger"><img src="img/point01.jpg"></div>
     </div>
     <div class="child-txt blurTrigger sentence2">
      <h2 class="title03"><span class="ja">学習支援</span></h2>

      <p class="t-m15">学校に通えない子供たちを支援するため、私たちは学習の場を提供しています。</p>
      <p>安全で安心できる環境の中で、大学生ボランティアが子供たち一人ひとりの学習ペースや興味に合わせた指導を行っています。勉強の遅れを取り戻すだけでなく、学ぶ楽しさや自己肯定感を育むことを目指しています。</p>
      <p>また、学校や役所と連携することで、子供たちが必要な支援を継続的に受けられるよう体制を整えています。この取り組みにより、地域全体で子供たちを支え、未来への道を広げています。</p>

     </div>
    </div>
   </div>

   <div class="single margin-top">
    <div class="column2">
     <div class="child-img type1" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
      <div class="bgextend bgLRextendTrigger"><img src="img/point02.jpg"></div>
     </div>
     <div class="child-txt type1 blurTrigger sentence2">
      <h2 class="title03"><span class="ja">登校支援</span></h2>
      <p>保育園児から小学生までの子供たちを対象に、家庭の事情で登校が難しい子供たちを支援しています。</p>
      <p>朝の準備や送迎をサポートし、子供たちが安心して学校へ通える環境を整えることで、楽しく充実した学校生活を送れるよう取り組んでいます。</p>
      <p>私たちは、子供たち一人ひとりが笑顔で学校に通い、自信を持って日々を過ごせるよう支援を続けていきます。</p>

     </div>
    </div>
   </div>

   <div class="single margin-top">
    <div class="column2">
     <div class="child-img" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
      <div class="bgextend bgLRextendTrigger"><img src="img/point03.jpg"></div>
     </div>
     <div class="child-txt blurTrigger sentence2">
      <h2 class="title03"><span class="ja">食事支援</span></h2>

      <p>子供たちが健やかに元気な姿で成長していくため、ボランティアの方が作った美味しいお弁当や、寄付していただいたお金で準備した温かい食事を提供しています。</p>
      <p>子ども達の健康を大切にし、笑顔と共に成長していくことを目指し続けます。</p>

     </div>
    </div>
   </div>

   <div class="single margin-top">
    <div class="column2">
     <div class="child-img type1" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
      <div class="bgextend bgLRextendTrigger"><img src="img/point04.jpg"></div>
     </div>
     <div class="child-txt type1 blurTrigger sentence2">
      <h2 class="title03"><span class="ja">物資提供・配達支援</span></h2>

      <p>支援を必要とするご家庭に、食料品や衣類、日用品など、生活に欠かせない物資を提供しています。</p>
      <p>外出が難しいご家庭にも配達支援を行い、必要な物資が届くようサポートしています。</p>
      <p>暮らしの安定と生活の質を高めることで、少しでも心地よい環境で過ごせるよう支援を続けています。</p>

     </div>
    </div>
   </div>
  </section>

 </div>
 <?php include 'footer.php'; ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 <script src="aos/aos.js"></script>
 <script src="aos/aos_set.js"></script>
 <script src="js/txt-glow.js?<?= time() ?>"></script>
 <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>