<div class="modal-body">
    <form method="POST" action="<?php echo e(route('roles.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label><?php echo e(__('Role Name')); ?> <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="submit-section mb-2">
            <button class="btn btn-primary submit-btn"><?php echo e(__('Submit')); ?></button>
        </div>
    </form>
</div><?php /**PATH C:\Users\harsh\Downloads\Laravel-Smarthr-main\Laravel-Smarthr-main\Modules/Roles\resources/views/create.blade.php ENDPATH**/ ?>