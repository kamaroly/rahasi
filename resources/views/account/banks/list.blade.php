@extends('account.index')

@section('title')
{!! trans('account.api') !!}
@stop

@section('account-body')

    <a class="ui left labeled icon green button no-data-button" href="{{ route('account.banks.create') }}" onclick="modal(this,38)">
  <i class="plus icon"></i>
  {{ trans('account.transfers.add') }}
  </a>

  <table class="ui table">
  	 <thead>
  	 	<tr>
  	 		<th>{{ trans('bank.country') }}</th>
  	 		<th>{{ trans('bank.currency') }}</th>
  	 		<th>{{ trans('bank.routing_number') }}</th>
  	 		<th>{{ trans('bank.account_number') }}</th>
  	 	</tr>
   	 </thead>
 <tbody>
 	@each ('account.banks.item', $banks, 'bank', 'account.banks.no-items')
 </tbody>
  </table>


@stop
