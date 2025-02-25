<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title>法人概要｜<?php echo $title; ?></title>
 <meta name="Description" content="法人概要｜<?php echo $description; ?>">

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

  <div class="page-title">
   <div class="inner">
    <h2 class="page-lead"><span class="eng glowAnime">About us</span><span class="ja">法人概要</span></h2>
   </div>
  </div>
  <ol class="breadcrumb">
   <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
   <li>法人概要</li>
  </ol>


  <section class="">
   <div class="single ">
    <div class="mbox transparent">
     <div class="staff-wrap container-box b-m30">
      <div class="staff-img">
       <p class="frames" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
        <img src="img/daihyo-greet.jpg" alt="代表紹介">
       </p>
       <div class="name"><span>-代表-</span><?php echo $daihyo; ?></div>
      </div>
      <div class="staff-detail" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">

       <h2 class="mtitle tcenter"><span class="eng">Greeting</span><span class="ja">代表紹介</span></h2>
       <div class="sentence2">
        <p>大阪府大阪市出身。調理師としての経験を積んだ後、2013年に地域活動へ参加し、子供たちの居場所づくりを目指して<?php echo $company; ?>を設立しました。</p>
        <p>子供たち一人ひとりに寄り添い、心の支えとなる存在でありたいという想いを大切にしながら、これまでの経験を活かして活動を続けています。</p>
        <p>これまでに多くの方々からご支援をいただき、心から感謝申し上げます。</p>
        <p>これからも皆さまの温かいご支援と共に、子供たちの未来を明るく照らす活動を続けていけるよう努めてまいります。</p>
       </div>


       <p class="tright mtext1 t-m30">
        <sapn class="f-s12">代表</sapn> <?php echo $daihyo; ?>
       </p>
      </div>
     </div>
    </div>

   </div>
  </section>

  <section class="bg-03">
   <div class="single type1">
    <h2 class="mtitle mtitle_left"><span class="eng">Information</span><span class="ja">法人概要</span></h2>
    <div class="mbox" data-aos="fade" data-aos-delay="200" data-aos-duration="1200">
     <table class="tbl-border type1">
      <tr>
       <th>会社名</th>
       <td>一般社団法人 <?php echo $company; ?></td>
      </tr>
      <tr>
       <th>代表</th>
       <td><?php echo $daihyo; ?></td>
      </tr>
      <tr>
       <th>設立</th>
       <td>2024年</td>
      </tr>
      <tr>
       <th>所在地</th>
       <td><?php echo $postalCode; ?> <?php echo $address; ?></td>
      </tr>
      <tr>
       <th>TEL</th>
       <td><?php echo $telNo; ?></td>
      </tr>
      <tr>
       <th nowrap>営業時間</th>
       <td>○○：○○～○○：○○</td>
      </tr>
      <tr>
       <th>定休日</th>
       <td>○○</td>
      </tr>
      <tr>
       <th>業務内容</th>
       <td>
        <ul class="list_disc">
         <li>子供たちへの食事支援、学習支援、その他のサポート</li>
         <li>安心して過ごせる居場所の提供</li>
        </ul>
       </td>
      </tr>
      <tr>
       <th>運営体制</th>
       <td>
        <ul class="list_disc">
         <li>代表：1名</li>
         <li>パートスタッフ：3名</li>
         <li>大学生ボランティア：5名</li>
         <li>その他サポートスタッフ（スポット）：5名</li>
        </ul>
       </td>
      </tr>
     </table>
    </div>
   </div>
  </section>

  <section>
   <div class="single">
    <h3 class="scr-wrap"><span class="scr-stick"></span></h3>
    <h2 class="title02 type1 tcenter"><span class="ja">アクセスマップ</span><span class="eng">Access map</span></h2>
    <div class="ggmap" data-aos="fade" data-aos-delay="200" data-aos-duration="1200">
     <?php echo $googlemap; ?>
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