
<!DOCTYPE html>
<html lang="en">

<head>

    <title>SB Admin 2 - <?php echo e($title); ?></title>

    <?php echo $__env->make('admin-components.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo $__env->make('admin-components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php echo $__env->make('admin-components.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> <?php echo $__env->yieldContent('content-title'); ?> </h1>

                    <?php echo $__env->yieldContent('content'); ?>

                </div>

            </div>
            <!-- End of Main Content -->

            <?php echo $__env->make('admin-components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php echo $__env->make('admin-components.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/layouts/admin.blade.php ENDPATH**/ ?>