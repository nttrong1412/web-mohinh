 <style type="text/css">
 
div#menu_cate {
    width: 100%;
    background: #222222    ;
}
#cssmenu_flyout > ul > li > a:hover {
    color: #00CCFF;
}
#cssmenu_flyout > ul > li > a {
    background: #171717;
    margin: 0px;
    border-bottom: none;
    color: white;
    font-size: 15px;

}


 </style>
 <section>
        <div  style="margin-left: 100px;margin-right: 100px;margin-bottom: 0px;">
            <style type="text/css">
                .carousel-inner .item img {
                        height: 600px !important;
                    }
            </style>
            <!-- <div style="float:left; width: 20%;">
                 <div >
                            <div class="">
                                <div class="menu" id="menu_cate" style=" height: 500px;">
                                    <div class="" >
                                        <h3 style="   
                                            margin-left: 5px;
                                            margin-right: 5px;
                                            font-weight: 550;
                                            font-size: 15px;
                                            text-transform: uppercase;
                                            position: relative;
                                            color: white;
                                            letter-spacing: normal;
                                            background-color: #4f4f4f;
                                            text-align: center;
                                            line-height: 40px;
                                            padding: 0;

                                           " class="widget-title">Danh mục sản phẩm</h3>
                                    </div>
                                    <div >
                                        <div id='cssmenu_flyout'style="margin-top: px;">
                                            <ul style="margin-left:5px">
                                                 <?php
                                                        foreach($category as $key => $cate){
                                                    ?>
                                                <li style="background: none;" class="">
                                              <a href="<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['idCP'] ?>">
                                                
                                                  <img width="30px" src="https://statics.pancake.vn/web-media/2a/0c/a0/b1/332a755f0b664ca79208355cee0ff8e1e27e977e3613506dc485f738.png" data-image="">
                                                 
                                                <span class="title"><?php echo $cate['titelCP'] ?></span>
                                              
                                              </a>
                                              </li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div> -->
            <div style="float:left;width: 100%;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                         <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo BASE_URL ?>/public/images/bia3.jpg"  width="100%">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/bia2.jpg"  width="100%">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/bia1.jpg" width="100%">
                        </div>

                         <div class="item">
                            <img src="<?php echo BASE_URL ?>/public/images/bai4.jpg"  width="100%">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
</section>

