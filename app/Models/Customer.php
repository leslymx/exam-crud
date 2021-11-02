<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $code
 * @property $business_name
 * @property $customer_name
 * @property $type_currency
 * @property $country
 * @property $state
 * @property $city
 * @property $phone_number
 * @property $email
 * @property $is_active
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'code' => 'required',
		'business_name' => 'required',
		'customer_name' => 'required',
		'type_currency' => 'required',
		'country' => 'required',
		'state' => 'required',
		'city' => 'required',
		'phone_number' => 'required',
		'email' => 'required',
		'is_active' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code','business_name','customer_name','type_currency','country','state','city','phone_number','email','is_active'];



}
