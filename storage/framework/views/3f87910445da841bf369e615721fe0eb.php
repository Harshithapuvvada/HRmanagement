<?php echo app('Illuminate\Foundation\Vite')([
    'resources/js/app.js',
    'resources/assets/js/bootstrap.bundle.min.js',
    'resources/assets/js/jquery.slimscroll.min.js',
    'resources/assets/plugins/jquery-repeater/jquery.repeater.min.js',
    'resources/assets/js/app.js',
]); ?>
<!-- Vendor JS -->

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scriptConfig(); ?> 
<?php echo $__env->yieldContent('vendor-scripts'); ?>
<?php echo $__env->yieldPushContent('page-scripts'); ?>
<script defer src="<?php echo e(asset('js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')); ?>"></script>
<script type="module">
    <?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Toastify({
                text: "<?php echo e($error); ?>",
                className: "danger",
            }).showToast();
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(Session::has('message')): ?>
        var type = "<?php echo e(Session::get('alert-type', '')); ?>";
        switch (type) {
            case 'info':
                Toastify({
                    text: "<?php echo e(Session::get('message')); ?>",
                    className: "info",
                }).showToast();
                break;
            
            case 'success':
                Toastify({
                    text: "<?php echo e(Session::get('message')); ?>",
                    className: "success",
                }).showToast();
                break;
            
            case 'warning':
                Toastify({
                    text: "<?php echo e(Session::get('message')); ?>",
                    className: "warning",
                }).showToast();
                break;
            
            case 'error':
                Toastify({
                    text: "<?php echo e(Session::get('message')); ?>",
                    className: "danger",
                }).showToast();
                break;
            
            case 'danger':
                Toastify({
                    text: "<?php echo e(Session::get('message')); ?>",
                    className: "danger",
                }).showToast();
                break;
            
        }
    <?php endif; ?>
</script>
<?php /**PATH C:\Users\harsh\Downloads\Laravel-Smarthr-main\Laravel-Smarthr-main\resources\views/partials/scripts.blade.php ENDPATH**/ ?>