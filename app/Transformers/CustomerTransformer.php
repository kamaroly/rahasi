<?php namespace Rahasi\Transformers;

class CustomerTransformer {
	public function transform($customer) {

		return ['email' => $customer->email,
			'description' => $customer->description,
			'livemode' => (bool) $customer->livemode,
			'registered' => $customer->created_at,
		];
	}
}