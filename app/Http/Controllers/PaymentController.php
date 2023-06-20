<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createtransaction(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.escrow-sandbox.com/2017-09-01/transaction',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERPWD => env('CURLOPT_USERPWD'),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode(
                array(
                    'parties' => array(
                        //first array of buyer 
                        array(
                            'role' => 'buyer',
                            'customer' => 'belfirmesalaheddine@gmail.com',
                        ),
                        //scond arry of seller 
                        array(
                            'role' => 'seller',
                            'customer' => 'belfirmesalah@gmail.com',
                        ),
                    ),
                    'currency' => 'usd',
                    'description' => 'salah is seller ',
                    'items' => array(
                        array(
                            'title' => 'new transrtion',
                            'description' => 'salah seller',
                            'type' => 'general_merchandise',
                            'inspection_period' => 259200,
                            'quantity' => 2,
                            'schedule' => array(
                                array(
                                    'amount' => 1.0,
                                    'payer_customer' => 'belfirmesalaheddine@gmail.com',
                                    'beneficiary_customer' => 'belfirmesalah@gmail.com',

                                )
                            )
                        )
                    )
                )
            )
        ));

        $output = curl_exec($curl);
        echo $output;
        curl_close($curl);
    }

    public function transaction_details(Request $request)
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.escrow.com/2017-09-01/transaction/6170064',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERPWD => 'belfirmesalaheddine@gmail.com:SALah123@2001',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $output = curl_exec($curl);
        echo $output;
        curl_close($curl);


        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.escrow.com/2017-09-01/transaction/reference/6170064',
        //     CURLOPT_RETURNTRANSFER => 1,
        //     CURLOPT_USERPWD => env(' CURLOPT_USERPWD'),
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/json'
        //     ),
        // ));
 
        // $output = curl_exec($curl);
        // echo $output;
        // curl_close($curl);
    }
}
