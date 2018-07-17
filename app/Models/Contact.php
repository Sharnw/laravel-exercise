<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $appends = ['formatted_phone', 'display_name'];
    protected $fillable = [
    	'first_name', 'last_name', 'email', 'phone_prefix', 'phone',
    	'street_num', 'street_address', 'city', 'postcode', 'state_code', 'country_code',
    ];

   	// custom define front-end safe fields (in this case all is safe)
    public function toArray() {
    	return [
    		'id' => $this->id,
    		'display_name' => $this->display_name,
    		'first_name' => $this->first_name,
    		'last_name' => $this->last_name,
    		'email' => $this->email,
    		'phone_prefix' => $this->phone,
    		'phone' => $this->phone,
    		'formatted_phone' => $this->formatted_phone,
    		'street_num' => $this->street_num,
    		'street_address' => $this->street_address,
    		'city' => $this->city,
    		'postcode' => $this->postcode,
    		'state_code' => $this->state_code,
    		'country_code' => $this->country_code,
    	];
    }

    // dynamic attributes
    public function getFormattedPhoneAttribute() {
    	return $this->phone_prefix.$this->phone;
    }

    public function getDisplayNameAttribute() {
    	return "{$this->first_name} {$this->last_name}";
    }

}
