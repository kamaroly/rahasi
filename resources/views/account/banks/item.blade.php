<tr>
	<td>{{ $bank->bank_country}}</td>
	<td>{{ $bank->currency }}</td>
	<td>{{ $bank->routing_number }}</td>
	<td>{{ $bank->account_number }}</td>
	<td>
		<a href="{{ route('account.bank.edit',$bank->id) }}" onclick="modal(this,28)" ><i class="edit blue icon"></i></a>
		<a href="{{ route('account.bank.destroy',$bank->id) }}" onclick="return confirm('{{ trans('general.are_you_sure_you_want_to_delete_this_item') }}')"><i class="cancel red icon"></i></a>	</td>
</tr>