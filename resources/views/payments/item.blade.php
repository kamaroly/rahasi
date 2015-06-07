<tr class="{{ ($payment->status == 'success') ?'':'negative' }}">
	<td>{{ $payment->created_at }}</td>
	<td>{{ $payment->amount }} {{ $payment->currency }} </td>
	<td>{{ $payment->description }}</td>
	<td>{{ $payment->statement_descriptor }}</td>
	<td>{{ $payment->chargeable->brand }}</td>
	<td>{{ $payment->status }}</td>
</tr>