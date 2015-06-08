<?php namespace Rahasi\Transformers;

class ChargeTransformer {
	public function transform($customer) {
		return ['id' => $customer->id,
			'status' => $customer->status,
			'livemode' => (bool) $customer->livemode,
			'currency' => $customer->currency,
			'chargeable' => $customer->chargeable->toArray(),
			'amount' => $customer->amount,
			'description' => $customer->description,
			'statement_description' => $customer->statement_desc,
		];
	}
}