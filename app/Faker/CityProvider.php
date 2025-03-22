<?php

namespace App\Faker;

use App\Models\Country;
use Faker\Provider\Base;

class CityProvider extends Base {
    protected static $usedCities = [];

    protected static $cities = [
        'United States' => ['New York', 'Los Angeles', 'Chicago', 'Houston', 'Miami'],
        'Canada' => ['Toronto', 'Vancouver', 'Montreal', 'Calgary', 'Ottawa'],
        'United Kingdom' => ['London', 'Manchester', 'Birmingham', 'Liverpool', 'Glasgow'],
        'Germany' => ['Berlin', 'Munich', 'Hamburg', 'Frankfurt', 'Cologne'],
        'France' => ['Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice'],
        'Italy' => ['Rome', 'Milan', 'Naples', 'Turin', 'Florence'],
        'Spain' => ['Madrid', 'Barcelona', 'Valencia', 'Seville', 'Bilbao'],
        'Egypt' => ['Cairo', 'Alexandria', 'Giza', 'Sharm El-Sheikh', 'Luxor'],
        'Sweden' => ['Stockholm', 'Gothenburg', 'Malmö', 'Uppsala', 'Västerås'],
        'Norway' => ['Oslo', 'Bergen', 'Trondheim', 'Stavanger', 'Drammen'],
        'Denmark' => ['Copenhagen', 'Aarhus', 'Odense', 'Aalborg', 'Esbjerg'],
        'Finland' => ['Helsinki', 'Espoo', 'Tampere', 'Vantaa', 'Oulu'],
        'Australia' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide'],
        'New Zealand' => ['Auckland', 'Wellington', 'Christchurch', 'Hamilton', 'Dunedin'],
        'Japan' => ['Tokyo', 'Osaka', 'Kyoto', 'Nagoya', 'Sapporo'],
        'China' => ['Beijing', 'Shanghai', 'Guangzhou', 'Shenzhen', 'Chengdu'],
        'India' => ['Delhi', 'Mumbai', 'Bangalore', 'Chennai', 'Kolkata'],
        'Brazil' => ['São Paulo', 'Rio de Janeiro', 'Brasília', 'Salvador', 'Fortaleza'],
        'Mexico' => ['Mexico City', 'Guadalajara', 'Monterrey', 'Puebla', 'Tijuana'],
        'South Africa' => ['Johannesburg', 'Cape Town', 'Durban', 'Pretoria', 'Port Elizabeth'],
        'Argentina' => ['Buenos Aires', 'Córdoba', 'Rosario', 'Mendoza', 'La Plata'],
        'Russia' => ['Moscow', 'Saint Petersburg', 'Novosibirsk', 'Yekaterinburg', 'Kazan']
    ];

    public function uniqueCity()
    {
        $availableCities = [];

        foreach (static::$cities as $country => $cities) {
            foreach ($cities as $city) {
                if (!in_array($city, static::$usedCities)) {
                    $availableCities[] = ['city' => $city, 'country' => $country];
                }
            }
        }

        if (empty($availableCities)) {
            throw new \Exception("No unique cities left.");
        }

        $selected = static::randomElement($availableCities);
        static::$usedCities[] = $selected['city'];

        $country = Country::where('name', $selected['country'])->first();

        return [
            'name' => $selected['city'],
            'country_id' => $country ? $country->id : null,
        ];
    }
}
