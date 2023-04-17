<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/vendors.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/ui/prism.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/charts/apexcharts.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/pickers/pickadate/pickadate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/forms/select/select2.min.css')); ?>">

<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-extended.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/colors.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/components.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themes/dark-layout.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themes/semi-dark-layout.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/extensions/jquery.rateyo.min.css')); ?>">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/pages/app-user.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/pages/faq.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/pages/dashboard-analytics.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/pages/users.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/plugins/extensions/ext-component-ratings.css')); ?>">
<?php if(Auth::user()->role == 'Pencari'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/core/menu/menu-types/horizontal-menu.css')); ?>">
<?php endif; ?>
<!-- END: Page CSS-->


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<!-- BEGIN: Custom CSS-->

<!-- END: Custom CSS--><?php /**PATH C:\xampp\htdocs\papikos\resources\views/layouts/backend/css.blade.php ENDPATH**/ ?>