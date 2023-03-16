<?php
    include('./top.php');
?>
    　 <main class="contact">
    　     <section class="form">
    　         <h2>お問い合わせ</h2>
    　         <h3>お電話でのお問い合わせ</h3>
    　         <p><span>XX-XXXX-XXXX</span></p>
    　         <h3>メールでのお問い合わせ</h3>
    　         <div class="note">
    　             <p>※注意※</p>
    　             <p>営業時間外に頂いたお問い合わせにつきましては、翌営業日以降の回答となります。（※お急ぎの場合はお電話にてお問合せください）<br>尚、診断書・紹介状等に関しましてはご用意までに数日掛かりますのであらかじめご了承くださいませ。
    　             </p>
    　         </div>
    　         <form method="post" action="e-mail">
    　             <div class="form_text">
    　                 <div class="top_b"><span>※お名前</span></div>
    　                 <div class="bottom_b"><input type="text" name="user_name" placeholder="〇〇太郎"></div>
    　             </div>
    　             <div class="form_text"> 
    　                 <div class="top_b"><span>※メールアドレス</span></div>
    　                 <div class="bottom_b"><input type="text" name="e-mail" placeholder="XXXXX@XXXX.com"></div>
    　             </div>
    　             <div class="form_text">
    　                 <div class="top_b">お電話番号</div>
    　                 <div class="bottom_b"><input type="text" name="telephoneNumber" placeholder="XX-XXXX-XXXX"></div>
    　             </div>
    　             
    　             <div class="radio_box">
    　               <div class="top_b"><span>※お問い合わせ種別</span></div>
    　               <div class="bottom_b"><input type="radio" name="question" value="1" checked>ケガ・違和感について<br><input type="radio" name="question" value="2">リハビリについて<br> <input type="radio" name="question" value="3">診断書、紹介状等について<br><input type="radio" name="question" value="4">その他</div>
    　             </div>
    　             
    　             
    　             
    　             
    　             <div class="form_box">
    　                 <div class="top_b"><span>※お問い合わせ内容</span></div>
    　                 <div class="bottom_b"><textarea name="message" cols"100%" rows="12"></textarea></div>
    　             </div>
    　             <div class="form_last"><input type="submit" value="送 信"></div>
    　         </form>
    　     </section>
    　 </main>
    　 
    　
    　 <footer>
           <div class="f_box">
               <div class="f_logo">
                   <p><img src="../image/logo/mainlogo.jpg" alt="理想の整形外科クリニック"></p>
               </div>
               <div class="f_name">
                   <h1>理想の整形外科クリニック</h1>
               </div>
               <div class="f_list">
                   <ul>
                       <li><a href="./portfolio_roc.html">HOME</a></li>
                       <li><a href="./portfolio_roc_about.html">院内紹介</a></li>
                       <li><a href="./portfolio_roc_staff.html">スタッフ紹介</a></li>
                       <li class="li_under"><a href="./portfolio_roc_firstTime.html">ご来院の方へ</a></li>
                       <li class="li_under"><a href="./portfolio_roc_contact.html">お問い合わせ</a></li>
                   </ul>
               </div>
           </div>
           <p>
               <small>©理想の整形外科クリニック</small>
           </p>
       </footer>
   </body>
</html>