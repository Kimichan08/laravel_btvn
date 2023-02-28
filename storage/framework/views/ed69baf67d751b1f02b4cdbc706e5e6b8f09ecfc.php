
<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-success m-3">Add Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>
                            <?php if($item->status): ?>
                                <span class="badge badge-primary">Active</span>
                            <?php else: ?>
                            <span class="badge badge-danger">No Active</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-flex">
                            <a href="<?php echo e(route('category.edit',$item->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('category.destroy',$item->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($categories->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\btlaravel\resources\views/category/index.blade.php ENDPATH**/ ?>