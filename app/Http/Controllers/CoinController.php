<?php

namespace App\Http\Controllers;

// use App\Model\Coin;
use App\Models\Coin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoinController extends Controller
{
    public function show($coin)
    {
        $response = Http::get('https://api.coingecko.com/api/v3/simple/price?ids='.$coin.'&vs_currencies=usd');
        
        if(isset(($response))){
            Coin::updateOrCreate(
                ['coin' => $coin],
                ['currency' => 'usd',
                'price' => $response[$coin]['usd'] ],
            );
                $jsonData = $response->json();
                return $jsonData;
        }else{
            $coinData = Coin::where('coin', $coin)->first();
            $jsonData = $coinData->json();
            return $jsonData;
        }
        
        // return $user;

        
    }
}
