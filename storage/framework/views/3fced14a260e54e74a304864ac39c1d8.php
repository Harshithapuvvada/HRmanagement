<?php $__env->startPush('page-styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('Modules/Whiteboard/resources/apps/ExcaliDraw/app.scss'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('page-content'); ?>
    <div class="content container-fluid">        
        <div id="ExcalidrawApp"></div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('page-scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')("Modules/Whiteboard/resources/apps/ExcaliDraw/main.jsx"); ?>
    <script type="module">
        $(document).ready(function(){
            $('html').attr('data-sidebar-size','sm-hover')
        })
    </script>
    <!-- /Page Js -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\harsh\Downloads\Laravel-Smarthr-main\Laravel-Smarthr-main\Modules/Whiteboard\resources/views/excalidraw.blade.php ENDPATH**/ ?>