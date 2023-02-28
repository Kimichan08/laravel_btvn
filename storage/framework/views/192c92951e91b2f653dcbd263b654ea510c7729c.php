
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="text-center text-success">Update</h2>
        <form method="POST" action="<?php echo e(route('category.update',$category->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo e($category->name); ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" value="1" <?php echo e($category->status ? 'checked' : ''); ?>>
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" value="0" <?php echo e($category->status ? 'checked' : ''); ?>>
                        No Active
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\btlaravel\resources\views/category/edit.blade.php ENDPATH**/ ?>