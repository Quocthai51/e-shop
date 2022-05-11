<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $product_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(URL::to('/public/uploads/product/'.$value->product_image)); ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($value->product_name); ?></h2>
								<p>Mã ID: <?php echo e($value->product_id); ?></p>
								<img src="images/product-details/rating.png" alt="" />
								
								<form action="<?php echo e(URL::to('/save-cart')); ?>" method="POST">
									<?php echo e(csrf_field()); ?>

								<span>
									<span><?php echo e(number_format($value->product_price).'VNĐ'); ?></span>
								
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1"  value="1" />
									<input name="productid_hidden" type="hidden"  value="<?php echo e($value->product_id); ?>" />
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm giỏ hàng
									</button>
							
								</span>
								</form>

								<p><b>Tình trạng:</b> Còn hàng</p>
							
								<p><b>Thương hiệu:</b> <?php echo e($value->brand_name); ?></p>
								<p><b>Danh mục:</b> <?php echo e($value->category_name); ?></p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
							
								<li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<p><?php echo $value->product_desc; ?></p>
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<p><?php echo $value->product_content; ?></p>
								
						
							</div>
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Nuna</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>14 DEC 2020</a></li>
									</ul>
									
									<p><b>Viết đánh giá của bạn</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Tên của bạn"/>
											<input type="email" placeholder="Địa chỉ Email"/>
										</span>
										<textarea name="" ></textarea>
								
										<button type="button" class="btn btn-default pull-right">
											Gửi
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
							<?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lienquan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											 <div class="single-products">
		                                        <div class="productinfo text-center">
		                                            <img src="<?php echo e(URL::to('public/uploads/product/'.$lienquan->product_image)); ?>" alt="" />
		                                            <h2><?php echo e(number_format($lienquan->product_price).' '.'VNĐ'); ?></h2>
		                                            <p><?php echo e($lienquan->product_name); ?></p>
		                                           
		                                        </div>
		                                      
                                			</div>
										</div>
									</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		

								
								</div>
									
							
					</div><!--/recommended_items-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shopbanhang\resources\views/pages/sanpham/show_details.blade.php ENDPATH**/ ?>