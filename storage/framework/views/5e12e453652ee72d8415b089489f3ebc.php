<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-auto sidebar px-0">
                <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <div class="py-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h1 class="mb-0">Food list</h1>
                                            <a href="<?php echo e(route('admin/products/create')); ?>" class="btn btn-primary mb-3">Add Product</a>
                                        </div>
                                        <form action="<?php echo e(route('admin/products')); ?>" method="GET" class="mb-3">
                                            <div class="input-group">
                                                <input type="text" name="search" class="form-control" placeholder="Search for...">
                                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                                            </div>
                                        </form>
                                        <hr />
                                        <?php if(Session::has('success')): ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo e(Session::get('success')); ?>

                                            </div>
                                        <?php endif; ?>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($product->id); ?></td>
                                                        <td style="width: 100px; height: 100px;">
                                                            <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>" style="max-width: 100%; max-height: 100%;">
                                                        </td>
                                                        <td><?php echo e($product->title); ?></td>
                                                        <td><?php echo e($product->category->name); ?></td>
                                                        <td><?php echo $product->description; ?></td>
                                                        <td><?php echo e($product->price); ?></td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="<?php echo e(route('admin/products/edit', ['id'=>$product->id])); ?>" type="button" class="btn btn-primary">Edit</a>
                                                                <a href="<?php echo e(route('admin/products/delete', ['id'=>$product->id])); ?>" type="button" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td class="text-center" colspan="7">Product not found</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <?php echo e($products->appends(request()->input())->links()); ?> <!-- Add this line for pagination with search -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\Rangsey\Y3S2\WCTII\ForPostGit\SweetHaven\resources\views/admin/product/home.blade.php ENDPATH**/ ?>