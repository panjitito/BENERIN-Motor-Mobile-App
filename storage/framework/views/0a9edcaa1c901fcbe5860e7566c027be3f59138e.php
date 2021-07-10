<div class="form-group has-feedback row <?php echo e($errors->has('description') ? ' has-error ' : ''); ?>">
    <label for="description" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.permissions-form.permission-desc.label")); ?>

    </label>
    <div class="col-12">
        <textarea id="description" name="description" class="form-control" placeholder="<?php echo e(trans('laravelroles::laravelroles.forms.permissions-form.permission-desc.placeholder')); ?>"><?php echo e($description); ?></textarea>
    </div>
    <?php if($errors->has('description')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('description')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Tito\Google Drive\Project\BENERIN\Mobile App\laravel\vendor\jeremykenedy\laravel-roles\src/resources/views//laravelroles/forms/partials/permission-desc-input.blade.php ENDPATH**/ ?>