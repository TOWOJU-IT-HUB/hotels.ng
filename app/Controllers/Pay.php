<?php

namespace App\Controllers;

class Pay extends BaseController
{
    public function index($payment_id = 28)
    {
        #--------------------------------------------------------
        #   grab the payment informations and display 
        #   the inoice page after a successful payment
        #   on paypal @params $hotel_id.
        #--------------------------------------------------------
        
        $payment_id = $inv_id = 26;
		$info = $this->orders->find($inv_id);
		$hotel = $this->hotels->where('hotel_id', $info['hotel_id'])->first();
		$total = $hotel['min_total_price'] - $info['total_paid'];
		$portion = 10;
		$percentage = ($portion / 100) * $total; // 20
		$amount = base64_encode($percentage);
		$final_price = round(convertedCurrency($percentage, COUNTRY_CURRENCY, PAYPAL_CURRENCY), 2);
		
		$data = [
			'info'	=>	$info,
			'hotel'	=>	$hotel,
			'_id'	=>	$inv_id,
			'inv_id' => $inv_id,
			'amount' => $percentage,
			'final_price' => $final_price
		];
		
		return view('inv', $data);
    }
}