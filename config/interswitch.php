<?php

return [

    /***************************************************
    TEST/SANDBOX ENV true or false
    *****************************************************/

    'test' => true ,

    'product_id' =>'6205',

    'pay_item_id' => '101',


    'mac_key' => 'D3D1D05AFE42AD50818167EAC73C109168A0F108F32645C8B59E897FA930DA44F9230910DAC9E20641823799A107A02068F7BC0F4CC41D2952E249552255710F',

    //live url
    'live_url' => 'https://webpay.interswitchng.com/paydirect/pay',

    //live query url, to return the json

    'live_query_url' => 'https://webpay.interswitchng.com/paydirect/api/v1/gettransaction.json',

];
