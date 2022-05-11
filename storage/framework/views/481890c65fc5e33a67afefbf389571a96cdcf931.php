<?php $__env->startSection('admin_content'); ?>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê thương hiệu sản phẩm
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
            <th>Tên thương hiệu</th>
            <th>Brand Slug</th>
            <th>Chế độ hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $all_brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td></td>
            <td><?php echo e($brand_pro->brand_name); ?></td>
            <td><?php echo e($brand_pro->brand_slug); ?></td>
            <td><span class="text-ellipsis">
              <?php
               if($brand_pro->brand_status==0){
                ?>
                <a href="<?php echo e(URL::to('/unactive-brand-product/'.$brand_pro->brand_id)); ?>"><span class="fa-thumb-styling fa fa-check"></span></a>
                <?php
                 }else{
                ?>  
                 <a href="<?php echo e(URL::to('/active-brand-product/'.$brand_pro->brand_id)); ?>"><span class="fa-thumb-styling fa fa-times"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="<?php echo e(URL::to('/edit-brand-product/'.$brand_pro->brand_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="<?php echo e(URL::to('/delete-brand-product/'.$brand_pro->brand_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        
        </div>
      </div>
    </footer>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shopbanhang\resources\views/admin/all_brand_product.blade.php ENDPATH**/ ?>