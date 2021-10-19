<style type="text/css">
   .btn_menu_search {
   width: 86.8%;
   /* border-radius: 5px; */
   background: #b30303;
   height: 54px;
   }
   a {
   height: 54px;
   }
   #cssmenu > ul > li > a:after {
   content: none;
   }
   #cssmenu > ul > li > a:hover {
   color: #00CCFF;
   }
   #cssmenu > ul > li > a {
   padding: 17px 20px;
   }
     .navbar-fixed-top {
      background: #b30303;
    top: -60px;
    transition: top 800ms ease 0s;
    position: fixed;
    z-index: 9999;
}
        .show {
            top: 0px;
        }
</style>
<section>
   <div id="nav" style="width: 100%;margin: auto; height: 54px;position: block;" >
      <div style="max-width: 86.8%;background: #b30303;margin: auto;" >
         <div class="" >
            <div style="width: 65%;margin: auto;" class="">
               <div id='cssmenu'>
                  <ul>
                     <li class='active' style=" height: 54px;"><a href='<?php echo BASE_URL?>'>Trang chủ</a></li>
                     <li class=''><a href='<?php echo BASE_URL?>/index/lienhe'>Giới thiệu</a></li>
                     <li class=''>
                        <a href='<?php echo BASE_URL?>/sanpham/tatca'>Sản phẩm</a>
                        <ul>
                           <?php
                              foreach($category as $key => $cate){
                              ?>
                           <li>
                              <a href='<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['idCP'] ?>'><span><?php echo $cate['titelCP'] ?></span></a>
                           </li>
                           <?php
                              }
                              ?>
                        </ul>
                     </li>
                     <li class=''>
                        <a href='<?php echo BASE_URL?>/tintuc/tatca'>Tin tức</a>
                        <ul>
                           <?php
                              foreach($category_post as $key => $cate){
                              ?>
                           <li>
                              <a href='<?php echo BASE_URL?>/tintuc/danhmuc/<?php echo $cate['id_Cpost'] ?>'><span><?php echo $cate['title_Cpost'] ?></span></a>
                           </li>
                           <?php
                              }
                              ?>
                        </ul>
                     </li>
                     <li class=''><a href='<?php echo BASE_URL?>/giohang'>Giỏ hàng</a></li>
                     <?php
                        if(Session::get('customer')==true){
                            ?> 
                     <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangxuat'>Đăng xuất</a></li>
                     <?php 
                        }else{
                         ?>   
                     <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangnhap'>Tài khoản</a></li>
                     <?php 
                        }
                        ?>
                     <li class=''><a href='<?php echo BASE_URL?>/index/lienhe'>Liên hệ</a></li>
                  </ul>
               </div>
            </div>
            <div class="clear"></div>
         </div>
      </div>
      <div class="clear"></div>
   </div>
</section>