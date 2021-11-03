<?php 

require_once'header.php';

islemkontrol();



?>
<!-- Header Area End Here -->
<!-- Main Banner 1 Area Start Here -->
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">

        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Settings Page Start Here -->
<div class="settings-page-area bg-secondary section-space-bottom">
    <div class="container">





        <div class="row settings-wrapper">


            <?php require_once 'hesap-sidebar.php' ?>



            <!--SAYFA SÜREKLİ YÜKLENIYOR GİBİ GÖRÜNÜYOR O YÜZDEN KODU ÖLDÜRDÜM-->


                <!--        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <ul class="settings-title">
                                <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Hesap Bilgilerim</a></li>
                                <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                                <li><a href="#Badges" data-toggle="tab" aria-expanded="false">Badges</a></li>
                                <li><a href="#E-mail" data-toggle="tab" aria-expanded="false">E-mail Settings</a></li>
                                <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                            </ul>
                        </div> -->





                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 



                            <?php 

                            if ($_GET['durum']=="hata") {?>

                            <div class="alert alert-danger">
                                <strong>Hata!</strong> İşlem Başarısız
                            </div>

                        <?php } else if ($_GET['durum']=="ok") {?>

                            <div class="alert alert-success">
                                <strong>Bilgi</strong> Kayıt Başarılı
                            </div>

                        <?php } ?>








                        <form action="nedmin/netting/kullanici.php" method="POST" class="form-horizontal" id="personal-info-form">
                            <div class="settings-details tab-content">
                                <div class="tab-pane fade active in" id="Personal">
                                    <h2 class="title-section">Hesap Bilgilerim</h2>
                                    <div class="personal-info inner-page-padding"> 




                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Mail</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="first-name" value="<?php echo $kullanicicek['kullanici_mail'] ?>" disabled="" type="text">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Ad</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="first-name" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad'] ?>" type="text">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Soyad</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="last-name" name="kullanici_soyad" value="<?php echo $kullanicicek['kullanici_soyad'] ?>" type="text">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Telefon GSM</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>" id="company-name" type="text">
                                            </div>
                                        </div>


                                        <!--Kullanıcı ID Gönder-->

                                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">



                                        <div class="form-group">

                                            <div align="right" class="col-sm-12">
                                              <button class="update-btn" name="musteribilgiguncelle" id="login-update">Bilgileri Güncelle</button> 
                                          </div>
                                      </div>                                        
                                  </div> 
                              </div>                                     
                          </div> 
                      </form> 
                  </div>  
              </div>  
          </div>  
      </div> 
      <!-- Settings Page End Here -->
      <?php require_once'footer.php'; ?>
