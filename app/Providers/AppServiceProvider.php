<?php

namespace App\Providers;

use App\Faker\CityProvider;
use App\Faker\ZoneProvider;
use App\Faker\CountryProvider;
use App\Faker\DoctorTitleProvider;
use App\Faker\SpecialityProvider;
use App\Repository\DoctorTitleRepository;
use App\Repository\Interfaces\DoctorTitleInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(DoctorTitleInterface::class, DoctorTitleRepository::class);


        Response::macro('success', function($data, $message = "Success", $status = 200)
        {
            return response()->json([
                "success" => true,
                "message" => $message,
                "data" => $data
            ], $status);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        fake()->addProvider(new DoctorTitleProvider(fake()));
        fake()->addProvider(new CountryProvider(fake()));
        fake()->addProvider(new CityProvider(fake()));
        fake()->addProvider(new ZoneProvider(fake()));
        fake()->addProvider(new SpecialityProvider(fake()));
    }
}
