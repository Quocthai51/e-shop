<?php $__env->startSection('admin_content'); ?>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
   
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
               
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Slug</th>
            <th>Giá</th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>
            
            <th>Chế độ hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td></td>
            <td><?php echo e($pro->product_name); ?></td>
            <td><?php echo e($pro->product_slug); ?></td>
            <td><?php echo e($pro->product_price); ?></td>
            <td><img src="public/uploads/product/<?php echo e($pro->product_image); ?>" height="100" width="100"></td>
            <td><?php echo e($pro->category_name); ?></td>
            <td><?php echo e($pro->brand_name); ?></td>

            <td><span class="text-ellipsis">
              <?php
               if($pro->product_status==0){
                ?>
                <a href="<?php echo e(URL::to('/unactive-product/'.$pro->product_id)); ?>"><span class="fa-thumb-styling fa fa-check"></span></a>
                <?php
                 }else{
                ?>  
                 <a href="<?php echo e(URL::to('/active-product/'.$pro->product_id)); ?>"><span class="fa-thumb-styling fa fa-times"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="<?php echo e(URL::to('/edit-product/'.$pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="<?php echo e(URL::to('/delete-product/'.$pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
    
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shopbanhang\resources\views/admin/all_product.blade.php ENDPATH**/ ?>