<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop bán hàng điện tử</title>
    <link href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo e(('public/frontend/images/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header"><!--header-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                
                                
                                
                                <li><a href="<?php echo e(URL::to('/trang-chu')); ?>" class="active">Trang chủ</a></li>
                           
                               <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                  <li><a href="<?php echo e(URL::to('/checkout')); ?>"> Thanh toán</a></li>
                                
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="<?php echo e(URL::to('/payment')); ?>">Thanh toán</a></li>
                                 <?php 
                                }else{
                                ?>
                                 <li><a href="<?php echo e(URL::to('/login-checkout')); ?>"> Thanh toán</a></li>
                                <?php
                                 }
                                ?>
                                

                                <li><a href="<?php echo e(URL::to('/show-cart')); ?>">Giỏ hàng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                  <li><a href="<?php echo e(URL::to('/logout-checkout')); ?>"> Đăng xuất</a></li>
                                
                                <?php
                            }else{
                                 ?>
                                 <li><a href="<?php echo e(URL::to('/login-checkout')); ?>"> Đăng nhập</a></li>
                                 <?php 
                             }
                                 ?>
                          
                          
                          
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="<?php echo e(URL::to('/tim-kiem')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input type="submit" style="margin-top:0;color:#fff" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                       <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                  
                                    <h2>Iphone 12 hiện đã có mặt tại shop</h2>
                                    <p>Mua ngay Iphone 12 với giá phải chăng nhất thị trường </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-5">
                                    <img src="<?php echo e(asset('public/frontend/images/iphone-12-pro-og-202009.jpg')); ?>" class="girl img-responsive" alt="" />
                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                   
                                    <h2>Laptop Lenovo IdeaPad S340 giá cực sốc</h2>
                                    <p>Mua ngay Laptop Lenovo IdeaPad S340 trả góp 0% </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo e(asset('public/frontend/images/laptop-lenovo-s340-81n70064vn.jpg')); ?>" class="girl img-responsive" alt="" />
                             
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                              
                                    <h2>Samsung Galaxy Tab S6 cũ & mới </h2>
                                    <p>Mua ngay Samsung Galaxy Tab S6 tại shop để nhận ưu đãi khủng </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo e(asset('public/frontend/images/samsung-tab-s6-cu-gia-re-cho-tot.jpg')); ?>" class="girl img-responsive" alt="" />
           
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                          <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?php echo e(URL::to('/danh-muc-san-pham/'.$cate->slug_category_product)); ?>"><?php echo e($cate->category_name); ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(URL::to('/thuong-hieu-san-pham/'.$brand->brand_slug)); ?>"> <span class="pull-right">(50)</span><?php echo e($brand->brand_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                     
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">

                   <?php echo $__env->yieldContent('content'); ?>
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
       
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Giúp đỡ trực tuyến</a></li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                                <li><a href="#">Trạng thái đặt hàng</a></li>
                                <li><a href="#">Thay đổi địa chỉ đặt</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Mua nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo e(URL::to('/danh-muc-san-pham/laptop')); ?>">Laptop</a></li>
                                <li><a href="<?php echo e(URL::to('/danh-muc-san-pham/may-tinh-bang')); ?>">Tablet</a></li>
                                <li><a href="<?php echo e(URL::to('/danh-muc-san-pham/dien-thoai')); ?>">Di động</a></li>
                          
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Về cửa hàng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin cửa hàng</a></li>
        
                                <li><a href="#">Địa chỉ</a></li>
                          
                                <li><a href="#">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Về chúng tôi</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Địa chỉ email của bạn" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận những thông tin sớm nhất từ chúng tôi.... </p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 20120 CuaHangDoDienTu All rights reserved.</p>
                   
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="<?php echo e(asset('public/frontend/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH E:\xampp\htdocs\shopbanhanglaravel\resources\views/layout.blade.php ENDPATH**/ ?>