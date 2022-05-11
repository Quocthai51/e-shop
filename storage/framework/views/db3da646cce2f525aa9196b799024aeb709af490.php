<?php $__env->startSection('admin_content'); ?>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
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
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th>Chế độ hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $all_category_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td></td>
            <td><?php echo e($cate_pro->category_name); ?></td>
            <td><?php echo e($cate_pro->slug_category_product); ?></td>
            <td><span class="text-ellipsis">
              <?php
               if($cate_pro->category_status==0){
                ?>
                <a href="<?php echo e(URL::to('/unactive-category-product/'.$cate_pro->category_id)); ?>"><span class="fa-thumb-styling fa fa-check"></span></a>
                <?php
                 }else{
                ?>  
                 <a href="<?php echo e(URL::to('/active-category-product/'.$cate_pro->category_id)); ?>"><span class="fa-thumb-styling fa fa-times"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="<?php echo e(URL::to('/edit-category-product/'.$cate_pro->category_id)); ?>" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="<?php echo e(URL::to('/delete-category-product/'.$cate_pro->category_id)); ?>" class="active styling-edit" ui-toggle-class="">
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
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shopbanhang\resources\views/admin/all_category_product.blade.php ENDPATH**/ ?>