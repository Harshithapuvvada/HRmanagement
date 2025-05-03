<?php $__env->startSection('page-content'); ?>
    <div class="content container-fluid">

        <!-- Page Header -->
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['class' => 'col']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col']); ?>
             <?php $__env->slot('title', null, []); ?> <?php echo e(__('Budgets')); ?> <?php $__env->endSlot(); ?>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#"><?php echo config('accounting.name'); ?></a>
                </li>
            </ul>
             <?php $__env->slot('right', null, []); ?> 
                <div class="col-auto float-end ms-auto">
                    <a data-url="<?php echo e(route('budgets.create')); ?>" href="javascript:void(0)" class="btn add-btn"
                        data-ajax-modal="true"
                        data-size="lg" data-title="<?php echo e(__('Add Budget')); ?>">
                        <i class="fa-solid fa-plus"></i> <?php echo e(__('Add Budget')); ?>

                    </a>
                </div>
             <?php $__env->endSlot(); ?>
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

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(__('Title')); ?> </th>
                                <th><?php echo e(__('Type')); ?> </th>
                                <th><?php echo e(__('Start Date')); ?> </th>
                                <th><?php echo e(__('End Date')); ?> </th>
                                <th><?php echo e(__('Total Revenue')); ?> </th>
                                <th><?php echo e(__('Total Expenses')); ?> </th>
                                <th><?php echo e(__('Taxes')); ?> </th>
                                <th><?php echo e(__('Amount')); ?> </th>
                                <th class="text-end"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-scripts'); ?>
<?php echo app('Illuminate\Foundation\Vite')([
    "resources/js/datatables.js"
]); ?>
<script type="module">
    $(document).ready(function(){
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "<?php echo e(route('budgets.index')); ?>",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'title', name: 'title'},
                {data: 'type', name: 'type'},
                {data: 'startDate', name: 'startDate'},
                {data: 'endDate', name: 'endDate'},
                {data: 'revenue', name: 'revenue'},
                {data: 'expenses', name: 'expenses'},
                {data: 'taxes', name: 'taxes'},
                {data: 'amount', name: 'amount'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            initComplete: function(){
                $('tr>td:last-child').addClass('text-end')
            }
        })
    })
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\harsh\Downloads\Laravel-Smarthr-main\Laravel-Smarthr-main\Modules/Accounting\resources/views/budgets/index.blade.php ENDPATH**/ ?>