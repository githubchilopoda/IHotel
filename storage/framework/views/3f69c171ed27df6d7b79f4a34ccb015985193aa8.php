<?php $__env->startSection('title', 'Слайд'); ?>

<?php $__env->startSection('content'); ?>
<div class="eleven wide column">
	<form class="ui form green segment" action="<?php echo e(url('profile/information')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		<h4 class="ui header">Слайд нэмэх</h4>
		<div class="ui divider"></div>
	    <div class="required field">
	    	<label>Гарчиг</label>
			<input type="text" name="title">
		</div>
	    <div class="required field">
	    	<label>Гарчиг (Англи)</label>
			<input type="text" name="title_en">
		</div>
	    <div class="required field">
	    	<label>Дэд гарчиг</label>
			<input type="text" name="subtitle">
		</div>
	    <div class="required field">
	    	<label>Дэд гарчиг (Англи)</label>
			<input type="text" name="subtitle_en">
		</div>
	    <div class="field">
	    	<label>Агуулга</label>
	    	<textarea name="content" id="editor"></textarea>
		</div>
	    <div class="field">
	    	<label>Агуулга (Англи)</label>
	    	<textarea name="content_en" id="editor"></textarea>
		</div>
        <div class="required field">
	    	<label>Зураг</label>
            <div class="ui segment">
                <a class="upload-browse">
                    <i class="image icon"></i>
                </a>
                <div class="upload-zone"></div>
                <input type="hidden" name="image">
                <input type="file" name="photo" style="display: none">
            </div>
        </div>
		<div class="field">
			<button class="ui button disabled primary" type="submit">Хадгалах</button>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.upload-browse').click(function() {
	        $(this).siblings('input[type=file]').click();
	    });
	    $('input[type=file]').change(function(){
	        var segment = $(this).closest('.segment');
	        var container = $(this).siblings('.upload-zone');
	        segment.addClass('loading disabled');
	        $.ajax({
	            type: 'POST',
	            url: '<?php echo e(url("profile/information/photo")); ?>',    
	            data: new FormData($(this).closest('form')[0]),
	            contentType: false,
	            processData: false,
	            context: this,
	        }).done(function(data) {
	            $('input[name=image]').val(data.image);
	            $(segment).removeClass('loading disabled');
	            $(this).val('');
	            $(container).empty();
	            $('<div class="upload-zone-item"><img class="ui rounded image" src="<?php echo e(asset("/")); ?>' + data.image + '"></div>').appendTo(container).transition('scale in');
	            $('.ui.form').find('button').removeClass('disabled');
	        }).fail(function() {
	            $(segment).removeClass('loading disabled');
	            $(this).val('');
	            $('<div class="ui warning message">Алдаа гарлаа</div>').appendTo(segment);

	        });
	    });
		$('.ui.form').form({
		    inline : true,
		    fields: {
		        title: {
		            identifier: 'title',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Гарчиг оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        },
		        title_en: {
		            identifier: 'title_en',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Гарчиг оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        },
		        subtitle: {
		            identifier: 'subtitle',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Дэд гарчиг оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        },
		        subtitle_en: {
		            identifier: 'subtitle_en',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Дэд гарчиг оруулна уу'
		                },
		                {
		                    type   : 'maxLength[191]',
		                    prompt : 'Хэтэрхий олон тэмдэгт оруулсан байана'
		                }
		            ]
		        }
		    },
		    onSuccess: function() {
		    	$('.ui.form button').addClass('loading disabled');
		    }
		});
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>