<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include 'layout/header.php';
    ?>
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <?php
      include 'layout/menu.php';
    ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Cart</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="cart.php">Cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->
    <section>
    <body style="background-color:aliceblue;">
<div class="container"> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><i class="glyphicon glyphicon-globe"></i> Đăng nhập!
   </legend> 
   <form action="dangnhapController.php" method="POST" class="form" role="form"> 
    <input class="form-control" name="txt_username" placeholder="Username" type="username">
    <input class="form-control" name="txt_password" placeholder="Mật khẩu" type="password"> 
    <div class="form-group"> 
     <div class="checkbox"> <label for="c1"><input id="c1" name="ck_thongtin" type="checkbox">Nhớ thông tin</label> 
     </div> 
    </div> 
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng nhập</button> 
    <hr> 
     <p class="text-center">Bạn có tài khoản không? <strong><a href="dangky.php">Đăng ký ngay!</a></strong></p>
   </form> 
  </div> 
 </div>
</div>
</body>
    </section>
    <!--================End Cart Area =================-->

    <!--================ start footer Area  =================-->
    <?php
        include 'layout/footer.php';
    ?>
  </body>
</html>







                <li>
                  <!--<?php
                                if(isset($_SESSION["user_name"])){
                                    echo '<li><a href="#" > Welcome '.$_SESSION["user_name"].'</a></li>';
                                    echo '<li><a href="logoutController.php" class="dropdown-item">Đăng Xuất</a></li>';
                 
                                }
                                else{
                                    echo '<li><a href="account.php" >Đăng Nhập</a></li>';
                     
                                }
                                ?>-->
                  </li>



                  <?php
                      $arrAnh=array("img/image/đầm nữ/1.jpg","img/image/đầm nữ/2.jpg");
                      $arrTensp=array("ĐẦM CHỮ A 2 LỚP","TWEED DRESSES");
                      $arrGia=array("240.000₫","320.000₫");
                      for($i=0;$i<=count($arrTensp);$i++){
                        echo'<td>';
                        echo'<div class="media">';
                        echo'<div class="d-flex">';
                        echo'<img
                          src="'.$arrAnh[$i].'"
                          alt=""
                        />';
                        echo'</div>';
                        echo'<div class="media-body">';
                        echo'<p>'.$arrTensp[$i].'</p>';
                        echo'</div>';
                        echo'</div>';
                        echo'</td>';
                        echo'<td>';
                        echo'<h5>'.$arrGia.'</h5>';
                        echo'</td>';
                      }
                  ?>
                  