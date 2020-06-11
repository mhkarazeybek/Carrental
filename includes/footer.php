<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Zaten abone olundu.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Başarılı şekilde abone olundu.');</script>";
}
else 
{
echo "<script>alert('Bir şeyler ters gitti. Lütfen tekrar deneyin.');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>Hakkımızda</h6>
          <ul>

        
          <li><a href="page.php?type=aboutus">Hakkımızda</a></li>
            <li><a href="page.php?type=faqs">SSS</a></li>
            <li><a href="page.php?type=privacy">Gizlilik</a></li>
          <li><a href="page.php?type=terms">Kullanım Şartları</a></li>
               <li><a href="admin/">Admin Girişi</a></li>
          </ul>
        </div>
  
        <div class="col-md-3 col-sm-6">
          <h6>Bültene Abone Ol</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Email adresini giriniz." />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*Abone olduğumuz kullanıcılara her hafta boyunca harika fırsatlar ve en son otomobil haberleri gönderiyoruz.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Bağlantıda Kalın:</p>
            <ul>
              <li><a href="https://www.facebook.com/mehmet.tatak.39/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/mehmet_tatak" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/mehmet-tatak-b32817168/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/mehmett_tatak/?hl=tr" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">&copy;2020 Tüm Hakları Saklıdır. Oto Tatak.</p>
        </div>
      </div>
    </div>
  </div>
</footer>