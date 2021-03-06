<?php $__env->startSection('title', 'Буудлын ангилал'); ?>

<?php $__env->startSection('content'); ?>
<div class="eleven wide column">
	<form class="ui form green segment" action="<?php echo e(url('profile/hotelcategory', $category->id)); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

		<h4 class="ui header">Буудлын ангилал засах</h4>
		<div class="ui divider"></div>
	    <div class="required field">
	    	<label>Нэр</label>
			<input type="text" name="name" value="<?php echo e($category->name); ?>">
		</div>
	    <div class="required field">
	    	<label>Нэр</label>
			<input type="text" name="name_en" value="<?php echo e($category->name_en); ?>">
		</div>
		<div class="field">
			<button class="ui button primary" type="submit">Хадгалах</button>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.ui.form').form({
		    inline : true,
		    fields: {
		        name: {
		            identifier: 'name',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Ангилал оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        },
		        name_en: {
		            identifier: 'name_en',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Ангилал оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        },
		    },
		    onSuccess: function() {
		    	$('.ui.form button').addClass('loading disabled');
		    }
		});
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>