<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded  = array('id');


    public function saveClient($requestArr){
    	$saveArr = array();
    	$saveArr['first_name'] = $requestArr['first_name'];
    	$saveArr['last_name'] = $requestArr['last_name'];
    	$saveArr['email'] = $requestArr['email'];
    	$saveArr['cc_emails'] = $requestArr['cc_emails'];
    	$saveArr['job_position'] = $requestArr['job_position'];
    	$saveArr['company'] = $requestArr['company'];
    	$saveArr['primary_phone_number'] = $requestArr['primary_phone_number'];
    	$saveArr['secondary_phone_number'] = $requestArr['secondary_phone_number'];
    	$saveArr['administrative_information'] = $requestArr['administrative_information'];
    	$saveArr['customer_source'] = $requestArr['customer_source'];
    	$saveArr['sales_discount'] = $requestArr['sales_discount'];
    	$saveArr['rental_discount'] = $requestArr['rental_discount'];
    	$saveArr['account_information'] = $requestArr['account_information'];
    	$saveArr['credit_limit'] = $requestArr['credit_limit'];
    	$saveArr['reservation_payment_percentage'] = $requestArr['reservation_payment_percentage'];
    	$saveArr['send_out_payment_percentage'] = $requestArr['send_out_payment_percentage'];
    	$saveArr['location'] = $requestArr['location'];

    	return $this->create($saveArr);
    }
}
