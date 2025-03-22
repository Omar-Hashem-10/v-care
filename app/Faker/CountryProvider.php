<?php

namespace App\Faker;

use Faker\Provider\Base;

class CountryProvider extends Base {
    protected static $usedCountries = [];


    protected static $countries = [
        'United States', 'Canada', 'United Kingdom', 'Germany', 'France',
        'Italy', 'Spain', 'Egypt', 'Sweden', 'Norway', 'Denmark',
        'Finland', 'Australia', 'New Zealand', 'Japan', 'China', 'India',
        'Brazil', 'Mexico', 'South Africa', 'Argentina', 'Russia'
    ];

    public function uniqueCountry()
    {
        $available = array_filter(static::$countries, function ($country) {
            return !in_array($country, static::$usedCountries);
        });

        if (empty($available)) {
            throw new \Exception("No unique countries left.");
        }

        $country = static::randomElement($available);

        static::$usedCountries[] = $country;

        return $country;
    }
}
