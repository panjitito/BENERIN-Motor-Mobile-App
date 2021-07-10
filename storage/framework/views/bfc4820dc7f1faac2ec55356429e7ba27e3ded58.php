<?php if(config('settings.googleanalyticsId')): ?>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('settings.googleanalyticsId')); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo e(config('settings.googleanalyticsId')); ?>');
    </script>
<?php endif; ?>
<?php /**PATH C:\Users\Tito\Google Drive\Project\BENERIN\Mobile App\laravel\resources\views/scripts/ga-analytics.blade.php ENDPATH**/ ?>