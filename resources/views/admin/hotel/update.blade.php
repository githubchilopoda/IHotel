@extends('layouts.profile')

@section('title', 'Буудал засах')

@section('content')
<div class="eleven wide column">
	<form class="ui form green segment" action="{{ url('profile/hotel', $hotel->id) }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<h4 class="ui header">Буудал засах</h4>
		<div class="ui divider"></div>
	    <div class="required field">
	    	<label>Эрэмбэ</label>
			<input type="text" name="priority" value="{{ $hotel->priority }}">
		</div>
	    <div class="required field">
	    	<label>Идэвхитэй эсэх</label>
			<select class="ui dropdown" name="published">
				<option value="1" {{ $hotel->published ? 'selected' : '' }}>Тийм</option>
				<option value="0" {{ $hotel->published ? '' : 'selected' }}>Үгүй</option>
			</select>
		</div>
	    <div class="required field">
	    	<label>Хямдралтай эсэх</label>
			<select class="ui dropdown" name="sale">
				<option value="1" {{ $hotel->sale ? 'selected' : '' }}>Тийм</option>
				<option value="0" {{ $hotel->sale ? '' : 'selected' }}>Үгүй</option>
			</select>
		</div>
		<div class="field">
			<button class="ui button primary" type="submit">Хадгалах</button>
		</div>
	</form>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.ui.form').form({
		    inline: true,
		    fields: {
		        priority: {
		            identifier: 'priority',
		            rules: [
		                {
			                type   : 'empty',
			                prompt : 'Эрэмбэ оруулна уу'
		                },
		                {
			                type   : 'integer',
			                prompt : 'Эрэмбэ зөвхөн тоо оруулна уу'
		                },
		                {
		                    type   : 'maxLength[10]',
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
@endpush