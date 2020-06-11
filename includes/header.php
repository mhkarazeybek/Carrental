
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/ototatak.png" width="120" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Yardım için iletişim: </p>
              <a href="mailto:info@example.com">test@domain.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Servis için arayın: </p>
              <a href="tel:61-1234-5678-09">+90-555-555-5555</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://www.facebook.com/mehmet.tatak.39/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/mehmet_tatak" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/mehmet-tatak-b32817168/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/mehmett_tatak/?hl=tr" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Giris / Kayıt</a> </div>
<?php }
 ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profil Ayarları</a></li>
              <li><a href="update-password.php">Şifre Güncelle</a></li>
            <li><a href="my-booking.php">Rezervasyon</a></li>
            <li><a href="post-testimonial.php">Referans Yap</a></li>
          <li><a href="my-testimonials.php">Bonservis</a></li>
            <li><a href="logout.php">Çıkış Yap</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profil Ayarları</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sifre Güncelle</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Rezervasyon Yap</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Referans</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Referanslarım</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Çıkıs yap</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Ara..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Anasayfa</a>    </li>
          <li><a href="page.php?type=hakkimizda">Hakkımızda</a></li>
          <li><a href="car-listing.php">Araba Listesi</a>
          <li><a href="contact-us.php">İletişime Geç</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>