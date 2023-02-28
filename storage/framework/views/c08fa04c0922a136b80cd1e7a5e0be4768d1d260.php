
<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success">Add Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Image</th>
                    <th>Category ID</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->price); ?></td>
                        <td><?php echo e($item->sale_price); ?></td>
                        <td><img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" width="150px" alt=""></td>
                        <td><?php echo e($item->categories->name); ?></td>
                        <td><?php echo e($item->description); ?></td>
                        <td>
                            <?php if($item->status): ?>
                                <span class="badge badge-primary">Active</span>
                            <?php else: ?>
                                <span class="badge badge-danger">No Active</span>
                            <?php endif; ?>
                        </td>
                        <td class="d-flex">
                            <a href="<?php echo e(route('product.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('product.destroy', $item->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($product->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\btlaravel\resources\views/product/index.blade.php ENDPATH**/ ?>