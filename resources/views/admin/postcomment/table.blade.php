@extends('layouts.profile')

@section('title', 'Нийтлэлийн сэтгэгдэл')

@section('content')
<div class="eleven wide column">
	<div class="ui green segment">
		<h4 class="ui header">Нийтлэлийн сэтгэгдэл</h4>
		<div class="ui divider"></div>
	    <form id="search-form" class="ui form" action="{{ url('profile/postcomment/search') }}" method="POST">
    		{{ csrf_field() }}
			<div class="field">
				<div class="ui fluid left icon input">
					<input type="text" name="search" placeholder="Хайх">
					<i class="search icon"></i>
				</div>
				<div class="results"></div>
			</div>
			<button class="ui red right floated button">Хайх</button>
		</form><br><br><br>
		<div id="result">
			<table class="ui stackable selectable table">
				<thead>
					<tr>
						<th>#</th>
						<th>Нэр</th>
						<th>Нийтлэлийн гарчиг</th>
						<th>Агуулга</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($comments as $comment)
						<tr>
							<td>{{ $comment->id }}</td>
							<td>{{ $comment->user->name }}</td>
							<td>
								<a href="{{ url('post', $comment->post->id) }}">{{ $comment->post->title }}</a>
							</td>
							<td>{{ $comment->content }}</td>
							<td>
								<a class="ui icon button open-DeleteModal" data-id="{{ $comment->id }}">
									<i class="trash icon"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $comments->links() }}
		</div>
	</div>
</div>
<div id="delete-modal" class="ui modal">
	<div class="header">Устгах</div>
	<div class="content">
		<p>Та үүнийг устгахыг зөвшөөрч байна уу?</p>
	</div>
	<div class="actions">
		<a class="ui red negative button">Үгүй</a>
		<a class="ui positive right labeled icon button">
			<i class="checkmark icon"></i>Тийм
		</a>
		<form action="" method="POST">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
		</form>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
	    $('#search-form').submit(function(e) {
			$('#search-form button').addClass('loading disabled');
	        $.ajax({
	            url: $(this).attr('action'),
	            type: $(this).attr('method'),
	            data: $(this).serialize(),
	        }).done(function(data) {
				$('#search-form button').removeClass('loading disabled');
	            $('#result').html(data);
	        }).fail(function() {
				$('#search-form button').removeClass('loading disabled');
	            $('#result').html('<div class="ui warning message">Алдаа гарлаа</div>');
	        });
	        e.preventDefault(); 
	    });
	    $('#result').on('click', '.open-DeleteModal', function() {
			var id = $(this).data('id');
			$('#delete-modal').modal({
				onApprove : function() {
					$('#delete-modal').find('form').attr('action', "{{ url('profile/postcomment')}}/" + id);
					$('#delete-modal').find('form').submit();
				}
			}).modal('show');
		});
	});
</script>
@endpush