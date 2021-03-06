@extends('layouts.profile')

@section('title', 'Захиалга')

@section('content')
<div class="eleven wide column">
	<div class="ui green segment">
		<h4 class="ui header">Захиалгын мэдээлэл</h4>
		<div class="ui divider"></div>
		<table class="ui celled padded table">
			<tbody>
				<tr>
					<td>Захиалагчийн нэр</td>
					<td>{{ json_decode($order->userdata)->name }}</td>
				</tr>
				<tr>
					<td>Захиалагчийн овог</td>
					<td>{{ json_decode($order->userdata)->surname }}</td>
				</tr>
				<tr>
					<td>Захиалагчийн улс</td>
					<td>{{ json_decode($order->userdata)->country }}</td>
				</tr>
				<tr>
					<td>Захиалагчийн и-мэйл</td>
					<td>{{ json_decode($order->userdata)->email }}</td>
				</tr>
				<tr>
					<td>Захиалагчийн утас</td>
					<td>{{ json_decode($order->userdata)->phone_number }}</td>
				</tr>
				<tr>
					<td>Бүртгэлтэй эсэх</td>
					<td>{{ $order->user_id ? 'Тийм' : 'Үгүй' }}</td>
				</tr>
				<tr>
					<td>Буудлын нэр</td>
					<td>{{ $order->hotel_name }}</td>
				</tr>
				<tr>
					<td>Захиалсан өдөр</td>
					<td>{{ date('Y-m-d', strtotime($order->created_at)) }}</td>
				</tr>
				<tr>
					<td>Ирэх өдөр</td>
					<td>{{ $order->startdate }}</td>
				</tr>
				<tr>
					<td>Гарах өдөр</td>
					<td>{{ $order->enddate }}</td>
				</tr>
				@if (unserialize($order->pickup))
					<tr>
						<td>Онгоцны буудлаас тосох</td>
						<td>{{ unserialize($order->pickup)['name'] }}</td>
					</tr>
				@endif
				<tr>
					<td>Хоног</td>
					<td>{{ $order->day }}</td>
				</tr>
				<tr>
					<td>Нийт үнэ</td>
					<td>
						@if ($order->price_dollar)
							{{ number_format($order->price_dollar) }}$
						@else
							{{ number_format($order->price) }}₮
						@endif
					</td>
				</tr>
			</tbody>
		</table>
		<h4 class="ui header">Захиалсан өрөөнүүд</h4>
		<div class="ui divider"></div>
		<table class="ui celled padded table">
			<thead>
				<tr>
					<th>Өрөө</th>
					<th>Өрөөний тоо</th>
					<th>Хүний тоо</th>
					<th>Өрөөний үнэ/хоног</th>
				</tr>
			</thead>
			<tbody>
				@foreach (unserialize($order->rooms) as $room)
					<tr>
						<td>{{ $room['room_name'] }}</td>
						<td>{{ $room['room_number'] }}</td>
						<td>{{ $room['person_number'] }}</td>
						@if ($order->price_dollar)
							<td>{{ number_format($room['room_price']) }}$</td>
						@else
							<td>{{ number_format($room['room_price']) }}₮</td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>
		@if (unserialize($order->pickup))
			@if ($order->flightdata)
				<h4 class="ui header">Нислэгийн мэдээлэл</h4>
				<div class="ui divider"></div>
				<table class="ui celled padded table">
					<thead>
						<tr>
							<th>Ирэх өдөр</th>
							<th>Ирэх цаг</th>
							<th>Нислэгийн дугаар</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ json_decode($order->flightdata)->arrival_date ? json_decode($order->flightdata)->arrival_date : 'Байхгүй' }}</td>
							<td>{{ json_decode($order->flightdata)->arrival_time ? json_decode($order->flightdata)->arrival_time : 'Байхгүй' }}</td>
							<td>{{ json_decode($order->flightdata)->flight_number ? json_decode($order->flightdata)->flight_number : 'Байхгүй' }}</td>
						</tr>
					</tbody>
				</table>
			@endif
		@endif
		<h4 class="ui header">Картын мэдээлэл</h4>
		<div class="ui divider"></div>
		<table class="ui celled padded table">
			<thead>
				<tr>
					<th>Картын дугаар</th>
					<th>Картан дээрх нэр</th>
					<th>Хүчинтэй хугацаа</th>
					<th>CVV код</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ json_decode($order->carddata)->cardnumber }}</td>
					<td>{{ json_decode($order->carddata)->cardname }}</td>
					<td>{{ json_decode($order->carddata)->expirymonth }}/{{ json_decode($order->carddata)->expiryyear }}</td>
					<td>{{ json_decode($order->carddata)->cvv }}</td>
				</tr>
			</tbody>
		</table>
		@if ($order->request)
			<h4 class="ui header">Хүсэлт</h4>
			<p>{{ $order->request }}</p>
		@endif		
		<h4 class="ui header">Статус</h4>
		<div class="ui divider"></div>
		<form id="order-form" class="ui left floated form">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="inline field" id="order-status">
				@if ($order->status == 3)
					<div class="ui left floated red label">Цуцлагдсан</div>
				@else
					<div class="ui slider checkbox">
						<input type="checkbox" name="active" tabindex="0" class="hidden" {{ $order->status == 2 ? 'checked' : '' }}>
						<label class="editable-role">{{ $order->status == 2 ? 'Баталгаажсан' : 'Баталгаажаагүй' }}</label>
					</div>
					<button id="cancel-btn" type="button" class="ui right floated red button{{ $order->status == 1 ? '' : ' disabled' }}">Цуцлах</button>
				@endif
			</div>
		</form><br>
		<div id="message"></div>
	</div>
</div>
@if ($order->status == 1)
	<div id="cancel-modal" class="ui modal">
		<div class="header">Захиалга цуцлах</div>
		<div class="content">
			<p>Та үүнийг цуцлахыг зөвшөөрч байна уу?</p>
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
@endif
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('#cancel-btn').click(function(e) {
			$('#cancel-modal').modal({
				onApprove : function() {
					$('#cancel-btn').addClass('loading disabled');
					$('#cancel-modal').find('form').attr('action', '{{ url("profile/order", $order->id)}}');
					$('#cancel-modal').find('form').submit();
				}
			}).modal('show');
			e.preventDefault();
		});
	    $('input[type=checkbox]').change(function() {
	    	$('.checkbox').addClass('disabled');
		    $.ajax({
				type: "POST",
				url: "{{ url('profile/order', $order->id) }}",
		       	data: $('#order-form').serialize(),
		       	success: function(data) {
	    			$('.checkbox').removeClass('disabled');
					$('.editable-role').html(data.status);
					if (data.status == 'Баталгаажсан') {
						$('#cancel-btn').addClass('disabled');
					}
					else if (data.status == 'Баталгаажаагүй') {
						$('#cancel-btn').removeClass('disabled');
					}
					else if (data.status == 'Цуцлагдсан') {
						$('#order-status').html('<div class="ui left floated red label">Цуцлагдсан</div>');
					}
		   		},
				error: function(data){
	    			$('.checkbox').removeClass('disabled');
					var errors = data.responseJSON;
					var errorhtml = '<div class="ui warning message"><ul>';
			        $.each(errors, function( key, value ) {
			            errorhtml += '<li>' + value[0] + '</li>';
			        });
			        errorhtml += '</div></ul>';
		       		$('#message').html(errorhtml);
				}
			});
	    });
	});
</script>
@endpush