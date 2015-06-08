@extends('layouts.default')
@section('title')
  {{Lang::get('payments.payments')}}
@stop
@section('content')

<a class="ui left labeled icon black button no-data-button"  href="{{route('payments.create')}}" onClick="modal(this,28)">
  <i class="plus icon"></i>
      {{Lang::get('payments.create_new_payment')}}
  </a>

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
		@each ('payments.item', $payments, 'payment', 'payments.no-items')
	</tbody>
</table>

@stop


@section('js')
<script type="text/javascript">
<!--
 $('.ui.accordion')
  .accordion();

//-->
</script>
@stop