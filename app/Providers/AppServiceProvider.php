<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $properties = Curl::to('https://cex.io/api/last_price/BTC/USD')->get();
        $pro = json_decode($properties, true);
        $value = $pro["lprice"];
        //ETH/USD
        $properties1 = Curl::to('https://cex.io/api/last_price/ETH/USD')->get();
        $pro1 = json_decode($properties1, true);
        $value1 = $pro1["lprice"];
        //XRP/USD
        $properties2 = Curl::to('https://cex.io/api/last_price/XRP/USD')->get();
        $pro2 = json_decode($properties2, true);
        $value2 = $pro2["lprice"];
        //XLM/USD
        $properties3 = Curl::to('https://cex.io/api/last_price/XLM/USD')->get();
        $pro3 = json_decode($properties3, true);
        $value3 = $pro3["lprice"];
        //SHARING TO ALL PAGES
        $data = array(
            'btc' => $value,
            'eth' => $value1,
            'xrp' => $value2,
            'xlm' => $value3,
        );
        view()->share('data', $data);
        Schema::defaultStringLength(191);
        $valyuta = 1.8;
        view()->share('valyuta', $valyuta);

        
    }
}
