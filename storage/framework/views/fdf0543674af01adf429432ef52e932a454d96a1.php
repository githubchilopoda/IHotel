<?php $__env->startSection('title', 'Тохиргоо'); ?>

<?php $__env->startSection('content'); ?>
<div class="eleven wide column">
	<form class="ui form green segment" action="<?php echo e(url('profile/option')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

		<h4 class="ui header">Тохиргоо</h4>
		<div class="ui divider"></div>
    	<div class="required field">
    		<label>Долларын ханш (₮)</label>
			<input type="text" value="<?php echo e($options[6]->value); ?>" name="option-7">
		</div>
	    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<?php if($option->id == 1): ?>
		    	<div class="required field">
		    		<label>Бидний тухай</label>
					<textarea name="option-1"><?php echo e($option->value); ?></textarea>
				</div>
		    	<div class="required field">
		    		<label>Бидний тухай (Англи)</label>
					<textarea name="option-1-en"><?php echo e($option->value); ?></textarea>
				</div>
	    	<?php endif; ?>
	    	<?php if($option->id == 2): ?>
		    	<div class="required field">
		    		<label>Танилцуулга</label>
					<textarea name="option-2"><?php echo e($option->value); ?></textarea>
				</div>
		    	<div class="required field">
		    		<label>Танилцуулга (Англи)</label>
					<textarea name="option-2-en"><?php echo e($option->value); ?></textarea>
				</div>
	    	<?php endif; ?>
	    	<?php if($option->id == 3): ?>
		    	<div class="required field">
		    		<label>Хаяг</label>
					<textarea name="option-3"><?php echo e($option->value); ?></textarea>
				</div>
		    	<div class="required field">
		    		<label>Хаяг (Англи)</label>
					<textarea name="option-3-en"><?php echo e($option->value); ?></textarea>
				</div>
	    	<?php endif; ?>
	    	<?php if($option->id == 4): ?>
		    	<div class="required field">
		    		<label>Утас</label>
					<input type="text" name="option-4" value="<?php echo e($option->value); ?>">
				</div>
	    	<?php endif; ?>
	    	<?php if($option->id == 5): ?>
		    	<div class="required field">
		    		<label>Цахим шуудан</label>
					<input type="text" name="option-5" value="<?php echo e($option->value); ?>">
				</div>
	    	<?php endif; ?>
	    	<?php if($option->id == 6): ?>
		    	<div class="required field">
		    		<label>Байршил</label>
					<div id="map" style="height:300px"></div>
					<input type="hidden" value="<?php echo e(json_decode($option->value)[0]); ?>" name="lat" id="lat">
					<input type="hidden" value="<?php echo e(json_decode($option->value)[1]); ?>" name="lon" id="lon">
				</div>
	    	<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="field">
			<button class="ui button primary" type="submit">Хадгалах</button>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjW4iZ6gWxhzJOE3Vi4wvHZcTH0vgdDqk&sensor=false&libraries=places&callback=initMap">
</script>

<script type="text/javascript">
	function initMap() {
	    var map = new google.maps.Map(document.getElementById('map'), {
	        zoom: 13,
	        center: { lat: parseFloat('<?php echo e(json_decode($options[5]->value)[0]); ?>'), lng: parseFloat('<?php echo e(json_decode($options[5]->value)[1]); ?>') },
	    });

		marker = new google.maps.Marker({
	             position: { lat: parseFloat('<?php echo e(json_decode($options[5]->value)[0]); ?>'), lng: parseFloat('<?php echo e(json_decode($options[5]->value)[1]); ?>') },
	             map: map                    
		})

		google.maps.event.addListener(map, "click", function (e) {
			var lat = e.latLng.lat();
			var lon = e.latLng.lng();
			marker.setPosition(new google.maps.LatLng(lat, lon));
			$('#lat').val(lat);
			$('#lon').val(lon);
		});
	}
	$('.ui.form').form({
	    inline : true,
	    fields: {
	        option1: {
	            identifier: 'option-1',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                }
	            ]
	        },
	        option2: {
	            identifier: 'option-2',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                }
	            ]
	        },
	        option3: {
	            identifier: 'option-3',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                }
	            ]
	        },
	        option4: {
	            identifier: 'option-4',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                }
	            ]
	        },
	        option5: {
	            identifier: 'option-5',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                }
	            ]
	        },
	        option7: {
	            identifier: 'option-7',
	            rules: [
	                {
		                type   : 'empty',
		                prompt : 'Утга оруулна уу'
	                },
	                {
		                type   : 'number',
		                prompt : 'Тоо оруулна уу'
	                }
	            ]
	        },
	    },
	    onSuccess: function() {
	    	$('.ui.form button').addClass('loading disabled');
	    }
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>