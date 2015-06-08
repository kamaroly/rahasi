{!! Form::open(array('route' => ['account.bank.update',$bank->id],'class'=>'ui form rahasi-form ' )) !!}
	@include('account.banks.form')
{!! Form::close() !!}