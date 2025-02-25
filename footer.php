<a id="contact"></a>
<section>
 <div class="single type1 chosei">
  <h2 class="title01 tcenter"><span class="eng">Contact</span><span class="ja">お問い合わせ</span></h2>

  <div class="column2 chosei2 note-side">
   <div class="child03 bm20 tcenter">
    <img src="img/greet-img2.png" alt="いただきますの挨拶をしている二人の子どものイラスト" class="w50">
   </div>
   <div class="child04 sentence2">
    <p>
     <?php echo $company; ?>は、皆様からの寄付やご協力の下で運営できております。
    </p>
    <p>心から感謝申し上げます。</p>
    <p class="js-marker">それでも、<span>大阪の子ども達にはまだまだ足りていません</span>。</p>
    <p>皆さんの時間、食料・物資、お金、なんでも結構です。</p>
    <p>ご協力いただけることがありましたらぜひ下記よりご連絡ください。</p>
    <p>すぐにお伺いします！</p>
   </div>


  </div>
  <div class="small-box">
   <ul class="list2 type_center">
    <li><p class="btn01 type1"><a href="tel:<?php echo $telNo; ?>"><i class="fas fa-phone"></i> <?php echo $telNo; ?></a></p></li>
    <li><p class="btn01 type1 type-line"><a href="<?php echo $link_line; ?>" target="_blank"><i class="fab fa-line fa-lg green"></i> LINEでお問い合わせ</a></p></li>
   </ul>
  </div>
 </div>
</section>

<footer>
 <div id="l-footer">
  <div class="footer-column type1">
   <div class="footer-left">
    <div class="inbox">
     <p class="flogo"><a href="./"><img src="img/logo.png" alt="<?php echo $company; ?>"></a></p>


     <table class="tbl-border type1">
            <tr>
              <th>住所</th>
              <td><?php echo $postalCode; ?><br><?php echo $address; ?></td>
            </tr>
            <tr>
              <th>TEL</th>
              <td><?php echo $telNo; ?></td>
            </tr>
          </table>
     <nav class="footer_navi"></nav>
    </div>
   </div>
   <div class="footer-right">
    <?php echo $googlemap; ?>
   </div>
  </div>
 </div>
 <p class="copyright tcenter"><small>&copy;<?php echo date('Y'); ?> <?php echo $company; ?>.</small></p>
</footer>

<div id="page-top"><a href="#top"><i class="fas fa-chevron-up"></i></a></div>

<div id="sp_btn">
  <ul>
    <li><a href="tel:<?php echo $telNo; ?>"><i class="fas fa-phone"></i><span>TEL</span></a></li>
    <li><a href="<?php echo $link_line; ?>" target="_blank"><i class="fab fa-line fa-lg green"></i><span>LINE</span></a></li>
  </ul>
</div>

<div class="fixed-btn">
  <a href="<?php echo $link_line; ?>" target="_blank" class="type_line"><i class="fab fa-line fa-lg"></i>LINE</a>
</div>

<div id="js-loader" class="loader"></div>