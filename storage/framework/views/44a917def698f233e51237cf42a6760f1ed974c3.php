<script type="text/javascript">
    var noConflictMode = jQuery.noConflict(true);
    (function ($) {
        $(document).ready(function () {
            $("#model").selectize({
                placeholder: ' <?php echo e(trans("laravelroles::laravelroles.forms.permissions-form.permission-model.placeholder")); ?> ',
                allowClear: true,
                create: true,
                highlight: true,
                diacritics: true
            });
        });
    }(noConflictMode));
</script>
<?php /**PATH C:\Users\Tito\Google Drive\Project\BENERIN\Mobile App\laravel\vendor\jeremykenedy\laravel-roles\src/resources/views//laravelroles/scripts/selectizePermission.blade.php ENDPATH**/ ?>