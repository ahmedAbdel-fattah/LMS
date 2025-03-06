<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SmtpSetting;
use Config;
use App\Models\CarouselItem;
use Illuminate\Support\Facades\View;
use App\Models\Feature;
use App\Models\AboutArea;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       if (\Schema::hasTable('smtp_settings')) {
           $smtpsetting = SmtpSetting::first();

           if ($smtpsetting) {
           $data = [
            'driver' => $smtpsetting->mailer,
            'host' => $smtpsetting->host,
            'port' => $smtpsetting->port,
            'username' => $smtpsetting->username,
            'password' => $smtpsetting->password,
            'encryption' => $smtpsetting->encryption,
            'from' => [
                'address' => $smtpsetting->from_address,
                'name' => 'Easycourselms'
            ]

            ];
            Config::set('mail',$data);
           }
       } // end if


       $carouselItems = CarouselItem::all();
       View::share('carouselItems', $carouselItems);

               // Fetch all features and share them globally with all views
               View::share('features', Feature::all());

                       // Share the about section data globally
        View::share('about', value: AboutArea::first());




    }
}
