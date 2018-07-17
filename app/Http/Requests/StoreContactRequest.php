<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			//'contact.id' => 'nullable|integer',
			'contact.first_name' => 'required',
			'contact.last_name' => 'required',
			'contact.email' => 'required|email',
			'contact.phone_prefix' => 'nullable|string|max:4',
			'contact.phone' => 'nullable|string|max:20',
			'contact.street_num' => 'required_with:contact.city|string|max:10',
			'contact.street_address' => 'required_with:contact.city|string|max:150',
			'contact.city' => 'sometimes|string|max:120',
			'contact.postcode' => 'required_with:contact.city|string|max:10',
			'contact.state_code' => 'required_with:contact.city|string|size:3',
			'contact.country_code' => 'required_with:contact.city|string|size:2',
		];
	}
}
