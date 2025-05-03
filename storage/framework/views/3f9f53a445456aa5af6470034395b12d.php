<?php $__env->startPush('page-styles'); ?>
    <!-- Page Css -->
    <!-- /Page Css -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('page-content'); ?>
    <div class="content container-fluid">

        <!-- Page Header -->
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> <?php echo e(__('Profile')); ?> <?php $__env->endSlot(); ?>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                </li>
                <li class="breadcrumb-item active">
                    <?php echo e(__('Profile')); ?>

                </li>
            </ul>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
        <!-- /Page Header -->
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img
                                            src="<?php echo e(!empty($user->avatar) ? asset('storage/users/' . $user->avatar) : asset('images/user.jpg')); ?>"
                                            alt="User Image"></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0"><?php echo e($user->fullName); ?></h3>
                                            <div class="small doj text-muted">
                                                <?php echo e(__('Date Joined')); ?> : <?php echo e(format_date($user->created_at, ' D M Y')); ?>

                                            </div>
                                            <div class="staff-msg">
                                                <a class="btn btn-custom" href="chat.html"><?php echo e(__('Send Message')); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <?php if(!empty($user->phone)): ?>
                                                <li>
                                                    <div class="title"><?php echo e(__('Phone')); ?>:</div>
                                                    <div class="text"><a href="#"><?php echo e($user->phoneNumber); ?></a>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(!empty($user->email)): ?>
                                                <li>
                                                    <div class="title"><?php echo e(__('Email')); ?>:</div>
                                                    <div class="text"><a href=""><?php echo e($user->email); ?></a></div>
                                                </li>
                                            <?php endif; ?>

                                            <?php if(!empty($user->address)): ?>
                                                <li>
                                                    <div class="title"><?php echo e(__('Address')); ?>:</div>
                                                    <div class="text"><a href=""><?php echo e($user->address); ?></a></div>
                                                </li>
                                            <?php endif; ?>

                                            <?php if(!empty($user->gender)): ?>
                                                <li>
                                                    <div class="title"><?php echo e(__('Gender')); ?>:</div>
                                                    <div class="text"><a href=""><?php echo e($user->gender); ?></a></div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-edit">
                                <a data-ajax-modal="true" data-title="Profile Information" data-size="lg"
                                    class="edit-icon" href="javascript:void(0)" data-url="<?php echo e(route('profile.edit')); ?>"><i class="fa-solid fa-pencil"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-scripts'); ?>
    <!-- Page Js -->

    <!-- /Page Js -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\harsh\Downloads\Laravel-Smarthr-main\Laravel-Smarthr-main\resources\views/pages/profile.blade.php ENDPATH**/ ?>