<table class="ui table">
	<caption><h2 class="ui header">{!! trans('payments.latest_payments') !!} </h2></caption>
	<thead>
		<tr>
			<th>{!! trans('payments.date') !!}</th>
			<th>{!! trans('payments.amount') !!}</th>
			<th>{!! trans('payments.description') !!}</th>
			<th>{!! trans('payments.statement_desc') !!}</th>
			<th>{!! trans('payments.source') !!}</th>
			<th>{!! trans('payments.status') !!}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($payments as $payment)
		<tr class="{{ ($payment->status == 'success') ?'':'negative' }}">
			<td>{{ $payment->created_at }}</td>
			<td>{{ $payment->amount }} {{ $payment->currency }} </td>
			<td>{{ $payment->description }}</td>
			<td>{{ $payment->statement_descriptor }}</td>
			<td>{{ $payment->chargeable->brand }}</td>
			<td>{{ $payment->status }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@section('js')
<script type="text/javascript">
<!--
 $('.ui.accordion')
  .accordion();

//-->
</script>
@stop