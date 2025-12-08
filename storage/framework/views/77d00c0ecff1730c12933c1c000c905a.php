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
    <link href="<?php echo e(asset('css/table.css')); ?>" rel="stylesheet">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-auto sidebar px-0">
                <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col">
                <div class="py-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4><b>User list</b></h4>
                                    </div>
                                    <div class="card-body row justify-content-end">
                                        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-primary mb-3 me-3" style="width: auto;">Add</a>
                                        <div class="table-responsive" id="proTeamScroll" tabindex="2" style="height: 400px; overflow: hidden; outline: none;">
                                        <form action="<?php echo e(route('admin.users.index')); ?>" method="GET" class="mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search by ID, name, or email..." name="search" value="<?php echo e($search ?? ''); ?>">
                                                <button type="submit" class="btn btn-outline-secondary">Search</button>
                                            </div>
                                        </form>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($user->id); ?></td>
                                                        <td><?php echo e($user->name); ?></td>
                                                        <td><?php echo e($user->email); ?></td>
                                                        <td><?php echo e($user->usertype); ?></td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="User Actions">
                                                                <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="btn btn-primary btn-sm me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                                                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="btn btn-danger btn-sm me-2" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fa-solid fa-trash"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <?php echo e($users->links()); ?> <!-- Add pagination links -->
                                        </div>
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
<?php /**PATH D:\Rangsey\Y3S2\WCTII\ForPostGit\SweetHaven\resources\views/admin/users/index.blade.php ENDPATH**/ ?>